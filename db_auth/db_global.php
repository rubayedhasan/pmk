<?php
define('DB_SERVER', '103.139.165.100');
/* User and password pmk_admin */
define('DB_USER_ADMIN', 'pmkmfi_admin');
define('DB_PASS_ADMIN', '59f2f37365a628');

define('DB_AD', 'pmkmfi_admin');

$conn_ad = mysqli_connect(DB_SERVER, DB_USER_ADMIN, DB_PASS_ADMIN, DB_AD);

mysqli_set_charset($conn_ad, "utf8");


mysqli_query($conn_ad, "SET time_zone = '+06:00'");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
