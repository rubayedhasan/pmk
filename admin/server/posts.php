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


// start mysql data transaction
mysqli_begin_transaction($dbConnection);

try {

    $post_id = clean($dbConnection, $_POST["post_id"] ?? "");
    $post_title = clean($dbConnection, $_POST["post_title"] ?? "");
    $post_main_category = clean($dbConnection, $_POST["post_main_category"] ?? "");
    $post_subcategory_main = clean($dbConnection, $_POST["post_subcategory_main"] ?? "");
    $post_description = clean($dbConnection, $_POST["post_description"] ?? "");
    $author_name = clean($dbConnection, $_POST["author_name"] ?? "");

    // query 
    $post_query = $dbConnection->prepare("INSERT INTO posts (
    post_customid,
    post_cat,
    post_subcat,
    post_title,
    post_description,
    post_authorname
) VALUES (?,?,?,?,?,?)");
    $post_query->bind_param(
        "siisss",
        $post_id,
        $post_main_category,
        $post_subcategory_main,
        $post_title,
        $post_description,
        $author_name
    );

    $outcome_post_query = $post_query->execute();

    if (!$outcome_post_query) {
        throw new Exception("ERROR: " . $post_query->error);
    }



    // validate::if all ok the submit the data to database 
    mysqli_commit($dbConnection);

    // return success json message
    echo json_encode([
        "success" => true,
        "message" => "The news post has been published successfully and is now available to readers."
    ]);
} catch (Exception $err) {
    // rollback all data if failed to insert any data to database 
    mysqli_rollback($dbConnection);

    error_log("Error on upload the content: " . $err->getMessage());
    echo json_encode([
        "success" => false,
        "message" => $err->getMessage()
    ]);
}


// close the database connection 
mysqli_close($dbConnection);
