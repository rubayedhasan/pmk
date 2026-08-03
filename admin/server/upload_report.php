<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;


header("Content-Type: application/json");
// echo json_encode($_FILES, JSON_PRETTY_PRINT);
// exit;
// echo json_encode([
//     "upload_max_filesize" => ini_get("upload_max_filesize"),
//     "post_max_size" => ini_get("post_max_size"),
//     "memory_limit" => ini_get("memory_limit"),
// ]);
// exit;

// echo json_encode([
//     "FILES" => $_POST["report_title"],
// ]);
// exit;


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
    $report_title = clean($dbConnection, $_POST["report_title"] ?? "");
    $report_category = clean($dbConnection, $_POST["report_category"] ?? "");
    $financial_year = clean($dbConnection, $_POST["financial_year"] ?? "");


    // validation fields 
    if (empty($report_title)) {
        throw new Exception("Report Title is Mandatory");
    }

    if (empty($report_category)) {
        throw new Exception("Report Category is Mandatory");
    }

    if (empty($financial_year)) {
        throw new Exception("Financial Year is Mandatory");
    }

    // handle picture upload 
    $report_file = "";
    if (isset($_FILES["report_file"]) && $_FILES['report_file']['error'] === UPLOAD_ERR_OK) {

        // upload directory create and validation 
        $pictureUploadDir = "../assets/reports";
        if (!is_dir($pictureUploadDir)) {
            mkdir($pictureUploadDir, 0755, true);
        }

        // validate the file extension 
        $pictureExe = strtolower(pathinfo($_FILES["report_file"]["name"], PATHINFO_EXTENSION));
        $allowedExe = ['pdf'];

        // validation:: file extension 
        if (!in_array($pictureExe, $allowedExe)) {
            echo json_encode(
                [
                    "success" => false,
                    "message" => 'Invalid picture format. Allowed: PDF.'
                ]
            );

            exit();
        }

        // define report type
        if ((int) $report_category === 1) {
            $report_type = "annual_report";
        }
        if ((int) $report_category === 2) {
            $report_type = "audit_report";
        }

        // create file name 
        $fileName = $report_type . "_" . $financial_year . '.' . $pictureExe;
        $fileDestination = $pictureUploadDir . "/" . $fileName;

        // upload file 
        if (move_uploaded_file($_FILES["report_file"]["tmp_name"], $fileDestination)) {
            $report_file = $fileName;
        }
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Please upload a PDF file."
        ]);
        exit();
    }

    // QUERY:: INSET THE REPORTS 
    $report_query = $dbConnection->prepare("INSERT INTO pmk_reports (report_title, report_category, financial_year, report_file) VALUES (?,?,?,?)");
    $report_query->bind_param(
        "siss",
        $report_title,
        $report_category,
        $financial_year,
        $report_file
    );

    $outcome_report_query = $report_query->execute();
    if (!$outcome_report_query) {
        throw new Exception("Error on report upload: " . $report_query->error);
    }

    // validate::if all ok the submit the data to database 
    mysqli_commit($dbConnection);

    // return success json message
    echo json_encode([
        "success" => true,
        "message" => "The report has been uploaded successfully and is now available for viewing and download."
    ]);
} catch (Exception $err) {
    // rollback all data if failed to insert any data to database 
    mysqli_rollback($dbConnection);

    error_log("Error on upload the content: " . $err->getMessage());
    echo json_encode([
        "success" => false,
        "message" => $err->getMessage()
    ]);
}


// close the database connection 
mysqli_close($dbConnection);
