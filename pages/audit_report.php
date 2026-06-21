<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Audit Report</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/otherPageSharedLinks.php") ?>

    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/annual_report.css">
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
                    <span class="breadcrumb-link">Audit Report</span>
                </div>

                <!-- title  -->
                <h1 class="report-hero-title">
                    Audit
                    <span style="color:var(--pmk-green);">Report</span>
                </h1>
                <p class="report-hero-text">
                    Explore PMK’s audit reports, highlighting financial transparency, accountability, and responsible governance.
                </p>
            </div>
        </section>


    </main>

    <?php
    // Linked section:: Footer
    include("../includes/otherPageFooter.php");
    ?>



</body>

</html>