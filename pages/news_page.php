<?php
// connect database 
require_once("../admin/db/dbconnect.php");
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
    $thumbnail_image = $thumbnail_image_arr['post_image'];

    // QUERY:: ALL RELATED IMAGE WITH OUT THUMBNAIL
    $get_related_image_query = "SELECT post_image from post_image WHERE postcust_id = '$post_id' && postimage_cat != 'thumbnail'";
    $related_image_arr = $dbConnection->query($get_related_image_query)->fetch_all(MYSQLI_ASSOC);


    // QUERY:: get all COMMENT
    $get_all_comment = "SELECT * FROM post_comment WHERE post_id = '$post_id'";
    $all_comment_arr = $dbConnection->query($get_all_comment)->fetch_all(MYSQLI_ASSOC);

    // echo "<pre>";
    // print_r($all_comment_arr);
    // echo "</pre>";
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
    <link rel="stylesheet" href="../styles/news_page.css">
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
            <section class="main-news-page">
                <!-- sub section:: new content container  -->
                <div class="news-content-container">

                    <!-- news image and title  -->
                    <figure class="news-feature-image">
                        <img src="../admin/assets/uploads/posts/<?php echo $thumbnail_image; ?>" alt="<?php echo $post_title ?>">
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
                            <!-- post view   -->
                            <div class="news-meta">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                                <span>
                                    <?php include_once("../utilities/page_view_counter.php") ?>
                                    <strong><?php echo $count; ?></strong> Views
                                </span>
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
                    <!-- news feature shor image  -->
                    <div class="news-feature-short-image-container">
                        <?php
                        if (count($related_image_arr) > 0) {
                            foreach ($related_image_arr as $related_image) {
                                echo "
                            <figure class='new-feature-short-image'>
                            <img src='../admin/assets/uploads/posts/$related_image[post_image]' alt='$post_title'>
                        </figure>
                            ";
                            }
                        }
                        ?>
                    </div>

                    <!-- sub-section:: comment display area  -->
                    <?php

                    if (count($all_comment_arr) > 0) {
                        $comment_length = count($all_comment_arr);

                        echo "
                     <div class='comment-display-area'>
                        <h4 class='comment-area-label'>
                        Comment
                            <span style='color: #6b7280; font-size: 0.825rem;'>
                               ($comment_length)
                            </span>
                        </h4>

                        <div class='comment-container'>
                        " ?>

                        <?php
                        foreach ($all_comment_arr as $comment) {
                            $ava_name = substr($comment["commentor_name"], 0, 3);
                            echo "
                            <div class='comment'>
                            <div class='user-avatar'>
                            $ava_name
                            </div>
                            <div class='comment-body'>
                                <div class='comment-meta'>
                                    <span class='comment-name'>
                                    $comment[commentor_name]
                                    </span>
                                </div>
                                <p class='comment-text'>
                                    $comment[comment]
                                </p>
                            </div>
                        </div>
                            ";
                        }

                        ?>

                    <?php echo "
                        </div>
                    </div>
                    
                    ";
                    }
                    ?>

                    <!-- sub-section:: commnet area  -->
                    <div class="comment-area">
                        <hgroup>
                            <h4 class="comment-area-label">Leave a Comment</h4>
                            <p class="comment-area-text">
                                Your phone number will not published. So feel free to leave commenYour email address will remain private and will never be published. We welcome your thoughts—share your comments respectfully.
                            </p>
                        </hgroup>
                        <form action="../admin/server/post_comment.php" method="post" class="news-comment-form">
                            <!-- textarea  -->
                            <div class="comment-input-field">
                                <label for="comment-box">Your Comment</label>
                                <textarea name="comment_box" id="comment-box" placeholder="We'd love to hear your opinion. Leave a comment..." required></textarea>
                            </div>

                            <!-- name  -->
                            <div class="comment-input-field">
                                <label for="commentor-name">Your Name</label>
                                <input type="text" name="commentor_name" id="commentor-name" placeholder="Your Full Name" required>
                            </div>

                            <!-- email  -->
                            <div class="comment-input-field">
                                <label for="commentor-phone">Your Phone:</label>
                                <input type="text" name="commentor_phone" id="commentor-phone" placeholder="Phone Number" required>
                            </div>

                            <!-- post id  -->
                            <div class="comment-input-field" style="display: none !important;">
                                <label for="post-id">Post ID</label>
                                <input type="text" name="post_id" id="post-id" value="<?php echo $post_id ?>">
                            </div>

                            <!-- post button  -->
                            <div class="comment-button-container">
                                <button type="submit" class="comment-button" name="comment_button">
                                    <span>Post Comment</span>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 14l11 -11" />
                                        <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

                <!-- sub-section:: related news  -->
                <aside class="related-news-container">
                    <!-- sub-section:: relateed news  -->
                    <div class="related-news">
                        <?php
                        // QUERY:: get related POST
                        $get_related_post_query = "SELECT post_customid, post_title, post_datetme FROM posts WHERE post_cat = '$post_category_id' && post_customid != '$post_id'";
                        $related_post_arr = $dbConnection->query($get_related_post_query)->fetch_all(MYSQLI_ASSOC);

                        if (count($related_post_arr) > 0) {
                            echo "
                            <h4 class='related-news-label'>Related News</h4>
                        <div class='related-news-cards'>                            
                            ";

                            foreach ($related_post_arr as $related_post) {
                                $formatted_date = date("d F, Y", strtotime($related_post["post_datetme"]));

                                // QUERY:: GET THUMBNAIL IMAGE
                                $thumb_img_query = "SELECT post_image from post_image WHERE postcust_id = '$related_post[post_customid]' && postimage_cat = 'thumbnail'";
                                $thumb_img_arr = $dbConnection->query($thumb_img_query)->fetch_assoc();
                                $thumb_img = $thumb_img_arr['post_image'];

                                echo "
                                    <div class='related-news-card'>
                                <figure class='related-news-image'>
                                    <img src='../admin/assets/uploads/posts/$thumb_img' alt='$related_post[post_title]'>
                                </figure>
                                <div class='related-news-card-content'>
                                    <a href='../pages/news_page.php?post_id=$related_post[post_customid]'>
                                        <h4 class='rncc-title'>
                                        $related_post[post_title]
                                        </h4>
                                    </a>
                                    <span class='rncc-post-date'>
                                        <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-week'>
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
                                </div>
                            </div>
                                    ";
                            }

                            echo "

                             <div class='comment-button-container view-button'>
                            <a href='./news.php?category=$post_category_id' class='comment-button''>
                                <span>View All</span>
                                <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right'>
                                    <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                    <path d='M5 12l14 0' />
                                    <path d='M15 16l4 -4' />
                                    <path d='M15 8l4 4' />
                                </svg>
                            </a>
                        </div>
                    </div>
                            
                            ";
                        }

                        ?>

                        <!-- categories  -->
                        <div class="category-lists">
                            <h4 class="related-news-label">Categories</h4>

                            <div class="list">

                                <?php
                                // QUERY:: get all post category 
                                $get_all_category_query = "SELECT * FROM post_catecgory WHERE postcat_name NOT IN ('GALLERY', 'CAREER', 'REPORTS', 'RESULTS')";
                                $all_category_arr = $dbConnection->query($get_all_category_query)->fetch_all(MYSQLI_ASSOC);

                                // print_r($all_category_arr);

                                if (count($all_category_arr) > 0) {
                                    foreach ($all_category_arr as $category) {
                                        echo "
                                        <a href='./news.php?category=$category[postcat_name]'>
                                            <div class='category'>
                                                <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-category-2'>
                                                    <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                    <path d='M14 4h6v6h-6l0 -6' />
                                                    <path d='M4 14h6v6h-6l0 -6' />
                                                    <path d='M14 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0' />
                                                    <path d='M4 7a3 3 0 1 0 6 0a3 3 0 1 0 -6 0' />
                                                </svg>
                                            <span>$category[postcat_name]</span>
                                            </div>
                                        </a>
                                        ";
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </aside>
            </section>
        </div>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>

</body>

</html>

<?php
// close the database connection 
mysqli_close($dbConnection);
?>