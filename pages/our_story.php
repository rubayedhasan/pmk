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

        <!-- section:: who we are -->
        <section id="who-we-are">
            <div class="container-width">
                <!-- section header -->
                <hgroup class="who-we-are-header">
                    <span class="who-we-are-label">Who We Are</span>
                    <h4 class="who-we-are-title">
                        From a Small Initiative to
                        <br>
                        <span style="color: var(--pmk-green);">
                            A National Development Organization
                        </span>
                    </h4>
                </hgroup>

                <!-- pmk history description content  -->
                <div class="pmk-journey-content">
                    <p class="pmk-journey-text">
                        Palli Mongal Karmosuchi (PMK) is a national-level development organization headquartered in Zirabo, Ashulia, approximately 20 kilometers from Dhaka. Founded in 1988 through the voluntary efforts of socially conscious youth, PMK was established with the inspiration of Dewan Abdul Mannan and under the visionary leadership of Ms. Kamrun Nahar, who continues to serve as the Chief Executive.
                    </p>
                    <p class="pmk-journey-text">
                        Initially focused on providing humanitarian relief to disaster-affected communities, PMK quickly gained recognition for its effective emergency response. It was formally registered with the Directorate of Social Services in 1988 and with the NGO Affairs Bureau in 1993 to facilitate foreign funding. Over time, PMK expanded its focus to long-term development, addressing poverty and inequality through programs in education, healthcare, microfinance, skill development, and community empowerment. Now in its 38th year, PMK stands as a trusted organization committed to sustainable development, social justice, and improving the lives of marginalized populations across rural Bangladesh
                    </p>

                    <div class="pmk-sub-content">
                        <h5 class="sub-content-label">Major Activities:</h5>
                        <p class="pmk-journey-text">
                            To bring self-reliance among the powerless poor women for promoting socio-economic and facilitating in establishing their human rights in the society so that they themselves can plan and implement different socio economic and environmental activities with a view to setting up an institutional framework to establish a balanced society. PMK provides the following broad services:
                        </p>
                        <ul class="sub-content-list">
                            <li class="list-text">Financial intermediation through microfinance</li>
                            <li class="list-text">Social development service</li>
                            <li class="list-text">Micro enterprises</li>
                            <li class="list-text">Necessity of Enterprise of Enhance Development (NEED)</li>
                        </ul>
                    </div>

                    <p class="pmk-journey-text">
                        PMK MF program is being operated on a medium scale, as an independent program. Presently PMK operating 364 branches in 36 districts and 7 divisions. In order to create more employment opportunities PMK has initiated support to small entrepreneurs, so that they can expand their business and increase employments opportunities in their enterprises.
                    </p>
                </div>

                <!-- sub-section: story board  -->
                <div class="story-board-layout">
                    <!-- 1st story  -->
                    <figure class="story-figure story-figure-1">
                        <img src="../assets/story-board/medical_team_pmk.png" alt="pmk hospital">
                        <figcaption class="story-text">Healing Lives, Restoring Hope</figcaption>
                    </figure>
                    <!-- 2nd story  -->
                    <figure class="story-figure story-figure-2">
                        <img src="../assets/story-board/various_project.png" alt="pmk hospital">
                        <figcaption class="story-text">Women Leading Change</figcaption>
                    </figure>
                    <!-- 3rd story  -->
                    <figure class="story-figure story-figure-3">
                        <img src="../assets/story-board//smart.png" alt="smart project" style="object-position: top;">
                        <figcaption class="story-text">Work with Dignity, Live with Pride</figcaption>
                    </figure>
                    <!-- 4th story  -->
                    <figure class="story-figure story-figure-4">
                        <img src="../assets/story-board/pmk-promo-card-whiteBg.png" alt="pmk" style="object-fit: scale-down; object-position: center;">
                    </figure>
                    <!-- 5th story  -->
                    <figure class="story-figure story-figure-5">
                        <img src="../assets/story-board/tissue.png" alt="tissue culture lab" style="object-position: top;">
                        <figcaption class="story-text">Cultivating a Greener Tomorrow</figcaption>
                    </figure>
                    <!-- 6th story  -->
                    <figure class="story-figure story-figure-6">
                        <img src="../assets/story-board/infont_of_pmk.png" alt="infont_of_pmk">
                        <figcaption class="story-text">Standing With Communities</figcaption>
                    </figure>
                    <!-- 7th story  -->
                    <figure class="story-figure story-figure-7">
                        <img src="../assets/story-board/youth-group-2.png" alt="raise project">
                        <figcaption class="story-text">Creating Opportunities, Changing Lives</figcaption>
                    </figure>


                    <!-- extra  -->
                    <figure class="story-figure story-figure-8">
                        <img src="../assets/story-board/agriculture.jpg" alt="raise project">
                        <figcaption class="story-text">Empowering Families Through Livelihoods</figcaption>
                    </figure>
                    <figure class="story-figure story-figure-9">
                        <img src="../assets/story-board/group-together.jpg" alt="raise project" style=" object-position: center;">
                        <figcaption class="story-text">Where Hope Meets Action</figcaption>
                    </figure>
                    <figure class="story-figure story-figure-10">
                        <img src="../assets/story-board/women.jpg" alt="raise project">
                        <figcaption class="story-text">Empowering Every Dream</figcaption>
                    </figure>
                </div>

                <!-- pmk mission and vision and objective  -->
                <div class="inshort-vmo-layout">
                    <div class="inshort-vmo">
                        <h4 class="inshort-vmo-title">Vision</h4>
                        <p class="inshort-vmo-text">
                            A society which is economically productive and equitable, socially just, environmentally sound, and effectively democratic.
                        </p>
                    </div>
                    <div class="inshort-vmo">
                        <h4 class="inshort-vmo-title">Mission</h4>
                        <p class="inshort-vmo-text">
                            Participatory sustainable development provided institutional support to the poor (Particularly women)
                        </p>
                    </div>
                    <div class="inshort-vmo">
                        <h4 class="inshort-vmo-title">Objective </h4>
                        <p class="inshort-vmo-text">
                            The overall objective of PMK is to alleviate the poverty of poor families and empower women and men in social and economic aspects.
                        </p>
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