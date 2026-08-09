<?php
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid Request");
}

$circular_id = $_POST["circular_id"] ?? "";

// Fetch all
if ($circular_id == "") {

    // $query = "SELECT
    //             cgi.*,
    //             pc.circular_title
    //         FROM candidate_general_information cgi
    //         INNER JOIN publish_circular pc
    //             ON cgi.circular_id = pc.circular_id
    //         WHERE cgi.applicant_status = 1
    //         ORDER BY cgi.id DESC";

    $query = "SELECT
            cgi.*,
            pc.circular_title,

            GROUP_CONCAT(
                DISTINCT ce.edu_institution
                ORDER BY ce.id
                SEPARATOR ' | '
            ) AS edu_institutions

        FROM candidate_general_information cgi

        INNER JOIN publish_circular pc
            ON cgi.circular_id = pc.circular_id

        LEFT JOIN candidate_education ce
            ON ce.user_id = cgi.user_id
            AND ce.circular_id = cgi.circular_id

        WHERE cgi.applicant_status = 1

        GROUP BY cgi.id

        ORDER BY cgi.id DESC";
} else {

    // $query = "SELECT
    //             cgi.*,
    //             pc.circular_title
    //         FROM candidate_general_information cgi
    //         INNER JOIN publish_circular pc
    //             ON cgi.circular_id = pc.circular_id
    //         WHERE cgi.circular_id='$circular_id'
    //         AND cgi.applicant_status=1
    //         ORDER BY cgi.id DESC";

    $query = "SELECT
            cgi.*,
            pc.circular_title,

            GROUP_CONCAT(
                DISTINCT ce.edu_institution
                ORDER BY ce.id
                SEPARATOR ' | '
            ) AS edu_institutions

        FROM candidate_general_information cgi

        INNER JOIN publish_circular pc
            ON cgi.circular_id = pc.circular_id

        LEFT JOIN candidate_education ce
            ON ce.user_id = cgi.user_id
            AND ce.circular_id = cgi.circular_id

        WHERE cgi.circular_id = '$circular_id'
        AND cgi.applicant_status = 1

        GROUP BY cgi.id

        ORDER BY cgi.id DESC";
}

echo json_encode(
    $dbConnection->query($query)->fetch_all(MYSQLI_ASSOC)
);
