<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Executive Body</title>

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
                        <span class="exe-hero-lbl-text">Organizational Governance</span>
                        <span class="exe-hero-lbl-eyebrow"></span>
                    </div>

                    <!-- title  -->
                    <h1 class="exe-hero-title">
                        Leadership Driving
                        <br>
                        <span style="color: var(--pmk-green);"> PMK Forward</span>
                    </h1>

                    <!-- text  -->
                    <p class="exe-hero-text">
                        Meet the executive team dedicated to advancing PMK’s mission, fostering positive change, and serving our community with integrity, compassion, and a shared commitment to sustainable impact.
                    </p>

                    <!-- hero meta info  -->
                    <div class="exe-hero-meta-container">
                        <!-- executive member  -->
                        <div class="exe-hero-meta">
                            <span class="exe-meta-value">07</span>
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

        <!-- section:: org founder -->
        <section id="org-founder">
            <div class="container-width">
                <hgroup class="exe-body-sec-header">
                    <!-- label -->
                    <div class="exe-sec-label">
                        <span class="sec-lbl-eyebrow"></span>
                        <span class="sec-lbl-text">Inspirational Leadership</span>
                    </div>
                    <h3 class="exe-sec-title">Our Founder</h3>
                    <p class="exe-sec-description">
                        Meet the visionary whose dedication, leadership, and commitment laid the foundation for PMK’s mission and inspired lasting community impact.
                    </p>
                </hgroup>

                <!-- founder details container  -->
                <div class="founder-card">
                    <div class="founder-card-top">
                        <!-- details -->
                        <div class="founder-details">
                            <span class="founder-card-label">Founder's Legacy</span>
                            <h3 class="founder-name">
                                Late. Dewan
                                <br>
                                Abdul Mannan
                            </h3>
                            <div class="founder-badge">
                                <span class="fb-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M9 10a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                    </svg>
                                    </svg>
                                </span>
                                <span class="fb-post">Founder</span>
                                <span class="fb-org">— Palli Mongal Karmosuchi (PMK)</span>
                            </div>

                            <div class="founder-message">
                                <span class="quote-mark">"</span>
                                <p class="message">Though Late. Dewan Abdul Mannan is no longer with us, his vision and values remain our guiding light. He dreamed of a compassionate and empowered society. In honoring his legacy, PMK will continue serving humanity with integrity, unity, and hope, creating lasting change for generations to come.</p>
                            </div>

                            <div class="contact-button-container">
                                <a href="" class="contact-button">
                                    <span class="btn-text">Read Biography</span>
                                    <span class="btn-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right-dashed">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 12h.5m3 0h1.5m3 0h6" />
                                            <path d="M15 16l4 -4" />
                                            <path d="M15 8l4 4" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- image  -->
                        <div class="founder-picture-container">
                            <div class="outer-ring">
                                <figure class="founder-picture">
                                    <img src="../assets/photos/dewan_mannan_sir.png" alt="Late. Dewan Abdul Mannan">
                                </figure>
                            </div>
                            <div class="founder-quote">
                                <span class="quote-mark">"</span>
                                <p class="quote">Service to humanity is the highest form of leadership.</p>
                                <span class="quote-owner">— Dewan Abdul Mannan</span>
                            </div>
                        </div>
                    </div>

                    <!-- founder card bottom  -->
                    <div class="founder-card-bottom">
                        <!-- values  -->
                        <div class="founder-values">
                            <div class="values-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                            </div>
                            <div class="values-content">
                                <h6 class="values-content-title">Compassion</h6>
                                <p class="values-content-text">Service to humanity with empathy and care.</p>
                            </div>
                        </div>

                        <!-- values  -->
                        <div class="founder-values">
                            <div class="values-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                            </div>
                            <div class="values-content">
                                <h6 class="values-content-title">Integrity</h6>
                                <p class="values-content-text">
                                    Upholding honesty, transparency and responsibility.</p>
                            </div>
                        </div>

                        <!-- values  -->
                        <div class="founder-values">
                            <div class="values-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-webhook">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4.876 13.61a4 4 0 1 0 6.124 3.39h6" />
                                    <path d="M15.066 20.502a4 4 0 1 0 1.934 -7.502c-.706 0 -1.424 .179 -2 .5l-3 -5.5" />
                                    <path d="M16 8a4 4 0 1 0 -8 0c0 1.506 .77 2.818 2 3.5l-3 5.5" />
                                </svg>
                            </div>
                            <div class="values-content">
                                <h6 class="values-content-title">Unity</h6>
                                <p class="values-content-text">Working together for stronger communities.</p>
                            </div>
                        </div>

                        <!-- values  -->
                        <div class="founder-values">
                            <div class="values-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-seedling">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 10a6 6 0 0 0 -6 -6h-3v2a6 6 0 0 0 6 6h3" />
                                    <path d="M12 14a6 6 0 0 1 6 -6h3v1a6 6 0 0 1 -6 6h-3" />
                                    <path d="M12 20l0 -10" />
                                </svg>
                            </div>
                            <div class="values-content">
                                <h6 class="values-content-title">Hope</h6>
                                <p class="values-content-text">Creating opportunities for a better tomorrow.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </section>

        <!-- section:: board of directors  -->
        <section id="board-of-directors">
            <div class="container-width">
                <hgroup class="exe-body-sec-header">
                    <!-- label -->
                    <div class="exe-sec-label">
                        <span class="sec-lbl-eyebrow"></span>
                        <span class="sec-lbl-text">Core Leadership</span>
                    </div>
                    <h3 class="exe-sec-title">Board of Directors</h3>
                    <p class="exe-sec-description">
                        Our Board of Directors provides strategic leadership, ensuring accountability, transparency, and sustainable impact while advancing PMK's mission with integrity, vision, and lasting change.
                    </p>
                </hgroup>

                <div class="board-members-layout">

                    <!-- chairman  -->
                    <div class="board-member-card">
                        <figure class="board-member-picture">
                            <img src="../assets/photos/sample_profile_man.png" alt="Mr. A.K.M Shirajul Islam">
                        </figure>
                        <div class="board-member-details">
                            <h4 class="board-member-name">Mr. A. K. M. Shirajul Islam</h4>
                            <p class="board-member-badge">
                                <span class="badge-line"></span>
                                <span class="badge-text">Chairman</span>
                            </p>
                            <p class="founder-message">
                                As Chairman of PMK's Board of Directors, I am honored to uphold our founder's vision and strengthen our commitment to serving communities with compassion, integrity, and accountability. Together, we will foster sustainable development, empower lives, and create meaningful opportunities that bring hope and lasting positive change.
                            </p>
                        </div>
                    </div>

                    <!-- vice chairman  -->
                    <div class="board-member-card">
                        <figure class="board-member-picture">
                            <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Shaheda Hossain Chowdhury">
                        </figure>
                        <div class="board-member-details">
                            <h4 class="board-member-name">Mrs. Shaheda Hossain Chowdhury</h4>
                            <p class="board-member-badge">
                                <span class="badge-line"></span>
                                <span class="badge-text">Vice Chairman</span>
                            </p>
                            <p class="founder-message">
                                As Vice Chairman of PMK, I am committed to supporting our mission with dedication, compassion, and responsible leadership. Guided by our founder’s vision, we will continue empowering communities, fostering sustainable development, and creating opportunities that uplift lives and inspire hope for a brighter and more inclusive future.
                            </p>
                        </div>
                    </div>

                    <!-- general Secretary  -->
                    <div class="board-member-card">
                        <figure class="board-member-picture">
                            <img src="../assets/photos/kamrun_nahar_executive_of_pmk.png" alt="Mrs. Kamrun Nahar">
                        </figure>
                        <div class="board-member-details">
                            <h4 class="board-member-name">Mrs. Kamrun Nahar</h4>
                            <p class="board-member-badge">
                                <span class="badge-line"></span>
                                <span class="badge-text">general Secretary</span>
                            </p>
                            <p class="founder-message">
                                As General Secretary and Chief Executive of PMK, I am dedicated to transforming our vision into meaningful action. Together with our team and partners, we strive to empower communities, uphold transparency, and create sustainable opportunities that bring hope, dignity, and lasting positive change to those we serve.
                            </p>
                        </div>
                    </div>

                    <!-- treasurer  -->
                    <div class="board-member-card">
                        <figure class="board-member-picture">
                            <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Bilkis Bari">
                        </figure>
                        <div class="board-member-details">
                            <h4 class="board-member-name">Mrs. Bilkis Bari</h4>
                            <p class="board-member-badge">
                                <span class="badge-line"></span>
                                <span class="badge-text">treasurer</span>
                            </p>
                            <p class="founder-message">
                                As Treasurer of PMK, I am committed to ensuring transparency, accountability, and responsible stewardship of our resources. Through sound financial management, we strengthen our ability to serve communities, sustain impactful programs, and honor the trust placed in us by our supporters, partners, and beneficiaries.
                            </p>
                        </div>
                    </div>

                    <!-- member  -->
                    <div class="board-member-card">
                        <figure class="board-member-picture">
                            <img src="../assets/photos/dewan_faisal_deputy_of_pmk.png" alt="Mr. Dewan Faisal">
                        </figure>
                        <div class="board-member-details">
                            <h4 class="board-member-name">Mr. Dewan Faisal</h4>
                            <p class="board-member-badge">
                                <span class="badge-line"></span>
                                <span class="badge-text">Member</span>
                            </p>
                            <p class="founder-message">
                                As Deputy Executive and member of PMK’s Executive Body, I am committed to supporting strong leadership, ensuring effective implementation of our mission, and working with dedication and integrity to empower communities, strengthen programs, and create sustainable impact that brings lasting positive change and hope to society.
                            </p>
                        </div>
                    </div>

                    <!-- member  -->
                    <div class="board-member-card">
                        <figure class="board-member-picture">
                            <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Suriya Shoaib">
                        </figure>
                        <div class="board-member-details">
                            <h4 class="board-member-name">Mrs. Suriya Shoaib</h4>
                            <p class="board-member-badge">
                                <span class="badge-line"></span>
                                <span class="badge-text">Member</span>
                            </p>
                            <p class="founder-message">
                                As a member of PMK’s Executive Committee, I am dedicated to supporting our mission with integrity, collaboration, and responsibility. I will work with the team to strengthen programs, empower communities, and promote sustainable development that creates lasting positive impact and meaningful change in society.
                            </p>
                        </div>
                    </div>

                    <!-- member  -->
                    <div class="board-member-card">
                        <figure class="board-member-picture">
                            <img src="../assets/photos/sample_profile_girl.png" alt="Mrs. Afjalun Nessa Chowdhury">
                        </figure>
                        <div class="board-member-details">
                            <h4 class="board-member-name">Mrs. Afjalun Nessa Chowdhury</h4>
                            <p class="board-member-badge">
                                <span class="badge-line"></span>
                                <span class="badge-text">Member</span>
                            </p>
                            <p class="founder-message">
                                As a member of PMK, I pledge to serve with responsibility, unity, and purpose. I will actively contribute to our shared mission, support community empowerment initiatives, and uphold the values of integrity and compassion while working toward sustainable development and lasting positive social impact.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- section:: executive framework  -->
        <section id="executive-framework">
            <div class="container-width">
                <hgroup class="exe-body-sec-header">
                    <!-- label -->
                    <div class="exe-sec-label">
                        <span class="sec-lbl-eyebrow"></span>
                        <span class="sec-lbl-text">Executive Governance Structure</span>
                    </div>
                    <h3 class="exe-sec-title">Executive Authority & Responsibilities</h3>
                    <p class="exe-sec-description">
                        Defines the executive body's authority, decision-making responsibilities, and oversight functions to ensure strategic alignment, accountability, and effective organizational governance.
                    </p>
                </hgroup>

                <!-- framework-layout  -->
                <div class="framework-layout">
                    <!-- item  -->
                    <div class="work-plan">
                        <div class="wp-icon">📈</div>
                        <h5 class="wp-title">Strategic Leadership</h5>
                        <p class="wp-text">
                            Guide organizational priorities and approve long-term plans that advance PMK's mission while promoting sustainable growth and community development initiatives.
                        </p>
                    </div>
                    <!-- item  -->
                    <div class="work-plan">
                        <div class="wp-icon">🛡️</div>
                        <h5 class="wp-title">Governance & Compliance</h5>
                        <p class="wp-text">
                            Ensure regulatory compliance, uphold accountability standards, and maintain transparent oversight across programs, finances, and institutional operations.
                        </p>
                    </div>
                    <!-- item  -->
                    <div class="work-plan">
                        <div class="wp-icon">💼</div>
                        <h5 class="wp-title">Financial Stewardship</h5>
                        <p class="wp-text">
                            Oversee budgets, audit findings, and internal controls to ensure financial sustainability and responsible management of organizational resources.
                        </p>
                    </div>
                    <!-- item  -->
                    <div class="work-plan">
                        <div class="wp-icon">🌐</div>
                        <h5 class="wp-title">Stakeholder Engagement</h5>
                        <p class="wp-text">
                            Strengthen partnerships with communities, government agencies, donors, and development partners to foster trust and collaborative progress.
                        </p>
                    </div>
                    <!-- item  -->
                    <div class="work-plan">
                        <div class="wp-icon">📑</div>
                        <h5 class="wp-title">Policy & Institutional Framework</h5>
                        <p class="wp-text">
                            Develop and maintain policies governing human resources, procurement, safeguarding, and operational standards across the organization.
                        </p>
                    </div>
                    <!-- item  -->
                    <div class="work-plan">
                        <div class="wp-icon">🎯</div>
                        <h5 class="wp-title">Mission & Values Stewardship</h5>
                        <p class="wp-text">
                            Protect PMK's core values and ensure decisions consistently support inclusive development and long-term social impact.
                        </p>
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