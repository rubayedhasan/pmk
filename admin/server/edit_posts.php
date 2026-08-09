<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;


header("Content-Type: application/json");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


// only accept post method request 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(
        [
            "success" => false,
            "message" => "Invalid Request Method",
        ]
    );
    exit();
}


// HELPER:: sanitize text input 
function clean($connection, $inputValue)
{
    return mysqli_real_escape_string($connection, trim($inputValue ?? ""));
}

// HELPER:: sanitize numeric/decimal input 
function cleanNumber($connection, $inputValue)
{
    $inputValue = trim($inputValue ?? '');
    return ($inputValue === "") ? 0 : mysqli_real_escape_string($connection, $inputValue);
}

// HELPER:: sanitize null value 
function nullOrValue($val)
{
    return ($val === "" || $val === null) ? null : $val;
}


// HELPER:: turn a category name into a clean, filename-safe word
// example: "Field Operations" becomes "field-operations"
function slugify($string)
{
    $string = trim($string);
    $string = preg_replace('/[^a-zA-Z0-9]+/', '-', $string);
    return strtolower(trim($string, '-'));
}


// start mysql data transaction
mysqli_begin_transaction($dbConnection);

// this array remembers every image file we save to disk during this request,
// so if something fails halfway through, we can delete them again and not
// leave "orphan" files lying around with no matching database row
$movedFiles = [];

