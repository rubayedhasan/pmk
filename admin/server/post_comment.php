<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if (isset($_POST["commentor_name"]) && !empty($_POST["commentor_name"])) {
    $name = $_POST["commentor_name"];
    $phone = $_POST["commentor_phone"];
    $comment = $_POST["comment_box"];
    $post_id = $_POST["post_id"];


    // QUERY:: INSERT THE COMMENT 
    $inset_comment_query = $dbConnection->prepare("INSERT INTO post_comment (commentor_name, commentor_mobile, comment, post_id) VALUES (?,?,?,? )");
    $inset_comment_query->bind_param(
        "ssss",
        $name,
        $phone,
        $comment,
        $post_id
    );
    $outcome_inset_comment_query = $inset_comment_query->execute();
    if ($outcome_inset_comment_query) {
        header("Location: ../../pages/news_page.php?post_id=$post_id");
    }
}
