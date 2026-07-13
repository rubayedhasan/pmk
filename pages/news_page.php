<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Newspaper</title>
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
                        <img src="../assets/slider/medical_team_pmk.jpg" alt="">
                        <figcaption class="news-fea-img-content">
                            <p class="news-category">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 4h6v6h-6l0 -6" />
                                    <path d="M14 4h6v6h-6l0 -6" />
                                    <path d="M4 14h6v6h-6l0 -6" />
                                    <path d="M14 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                </svg>
                                <span>Post category</span>
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
                                <span>April 18, 2026</span>
                            </p>
                        </figcaption>
                        <h1 class="news-title">Community Health Camp Reaches Hundreds in Rural Areas</h1>
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
                                <span class="author">Author Name</span>
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
                        <p class="news-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum aliquam recusandae debitis fuga quibusdam, ut, omnis ratione tempore libero quos beatae, quam illo fugit! Enim repellendus asperiores velit accusamus molestiae illo voluptates corrupti magnam in obcaecati explicabo, pariatur labore minima perspiciatis, ut esse consequuntur! Nulla ullam sed dolorum consequatur dolorem?
                        </p>
                        <p class="news-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam iure eius asperiores tempore eaque, animi id, optio amet pariatur, provident sunt! Alias suscipit corrupti ex. Cupiditate odit maxime, tempore amet nulla atque ullam debitis necessitatibus cumque obcaecati quam numquam, magni aspernatur impedit nam quibusdam rem culpa explicabo. Facere quas excepturi sint mollitia. Impedit deleniti mollitia odit itaque animi laboriosam qui molestias nulla cumque ut aliquid velit rem, iusto nisi doloremque maiores magni commodi hic suscipit?
                        </p>
                        <p class="news-description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor deleniti molestias, similique quos ipsa rerum? Perferendis commodi laboriosam doloremque doloribus, ut dicta atque quibusdam corrupti soluta, quo incidunt cum eaque? Quisquam et inventore omnis tempora sequi quaerat possimus cumque, autem aperiam provident deleniti animi similique eaque vitae ut molestias! Doloribus excepturi aliquam expedita voluptatum beatae quae totam numquam consequatur ullam rerum placeat nulla molestias ut provident repellendus, nam id explicabo, adipisci sed. Facere aliquam ratione ab, nemo voluptas iure totam, dolores vel dolorem quis alias, velit doloremque illum architecto? Asperiores, atque soluta non aliquam delectus libero repellendus nam ab mollitia!
                        </p>
                        <p class="news-description">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto ipsum illum labore officia sit illo reprehenderit, doloremque doloribus error blanditiis voluptatem eos, voluptatum optio eaque!
                        </p>
                    </div>

                    <!-- news content middle -->
                    <!-- news feature shor image  -->
                    <div class="news-feature-short-image-container">
                        <figure class="new-feature-short-image">
                            <img src="../assets/slider/Banner-1_1920by950.jpg" alt="">
                        </figure>
                        <figure class="new-feature-short-image">
                            <img src="../assets/slider/Banner-1_1920by950.jpg" alt="">
                        </figure>
                        <figure class="new-feature-short-image">
                            <img src="../assets/slider/Banner-1_1920by950.jpg" alt="">
                        </figure>
                    </div>

                    <!-- news content lower  -->
                    <div>
                        <p class="news-description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, ex? Et at sunt eos cumque molestiae enim ipsam reiciendis, adipisci quaerat recusandae inventore veniam nobis animi, mollitia ullam eveniet voluptates blanditiis tempore velit! Blanditiis nam dolore nesciunt incidunt alias, esse molestias quo aspernatur saepe assumenda magni quaerat sunt ipsa natus?
                        </p>

                        <p class="news-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum aliquam recusandae debitis fuga quibusdam, ut, omnis ratione tempore libero quos beatae, quam illo fugit! Enim repellendus asperiores velit accusamus molestiae illo voluptates corrupti magnam in obcaecati explicabo, pariatur labore minima perspiciatis, ut esse consequuntur! Nulla ullam sed dolorum consequatur dolorem?
                        </p>

                        <p class="news-description">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto ipsum illum labore officia sit illo reprehenderit, doloremque doloribus error blanditiis voluptatem eos, voluptatum optio eaque!
                        </p>

                        <div class="new-key-highlight">
                            <h4 class="news-key-label">Key Highlights</h4>

                            <!-- key item -->
                            <div class="news-key-item">
                                <svg class="key-item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-square-rounded-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 12l2 2l4 -4" />
                                    <path d="M12 3c7.2 0 9 1.8 9 9c0 7.2 -1.8 9 -9 9c-7.2 0 -9 -1.8 -9 -9c0 -7.2 1.8 -9 9 -9" />
                                </svg>
                                <p class="key-item-content">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, cumque.
                                </p>
                            </div>

                            <!-- key item -->
                            <div class="news-key-item">
                                <svg class="key-item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-square-rounded-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 12l2 2l4 -4" />
                                    <path d="M12 3c7.2 0 9 1.8 9 9c0 7.2 -1.8 9 -9 9c-7.2 0 -9 -1.8 -9 -9c0 -7.2 1.8 -9 9 -9" />
                                </svg>
                                <p class="key-item-content">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, cumque.
                                </p>
                            </div>

                            <!-- key item -->
                            <div class="news-key-item">
                                <svg class="key-item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-square-rounded-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 12l2 2l4 -4" />
                                    <path d="M12 3c7.2 0 9 1.8 9 9c0 7.2 -1.8 9 -9 9c-7.2 0 -9 -1.8 -9 -9c0 -7.2 1.8 -9 9 -9" />
                                </svg>
                                <p class="key-item-content">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, cumque.
                                </p>
                            </div>

                            <!-- key item -->
                            <div class="news-key-item">
                                <svg class="key-item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-square-rounded-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 12l2 2l4 -4" />
                                    <path d="M12 3c7.2 0 9 1.8 9 9c0 7.2 -1.8 9 -9 9c-7.2 0 -9 -1.8 -9 -9c0 -7.2 1.8 -9 9 -9" />
                                </svg>
                                <p class="key-item-content">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, cumque.
                                </p>
                            </div>

                            <!-- key item -->
                            <div class="news-key-item">
                                <svg class="key-item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-square-rounded-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 12l2 2l4 -4" />
                                    <path d="M12 3c7.2 0 9 1.8 9 9c0 7.2 -1.8 9 -9 9c-7.2 0 -9 -1.8 -9 -9c0 -7.2 1.8 -9 9 -9" />
                                </svg>
                                <p class="key-item-content">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, cumque.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- sub-section:: commnet area  -->
                    <div class="comment-area">
                        <hgroup>
                            <h4 class="comment-area-label">Leave a Comment</h4>
                            <p class="comment-area-text">
                                Your email address will not published. So feel free to leave commenYour email address will remain private and will never be published. We welcome your thoughts—share your comments respectfully.
                            </p>
                        </hgroup>
                        <form action="" method="post" class="news-comment-form">
                            <!-- textarea  -->
                            <div class="comment-input-field">
                                <label for="comment-box">Your Comment</label>
                                <textarea name="comment_box" id="comment-box" placeholder="We'd love to hear your opinion. Leave a comment..."></textarea>
                            </div>

                            <!-- textarea  -->
                            <div class="comment-input-field">
                                <label for="commentor-name">Your Name</label>
                                <input type="text" name="commentor_name" id="commentor-name" placeholder="Your Full Name">
                            </div>

                            <!-- textarea  -->
                            <div class="comment-input-field">
                                <label for="commentor-email">Your Email:</label>
                                <input type="email" name="commentor_email" id="commentor-email" placeholder="Email Address">
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
                <aside class="related-news">
                    <p>related news </p>
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