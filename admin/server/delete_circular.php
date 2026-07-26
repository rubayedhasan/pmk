<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if (isset($_GET["circular_id"])) {
    $circular_id = $_GET["circular_id"];

    // QUERY:: delete circular 
    $delete_circular_query = $dbConnection->PREPARE("DELETE FROM publish_circular WHERE circular_id = ?");
    $delete_circular_query->bind_param("s", $circular_id);
    $delete = $delete_circular_query->execute();

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
