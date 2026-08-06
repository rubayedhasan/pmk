<?php
// session_start();
$user_role = $_SESSION['admin']['role'];

// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

// QUERY:: all report 
$get_reports_query = "SELECT * FROM pmk_reports";
$reports = $dbConnection->query($get_reports_query)->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all reports</title>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/all_posts.css">
    <link rel="stylesheet" href="../styles/all_reports.css">
</head>

<body>
    <!-- section:: panel header  -->
    <header class="panel-header">
        <!-- head  -->
        <div class="panel-content-box">
            <h4 class="panel-title">All Report Lists</h4>
            <div class="panel-meta">
                Total Report: <span style="color:var(--pmk-blue-dark); font-weight: 600;">
                    <?php echo count($reports); ?>
                </span>
            </div>
        </div>

        <!-- button  -->
        <div class="panel-button-box">
            <button type="button" class="panel-action-button" onclick="window.location.href='../includes/report_upload.php'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                </svg>
                New Report
            </button>
        </div>
    </header>

    <main>
        <!-- table wrapper  -->
        <div class="table-wrapper">
            <table class="post-table">
                <thead class="post-table-head">
                    <tr>
                        <th>Report</th>
                        <th>Category</th>
                        <th>Size</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="post-table-body">
                    <?php foreach ($reports as $report) { ?>
                        <tr>
                            <td>
                                <div class="file-display section-hidden">
                                    <div class="file-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-pdf">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                            <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                            <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                            <path d="M17 18h2" />
                                            <path d="M20 15h-3v6" />
                                            <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1" />
                                        </svg>
                                    </div>
                                    <div class="file-meta">
                                        <h4 class="file-name">
                                            <?php echo $report['report_title'] ?>
                                        </h4>
                                        <p class="file-size">
                                            <?php echo $report['report_file'] ?>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="report-category">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 4h6v6h-6l0 -6" />
                                        <path d="M14 4h6v6h-6l0 -6" />
                                        <path d="M4 14h6v6h-6l0 -6" />
                                        <path d="M14 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    </svg>

                                    <?php
                                    switch ($report['report_category']) {
                                        case 1:
                                            echo "Annual Report";
                                            break;

                                        case 2:
                                            echo "Audit Report";
                                            break;

                                        default:
                                            echo "";
                                    }

                                    ?>
                                </div>
                            </td>
                            <td>
                                <div class="report-size">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-spreadsheet">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                                        <path d="M8 11h8v7h-8l0 -7" />
                                        <path d="M8 15h8" />
                                        <path d="M11 11v7" />
                                    </svg>
                                    <?php
                                    $file = "../assets/reports/" . $report['report_file'];
                                    $size = filesize($file) / (1024 * 1024);
                                    echo number_format($size, 2) . " MB";
                                    ?>
                                </div>
                            </td>
                            <td>
                                <div class="report-status">
                                    <?php
                                    switch ($report['report_status']) {
                                        case 0:
                                            echo "Draft";
                                            break;

                                        case 1:
                                            echo "Published";
                                            break;

                                        default:
                                            echo "";
                                    }

                                    ?>
                                </div>
                            </td>
                            <td>
                                <div class='item-actions'>
                                    <a href="../assets/reports/<?php echo $report['report_file'] ?>" target="_blank" title='view report' class='action-btn btn-view'>
                                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-eye'>
                                            <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                            <path d='M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0' />
                                            <path d='M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6' />
                                        </svg>
                                    </a>

                                    <?php if ($user_role == 1) { ?>
                                        <a href="../server/delete_report.php?report_id=<?php echo $report["id"]; ?>" title='delete' class='action-btn btn-delete' onclick="return confirm('Are you sure you want to delete this report?')">
                                            <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-trash-x'>
                                                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                <path d='M4 7h16' />
                                                <path d='M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12' />
                                                <path d='M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3' />
                                                <path d='M10 12l4 4m0 -4l-4 4' />
                                            </svg>
                                        </a>
                                    <?php  } ?>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>


    <script>
        window.addEventListener("pageshow", function(event) {
            if (event.persisted || performance.getEntriesByType("navigation")[0]?.type === "back_forward") {
                location.reload();
            }
        });
    </script>
</body>

</html>