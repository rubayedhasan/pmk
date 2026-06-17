<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Contact</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/otherPageSharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/contact.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/otherPageNavbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section:: contact hero -->
        <section id="contact-hero">
            <figure class="contact-feature-image">
                <img src="../assets/svg/Contact_us.svg" alt="contact feature image">
            </figure>
            <div class="contract-content">
                <span class="contact-label">Contact Us</span>

                <h1 class="contact-hero-title">
                    Together We Can
                    <br>
                    <span class="hero-highlight">Create Positive Change</span>
                </h1>

                <p class="contact-description">
                    Your support, ideas, and participation help us build a better future
                    for communities in need. Whether you want to volunteer, donate,
                    collaborate, or learn more about our mission — we are always ready
                    to connect with compassionate people like you.
                </p>

                <div class="contact-button-container">
                    <a href="tel:+8801709914000" class="contact-button" style="color:var(--pmk-white); background-color: var(--pmk-green); margin-right:8px;">
                        <span>
                            <i class="fa-solid fa-square-phone"></i>
                        </span>
                        <span>Call Now</span>
                    </a>

                    <a href="mailto:info@pmk-bd.org" class="contact-button">
                        <span>
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <span>Email Us</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- section::contact Info  -->
        <section id="contact-Info">
            <div class="container-width">
                <div class="hq-info">
                    <div class="hq-info-container">
                        <div class="location-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-map-pin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="hq-label">Headquarters</h3>
                            <p class="hq-place">Mamata Palli</p>
                            <p class="hq-location">Zirabo, Ashulia, Dhaka-1341, Bangladesh</p>
                        </div>
                    </div>
                    <div class="map-button-container">
                        <a href="#maps" class="view-map">
                            <span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7" />
                                    <path d="M9 4v13" />
                                    <path d="M15 7v5" />
                                    <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879" />
                                    <path d="M19 18v.01" />
                                </svg>
                            </span>

                            <span>View On Map</span>
                        </a>
                    </div>
                </div>

                <div class="info-cards">
                    <!-- 1st info card  -->
                    <div class="info-card ">
                        <div class="info-icon contact-phone">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="info-label">Phone Number</h5>
                            <p class="info-text">
                                We work with communities to understand needs and provide support
                            </p>
                        </div>
                        <div class="info-foot">
                            <p class="prime-info">Call Us: <a class="info-link" href="tel:+8801709914000">+880 1709 91 40 00</a></p>
                        </div>
                    </div>

                    <!-- 2nd info card  -->
                    <div class="info-card ">
                        <div class="info-icon contact-email">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="info-label">Email Address</h5>
                            <p class="info-text">
                                We collaborate with partners and communities to create impactful responses
                            </p>
                        </div>
                        <div class="info-foot">
                            <p class="prime-info">Email: <a class="info-link" href="mailto:info@pmk-bd.org">info@pmk-bd.org</a></p>
                        </div>
                    </div>

                    <!-- 3rd info card  -->
                    <div class="info-card">
                        <div class="info-icon contact-workTime">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="info-label">Working Hours</h5>
                            <p class="info-text">
                                We are available weekdays to support community initiatives and inquiries
                            </p>
                        </div>
                        <div class="info-foot">
                            <p class="prime-info">Sun–Thu: 09AM–05PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: contact  newsletter  -->
        <section id="contact-newsletter">
            <div class="container-width">
                <div class="contact-newsletter-container">
                    <div class="newsletter-header">
                        <span class="news-tag">Get In Touch</span>
                        <h3 class="news-label">Connected With PMK</h3>
                        <p class="news-text">Get the latest updates, announcements, and community news from PMK directly in your inbox.</p>
                    </div>

                    <form action="" method="" class="contact-newsletter-form">
                        <!-- name  -->
                        <div class="input-field">
                            <label for="contact-user-name">Name</label>
                            <input type="text" name="contact_user_name" id="contact-user-name" placeholder="Enter Your Name">
                        </div>

                        <!-- email  -->
                        <div class="input-field">
                            <label for="contact-user-email">Email</label>
                            <input type="text" name="contact_user_email" id="contact-user-email" placeholder="Enter Your Email">
                        </div>

                        <!-- message  -->
                        <div class="input-field">
                            <label for="contact-user-message">Message</label>
                            <textarea name="contact_user_message" id="contact-user-message" placeholder="Drop A Message" cols="10" rows="5"></textarea>
                        </div>

                        <!-- submit button  -->
                        <div class="button-field">
                            <button type="submit" name="contact_submit_btn">Submit Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- section:: location map  -->
        <section id="maps">
            <div class="container-width">
                <div class="maps-header">
                    <span class="maps-tag">Our Location</span>
                    <h3 class="maps-label">Visit <span>PMK</span> Office</h3>
                    <p class="maps-description">Find PMK’s location and connect with us directly to support community programs and social impact initiatives.</p>
                </div>

                <!-- office map layout  -->
                <div class="map-layout">
                    <!-- head office  -->
                    <aside class="map-head-office">
                        <div class="map-card">
                            <div class="map-header">
                                <div class="mh-icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-map-pin">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                                    </svg>
                                </div>
                                <div class="mh-content">
                                    <h4 class="mh-title">Headquarters — Mamata Palli</h4>
                                    <p class="mh-text">Zirabo, Ashulia, Dhaka-1341, Bangladesh</p>
                                </div>
                            </div>

                            <!-- map frame  -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14589.461116750512!2d90.315068!3d23.912116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c30014ffcaaf%3A0x5b6a4b1db7b46cfb!2sPMK%20HQ!5e0!3m2!1sen!2sbd!4v1781673611097!5m2!1sen!2sbd" class="map-frame" allowfullscreen="" loading="lazy" fetchpriority="high" decoding="async" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            <div class="map-footer">
                                <a href="https://www.google.com/maps/d/u/0/embed?mid=13nVwgFN0pMXQivQlL2CeC7wM3VNrCng&ehbc=2E312F" target="_blank" class="map-direct-link">
                                    <span>Get Directions</span>
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-external-link">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                            <path d="M11 13l9 -9" />
                                            <path d="M15 4h5v5" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </aside>

                    <!-- all offices  -->
                    <aside class="map-branch-offices">
                        <div class="map-card">
                            <div class="map-header">
                                <div class="mh-icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                    </svg>
                                </div>
                                <div class="mh-content">
                                    <h4 class="mh-title">Our Branch Offices</h4>
                                    <p class="mh-text">Explore PMK's branch offices across Bangladesh</p>
                                </div>
                            </div>

                            <!-- map frame  -->
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zJSzOndzsXUYqjFYL87LglkUcIfY3bA&ehbc=2E312F" class="map-frame" allowfullscreen="" loading="lazy" fetchpriority="high" decoding="async"></iframe>

                            <div class="map-footer">
                                <a href="https://www.google.com/maps/d/u/0/embed?mid=1zJSzOndzsXUYqjFYL87LglkUcIfY3bA&ehbc=2E312F" target="_blank" class="map-direct-link">
                                    <span>Get Directions</span>
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-external-link">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                            <path d="M11 13l9 -9" />
                                            <path d="M15 4h5v5" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/otherPageFooter.php");
    ?>

</body>

</html>