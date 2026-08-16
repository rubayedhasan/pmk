<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Branches</title>


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../../includes/sharedLinks.php") ?>

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

    <!-- section::Main  -->
    <main>

        <div class="no-page">
            <figure class="coming-soon-container">
                <img src="../../assets/images/comming_soon.png" alt="coming soon">
            </figure>
        </div>
    </main>



</body>

</html>