<?php
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid Request");
}


$user_id = $_POST["user_id"];
$applicant_update_status = $_POST["applicant_status"];

// QUERY:: update query 
$update_query = "UPDATE candidate_general_information SET applicant_status = '$applicant_update_status' WHERE user_id = '$user_id'";
$update = $dbConnection->query($update_query);

if ($update) {
    if ((int)$applicant_update_status == 2) {
        $message = "Applicant has been shortlisted successfully.";
    } elseif ((int)$applicant_update_status == 0) {
        $message = "Candidate has been marked as rejected.";
    } else {
        $message = "status updated";
    }

    echo json_encode([
        "success" => true,
        "message" => $message
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Failed to update applicant status."
    ]);
}
