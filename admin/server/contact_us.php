<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if (isset($_POST["contact_user_name"])) {
    $name = $_POST["contact_user_name"] ?? "";
    $email = $_POST["contact_user_email"] ?? "";
    $message = $_POST["contact_user_message"] ?? "";

    // QUERY:: inset to the database 
    $contact_query = $dbConnection->prepare("INSERT INTO contact_newsletter (name, email, message) VALUES (?, ?, ?)");
    $contact_query->bind_param(
        "sss",
        $name,
        $email,
        $message
    );
    $outcome_contact_query = $contact_query->execute();

    if ($outcome_contact_query) {
        header("Location: ../../index.php");
    }
}
