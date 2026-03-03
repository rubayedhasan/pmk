<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK Home</title>
    <!-- Linked Fav Icon  -->
    <link rel="shortcut icon" href="./assets/logo/logo.png" type="image/x-icon">

    <!-- linked bootstrap stylesheet  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Linked my custom stylesheet  -->
    <link rel="stylesheet" href="./styles/main.css">
</head>


<body>
    <!-- section:: header  -->
    <?php require("./header.php") ?>

    <!-- section:: main  -->
    <main>

        <!-- section:: about pmk  -->
        <!-- <section id="about-us">
            <div class="container container-width">
                <div class="row">
                    <div class="col">
                        <div class="section-container">

                            <span class="section-tag">About PMK</span>

                            <h5 class="section-subtitle">
                                Palli Mongal Karmosuchi (PMK) – A National Non-Profit Organization Since 1988
                            </h5>

                            <h3 class="section-title font-playfair">
                                Empowering the Poor Through Sustainable Rural Development
                            </h3>

                            <p class="section-description">
                                Palli Mongal Karmosuchi (PMK) was established in 1988 as a voluntary social initiative to support underprivileged and rural communities in Bangladesh. What began as a small local effort in Zirabo, Ashulia, has grown into a nationally registered and recognized development organization. PMK works to improve the socio-economic conditions of poor families through rural development programs, microfinance services, livelihood opportunities, and community-based support initiatives. The organization strives to create lasting impact by promoting dignity, self-reliance, and inclusive growth. Legally registered with the Directorate of Social Services, NGO Affairs Bureau, Joint Stock Companies, and Microcredit Regulatory Authority, PMK operates with transparency, accountability, and full regulatory compliance under the leadership of Ms. Kamrun Nahar, Chief Executive.
                            </p>

                            <a href="#" class="about-btn">
                                <span>Our Story</span>
                                <span><i class="fa-solid fa-book-open"></i></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="about-us">
            <div class="container container-width">
                <div class="row">
                    <div class="col">
                        <div class="section-container">
                            <!-- Small Top Label -->
                            <span class="section-tag">About PMK</span>
                            <!-- subtitle  -->
                            <h5 class="section-subtitle">
                                Palli Mongal Karmosuchi (PMK) – A National Non-Profit Organization Since 1988
                            </h5>
                            <!-- title  -->
                            <h3 class="section-title font-playfair">
                                Empowering the Poor Through Sustainable Rural Development
                            </h3>
                            <!-- motive  -->
                            <div class="organization-motive">
                                <div class="org-description">

                                    <div class="description-columns">
                                        <p class="description">
                                            Palli Mongal Karmosuchi (PMK) was established in 1988 as a voluntary social initiative to support underprivileged and rural communities in Bangladesh. What began as a small local effort in Zirabo, Ashulia, has grown into a nationally registered and recognized development organization.
                                        </p>
                                        <p class="description">
                                            PMK works to improve the socio-economic conditions of poor families through rural development programs, microfinance services, livelihood opportunities, and community-based support initiatives. The organization strives to create lasting impact by promoting dignity, self-reliance, and inclusive growth.
                                        </p>
                                        <p class="description">
                                            Legally registered with the Directorate of Social Services, NGO Affairs Bureau, Joint Stock Companies, and Microcredit Regulatory Authority, PMK operates with transparency, accountability, and full regulatory compliance under the leadership of Ms. Kamrun Nahar, Chief Executive.
                                        </p>
                                    </div>
                                </div>
                                <!-- accordion  -->
                                <div class="accordion" id="accordionExample">
                                    <!-- 1st:accordion  -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span><i class="fa-regular fa-lightbulb"></i></span>
                                                <span> Our Vision – What PMK Strives to Achieve</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <h5>PMK Vision</h5>
                                                <p>To lead and empower communities toward an inclusive, just, and sustainable society where economic opportunity, social equity, environmental responsibility, and democratic participation enable every individual to live with dignity, self-reliance, and hope for a better future.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 2nd:accordion  -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span><i class="fa-solid fa-bullseye"></i></span>
                                                <span>Our Mission – How We Make a Difference</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <h5>PMK Mission</h5>
                                                <p>To implement development programs that improve livelihoods, education, health, and social wellbeing in rural and underprivileged communities, fostering self-reliance, empowerment, and sustainable growth through participatory approaches, innovation, and transparent leadership.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 3rd:accordion  -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span><i class="fa-solid fa-list-check"></i></span>
                                                <span>Our Objectives – Key Goals Guiding Our Work</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <h5> PMK Objectives</h5>
                                                <ul>
                                                    <li>
                                                        <span><i class="fa-solid fa-square-check"></i></span>
                                                        <span>Promote socio-economic development for poor and marginalized communities.</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa-solid fa-square-check"></i></span>
                                                        <span>Provide livelihood, education, and health support programs.</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa-solid fa-square-check"></i></span>
                                                        <span>Strengthen community participation and self-reliance.</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa-solid fa-square-check"></i></span>
                                                        <span>Ensure environmental sustainability and social justice.</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa-solid fa-square-check"></i></span>
                                                        <span>Operate with transparency, accountability, and regulatory compliance.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- button  -->
                            <a href="#" class="about-btn">
                                <span>Our Story</span>
                                <span><i class="fa-solid fa-book-open"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section::founder message  -->
        <!-- <section class="founder-message">
            <div class="message">
                <p>I am pleased to present the Palli Mongal Karmosuchi (PMK)s Annual
                    Report for the year 2020-2021 to share the achievements of our organization.
                    First of all, I would like to commend all members who are savers and borrowers
                    of PMK for their dedication to make the year successful in all aspects.</p>
            </div>
            <figure>
                <img src="./assets/photos/Kamrun_Nahar_ED_MAM.jpeg" alt="ED of pmk">
            </figure>
        </section> -->
    </main>

    <!-- section:: footer  -->
    <?php include("./footer.php") ?>


    <!-- Linked font awesome script  -->
    <script src="https://kit.fontawesome.com/ff87b718c4.js" crossorigin="anonymous"></script>


    <!-- Linked Bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Linked my custom script  -->
    <script src="./js/main.js"></script>
</body>

</html>