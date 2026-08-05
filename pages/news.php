<?php
// connect database 
require_once("../admin/db/dbconnect.php");
$dbConnection = $conn;


// validation
if (isset($_GET["category"])) {
    // QUERY:: get all category 
    $get_category_query = "SELECT * FROM post_catecgory WHERE postcat_name = '$_GET[category]' || postcat_id = '$_GET[category]'";
} else {
    // QUERY:: get all category 
    $get_category_query = "SELECT * FROM post_catecgory WHERE postcat_name NOT IN ('REPORTS', 'GALLERY', 'CAREER', 'RESULTS')";
}

$category_arr = $dbConnection->query($get_category_query)->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Newspaper</title>
    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/news.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section:: main-news-page  -->
        <div class="container-width">
            <!-- header  -->
            <section id="news-header">
                <h1 class="news-header-title">News, Blogs & Latest Updates</h1>
                <p class="news-header-text">
                    Read the latest news, blog posts, project updates, notices, events, reports, publications, career opportunities, and organizational announcements.
                </p>
            </section>

            <?php
            foreach ($category_arr as $category) {
                echo "
                    <h3 class='category-name'>$category[postcat_name]</h3>
                    <div id='recent-activity-container' class='section-visible'>";

                // QUERY:: GET LATEST NEWS POST (with out PROJECT AND CAREER AND GALLERY)
                $get_latest_post_query = "SELECT
                            p.post_customid,
                            c.postcat_name,
                            p.post_title,
                            p.post_description,
                            p.post_datetme
                FROM posts  AS p
                INNER JOIN post_catecgory AS c
                ON p.post_cat = c.postcat_id
                WHERE c.postcat_name = '$category[postcat_name]'
                ORDER BY p.post_datetme DESC
            ";

                $lates_posts_arr = $dbConnection->query($get_latest_post_query)->fetch_all(MYSQLI_ASSOC);

                if (count($lates_posts_arr) > 0) {
                    foreach ($lates_posts_arr as $latest_post) {

                        // QUERY:: GET THUMBNAIL IMAGE
                        $thumbnail_img_query = "SELECT post_image from post_image WHERE postcust_id = '$latest_post[post_customid]' && postimage_cat = 'thumbnail' LIMIT 1";
                        $thumbnail_img_arr = $dbConnection->query($thumbnail_img_query)->fetch_assoc();
                        $thumbnail_img = $thumbnail_img_arr['post_image'] ?? "";

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
                    <a href='../pages/news_page.php?post_id=$latest_post[post_customid]' class='news-feature-image-linked'>
                        <img src='../admin/assets/uploads/posts/$thumbnail_img' alt='$latest_post[post_title]'>
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
                } else {
                    echo "
            <p class='no-item'> No posts available in this category.</p>
            ";
                }

                echo "
                    </div>
                ";
            }

            ?>



        </div>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>

</body>

</html>