try {

    $post_id = clean($dbConnection, $_POST["post_id"] ?? "");
    $post_title = clean($dbConnection, $_POST["post_title"] ?? "");
    $post_main_category = clean($dbConnection, $_POST["post_main_category"] ?? "");
    $post_subcategory_main = clean($dbConnection, $_POST["post_subcategory_main"] ?? "");
    $post_description = trim($_POST["post_description"]) ?? "";
    $author_name = clean($dbConnection, $_POST["author_name"] ?? "");

    // query 
    $post_query = $dbConnection->prepare("UPDATE posts 
    SET post_cat = ?,
    post_subcat = ?,
    post_title = ?,
    post_description = ?,
    post_authorname = ?
    WHERE post_customid = ?");
    $post_query->bind_param(
        "iissss",
        $post_main_category,
        $post_subcategory_main,
        $post_title,
        $post_description,
        $author_name,
        $post_id
    );

    $outcome_post_query = $post_query->execute();

    if (!$outcome_post_query) {
        throw new Exception("ERROR: " . $post_query->error);
    }

    // ================================================================
    // STEP 2 :: IMAGE EDITING
    // ================================================================

    // Upload directory
    $uploadDir = "../assets/uploads/posts/";

    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) {
            throw new Exception("Unable to create image upload directory.");
        }
    }


    // Allowed image extensions
    $allowedExtensions = [
        "jpg",
        "jpeg",
        "png",
        "gif",
        "webp"
    ];


    // Allowed MIME types
    $allowedMimeTypes = [
        "image/jpeg",
        "image/png",
        "image/gif",
        "image/webp"
    ];


    // Maximum file size
    $fileMaxSize = 5 * 1024 * 1024;


    // Files created during this request.
    // If anything fails, these can be removed.
    $movedFiles = [];


    // Files that should be deleted AFTER successful DB commit.
    $filesToDelete = [];


    // ================================================================
    // HELPER :: generate image filename
    // ================================================================

    function generateImageFileName(
        $dbConnection,
        $postId,
        $imageCategory,
        $extension
    ) {

        $categorySlug = slugify($imageCategory);


        // Get current number for this post/category
        $countQuery = $dbConnection->prepare(
            "SELECT COUNT(*) AS total
         FROM post_image
         WHERE postcust_id = ?
         AND postimage_cat = ?"
        );

        $countQuery->bind_param(
            "ss",
            $postId,
            $imageCategory
        );

        $countQuery->execute();

        $countResult =
            $countQuery->get_result()->fetch_assoc();

        $sequence =
            ((int)$countResult["total"]) + 1;


        // Avoid filename collision
        do {

            $sequenceNumber =
                str_pad(
                    $sequence,
                    5,
                    "0",
                    STR_PAD_LEFT
                );

            $fileName =
                $postId .
                "_" .
                $categorySlug .
                "_" .
                $sequenceNumber .
                "." .
                $extension;


            $existingFileQuery = $dbConnection->prepare(
                "SELECT post_imgid
             FROM post_image
             WHERE post_image = ?
             LIMIT 1"
            );

            $existingFileQuery->bind_param(
                "s",
                $fileName
            );

            $existingFileQuery->execute();

            $exists =
                $existingFileQuery->get_result()->num_rows > 0;


            if ($exists) {
                $sequence++;
            }
        } while ($exists);


        return $fileName;
    }


    // ================================================================
    // STEP 2A :: DELETE EXISTING IMAGES
    // ================================================================

    $deletedImageIds =
        $_POST["deleted_image_ids"] ?? [];


    if (!is_array($deletedImageIds)) {
        $deletedImageIds = [];
    }


    $deleteImageQuery = $dbConnection->prepare(
        "SELECT post_image
     FROM post_image
     WHERE post_imgid = ?
     AND postcust_id = ?"
    );


    $deleteImageDbQuery = $dbConnection->prepare(
        "DELETE FROM post_image
     WHERE post_imgid = ?
     AND postcust_id = ?"
    );


    foreach ($deletedImageIds as $deletedImageId) {

        $deletedImageId =
            (int)$deletedImageId;


        if ($deletedImageId <= 0) {
            continue;
        }


        // Get image information first

        $deleteImageQuery->bind_param(
            "is",
            $deletedImageId,
            $post_id
        );

        $deleteImageQuery->execute();


        $oldImage =
            $deleteImageQuery
            ->get_result()
            ->fetch_assoc();


        if (!$oldImage) {
            continue;
        }


        // Delete DB record

        $deleteImageDbQuery->bind_param(
            "is",
            $deletedImageId,
            $post_id
        );

        $deleteImageDbQuery->execute();


        // Remember physical file.
        // It will be removed only AFTER COMMIT.
        if (!empty($oldImage["post_image"])) {

            $oldPhysicalPath =
                $uploadDir .
                basename($oldImage["post_image"]);

            if (file_exists($oldPhysicalPath)) {
                $filesToDelete[] = $oldPhysicalPath;
            }
        }
    }


    // ================================================================
    // STEP 2B :: PROCESS CURRENT IMAGE ROWS
    // ================================================================

    $postImages =
        $_POST["post_images"] ?? [];


    if (!is_array($postImages)) {
        $postImages = [];
    }


    // INSERT query

    $imageInsertQuery = $dbConnection->prepare(
        "INSERT INTO post_image
    (
        postcust_id,
        post_image,
        postimage_cat,
        post_title
    )
    VALUES (?, ?, ?, ?)"
    );


    // UPDATE query for category/title only

    $imageUpdateQuery = $dbConnection->prepare(
        "UPDATE post_image
     SET postimage_cat = ?,
         post_title = ?
     WHERE post_imgid = ?
     AND postcust_id = ?"
    );


    // UPDATE query for replacement image

    $imageReplaceQuery = $dbConnection->prepare(
        "UPDATE post_image
     SET post_image = ?,
         postimage_cat = ?,
         post_title = ?
     WHERE post_imgid = ?
     AND postcust_id = ?"
    );


    // Get old image information

    $getExistingImageQuery = $dbConnection->prepare(
        "SELECT post_image, postimage_cat
     FROM post_image
     WHERE post_imgid = ?
     AND postcust_id = ?
     LIMIT 1"
    );


    foreach ($postImages as $idx => $imageRow) {

        $rowNumber = ((int)$idx) + 1;


        $imageId =
            (int)($imageRow["image_id"] ?? 0);


        $imageCategory =
            clean(
                $dbConnection,
                $imageRow["image_category"] ?? ""
            );


        // File exists for this row?
        $hasNewFile =
            isset($_FILES["post_images"]["tmp_name"][$idx]["image_path"])
            &&
            $_FILES["post_images"]["error"][$idx]["image_path"]
            === UPLOAD_ERR_OK;


        // ==========================================================
        // EMPTY NEW ROW
        // ==========================================================

        if ($imageId <= 0 && !$hasNewFile && $imageCategory === "") {
            continue;
        }


        // ==========================================================
        // EXISTING IMAGE
        // ==========================================================

        if ($imageId > 0) {


            // Verify image belongs to this post

            $getExistingImageQuery->bind_param(
                "is",
                $imageId,
                $post_id
            );

            $getExistingImageQuery->execute();


            $existingImage =
                $getExistingImageQuery
                ->get_result()
                ->fetch_assoc();


            if (!$existingImage) {

                throw new Exception(
                    "Image Row {$rowNumber}: existing image was not found."
                );
            }


            // ======================================================
            // EXISTING IMAGE + NO NEW FILE
            // ======================================================
            //
            // Only update its category/title.
            //

            if (!$hasNewFile) {

                if ($imageCategory === "") {

                    throw new Exception(
                        "Image Row {$rowNumber}: image category is required."
                    );
                }


                $imageUpdateQuery->bind_param(
                    "ssis",
                    $imageCategory,
                    $post_title,
                    $imageId,
                    $post_id
                );


                $imageUpdateQuery->execute();


                continue;
            }


            // ======================================================
            // EXISTING IMAGE + NEW FILE
            // ======================================================
            //
            // This means the user is replacing the old image.
            //


            $tmpPath =
                $_FILES["post_images"]["tmp_name"][$idx]["image_path"];

            $fileSize =
                $_FILES["post_images"]["size"][$idx]["image_path"];

            $originalName =
                $_FILES["post_images"]["name"][$idx]["image_path"];


            // Validate size

            if ($fileSize > $fileMaxSize) {

                throw new Exception(
                    "Image Row {$rowNumber}: file exceeds 5MB."
                );
            }


            // Validate real image

            $mimeType =
                mime_content_type($tmpPath);


            if (!in_array(
                $mimeType,
                $allowedMimeTypes,
                true
            )) {

                throw new Exception(
                    "Image Row {$rowNumber}: unsupported image type."
                );
            }


            // Get extension from actual MIME type

            $extension =
                strtolower(
                    pathinfo(
                        $originalName,
                        PATHINFO_EXTENSION
                    )
                );


            if (!in_array(
                $extension,
                $allowedExtensions,
                true
            )) {

                throw new Exception(
                    "Image Row {$rowNumber}: invalid image format."
                );
            }


            if ($imageCategory === "") {

                throw new Exception(
                    "Image Row {$rowNumber}: image category is required."
                );
            }


            // Generate filename

            $fileName =
                generateImageFileName(
                    $dbConnection,
                    $post_id,
                    $imageCategory,
                    $extension
                );


            $destination =
                $uploadDir . $fileName;


            // Move replacement file

            if (!move_uploaded_file(
                $tmpPath,
                $destination
            )) {

                throw new Exception(
                    "Image Row {$rowNumber}: failed to save replacement image."
                );
            }


            // Remember newly created file

            $movedFiles[] = $destination;

            // Update database

            $imageReplaceQuery->bind_param(
                "sssis",
                $fileName,
                $imageCategory,
                $post_title,
                $imageId,
                $post_id
            );


            $imageReplaceQuery->execute();


            // Old physical file should be deleted AFTER commit

            if (!empty($existingImage["post_image"])) {

                $oldPhysicalPath =
                    $uploadDir .
                    basename($existingImage["post_image"]);


                if (
                    file_exists($oldPhysicalPath)
                    &&
                    $oldPhysicalPath !== $destination
                ) {

                    $filesToDelete[] =
                        $oldPhysicalPath;
                }
            }


            continue;
        }


        // ==========================================================
        // NEW IMAGE
        // ==========================================================

        if ($imageId <= 0) {

            // A new row must have a file

            if (!$hasNewFile) {

                throw new Exception(
                    "Image Row {$rowNumber}: an image is required."
                );
            }


            if ($imageCategory === "") {

                throw new Exception(
                    "Image Row {$rowNumber}: image category is required."
                );
            }


            $tmpPath =
                $_FILES["post_images"]["tmp_name"][$idx]["image_path"];

            $fileSize =
                $_FILES["post_images"]["size"][$idx]["image_path"];

            $originalName =
                $_FILES["post_images"]["name"][$idx]["image_path"];


            // Validate size

            if ($fileSize > $fileMaxSize) {

                throw new Exception(
                    "Image Row {$rowNumber}: file exceeds 5MB."
                );
            }


            // Validate MIME

            $mimeType =
                mime_content_type($tmpPath);


            if (!in_array(
                $mimeType,
                $allowedMimeTypes,
                true
            )) {

                throw new Exception(
                    "Image Row {$rowNumber}: unsupported image type."
                );
            }


            // Extension

            $extension =
                strtolower(
                    pathinfo(
                        $originalName,
                        PATHINFO_EXTENSION
                    )
                );


            if (!in_array(
                $extension,
                $allowedExtensions,
                true
            )) {

                throw new Exception(
                    "Image Row {$rowNumber}: invalid image format."
                );
            }


            // Generate filename

            $fileName =
                generateImageFileName(
                    $dbConnection,
                    $post_id,
                    $imageCategory,
                    $extension
                );


            $destination =
                $uploadDir . $fileName;


            // Move file

            if (!move_uploaded_file(
                $tmpPath,
                $destination
            )) {

                throw new Exception(
                    "Image Row {$rowNumber}: failed to save image."
                );
            }


            // Remember file

            $movedFiles[] =
                $destination;


            // Insert DB record

            $imageInsertQuery->bind_param(
                "ssss",
                $post_id,
                $fileName,
                $imageCategory,
                $post_title
            );


            $imageInsertQuery->execute();
        }
    }

    // ================================================================
    // COMMIT DATABASE CHANGES
    // ================================================================

    mysqli_commit($dbConnection);


    // ================================================================
    // DELETE OLD PHYSICAL IMAGE FILES
    // ================================================================
    //
    // We only delete them AFTER successful database commit.
    // This prevents accidentally losing the old image if the DB
    // transaction fails.
    //

    foreach ($filesToDelete as $file) {

        if (file_exists($file)) {
            unlink($file);
        }
    }


    // ================================================================
    // SUCCESS
    // ================================================================

    echo json_encode([
        "success" => true,
        "message" => "The news post has been updated successfully and the changes are now available to readers."
    ]);
} catch (Exception $err) {
    // rollback all data if failed to insert any data to database 
    mysqli_rollback($dbConnection);

    foreach ($movedFiles as $file) {

        if (file_exists($file)) {
            unlink($file);
        }
    }

    error_log("Error on upload the content: " . $err->getMessage());
    echo json_encode([
        "success" => false,
        "message" => $err->getMessage()
    ]);
}


// close the database connection 
mysqli_close($dbConnection);
