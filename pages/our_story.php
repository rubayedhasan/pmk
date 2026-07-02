<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Page</title>


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/our_story.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- hero section -->
        <section id="story-hero">
            <div class="story-hero-content">
                <span class="story-hero-label">PMK Stories</span>
                <h1 class="story-hero-title">
                    We exist to
                    <br>
                    <span style="color:var(--pmk-green); padding:0; margin:0;">
                        create lasting change
                    </span>
                </h1>
                <p class="story-hero-description">
                    At PMK, we work with communities to build a better tomorrow through education, healthcare, livelihoods and empowerment.
                </p>

                <div class="story-hero-tagline">
                    <p class="tagline-text">Together, we empower lives and
                        <br> build brighter futures.
                    </p>
                </div>

                <div class="contact-button-container">
                    <a href="#story-timeline" class="contact-button">
                        <span>Explore Our Journey</span>
                        <span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right-dashed">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12h.5m3 0h1.5m3 0h6" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="scroll-down-indicator">
                <span class="scroll-indicator-text">Scroll</span>
                <span class="scroll-indicator-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-down-dashed">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5v.5m0 3v1.5m0 3v6" />
                        <path d="M16 15l-4 4" />
                        <path d="M8 15l4 4" />
                    </svg>
                </span>
            </div>
        </section>

        <!-- section:: who we are -->
        <section id="who-we-are">
            <div class="container-width">
                <!-- section header -->
                <hgroup class="story-common-header">
                    <span class="common-header-label">Who We Are</span>
                    <h4 class="common-header-title">
                        From a Small Initiative to
                        <br>
                        <span style="color: var(--pmk-green);">
                            A National Development Organization
                        </span>
                    </h4>
                </hgroup>

                <!-- pmk history description content  -->
                <div class="pmk-journey-content">
                    <p class="pmk-journey-text">
                        Palli Mongal Karmosuchi (PMK) is a national-level development organization headquartered in Zirabo, Ashulia, approximately 20 kilometers from Dhaka. Founded in 1988 through the voluntary efforts of socially conscious youth, PMK was established with the inspiration of Dewan Abdul Mannan and under the visionary leadership of Ms. Kamrun Nahar, who continues to serve as the Chief Executive.
                    </p>
                    <p class="pmk-journey-text">
                        Initially focused on providing humanitarian relief to disaster-affected communities, PMK quickly gained recognition for its effective emergency response. It was formally registered with the Directorate of Social Services in 1988 and with the NGO Affairs Bureau in 1993 to facilitate foreign funding. Over time, PMK expanded its focus to long-term development, addressing poverty and inequality through programs in education, healthcare, microfinance, skill development, and community empowerment. Now in its 38th year, PMK stands as a trusted organization committed to sustainable development, social justice, and improving the lives of marginalized populations across rural Bangladesh
                    </p>

                    <div class="pmk-sub-content">
                        <h5 class="sub-content-label">Major Activities:</h5>
                        <p class="pmk-journey-text">
                            To bring self-reliance among the powerless poor women for promoting socio-economic and facilitating in establishing their human rights in the society so that they themselves can plan and implement different socio economic and environmental activities with a view to setting up an institutional framework to establish a balanced society. PMK provides the following broad services:
                        </p>
                        <ul class="sub-content-list">
                            <li class="list-text">Financial intermediation through microfinance</li>
                            <li class="list-text">Social development service</li>
                            <li class="list-text">Micro enterprises</li>
                            <li class="list-text">Necessity of Enterprise of Enhance Development (NEED)</li>
                        </ul>
                    </div>

                    <p class="pmk-journey-text">
                        PMK MF program is being operated on a medium scale, as an independent program. Presently PMK operating 364 branches in 36 districts and 7 divisions. In order to create more employment opportunities PMK has initiated support to small entrepreneurs, so that they can expand their business and increase employments opportunities in their enterprises.
                    </p>
                </div>

                <!-- sub-section: story board  -->
                <div class="story-board-layout">
                    <!-- 1st story  -->
                    <figure class="story-figure story-figure-1">
                        <img src="../assets/story-board/medical_team_pmk.png" alt="pmk hospital" loading="lazy" fetchpriority="high" decoding="async">
                        <figcaption class="story-text">Healing Lives, Restoring Hope</figcaption>
                    </figure>
                    <!-- 2nd story  -->
                    <figure class="story-figure story-figure-2">
                        <img src="../assets/story-board/various_project.png" alt="pmk hospital" loading="lazy" fetchpriority="high" decoding="async">
                        <figcaption class="story-text">Women Leading Change</figcaption>
                    </figure>
                    <!-- 3rd story  -->
                    <figure class="story-figure story-figure-3">
                        <img src="../assets/story-board//smart.png" alt="smart project" loading="lazy" fetchpriority="high" decoding="async" style="object-position: top;">
                        <figcaption class="story-text">Work with Dignity, Live with Pride</figcaption>
                    </figure>
                    <!-- 4th story  -->
                    <figure class="story-figure story-figure-4">
                        <img src="../assets/story-board/pmk-promo-card-whiteBg.png" alt="pmk" loading="lazy" fetchpriority="high" decoding="async" style="object-fit: scale-down; object-position: center;">
                    </figure>
                    <!-- 5th story  -->
                    <figure class="story-figure story-figure-5">
                        <img src="../assets/story-board/tissue.png" alt="tissue culture lab" loading="lazy" fetchpriority="high" decoding="async" style="object-position: top;">
                        <figcaption class="story-text">Cultivating a Greener Tomorrow</figcaption>
                    </figure>
                    <!-- 6th story  -->
                    <figure class="story-figure story-figure-6">
                        <img src="../assets/story-board/infont_of_pmk.png" alt="infont_of_pmk" loading="lazy" fetchpriority="high" decoding="async">
                        <figcaption class="story-text">Standing With Communities</figcaption>
                    </figure>
                    <!-- 7th story  -->
                    <figure class="story-figure story-figure-7">
                        <img src="../assets/story-board/youth-group-2.png" alt="raise project" loading="lazy" fetchpriority="high" decoding="async">
                        <figcaption class="story-text">Creating Opportunities, Changing Lives</figcaption>
                    </figure>


                    <!-- extra  -->
                    <figure class="story-figure story-figure-8">
                        <img src="../assets/story-board/agriculture.jpg" alt="raise project" loading="lazy" fetchpriority="high" decoding="async">
                        <figcaption class="story-text">Empowering Families Through Livelihoods</figcaption>
                    </figure>
                    <figure class="story-figure story-figure-9">
                        <img src="../assets/story-board/group-together.jpg" alt="raise project" loading="lazy" fetchpriority="high" decoding="async" style=" object-position: center;">
                        <figcaption class="story-text">Where Hope Meets Action</figcaption>
                    </figure>
                    <figure class="story-figure story-figure-10">
                        <img src="../assets/story-board/women.jpg" alt="raise project" loading="lazy" fetchpriority="high" decoding="async">
                        <figcaption class="story-text">Empowering Every Dream</figcaption>
                    </figure>
                </div>

                <!-- pmk mission and vision and objective  -->
                <div class="inshort-vmo-layout">
                    <div class="inshort-vmo">
                        <h4 class="inshort-vmo-title">Vision</h4>
                        <p class="inshort-vmo-text">
                            A society which is economically productive and equitable, socially just, environmentally sound, and effectively democratic.
                        </p>
                    </div>
                    <div class="inshort-vmo">
                        <h4 class="inshort-vmo-title">Mission</h4>
                        <p class="inshort-vmo-text">
                            Participatory sustainable development provided institutional support to the poor (Particularly women)
                        </p>
                    </div>
                    <div class="inshort-vmo">
                        <h4 class="inshort-vmo-title">Objective </h4>
                        <p class="inshort-vmo-text">
                            The overall objective of PMK is to alleviate the poverty of poor families and empower women and men in social and economic aspects.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- section::pmk timeline  -->
        <section id="story-timeline">
            <div class="container-width">
                <!-- section header -->
                <hgroup class="story-common-header">
                    <span class="common-header-label">Our Journey</span>
                    <h4 class="common-header-title">
                        A Journey of Hope,
                        <br>
                        <span style="color: var(--pmk-green);">
                            Growth & Impact
                        </span>
                    </h4>
                    <p class="common-header-text">
                        Since our beginning, every milestone reflects our commitment to empowering communities, transforming lives, and creating lasting change through compassion, innovation, and partnership.
                    </p>
                </hgroup>

                <!-- timeline  -->
                <div class="timeline-layout">

                    <!-- 1st timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">1988 · The Beginning</span>
                                <h4 class="timeline-card-title">A Foundation Built on Service</h4>
                                <p class="timeline-card-text">
                                    PMK was officially registered with the Department of Social Welfare, marking the beginning of a lifelong commitment to empowering vulnerable communities through sustainable development, social inclusion, and compassionate service across Bangladesh.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="timeline-hex">1988</div>
                            <span class="timeline-step-label">01</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--2nd timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">1993</div>
                            <span class="timeline-step-label">02</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">1993 · Building Partnerships</span>
                                <h4 class="timeline-card-title">Expanding Opportunities Through Collaboration</h4>
                                <p class="timeline-card-text">
                                    PMK became a partner organization of PKSF, registered with the NGO Affairs Bureau, and secured international support from Asia Partnership for Human Development to strengthen women’s empowerment and community development initiatives.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 3rd timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">1994 · Global Support</span>
                                <h4 class="timeline-card-title">Investing in Women's Empowerment</h4>
                                <p class="timeline-card-text">
                                    Financial assistance from BILANCE, The Netherlands, enabled PMK to expand women-focused development programs, creating greater opportunities for economic independence, social participation, and improved quality of life.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">1994</div>
                            <span class="timeline-step-label">03</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--4th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">1998</div>
                            <span class="timeline-step-label">04</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">1998 · Economic Empowerment</span>
                                <h4 class="timeline-card-title">Supporting Entrepreneurs and Families</h4>
                                <p class="timeline-card-text">
                                    PMK introduced Micro-enterprise Financing to help small entrepreneurs grow sustainable businesses while launching a housing project with Bangladesh Bank support to improve safe and secure living conditions.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 5th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2001 · Strategic Partnership</span>
                                <h4 class="timeline-card-title">PMK joined CARE Bangladesh's INCOME III Project, strengthening</h4>
                                <p class="timeline-card-text">
                                    PMK joined CARE Bangladesh's INCOME III Project, strengthening livelihood programs, reducing poverty, and expanding opportunities for disadvantaged families through collaborative and sustainable development initiatives.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2001</div>
                            <span class="timeline-step-label">05</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--6th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2005</div>
                            <span class="timeline-step-label">06</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2005 · Rapid Expansion</span>
                                <h4 class="timeline-card-title">Reaching More Communities</h4>
                                <p class="timeline-card-text">
                                    PMK launched the PLDP-IF Project across Mymensingh with PKSF funding while expanding its branch network, enabling more underserved families to access financial services, development programs, and community support.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 7th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2006 · A Permanent Home</span>
                                <h4 class="timeline-card-title">Establishing Our Own Headquarters</h4>
                                <p class="timeline-card-text">
                                    PMK established its own office premises in Zirabo, Savar, creating a permanent foundation for organizational growth, improved operations, and expanded services for communities nationwide.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2006</div>
                            <span class="timeline-step-label">07</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--8th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2007</div>
                            <span class="timeline-step-label">08</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2007 · Strengthening Networks</span>
                                <h4 class="timeline-card-title">New Partnerships, Greater Impact</h4>
                                <p class="timeline-card-text">
                                    PMK partnered with Anukul Foundation and CARE Bangladesh while completing Joint Stock Company registration, enhancing organizational capacity, transparency, and long-term sustainability.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 9th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2008 · Building Capacity</span>
                                <h4 class="timeline-card-title">Training, Recognition & Growth</h4>
                                <p class="timeline-card-text">
                                    PMK established a modern training center, completed registration under the Society's Act, and obtained the Microcredit Regulatory Authority license, strengthening institutional excellence and professional development.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2008</div>
                            <span class="timeline-step-label">09</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--10th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2011</div>
                            <span class="timeline-step-label">10</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2011 · A Proud Achievement</span>
                                <h4 class="timeline-card-title">Recognized for Excellence</h4>
                                <p class="timeline-card-text">
                                    PMK earned the prestigious 'A' Category status from PKSF, recognizing years of outstanding performance, accountability, effective management, and commitment to serving communities with excellence.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 11th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2012 · Caring for Women</span>
                                <h4 class="timeline-card-title">A Safe Place to Thrive</h4>
                                <p class="timeline-card-text">
                                    PMK established a women's hostel accommodating 2,000 garment workers and low-income women, providing safe housing, dignity, security, and improved living conditions near their workplaces.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2012</div>
                            <span class="timeline-step-label">11</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--12th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2013</div>
                            <span class="timeline-step-label">12</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2013 · Digital Transformation</span>
                                <h4 class="timeline-card-title">Smarter Systems, Better Services</h4>
                                <p class="timeline-card-text">
                                    PMK automated all branches and implemented software-based MIS and FIS systems, improving efficiency, transparency, faster decision-making, and enhanced service delivery for members.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 13th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2014 · Preparing for Growth</span>
                                <h4 class="timeline-card-title">Expanding Our Infrastructure</h4>
                                <p class="timeline-card-text">
                                    Construction began on a new multi-story building at PMK's own premises, creating additional capacity to support expanding programs, operations, and community-focused services.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2014</div>
                            <span class="timeline-step-label">13</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--14th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2015</div>
                            <span class="timeline-step-label">12</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2015 · Better Healthcare</span>
                                <h4 class="timeline-card-title">Caring Beyond Development</h4>
                                <p class="timeline-card-text">
                                    PMK established a hospital and diagnostic center to provide affordable, quality healthcare services, ensuring members and surrounding communities received accessible medical care close to home.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 15th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2016 · Growing Reach</span>
                                <h4 class="timeline-card-title">Expanding Our Working Areas</h4>
                                <p class="timeline-card-text">
                                    PMK extended its operational coverage into new regions, bringing financial inclusion, healthcare, livelihood support, and development opportunities to more underserved communities across Bangladesh.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2016</div>
                            <span class="timeline-step-label">15</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--16th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2017</div>
                            <span class="timeline-step-label">16</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2017 · Serving More People</span>
                                <h4 class="timeline-card-title">Continuing Nationwide Expansion</h4>
                                <p class="timeline-card-text">
                                    Building on previous success, PMK further expanded its working areas, increasing access to sustainable development programs and improving the lives of thousands of families.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 17th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2018 · Celebrating Success</span>
                                <h4 class="timeline-card-title">30 Years of Impact</h4>
                                <p class="timeline-card-text">
                                    PMK celebrated its 30th anniversary with Kormi Sommelon, honoring employees, partners, and communities whose dedication helped create lasting social and economic transformation.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2018</div>
                            <span class="timeline-step-label">17</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--18th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2019</div>
                            <span class="timeline-step-label">18</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2019 · Investing in Healthcare Education</span>
                                <h4 class="timeline-card-title">PMK Nursing College Opens</h4>
                                <p class="timeline-card-text">
                                    PMK inaugurated its Nursing College to prepare skilled healthcare professionals, strengthening Bangladesh's healthcare workforce while creating meaningful educational and career opportunities for young people.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 19th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2020 · New Initiatives</span>
                                <h4 class="timeline-card-title">Launching the SEP Project</h4>
                                <p class="timeline-card-text">
                                    PMK introduced the SEP Project, expanding its commitment to sustainable development through innovative programs designed to improve livelihoods and strengthen community resilience.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2020</div>
                            <span class="timeline-step-label">19</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--20th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2021</div>
                            <span class="timeline-step-label">21</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2021 · Community Hospitality</span>
                                <h4 class="timeline-card-title">Mamata Palli Resort Opens</h4>
                                <p class="timeline-card-text">
                                    PMK inaugurated Mamata Palli Resort, creating new opportunities for tourism, employment generation, and sustainable community-based economic development.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 21th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2022 · Innovation & Technology</span>
                                <h4 class="timeline-card-title">A New Digital Experience</h4>
                                <p class="timeline-card-text">
                                    PMK upgraded its Management Information System and launched a modern website, enhancing digital services, operational efficiency, transparency, and stakeholder engagement.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2022</div>
                            <span class="timeline-step-label">21</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--22th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2023</div>
                            <span class="timeline-step-label">22</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2023 · Expanding Impact</span>
                                <h4 class="timeline-card-title">Launching RMTP & KGF-Sufolon</h4>
                                <p class="timeline-card-text">
                                    PMK introduced the RMTP and KGF-Sufolon projects, expanding support for sustainable livelihoods, economic resilience, and community development through innovative partnerships.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 23th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2024 · Empowering the Future</span>
                                <h4 class="timeline-card-title">New Projects, New Possibilities</h4>
                                <p class="timeline-card-text">
                                    PMK launched the RAISE-MCP&APT and YOUTH projects, empowering young people and communities through skills development, employment opportunities, and inclusive growth initiatives.
                                </p>
                            </div>
                        </div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2024</div>
                            <span class="timeline-step-label">23</span>
                            <div class="hex-bar-line"></div>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container"></div>
                    </div>

                    <!--24th timeline item -->
                    <div class="timeline-item">
                        <!-- left  -->
                        <div class="timeline-left-container"></div>

                        <!-- center  -->
                        <div class="timeline-center-container">
                            <div class="hex-bar-line"></div>
                            <div class="timeline-hex">2025</div>
                            <span class="timeline-step-label">24</span>
                        </div>

                        <!-- right  -->
                        <div class="timeline-right-container">
                            <div class="timeline-card">
                                <span class="timeline-card-subtitle">2025 · Smart Agriculture
                                </span>
                                <h4 class="timeline-card-title">Agroshor-SMART Begins Its Journey</h4>
                                <p class="timeline-card-text">
                                    PMK launched the Agroshor-SMART project to promote sustainable agriculture, improve farmer resilience, encourage innovation, and strengthen food security for rural communities across Bangladesh.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: our principle and values  -->
        <section id="our-principle-and-values">
            <div class="container-width">
                <!-- section header -->
                <hgroup class="story-common-header">
                    <span class="common-header-label">Our Principles & Values</span>
                    <h4 class="common-header-title">
                        Guided by Principles,
                        <br>
                        <span style="color: var(--pmk-green);">
                            United by Values
                        </span>
                    </h4>
                    <p class="common-header-text">
                        Our principles and values shape every decision, inspire meaningful partnerships, and empower us to create sustainable, inclusive, and lasting change for communities.
                    </p>
                </hgroup>

                <!-- principle values layout  -->
                <div class="principle-values-layout">
                    <!-- 1st values item  -->
                    <div class="value-container">
                        <figure class="value-image">
                            <img src="../assets/icons/innovation_icon.png" alt="INNOVATION">
                        </figure>
                        <h4 class="value-title">Innovation & Excellence</h4>
                        <p class="value-text">
                            PMK delivers innovative financial solutions, maintaining excellence to create sustainable opportunities and strengthen resilient communities.
                        </p>
                    </div>

                    <!-- 2nd values item  -->
                    <div class="value-container">
                        <figure class="value-image">
                            <img src="../assets/icons/accountability_icon.png" alt="accountability">
                        </figure>
                        <h4 class="value-title">Integrity & Accountability</h4>
                        <p class="value-text">
                            PMK upholds honesty, transparency, and accountability, building trust through ethical financial services and responsible governance.
                        </p>
                    </div>

                    <!-- 3rd values item  -->
                    <div class="value-container">
                        <figure class="value-image">
                            <img src="../assets/icons/dignity_icon.png" alt="dignity">
                        </figure>
                        <h4 class="value-title">Inclusion & Dignity</h4>
                        <p class="value-text">
                            PMK ensures equal financial opportunities, respecting every individual with dignity while fostering inclusive and sustainable development.
                        </p>
                    </div>

                    <!-- 4th values item  -->
                    <div class="value-container">
                        <figure class="value-image">
                            <img src="../assets/icons/care_icon.png" alt="care and compassion">
                        </figure>
                        <h4 class="value-title">People First</h4>
                        <p class="value-text">
                            PMK prioritizes people, delivering compassionate financial services that empower families, strengthen livelihoods, and inspire lasting hope.
                        </p>
                    </div>

                    <!-- 5th values item  -->
                    <div class="value-container">
                        <figure class="value-image">
                            <img src="../assets/icons/empower_icon.png" alt="empowerment">
                        </figure>
                        <h4 class="value-title">Empowerment & Growth</h4>
                        <p class="value-text">
                            PMK empowers individuals through accessible financial services, fostering entrepreneurship, economic independence, and sustainable community growth together.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: founder message  -->
        <section id="our-founder-message">
            <div class="container-width">
                <div class="our-founder-message-container">
                    <!-- founder picture  -->
                    <figure class="founder-figure-image">
                        <img src="../assets/photos/dewan_mannan_sir.png" alt="dewan mannan sir">

                        <figcaption class="founder-monogram">
                            <h5 class="fm-name">Late Dewan Abdul Mannan</h5>
                            <span class="fm-post">Founder, PMK</span>
                        </figcaption>
                    </figure>

                    <!-- message content  -->
                    <div class="message-container-box">
                        <!-- header  -->
                        <span class="mcb-label">A Word from Our Founder</span>
                        <h4 class="mcb-title">
                            A Vision Rooted in Compassion,
                            <br>
                            A Legacy Built on Service
                        </h4>

                        <!-- founder quote  -->
                        <blockquote class="founder-quote">
                            "True development begins when we empower people to believe in their own potential."
                        </blockquote>

                        <!-- body  -->
                        <p class="founder-message-text">
                            PMK was founded in 1988 with a vision of creating opportunities for the underserved and empowering communities to achieve self-reliance. What started as a humanitarian initiative has grown into a trusted development organization, serving thousands through microfinance, education, healthcare, and sustainable livelihood programs.
                        </p>
                        <p class="founder-message-text">
                            Our mission has always been to uplift lives with compassion, integrity, and hope. Together, with the dedication of our people and the trust of our communities, we continue building a future where every individual has the opportunity to thrive.
                        </p>

                        <!-- footer  -->
                        <div class="founder-signature">
                            <h6 class="founder-name">Late. Dewan Abdul Mannan</h6>
                            <span class="fs-post">Founder</span>
                            <span class="fs-org-name">Palli Mongal Karmosuchi (PMK)</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: recognition  -->
        <section id="recognition">
            <div class="container-width">
                <!-- section header -->
                <hgroup class="story-common-header">
                    <span class="common-header-label">Our Credentials</span>
                    <h4 class="common-header-title">
                        Accreditations

                        <span style="color: var(--pmk-green);">
                            & Recognition
                        </span>
                    </h4>
                    <p class="common-header-text">
                        PMK proudly maintains recognized accreditations and trusted partnerships, demonstrating regulatory compliance, organizational excellence, transparency, and unwavering commitment to sustainable community development.
                    </p>
                </hgroup>

                <div class="recognition-layout">
                    <!-- 1st item  -->
                    <div class="recognition-field">
                        <figure class="recognition-field-image">
                            <img src="../assets/icons/bank_icon.png" alt="recognition organization icon">
                        </figure>
                        <h4 class="recognition-field-title">Regulatory Compliance</h4>
                        <p class="recognition-field-text">
                            Licensed by MRA since 2008, delivering transparent, trusted, compliant microfinance services
                        </p>
                    </div>

                    <!-- 2nd item  -->
                    <div class="recognition-field">
                        <figure class="recognition-field-image">
                            <img src="../assets/icons/board_icon.png" alt="recognition organization icon">
                        </figure>
                        <h4 class="recognition-field-title">Legal Recognition</h4>
                        <p class="recognition-field-text">
                            Legally registered with Social Services, NGO Affairs Bureau, and RJSC for organizational credibility.
                    </div>

                    <!-- 3rd item  -->
                    <div class="recognition-field">
                        <figure class="recognition-field-image">
                            <img src="../assets/icons/handshak_icon.png" alt="recognition organization icon">
                        </figure>
                        <h4 class="recognition-field-title">Development Partners</h4>
                        <p class="recognition-field-text">
                            Collaborating with development partners to promote financial inclusion, resilience, and sustainable community development.
                        </p>
                    </div>

                    <!-- 4th item  -->
                    <div class="recognition-field" onclick="window.location.href='./legal_status.php'" style="cursor: pointer;" title="click to visit our legal status">
                        <figure class="recognition-field-image">
                            <img src="../assets/icons/link.png" alt="recognition organization icon">
                        </figure>
                        <h4 class="recognition-field-title">Legal Status</h4>
                        <p class="recognition-field-text">
                            Legal recognition reflects our commitment to transparency, accountability, and trust. Click to learn more about our legal status.
                        </p>
                    </div>
                </div>
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
    <script src="../js/our_story.js"></script>
</body>

</html>