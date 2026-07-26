<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

// $QUERY:: GET ALL CIRCULAR 
$all_circular_query = "SELECT circular_id, circular_title, available_vacancy, circular_publish_date, application_deadline, circular_status FROM publish_circular  ORDER BY circular_publish_date DESC";
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
        <h4 class="panel-title">All Circular Lists</h4>
        <button type="button" class="panel-action-button" onclick="window.location.href='../includes/publish_circular.php'">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
            New Circular
        </button>
    </header>

    <main>
        <!-- section:: main container  -->
        <section class="panel-main-container">
            <?php

            foreach ($all_circular as $circular) {
                echo "
                <div class='panel-item'>
                <div class='item-details'>
                    <div class='item-icon'>
                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-briefcase'>
                            <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                            <path d='M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2l0 -9' />
                            <path d='M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2' />
                            <path d='M12 12l0 .01' />
                            <path d='M3 13a20 20 0 0 0 18 0' />
                        </svg>
                    </div>

                    <!-- info  -->
                    <div class='item-info'>
                        <h5 class='item-title'>$circular[circular_title]</h5>
                        <span class='circular-id'>$circular[circular_id]</span>
                        <p class='open-position'>
                            <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-shredder'>
                                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                <path d='M4 11a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1l0 -3' />
                                <path d='M17 10v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4m5 5v5m4 -5v2m-8 -2v3' />
                            </svg>
                            $circular[available_vacancy]
                        </p>
                        <div class='item-dates'>
                            <p class='published-date'>
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
                            </p>
                            <p class='circular-deadline'>
                                <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-off'>
                                    <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                    <path d='M9 5h9a2 2 0 0 1 2 2v9m-.184 3.839a2 2 0 0 1 -1.816 1.161h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 1.158 -1.815' />
                                    <path d='M16 3v4' />
                                    <path d='M8 3v1' />
                                    <path d='M4 11h7m4 0h5' />
                                    <path d='M3 3l18 18' />
                                </svg>
                               $circular[application_deadline]
                            </p>
                        </div>
                        ";

                if ($circular["circular_status"]) {
                    echo  " <span class='circular-status cs-active'>active</span>";
                } else {
                    echo "<span class='circular-status cs-dead'>closed</span>";
                }

                echo "
                    </div>
                </div>

                <!-- item-actions  -->
                <div class='item-actions'>
                    <a href='../includes/vacancyDetails.php?circular_id=$circular[circular_id]' title='view' class='action-btn btn-view'>
                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-eye'>
                            <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                            <path d='M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0' />
                            <path d='M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6' />
                        </svg>
                    </a>
                    <a href='' title='edit' class='action-btn btn-edit'>
                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-edit'>
                            <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                            <path d='M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1' />
                            <path d='M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415' />
                            <path d='M16 5l3 3' />
                        </svg>
                    </a>
                    <a href='' title='delete' class='action-btn btn-delete'>
                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-trash-x'>
                            <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                            <path d='M4 7h16' />
                            <path d='M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12' />
                            <path d='M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3' />
                            <path d='M10 12l4 4m0 -4l-4 4' />
                        </svg>
                    </a>
                </div>
            </div>
    ";
            }

            ?>
        </section>
    </main>
</body>

</html>