<?Php
$hostName = "localhost";
$userName = "root";
$password = null;
$database = "pmk_web";

// database connection 
$conn = new mysqli($hostName, $userName, $password, $database);
mysqli_set_charset($conn, "utf8mb4");

// validation connection 
if ($conn->connect_error) {
    die("Failed to connect the database" . $conn->connect_error);
}
