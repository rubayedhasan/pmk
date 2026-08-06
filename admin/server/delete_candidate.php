<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if (isset($_GET["user_id"])) {
    $user_id = $_GET["user_id"];
    $circular_id = $_GET['circular_id'];

    // QUERY:: delete candidate general information  
    $delete_generalInfo_query = $dbConnection->PREPARE("DELETE FROM candidate_general_information WHERE user_id = ? AND circular_id = ?");
    $delete_generalInfo_query->bind_param("ss", $user_id, $circular_id);
    $delete_generalInfo = $delete_generalInfo_query->execute();

    // QUERY:: delete candidate identity
    $delete_identity_query = $dbConnection->PREPARE("DELETE FROM candidate_identity WHERE user_id = ? AND circular_id = ?");
    $delete_identity_query->bind_param("ss", $user_id, $circular_id);
    $delete_identity = $delete_identity_query->execute();

    // QUERY:: delete candidate candidate_address
    $delete_address_query = $dbConnection->PREPARE("DELETE FROM candidate_address WHERE user_id = ? AND circular_id = ?");
    $delete_address_query->bind_param("ss", $user_id, $circular_id);
    $delete_address = $delete_address_query->execute();

    // QUERY:: delete candidate candidate_education
    $delete_edu_query = $dbConnection->PREPARE("DELETE FROM candidate_education WHERE user_id = ? AND circular_id = ?");
    $delete_edu_query->bind_param("ss", $user_id, $circular_id);
    $delete_edu = $delete_edu_query->execute();

    // QUERY:: delete candidate candidate_training
    $delete_training_query = $dbConnection->PREPARE("DELETE FROM candidate_training WHERE user_id = ? AND circular_id = ?");
    $delete_training_query->bind_param("ss", $user_id, $circular_id);
    $delete_training = $delete_training_query->execute();

    // QUERY:: delete candidate_job_experience
    $delete_job_query = $dbConnection->PREPARE("DELETE FROM candidate_job_experience WHERE user_id = ? AND circular_id = ?");
    $delete_job_query->bind_param("ss", $user_id, $circular_id);
    $delete_job = $delete_job_query->execute();


    $delete = $delete_generalInfo_query && $delete_identity && $delete_address && $delete_edu && $delete_training && $delete_job;

    if ($delete) {
        echo "
        <script>
           // alert('The job circular has been deleted successfully.');
            window.history.back();
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Failed to delete the job circular. Please try again.');
            window.history.back()
        </script>";
    }
}
