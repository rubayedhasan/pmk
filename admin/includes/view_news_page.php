<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if (isset($_GET["post_id"])) {
    // POST ID 
    $post_id = $_GET["post_id"];

    // QUERY::GET MATCHED POST
    $get_post_query = "SELECT * FROM posts WHERE post_customid = '$post_id'";
    $posts_arr = $dbConnection->query($get_post_query)->fetch_assoc();
    $post_category_id = $posts_arr["post_cat"];
    $post_subcategory_id = $posts_arr["post_subcat"];
    $post_title = $posts_arr["post_title"];
    $post_description = $posts_arr["post_description"];
    $post_datetme = $posts_arr["post_datetme"];
    $post_authorname = $posts_arr["post_authorname"];

    // QUERY:: GET CATEGORY
    $get_category_query = "SELECT postcat_name FROM post_catecgory WHERE postcat_id = $post_category_id";
    $get_category_arr = $dbConnection->query($get_category_query)->fetch_assoc();
    $post_category_name = $get_category_arr['postcat_name'];

    // QUERY:: GET SUB-CATEGORY
    $get_subCategory_Query = "SELECT postsub_cat_name FROM postsub_cat WHERE postsub_cat_id = $post_subcategory_id";
    $get_subcategory_arr = $dbConnection->query($get_subCategory_Query)->fetch_assoc();
    $post_subcategory_name = $get_subcategory_arr['postsub_cat_name'];


    // QUERY:: GET THUMBNAIL IMAGE
    $get_thumbnail_query = "SELECT post_image from post_image WHERE postcust_id = '$post_id' && postimage_cat = 'thumbnail'";
    $thumbnail_image_arr = $dbConnection->query($get_thumbnail_query)->fetch_assoc();
    $thumbnail_image = $thumbnail_image_arr['post_image'] ?? "";

    // QUERY:: ALL RELATED IMAGE WITH OUT THUMBNAIL
    $get_related_image_query = "SELECT post_image from post_image WHERE postcust_id = '$post_id' && postimage_cat != 'thumbnail'";
    $related_image_arr = $dbConnection->query($get_related_image_query)->fetch_all(MYSQLI_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | New Content</title>
    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/view_news_page.css">
</head>


<body>
    <div class="container-width">
        <header>
            <div class="post-page-header">
                <div class="header-info">
                    <figure class="header-image">
                        <img src="../assets/logo/main-logo.png" alt="pmk main logo">
                    </figure>
                    <h5 class="header-label">Post Preview</h5>
                </div>
                <button class="back-button" onclick="window.history.back()">Go Back</button>
            </div>
        </header>

        <!-- section::Main  -->
        <main>
            <!-- section:: main-news-page  -->
            <div class="container-width">
                <section class="main-news-page">
                    <!-- sub section:: new content container  -->
                    <div class="news-content-container">

                        <!-- news image and title  -->
                        <figure class="news-feature-image">
                            <img src="../assets/uploads/posts/<?php echo $thumbnail_image; ?>" alt="<?php echo $post_title ?>">
                            <figcaption class="news-fea-img-content">
                                <p class="news-category">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 4h6v6h-6l0 -6" />
                                        <path d="M14 4h6v6h-6l0 -6" />
                                        <path d="M4 14h6v6h-6l0 -6" />
                                        <path d="M14 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    </svg>
                                    <span>
                                        <?php echo $post_category_name . " • " . $post_subcategory_name ?>
                                    </span>
                                </p>
                                <p class="news-post-date">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                        <path d="M16 3v4" />
                                        <path d="M8 3v4" />
                                        <path d="M4 11h16" />
                                        <path d="M7 14h.013" />
                                        <path d="M10.01 14h.005" />
                                        <path d="M13.01 14h.005" />
                                        <path d="M16.015 14h.005" />
                                        <path d="M13.015 17h.005" />
                                        <path d="M7.01 17h.005" />
                                        <path d="M10.01 17h.005" />
                                    </svg>
                                    <span>
                                        <?php echo date("d F, Y", strtotime($post_datetme)); ?>
                                    </span>
                                </p>
                            </figcaption>
                            <h1 class="news-title">
                                <?php echo $post_title ?>
                            </h1>
                        </figure>

                        <!-- news meta action  -->
                        <div class="news-meta-actions">
                            <div class="news-meta-left">
                                <!-- author  -->
                                <div class="news-meta">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" />
                                        <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39" />
                                    </svg>
                                    <span class="author">
                                        <?php echo $post_authorname ?>
                                    </span>
                                </div>
                                <!-- reading time  -->
                                <div class="news-meta">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clock">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        <path d="M12 7v5l3 3" />
                                    </svg>
                                    <span class="author">5 min read</span>
                                </div>
                            </div>


                            <div class="news-meta-right">
                                <div class="news-meta">
                                    <span>Share: </span>
                                    <svg class="news-social-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                    </svg>
                                    <svg class="news-social-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- news content upper  -->
                        <div class="news-content">
                            <div class="news-description">
                                <?php echo str_replace('\r\n', '<br>', $post_description); ?>
                            </div>
                        </div>

                        <!-- news content middle -->
                        <!-- news feature short image  -->
                        <div class="news-feature-short-image-container">
                            <?php
                            if (count($related_image_arr) > 0) {
                                foreach ($related_image_arr as $related_image) {
                                    echo "
                            <figure class='new-feature-short-image'>
                            <img src='../assets/uploads/posts/$related_image[post_image]' alt='$post_title'>
                        </figure>
                            ";
                                }
                            }
                            ?>
                        </div>

                        <!-- image popover container  -->
                        <div class="image-popover">
                            <span class="close-popover">&times;</span>
                            <img loading="lazy" decoding="async" fetchpriority="high" src="" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>


    <!-- Linked custom script  -->
    <script src="../js/view_news_page.js"></script>
</body>

</html>

<?php
// close the database connection 
mysqli_close($dbConnection);
?>