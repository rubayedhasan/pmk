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

    // ================================================
    // STEP 2 :: save every image that came with this post
    // ================================================

    // // creating the folder directory 
    // $uploadDir = "../assets/uploads/posts/";
    // if (!is_dir($uploadDir)) {
    //     mkdir($uploadDir, 0755, true);
    // }

    // //validation::  file type and size 
    // $allowedExe = ['jpg', "jpeg", "png", "gif", "webp"];
    // $allowedMimeType = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/webp"];
    // $fileMaxSize = 5 * 1024 * 1024;

    // // this array keeps count of how many images we've already numbered
    // // per category DURING this one form submission, so 2 slider images
    // // sent together don't both try to become "00001"
    // $imageCounters = [];

    // // IMAGE INSERTING QUERY 
    // $image_insert_query = $dbConnection->prepare("INSERT INTO post_image( postcust_id, post_image, image_file_path, postimage_cat, post_title) VALUES (?,?,?,?,?)");


    // // is the image come in popper way 
    // if (isset($_POST["post_images"]) && is_array($_POST["post_images"])) {
    //     foreach ($_POST["post_images"] as $idx => $imageRowData) {
    //         $image_category = clean($dbConnection, $imageRowData["image_category"] ?? "");

    //         // validate:: is the file exist 
    //         $is_file_exist = isset($_FILES["post_images"]["tmp_name"][$idx]["image_path"]) && $_FILES["post_images"]["error"][$idx]["image_path"] === UPLOAD_ERR_OK;

    //         // an empty row (user added it but never filled it in) is skipped, not an error
    //         if ($image_category === "" && !$is_file_exist) {
    //             continue;
    //         }

    //         // but if a category WAS picked, a file is required for that row
    //         if (!$is_file_exist) {
    //             throw new Exception("Image Row" . ((int) $idx + 1) . ": an image is required ");
    //         }

    //         if (!$is_file_exist) {
    //             error_log("Missing file for row {$idx}: " . print_r($_FILES, true));
    //             throw new Exception("Image Row " . ((int) $idx + 1) . ": an image is required.");
    //         }

    //         $image_temp_path = $_FILES["post_images"]["tmp_name"][$idx]["image_path"];
    //         $image_size =  $_FILES["post_images"]["size"][$idx]["image_path"];
    //         $image_name  =  $_FILES["post_images"]["name"][$idx]["image_path"];

    //         // validation:: image max size is 5MB
    //         if ($image_size > $fileMaxSize) {
    //             throw new Exception("Row " . ((int)$idx + 1) . ": file exceeds 5MB.");
    //         }

    //         // validation:: check the extension 
    //         $image_exe = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    //         if (!in_array($image_exe, $allowedExe, true)) {
    //             throw new Exception("Row " . ((int)$idx + 1) . ": invalid picture format. Allowed: JPG, PNG, GIF, WEBP.");
    //         }

    //         // validation:: the file is REALLY an image, not just renamed to look like one
    //         $image_mime_type = mime_content_type($image_temp_path);
    //         if (!in_array($image_mime_type, $allowedMimeType, true)) {
    //             throw new Exception("Row " . ((int)$idx + 1) . ": unsupported image type.");
    //         }

    //         // custom image name to save 
    //         // pattern :: post Custom Id + image category + sequence
    //         $image_category_slug = slugify($image_category);

    //         // first time seeing this category in this request?
    //         // ask the database how many images already exist for this post+category,
    //         // so numbering continues instead of restarting at 1 every time
    //         if (!isset($imageCounters[$image_category_slug])) {
    //             $image_count_query = $dbConnection->prepare("SELECT COUNT(*) AS total FROM post_image WHERE postcust_id = ? AND postimage_cat = ?");
    //             $image_count_query->bind_param(
    //                 "ss",
    //                 $post_id,
    //                 $image_category,
    //             );
    //             $image_count_query->execute();

    //             $image_count_result = $image_count_query->get_result()->fetch_assoc();

    //             $imageCounters[$image_category_slug] = (int) $image_count_result['total'] + 1;
    //         } else {
    //             $imageCounters[$image_category_slug]++;
    //         }

    //         // sequence 
    //         $image_id_sequence = str_pad($imageCounters[$image_category_slug], 5, "0", STR_PAD_LEFT);

    //         $file_name =  $post_id . "_" . $image_category_slug . "_" . $image_id_sequence . "." . $image_exe;
    //         $file_destination = $uploadDir  . $file_name;

    //         // actually move the uploaded file into the folder
    //         if (!move_uploaded_file($image_temp_path, $file_destination)) {
    //             throw new Exception("Row " . ((int)$idx + 1) . ": failed to save the uploaded file.");
    //         }

    //         // remember this file, in case a LATER row fails and we need to undo everything
    //         $movedFiles[] = $file_destination;

    //         // this is the path we save in the database (used later to display the image)
    //         $stored_img_file_path = "../admin/assets/uploads/posts/" . $file_name;


    //         // inser the image to database 
    //         $image_insert_query->bind_param(
    //             "sssss",
    //             $post_id,
    //             $file_name,
    //             $stored_img_file_path,
    //             $image_category,
    //             $post_title
    //         );
    //         $outcome_image_insert_query = $image_insert_query->execute();

    //         if (!$outcome_image_insert_query) {
    //             throw new Exception("Row " . ((int)$idx + 1) . ": " . $image_insert_query->error);
    //         }
    //     }
    // }

    // validate::if all ok the submit the data to database 
    mysqli_commit($dbConnection);

    // return success json message
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
