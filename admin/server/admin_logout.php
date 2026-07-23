<?php
session_start();

// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;


if (isset($_POST["admin_logout"])) {
    session_unset();
    session_destroy();

    header("Location: ../index.php");
    exit();
}
