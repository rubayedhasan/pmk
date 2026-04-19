<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK Gallery </title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="./styles/gallery.css">
</head>

<body>
    <main>
        <section id="pmk-image-gallery">
            <div class="container-width">
                <hgroup class="section-container">
                    <span class="section-label">
                        Visual Insights
                    </span>

                    <h3 class="section-title">
                        PMK Image Gallery
                    </h3>

                    <h4 class="section-subtitle">
                        Snapshots of outreach, impact, and operations across Bangladesh
                    </h4>

                    <p class="section-description">
                        Explore a curated collection of images capturing PMK’s activities, community engagement, and service delivery across diverse regions. This gallery highlights real-world moments from field operations, microfinance initiatives, and organizational outreach, offering a visual perspective on scale, impact, and presence nationwide.
                    </p>
                </hgroup>

                <div id="image-gallery-main-container">

                    <div class="button-container control-button-group">
                        <button type="button" class="visit-btn button-effect group-btn-active" data-filter="all">
                            <span>All Activities</span>
                        </button>
                        <button type="button" class="visit-btn button-effect" data-filter=".field">
                            <span>Field Operations</span>
                        </button>
                        <button type="button" class="visit-btn button-effect" data-filter=".mfi-program">
                            <span>MFI Programs</span>
                        </button>
                        <button type="button" class="visit-btn button-effect" data-filter=".community">
                            <span>Community Engagement</span>
                        </button>
                        <button type="button" class="visit-btn button-effect" data-filter=".training">
                            <span>Training & Workshops</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>