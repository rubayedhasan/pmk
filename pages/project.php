<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Project</title>

    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/project.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <!-- section::Main  -->
    <main>

        <!-- section:: project hero  -->
        <section id="project-hero">
            <!--project content  -->
            <div class="project-hero-content-container">
                <div class="project-breadcrumb">
                    <a class="pj-breadcrumb-link pj-breadcrumb-item" href="../index.php">Home</a> &rsaquo;
                    <span class="pj-breadcrumb-item">Projects</span> &rsaquo;
                    <span class="pj-breadcrumb-item pj-breadcrumb-active">Project Name</span>
                </div>
                <div class="project-hero-badge">
                    <span class="dot"></span>
                    <span>Active Project · 2024–2026</span>
                </div>
                <div class="project-content">
                    <h1 id="project-name">Recovery and Advancement of
                        <em id="project-name-highlight">Informal Sector Employment - RAISE</em>
                    </h1>
                    <p class="project-hero-description">
                        RAISE empowers low-income youth and micro-entrepreneurs through skills training, employment support, and inclusive finance to improve livelihoods in Bangladesh’s informal sector.

                    </p>
                </div>
                <div class="contact-button-container">
                    <a href="#about-project" class="contact-button project-btn">
                        <span>Learn More</span>
                        <span><i class="fa-solid fa-arrow-down-long"></i></span>
                    </a>
                </div>
            </div>

            <!-- coverage bar  -->
            <div class="project-coverage-bar">
                <div class="coverage-item">
                    <span class="crb-value">12K+</span>
                    <span class="crb-label">Beneficiaries</span>
                </div>
                <div class="coverage-item">
                    <span class="crb-value">59</span>
                    <span class="crb-label">Districts</span>
                </div>
                <div class="coverage-item">
                    <span class="crb-value">92%</span>
                    <span class="crb-label">Success Rate
                    </span>
                </div>
            </div>

            <!-- meta bar  -->
            <div class="project-meta-bar">
                <div class="project-meta-container container-width">
                    <div class="project-meta-item">
                        <span class="meta-label">Project Code</span>
                        <span class="meta-value">PMK-RAISE-CODE</span>
                    </div>
                    <div class="project-meta-item">
                        <span class="meta-label">Status</span>
                        <span class="meta-value">
                            <span class="meta-pill">● Ongoing</span>
                        </span>
                    </div>
                    <div class="project-meta-item">
                        <span class="meta-label">Duration</span>
                        <div class="meta-value">
                            <span id="starting-date"> Jan 2024</span> –
                            <span id="ending-date">Dec 2026</span>
                        </div>
                    </div>
                    <div class="project-meta-item">
                        <span class="meta-label">Location</span>
                        <span class="meta-value">Zirabo, Ashulia, Dhaka-1341</span>
                    </div>
                    <div class="project-meta-item">
                        <span class="meta-label">Sector</span>
                        <span class="meta-value meta-small">Skills Development · Entrepreneurship · Microenterprise</span>
                    </div>
                    <div class="project-meta-item">
                        <span class="meta-label">Partner</span>
                        <span class="meta-value">PKSF · World Bank</span>
                    </div>
                </div>
            </div>
        </section>


        <!-- section:: about project  -->
        <section id="about-project">
            <div class="container-width">
                <div class="project-page-section-header">
                    <span class="page-eyebrow">About the Project</span>
                    <h3 class="page-heder-title">What Is the <em class="head-highlight">PMK Initiative?</em></h3>
                    <p class="page-header-subtitle">An integrated community development programme addressing poverty through education, healthcare, and sustainable livelihoods.</p>
                </div>
                <div class="about-project-layout">
                    <!-- content body  -->
                    <div class="about-project-content-body">
                        <p class="about-body-text">
                            The Recovery and Advancement of Informal Sector Employment (RAISE) project is a nationwide livelihood and employment initiative designed to support vulnerable youth, unemployed individuals, and micro-entrepreneurs engaged in Bangladesh’s informal sector.
                        </p>
                        <p class="about-body-text">
                            As an implementing partner of PKSF, PMK works directly with communities to deliver skills training, entrepreneurship development, employment support, and access to financial services for individuals affected by poverty, unemployment, and economic instability.
                        </p>

                        <blockquote class="about-body-quote">
                            <p class="quote-text">"Empowering people with skills and sustainable opportunities is the foundation of lasting community transformation. Through the RAISE project, PMK is committed to helping individuals rebuild confidence, create livelihoods, and shape a better future for their families and communities."</p>
                            <cite class="quote-author">-Chief Executive, PMK</cite>
                        </blockquote>

                        <p class="about-body-text">
                            Through the RAISE project, PMK focuses on building sustainable livelihood opportunities, strengthening self-employment, and improving economic resilience among underserved populations. By combining community engagement, practical training, and inclusive development approaches, we aim to help individuals achieve long-term financial stability and social empowerment.
                        </p>

                        <div class="contact-button-container">
                            <button type="button" class="contact-button">
                                <span>Download Project Brief</span>
                                <span>
                                    <i class="fa-solid fa-cloud-arrow-down"></i>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- about aside  -->
                    <div class="about-project-aside">
                        <figure class="aside-photo">
                            <!-- <img src="../assets/images/pj_sample_picture_1.jpg" alt="project feature image"> -->
                            <img src="../assets/raise/group-together.jpg" alt="project feature image">
                        </figure>

                        <div class="project-aside-cards">
                            <div class="project-aside-card">
                                <span class="aside-card-label">Primary Beneficiaries</span>
                                <span class="aside-card-value">Youth · Informal Workers</span>
                            </div>
                            <div class="project-aside-card">
                                <span class="aside-card-label">Programme Focus</span>
                                <span class="aside-card-value">Employment & Livelihood</span>
                            </div>
                            <div class="project-aside-card">
                                <span class="aside-card-label">Impact Vision</span>
                                <span class="aside-card-value">Long-term Economic Resilience</span>
                            </div>
                            <div class="project-aside-card">
                                <span class="aside-card-label">Implemented By</span>
                                <span class="aside-card-value">PMK under RAISE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: how we work  -->
        <section id="how-we-work">
            <div class="container-width">
                <div class="project-page-section-header">
                    <span class="page-eyebrow">Our Methodology</span>
                    <h3 class="page-heder-title">How We <em class="head-highlight">Work</em></h3>
                    <p class="page-header-subtitle">
                        A structured four-stage approach that puts community ownership at the centre of every decision.
                    </p>
                </div>

                <div class="project-work-life-cycle">
                    <!-- 1st work schedule  -->
                    <div class="pwlc-item">
                        <div class="pwlc-arrow">
                            <i class="fa-solid fa-play"></i>
                        </div>

                        <div class="pwlc-content">
                            <div class="pwlc-sl">01</div>
                            <h4 class="pwlc-title">Community Assessment
                            </h4>
                            <p class="pwlc-description">
                                PMK conducts field assessments, stakeholder consultations, and baseline studies to identify community priorities, local capacities, operational risks, and development challenges.
                            </p>
                        </div>
                    </div>

                    <!-- 2nd work schedule  -->
                    <div class="pwlc-item">
                        <div class="pwlc-arrow">
                            <i class="fa-solid fa-play"></i>
                        </div>

                        <div class="pwlc-content">
                            <div class="pwlc-sl">02</div>
                            <h4 class="pwlc-title">Co-Design & Planning</h4>
                            <p class="pwlc-description">
                                PMK collaborates with community leaders, local groups, and project stakeholders to develop inclusive strategies, implementation plans, timelines, and measurable objectives.
                            </p>
                        </div>
                    </div>

                    <!-- 3rd work schedule  -->
                    <div class="pwlc-item">
                        <div class="pwlc-arrow">
                            <i class="fa-solid fa-play"></i>
                        </div>

                        <div class="pwlc-content">
                            <div class="pwlc-sl">03</div>
                            <h4 class="pwlc-title">Implementation</h4>
                            <p class="pwlc-description">
                                PMK field teams execute project activities through coordinated service delivery, community engagement, continuous monitoring, and responsive problem-solving to achieve planned outcomes.
                            </p>
                        </div>
                    </div>

                    <!-- 4th work schedule  -->
                    <div class="pwlc-item">
                        <div class="pwlc-content">
                            <div class="pwlc-sl">04</div>
                            <h4 class="pwlc-title">Evaluate & Sustain</h4>
                            <p class="pwlc-description">
                                PMK evaluates project impact, documents lessons learned, strengthens local ownership, and supports sustainable continuation or expansion of successful community initiatives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:who the project helps  -->
        <section id="who-we-help">
            <div class="container-width">
                <div class="project-page-section-header">
                    <span class="page-eyebrow">Beneficiaries</span>
                    <h3 class="page-heder-title">Who This <em class="head-highlight">Project Serves</em></h3>
                    <p class="page-header-subtitle">
                        We prioritise vulnerable communities facing barriers to education, protection, livelihoods, and sustainable development opportunities.
                    </p>
                </div>

                <div class="beneficiaries-cards-layout">
                    <!-- 1st card  -->
                    <figure class="beneficiary-card">
                        <!-- <img src="../assets/images/youth.jpg" alt="youth"> -->
                        <img src="../assets/raise/youth-group-2.jpg" alt="youth">
                        <figcaption class="beneficiary-card-body">
                            <span class="beneficiary-card-label">PRIMARY GROUP</span>
                            <h4 class="beneficiary-card-title">Youth & Informal Workers</h4>
                            <p class="beneficiary-card-description">
                                Young people, including unemployed and underemployed youth, supported through skills development, employability training, and entrepreneurship pathways.
                            </p>
                            <span class="beneficiary-impact-text">
                                4,200+ engaged
                            </span>
                        </figcaption>
                    </figure>

                    <!-- 2nd card  -->
                    <figure class="beneficiary-card">
                        <!-- <img src="../assets/images/youth_girl.jpg" alt="youth"> -->
                        <img src="../assets/raise/group-learning.jpg" alt="youth">
                        <figcaption class="beneficiary-card-body">
                            <span class="beneficiary-card-label">CORE FOCUS</span>
                            <h4 class="beneficiary-card-title">Women & Girls</h4>
                            <p class="beneficiary-card-description">
                                Women and girls supported through vocational training, leadership development, healthcare awareness, and economic empowerment initiatives.
                            </p>
                            <span class="beneficiary-impact-text">
                                3,800+ supported
                            </span>
                        </figcaption>
                    </figure>

                    <!-- 3rd card  -->
                    <figure class="beneficiary-card">
                        <!-- <img src="../assets/images/families.jpg" alt="families"> -->
                        <img src="../assets/raise/women.jpg" alt="families">
                        <figcaption class="beneficiary-card-body">
                            <span class="beneficiary-card-label">EXTENDED REACH</span>
                            <h4 class="beneficiary-card-title">Families & Communities</h4>
                            <p class="beneficiary-card-description">
                                Families and local communities benefiting indirectly through improved incomes, economic resilience, and strengthened local opportunities.
                            </p>
                            <span class="beneficiary-impact-text">
                                4,400+ reached
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <!-- section:: why this project matter  -->
        <section id="why-the-project-matters">
            <div class="container-width">
                <div class="project-purpose-layout">
                    <figure class="pp-feature-image">
                        <!-- <img src="../assets/slider/various_project.JPG" alt="training"> -->
                        <img src="../assets/raise/youth_group.jpeg" alt=" training">
                    </figure>

                    <div class="pp-content-container">
                        <div class="project-page-section-header">
                            <span class="page-eyebrow">Why It Matters</span>
                            <h3 class="page-heder-title">The Challenges <em class="head-highlight">RAISE Addresses</em></h3>
                            <p class="page-header-subtitle">
                                The PKSF RAISE project works to improve income opportunities, skills development, and economic inclusion for youth and informal sector workers across Bangladesh.
                            </p>
                        </div>

                        <div class="challenge-describe-container">
                            <!-- 1st card  -->
                            <div class="challenge-card">
                                <div class="symbol-icon">
                                    <i class="fa-solid fa-user-graduate"></i>
                                </div>
                                <div class="challenge-describe-body">
                                    <h4 class="cdb-label">Youth Unemployment</h4>
                                    <p class="cdb-text">
                                        Many young people remain outside education, employment, and training opportunities, limiting their ability to secure stable and sustainable livelihoods.
                                    </p>
                                </div>
                            </div>

                            <!-- 2nd card  -->
                            <div class="challenge-card">
                                <div class="symbol-icon blue">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                </div>
                                <div class="challenge-describe-body">
                                    <h4 class="cdb-label">Limited Technical Skills</h4>
                                    <p class="cdb-text">
                                        Informal workers and young entrepreneurs often lack access to practical training, business management knowledge, and market-oriented technical skills.
                                    </p>
                                </div>
                            </div>

                            <!-- 3rd card  -->
                            <div class="challenge-card">
                                <div class="symbol-icon green-dark">
                                    <i class="fa-solid fa-bangladeshi-taka-sign"></i>
                                </div>
                                <div class="challenge-describe-body">
                                    <h4 class="cdb-label">Lack of Financial Access</h4>
                                    <p class="cdb-text">
                                        Small entrepreneurs and informal workers frequently struggle to access affordable financing needed to start, recover, or expand their businesses.
                                    </p>
                                </div>
                            </div>

                            <!-- 4th card  -->
                            <div class="challenge-card">
                                <div class="symbol-icon green-dark-sublet">
                                    <i class="fa-solid fa-scale-unbalanced"></i>
                                </div>
                                <div class="challenge-describe-body">
                                    <h4 class="cdb-label">Economic Vulnerability</h4>
                                    <p class="cdb-text">
                                        Low-income households, women, and disadvantaged communities remain highly vulnerable to economic shocks, unemployment, and long-term income instability.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: project goal and objective  -->
        <section id="project-goal-and-objectives">
            <div class="container-width">
                <div class="project-page-section-header">
                    <span class="page-eyebrow">Strategic Direction</span>
                    <h3 class="page-heder-title">Goals & <em class="head-highlight">Objectives</em></h3>
                    <p class="page-header-subtitle">
                        Focused targets guiding how PMK implements the PKSF RAISE project to strengthen skills, livelihoods, and economic inclusion for youth and informal workers.
                    </p>
                </div>

                <!-- pgo layout  -->
                <div class="project-goal-objective-layout">
                    <!-- overall goals -->
                    <div class="aside-project-goal">
                        <h3 class="pgo-label">Overall Goals</h3>
                        <div class="pgo-container">
                            <!-- 1st item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Enhance access to sustainable earning opportunities for low-income youth and informal workers in urban and peri-urban communities.
                                </p>
                            </div>

                            <!-- 2nd item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Strengthen employability, technical capacity, and entrepreneurship skills through market-oriented training and apprenticeship support.
                                </p>
                            </div>

                            <!-- 3rd item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Support micro-entrepreneurs with inclusive financial services to expand businesses, increase productivity, and create local employment opportunities.
                                </p>
                            </div>

                            <!-- 4th item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Promote economic resilience among vulnerable households affected by unemployment, financial instability, and economic shocks.
                                </p>
                            </div>

                            <!-- 5th item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Increase participation of women, disadvantaged youth, and marginalized communities in sustainable income-generating activities.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- project objective  -->
                    <div class="aside-project-objective">
                        <h3 class="pgo-label">Specific Objectives</h3>
                        <div class="pgo-container">
                            <!-- 1st item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Provide technical skills and apprenticeship opportunities for unemployed and NEET youth through hands-on industry-based learning.
                                </p>
                            </div>

                            <!-- 2nd item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Deliver business management and entrepreneurship development training for young micro-entrepreneurs and informal workers.
                                </p>
                            </div>

                            <!-- 3rd item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Facilitate access to affordable and inclusive finance for startup growth, business recovery, and enterprise expansion.
                                </p>
                            </div>

                            <!-- 4th item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Support wage employment, self-employment, and job placement pathways for trained youth and project participants.
                                </p>
                            </div>

                            <!-- 5th item  -->
                            <div class="pgo-item">
                                <span class="pgo-check">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                                <p class="pgo-body-text">
                                    Strengthen community awareness, life skills, and long-term economic participation through continuous mentoring and capacity-building initiatives.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section::project benefits  -->
        <section id="project-benefits">
            <div class="container-width">
                <div class="project-page-section-header">
                    <span class="page-eyebrow">What We Deliver</span>
                    <h3 class="page-heder-title">Benefits of This <em class="head-highlight">Programme</em></h3>
                    <p class="page-header-subtitle">
                        PMK delivered community training and livelihood support RAiSE project with PKSF improved skills income and sustainable development for vulnerable communities together locally impact.
                    </p>
                </div>

                <div class="benefit-layout">
                    <!-- layout top  -->
                    <div class="layout-top">
                        <div class="pb-feature-text">
                            <p>
                                The program targets a broad group of youth entrepreneurs and micro-entrepreneurs, with special emphasis on COVID-19 affected micro-enterprises and low-income youth engaged in key employment-generating sectors such as Ready-Made Garments (RMG), leather goods and footwear, construction, and light engineering.
                                The initiative provides loan-based financial support to promote self-employment, enterprise recovery, and business expansion across three major intervention components:
                            </P>

                            <div class="feature-text">
                                <h5>COVID-19 Affected Entrepreneurs Component</h5>
                                <p>
                                    This component supports entrepreneurs whose livelihoods were disrupted by the COVID-19 pandemic. Beneficiaries operate in a diverse range of informal, semi-formal, and small-scale economic activities, including agriculture, livestock, transport services, retail trade, food processing, manufacturing, repair services, and small workshops. The support aims to stabilize existing businesses and restore income-generating capacity.

                                </p>
                            </div>

                            <div class="feature-text">
                                <h5>Youth Entrepreneurs Component</h5>
                                <p>
                                    This component focuses on emerging and aspiring youth entrepreneurs engaged in skill-based and production-oriented trades. It includes sectors such as tailoring and garment production, agro-based activities, food processing, light engineering, electrical and mechanical services, construction-related trades, ICT services, and small-scale manufacturing. The objective is to foster entrepreneurship, skills utilization, and sustainable job creation.

                                </p>
                            </div>

                            <div class="feature-text">
                                <h5>MCP & APT Component</h5>
                                <p>
                                    This component targets semi-skilled and skilled youth engaged in technical and service-oriented occupations. It covers trades such as mobile phone servicing, electrical installation and maintenance, welding and fabrication, carpentry, plumbing, refrigeration and air-conditioning, IT and graphic services, automotive servicing, and food production. The focus is on enhancing productivity, technical capacity, and enterprise formalization.
                                </p>
                            </div>
                        </div>

                        <!-- card-1  -->
                        <div class="pb-feature-card card-horizon-1">
                            <figure class="pb-feature-image pb-feature-short-image">
                                <!-- <img src="../assets/images/entrepreneur.png" alt="feature image"> -->
                                <img src="../assets/raise/youth-entrepreneurs.jpg" alt="feature image">
                            </figure>
                            <div>
                                <h5 class="pb-feature-card-title">Youth Entrepreneurs</h5>
                                <p class="pb-feature-card-text">
                                    PMK supports youth entrepreneurs through business training, mentorship, and financial access, helping them establish sustainable enterprises, increase income opportunities, and achieve long-term economic independence successfully.
                                </p>
                            </div>
                        </div>

                        <!-- card-2  -->
                        <div class="pb-feature-card card-horizon-2">
                            <figure class="pb-feature-image">
                                <!-- <img src="../assets/images/affected-shop.png" alt="feature image"> -->
                                <img src="../assets/raise/covid_affected_entrepreneurs.jpg" alt="feature image">
                            </figure>
                            <div>
                                <h5 class="pb-feature-card-title">COVID-19 Affected Entrepreneurs</h5>
                                <p class="pb-feature-card-text">
                                    PMK assists entrepreneurs affected by economic disruptions through livelihood recovery support, financial inclusion, and business rebuilding opportunities. The programme helps vulnerable businesses restore operations, protect household incomes, recover from financial losses, and improve resilience against future economic challenges through targeted support, mentorship, and sustainable enterprise development initiatives.
                                </p>
                            </div>
                        </div>

                        <!-- card-3  -->
                        <div class="pb-feature-card card-horizon-3">
                            <figure class="pb-feature-image">
                                <!-- <img src="../assets/images/women_entrepreneurs.png" alt="feature image"> -->
                                <img src="../assets/raise/group-learning.jpg" alt="feature image">
                            </figure>
                            <div>
                                <h5 class="pb-feature-card-title">Women Entrepreneurs</h5>
                                <p class="pb-feature-card-text">
                                    PMK empowers women entrepreneurs through vocational skills training, small business financing, mentorship, and market access support. The project helps women-led enterprises grow sustainably, improve household income, strengthen economic independence, and increase participation in local economic activities while building confidence, resilience, and long-term financial stability within vulnerable communities.
                                </p>
                            </div>
                        </div>

                        <!-- card-4  -->
                        <div class="pb-feature-card card-horizon-4">
                            <figure class="pb-feature-image pb-feature-short-image">
                                <!-- <img src="../assets/images/youth-work.png" alt="feature image"> -->
                                <img src="../assets/raise/informal.jpg" alt="feature image">
                            </figure>
                            <div>
                                <h5 class="pb-feature-card-title">Informal Sector Workers</h5>
                                <p class="pb-feature-card-text">
                                    PMK helps informal workers improve practical skills, access safer employment opportunities, strengthen livelihoods, increase income stability, and build resilience against ongoing economic challenges successfully.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- layout bottom  -->
                    <div class="layout-bottom">
                        <!-- card-5  -->
                        <div class="pb-feature-card card-horizon-5">
                            <figure class="pb-feature-image pb-feature-short-image">
                                <!-- <img src="../assets/images/technical_trade.jpg" alt="feature image"> -->
                                <img src="../assets/raise/digital.jpg" alt="feature image">
                            </figure>
                            <div>
                                <h5 class="pb-feature-card-title">Technical Trade Youth</h5>
                                <p class="pb-feature-card-text">
                                    PMK trains youth in electrical work, mechanics, welding, and mobile servicing, improving employability, technical expertise, sustainable earning opportunities, and long-term career development prospects successfully.
                                </p>
                            </div>
                        </div>

                        <!-- card-6  -->
                        <div class="pb-feature-card card-horizon-6">
                            <figure class="pb-feature-image">
                                <!-- <img src="../assets/images/digital_youth_work.jpg" alt="feature image"> -->
                                <img src="../assets/raise/youth-entrepreneurs.jpg" alt="feature image">
                            </figure>
                            <div>
                                <h5 class="pb-feature-card-title">Digital & Service Sector Youth</h5>
                                <p class="pb-feature-card-text">
                                    PMK equips youth with digital, IT, graphic design, and technical service skills to improve employment opportunities and future economic resilience. The programme supports modern workforce development by preparing young people for technology-driven careers, freelancing opportunities, and sustainable income generation within Bangladesh’s growing digital and service economy sectors.
                                </p>
                            </div>
                        </div>

                        <!-- card-7  -->
                        <div class="pb-feature-card card-horizon-7">
                            <figure class="pb-feature-image pb-feature-short-image">
                                <!-- <img src="../assets/images/small-shop.webp" alt="feature image"> -->
                                <img src="../assets/raise/small_business.jpg" alt="feature image">
                            </figure>
                            <div>
                                <h5 class="pb-feature-card-title">Small Business Owners</h5>
                                <p class="pb-feature-card-text">
                                    PMK supports microbusiness owners through financial services, recovery assistance, and business guidance, helping strengthen operations, improve productivity, expand income opportunities, and create local employment.
                                </p>
                            </div>
                        </div>

                        <!-- card-8  -->
                        <div class="pb-feature-card card-horizon-8">
                            <figure class="pb-feature-image pb-feature-short-image">
                                <!-- <img src="../assets/images/agriculture_work.png" alt="feature image"> -->
                                <img src="../assets/raise/agriculture.jpg" alt="feature image">
                            </figure>
                            <div>
                                <h5 class="pb-feature-card-title">Agriculture & Livestock Workers</h5>
                                <p class="pb-feature-card-text">
                                    PMK supports farmers and livestock workers through training, financial access, and productivity improvement initiatives, strengthening rural livelihoods, increasing income opportunities, and promoting economic resilience sustainably.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: project impact & gallery  -->
        <section id="project-showcase">
            <!-- sub-section::project impact  -->
            <div id="project-impact">
                <div class="container-width">
                    <div class="impact-grid-layout">
                        <!-- 1st item  -->
                        <div class="igl-item">
                            <span class="igl-item-value">
                                <span id="project-empowered">1200</span>
                                +
                            </span>
                            <span class="igl-item-label">Women Empowered</span>
                        </div>
                        <!-- 2nd item  -->
                        <div class="igl-item">
                            <span class="igl-item-value">
                                <span id="project-employed">3500</span>
                                +
                            </span>
                            <span class="igl-item-label">Youth Trained & Employed</span>
                        </div>
                        <!-- 3rd item  -->
                        <div class="igl-item">
                            <span class="igl-item-value">
                                <span id="project-training">100</span>
                                +
                            </span>
                            <span class="igl-item-label">Training & Awareness Programs Held</span>
                        </div>
                        <!-- 4th item  -->
                        <div class="igl-item">
                            <span class="igl-item-value">
                                <span id="project-district">59</span>
                                +
                            </span>
                            <span class="igl-item-label">Districts Covered</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sub-section:: project gallery  -->
            <div id="project-gallery">
                <div class="container-width">
                    <div class="project-page-section-header">
                        <span class="page-eyebrow">Visual Story</span>
                        <h3 class="page-heder-title">Project <em class="head-highlight">Gallery</em></h3>
                        <p class="page-header-subtitle">
                            Capturing lives changed, communities empowered, and ideas transformed through impactful projects that create lasting value, meaningful connections, and real-world change.
                        </p>
                    </div>

                    <div>
                        <!-- gallery grid layout  -->
                        <div class="gallery-grid-layout">
                            <!-- 1st item  -->
                            <figure class="ggl-item long">
                                <!-- <img src="../assets/images/agriculture_work.png" alt="gallery image"> -->
                                <img src="../assets/raise/gallery-1.jpg" alt="gallery image">
                                <div class="ggl-overlay">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-octagon-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0" />
                                        <path d="M9 12h6" />
                                        <path d="M12 9v6" />
                                    </svg>
                                </div>
                            </figure>

                            <!-- 2nd item  -->
                            <figure class="ggl-item wide">
                                <!-- <img src="../assets/images/affected-shop.png" alt="gallery image"> -->
                                <img src="../assets/raise/gallery-2.jpg" alt="gallery image">
                                <div class="ggl-overlay">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-octagon-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0" />
                                        <path d="M9 12h6" />
                                        <path d="M12 9v6" />
                                    </svg>
                                </div>
                            </figure>

                            <!-- 3rd item  -->
                            <figure class="ggl-item">
                                <!-- <img src="../assets/images/technical_training.jpg" alt="gallery image"> -->
                                <img src="../assets/raise/digital.jpg" alt="gallery image">
                                <div class="ggl-overlay">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-octagon-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0" />
                                        <path d="M9 12h6" />
                                        <path d="M12 9v6" />
                                    </svg>
                                </div>
                            </figure>

                            <!-- 4th item  -->
                            <figure class="ggl-item ">
                                <!-- <img src="../assets/images/digital_youth_work.jpg" alt="gallery image"> -->
                                <img src="../assets/raise/gallery-4.jpg" alt="gallery image">
                                <div class="ggl-overlay">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-octagon-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0" />
                                        <path d="M9 12h6" />
                                        <path d="M12 9v6" />
                                    </svg>
                                </div>
                            </figure>

                            <!-- 5th item  -->
                            <figure class="ggl-item wide">
                                <!-- <img src="../assets/images/youth-work.png" alt="gallery image"> -->
                                <img src="../assets/raise/group-together.jpg" alt="gallery image">
                                <div class="ggl-overlay">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-octagon-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0" />
                                        <path d="M9 12h6" />
                                        <path d="M12 9v6" />
                                    </svg>
                                </div>
                            </figure>

                            <!-- 6th item  -->
                            <figure class="ggl-item long">
                                <!-- <img src="../assets/images/women_entrepreneurs.png" alt="gallery image"> -->
                                <img src="../assets/raise/gallery-6.jpg" alt="gallery image">
                                <div class="ggl-overlay">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-octagon-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0" />
                                        <path d="M9 12h6" />
                                        <path d="M12 9v6" />
                                    </svg>
                                </div>
                            </figure>
                        </div>

                        <!-- image popover container  -->
                        <div class="image-popover">
                            <span class="close-popover">&times;</span>
                            <img loading="lazy" decoding="async" fetchpriority="high" src="" alt="">
                        </div>

                        <!-- button -->
                        <div class="button-container visible-button">
                            <button type="button" class="visit-btn visit-btn-outline button-effect">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-scan">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 9a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M8 16a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2" />
                                        <path d="M3 7v-2a2 2 0 0 1 2 -2h2" />
                                        <path d="M3 17v2a2 2 0 0 0 2 2h2" />
                                        <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                                        <path d="M17 21h2a2 2 0 0 0 2 -2v-2" />
                                    </svg>
                                </span>
                                <span>View All</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: project-activity -->
        <section id="project-activity">
            <div class="container-width">
                <div class="project-page-section-header">
                    <span class="page-eyebrow">Project Activity</span>
                    <h3 class="page-heder-title">Recent <em class="head-highlight">Activities</em></h3>
                    <p class="page-header-subtitle">
                        Tracking our journey through recent activities, community impact, and the meaningful progress we continue to make together every day.
                    </p>
                </div>

                <?php include_once("../includes/project-update.php"); ?>
            </div>
        </section>

        <!-- section:: get-involved  -->
        <section id="get-involved">
            <div class="container-width">
                <div class="project-page-section-header">
                    <span class="page-eyebrow">Get Involved</span>
                    <h3 class="page-heder-title">Ready to Make a <em class="head-highlight">Real Difference?</em></h3>
                    <p class="page-header-subtitle">
                        Get involved with PMK and become part of meaningful initiatives, community support, and positive change that impacts lives and builds a better future.
                    </p>
                </div>

                <!--project contact button -->
                <div class="button-container visible-button">
                    <a href="./contact.php" type="button" class="visit-btn button-effect">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone-incoming">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                <path d="M15 9l5 -5" />
                                <path d="M15 5l0 4l4 0" />
                            </svg>
                        </span>
                        <span>Contact Us</span>
                    </a>
                </div>
        </section>


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
    <script src="../js/project.js"></script>
</body>

</html>