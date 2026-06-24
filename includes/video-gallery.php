<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK video Gallery</title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/video-gallery.css">
</head>

<body>
    <main>
        <!-- section:: Video Gallery  -->
        <section id="pmk-video-gallery">
            <div class="container-width">
                <hgroup class="section-container">
                    <span class="section-label">
                        Visual Stories
                    </span>

                    <h3 class="section-title">
                        PMK Moments
                    </h3>

                    <h4 class="section-subtitle">
                        Stories of impact through motion
                    </h4>

                    <p class="section-description">
                        A curated archive of video documentation showcasing PMK’s operational activities, training programs, and regional outreach efforts across multiple sectors.
                    </p>
                </hgroup>

                <!-- video container -->
                <div class="video-container-parent">

                    <!-- main container  -->
                    <div class="main-video-container">
                        <video src="../assets/videos/pmk_documentary_final.mp4" class="main-video" controls></video>
                        <h4 class="main-video-title">
                            <span><i class="fa-brands fa-bilibili"></i></span>
                            <span class="main-video-title-text">
                                Documentary of PMK
                            </span>
                        </h4>
                    </div>

                    <!-- playlist  -->
                    <div class="playlist-container">
                        <h3 class="playlist-title">Featured Stories</h3>

                        <div class="playlist">

                            <!-- 1st list  -->
                            <div class="list list-active">
                                <video src="../assets/videos/pmk_documentary_final.mp4" class="list-video"></video>
                                <h4 class="list-video-title">Documentary of PMK</h4>
                            </div>

                            <!-- 2nd list  -->
                            <div class="list">
                                <video src="../assets/videos/chqanel-i_broadcast_pmk.mp4" class="list-video"></video>
                                <h4 class="list-video-title">PMK Executive Director Featured on Channel i</h4>
                            </div>

                            <!-- 3rd list  -->
                            <div class="list">
                                <video src="../assets/videos/channel-i_visit_pmk.mp4" class="list-video"></video>
                                <h4 class="list-video-title">Documentary on PMK by Channel i</h4>
                            </div>

                            <!-- 4th list  -->
                            <div class="list">
                                <video src="../assets/videos/pmk_free_medical_camp_documentary.mp4" class="list-video"></video>
                                <h4 class="list-video-title">PMK Free Healthcare Initiative</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Linked custom script  -->
    <script src="../js/video.js"></script>
</body>

</html>