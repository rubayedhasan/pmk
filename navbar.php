<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Navbar</title>

    <!-- Linked my custom stylesheet  -->
    <link rel="stylesheet" href="./styles/navbar.css">
</head>

<body>
    <!-- section:: mini nav -->
    <section id="mini-nav">
        <div class="container-fluid container-width">
            <div class="mini-nav-container">
                <!-- key info  -->
                <div class="mini-key-info-bar">
                    <!-- key: phone  -->
                    <div class="key-item">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <p><a href="tel:+8801709914000">+880 1709 91 40 00</a></p>
                    </div>
                    <!-- key: working time  -->
                    <div class="key-item">
                        <span><i class="fa-solid fa-clock"></i></span>
                        <p>Sun - Thu 9:00AM - 5:00PM
                        </p>
                    </div>
                </div>

                <!-- mini navigation  menu -->
                <div class="container-mini-navbar">
                    <!-- mini-navbar  -->
                    <ul class="mini-navbar">
                        <li>
                            <a class="mini-nav-link" href="mailto:info@pmk-bd.org" target="_blank">
                                <span><i class="fa-regular fa-envelope"></i></span>
                                <span>WEBMAIL</span>
                            </a>
                        </li>
                        <li>
                            <a class="mini-nav-link" href=" #">
                                <span><i class="fa-regular fa-newspaper"></i></span>
                                <span>NEWS</span>
                            </a>
                        </li>
                        <li>
                            <a class="mini-nav-link" href=" #">
                                <span><i class="fa-solid fa-user-tie"></i></span>
                                <span>
                                    CAREER
                                </span>
                            </a>
                        </li>
                    </ul>

                    <!-- social icons  -->
                    <ul class="mini-social-bar">
                        <li>
                            <a href="https://facebook.com/themefisher" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@pallimongalkarmosuchipmk9007" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-location-dot"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--section::  navbar  (main)-->
    <nav id="navigation" class="navbar navbar-expand-lg">
        <div class="container-fluid container-width">
            <a class="navbar-brand brand-name" href="./index.php">
                <img id="logo-img" src="./assets/logo/PMK_Logo_For_Web.png" alt="pmk logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About PMK
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Our Story</a></li>
                            <li><a class="dropdown-item" href="#">Mission & Vision</a></li>
                            <li><a class="dropdown-item" href="#">Objectives</a></li>
                            <li><a class="dropdown-item" href="#">Founder's Message</a></li>
                            <li><a class="dropdown-item" href="#">Our Team</a></li>
                            <li><a class="dropdown-item" href="#">Legal & Registration</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Microfinance Program</a></li>
                            <li><a class="dropdown-item" href="#">Hospital & Healthcare</a></li>
                            <li><a class="dropdown-item" href="#">Technical Training</a></li>
                            <li><a class="dropdown-item" href="#">Tissue Culture Lab</a></li>
                            <li><a class="dropdown-item" href="#">PMK Nursing College</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projects
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ongoing Projects</a></li>
                            <li><a class="dropdown-item" href="#">Completed Projects</a></li>
                            <li><a class="dropdown-item" href="#">Upcoming Projects</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Achievements
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Success Stories</a></li>
                            <li><a class="dropdown-item" href="#">Case Studies</a></li>
                            <li><a class="dropdown-item" href="#">Annual Reports</a></li>
                            <li><a class="dropdown-item" href="#">Financial Reports</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            News & Events
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lates News</a></li>
                            <li><a class="dropdown-item" href="#">Events</a></li>
                            <li><a class="dropdown-item" href="#">Career</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Gallery
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Photos</a></li>
                                <li><a class="dropdown-item" href="#">Videos</a></li>
                            </ul>
                        </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Contact Form</a></li>
                            <li><a class="dropdown-item" href="#">Office Location</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Linked my custom script  -->
    <script src="./js/navbar.js"></script>
</body>

</html>