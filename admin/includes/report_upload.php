<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Report Upload</title>
    <?php
    // Linked with shared links
    include_once("../includes/sharedLinks.php");
    ?>

    <!-- Linked custom stylesheet -->
    <link rel="stylesheet" href="../styles/publish_page_header.css">
    <link rel="stylesheet" href="../styles/report_upload.css">
</head>

<body>
    <!-- section:: header  -->
    <header class="publish-page-header">
        <div class="publish-header-content">
            <figure class="pmk-logo-container">
                <img src="../assets/logo/main-logo.png" alt="pmk logo" class="pmk-logo">
            </figure>
            <div class="publish-page-into">
                <p class="page-intro-text">Report Management</p>
                <h4 class="page-intro-title">Upload and manage your reports.</h4>
            </div>
        </div>
        <div class="publish-action-buttons">
            <button type="button" class="publish-action-button ppab-light" onclick="handleCancel()">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-progress-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" />
                    <path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" />
                    <path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" />
                    <path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" />
                    <path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" />
                    <path d="M14 14l-4 -4" />
                    <path d="M10 14l4 -4" />
                </svg>
                <span>Cancel</span>
            </button>
            <button type="button" class="publish-action-button ppab-green publish-button" onclick="uploadTheReport()">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                </svg>
                <span>Upload</span>
            </button>
        </div>
    </header>

    <!-- section:: main  -->
    <main>

        <!-- section:: upload report  -->
        <section class="published-main-container">
            <div class="upload-container">
                <h4 class="uc-title">Upload A PDF</h4>
                <div class="upload-manager">
                    <div class="pdf-container">
                        <div class="image-drop-area">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 16V4M12 4l-4 4M12 4l4 4"
                                    stroke="#33504D"
                                    stroke-width="1.6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M4 16v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"
                                    stroke="#33504D"
                                    stroke-width="1.6"
                                    stroke-linecap="round" />
                            </svg>
                            <h5 class="drop-area-title">Click to upload, or drag an pad here</h5>
                            <p class="drop-area-text">One file at a time · PDF format only</p>
                            <input type="file" class="post-pdf section-hidden" accept="application/pdf">
                        </div>

                        <!-- file preview  -->
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
                                <h4 class="file-name">Annual Report 2025-26.pdf</h4>
                                <p class="file-size">
                                    Size:
                                    <span id="file-mb">56</span>
                                    MB
                                </p>
                            </div>
                            <button type="button" class="file-remove" id="remove-file">×</button>
                        </div>
                    </div>

                    <div class="upload-form">
                        <div class="upload-form-input">
                            <label for="report-title">
                                Report Title
                                <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                            </label>
                            <input type="text" name="report_title" id="report-title" placeholder="e.g: Annual Report 2025-26" required>
                        </div>
                        <div class="upload-form-input">
                            <label for="report-category">
                                Report Category
                                <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                            </label>
                            <select name="report_category" id="report-category" required>
                                <option value="">Select A Category</option>
                                <option value="1">Annual Report</option>
                                <option value="2">Audit Report</option>
                            </select>
                        </div>
                        <div class="upload-form-input">
                            <label for="financial-year">
                                Financial Year
                                <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                            </label>
                            <input type="text" name="financial_year" id="financial-year" placeholder="e.g: 2025-26" required>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Linked custom script  -->
    <script src="../js/report_upload.js"></script>
</body>

</html>