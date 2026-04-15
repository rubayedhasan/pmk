<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK Perspective</title>
    <!-- Linked custom styles  -->
    <link rel="stylesheet" href="./styles/perspective.css">
</head>

<body>
    <!-- section:: pmk perspective  -->
    <section id="pmk-perspective">
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

    <!-- Linked custom script  -->
    <script src="./js/perspective.js"></script>
</body>

</html>