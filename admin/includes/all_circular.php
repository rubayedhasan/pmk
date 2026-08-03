<?php
// session_start();
$user_role = $_SESSION['admin']['role'];

// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

// $QUERY:: GET ALL CIRCULAR 
if (isset($_POST["search_circular"]) && !empty($_POST["search_circular"])) {
    $search_key = $_POST["search_circular"];

    $all_circular_query = "SELECT circular_id, circular_title, available_vacancy, circular_publish_date, application_deadline, circular_status FROM publish_circular2 WHERE circular_id LIKE '%$search_key%' || circular_title LIKE '%$search_key%' ORDER BY application_deadline DESC";
} else {
    $all_circular_query = "SELECT circular_id, circular_title, available_vacancy, circular_publish_date, application_deadline, circular_status FROM publish_circular2  ORDER BY application_deadline DESC";
}

$all_circular = $dbConnection->query($all_circular_query)->fetch_all(MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all circular</title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/all_circular.css">
</head>

<body>
    <!-- section:: panel header  -->
    <header class="panel-header">
        <!-- head  -->
        <div class="panel-content-box">
            <h4 class="panel-title">All Circular Lists</h4>
            <span class="panel-text">Total Circular: <span style="color:var(--pmk-blue-dark); font-weight: 600;"><?php echo count($all_circular); ?></span></span>
        </div>

        <!-- search box  -->
        <div class="panel-search-box">
            <form method="post" class="search_form">
                <input type="search" name="search_circular" id="search-circular" placeholder="Search by ID or Title">
                <button type="submit" class="src-btn-submit" title="submit">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </button>
                <button type="button" class="src-btn-reset" onclick="setTimeout(()=> document.querySelector( '.search_form').submit(),0)" title="reset">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-rotate-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 4.55a8 8 0 0 0 -6 14.9m0 -4.45v5h-5" />
                        <path d="M18.37 7.16l0 .01" />
                        <path d="M13 19.94l0 .01" />
                        <path d="M16.84 18.37l0 .01" />
                        <path d="M19.37 15.1l0 .01" />
                        <path d="M19.94 11l0 .01" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- button  -->
        <div class="panel-button-box">
            <button type="button" class="panel-action-button" onclick="window.location.href='../includes/publish_circular2.php'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                </svg>
                New Circular
            </button>
        </div>
    </header>

    <main>
        <!-- section:: main container  -->
        <section class="panel-main-container">
            <div class="table-wrapper">
                <table class="panel-table">
                    <thead class="panel-table-head">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Position</th>
                            <th>Published</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="panel-table-body">
                        <?php
                        foreach ($all_circular as $circular) {
                            echo "
                            <tr>
                            <td>
                                <span class='circular-id'>
                                        $circular[circular_id]
                                </span>
                            </td>
                            <td>
                                <span class='item-title'>
                                        $circular[circular_title]
                                </span>
                            </td>
                            <td>
                                <span class='open-position'>    
                                    $circular[available_vacancy]
                                </span>
                            </td>
                            <td>
                            <div class='published-date'>
                                <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-week'>
                                    <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                    <path d='M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12' />
                                    <path d='M16 3v4' />
                                    <path d='M8 3v4' />
                                    <path d='M4 11h16' />
                                    <path d='M7 14h.013' />
                                    <path d='M10.01 14h.005' />
                                    <path d='M13.01 14h.005' />
                                    <path d='M16.015 14h.005' />
                                    <path d='M13.015 17h.005' />
                                    <path d='M7.01 17h.005' />
                                    <path d='M10.01 17h.005' />
                                </svg>
                                $circular[circular_publish_date]
                            </div>
                            </td>
                            <td>
                            <div class='circular-deadline'>
                            <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-off'>
                                    <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                    <path d='M9 5h9a2 2 0 0 1 2 2v9m-.184 3.839a2 2 0 0 1 -1.816 1.161h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 1.158 -1.815' />
                                    <path d='M16 3v4' />
                                    <path d='M8 3v1' />
                                    <path d='M4 11h7m4 0h5' />
                                    <path d='M3 3l18 18' />
                                </svg>
                            $circular[application_deadline]
                            </div>
                            </td>
                            <td>
                            ";

                            if ($circular["circular_status"]) {
                                echo  " <span class='circular-status cs-active'>active</span>";
                            } else {
                                echo "<span class='circular-status cs-dead'>closed</span>";
                            }

                            echo " </td>
                            <td>
                                <div class='item-actions'>
                                    <a href='../includes/vacancyDetails2.php?circular_id=$circular[circular_id]' title='view' class='action-btn btn-view'>
                                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-eye'>
                                            <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                            <path d='M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0' />
                                            <path d='M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6' />
                                        </svg>
                                    </a> ";

                            if ($user_role == 1) {
                                echo "<a href='../includes/edit_publish_circular2.php?circular_id=$circular[circular_id]' title='edit' class='action-btn btn-edit'>
                                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-edit'>
                                            <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                            <path d='M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1' />
                                            <path d='M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415' />
                                            <path d='M16 5l3 3' />
                                        </svg>
                                    </a>
                                    <a href='../server/delete_circular2.php?circular_id=$circular[circular_id]' title='delete' class='action-btn btn-delete' onclick=\"return confirm('Are you sure you want to delete this circular?')\">
                                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-trash-x'>
                                            <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                            <path d='M4 7h16' />
                                            <path d='M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12' />
                                            <path d='M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3' />
                                            <path d='M10 12l4 4m0 -4l-4 4' />
                                        </svg>
                                    </a>";
                            }
                            echo " </div>
                            </td>
                        </tr>
                    ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
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