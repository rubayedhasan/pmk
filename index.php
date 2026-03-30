<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Home</title>
    <!-- Linked Fav Icon  -->
    <link rel="shortcut icon" href="./assets/logo/main-logo.png" type="image/x-icon">

    <!-- linked bootstrap stylesheet  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Linked my custom stylesheet  -->
    <link rel="stylesheet" href="./styles/main.css">
</head>


<body>
    <!-- section:: header  -->
    <!-- Linked navbar section  -->
    <?php include("./navbar.php") ?>

    <!-- Linked banner section  -->
    <?php include("./banner.php") ?>
    <!-- section:: main  -->
    <main>
        <!-- section:: about pmk  -->
        <div class="container-width">
            <section id="about-pmk">
                <div class="about-grid">

                    <!-- LEFT : IMAGE -->
                    <div class="about-image-wrapper">
                        <!-- gradient blob  -->
                        <div class="image-blob"></div>

                        <!-- ring effect  -->
                        <div class="image-ring"></div>

                        <!-- circular image  -->
                        <figure class="about-image">
                            <img src="./assets/images/dummy-img-3.png" alt="">
                        </figure>
                    </div>

                    <!-- RIGHT : CONTENT -->
                    <div class="about-content">

                        <span class="section-tag">About PMK</span>

                        <h5 class="section-subtitle">
                            Palli Mongal Karmosuchi (PMK) – A National Non-Profit Organization Since 1988
                        </h5>

                        <h3 class="section-title font-playfair">
                            Empowering Communities Through Sustainable Rural Development
                        </h3>

                        <div class="organization-motive">
                            <p>
                                Established in 1988, Palli Mongal Karmosuchi (PMK) began as a voluntary social initiative committed to supporting underprivileged rural communities in Bangladesh. From its origins in Zirabo, Ashulia, PMK has evolved into a nationally registered and recognized development organization.
                            </p>

                            <p>
                                PMK advances socio-economic resilience through integrated rural development programs, inclusive microfinance services, livelihood creation initiatives, and community-based support mechanisms. Our approach promotes dignity, self-reliance, and inclusive growth.
                            </p>

                            <p>
                                Registered with the Directorate of Social Services, NGO Affairs Bureau, Joint Stock Companies, and the Microcredit Regulatory Authority, PMK operates with transparency, accountability, and full regulatory compliance under the leadership of Ms. Kamrun Nahar, Chief Executive.
                            </p>
                        </div>

                        <a href="#" class="about-btn">
                            <span><i class="fa-solid fa-book-open"></i></span>
                            <span>Our Story</span>
                        </a>

                    </div>
                </div>
            </section>

        </div>

        <!-- section:: pmk perspective  -->
        <div class="container-width">
            <section id="pmk-perspective">
                <!-- section header  -->
                <hgroup class="section-header">
                    <h2 class="head-title font-playfair">Our <span>Perspective</span></h2>
                    <p class="head-text">Guiding principles that shape PMK's commitment to sustainable community development.</p>
                </hgroup>

                <div class="perspective-container">
                    <!-- perspective content  -->
                    <div class="perspective-content">
                        <!-- vision -->
                        <div id="pmk-vision" class="perspective-object variant-green object-visible">
                            <h4 class="perspective-title font-playfair">PMK <span>Vision</span></h4>
                            <div class="perspective-head">
                                <span><i class="fa-regular fa-lightbulb"></i></span>
                                <h5 class="perspective-subtitle font-playfair">What PMK Strives to Achieve</h5>
                            </div>
                            <p class="perspective-text">To lead and empower communities toward an inclusive, just, and sustainable society where economic opportunity, social equity, environmental responsibility, and democratic participation enable every individual to live with dignity, self-reliance, and hope for a better future.</p>
                        </div>

                        <!-- mission  -->
                        <div id="pmk-mission" class="perspective-object variant-blue">
                            <h4 class="perspective-title font-playfair">PMK <span>Mission</span></h4>
                            <div class="perspective-head">
                                <span><i class="fa-solid fa-bullseye"></i></span>
                                <h5 class="perspective-subtitle font-playfair">How We Make a Difference</h5>
                            </div>
                            <p class="perspective-text">To implement development programs that improve livelihoods, education, health, and social wellbeing in rural and underprivileged communities, fostering self-reliance, empowerment, and sustainable growth through participatory approaches, innovation, and transparent leadership.</p>
                        </div>

                        <!-- objective  -->
                        <div id="pmk-objective" class="perspective-object variant-green-dark">
                            <h4 class="perspective-title font-playfair"><span>Objectives</span> of PMK</h4>
                            <div class="perspective-head">
                                <span><i class="fa-solid fa-list-check"></i></span>
                                <h5 class="perspective-subtitle font-playfair">Key Goals Guiding Our Work</h5>
                            </div>
                            <ul>
                                <li>
                                    <span><i class="fa-regular fa-square-check"></i></span>
                                    <span>Promote socio-economic development for poor and marginalized communities.</span>
                                </li>
                                <li>
                                    <span><i class="fa-regular fa-square-check"></i></span>
                                    <span>Provide livelihood, education, and health support programs.</span>
                                </li>
                                <li>
                                    <span><i class="fa-regular fa-square-check"></i></span>
                                    <span>Strengthen community participation and self-reliance.</span>
                                </li>
                                <li>
                                    <span><i class="fa-regular fa-square-check"></i></span>
                                    <span>Ensure environmental sustainability and social justice.</span>
                                </li>
                                <li>
                                    <span><i class="fa-regular fa-square-check"></i></span>
                                    <span>Operate with transparency, accountability, and regulatory compliance.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- perspective-handler  -->
                    <div class="perspective-tabs">
                        <div class="perspective-circle">
                            <div class="circle-center">
                                <span><i class="fa-regular fa-lightbulb"></i></span>
                                <h4 class="circle-text font-playfair">Vision</h4>
                            </div>

                            <!-- perspective content control buttons  -->
                            <button title="vision" type="button" class="circle-btn btn-1" data-target="pmk-vision">
                                <i class="fa-regular fa-lightbulb"></i>
                            </button>
                            <button title="mission" type="button" class="circle-btn btn-2" data-target="pmk-mission">
                                <i class="fa-solid fa-bullseye"></i>
                            </button>
                            <button title="objectives" type="button" class="circle-btn btn-3" data-target="pmk-objective">
                                <i class="fa-solid fa-list-check"></i>
                            </button>
                        </div>

                    </div>

                </div>
            </section>
        </div>

        <!-- section:: founder message -->
        <div class="container-width">
            <section id="founder-message">
                <!-- Top:: chief executive message  -->
                <div class="executive-message">
                    <!-- Left: Message -->
                    <div class="message-container">
                        <div class="message-quote">
                            <p>
                                As we reflect on our journey at Palli Mongal Karmosuchi (PMK), we are reminded of our humble beginnings in 1988, initiated by the voluntary efforts of local youth. Today, we stand as a leadin non-profit organization committed to the socio-economic development of Bangladesh.
                            </p>

                            <p>
                                Our Microfinance Program plays a key role in fostering entrepreneurship
                                and generating employment across 35 districts, empowering communities
                                and supporting sustainable economic growth.
                            </p>

                            <p>
                                We remain committed to transparency, accountability, and innovation,
                                continuously working to expand our reach and deepen our impact.
                            </p>

                            <p>
                                We sincerely thank our staff, partners, and supporters for their
                                continued dedication. Together, we will achieve lasting change.
                            </p>
                        </div>
                    </div>

                    <!-- Right: Photo -->
                    <div class="executive-photo">
                        <figure class="photo-container">
                            <img
                                src="./assets/photos/kamrun_nahar_executive_of_pmk.png"
                                alt="Chief Executive of PMK"
                                class="exe-photo" />
                        </figure>

                        <!-- executive monogram  -->
                        <div class="executive-monogram">
                            <strong>Kamrun Nahar</strong>
                            <span>Chief Executive</span>
                            <span>Palli Mongal Karmosuchi (PMK)</span>
                        </div>
                    </div>
                </div>

                <!-- Bottom:: deputy executive message  -->
                <div class="deputy-executive-message">
                    <!-- Left: Photo -->
                    <div class="executive-photo">
                        <figure class="photo-container">
                            <img
                                src="./assets/photos/dewan_faisal_deputy_of_pmk-2.png"
                                alt="Deputy Executive of PMK"
                                class="exe-photo" />
                        </figure>

                        <!-- executive monogram  -->
                        <div class="executive-monogram">
                            <strong>Dewan Faisal</strong>
                            <span>Deputy Chief Executive</span>
                            <span>Palli Mongal Karmosuchi (PMK)</span>
                        </div>
                    </div>

                    <!-- Right: Message -->
                    <div class="message-container">
                        <div class="message-quote">
                            <p>
                                At Palli Mongal Karmosuchi (PMK), our journey of empowering commu-nities and fostering sustainable development has been at the heart of our mission since 1988. What began with the dedication of local youth has now grown into a nation wide movement, driving positive change across Bangladesh.
                            </p>

                            <p>
                                Our Microfinance Program reflects this mission by supporting small-scale entrepreneurs, helping them grow their businesses and create job opportu-nities. By doing so, we're not only enhancing individual livelihoods but also strengthening the broader economic fabric in 35 districts.
                            </p>

                            <p>
                                As we continue to expand our efforts, our commitment to transparency, accountability and innovation remains unwavering. We believe that collaboration and fresh ideas will enable us to extend our reach and provide more impactful support to those in need.
                            </p>

                            <p>
                                With deep gratitude, I acknowledge the tireless efforts of our staff, partners and supporters. Together, we are building a future that promises growth, opportunity and lasting change for all.
                            </p>
                        </div>


                    </div>
                </div>
            </section>
        </div>


    </main>

    <!-- section:: footer  -->
    <?php require_once("./footer.php") ?>


    <!-- Linked font awesome script  -->
    <script src="https://kit.fontawesome.com/ff87b718c4.js" crossorigin="anonymous"></script>


    <!-- Linked Bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Linked my custom script  -->
    <script src="./js/main.js"></script>
</body>

</html>