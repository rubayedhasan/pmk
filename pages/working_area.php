<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Working Area</title>

    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

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

        .branch-list-card {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 24px 28px;
            margin-bottom: 24px;
            background: #fff;
            border-radius: 8px;
            border: 1.5px solid rgba(0, 148, 106, 0.12);
        }

        .blc-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--pmk-green-light);
            color: var(--pmk-green-dark);
        }

        .blc-content {
            flex: 1;
        }

        .blc-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--pmk-blue-dark);
            margin-bottom: 4px;
        }

        .blc-text {
            font-size: 0.85rem;
            color: rgba(31, 41, 51, 0.58);
            line-height: 1.5;
        }

        .blc-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
            padding: 12px 20px;
            font-size: 0.9rem;
            font-weight: 700;
            color: #fff;
            background: var(--pmk-green);
            border-radius: 6px;
            transition: background 0.25s, gap 0.25s;
            white-space: nowrap;
        }

        .blc-button:hover {
            background: var(--pmk-green-dark);
            gap: 12px;
        }

        .blc-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 640px) {
            .branch-list-card {
                flex-direction: column;
                text-align: center;
            }

            .blc-button {
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
        <section id="working-area">
            <div class="container-width">
                <div class="branch-list">
                    <div class="branch-list-card">
                        <div class="blc-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 18.5l-2.5 -2.5l2.5 -2.5l2.5 2.5z" />
                                <path d="M12 2a8 8 0 0 1 8 8c0 5.5 -8 12 -8 12s-8 -6.5 -8 -12a8 8 0 0 1 8 -8z" />
                            </svg>
                        </div>
                        <div class="blc-content">
                            <h4 class="blc-title">Explore Our Branch Network</h4>
                            <p class="blc-text">
                                Browse the complete list of PMK branch offices across all 64 districts, with contact details and locations for each one.
                            </p>
                        </div>
                        <a href="./branches.php" class="blc-button">
                            <span>View Branch List</span>
                            <span class="blc-arrow">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M13 18l6 -6" />
                                    <path d="M13 6l6 6" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

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
    include("../includes/footer.php");
    ?>

</body>

</html>