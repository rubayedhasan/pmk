<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;


if (isset($_GET["report_id"])) {
    $report_id = $_GET["report_id"];

    // QUERY:: get the file path 
    $get_file_path_query = "SELECT report_file FROM pmk_reports WHERE id = '$report_id'";
    $file_path = $dbConnection->query($get_file_path_query)->fetch_assoc();

    print_r($file_path);

    if (count($file_path)) {
        $file = "../assets/reports/" . $file_path['report_file'];

        // delete file 
        unlink($file);
    }

    // QUERY:: delete Post 
    $delete_report_query = $dbConnection->prepare("DELETE FROM pmk_reports WHERE id = ?");
    $delete_report_query->bind_param(
        "i",
        $report_id
    );
    $outcome_delete_report_query = $delete_report_query->execute();


    if ($outcome_delete_report_query) {
        echo "
            <script>
                window.history.back();
            </script>
        ";
    }
} else {
    echo "
            <script>
                alert('Failed to delete the Report. Please try again.');
                window.history.back();
            </script>
        ";
}
