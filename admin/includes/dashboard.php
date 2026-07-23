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
                    <ul>
                        <li></li>
                    </ul>
                </div>

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
                    topbar
                </div>

                <!-- dashboard area  -->
                <div id="dashboard">
                    area
                </div>

            </div>
        </section>
    </main>
</body>

</html>