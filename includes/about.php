<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Our Story</title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/about.css">
</head>

<body>

    <!-- section:: About Image  -->
    <section class="about-image">
        <!-- animation bubble  -->
        <div class="bubbles" aria-hidden="true">
            <!-- top-left group -->
            <span class="bubble b1"></span>
            <span class="bubble b2"></span>
            <span class="bubble b3"></span>
            <span class="bubble b4"></span>
            <!-- bottom-right group -->
            <span class="bubble b5"></span>
            <span class="bubble b6"></span>
            <span class="bubble b7"></span>
            <span class="bubble b8"></span>
        </div>

        <div class="container-width">
            <div id="about-image-container">
                <!-- 1st: image  -->
                <div class="image-wrapper">
                    <figure class="long-img-container shinny-effect">
                        <img class="long-img" loading="lazy" decoding="async" fetchpriority="low" src="../assets/pictures/pmk-team-2.jpg" alt="dummy">
                    </figure>
                    <!-- experience year -->
                    <div class="experience">
                        <h4>
                            <script>
                                document.write(new Date().getFullYear() - 1988);
                            </script>+
                        </h4>
                        <p>Years Of Experience</p>
                    </div>
                </div>

                <!-- 2nd: image  -->
                <figure class="wider-img-container shinny-effect">
                    <img class="wide-img" loading="lazy" decoding="async" fetchpriority="low" src="../assets/pictures/mfi-1.jpg" alt="dummy">
                </figure>
            </div>
        </div>
    </section>

    <!-- section:: About Content-container  -->
    <section id="about-content-container">
        <div class="container-width">
            <div class="about-content">
                <hgroup class="section-container">
                    <span class="section-label">
                        About PMK
                    </span>
                    <h3 class="section-title">
                        Empowering Communities Through Sustainable <br> Rural Development
                    </h3>
                    <h4 class="section-subtitle">
                        Palli Mongal Karmosuchi (PMK) – A National Non-Profit Organization Since 1988
                    </h4>
                    <p class="section-description">
                        Established in 1988, Palli Mongal Karmosuchi (PMK) is a nationally recognized development organization advancing rural communities through microfinance, livelihood programs, and inclusive support, ensuring transparency, accountability, and sustainable socio-economic growth across Bangladesh.
                    </p>
                </hgroup>

                <!-- Linked vmo (vision, mission, objective) section  -->
                <?php include_once("../includes/perspective.php") ?>

                <!-- about visit button  -->
                <div class="button-container">
                    <a href="../pages/our_story.php" class="visit-btn button-effect">
                        <span>Stories That Inspire</span>
                        <span class="btn-indicator"><i class="fa-solid fa-arrow-right-long"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>