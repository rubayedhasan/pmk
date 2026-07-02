<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Page</title>


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <style>
        .no-page {
            padding: 100px 10%;
        }

        .coming-soon-container {
            width: 580px;
            height: 330px;
            aspect-ratio: 4 / 3;
            margin: 0 auto;
        }

        .coming-soon-container img {
            width: 100%;
            height: 100%;
        }

        /* reset footer  */
        .footer-main {
            margin-top: 0 !important;
        }

        .copyright {
            background-color: #fff !important;
        }

        @media (max-width: 767.98px) {
            .no-page {
                padding: 50px 6%;
            }

            .coming-soon-container {
                width: 90%;
                height: 180px;
            }
        }
    </style>
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <!-- section::Main  -->
    <main>

        <div class="no-page">
            <figure class="coming-soon-container">
                <img src="../assets/images/comming_soon.png" alt="coming soon">
            </figure>
        </div>


        <!-- back to top button  -->
        <!-- <button type="button" id="backToTop" class="back-to-top-button" onclick="window.scrollTo({top:0, behavior:'smooth'})">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-up-dashed">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5v6m0 3v1.5m0 3v.5" />
                <path d="M16 9l-4 -4" />
                <path d="M8 9l4 -4" />
            </svg>
        </button> -->
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>

</body>

</html>