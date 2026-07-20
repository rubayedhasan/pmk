<?php
// connect database 
require_once("../admin/db/dbconnect.php");
$dbConnection = $conn;


// QUERY:: GET LATEST NEWS POST (with out PROJECT AND CAREER AND GALLERY)
$get_latest_post_query = "
SELECT
    p.post_customid,
    c.postcat_name,
    p.post_title,
    p.post_description,
    p.post_datetme
FROM posts p
INNER JOIN post_catecgory c
    ON p.post_cat = c.postcat_id
WHERE c.postcat_name NOT IN ('PROJECT', 'GALLERY', 'CAREER')
ORDER BY p.post_datetme DESC
LIMIT 6
";

$lates_posts_arr = $dbConnection->query($get_latest_post_query)->fetch_all(MYSQLI_ASSOC);


// echo "<pre>";
// print_r($lates_posts_arr);
// echo "</pre>";
?>

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
            line-height: 1.4;
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

            <?php
            if (count($lates_posts_arr) > 0) {
                foreach ($lates_posts_arr as $latest_post) {

                    // QUERY:: GET THUMBNAIL IMAGE
                    $thumbnail_img_query = "SELECT post_image from post_image WHERE postcust_id = '$latest_post[post_customid]' && postimage_cat = 'thumbnail'";
                    $thumbnail_img_arr = $dbConnection->query($thumbnail_img_query)->fetch_assoc();
                    $thumbnail_img = $thumbnail_img_arr['post_image'];

                    $formatted_date = date("d F, Y", strtotime($latest_post["post_datetme"]));

                    // formate the description 
                    $description = strip_tags($latest_post["post_description"]);
                    $words = explode(" ", $description);
                    $formatted_post_description = implode(" ", array_slice($words, 0, 30));
                    if (count($words) > 50) {
                        $formatted_post_description .= "...";
                    }

                    echo "
                <article class='activity-card'>
                <figure class='news-feature-image'>
                    <a href='../pages/news_page.php?post_id=$latest_post[post_customid]' class='project-feature-image-linked'>
                        <img src='../admin/assets/uploads/posts/$thumbnail_img' alt='project feature image'>
                    </a>

                    <figcaption style='display: flex; align-items:center; gap:16px;'>
                    <span class='news-posted-date' style='display: flex; align-items:center; gap:4px;'>
                    <svg width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-week'>
	                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
	                <path d='M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12' />
	                <path d='M16 3v4' />
	                <path d='M8 3v4' />
	                <path d='M4 11h16' />
	                <path d='M7 14h.013' />
	                <path d='M10.01 14h.005' />
	                <path d='M13.01 14h.005' />
	                <path d='M16.015 14h.005' />
	                <path d='M13.015 17h.005' />
	                <path d='M7.01 17h.005' />
	                <path d='M10.01 17h.005' />
                    </svg>

                        $latest_post[postcat_name]
                    </span>


                    <span class='news-posted-date' style='display: flex; align-items:center; gap:4px;'>
                    <svg width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-week'>
	                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
	                <path d='M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12' />
	                <path d='M16 3v4' />
	                <path d='M8 3v4' />
	                <path d='M4 11h16' />
	                <path d='M7 14h.013' />
	                <path d='M10.01 14h.005' />
	                <path d='M13.01 14h.005' />
	                <path d='M16.015 14h.005' />
	                <path d='M13.015 17h.005' />
	                <path d='M7.01 17h.005' />
	                <path d='M10.01 17h.005' />
                    </svg>

                        $formatted_date
                    </span>
                    </figcaption>
                </figure>
                <div class='news-content'>

                    <h4 class='news-title'>
                        <a href='../pages/news_page.php?post_id=$latest_post[post_customid]' class='linked-title'>
                           $latest_post[post_title]
                        </a>
                    </h4>
                    <p class='news-body'>
                        $formatted_post_description
                    </p>
                    <a href='../pages/news_page.php?post_id=$latest_post[post_customid]' class='news-link'>
                        <span> See More</span>
                        <span><i class='fa-solid fa-caret-right'></i></span>
                    </a>
                </div>
            </article>
                
                ";
                }
            }
            ?>
        </div>
    </main>
</body>

</html>

<?php
// close the database connection 
mysqli_close($dbConnection);
?>