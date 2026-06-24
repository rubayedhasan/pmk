<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK Latest news </title>

    <!-- Linked custom stylesheet  -->
    <style>
        #project-update-container,
        #recent-activity-container {
            padding-top: 50px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;

            opacity: 0;
            visibility: hidden;
            transform: translateY(100px);
            transition: all 1.2s ease;
        }

        #project-update-container.section-visible,
        #recent-activity-container.section-visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0px);
        }

        .project-update-card {
            padding: 20px;
            border-radius: 8px;
            background-color: var(--pmk-white);

            border: 1px solid rgba(0, 0, 0, 0.04);
            box-shadow:
                0 4px 12px rgba(0, 0, 0, 0.04),
                0 10px 30px rgba(0, 0, 0, 0.06);

            transition: all 0.3s ease;
        }

        .project-update-card:hover {
            box-shadow:
                0 8px 20px rgba(0, 0, 0, 0.08),
                0 20px 50px rgba(0, 0, 0, 0.12);
        }

        .project-feature-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 6px;
        }

        .project-feature-image-linked {
            display: block;
            width: 100%;
            height: 200px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 6px;
        }

        .project-feature-image-linked img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 2px;
        }

        .project-feature-image-linked video {
            width: 100%;
            height: 100%;
        }

        .project-posted-date {
            display: inline-block;

            color: grey;
            font-size: 0.75rem;
            font-weight: 400;
        }

        .project-title {
            color: var(--pmk-blue-dark);
            font-size: 1.35rem;
            font-weight: 600;
            margin-top: 16px;
            transition: color 0.3s ease;
        }

        .project-title:hover {
            color: var(--pmk-green-dark);
        }

        .project-title .project-name {
            color: inherit;
        }

        .project-body {
            font-size: 0.95rem;
            margin-top: 8px;
            font-weight: 500;
        }

        .project-link {
            color: var(--pmk-green-dark-sublet);
            display: inline-flex;
            gap: 4px;
            font-size: 0.9rem;
            font-weight: 700;
            margin-top: 5px;

            position: relative;
            transition: all 0.5s ease;
        }

        .project-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;

            height: 2px;
            width: 0;
            background-color: var(--pmk-green-dark-sublet);

            transition: all 0.5s ease;
        }

        .project-link:hover {
            color: var(--pmk-green-dark);
        }

        .project-link:hover::after {
            width: 100%;
        }

        /* responsive styles:: small devices  */
        @media (max-width: 767.98px) {

            #project-update-container {
                grid-template-columns: 1fr;
            }
        }

        /* responsive styles:: medium devices  */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #project-update-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* responsive styles:: large devices  */
        @media (min-width: 992px) and (max-width: 1199.98px) {}

        /* responsive styles:: extra large devices  */
        @media (min-width: 1200px) and (max-width: 1399.98px) {}

        /* responsive styles:: extra extra large devices  */
        @media (min-width: 1400px) {}
    </style>
</head>

<body>
    <main>
        <!--project update container  -->
        <div id="project-update-container">
            <!--1st:: project card item  -->
            <article class="project-update-card">
                <figure class="project-feature-image">
                    <a href="" class="project-feature-image-linked">
                        <img src="../assets/images/project-update.png" alt="project feature image">
                    </a>
                    <figcaption class="project-posted-date">
                        April 20, 2026
                    </figcaption>
                </figure>


                <!-- project content  -->
                <div class="project-content">

                    <h4 class="project-title">
                        <a href="" class="project-name">
                            Expanding Access to Clean Water in Rural Communities
                        </a>
                    </h4>
                    <p class="project-body">
                        We are currently advancing our clean water initiative aimed at improving access to safe and reliable drinking water in rural communities. Many households in these areas still rely on unsafe water sources, leading to preventable health issues.
                    </p>
                    <a href="" class="project-link">
                        <span> See More</span>
                        <span><i class="fa-solid fa-caret-right"></i></span>
                    </a>
                </div>
            </article>

            <!--2nd:: activity item  -->
            <article class="project-update-card">
                <figure class="project-feature-image">
                    <a href="" class="project-feature-image-linked">
                        <img src="../assets/images/project-update.png" alt="project feature image">
                    </a>
                    <figcaption class="project-posted-date">
                        April 20, 2026
                    </figcaption>
                </figure>


                <!-- project content  -->
                <div class="project-content">

                    <h4 class="project-title">
                        <a href="" class="project-name">
                            Expanding Access to Clean Water in Rural Communities
                        </a>
                    </h4>
                    <p class="project-body">
                        We are currently advancing our clean water initiative aimed at improving access to safe and reliable drinking water in rural communities. Many households in these areas still rely on unsafe water sources, leading to preventable health issues.
                    </p>
                    <a href="" class="project-link">
                        <span> See More</span>
                        <span><i class="fa-solid fa-caret-right"></i></span>
                    </a>
                </div>
            </article>

            <!--3rd:: activity item  -->
            <article class="project-update-card">
                <figure class="project-feature-image">
                    <a href="" class="project-feature-image-linked">
                        <img src="../assets/images/project-update.png" alt="project feature image">
                    </a>
                    <figcaption class="project-posted-date">
                        April 20, 2026
                    </figcaption>
                </figure>


                <!-- project content  -->
                <div class="project-content">

                    <h4 class="project-title">
                        <a href="" class="project-name">
                            Expanding Access to Clean Water in Rural Communities
                        </a>
                    </h4>
                    <p class="project-body">
                        We are currently advancing our clean water initiative aimed at improving access to safe and reliable drinking water in rural communities. Many households in these areas still rely on unsafe water sources, leading to preventable health issues.
                    </p>
                    <a href="" class="project-link">
                        <span> See More</span>
                        <span><i class="fa-solid fa-caret-right"></i></span>
                    </a>
                </div>
            </article>
        </div>
    </main>
</body>

</html>