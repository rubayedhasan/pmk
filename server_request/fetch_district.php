<?php
// connect database 
require_once("../db_auth/db_global.php");


// only accept post method request 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Invalid Request";
    exit();
}

// fetch the subcategory data 
$division_code = $_POST["division_code"];

$select_query = $conn_ad->prepare("SELECT * FROM `area_district` WHERE division_code = ?");
$select_query->bind_param(
    "s",
    $division_code
);
$select_query->execute();

$query_result = $select_query->get_result();
echo '<option value="">Select District</option>';


while ($data_row = $query_result->fetch_assoc()) {
    echo "<option value='{$data_row['district_code']}'>{$data_row['disctrict_name']}</option>";
}
