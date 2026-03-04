<!-- main color code pallet  -->

/_ shared styles _/
:root {
--pmk-green: #00946a;
--pmk-green-dark: #176f4e;
--pmk-green-light: #e6f4ef;

--pmk-blue: #0e5a7c;
--pmk-blue-dark: #083d56;
--pmk-gold: #f4b400;

--pmk-dark: #1f2933;
--pmk-gray-light: #e0e0e0;
--pmk-white: #ffffff;
}

<!-- not  -->
 <div class="about-image-wrapper">

                                <!-- Decorative Gradient Blob -->
                                <div class="image-blob"></div>

                                <!-- Decorative Ring -->
                                <div class="image-ring"></div>

                                <!-- Circular Image -->
                                <div class="about-image">
                                    <img src="./assets/images/dummy-img-3.png" alt="PMK Community Work">
                                </div>

                            </div>

/_ Wrapper _/
.about-image-wrapper {
position: relative;
width: 380px;
height: 380px;
margin: 0 auto;
display: flex;
align-items: center;
justify-content: center;
}

/_ Abstract Background Blob _/
.image-blob {
position: absolute;
width: 420px;
height: 420px;
background: linear-gradient(
135deg,
var(--pmk-green-light),
var(--pmk-blue-light)
);
border-radius: 55% 45% 60% 40% / 50% 60% 40% 50%;
z-index: 1;
opacity: 0.4;
filter: blur(30px);
animation: blobMove 8s ease-in-out infinite;
}

/_ Decorative Carved Ring _/
.image-ring {
position: absolute;
width: 420px;
height: 420px;
border-radius: 50%;
border: 2px dashed var(--pmk-green);
z-index: 2;
animation: rotateRing 20s linear infinite;
opacity: 0.4;
}

/_ Main Circular Image _/
.about-image {
position: relative;
width: 100%;
height: 100%;
border-radius: 50%;
overflow: hidden;
z-index: 3;
border: 6px solid var(--pmk-green);
box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
transition: transform 0.4s ease;
}

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
