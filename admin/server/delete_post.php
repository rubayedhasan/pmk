<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;


if (isset($_GET["post_id"])) {
    $post_id = $_GET["post_id"];

    // QUERY:: delete Post 
    $delete_post__query = $dbConnection->prepare("DELETE FROM posts WHERE post_customid = ?");
    $delete_post__query->bind_param(
        "s",
        $post_id
    );
    $outcome_delete_post__query = $delete_post__query->execute();


    // QUERY:: delete Post Image 
    $delete_post_img_query = $dbConnection->prepare("DELETE FROM post_image WHERE postcust_id = ?");
    $delete_post_img_query->bind_param(
        "s",
        $post_id
    );
    $outcome_post_img_query = $delete_post_img_query->execute();

    if ($outcome_delete_post__query && $outcome_post_img_query) {
        echo "
            <script>
                window.history.back();
            </script>
        ";
    }
} else {
    echo "
            <script>
                alert('Failed to delete the Post. Please try again.');
                window.history.back();
            </script>
        ";
}
