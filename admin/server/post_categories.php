<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

// insert category 
if (isset($_POST["add_category_btn"])) {
    $post_category =  strtoupper($_POST["post_category"]);

    // insert post in database 
    $category_query = $dbConnection->prepare("INSERT INTO post_catecgory (postcat_name) VALUES (?)");
    $category_query->bind_param(
        "s",
        $post_category
    );
    $category_query->execute();

    // go to the publish post page 
    header("Location: ../includes/post_news.php?section=categories");
    exit();
}



// insert sub category
if (isset($_POST["add_subcategory_btn"])) {
    $post_category_id =  $_POST["select_parent_category"];
    $sub_category = strtoupper($_POST["post_subcategory"]);

    echo  $post_category_id;

    // query 
    $subcategory_query = $dbConnection->prepare("INSERT INTO postsub_cat (postcat_id, postsub_cat_name) VALUES (?, ?) ");
    $subcategory_query->bind_param(
        "is",
        $post_category_id,
        $sub_category
    );
    $subcategory_query->execute();

    // go to the publish post page 
    header("Location: ../includes/post_news.php?section=sub-categories");
    exit();
}


// user action DELETE
// deleted the post category 
if (isset($_GET["category_id"])) {
    $category_id = $_GET["category_id"];

    $deleteCategoryQuery = $dbConnection->prepare(
        "DELETE FROM post_catecgory WHERE postcat_id = ?"
    );

    $deleteCategoryQuery->bind_param("i", $category_id);
    $deleteCategoryQuery->execute();

    // go to the publish post page 
    header("Location: ../includes/post_news.php?section=categories");
    exit();
}

// deleted the post sub category 
if (isset($_GET["subcategory_id"])) {
    $subcategory_id = $_GET["subcategory_id"];

    $deleteCategoryQuery = $dbConnection->prepare(
        "DELETE FROM postsub_cat WHERE postsub_cat_id = ?"
    );

    $deleteCategoryQuery->bind_param("i", $subcategory_id);
    $deleteCategoryQuery->execute();

    // go to the publish post page 
    header("Location: ../includes/post_news.php?section=sub-categories");
    exit();
}


// close the database connection 
mysqli_close($dbConnection);
