<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Our Story</title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="./styles/about.css">
</head>

<body>

    <div class="container-width">
        <!-- section:: About Image  -->
        <section class="about-image-container">
            <!-- 1st: image  -->
            <div class="image-wrapper">
                <figure class="long-img-container shinny-effect">
                    <img class="long-img" loading="lazy" decoding="async" fetchpriority="low" src="./assets/images/dummy-img-3.png" alt="dummy">
                </figure>
                <!-- experience year -->
                <div class="experience">
                    <h4>38+</h4>
                    <p>Years Of Experience</p>
                </div>
            </div>

            <!-- 2nd: image  -->
            <figure class="wider-img-container shinny-effect">
                <img class="wide-img" loading="lazy" decoding="async" fetchpriority="low" src="./assets/images/dummy-img-1.png" alt="dummy">
            </figure>
        </section>
    </div>

    <!-- section:: About Content-container  -->
    <section class="about-content-container">
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
                <?php include_once("./perspective.php") ?>

                <!-- about visit button  -->
                <div class="button-container">
                    <a href="" class="visit-btn button-effect">
                        <span>Stories That Inspire</span>
                        <span class="btn-indicator"><i class="fa-solid fa-arrow-right-long"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>