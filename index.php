<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Home</title>
    <!-- Linked Fav Icon  -->
    <link rel="shortcut icon" href="./assets/logo/main-logo.png" type="image/x-icon">

    <!-- Linked to shared stylesheet and scripts" -->
    <?php require_once("./includes/sharedLinks.php") ?>
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include_once("./includes/navbar.php");

    // Linked section:: Banner
    include_once("./includes/banner.php");

    // Linked section:: Social Media
    include_once("./includes/social.php");
    ?>

    <!-- section::Main  -->
    <main>
        <?php
        // Linked section:: About
        include_once("./includes/about.php");

        // Linked section:: Executive Message
        include_once("./includes/executive.php");

        // Linked section:: PMK At a Glance
        include_once("./includes/glance.php");

        // Linked section:: PMK Projects
        include_once("./includes/projects.php");

        // Linked section:: Gallery
        include_once("./includes/gallery.php");

        // Linked section:: video Gallery 
        include_once("./includes/video-gallery.php");

        // Linked section:: Latest News
        include_once("./includes/recent-activities.php");

        // Linked section:: PMK Partners 
        include_once("./includes/partner.php");
        ?>

        <!-- back to top button  -->
        <button type="button" id="backToTop" class="back-to-top-button" onclick="window.scrollTo({top:0, behavior:'smooth'})">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-up-dashed">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5v6m0 3v1.5m0 3v.5" />
                <path d="M16 9l-4 -4" />
                <path d="M8 9l4 -4" />
            </svg>
        </button>
    </main>

    <?php
    // Linked section:: footer-member 
    include_once("./includes/footer-member.php");

    // Linked section:: Footer
    include_once("./includes/footer.php");
    ?>
</body>

</html>