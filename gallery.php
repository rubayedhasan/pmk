<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK Gallery </title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="./styles/gallery.css">
</head>

<body>
    <main>
        <!-- section :: PMK Image Gallery  -->
        <section id="pmk-image-gallery">
            <div class="container-width">
                <hgroup class="section-container">
                    <span class="section-label">
                        Visual Insights
                    </span>

                    <h3 class="section-title">
                        PMK Image Gallery
                    </h3>

                    <h4 class="section-subtitle">
                        Snapshots of outreach, impact, and operations across Bangladesh
                    </h4>

                    <p class="section-description">
                        Explore a curated collection of images capturing PMK’s activities, community engagement, and service delivery across diverse regions. This gallery highlights real-world moments from field operations, microfinance initiatives, and organizational outreach, offering a visual perspective on scale, impact, and presence nationwide.
                    </p>
                </hgroup>

                <!-- image gallery  -->
                <div id="image-gallery-main-container">
                    <!-- gallery category buttons  -->
                    <div class="button-container controller-group-button">
                        <button type="button" class="visit-btn button-effect group-btn-active" data-filter="all">
                            <span>All Activities</span>
                        </button>
                        <button type="button" class="visit-btn button-effect" data-filter="field">
                            <span>Field Operations</span>
                        </button>
                        <button type="button" class="visit-btn button-effect" data-filter="mfi-program">
                            <span>MFI Programs</span>
                        </button>
                        <button type="button" class="visit-btn button-effect" data-filter="community">
                            <span>Community Engagement</span>
                        </button>
                        <button type="button" class="visit-btn button-effect" data-filter="training">
                            <span>Training & Workshops</span>
                        </button>
                    </div>

                    <!-- image gallery container  -->
                    <div class="image-gallery">
                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="field">
                            <div class="image-item">
                                <img src="./assets/slider/infont_of_pmk.png" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="mfi-program">
                            <div class="image-item">
                                <img src="./assets/slider/wash_project.JPG" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="community">
                            <div class="image-item">
                                <img src="./assets/slider/medical_team_pmk.jpg" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="training">
                            <div class="image-item">
                                <img src="./assets/slider/various_project.JPG" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="training">
                            <div class="image-item">
                                <img src="./assets/slider/world_bank_visitor_at_pmk.JPG" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="field">
                            <div class="image-item">
                                <img src="./assets/slider/infont_of_pmk.png" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="mfi-program">
                            <div class="image-item">
                                <img src="./assets/slider/wash_project.JPG" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="community">
                            <div class="image-item">
                                <img src="./assets/slider/medical_team_pmk.jpg" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="training">
                            <div class="image-item">
                                <img src="./assets/slider/various_project.JPG" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item  -->
                        <div class="gallery-item" data-category="training">
                            <div class="image-item">
                                <img src="./assets/slider/world_bank_visitor_at_pmk.JPG" alt="">

                                <!-- overlay  -->
                                <div class="image-overlay">
                                    <p>PMK Snaps</p>
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- image popover container  -->
                    <div class="image-popover">
                        <span class="close-popover">&times;</span>
                        <img src="./assets/slider/various_project.JPG" alt="">
                    </div>

                    <!-- view more button  -->
                    <div class="button-container">
                        <button type="button" class="visit-btn visit-btn-outline button-effect">
                            <span><i class="fa-solid fa-users-viewfinder"></i></span>
                            <span>View More</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Liked custom script  -->
    <script src="./js/gallery.js"></script>
</body>

</html>