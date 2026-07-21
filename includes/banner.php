<?php
// connect database 
// require_once("../admin/db/dbconnect.php");
// $dbConnection = $conn;

// QUERY:: get SLIDER image
$get_slider_image_query = "SELECT post_image, post_title FROM post_image WHERE postimage_cat = 'slider'  ORDER BY post_imgid DESC LIMIT 6";
$slider_image_arr = $dbConnection->query($get_slider_image_query)->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// print_r($slider_image_arr);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Header</title>

    <!-- Linked favicon -->
    <link rel="shortcut icon" href="../assets/logo/logo.png" type="image/x-icon">

    <!-- Linked swiper-js stylesheet  -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!-- Linked my custom stylesheet  -->
    <link rel="stylesheet" href="../styles/banner.css">
</head>

<body>
    <!-- section:: main -->
    <header>


        <!-- section::  banner -->
        <section id="banner" class="slider-container swiper">
            <div class="slider-wrapper swiper-wrapper">
                <?php
                foreach ($slider_image_arr as $slider_image) {
                    echo "
                     <div class='slider-item swiper-slide'>
                    <figure class='slider-image'>
                        <img src='../admin/assets/uploads/posts/$slider_image[post_image]' alt='$slider_image[post_title]'>
                        <!-- <img src='../assets/slider/Banner_Size_1920by800.jpg.jpeg' alt=''> -->
                        <figcaption class='slider-content'>
                            <h2 class='slider-title font-playfair'>$slider_image[post_title]</h2>
                            <!-- slider buttons  -->
                            <a href='' class='slider-button'><span>Read More</span></a>
                        </figcaption>
                    </figure>
                </div>
                    ";
                }

                ?>
            </div>

            <!-- slider controls  -->
            <div class="slider-controls">
                <div class="slider-pagination">
                    <li class="slider-tab active-slide"></li>
                    <li class="slider-tab"></li>
                    <li class="slider-tab"></li>
                    <li class="slider-tab"></li>
                    <!-- <li class="slider-tab"></li>
                    <li class="slider-tab"></li> -->
                </div>
            </div>
        </section>
    </header>

    <!-- Linked swiper js script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <!-- Linked my custom script  -->
    <script src="../js/banner.js"></script>
</body>

</html>