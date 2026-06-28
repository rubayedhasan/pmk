<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Page</title>


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/our_story.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- hero section -->
        <section id="story-hero">
            <div class="story-hero-content">
                <span class="story-hero-label">PMK Stories</span>
                <h1 class="story-hero-title">
                    We exist to
                    <br>
                    <span style="color:var(--pmk-green); padding:0; margin:0;">
                        create lasting change
                    </span>
                </h1>
                <p class="story-hero-description">
                    At PMK, we work with communities to build a better tomorrow through education, healthcare, livelihoods and empowerment.
                </p>

                <div class="story-hero-tagline">
                    <p class="tagline-text">Together, we empower lives and
                        <br> build brighter futures.
                    </p>
                </div>

                <div class="contact-button-container">
                    <a href="" class="contact-button">
                        <span>Explore Our Journey</span>
                        <span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right-dashed">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12h.5m3 0h1.5m3 0h6" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="scroll-down-indicator">
                <span class="scroll-indicator-text">Scroll</span>
                <span class="scroll-indicator-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-down-dashed">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5v.5m0 3v1.5m0 3v6" />
                        <path d="M16 15l-4 4" />
                        <path d="M8 15l4 4" />
                    </svg>
                </span>
            </div>
        </section>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>

</body>

</html>