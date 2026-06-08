<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Working Area</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/otherPageSharedLinks.php") ?>

    <link rel="stylesheet" href="../styles/index.css">
    <style>
        #working-area {
            margin-top: 40px;
        }

        .map-card {
            width: 100%;
            border-radius: 8px;
            border: 1.5px solid rgba(0, 148, 106, 0.12);
        }

        .map-header {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 14px;
            padding: 16px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        }

        .mh-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--pmk-blue-dark);
        }

        .mh-text {
            font-size: 0.85rem;
            color: rgba(31, 41, 51, 0.58);
            margin-top: 4px;
        }

        .map-frame {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: 720px;
            pointer-events: auto;
        }

        .map-footer {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 16px 24px;
            background: #fafafa;
            border-top: 1px solid rgba(0, 0, 0, 0.06);
        }

        .map-direct-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--pmk-green-dark);
            transition:
                gap 0.25s,
                color 0.25s;
        }


        .map-direct-link>span {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .map-direct-link>span>svg {
            width: 20px;
            height: 20px;
        }
    </style>
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/otherPageNavbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <section id="working-area">
            <div class="container-width">
                <div class="map-card">
                    <div class="map-header">
                        <div class="mh-content">
                            <h4 class="mh-title">Our Presence Across Bangladesh</h4>
                            <p class="mh-text">
                                Find PMK offices across Bangladesh, serving communities through development, financial inclusion, and social welfare initiatives.
                            </p>
                        </div>
                    </div>

                    <!-- map frame  -->
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zJSzOndzsXUYqjFYL87LglkUcIfY3bA&ehbc=2E312F" class="map-frame" allowfullscreen="" loading="lazy" fetchpriority="high" decoding="async"></iframe>

                    <div class="map-footer">
                        <a href="https://www.google.com/maps/d/u/0/embed?mid=1zJSzOndzsXUYqjFYL87LglkUcIfY3bA&ehbc=2E312F" target="_blank" class="map-direct-link">
                            <span>Get Directions</span>
                            <span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-external-link">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                    <path d="M11 13l9 -9" />
                                    <path d="M15 4h5v5" />
                                </svg>
                            </span>
                        </a>
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