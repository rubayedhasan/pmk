<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;


// only accept post method request 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Invalid Request";
    exit();
}


$circular_id = $_POST["circular_id"];

// QUERY:: apply candidate 
$apply_candidate_query = "SELECT 
                cgi.*,
                pc.circular_title
            FROM candidate_general_information AS cgi
            INNER JOIN publish_circular  AS pc
                ON cgi.circular_id = pc.circular_id 
            WHERE cgi.circular_id = '$circular_id' 
            && cgi.applicant_status = 1";
$candidate_list = $dbConnection->query($apply_candidate_query)->fetch_all(MYSQLI_ASSOC);

echo json_encode($candidate_list);
exit();
