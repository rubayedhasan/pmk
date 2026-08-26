<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Page</title>


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>
    <style>
        .app-download-section {
            padding: 64px 20px;
            background: #e6f4ef4a;
        }

        .app-download-container {
            max-width: 850px;
            margin: auto;
            padding: 35px;
            background: #ffffff;
            border-radius: 18px;
            display: flex;
            align-items: center;
            gap: 25px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .app-download-icon {
            width: 90px;
            height: 90px;
            flex-shrink: 0;
            border-radius: 20px;
            background: #fff url('../assets/logo/PMK_ERP_Logo.png') no-repeat center / 80%;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 42px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);

        }

        .app-download-content h2 {
            margin: 0 0 8px;
            font-size: 28px;
            color: #222;
        }

        .app-download-content p {
            margin: 0 0 20px;
            color: #666;
            line-height: 1.6;
        }

        .apk-download-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 25px;
            background: #198754;
            color: #fff !important;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s;
        }

        .apk-download-btn:hover {
            background: #146c43;
            transform: translateY(-2px);
        }

        .app-download-content small {
            display: block;
            margin-top: 10px;
            color: #888;
        }

        /* reset footer  */
        .footer-main {
            margin-top: 0 !important;
        }

        .copyright {
            background-color: #fff !important;
        }

        /* Mobile */
        @media (max-width: 600px) {
            .app-download-container {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }

            .app-download-content h2 {
                font-size: 23px;
            }

            .apk-download-btn {
                width: 100%;
                justify-content: center;
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
        <section class="app-download-section">
            <div class="app-download-container">
                <div class="app-download-icon">
                </div>
                <div class="app-download-content">
                    <h2>Download Our Android Mobile</h2>
                    <p>
                        This is PMK MFi Mobile App.
                    </p>
                    <a href="../upload/app/app-release-pmkmfi-v1.02.apk" class="apk-download-btn" download>
                        Download APK
                    </a>
                    <small>Android Application • APK</small>
                </div>

            </div>
        </section>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>

</body>

</html>