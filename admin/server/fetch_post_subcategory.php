<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;


// only accept post method request 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Invalid Request";
    exit();
}

// fetch the subcategory data 
$post_category_id = (int) $_POST["post_category_id"];

$select_query = $dbConnection->prepare("SELECT * FROM postsub_cat WHERE postcat_id = ?");
$select_query->bind_param(
    "i",
    $post_category_id
);
$select_query->execute();

echo $post_category_id;

$query_result = $select_query->get_result();
echo '<option value="">Select Sub Category</option>';


while ($data_row = $query_result->fetch_assoc()) {
    echo "<option value='{$data_row['postsub_cat_id']}'>{$data_row['postsub_cat_name']}</option>";
}
