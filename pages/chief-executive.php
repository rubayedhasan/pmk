<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chief Executive | PMK</title>

    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/chief-executive.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section:: Executive Hero  -->
        <section id="executive-person-hero">
            <div class="hero-content-container">
                <div class="hero-eyebrow">
                    <span class="eyebrow-line"></span>
                    <p class="eyebrow-text">Executive Director · PMK</p>
                </div>

                <h1 class="executive-name">Kamrun Nahar</h1>
                <p class="hero-role">Strategic Leadership · Social Development · Humanitarian Service</p>
                <p class="hero-quote">
                    "Our work is not just about providing services — it is about restoring
                    dignity and creating a society where no one is left behind."
                </p>
                <div class="hero-impact">
                    <div class="impact">
                        <span class="impact-number">15+
                        </span>
                        <span class="impact-label">Leadership (Years)</span>
                    </div>
                    <div class="impact">
                        <span class="impact-number">50K
                        </span>
                        <span class="impact-label">Lives Impacted</span>
                    </div>
                    <div class="impact">
                        <span class="impact-number">30+
                        </span>
                        <span class="impact-label">Projects Led</span>
                    </div>
                </div>
            </div>
            <div class="hero-image-container">
                <figure class="hero-feature-image">
                    <img src="../assets/photos/kamrun_nahar_executive_of_pmk.png" alt="Chief Executive">
                    <figcaption class="image-tag">Chief Executive </figcaption>
                </figure>
            </div>
        </section>

        <!-- section:: executive-person-overview-->
        <div class="bg-body-light-shade">
            <div class="container-width">
                <section id="executive-person-overview">
                    <!-- sidebar  -->
                    <aside id="overview-sidebar">
                        <ul class="sidebar-menu">
                            <li class="sidebar-item">
                                <a href="#about" class="sidebar-link sidebar-active">
                                    <span><i class="fa-regular fa-user"></i></span>
                                    <span>About</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="#vision-and-mission" class="sidebar-link">
                                    <span><i class="fa-regular fa-eye"></i></span>
                                    <span>
                                        Vision & Mission
                                    </span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="#career-history" class="sidebar-link">
                                    <span><i class="fa-solid fa-clock-rotate-left"></i></span>
                                    <span>
                                        Career History
                                    </span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="#future-plan" class="sidebar-link">
                                    <span><i class="fa-solid fa-rocket"></i></span>
                                    <span>
                                        Future Plan
                                    </span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="#message" class="sidebar-link">
                                    <span><i class="fa-regular fa-message"></i></span>
                                    <span>
                                        Message
                                    </span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="#personal" class="sidebar-link">
                                    <span><i class="fa-regular fa-id-badge"></i></span>
                                    <span>
                                        Personal
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="sidebar-contact">
                            <span class="side-contact-label">Contact</span>
                            <div class="side-row">
                                <span class="side-icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                <span>ce@pmk-bd.org</span>
                            </div>
                            <div class="side-row">
                                <span class="side-icon">
                                    <i class="fa-brands fa-linkedin"></i>
                                </span>
                                <span>Linkedin Profile</span>
                            </div>
                            <div class="side-row">
                                <span class="side-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <span>Zirabo, Ashulia, Dhaka-1341</span>
                            </div>
                        </div>
                    </aside>

                    <!-- content body: main content  -->
                    <div id="overview-content-body">
                        <!-- about section  -->
                        <div class="content-section" id="about">
                            <div class="content-section-header">
                                <div class="section-number">01</div>
                                <div class="content-section-title">About</div>
                                <div class="section-line"></div>
                            </div>
                            <!-- about content card  -->
                            <div class="about-content-card">
                                <p class="content-body">Kamrun Nahar is a dedicated development leader and social advocate with extensive experience in community empowerment and sustainable development initiatives. As the Chief Executive of Palli Mongal Karmosuchi (PMK), she has played a pivotal role in advancing the organization’s mission to improve the socio-economic conditions of marginalized and vulnerable communities across Bangladesh.
                                </p>
                                <p class="content-body">With a strong commitment to inclusive development, women’s empowerment, education, healthcare, and livelihood enhancement, she has successfully led strategic programs that create lasting impact at the grassroots level. Her leadership approach emphasizes accountability, innovation, collaboration, and community participation — ensuring that development efforts are both people-centered and sustainable.
                                </p>
                                <p class="content-body">Under her guidance, PMK has strengthened its institutional capacity and expanded its reach through impactful partnerships and integrated development programs. Kamrun Nahar continues to inspire positive change by championing initiatives that promote dignity, resilience, and equal opportunities for underserved populations.
                                </p>
                            </div>

                            <div class="about-edu">
                                <h4 class="sub-section-label">Education & Credentials</h4>
                                <div class="edu-card">
                                    <!-- 1st row  -->
                                    <div class="edu-row">
                                        <div class="edu-icon">
                                            <i class="fa-solid fa-user-graduate"></i>
                                        </div>
                                        <div class="edu-info">
                                            <h5 class="course-name">Course Name</h5>
                                            <p class="institute-name">University Name · Year</p>
                                        </div>
                                    </div>

                                    <!-- 2nd row  -->
                                    <div class="edu-row">
                                        <div class="edu-icon">
                                            <i class="fa-solid fa-user-graduate"></i>
                                        </div>
                                        <div class="edu-info">
                                            <h5 class="course-name">Course Name</h5>
                                            <p class="institute-name">University Name · Year</p>
                                        </div>
                                    </div>

                                    <!-- 3rd row  -->
                                    <div class="edu-row">
                                        <div class="edu-icon">
                                            <i class="fa-solid fa-user-graduate"></i>
                                        </div>
                                        <div class="edu-info">
                                            <h5 class="course-name">Course Name</h5>
                                            <p class="institute-name">University Name · Year</p>
                                        </div>
                                    </div>

                                    <!-- 4th row  -->
                                    <div class="edu-row">
                                        <div class="edu-icon">
                                            <i class="fa-solid fa-user-graduate"></i>
                                        </div>
                                        <div class="edu-info">
                                            <h5 class="course-name">Course Name</h5>
                                            <p class="institute-name">University Name · Year</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- vision and mission section  -->
                        <div class="content-section" id="vision-and-mission">
                            <div class="content-section-header">
                                <div class="section-number">02</div>
                                <div class="content-section-title">Vision & Mission</div>
                                <div class="section-line"></div>
                            </div>

                            <!-- vm grid container  -->
                            <div class="vm-grid">
                                <!-- vision card  -->
                                <div class="vm-grid-item vision">
                                    <div class="vm-icon">
                                        <i class="fa-regular fa-lightbulb"></i>
                                    </div>
                                    <h5 class="vm-label">Vision</h5>
                                    <p class="vm-text">
                                        Creating an inclusive society where communities achieve education, healthcare, environmental sustainability, women’s empowerment, and economic independence through equal opportunities for everyone and prosperity.
                                    </p>
                                </div>

                                <!-- mission card  -->
                                <div class="vm-grid-item mission">
                                    <div class="vm-icon">
                                        <i class="fa-solid fa-bullseye"></i>
                                    </div>
                                    <h5 class="vm-label">Mission</h5>
                                    <p class="vm-text">
                                        Empowering vulnerable communities through sustainable programs focused on education, healthcare, women’s leadership, environmental protection, skills development, and long-term poverty reduction initiatives across Bangladesh.
                                    </p>
                                </div>

                                <!-- goal card  -->
                                <div class="vm-grid-item goal">
                                    <div class="vm-icon">
                                        <i class="fa-regular fa-flag"></i>
                                    </div>
                                    <h5 class="vm-label">Goal</h5>
                                    <p class="vm-text">
                                        Improving living standards for disadvantaged populations by strengthening self-reliance, social inclusion, climate resilience, community participation, and sustainable economic development nationwide for future generations.
                                    </p>
                                </div>

                                <!-- objective card  -->
                                <div class="vm-grid-item objective">
                                    <div class="vm-icon">
                                        <i class="fa-solid fa-list-check"></i>
                                    </div>
                                    <h5 class="vm-label">Objective</h5>
                                    <p class="vm-text">
                                        Supporting education, healthcare, women’s empowerment, environmental awareness, and livelihood opportunities while promoting equality, dignity, social justice, and community-centered sustainable development for all people.
                                    </p>
                                </div>
                            </div>

                            <!-- core values container  -->
                            <div class="core-values">
                                <h5 class="sub-section-label">
                                    Core Values
                                </h5>

                                <div class="core-value-grid">
                                    <!-- 1st grid item  -->
                                    <div class="crv-grid-item">
                                        <span class="crv-icon">
                                            <i class="fa-solid fa-shield"></i>
                                        </span>
                                        <p class="crv-text">Integrity</p>
                                    </div>

                                    <!-- 2nd grid item  -->
                                    <div class="crv-grid-item">
                                        <span class="crv-icon">
                                            <i class="fa-solid fa-hand-holding-heart"></i>
                                        </span>
                                        <p class="crv-text">Compassion</p>
                                    </div>

                                    <!-- 3rd grid item  -->
                                    <div class="crv-grid-item">
                                        <span class="crv-icon">
                                            <i class="fa-solid fa-user-group"></i>
                                        </span>
                                        <p class="crv-text">Inclusivity</p>
                                    </div>

                                    <!-- 1st grid item  -->
                                    <div class="crv-grid-item">
                                        <span class="crv-icon">
                                            <i class="fa-solid fa-scale-balanced"></i>
                                        </span>
                                        <p class="crv-text">Accountability</p>
                                    </div>

                                    <!-- 1st grid item  -->
                                    <div class="crv-grid-item">
                                        <span class="crv-icon">
                                            <i class="fa-solid fa-seedling"></i>
                                        </span>
                                        <p class="crv-text">Empowerment</p>
                                    </div>

                                    <!-- 1st grid item  -->
                                    <div class="crv-grid-item">
                                        <span class="crv-icon">
                                            <i class="fa-solid fa-leaf"></i>
                                        </span>
                                        <p class="crv-text">Sustainability</p>
                                    </div>

                                    <!-- 1st grid item  -->
                                    <div class="crv-grid-item">
                                        <span class="crv-icon">
                                            <i class="fa-solid fa-lightbulb"></i>
                                        </span>
                                        <p class="crv-text">Innovation</p>
                                    </div>

                                    <!-- 6th grid item  -->
                                    <div class="crv-grid-item">
                                        <span class="crv-icon">
                                            <i class="fa-solid fa-handshake"></i>
                                        </span>
                                        <p class="crv-text">Partnership</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- career history section  -->
                        <div class="content-section" id="career-history">
                            <div class="content-section-header">
                                <div class="section-number">03</div>
                                <div class="content-section-title">Career History</div>
                                <div class="section-line"></div>
                            </div>

                            <!-- timeline  -->
                            <div class="history-timeline">
                                <div class="timeline">
                                    <div class="timeline-item current">
                                        <div class="tl-dot"></div>
                                        <div class="tl-period">2018-present</div>
                                        <div class="tl-role">Chief Executive</div>
                                        <div class="tl-org">Palli Mongal Karmosuchi (PMK)</div>
                                        <div class="tl-address">Zirabo, Ashulia, Dhaka-1341</div>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="tl-dot"></div>
                                        <div class="tl-period">2014-2018</div>
                                        <div class="tl-role">Deputy Chief Executive</div>
                                        <div class="tl-org">Palli Mongal Karmosuchi (PMK)</div>
                                        <div class="tl-address">Zirabo, Ashulia, Dhaka-1341</div>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="tl-dot"></div>
                                        <div class="tl-period">2010-2014</div>
                                        <div class="tl-role">Director, Program</div>
                                        <div class="tl-org">Palli Mongal Karmosuchi (PMK)</div>
                                        <div class="tl-address">Zirabo, Ashulia, Dhaka-1341</div>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="tl-dot"></div>
                                        <div class="tl-period">2007-2010</div>
                                        <div class="tl-role">Deputy Director, Program</div>
                                        <div class="tl-org">Palli Mongal Karmosuchi (PMK)</div>
                                        <div class="tl-address">Zirabo, Ashulia, Dhaka-1341</div>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="tl-dot"></div>
                                        <div class="tl-period">2005-2007</div>
                                        <div class="tl-role">Assistant Director, Program</div>
                                        <div class="tl-org">Palli Mongal Karmosuchi (PMK)</div>
                                        <div class="tl-address">Zirabo, Ashulia, Dhaka-1341</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Awards & Recognition -->
                            <div class="award-and-recognition">
                                <h5 class="sub-section-label">Awards & Recognition</h5>

                                <div class="award-card-grid">
                                    <!-- 1st item  -->
                                    <div class="award-grid-item">
                                        <div class="award-icon">
                                            <i class="fa-solid fa-trophy"></i>
                                        </div>
                                        <div class="award-content">
                                            <h5 class="award-name">National Social Development Award</h5>
                                            <p class="given-org">Ministry of Social Welfare · 2022</p>
                                        </div>
                                    </div>

                                    <!-- 2nd item  -->
                                    <div class="award-grid-item">
                                        <div class="award-icon">
                                            <i class="fa-solid fa-ranking-star"></i>
                                        </div>
                                        <div class="award-content">
                                            <h5 class="award-name">Outstanding NGO Leadership Award</h5>
                                            <p class="given-org">Bangladesh NGO Foundation · 2019</p>
                                        </div>
                                    </div>

                                    <!-- 3rd item  -->
                                    <div class="award-grid-item">
                                        <div class="award-icon">
                                            <i class="fa-solid fa-medal"></i>
                                        </div>
                                        <div class="award-content">
                                            <h5 class="award-name">Community Champion Recognition</h5>
                                            <p class="given-org">UNDP Bangladesh · 2017</p>
                                        </div>
                                    </div>

                                    <!-- 4th item  -->
                                    <div class="award-grid-item">
                                        <div class="award-icon">
                                            <i class="fa-brands fa-web-awesome"></i>
                                        </div>
                                        <div class="award-content">
                                            <h5 class="award-name">Best Social Enterprise Leadership</h5>
                                            <p class="given-org">Social Business Summit · 2015</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- future plan section  -->
                        <div class="content-section" id="future-plan">
                            <div class="content-section-header">
                                <div class="section-number">04</div>
                                <div class="content-section-title">Future Plan</div>
                                <div class="section-line"></div>
                            </div>

                            <!-- future plans  -->
                            <div class="future-plan-list">
                                <!-- 1st plan row  -->
                                <div class="plan-row">
                                    <div class="plan-index">01</div>
                                    <div class="plan-content">
                                        <h5 class="plan-title">Education Advancement Program</h5>
                                        <p class="plan-description">
                                            Provide quality education, digital learning opportunities, and scholarships for underserved children and youth across rural and disadvantaged communities nationwide.
                                        </p>
                                    </div>
                                </div>

                                <!-- 2nd plan row  -->
                                <div class="plan-row">
                                    <div class="plan-index">02</div>
                                    <div class="plan-content">
                                        <h5 class="plan-title">Community Healthcare Development</h5>
                                        <p class="plan-description">
                                            Establish accessible healthcare awareness, nutrition support, and medical outreach programs for vulnerable populations living in remote and underserved communities.
                                        </p>
                                    </div>
                                </div>

                                <!-- 3rd plan row  -->
                                <div class="plan-row">
                                    <div class="plan-index">03</div>
                                    <div class="plan-content">
                                        <h5 class="plan-title">Social Welfare & Environment Initiative</h5>
                                        <p class="plan-description">
                                            Promote social justice, environmental protection, disaster preparedness, and sustainable community participation through impactful grassroots development programs nationwide.
                                        </p>
                                    </div>
                                </div>

                                <!-- 4th plan row  -->
                                <div class="plan-row">
                                    <div class="plan-index">04</div>
                                    <div class="plan-content">
                                        <h5 class="plan-title">Youth Skills & Leadership Academy</h5>
                                        <p class="plan-description">
                                            Develop youth leadership, vocational training, and entrepreneurship opportunities to create confident, innovative, and socially responsible future community leaders.
                                        </p>
                                    </div>
                                </div>

                                <!-- 5th plan row  -->
                                <div class="plan-row">
                                    <div class="plan-index">05</div>
                                    <div class="plan-content">
                                        <h5 class="plan-title">Women Empowerment & Protection Program</h5>
                                        <p class="plan-description">
                                            Strengthen women’s leadership, economic participation, education, and rights awareness to ensure equality, dignity, and long-term community development opportunities.
                                        </p>
                                    </div>
                                </div>

                                <!-- 6th plan row  -->
                                <div class="plan-row">
                                    <div class="plan-index">06</div>
                                    <div class="plan-content">
                                        <h5 class="plan-title">Microfinance Empowerment Initiative</h5>
                                        <p class="plan-description">
                                            Expand inclusive microfinance services and entrepreneurship support for low-income families, helping communities achieve sustainable economic independence and financial stability.
                                    </div>
                                </div>
                            </div>

                            <!-- annual work -->
                            <div class="annual-plan-container">
                                <h4 class="sub-section-label">Annual Work Plan</h4>

                                <div class="annual-plan-grid">

                                    <!-- 1st grid item  -->
                                    <div class="annual-plan">
                                        <h5 class="annual-plan-title" style="color:var(--pmk-green)">Education Support</h5>
                                        <p class="annual-plan-text">
                                            Providing learning materials and opportunities for disadvantaged children every year.
                                        </p>
                                    </div>
                                    <!-- 2nd grid item  -->
                                    <div class="annual-plan">
                                        <h5 class="annual-plan-title" style="color:var(--pmk-blue-dark)">Women Skills Training</h5>
                                        <p class="annual-plan-text">
                                            Providing vocational skills training for women economic empowerment and independence.
                                        </p>
                                    </div>
                                    <!-- 3rd grid item  -->
                                    <div class="annual-plan">
                                        <h5 class="annual-plan-title" style="color:var(--pmk-green-dark)">Health Outreach</h5>
                                        <p class="annual-plan-text">
                                            Providing healthcare awareness and essential medical services to rural communities.
                                        </p>
                                    </div>
                                    <!-- 4th grid item  -->
                                    <div class="annual-plan">
                                        <h5 class="annual-plan-title" style="color:var(--pmk-dark)">Youth Leadership</h5>
                                        <p class="annual-plan-text">
                                            Providing leadership training and engagement opportunities for youth development.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- message section  -->
                        <div class="content-section" id="message">
                            <div class="content-section-header">
                                <div class="section-number">05</div>
                                <div class="content-section-title">Message</div>
                                <div class="section-line"></div>
                            </div>

                            <div class="message">
                                <div class="msg-text">
                                    <div class="msg-heading">
                                        <p>Bismillahir Rahmanir Raheem</p>
                                        <p> In the name of God, Most Gracious, Most Merciful</p>
                                    </div>
                                    <p class="msg-body">
                                        As we reflect on our journey at Palli Mongal Karmosuchi (PMK), we are reminded of our humble beginnings in 1988, initiated by the voluntary efforts of local youth. Today, we stand as a leadin non-profit organization committed to the socio-economic development of Bangladesh.
                                        Our Microfinance Program plays a vital role in fostering entrepreneurship and creating employment opportunities across 35 districts. By supporting small entrepreneurs, we contribute to sustainable economic growth and empower communities to thrive.
                                    </p>
                                    <p class="msg-body">
                                        We remain steadfast in our commitment to transparency, accountabilty and innovation. Our focus is on deepening our impact and expanding our reach to serve more individuals in need, promoting social equity and sustainable development.
                                    </p>
                                    <p class="msg-body">
                                        We express our heartfelt gratitude to our dedicated staff, partnersaaaa and supporters. Together, we will continue to achieve new milestones and create lasting change.
                                    </p>
                                </div>
                                <div class="msg-monogram">
                                    <figure class="msg-person-image">
                                        <img src="../assets/photos/kamrun_nahar_executive_of_pmk.png" alt="kamrun_nahar_executive_of_pmk">
                                    </figure>
                                    <div class="msg-sign">
                                        <span class="person">Kamrun Nahar</span>
                                        <span class="person-role">Chief Executive</span>
                                        <span class="person-org">Palli Mongal Karmosuchi (PMK)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- personal information section  -->
                        <div class="content-section" id="personal">
                            <div class="content-section-header">
                                <div class="section-number">06</div>
                                <div class="content-section-title">Personal Details</div>
                                <div class="section-line"></div>
                            </div>

                            <!-- personal info  -->
                            <div class="personal-detail-grid">
                                <!-- column 1  -->
                                <div class="personal-detail-column">
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Full Name</span>
                                        <span class="detail-value">Kamrun Nahar</span>
                                    </div>
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Date Of Birth</span>
                                        <span class="detail-value">January 1, 1978</span>
                                    </div>
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Nationality</span>
                                        <span class="detail-value">Bangladeshi</span>
                                    </div>
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Religion</span>
                                        <span class="detail-value">Islam</span>
                                    </div>
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Marital Status</span>
                                        <span class="detail-value">Married</span>
                                    </div>
                                </div>

                                <!-- column 2  -->
                                <div class="personal-detail-column">
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Hometown</span>
                                        <span class="detail-value">Home, Dhaka Division</span>
                                    </div>
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Languages</span>
                                        <span class="detail-value">Bangla, English</span>
                                    </div>
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Email</span>
                                        <span class="detail-value">ce@pmk-bd.org</span>
                                    </div>
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Phone</span>
                                        <span class="detail-value">+880-XXX-XXXXXXX</span>
                                    </div>
                                    <!-- row  -->
                                    <div class="detail-row">
                                        <span class="detail-label">Office</span>
                                        <span class="detail-value">PMK HQ, Zirabo, Ashulia, Dhaka-1341</span>
                                    </div>
                                </div>
                            </div>

                            <div class="hobby-container">
                                <h5 class="sub-section-label">Interests & Hobbies</h5>

                                <div class="hobby-grid">

                                    <!-- 1st hobby grid item -->
                                    <div class="hobby-grid-item">
                                        <div class="hobby-icon">
                                            <i class="fa-solid fa-book-open-reader"></i>
                                        </div>
                                        <p class="hobby-name">Reading</p>
                                    </div>

                                    <!-- 1st hobby grid item -->
                                    <div class="hobby-grid-item">
                                        <div class="hobby-icon">
                                            <i class="fa-solid fa-trowel"></i>
                                        </div>
                                        <p class="hobby-name">Gardening</p>
                                    </div>

                                    <!-- 2nd hobby grid item -->
                                    <div class="hobby-grid-item">
                                        <div class="hobby-icon">
                                            <i class="fa-solid fa-person-walking"></i>
                                        </div>
                                        <p class="hobby-name">Community Walks</p>
                                    </div>

                                    <!-- 1st hobby grid item -->
                                    <div class="hobby-grid-item">
                                        <div class="hobby-icon">
                                            <i class="fa-solid fa-feather-pointed"></i>
                                        </div>
                                        <p class="hobby-name">Writing</p>
                                    </div>

                                    <!-- 1st hobby grid item -->
                                    <div class="hobby-grid-item">
                                        <div class="hobby-icon">
                                            <i class="fa-solid fa-microphone-lines"></i>
                                        </div>
                                        <p class="hobby-name">Public Speaking</p>
                                    </div>

                                    <!-- 1st hobby grid item -->
                                    <div class="hobby-grid-item">
                                        <div class="hobby-icon">
                                            <i class="fa-brands fa-avianex"></i>
                                        </div>
                                        <p class="hobby-name">Travel</p>
                                    </div>

                                    <!-- 1st hobby grid item -->
                                    <div class="hobby-grid-item">
                                        <div class="hobby-icon">
                                            <i class="fa-solid fa-camera-retro"></i>
                                        </div>
                                        <p class="hobby-name">Photography</p>
                                    </div>

                                    <!-- 1st hobby grid item -->
                                    <div class="hobby-grid-item">
                                        <div class="hobby-icon">
                                            <i class="fa-solid fa-user-group"></i>
                                        </div>
                                        <p class="hobby-name">Community Work</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <!-- back to top button  -->
        <button type="button" id="backToTop" class="back-to-top-button" onclick="window.scrollTo({top:0, behavior:'smooth'})">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-up-dashed">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5v6m0 3v1.5m0 3v.5" />
                <path d="M16 9l-4 -4" />
                <path d="M8 9l4 -4" />
            </svg>
        </button>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>

    <!-- Linked custom script  -->
    <script src="../js/chief-executive.js"></script>
</body>

</html>