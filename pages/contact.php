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
                    <a href="tel:+8801709914000" class="contact-button">
                        <span>
                            <i class="fa-solid fa-square-phone"></i>
                        </span>
                        <span>Call Now</span></a>
                </div>
            </div>
        </section>

        <!-- section::contact Info  -->
        <section id="contact-Info">
            <div class="container-width">
                <div class="hq-info">
                    <h3 class="hq-label">Headquarters</h3>
                    <p class="hq-place">Mamata Palli</p>
                    <p class="hq-location">Zirabo, Ashulia, Dhaka-1341, Bangladesh</p>
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
                    <span>Our Location</span>
                    <h3 class="maps-label">Visit PMK Office</h3>
                    <p class="maps-description">Find PMK’s location and connect with us directly to support community programs and social impact initiatives.</p>
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