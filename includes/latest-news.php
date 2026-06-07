<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK Latest news </title>

    <!-- Linked custom stylesheet  -->
    <style>
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

        #recent-activity-container.section-visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0px);
        }

        .activity-card {
            padding: 20px;
            border-radius: 8px;
            background-color: var(--pmk-white);

            border: 1px solid rgba(0, 0, 0, 0.04);
            box-shadow:
                0 4px 12px rgba(0, 0, 0, 0.04),
                0 10px 30px rgba(0, 0, 0, 0.06);

            transition: all 0.3s ease;
        }

        .activity-card:hover {
            box-shadow:
                0 8px 20px rgba(0, 0, 0, 0.08),
                0 20px 50px rgba(0, 0, 0, 0.12);
        }

        .news-feature-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 6px;
        }

        .news-feature-image-linked {
            display: block;
            width: 100%;
            height: 200px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 6px;
        }

        .news-feature-image-linked img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 2px;
        }

        .news-feature-image-linked video {
            width: 100%;
            height: 100%;
        }

        .news-posted-date {
            display: inline-block;

            color: grey;
            font-size: 0.75rem;
            font-weight: 400;
        }

        .news-title {
            color: var(--pmk-blue-dark);
            font-size: 1.35rem;
            font-weight: 600;
            margin-top: 16px;
            transition: color 0.3s ease;
        }

        .news-title:hover {
            color: var(--pmk-green-dark);
        }

        .news-title .linked-title {
            color: inherit;
        }

        .news-body {
            font-size: 0.95rem;
            margin-top: 8px;
            font-weight: 500;
        }

        .news-link {
            color: var(--pmk-green-dark-sublet);
            display: inline-flex;
            gap: 4px;
            font-size: 0.9rem;
            font-weight: 700;
            margin-top: 5px;

            position: relative;
            transition: all 0.5s ease;
        }

        .news-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;

            height: 2px;
            width: 0;
            background-color: var(--pmk-green-dark-sublet);

            transition: all 0.5s ease;
        }

        .news-link:hover {
            color: var(--pmk-green-dark);
        }

        .news-link:hover::after {
            width: 100%;
        }

        /* responsive styles:: small devices  */
        @media (max-width: 767.98px) {
            #recent-activity-container {
                grid-template-columns: 1fr;
            }
        }

        /* responsive styles:: medium devices  */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #recent-activity-container {
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
        <!-- recent activity container  -->
        <div id="recent-activity-container">
            <!--1st:: activity item  -->
            <article class="activity-card">
                <figure class="news-feature-image">
                    <a href="" class="news-feature-image-linked">
                        <video src="./assets/videos/channel_i_feature_pmk_news update.mp4" controls></video>
                    </a>
                    <figcaption class="news-posted-date">
                        May 13, 2026
                    </figcaption>
                </figure>


                <!-- activity content  -->
                <div class="news-content">

                    <h4 class="news-title">
                        <a href="" class="linked-title">
                            Channel i to Air “MFIs in Inclusive Development” with PMK Chief Executive Kamrun Nahar
                        </a>
                    </h4>
                    <p class="news-body">
                        Mr. Kamrun Nahar, Chief Executive of Palli Mongal Karmosuchi (PMK), attended as a special guest at the program titled “MFIs in Inclusive Development,” organized by Credit and Development Forum (CDF). The event highlighted the role of socio-economic development, financial inclusion, and microfinance activities in Bangladesh. The program will be aired on Channel i on Friday, May 15, 2026, at 11:30 AM.
                    </p>
                    <a href="" class="news-link">
                        <span> See More</span>
                        <span><i class="fa-solid fa-caret-right"></i></span>
                    </a>
                </div>
            </article>

            <!--2nd:: activity item  -->
            <article class="activity-card">
                <figure class="news-feature-image">
                    <a href="" class="news-feature-image-linked">
                        <img src="./assets/images/dummy-img-1.png" alt="news feature image">
                    </a>
                    <figcaption class="news-posted-date">
                        April 18, 2026
                    </figcaption>
                </figure>


                <!-- activity content  -->
                <div class="news-content">

                    <h4 class="news-title">
                        <a href="" class="linked-title">
                            Community Health Camp Reaches Hundreds in Rural Areas
                        </a>
                    </h4>
                    <p class="news-body">
                        Our organization successfully conducted a community health camp aimed at providing accessible healthcare services to rural populations. The initiative brought together qualified medical professionals and volunteers to offer free consultations, basic treatments, and health awareness sessions.
                    </p>
                    <a href="" class="news-link">
                        <span> See More</span>
                        <span><i class="fa-solid fa-caret-right"></i></span>
                    </a>
                </div>
            </article>

            <!--3rd:: activity item  -->
            <article class="activity-card">
                <figure class="news-feature-image">
                    <a href="" class="news-feature-image-linked">
                        <img src="./assets/images/dummy-img-1.png" alt="news feature image">
                    </a>
                    <figcaption class="news-posted-date">
                        April 18, 2026
                    </figcaption>
                </figure>


                <!-- activity content  -->
                <div class="news-content">

                    <h4 class="news-title">
                        <a href="" class="linked-title">
                            Community Health Camp Reaches Hundreds in Rural Areas
                        </a>
                    </h4>
                    <p class="news-body">
                        Our organization successfully conducted a community health camp aimed at providing accessible healthcare services to rural populations. The initiative brought together qualified medical professionals and volunteers to offer free consultations, basic treatments, and health awareness sessions.
                    </p>
                    <a href="" class="news-link">
                        <span> See More</span>
                        <span><i class="fa-solid fa-caret-right"></i></span>
                    </a>
                </div>
            </article>
        </div>
    </main>
</body>

</html>