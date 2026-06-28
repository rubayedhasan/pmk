<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | General Committee</title>

    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/executive_committee.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section:: executive body hero  -->
        <section id="executive-body-hero">
            <div class="container-width">
                <div class="exe-hero-header">
                    <!-- label  -->
                    <div class="exe-hero-label">
                        <span class="exe-hero-lbl-eyebrow"></span>
                        <span class="exe-hero-lbl-text">GENERAL COMMITTEE</span>
                        <span class="exe-hero-lbl-eyebrow"></span>
                    </div>

                    <!-- title  -->
                    <h1 class="exe-hero-title">
                        United by Purpose,
                        <br>
                        <span style="color: var(--pmk-green);"> Driven by Impact</span>
                    </h1>

                    <!-- text  -->
                    <p class="exe-hero-text">
                        Our General Committee works collaboratively to support PMK’s mission, strengthen community engagement, and drive sustainable development through collective leadership and commitment.
                    </p>

                    <!-- hero meta info  -->
                    <div class="exe-hero-meta-container">
                        <!-- executive member  -->
                        <div class="exe-hero-meta">
                            <span class="exe-meta-value">21</span>
                            <span class="exe-meta-label">Executive Members</span>
                        </div>

                        <!-- found  -->
                        <div class="exe-hero-meta">
                            <span class="exe-meta-value">1988</span>
                            <span class="exe-meta-label">Founded</span>
                        </div>

                        <!-- branch  -->
                        <div class="exe-hero-meta">
                            <span class="exe-meta-value">364</span>
                            <span class="exe-meta-label">Branches</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: board of directors  -->
        <section id="board-of-directors" class="general-committee">
            <div class="container-width">
                <hgroup class="exe-body-sec-header">
                    <!-- label -->
                    <div class="exe-sec-label">
                        <span class="sec-lbl-eyebrow"></span>
                        <span class="sec-lbl-text">PMK GENERAL COMMITTEE</span>
                    </div>
                    <h3 class="exe-sec-title">Committed to Positive Change</h3>
                    <p class="exe-sec-description">
                        Bringing diverse perspectives and unwavering dedication, our General Committee supports PMK’s mission and helps build stronger, more resilient communities.
                    </p>
                </hgroup>

                <!-- board members grid  card layout  -->
                <div class="board-members-layout general-committee-layout">

                    <!-- 1st member card:: chairman  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/president_shirajul_islam.png" alt="Mr. A.K.M Shirajul Islam">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-crown">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M19 19h-14c-.5 0 -.9 -.3 -1 -.8l-2 -10c0 -.4 .1 -.8 .5 -1.1c.4 -.2 .8 -.2 1.1 0l4.1 3.3l3.4 -5.1c.4 -.6 1.3 -.6 1.7 0l3.4 5.1l4.1 -3.3c.3 -.3 .8 -.3 1.1 0c.4 .2 .5 .6 .5 1.1l-2 10c0 .5 -.5 .8 -1 .8z" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">Chairman</h5>
                            </div>
                            <h4 class="member-name">Mr. A. K. M. Shirajul Islam</h4>
                        </div>

                    </div>

                    <!-- 2nd member card:: vice chairman  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/shahida.png" alt="Mrs. Shaheda Hossain Chowdhury">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-shield">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h2" />
                                    <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">Vice Chairman</h5>
                            </div>
                            <h4 class="member-name">Mrs. Shaheda Hossain Chowdhury</h4>
                        </div>
                    </div>

                    <!-- 3rd member card:: general secretary  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/kamrun_nahar_executive_of_pmk.png" alt="Mrs. Kamrun Nahar">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chess-queen">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M16 16l2 -11l-4 4l-2 -5l-2 5l-4 -4l2 11" />
                                    <path d="M8 16l-1.447 .724a1 1 0 0 0 -.553 .894v2.382h12v-2.382a1 1 0 0 0 -.553 -.894l-1.447 -.724h-8" />
                                    <path d="M11 4a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M5 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M17 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">general secretary</h5>
                            </div>
                            <h4 class="member-name">Mrs. Kamrun Nahar</h4>
                        </div>
                    </div>

                    <!-- 4th member card:: treasurer  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/bilkisbari.png" alt="Mrs. Bilkis Bari">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-coin-taka">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M17 3.34a10 10 0 1 1 -15 8.66l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.211 4.384a2 2 0 0 0 -2.683 -.895l-.553 .277a1 1 0 0 0 .894 1.788l.553 -.276l-.001 1.382h-.999a1 1 0 0 0 -.993 .883l-.007 .117a1 1 0 0 0 1 1h.999l.001 3a3 3 0 0 0 2.824 2.995l.176 .005h.5a3.5 3.5 0 0 0 3.5 -3.5v-.5a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1l.007 .117a1 1 0 0 0 .876 .876l.032 .002l-.02 .057a1.5 1.5 0 0 1 -1.395 .948h-.5a1 1 0 0 1 -1 -1l-.001 -3h4.001a1 1 0 0 0 .993 -.883l.007 -.117a1 1 0 0 0 -1 -1h-4.001l.001 -1.382a2 2 0 0 0 -.136 -.725l-.075 -.17z" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">treasurer</h5>
                            </div>
                            <h4 class="member-name">Mrs. Bilkis Bari</h4>
                        </div>
                    </div>

                    <!-- 5th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/dewan_faisal_deputy_of_pmk.png" alt="Mr. Dewan Faisal" style="object-position: center;">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. Dewan Faisal</h4>
                        </div>
                    </div>

                    <!-- 6th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/suraya.png" alt="Mrs. Suriya Shoaib">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mrs. Suriya Shoaib</h4>
                        </div>
                    </div>

                    <!-- 7th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/Afzalun.png" alt="Mrs. Afjalun Nessa Chowdhury">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mrs. Afjalun Nessa Chowdhury</h4>
                        </div>
                    </div>

                    <!-- 8th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/manjurali.png" alt="Mr. Monjur Ali">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. Monjur Ali</h4>
                        </div>
                    </div>

                    <!-- 9th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_girl.png" alt="Adv. Jahan Ara Haque">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Adv. Jahan Ara Haque</h4>
                        </div>
                    </div>

                    <!-- 10th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_man.png" alt="Mr. S. M. Rahman">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. S. M. Rahman</h4>
                        </div>
                    </div>

                    <!-- 11th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Farhana Mannan">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mrs. Farhana Mannan</h4>
                        </div>
                    </div>

                    <!-- 12th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_man.png" alt="Mr. Mustaq Ahmed">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. Mustaq Ahmed</h4>
                        </div>
                    </div>

                    <!-- 13th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_man.png" alt="Mr. Alauddin Khan">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. Alauddin Khan</h4>
                        </div>
                    </div>

                    <!-- 14th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_man.png" alt="Mr. Shofiqul Alam">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. Shofiqul Alam</h4>
                        </div>
                    </div>

                    <!-- 15th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Nasima Begum">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mrs. Nasima Begum</h4>
                        </div>
                    </div>

                    <!-- 16th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Dil Afroz Begum">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mrs. Dil Afroz Begum</h4>
                        </div>
                    </div>

                    <!-- 17th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Lubna Chowdhury">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mrs. Lubna Chowdhury</h4>
                        </div>
                    </div>

                    <!-- 18th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_man.png" alt="Mr. Abul Kalam Azad">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. Abul Kalam Azad</h4>
                        </div>
                    </div>

                    <!-- 19th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_man.png" alt="Mr. Sayful Ghani Emon">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. Sayful Ghani Emon</h4>
                        </div>
                    </div>

                    <!-- 20th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_man.png" alt="Mr. L. N. M. Shamsul Hoque">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mr. L. N. M. Shamsul Hoque</h4>
                        </div>
                    </div>

                    <!-- 21th member card:: member  -->
                    <div class="board-member-card">
                        <!-- card header  -->
                        <div class="member-card-header">
                            <!-- wave bg -->
                            <svg
                                class="top-wave-shape"
                                viewBox="0 0 380 200"
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="380" height="200" fill="#f6f9f7" />
                                <path
                                    d="M0 80 Q95 40 190 80 Q285 120 380 80 L380 200 L0 200Z"
                                    fill="#176f4e" />
                                <path
                                    d="M0 95 Q95 55 190 95 Q285 135 380 95 L380 200 L0 200Z"
                                    fill="#1e2d26"
                                    opacity=".45" />
                                <!-- gold accent line -->
                                <path
                                    d="M0 78 Q95 38 190 78 Q285 118 380 78"
                                    stroke="#d4aa45"
                                    stroke-width="1.2"
                                    fill="none"
                                    opacity=".55" />
                            </svg>
                            <!-- picture  -->
                            <figure class="board-member-picture">
                                <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Syeda Kaniz Fatima">
                            </figure>

                            <div class="card-header-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>

                        <!-- card body  -->
                        <div class="member-card-body">
                            <div class="member-role-label">
                                <h5 class="member-role-text">member</h5>
                            </div>
                            <h4 class="member-name">Mrs. Syeda Kaniz Fatima</h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>

</body>

</html>