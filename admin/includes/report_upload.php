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
    <link rel="stylesheet" href="../styles/post_news.css">
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
            <button type="button" class="publish-action-button ppab-green publish-button" onclick="uploadThePost()">
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

        <!-- section:: post  -->
        <section id="post" class="post-section section-hidden">
            <div class="container-width">
                <div class="post-section-container">
                    <!-- category form  -->
                    <div class="section-form-container grid-full">
                        <!-- post form  container (form will create by js FormData obj)-->
                        <div class="section-form">
                            <!-- input:: Image upload       -->
                            <div class="form-input grid-full">
                                <div class="upload-image-header">
                                    <div>
                                        <h4 class="upload-header-title">Upload Images</h4>
                                        <p class="upload-header-text">
                                            Fill in the necessary fields by assigning a category and uploading an image for each row.
                                        </p>
                                    </div>
                                    <button type="button" class="image-row-add-btn" id="img-row-add-btn" onclick="addNewRow()">
                                        + Add Image
                                    </button>
                                </div>

                                <!-- form table  -->
                                <div class="image-table-wrapper">
                                    <table class="table-upload-image">
                                        <thead>
                                            <tr>
                                                <th>Image Category</th>
                                                <th>Image</th>
                                                <th>Preview</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="image-tbody" id="imageTbody"></tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- for show the table row  -->
                            <template id="image-row-template">
                                <tr>
                                    <!-- image category  -->
                                    <td>
                                        <select class="image-category">
                                            <option value="">Select Image Category</option>

                                            <!-- Website UI -->
                                            <option value="slider">Slider</option>
                                            <option value="page-banner">Page Banner</option>
                                            <option value="thumbnail">Thumbnail</option>

                                            <!-- Content -->
                                            <option value="project">Project</option>
                                            <option value="field-operations">Field Operations</option>
                                            <option value="program-events">Program & Events</option>
                                            <option value="community-engagement">Community Engagement</option>
                                            <option value="training-workshops">Training & Workshops</option>
                                            <option value="project-update">Project Update</option>
                                            <option value="recent-activity">Recent Activity</option>

                                            <!-- Media -->
                                            <option value="gallery">Gallery</option>
                                            <option value="report-cover">Report Cover</option>
                                            <option value="publication-cover">Publication Cover</option>
                                        </select>
                                        <span class="image-category-label section-hidden"></span>
                                    </td>

                                    <!-- image input  -->
                                    <td>
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
                                            <h5 class="drop-area-title">Click to upload, or drag an image here</h5>
                                            <p class="drop-area-text">JPG, PNG, WEBP — up to 5MB</p>
                                            <input type="file" class="post-image section-hidden" accept="image/*">
                                        </div>
                                    </td>

                                    <!-- preview  -->
                                    <td>
                                        <div class="image-preview-area"></div>
                                    </td>

                                    <!-- action  -->
                                    <td>
                                        <button type="button" class="delete-image-row-btn" title="Remove Row">✕</button>
                                    </td>
                                </tr>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Linked custom script  -->
    <script src="../js/post_news.js"></script>
</body>

</html>