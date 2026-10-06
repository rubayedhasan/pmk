<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Outlet</title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/navbar_outlet.css">
</head>

<body>

    <!-- main navbar for xl to xxl devices  -->
    <nav class="navbar-section">
        <!-- brand image  -->
        <a class="nav-logo" href="../index.php">
            <img src="../assets/logo/main-logo.png" alt="pmk logo">
            <!-- <span>Palli Mongal Karmosuchi</span> -->
        </a>

        <!-- nav menu list  -->
        <ul class="nav-menus">
            <li class="item-nav">
                <a href="../index.php" class="link-nav">
                    <img src="../assets/icons/house-solid-full.svg" alt="house icon" class="like-nav-icon">
                    Home
                </a>
            </li>
            <li class="item-nav nav-dropdown">
                <div class="item-nav-block">
                    <a href="javascript:void(0)" class="link-nav">
                        <img src="../assets/icons/address-card-solid-full.svg" alt="card icon" class="like-nav-icon">
                        About PMK
                    </a>
                    <!-- arrow icon dropdown  -->
                    <span class="nav-arrow-icon">
                        <!-- <i class="fa-solid fa-angle-down"></i> -->
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </div>

                <!-- dropdown menus  -->
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item">
                        <a href="../pages/our_story.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-book-open-reader"></i>
                            Our Story
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-bullseye"></i>
                            What We Aim For
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-regular fa-object-group"></i>
                            Strategic Objectives
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-user-tie"></i>
                            Our Founder
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/executive_committee.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-users"></i>
                            Executive Committee
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/general_committee.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-users-line"></i>
                            General Committee
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-scroll"></i>
                            Legal & Registration
                        </a>
                    </li>
                </ul>
            </li>
            <li class="item-nav nav-dropdown">
                <div class="item-nav-block">
                    <a href="javascript:void(0)" class="link-nav">
                        <img src="../assets/icons/slack-brands-solid-full.svg" alt="brands icon" class="like-nav-icon">
                        Our Work
                    </a>
                    <span class="nav-arrow-icon">
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </div>

                <!-- dropdown menus  -->
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item">
                        <a href="../pages/pmk_mfi.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-hands-bound"></i>
                            Microfinance
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/project.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-seedling"></i>
                            RAISE Project
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-people-group"></i>
                            ENRICH Project
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-faucet-drip"></i>
                            Wash Project
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/executive_committee.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-lightbulb"></i>
                            SMART Project
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/general_committee.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-hands-holding-child"></i>
                            Caregiver Program
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-children"></i>
                            Adolescents Program
                        </a>
                    </li>
                </ul>
            </li>
            <li class="item-nav nav-dropdown">
                <div class="item-nav-block">
                    <a href="javascript:void(0)" class="link-nav">
                        <img src="../assets/icons/brain-solid-full.svg" alt="brain icon" class="like-nav-icon">
                        Initiatives
                    </a>

                    <span class="nav-arrow-icon">
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </div>
                <!-- dropdown menus  -->
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-book-open-reader"></i>
                            Technical Training
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-bullseye"></i>
                            Tissue Culture Lab
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/page.php" class="nav-dropdown-link">
                            <i class="fa-regular fa-object-group"></i>
                            PMK Community Health
                        </a>
                    </li>
                </ul>
            </li>
            <li class="item-nav nav-dropdown">
                <div class="item-nav-block">
                    <a href="javascript:void(0)" class="link-nav">
                        <img src="../assets/icons/chart-pie-solid-full.svg" alt="pie chart icon" class="like-nav-icon">
                        Reports
                    </a>

                    <span class="nav-arrow-icon">
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </div>
                <!-- dropdown menus  -->
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item">
                        <a href="../pages/annual_report.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-book-open-reader"></i>
                            Annual Report
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/audit_report.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-bullseye"></i>
                            Audit Report
                        </a>
                    </li>
                </ul>
            </li>
            <li class="item-nav nav-dropdown">
                <div class="item-nav-block">
                    <a href="javascript:void(0)" class="link-nav">
                        <img src="../assets/icons/newspaper-solid-full.svg" alt="newspaper icon" class="like-nav-icon">
                        News
                    </a>

                    <span class="nav-arrow-icon">
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </div>
                <!-- dropdown menus  -->
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item">
                        <a href="../pages/news.php" class="nav-dropdown-link">
                            <i class="fa-regular fa-newspaper"></i>
                            PMK News Hub
                        </a>
                    </li>

                    <!-- sub dropsoun  -->
                    <li class="nav-dropdown-item nav-sub-dropdown">
                        <div class="item-nav-block">
                            <a href="javascript:void(0)" class="nav-dropdown-link">
                                <i class="fa-solid fa-book"></i>
                                Case Study
                            </a>

                            <span class="nav-arrow-icon">
                                <i class="fa-solid fa-caret-down"></i>
                            </span>
                        </div>
                        <!-- sub drop down  -->
                        <ul class="nav-sub-dropdown-menu">
                            <li class="nav-dropdown-item">
                                <a href="../pages/news.php" class="nav-dropdown-link">
                                    <i class="fa-solid fa-book-bookmark"></i>
                                    Case Study 1
                                </a>
                            </li>
                            <li class="nav-dropdown-item">
                                <a href="../pages/news.php" class="nav-dropdown-link">
                                    <i class="fa-solid fa-book-bookmark"></i>
                                    Case Study 2
                                </a>
                            </li>
                            <li class="nav-dropdown-item">
                                <a href="../pages/news.php" class="nav-dropdown-link">
                                    <i class="fa-solid fa-book-bookmark"></i>
                                    Case Study 3
                                </a>
                            </li>
                            <li class="nav-dropdown-item">
                                <a href="../pages/news.php" class="nav-dropdown-link">
                                    <i class="fa-solid fa-book-bookmark"></i>
                                    Case Study 4
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </li>
            <li class="item-nav nav-dropdown">
                <div class="item-nav-block">
                    <a href="javascript:void(0)" class="link-nav">
                        <img src="../assets/icons/partnership.png" alt="phone icon" class="like-nav-icon">
                        Get Involved
                    </a>
                    <span class="nav-arrow-icon">
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </div>
                <!-- dropdown menus  -->
                <ul class="nav-dropdown-menu">
                    <li class="nav-dropdown-item">
                        <a href="../pages/contact.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-square-phone"></i>
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="../pages/working_area.php" class="nav-dropdown-link">
                            <i class="fa-solid fa-map-location-dot"></i>
                            Working Area
                        </a>
                    </li>
                    <li class="nav-dropdown-item">
                        <a href="https://careers.pmk-bd.org" class="nav-dropdown-link">
                            <i class="fa-solid fa-briefcase"></i>
                            Career
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- actions  -->
        <div class="nav-actions">
            <a href="../pages/download_pmk_app.php" class="nav-btn btn-app">
                Android
                <i class="fa-brands fa-android"></i>
            </a>
            <a href="javascript:void(0)" class="nav-btn btn-donate">
                Donate
                <i class="fa-solid fa-piggy-bank"></i>
            </a>
        </div>
    </nav>

    <!-- navbar for xs to lg devices  -->
    <div class="mobile-navbar-section">
        <a href="../index.php" class="mobile-brand-logo">
            <img src="../assets/logo/main-logo.png" alt="pmk logo">
        </a>

        <div class="nav-actions">
            <a href="../pages/download_pmk_app.php" class="nav-btn btn-app">
                Android
                <i class="fa-brands fa-android"></i>
            </a>
            <a href="javascript:void(0)" class="nav-btn btn-donate">
                Donate
                <i class="fa-solid fa-piggy-bank"></i>
            </a>
            <span class="hamburger-icon">
                <i class="fa-solid fa-bars-staggered"></i>
            </span>
        </div>
    </div>

    <!-- navbar mask & navbar body -->
    <div class="navbar-mask"></div>
    <div class="mobile-navbar-body">
        <div class="nav-body-head">
            <a href="../index.php" class="mobile-brand-logo">
                <img src="../assets/logo/main-logo.png" alt="pmk logo">
            </a>

            <span class="close-nav-mobile">
                <i class="fa-solid fa-xmark"></i>
            </span>
        </div>

        <!-- nav menu list  -->
        <div class="mobile-navbar-content">
            <ul class="nav-menus">
                <li class="item-nav">
                    <a href="../index.php" class="link-nav">
                        <img src="../assets/icons/house-solid-full.svg" alt="house icon" class="like-nav-icon">
                        Home
                    </a>
                </li>
                <li class="item-nav nav-dropdown">
                    <div class="item-nav-block">
                        <a href="javascript:void(0)" class="link-nav">
                            <img src="../assets/icons/address-card-solid-full.svg" alt="card icon" class="like-nav-icon">
                            About PMK
                        </a>
                        <!-- arrow icon dropdown  -->
                        <span class="nav-arrow-icon">
                            <!-- <i class="fa-solid fa-angle-down"></i> -->
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                    </div>

                    <!-- dropdown menus  -->
                    <ul class="nav-dropdown-menu">
                        <li class="nav-dropdown-item">
                            <a href="../pages/our_story.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-book-open-reader"></i>
                                Our Story
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-bullseye"></i>
                                What We Aim For
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-regular fa-object-group"></i>
                                Strategic Objectives
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-user-tie"></i>
                                Our Founder
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/executive_committee.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-users"></i>
                                Executive Committee
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/general_committee.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-users-line"></i>
                                General Committee
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-scroll"></i>
                                Legal & Registration
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="item-nav nav-dropdown">
                    <div class="item-nav-block">
                        <a href="javascript:void(0)" class="link-nav">
                            <img src="../assets/icons/slack-brands-solid-full.svg" alt="brands icon" class="like-nav-icon">
                            Our Work
                        </a>
                        <span class="nav-arrow-icon">
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                    </div>

                    <!-- dropdown menus  -->
                    <ul class="nav-dropdown-menu">
                        <li class="nav-dropdown-item">
                            <a href="../pages/pmk_mfi.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-hands-bound"></i>
                                Microfinance
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/project.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-seedling"></i>
                                RAISE Project
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-people-group"></i>
                                ENRICH Project
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-faucet-drip"></i>
                                Wash Project
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/executive_committee.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-lightbulb"></i>
                                SMART Project
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/general_committee.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-hands-holding-child"></i>
                                Caregiver Program
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-children"></i>
                                Adolescents Program
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="item-nav nav-dropdown">
                    <div class="item-nav-block">
                        <a href="javascript:void(0)" class="link-nav">
                            <img src="../assets/icons/brain-solid-full.svg" alt="brain icon" class="like-nav-icon">
                            Initiatives
                        </a>

                        <span class="nav-arrow-icon">
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                    </div>
                    <!-- dropdown menus  -->
                    <ul class="nav-dropdown-menu">
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-book-open-reader"></i>
                                Technical Training
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-bullseye"></i>
                                Tissue Culture Lab
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/page.php" class="nav-dropdown-link">
                                <i class="fa-regular fa-object-group"></i>
                                PMK Community Health
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="item-nav nav-dropdown">
                    <div class="item-nav-block">
                        <a href="javascript:void(0)" class="link-nav">
                            <img src="../assets/icons/chart-pie-solid-full.svg" alt="pie chart icon" class="like-nav-icon">
                            Reports
                        </a>

                        <span class="nav-arrow-icon">
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                    </div>
                    <!-- dropdown menus  -->
                    <ul class="nav-dropdown-menu">
                        <li class="nav-dropdown-item">
                            <a href="../pages/annual_report.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-book-open-reader"></i>
                                Annual Report
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/audit_report.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-bullseye"></i>
                                Audit Report
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="item-nav nav-dropdown">
                    <div class="item-nav-block">
                        <a href="javascript:void(0)" class="link-nav">
                            <img src="../assets/icons/newspaper-solid-full.svg" alt="newspaper icon" class="like-nav-icon">
                            News
                        </a>

                        <span class="nav-arrow-icon">
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                    </div>
                    <!-- dropdown menus  -->
                    <ul class="nav-dropdown-menu">
                        <li class="nav-dropdown-item">
                            <a href="../pages/news.php" class="nav-dropdown-link">
                                <i class="fa-regular fa-newspaper"></i>
                                PMK News Hub
                            </a>
                        </li>

                        <!-- sub dropsoun  -->
                        <li class="nav-dropdown-item nav-sub-dropdown nav-dropdown-item-noHover">
                            <div class="item-nav-block">
                                <a href="javascript:void(0)" class="nav-dropdown-link">
                                    <i class="fa-solid fa-book"></i>
                                    Case Study
                                </a>

                                <span class="nav-arrow-icon">
                                    <i class="fa-solid fa-caret-down"></i>
                                </span>
                            </div>
                            <!-- sub drop down  -->
                            <ul class="nav-sub-dropdown-menu">
                                <li class="nav-dropdown-item">
                                    <a href="../pages/news.php" class="nav-dropdown-link">
                                        <i class="fa-solid fa-book-bookmark"></i>
                                        Case Study 1
                                    </a>
                                </li>
                                <li class="nav-dropdown-item">
                                    <a href="../pages/news.php" class="nav-dropdown-link">
                                        <i class="fa-solid fa-book-bookmark"></i>
                                        Case Study 2
                                    </a>
                                </li>
                                <li class="nav-dropdown-item">
                                    <a href="../pages/news.php" class="nav-dropdown-link">
                                        <i class="fa-solid fa-book-bookmark"></i>
                                        Case Study 3
                                    </a>
                                </li>
                                <li class="nav-dropdown-item">
                                    <a href="../pages/news.php" class="nav-dropdown-link">
                                        <i class="fa-solid fa-book-bookmark"></i>
                                        Case Study 4
                                    </a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </li>
                <li class="item-nav nav-dropdown">
                    <div class="item-nav-block">
                        <a href="javascript:void(0)" class="link-nav">
                            <img src="../assets/icons/partnership.png" alt="phone icon" class="like-nav-icon">
                            Get Involved
                        </a>
                        <span class="nav-arrow-icon">
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                    </div>
                    <!-- dropdown menus  -->
                    <ul class="nav-dropdown-menu">
                        <li class="nav-dropdown-item">
                            <a href="../pages/contact.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-square-phone"></i>
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="../pages/working_area.php" class="nav-dropdown-link">
                                <i class="fa-solid fa-map-location-dot"></i>
                                Working Area
                            </a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="https://careers.pmk-bd.org" class="nav-dropdown-link">
                                <i class="fa-solid fa-briefcase"></i>
                                Career
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <script src="../js/navbar_outlet.js"></script>
</body>

</html>