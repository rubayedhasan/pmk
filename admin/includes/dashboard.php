<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Admin Dashboard</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">
    <!-- LInked custom stylesheet  -->
    <link rel="stylesheet" href="../styles//index.css">
    <link rel="stylesheet" href="../styles//dashboard.css">
</head>

<body>
    <main>
        <!-- section:: Dashboard  -->
        <section id="dashboard-container">
            <!-- sub-section:: dashboard menu container  -->
            <aside id="dashboard-menu-container">
                <figure class="d-menu-image">
                    <img src="../assets/logo/main-logo.png" alt="pmk logo">
                    <figcaption class="d-menu-image-content">Admin Panel</figcaption>
                </figure>

                <!-- dashboard menu  -->
                <div class="dashboard-menu">
                    <!-- dashboard  -->
                    <ul class="d-menu">
                        <li class="d-menu-item">
                            <a href="?dashboard=true" class="d-menu-link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-blocks">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 4a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1l0 -5" />
                                    <path d="M3 14h12a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h3a2 2 0 0 1 2 2v12" />
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>

                    <!-- content management  -->
                    <ul class="d-menu">
                        <h4 class="d-menu-title">Content Managment</h4>
                        <li class="d-menu-item">
                            <a href="?posts=true" class="d-menu-link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-description">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                                    <path d="M9 17h6" />
                                    <path d="M9 13h6" />
                                </svg>
                                <span>Posts</span>
                            </a>
                        </li>
                        <li class="d-menu-item">
                            <a href="?circular=true" class="d-menu-link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2l0 -9" />
                                    <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                    <path d="M12 12l0 .01" />
                                    <path d="M3 13a20 20 0 0 0 18 0" />
                                </svg>
                                <span>Job Circular</span>
                            </a>
                        </li>
                        <li class="d-menu-item">
                            <a href="?apply=true" class="d-menu-link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list-details">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M13 5h8" />
                                    <path d="M13 9h5" />
                                    <path d="M13 15h8" />
                                    <path d="M13 19h5" />
                                    <path d="M3 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" />
                                    <path d="M3 15a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" />
                                </svg>
                                <span>Apply List</span>
                            </a>
                        </li>
                        <li class="d-menu-item">
                            <a href="?result=true" class="d-menu-link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-report">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
                                    <path d="M18 14v4h4" />
                                    <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />
                                    <path d="M8 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                                    <path d="M14 18a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M8 11h4" />
                                    <path d="M8 15h3" />
                                </svg>
                                <span>Result</span>
                            </a>
                        </li>
                        <li class="d-menu-item">
                            <a href="?report=true" class="d-menu-link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-donut">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-3.8a4.1 4.1 0 1 1 -5 -5v-4a.9 .9 0 0 0 -1 -.8" />
                                    <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a9 9 0 0 0 -1 -1v-4.5" />
                                </svg>
                                <span>Report</span>
                            </a>
                        </li>
                        <li class="d-menu-item">
                            <a href="?images=true" class="d-menu-link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-photo-alt">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 18h5" />
                                    <path d="M14 18h4" />
                                    <path d="M15 7h.01" />
                                    <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12" />
                                    <path d="M3 15l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                    <path d="M14 13l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                    <path d="M3 15h18" />
                                </svg>
                                <span>Images</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- dashboard logout  -->
                <div class="dashboard-logout">
                    <form action="../server/admin_logout.php" method="post">
                        <button name="admin_logout" type="submit" class="d-logout-button">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                <path d="M9 12h12l-3 -3" />
                                <path d="M18 15l3 -3" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>

                </div>
            </aside>

            <!-- sub-section:: dashboard content container  -->
            <div id="dashboard-content-container">
                <!-- topbar  -->
                <div id="dashobard-topbar">
                    <!-- topbar left  -->
                    <div class="topbar-left">
                        <button type="button" class="d-menu-controller">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-3">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 6h10" />
                                <path d="M4 12h16" />
                                <path d="M7 12h13" />
                                <path d="M4 18h10" />
                            </svg>
                        </button>
                        <h5 class="d-title">Dashboard</h5>
                    </div>

                    <!-- topbar right  -->
                    <div class="topbar-right">
                        <div class="user-container">
                            <div class="user-avatar">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                            <h5 class="d-user">
                                <?php
                                // echo $admin_user;
                                echo "username";
                                ?>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- dashboard area  -->
                <div id="dashboard">
                    <?php
                    if (isset($_GET["posts"])) {
                        include("../includes/all_posts.php");
                    } else if (isset($_GET["circular"])) {
                        include("../includes/all_circular.php");
                    } else if (isset($_GET["apply"])) {
                        include("../includes/applied_list.php");
                    } else if (isset($_GET["result"])) {
                        include("../includes/all_results.php");
                    } else if (isset($_GET["report"])) {
                        include("../includes/all_reports.php");
                    } else if (isset($_GET["images"])) {
                        include("../includes/all_images.php");
                    } else {
                        echo "Welcome To Dashboard";
                    }
                    ?>
                </div>

            </div>
        </section>
    </main>

    <!-- Linked custom script  -->
    <script src="../js/dashboard.js"></script>
</body>

</html>