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

/_ Image _/
.about-image img {
width: 100%;
height: 100%;
object-fit: cover;
transition: transform 0.6s ease;
}

/_ Hover Effect _/
.about-image:hover {
transform: scale(1.05);
}

.about-image:hover img {
transform: scale(1.1);
}

/_ Animations _/
@keyframes rotateRing {
from {
transform: rotate(0deg);
}
to {
transform: rotate(360deg);
}
}

@keyframes blobMove {
0%,
100% {
transform: translate(0px, 0px);
}
50% {
transform: translate(10px, -10px);
}
}

/_ Responsive _/
@media (max-width: 992px) {
.about-image-wrapper {
width: 300px;
height: 300px;
}

.image-blob,
.image-ring {
width: 340px;
height: 340px;
}
}
