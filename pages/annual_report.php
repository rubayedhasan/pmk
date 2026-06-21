<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Annual Report</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/otherPageSharedLinks.php") ?>

    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/report_page.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/otherPageNavbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section:: annual hero  -->
        <section id="report-hero">
            <div class="container-width">
                <!-- breadcrumb  -->
                <div class="report-breadcrumb">
                    <a href="../index.php" class="breadcrumb-home">Home</a>
                    <span class="breadcrumb-sep">></span>
                    <span class="breadcrumb-link">Report</span>
                    <span class="breadcrumb-sep">></span>
                    <span class="breadcrumb-link">Annual Report</span>
                </div>

                <!-- title  -->
                <h1 class="report-hero-title">
                    Annual
                    <span style="color:var(--pmk-green);">Report</span>
                </h1>
                <p class="report-hero-text">
                    Explore our annual reports and publications, showcasing financial performance, program achievements, and lasting impact across Bangladesh through the years.

                </p>
            </div>
        </section>

        <!-- section:: mobile report list panel -->
        <section class="mobile-panel-report-list">
            <button type="button" class="report-menu-button" id="reportDrawerButton" aria-label="Open report list">
                <svg
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
            </button>
            <span class="mobile-panel-label" id="mobile-report-panel-label">
                Select a report
            </span>
        </section>

        <!-- section:: report drawer Mask & report drawer-->
        <section class="report-panel-mask" id="report-drawer-mask"></section>
        <section class="report-drawer" id="report-drawer">
            <div class="report-drawer-header">
                <h5 class="report-drawer-header-title">Annual Report</h5>
                <button type="button" class="report-drawer-close-button" id="drawer-close-button" aria-label="Close">
                    <svg
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="round">
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>

            <!-- search report container  -->
            <div class="report-searchBox-container">
                <div class="searchBox">
                    <span class="searching-icon">
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </span>
                    <input type="text" name="report_search_field" id="drawer-search-field" placeholder="Search financial year…">
                </div>
            </div>

            <!-- not found  -->
            <div class="no-match no-display" id="no-report-found">No reports found.</div>

            <!-- report view list  -->
            <div id="drawer-report-list" class="reports"></div>
        </section>

        <!-- section:: annual report display area  -->
        <section id="report-area">
            <div class="container-width">
                <div class="report-area-container">
                    <!-- sub section:: sidebar view panel  -->
                    <aside class="report-view-panel">
                        <!-- view panel header  -->
                        <div class="view-panel-header">
                            <h6 class="panel-header-label">Publications</h6>
                            <h4 class="panel-header-title">Annual Report</h4>
                            <p class="panel-header-text">
                                PMK annual performance at a glance.
                            </p>
                        </div>

                        <!-- search report container  -->
                        <div class="report-searchBox-container">
                            <div class="searchBox">
                                <span class="searching-icon">
                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8" />
                                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                    </svg>
                                </span>
                                <input type="text" name="report_search_field" id="search-field" placeholder="Search financial year…">
                            </div>
                        </div>

                        <!-- not found  -->
                        <div class="no-match no-display" id="no-report-found">No reports found.</div>

                        <!-- report view list  -->
                        <div id="panel-report-list" class="reports"></div>

                    </aside>


                    <!--sub section: report board (display)-->
                    <div class="report-board">
                        <!-- report top view bar  -->
                        <div class="report-intro-bar">
                            <div class="intro-bar">
                                <h5 class="report-intro-title" id="introTitle">Select a report to preview</h5>
                                <p class="report-intro-text" id="introText">
                                    Choose a financial year from the left panel
                                </p>
                            </div>

                            <!-- meta button  -->
                            <div class="report-meta-buttons">
                                <!-- open button  -->
                                <a href="" class="intro-btn intro-btn-ghost no-display" id="open-report"
                                    target="_blank">
                                    <svg
                                        width="13"
                                        height="13"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                                        <polyline points="15 3 21 3 21 9" />
                                        <line x1="10" y1="14" x2="21" y2="3" />
                                    </svg>
                                    <span class="intro-btn-text">Open</span>
                                </a>

                                <!-- download button  -->
                                <a href="" class="intro-btn intro-btn-solid no-display" id="download-report"
                                    target="_blank" download>
                                    <svg
                                        width="13"
                                        height="13"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4" />
                                        <polyline points="7 10 12 15 17 10" />
                                        <line x1="12" y1="15" x2="12" y2="3" />
                                    </svg>
                                    <span class="intro-btn-text">Download PDF</span>
                                </a>
                            </div>

                        </div>

                        <!-- report frame board  -->
                        <div class="report-frame-board">
                            <!-- report pdf iframe  -->
                            <iframe src="../assets/annual_report/annual_report_2022-23.pdf" id="report-frame" class="no-display" frameborder="0" title="Annual Report PDF" allowfullscreen="" loading="lazy" fetchpriority="high" decoding="async" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            <!-- loading state  -->
                            <div class="loading-state no-display" id="report-loading-state">
                                <div class="loading-spinner"></div>
                                <h5 class="spinner-text">Loading report…</h5>
                            </div>



                            <!-- empty report board container  -->
                            <div class="report-board-empty" id="empty-report-board">
                                <div class="empty-board-icon">
                                    <svg
                                        width="32"
                                        height="32"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="#00946a"
                                        stroke-width="1.4"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                        <polyline points="14 2 14 8 20 8" />
                                        <line x1="16" y1="13" x2="8" y2="13" />
                                        <line x1="16" y1="17" x2="8" y2="17" />
                                        <polyline points="10 9 9 9 8 9" />
                                    </svg>
                                </div>
                                <h5 class="empty-board-title">No report selected</h5>
                                <p class="empty-board-subtitle">
                                    Select a financial year from the list to view that annual report.
                                </p>
                                <div class="report-hints">
                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6" />
                                    </svg>
                                    <span>
                                        Click any year on the left to get started
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <?php
    // Linked section:: Footer
    include("../includes/otherPageFooter.php");
    ?>


    <!-- Linked custom script  -->
    <script src="../js/annual_report.js"></script>
</body>

</html>