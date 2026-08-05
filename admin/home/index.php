<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Admin Panel</title>
    <!-- Linked favicon  -->
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">
</head>

<body>
    <?php
    $admin_user = $_SESSION["admin"]["username"] ?? "";

    if ($admin_user) {
        include_once("../includes/dashboard.php");
    } else {
        include_once("../includes/login.php");
    }
    ?>
</body>

</html>