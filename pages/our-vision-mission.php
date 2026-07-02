<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Mission and Vision</title>


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/our_vision-mission.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <main>
        <!-- section:: hero / banner  -->
        <section id="vision-mission-hero">
            <div class="container-width">
                <span class="vm-hero-label">What We Aim For</span>
                <h1 class="vm-hero-title">
                    Building a society where no one is left behind by poverty.
                </h1>
                <p class="vm-heo-description">
                    Empowering vulnerable communities through education, healthcare, microfinance, and sustainable livelihoods, creating opportunities that inspire dignity, resilience, and lasting social progress together.
                </p>
            </div>
        </section>

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
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>

</body>

</html>