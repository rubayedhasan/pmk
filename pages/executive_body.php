<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Page</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/otherPageSharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/executive_body.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/otherPageNavbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section:: executive body hero  -->
        <section id="executive-body-hero">
            <div class="container-width">
                <div class="exe-hero-header">
                    <!-- label  -->
                    <div class="exe-hero-label">
                        <span class="exe-hero-lbl-eyebrow"></span>
                        <span class="exe-hero-lbl-text">Organizational Governance</span>
                        <span class="exe-hero-lbl-eyebrow"></span>
                    </div>

                    <!-- title  -->
                    <h1 class="exe-hero-title">
                        Leadership Driving
                        <br>
                        <span style="color: var(--pmk-green);"> PMK Forward</span>
                    </h1>

                    <!-- text  -->
                    <p class="exe-hero-text">
                        Meet the executive team dedicated to advancing PMK’s mission, fostering positive change, and serving our community with integrity, compassion, and a shared commitment to sustainable impact.
                    </p>

                    <!-- hero meta info  -->
                    <div class="exe-hero-meta-container">
                        <!-- executive member  -->
                        <div class="exe-hero-meta">
                            <span class="exe-meta-value">07</span>
                            <span class="exe-meta-label">Executive Members</span>
                        </div>

                        <!-- found  -->
                        <div class="exe-hero-meta">
                            <span class="exe-meta-value">1988</span>
                            <span class="exe-meta-label">Founded</span>
                        </div>

                        <!-- branch  -->
                        <div class="exe-hero-meta">
                            <span class="exe-meta-value">364</span>
                            <span class="exe-meta-label">Branches</span>
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

</body>

</html>