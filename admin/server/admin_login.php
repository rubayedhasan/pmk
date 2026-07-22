<?php
session_start();

// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if (isset($_POST["user_name"])) {
    $username = $_POST["user_name"];
    $password = $_POST["user_password"];

    // QUERY::
    $query_check_user = "SELECT * FROM admin_user WHERE user_name = '$username' && password = '$password'";
    $user_arr = $dbConnection->query($query_check_user);

    if ($user_arr->num_rows === 1) {
        $user = $user_arr->fetch_assoc();
        $_SESSION["admin"] = ["username" => $user["user_name"], "role" => $user["user_role"]];

        header("Location: ../index.php");
        exit();
    } else {
        echo "
        <script>
            alert('Incorrect username or password.');
            window.location.href='../index.php';
        </script>
        ";
        exit();
    }
}
