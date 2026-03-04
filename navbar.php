<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK ! Navbar</title>

    <!-- Linked favicon -->
    <link rel="shortcut icon" href="./assets/logo/logo.png" type="image/x-icon">

    <!-- linked bootstrap stylesheet  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->

    <!-- Linked my custom stylesheet  -->
    <link rel="stylesheet" href="./styles/navbar.css">
</head>

<body>
    <!-- navbar  -->
    <nav id="navigation" class="navbar navbar-expand-lg">
        <div class="container-fluid container-width">
            <a class="navbar-brand brand-name" href="./index.php">
                <img id="logo-img" src="./assets/logo/pmk_logo.png" alt="pmk logo">
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


    <!-- Linked font awesome script  -->
    <!-- <script src="https://kit.fontawesome.com/ff87b718c4.js" crossorigin="anonymous"></script> -->

    <!-- Linked Bootstrap script  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->

    <!-- Linked my custom script  -->
    <script src="./js/navbar.js"></script>
</body>

</html>