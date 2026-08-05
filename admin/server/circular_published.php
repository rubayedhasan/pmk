<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;


header("Content-Type: application/json");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


// only accept post method request 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(
        [
            "success" => false,
            "message" => "Invalid Request Method",
        ]
    );
    exit();
}


// HELPER:: sanitize text input 
function clean($connection, $inputValue)
{
    return mysqli_real_escape_string($connection, trim($inputValue ?? ""));
}

// HELPER:: sanitize numeric/decimal input 
function cleanNumber($connection, $inputValue)
{
    $inputValue = trim($inputValue ?? '');
    return ($inputValue === "") ? 0 : mysqli_real_escape_string($connection, $inputValue);
}

// HELPER:: sanitize null value 
function nullOrValue($val)
{
    return ($val === "" || $val === null) ? null : $val;
}


// start mysql data transaction
mysqli_begin_transaction($dbConnection);

try {

    // step-1:: BASIC INFORMATION
    $circular_designation_title = clean($dbConnection, $_POST["circular_designation_title"] ?? "");
    $circular_designation_category = clean($dbConnection, $_POST["circular_designation_category"] ?? "");
    $circular_available_position = clean($dbConnection, $_POST["circular_available_position"] ?? "");
    $circular_id = clean($dbConnection, $_POST["circular_id"] ?? "");
    $employment_type = clean($dbConnection, $_POST["employment_type"] ?? "");

    // step-2:: PUBLISH DATE
    $job_location = clean($dbConnection, $_POST["job_location"] ?? "");
    $circular_publish_date = clean($dbConnection, $_POST["circular_publish_date"] ?? "");
    $circular_application_deadline = clean($dbConnection, $_POST["circular_application_deadline"] ?? "");

    // if deadline over the status will 0 
    $currentDate = date("Y-m-d");
    $circular_status = ($currentDate > $circular_application_deadline) ? 0 : 1;

    // step-3:: SALARY & AGE
    $circular_probation_salary = clean($dbConnection, $_POST["circular_probation_salary"] ?? "");
    $circular_gross_salary = clean($dbConnection, $_POST["circular_gross_salary"] ?? "");
    $circular_min_age = clean($dbConnection, $_POST["circular_min_age"] ?? "");
    $circular_max_age = clean($dbConnection, $_POST["circular_max_age"] ?? "");
    $circular_age_deadline = clean($dbConnection, $_POST["circular_age_deadline"] ?? "");

    // step-4:: QUALIFICATION
    $circular_description = trim($_POST["circular_description"]) ?? "";



    // prepper the query 
    $circularDataQuery = $dbConnection->prepare(
        "INSERT INTO publish_circular (
    circular_id,
    circular_title,
    designation_category,
    available_vacancy,
    probation_salary,
    gross_salary,
    min_age,
    max_age,
    age_deadline,
    circular_description,
    job_location,
    circular_publish_date,
    application_deadline,
    circular_status,
    employment_type
    ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
    );

    $circularDataQuery->bind_param(
        "ssssiiiisssssii",
        $circular_id,
        $circular_designation_title,
        $circular_designation_category,
        $circular_available_position,
        $circular_probation_salary,
        $circular_gross_salary,
        $circular_min_age,
        $circular_max_age,
        $circular_age_deadline,
        $circular_description,
        $job_location,
        $circular_publish_date,
        $circular_application_deadline,
        $circular_status,
        $employment_type
    );

    $outcomeCircularDataQuery = $circularDataQuery->execute();

    // validate:: if data insert failed 
    if (!$outcomeCircularDataQuery) {
        throw new Exception("ERROR: " . $circularDataQuery->error);
    }

    // validate::if all ok the submit the data to database 
    mysqli_commit($dbConnection);

    // return success json message
    echo json_encode([
        "success" => true,
        "message" => "The recruitment circular has been published successfully and is now available for applications."
    ]);
    // header("location: ../includes/dashboard.php");
} catch (Exception $err) {
    // rollback all data if failed to insert any data to database 
    mysqli_rollback($dbConnection);

    error_log("Error on publishing the circular: " . $err->getMessage());
    echo json_encode([
        "success" => false,
        "message" => $err->getMessage()
    ]);

    // header("location: ../includes/dashboard.php");
}


// close the database connection 
mysqli_close($dbConnection);
