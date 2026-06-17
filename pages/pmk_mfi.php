<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | MFI</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/otherPageSharedLinks.php") ?>

    <!-- Linked swiper js stylesheet  -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/pmk_mfi.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/otherPageNavbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section::mfi Hero  -->
        <section id="mfi-hero">
            <div class="mfi-hero-content">
                <div class="mfi-hero-head">
                    <figure>
                        <img src="../assets/logo/main-logo.png" alt="main logo">
                    </figure>
                    <div>
                        <h6 class="hero-head-label">Microfinance</h6>
                        <span class="hero-head-text">Building Futures Together</span>
                    </div>
                </div>
                <div class="mfi-hero-body">
                    <h1 class="mfi-hero-title">Small Loans,
                        <br>
                        <span style="color: var(--pmk-green);">Big Opportunities</span>
                        for Every Dream
                    </h1>
                    <p class="mfi-hero-text">
                        We do not merely provide microloans; we invest in the vision of a better,
                        sustainable, and self-reliant future. Stay committed to this promise,
                        because it is through your responsible participation and dedication that
                        the foundation of a trust-based economy will be strengthened.
                    </p>

                    <!-- button  -->
                    <div class="contact-button-container">
                        <a href="#mfi-loan-products" class="contact-button">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-down-dashed">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5v.5m0 3v1.5m0 3v6" />
                                    <path d="M16 15l-4 4" />
                                    <path d="M8 15l4 4" />
                                </svg>
                            </span>
                            <span>Explore Programs</span>
                        </a>
                    </div>
                </div>


            </div>

            <div class="mfi-stats-bar">
                <!-- 1st item  -->
                <div class="mfi-stat-item">
                    <div class="mfi-stat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="mfi-stat-value">313,219</h5>
                        <p class="mfi-stat-label">Active Borrower</p>
                    </div>
                </div>

                <!-- 2nd item  -->
                <div class="mfi-stat-item">
                    <div class="mfi-stat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-tax">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8.487 21h7.026a4 4 0 0 0 3.808 -5.224l-1.706 -5.306a5 5 0 0 0 -4.76 -3.47h-1.71a5 5 0 0 0 -4.76 3.47l-1.706 5.306a4 4 0 0 0 3.808 5.224" />
                            <path d="M15 3q -1 4 -3 4t -3 -4l6 0" />
                            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                            <path d="M12 10v1" />
                            <path d="M12 17v1" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="mfi-stat-value">৳40,000M</h5>
                        <p class="mfi-stat-label">Loans Disbursed</p>
                    </div>
                </div>

                <!-- 3rd item  -->
                <div class="mfi-stat-item">
                    <div class="mfi-stat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-wave-saw-tool">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12h5l4 8v-16l4 8h5" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="mfi-stat-value">95%</h5>
                        <p class="mfi-stat-label">Repayment Rate </p>
                    </div>
                </div>

                <!-- 4th item  -->
                <p class="mfi-stats-quote">
                    Together, we create opportunities for a stronger tomorrow.
                </p>
            </div>
        </section>

        <!-- section:: mfi loan products  -->
        <section id="mfi-loan-products">
            <div class="container-width">
                <hgroup class="mfi-section-header">
                    <span class="mfi-header-label">Our Products</span>
                    <h3 class="mfi-header-title">Financial products
                        <br>
                        built for your needs
                    </h3>
                    <p class="mfi-header-description">
                        Flexible and accessible loan solutions designed to support personal goals, business growth, education, agriculture, housing improvements, and long-term financial stability.
                    </p>
                </hgroup>

                <!-- loan products grid layout  -->
                <div class="loan-products-layout">
                    <!-- 1st product  -->
                    <div class="loan-product">
                        <!-- product header  -->
                        <div class="header-ribbon">
                            <div class="ribbon-tail left"></div>
                            <div class="ribbon-body">
                                <h4 class="loan-product-title">JAGORON</h4>
                            </div>
                            <div class="ribbon-tail right"></div>
                        </div>
                        <!-- product body  -->
                        <div class="loan-product-body">
                            <p class="loan-product-description">
                                JAGORON is PMK’s microcredit program providing small loans to low-income households, promoting entrepreneurship, women’s empowerment, financial inclusion, sustainable livelihoods, increased income, and greater financial security in rural and urban communities.
                            </p>

                            <!-- product info  -->
                            <div class="product-info">
                                <h5 class="product-info-title">Product Info</h5>

                                <!-- product info basic  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin-taka">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 8l.553 -.276a1 1 0 0 1 1.447 .894v6.382a2 2 0 0 0 2 2h.5a2.5 2.5 0 0 0 2.5 -2.5v-.5h-1" />
                                            <path d="M8 11h7" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Product Code:</span>
                                            <span class="product-info-value">128</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Amount:</span>
                                            <span class="product-info-value">৳1K-৳1Lac</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Interest Rate:</span>
                                            <span class="product-info-value">24%</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- product info installment  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h16" />
                                            <path d="M7 14h.013" />
                                            <path d="M10.01 14h.005" />
                                            <path d="M13.01 14h.005" />
                                            <path d="M16.015 14h.005" />
                                            <path d="M13.015 17h.005" />
                                            <path d="M7.01 17h.005" />
                                            <path d="M10.01 17h.005" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Repayment Cycle:</span>
                                            <span class="product-info-value">Weekly & Monthly</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Installment:s</span>
                                            <span class="product-info-value">12/18/24/36/46</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2nd product  -->
                    <div class="loan-product">
                        <!-- product header  -->
                        <div class="header-ribbon">
                            <div class="ribbon-tail left"></div>
                            <div class="ribbon-body">
                                <h4 class="loan-product-title">JAGORON-M</h4>
                            </div>
                            <div class="ribbon-tail right"></div>
                        </div>
                        <!-- product body  -->
                        <div class="loan-product-body">
                            <p class="loan-product-description">
                                JAGORON is PMK’s microcredit program providing small loans to low-income households, promoting entrepreneurship, women’s empowerment, financial inclusion, sustainable livelihoods, increased income, and greater financial security in rural and urban communities.
                            </p>

                            <!-- product info  -->
                            <div class="product-info">
                                <h5 class="product-info-title">Product Info</h5>

                                <!-- product info basic  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin-taka">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 8l.553 -.276a1 1 0 0 1 1.447 .894v6.382a2 2 0 0 0 2 2h.5a2.5 2.5 0 0 0 2.5 -2.5v-.5h-1" />
                                            <path d="M8 11h7" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Product Code:</span>
                                            <span class="product-info-value">161</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Amount:</span>
                                            <span class="product-info-value">৳50K-৳30Lac</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Interest Rate:</span>
                                            <span class="product-info-value">24%</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- product info installment  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h16" />
                                            <path d="M7 14h.013" />
                                            <path d="M10.01 14h.005" />
                                            <path d="M13.01 14h.005" />
                                            <path d="M16.015 14h.005" />
                                            <path d="M13.015 17h.005" />
                                            <path d="M7.01 17h.005" />
                                            <path d="M10.01 17h.005" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Repayment Cycle:</span>
                                            <span class="product-info-value">Monthly</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Installment:s</span>
                                            <span class="product-info-value">12/18/24/36/46</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3rd product  -->
                    <div class="loan-product">
                        <!-- product header  -->
                        <div class="header-ribbon">
                            <div class="ribbon-tail left"></div>
                            <div class="ribbon-body">
                                <h4 class="loan-product-title">Agroshor</h4>
                            </div>
                            <div class="ribbon-tail right"></div>
                        </div>
                        <!-- product body  -->
                        <div class="loan-product-body">
                            <p class="loan-product-description">
                                PMK’s AGROSHOR Loan Product supports micro and small entrepreneurs through accessible financing, fostering income generation, employment creation, and sustainable poverty reduction in rural and underserved communities.
                            </p>

                            <!-- product info  -->
                            <div class="product-info">
                                <h5 class="product-info-title">Product Info</h5>

                                <!-- product info basic  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin-taka">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 8l.553 -.276a1 1 0 0 1 1.447 .894v6.382a2 2 0 0 0 2 2h.5a2.5 2.5 0 0 0 2.5 -2.5v-.5h-1" />
                                            <path d="M8 11h7" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Product Code:</span>
                                            <span class="product-info-value">130</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Amount:</span>
                                            <span class="product-info-value">৳1Lac-৳80Lac</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Interest Rate:</span>
                                            <span class="product-info-value">24%</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- product info installment  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h16" />
                                            <path d="M7 14h.013" />
                                            <path d="M10.01 14h.005" />
                                            <path d="M13.01 14h.005" />
                                            <path d="M16.015 14h.005" />
                                            <path d="M13.015 17h.005" />
                                            <path d="M7.01 17h.005" />
                                            <path d="M10.01 17h.005" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Repayment Cycle:</span>
                                            <span class="product-info-value">WEEKLY,MONTHLY</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Installment:s</span>
                                            <span class="product-info-value">12/18/24/36/46/90</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4th product  -->
                    <div class="loan-product">
                        <!-- product header  -->
                        <div class="header-ribbon">
                            <div class="ribbon-tail left"></div>
                            <div class="ribbon-body">
                                <h4 class="loan-product-title">Sufolon</h4>
                            </div>
                            <div class="ribbon-tail right"></div>
                        </div>
                        <!-- product body  -->
                        <div class="loan-product-body">
                            <p class="loan-product-description">
                                PMK’s SUFOLON Loan Product provides flexible agricultural financing to marginal and small farmers, supporting crop production, livestock, fisheries, and agro-based enterprises to enhance income, food security, and livelihoods.
                            </p>

                            <!-- product info  -->
                            <div class="product-info">
                                <h5 class="product-info-title">Product Info</h5>

                                <!-- product info basic  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin-taka">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 8l.553 -.276a1 1 0 0 1 1.447 .894v6.382a2 2 0 0 0 2 2h.5a2.5 2.5 0 0 0 2.5 -2.5v-.5h-1" />
                                            <path d="M8 11h7" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Product Code:</span>
                                            <span class="product-info-value">146</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Amount:</span>
                                            <span class="product-info-value">৳5K-৳30Lac</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Interest Rate:</span>
                                            <span class="product-info-value">24%</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- product info installment  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h16" />
                                            <path d="M7 14h.013" />
                                            <path d="M10.01 14h.005" />
                                            <path d="M13.01 14h.005" />
                                            <path d="M16.015 14h.005" />
                                            <path d="M13.015 17h.005" />
                                            <path d="M7.01 17h.005" />
                                            <path d="M10.01 17h.005" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Repayment Cycle:</span>
                                            <span class="product-info-value">WEEKLY,MONTHLY</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Installment:s</span>
                                            <span class="product-info-value">12/18/24/36/46/90</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5th product  -->
                    <div class="loan-product">
                        <!-- product header  -->
                        <div class="header-ribbon">
                            <div class="ribbon-tail left"></div>
                            <div class="ribbon-body">
                                <h4 class="loan-product-title">Sufolon-M</h4>
                            </div>
                            <div class="ribbon-tail right"></div>
                        </div>
                        <!-- product body  -->
                        <div class="loan-product-body">
                            <p class="loan-product-description">
                                PMK’s SUFOLON Loan Product provides flexible agricultural financing to marginal and small farmers, supporting crop production, livestock, fisheries, and agro-based enterprises to enhance income, food security, and livelihoods.
                            </p>

                            <!-- product info  -->
                            <div class="product-info">
                                <h5 class="product-info-title">Product Info</h5>

                                <!-- product info basic  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin-taka">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 8l.553 -.276a1 1 0 0 1 1.447 .894v6.382a2 2 0 0 0 2 2h.5a2.5 2.5 0 0 0 2.5 -2.5v-.5h-1" />
                                            <path d="M8 11h7" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Product Code:</span>
                                            <span class="product-info-value">148</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Amount:</span>
                                            <span class="product-info-value">৳30K-৳50Lac</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Interest Rate:</span>
                                            <span class="product-info-value">24%</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- product info installment  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h16" />
                                            <path d="M7 14h.013" />
                                            <path d="M10.01 14h.005" />
                                            <path d="M13.01 14h.005" />
                                            <path d="M16.015 14h.005" />
                                            <path d="M13.015 17h.005" />
                                            <path d="M7.01 17h.005" />
                                            <path d="M10.01 17h.005" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Repayment Cycle:</span>
                                            <span class="product-info-value">MONTHLY</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Installment:s</span>
                                            <span class="product-info-value">12/18/24</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6th product  -->
                    <div class="loan-product">
                        <!-- product header  -->
                        <div class="header-ribbon">
                            <div class="ribbon-tail left"></div>
                            <div class="ribbon-body">
                                <h4 class="loan-product-title">BUNIAD</h4>
                            </div>
                            <div class="ribbon-tail right"></div>
                        </div>
                        <!-- product body  -->
                        <div class="loan-product-body">
                            <p class="loan-product-description">
                                PMK’s BUNIAD Loan Product empowers extremely poor households through flexible financial services, promoting sustainable livelihoods, income generation, resilience, and social inclusion while strengthening dignity and self-reliance.
                            </p>

                            <!-- product info  -->
                            <div class="product-info">
                                <h5 class="product-info-title">Product Info</h5>

                                <!-- product info basic  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin-taka">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 8l.553 -.276a1 1 0 0 1 1.447 .894v6.382a2 2 0 0 0 2 2h.5a2.5 2.5 0 0 0 2.5 -2.5v-.5h-1" />
                                            <path d="M8 11h7" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Product Code:</span>
                                            <span class="product-info-value">131</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Amount:</span>
                                            <span class="product-info-value">৳1K-৳20K</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Interest Rate:</span>
                                            <span class="product-info-value">20%</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- product info installment  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h16" />
                                            <path d="M7 14h.013" />
                                            <path d="M10.01 14h.005" />
                                            <path d="M13.01 14h.005" />
                                            <path d="M16.015 14h.005" />
                                            <path d="M13.015 17h.005" />
                                            <path d="M7.01 17h.005" />
                                            <path d="M10.01 17h.005" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Repayment Cycle:</span>
                                            <span class="product-info-value">Weekly</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Installment:</span>
                                            <span class="product-info-value">44</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 7th product  -->
                    <div class="loan-product">
                        <!-- product header  -->
                        <div class="header-ribbon">
                            <div class="ribbon-tail left"></div>
                            <div class="ribbon-body">
                                <h4 class="loan-product-title">Abason</h4>
                            </div>
                            <div class="ribbon-tail right"></div>
                        </div>
                        <!-- product body  -->
                        <div class="loan-product-body">
                            <p class="loan-product-description">
                                PMK’s ABASON Loan Product supports low-income families in building, repairing, and improving homes, enhancing living conditions, health, safety, and dignity while promoting sustainable community development.
                            </p>

                            <!-- product info  -->
                            <div class="product-info">
                                <h5 class="product-info-title">Product Info</h5>

                                <!-- product info basic  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin-taka">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 8l.553 -.276a1 1 0 0 1 1.447 .894v6.382a2 2 0 0 0 2 2h.5a2.5 2.5 0 0 0 2.5 -2.5v-.5h-1" />
                                            <path d="M8 11h7" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Product Code:</span>
                                            <span class="product-info-value">215</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Amount:</span>
                                            <span class="product-info-value">৳80K-৳20Lac</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Interest Rate:</span>
                                            <span class="product-info-value">12%</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- product info installment  -->
                                <div class="product-info-sec">
                                    <div class="product-info-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h16" />
                                            <path d="M7 14h.013" />
                                            <path d="M10.01 14h.005" />
                                            <path d="M13.01 14h.005" />
                                            <path d="M16.015 14h.005" />
                                            <path d="M13.015 17h.005" />
                                            <path d="M7.01 17h.005" />
                                            <path d="M10.01 17h.005" />
                                        </svg>
                                    </div>
                                    <ul class="product-info-list">
                                        <li>
                                            <span class="product-info-label">Repayment Cycle:</span>
                                            <span class="product-info-value">Monthly</span>
                                        </li>
                                        <li>
                                            <span class="product-info-label">Loan Installment:s</span>
                                            <span class="product-info-value">12</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 8th product  -->
                    <div class="loan-product">
                        <!-- product header  -->
                        <div class="header-ribbon">
                            <div class="ribbon-tail left"></div>
                            <div class="ribbon-body">
                                <h4 class="loan-product-title">Others</h4>
                            </div>
                            <div class="ribbon-tail right"></div>
                        </div>
                        <!-- product body  -->
                        <div class="loan-product-body">
                            <p class="loan-product-description">
                                Beyond our flagship loan programs, PMK offers a variety of specialized products such as HHSL, HHWL, LI, MFCE, SDL, RAISE-YOUTH, RAISE-APT, and Agroshor-SMART. These initiatives are designed to meet diverse financial and development needs, empowering individuals, entrepreneurs, youth, and communities. Explore each product to discover its features, benefits, and opportunities for sustainable growth.
                            </p>

                            <!-- product info  -->
                            <div class="product-button-container">
                                <button onclick="window.location.href='./loan_product_details.php'" type="button" class="product-button">
                                    <span>See Other Products</span>
                                    <span class="pb-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right-dashed">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 12h.5m3 0h1.5m3 0h6" />
                                            <path d="M15 16l4 -4" />
                                            <path d="M15 8l4 4" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- section:: how to get loan  -->
        <section id="how-to-get-loan">
            <div class="container-width">
                <hgroup class="mfi-section-header">
                    <span class="mfi-header-label">process</span>
                    <h3 class="mfi-header-title">How to get a loan</h3>
                    <p class="mfi-header-description">
                        Eligible members can apply for a loan by submitting required documents, meeting program criteria, and completing the approval process.
                    </p>
                </hgroup>

                <!-- loan process layout  -->
                <div class="loan-process-layout">
                    <!-- 1st step  -->
                    <div class="step">
                        <span class="step-number">1</span>
                        <h4 class="step-title">Become a Member</h4>
                        <p class="step-description">
                            Register as a PMK member to become eligible for savings services, loan programs, financial support, and other development opportunities.
                        </p>
                    </div>

                    <!-- 2nd step  -->
                    <div class="step">
                        <span class="step-number">2</span>
                        <h4 class="step-title">Required Savings</h4>
                        <p class="step-description">
                            Maintain savings equal to five percent of your requested loan amount to meet eligibility requirements before applying successfully.
                        </p>
                    </div>

                    <!-- 3rd step  -->
                    <div class="step">
                        <span class="step-number">3</span>
                        <h4 class="step-title">Apply for a Loan</h4>
                        <p class="step-description">
                            Complete and submit the loan application form with required information and supporting documents for review and processing.
                        </p>
                    </div>

                    <!-- 4th step  -->
                    <div class="step">
                        <span class="step-number">4</span>
                        <h4 class="step-title">Review and Approval</h4>
                        <p class="step-description">
                            PMK reviews your application, verifies eligibility, assesses repayment capacity, and approves loans according to established program guidelines.
                        </p>
                    </div>

                    <!-- 2nd step  -->
                    <div class="step">
                        <span class="step-number">5</span>
                        <h4 class="step-title">Disbursement</h4>
                        <p class="step-description">
                            Upon approval, the loan amount is disbursed promptly, enabling investment in business activities, livelihoods, or personal goals.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: who-is-eligible-member  -->
        <section id="who-is-eligible-member">
            <div class="container-width">
                <div class="eligible-layout">
                    <hgroup class="mfi-section-header">
                        <span class="mfi-header-label">Eligibility</span>
                        <h3 class="mfi-header-title">Who can apply?</h3>
                        <p class="mfi-header-description">
                            Registered PMK members who meet savings requirements and eligibility criteria can apply for a loan by submitting necessary documents and completing the process.
                        </p>
                    </hgroup>

                    <div class="eligible-criteria">
                        <!-- 1st criteria block  -->
                        <div class="criteria-block">
                            <div class="criteria-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-checkbox">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </div>
                            <div class="explain-criteria">
                                <h5 class="cr-label">PMK Registered Member</h5>
                                <p class="cr-text">
                                    Must be officially registered with PMK and actively participating in its savings and development programs.
                                </p>
                            </div>
                        </div>

                        <!-- 2nd criteria block  -->
                        <div class="criteria-block">
                            <div class="criteria-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-checkbox">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </div>
                            <div class="explain-criteria">
                                <h5 class="cr-label">Savings Requirement (5%)</h5>
                                <p class="cr-text">
                                    Member must maintain savings equal to at least five percent of the requested loan amount.
                                </p>
                            </div>
                        </div>

                        <!-- 3rd criteria block  -->
                        <div class="criteria-block">
                            <div class="criteria-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-checkbox">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </div>
                            <div class="explain-criteria">
                                <h5 class="cr-label">Age Requirement (18–60 Years)</h5>
                                <p class="cr-text">
                                    Applicant should be within economically active age group with ability to generate income or livelihood.
                                </p>
                            </div>
                        </div>

                        <!-- 4th criteria block  -->
                        <div class="criteria-block">
                            <div class="criteria-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-checkbox">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </div>
                            <div class="explain-criteria">
                                <h5 class="cr-label">Bangladesh Resident</h5>
                                <p class="cr-text">
                                    Must be a citizen or permanent resident of Bangladesh with a valid National ID (NID) for verification purposes.
                                </p>
                            </div>
                        </div>

                        <!-- 5th criteria block  -->
                        <div class="criteria-block">
                            <div class="criteria-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-checkbox">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </div>
                            <div class="explain-criteria">
                                <h5 class="cr-label">Stable Income or Livelihood</h5>
                                <p class="cr-text">
                                    Must have reliable income source or business activity ensuring consistent loan repayment capacity and financial stability.
                                </p>
                            </div>
                        </div>

                        <!-- 6th criteria block  -->
                        <div class="criteria-block">
                            <div class="criteria-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-checkbox">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </div>
                            <div class="explain-criteria">
                                <h5 class="cr-label">Good Compliance Record</h5>
                                <p class="cr-text">
                                    Member must follow PMK rules, maintain discipline, and have no record of serious violations or defaults.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section::about loan  -->
        <section id="about-loan">
            <div class="container-width">
                <hgroup class="mfi-section-header">
                    <span class="mfi-header-label">Loan Program</span>
                    <h3 class="mfi-header-title">Your Guide
                        <br>
                        to PMK Loans
                    </h3>
                    <p class="mfi-header-description">
                        Discover available loan products, qualification criteria, repayment terms, and simple steps to access financial support.
                    </p>
                </hgroup>

                <!-- loan guide layout  -->
                <div class="loan-guide-layout">
                    <!-- guide buttons container  -->
                    <div class="guide-group-button">
                        <button type="button" class="guide-button guide-button-active" onclick="showLoanGuideBlocks('loan-purpose')">
                            Loan Purpose
                        </button>
                        <button type="button" class="guide-button" onclick="showLoanGuideBlocks('rules-of-loan')">
                            Rules of Loan
                        </button>
                        <button type="button" class="guide-button" onclick="showLoanGuideBlocks('loan-installment-method')">
                            Installment Method
                        </button>
                        <button type="button" class="guide-button" onclick="showLoanGuideBlocks('loan-guide')">
                            Loan Guide
                        </button>
                    </div>

                    <!-- loan purpose container -->
                    <div id="loan-purpose" class="guide-block">
                        <p class="loan-purpose-text">
                            Explore some of our most popular loan purposes, selected from over 200 eligible activities across agriculture, business, transport, and services.
                        </p>

                        <!-- loan purpose grid  -->
                        <div class="loan-purpose-grid">
                            <!-- 1st item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🌾
                                </span>
                                <h5 class="purpose-title">
                                    Agriculture Loan
                                </h5>
                                <p class="purpose-text">
                                    Supports crop farming, irrigation, seeds, fertilizers, and farm equipment to increase agricultural productivity and income for rural farmers sustainably.
                                </p>
                            </div>

                            <!-- 2nd item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🏪
                                </span>
                                <h5 class="purpose-title">
                                    Business Loan
                                </h5>
                                <p class="purpose-text">
                                    Provides capital for trading, shop setup, inventory purchase, and operational expenses to grow small and medium businesses effectively.
                                </p>
                            </div>

                            <!-- 3rd item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🧑‍💼
                                </span>
                                <h5 class="purpose-title">
                                    Small Business Loan
                                </h5>
                                <p class="purpose-text">
                                    Financial support for micro enterprises, startups, and local vendors to expand operations, improve services, and increase earnings.
                                </p>
                            </div>

                            <!-- 4th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🐄
                                </span>
                                <h5 class="purpose-title">
                                    Dairy Farm Loan
                                </h5>
                                <p class="purpose-text">
                                    Helps establish dairy farms, purchase cows, feed, veterinary care, and equipment for sustainable milk production and income.
                                </p>
                            </div>

                            <!-- 5th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🐔
                                </span>
                                <h5 class="purpose-title">
                                    Poultry Farm Loan
                                </h5>
                                <p class="purpose-text">
                                    ProvSupports poultry farming, including chicks, feed, housing, vaccination, and equipment to ensure profitable egg and meat production.
                                </p>
                            </div>

                            <!-- 6th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🐟
                                </span>
                                <h5 class="purpose-title">
                                    Fish Culture Loan
                                </h5>
                                <p class="purpose-text">
                                    Provides funding for fish farming ponds, feed, fingerlings, and maintenance to increase fish production and market supply.
                                </p>
                            </div>

                            <!-- 7th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🐐
                                </span>
                                <h5 class="purpose-title">
                                    Goat Rearing Loan
                                </h5>
                                <p class="purpose-text">
                                    Assists goat farming with purchase, feed, shelter, healthcare, and breeding support for meat and milk production income.
                                </p>
                            </div>

                            <!-- 8th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🐂
                                </span>
                                <h5 class="purpose-title">
                                    Cow Rearing / Beef Fattening Loan
                                </h5>
                                <p class="purpose-text">
                                    Helps rear cattle and beef fattening through feed, healthcare, shelter, and purchase for livestock business growth.
                                </p>
                            </div>

                            <!-- 9th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🥬
                                </span>
                                <h5 class="purpose-title">
                                    Vegetable Cultivation Loan
                                </h5>
                                <p class="purpose-text">
                                    Supports vegetable farming with seeds, fertilizers, irrigation, and tools to improve yield and farmer profitability.
                                </p>
                            </div>

                            <!-- 10th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🌾
                                </span>
                                <h5 class="purpose-title">
                                    Paddy Cultivation Loan
                                </h5>
                                <p class="purpose-text">
                                    Provides support for rice farming including seeds, irrigation, fertilizer, and harvesting equipment for better yield.
                                </p>
                            </div>

                            <!-- 11th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🛺
                                </span>
                                <h5 class="purpose-title">
                                    Auto Rickshaw Purchase Loan
                                </h5>
                                <p class="purpose-text">
                                    Helps purchase auto rickshaws for passenger transport business, increasing daily income and employment opportunities.
                                </p>
                            </div>

                            <!-- 12th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🛺
                                </span>
                                <h5 class="purpose-title">
                                    Rickshaw Purchase Loan
                                </h5>
                                <p class="purpose-text">
                                    Supports buying rickshaws for transportation business, helping generate steady daily earnings for individuals.
                                </p>
                            </div>

                            <!-- 13th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🪑
                                </span>
                                <h5 class="purpose-title">
                                    Furniture Making Loan
                                </h5>
                                <p class="purpose-text">
                                    Provides capital for wood or steel furniture production, tools, materials, and workshop setup for business growth.
                            </div>

                            <!-- 14th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    👕
                                </span>
                                <h5 class="purpose-title">
                                    Cloth Business Loan
                                </h5>
                                <p class="purpose-text">
                                    Helps start or expand clothing trade, inventory purchase, shop setup, and market expansion for better income.
                                </p>
                            </div>

                            <!-- 15th item  -->
                            <div class="purpose-item">
                                <span class="purpose-icon">
                                    🛒
                                </span>
                                <h5 class="purpose-title">
                                    Grocery Shop Loan
                                </h5>
                                <p class="purpose-text">
                                    Supports grocery shop setup, inventory stocking, and daily operation to ensure stable local community supply business.
                                </p>
                            </div>
                        </div>

                        <div class="about-lone-note">
                            <span class="aln-icon">ℹ️</span>
                            <p class="aln-text">
                                Loans are disbursed in BDT, Approved amounts depend on repayment capacity, recommendation, and repayment record. Higher loan limits may increase over time with consistent repayments.
                            </p>
                        </div>
                    </div>

                    <!-- rules of loan container  -->
                    <div id="rules-of-loan" class="guide-block no-display">
                        <!-- display loan rules tabs  -->
                        <aside class="loan-rules-tab-container">
                            <ul class="rule-tabs">
                                <span class="rt-head">
                                    Rule Tabs
                                </span>
                                <li class="rule-tab rule-tab-active" onclick="showRulesBlock('general-loan-rules')">
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-badge-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M13 7h-6l4 5l-4 5h6l4 -5l-4 -5" />
                                        </svg>
                                    </span>
                                    General Rules
                                </li>
                                <li class="rule-tab" onclick="showRulesBlock('product-specific-loan-rules')">
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-badge-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M13 7h-6l4 5l-4 5h6l4 -5l-4 -5" />
                                        </svg>
                                    </span>
                                    Product Specific Rules
                                </li>
                                <li class="rule-tab" onclick="showRulesBlock('additional-mandatory-requirements')">
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-badge-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M13 7h-6l4 5l-4 5h6l4 -5l-4 -5" />
                                        </svg>
                                    </span>
                                    Additional Requirements
                                </li>
                                <li class="rule-tab" onclick="showRulesBlock('interest-and-fee-structure')">
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-badge-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M13 7h-6l4 5l-4 5h6l4 -5l-4 -5" />
                                        </svg>
                                    </span>
                                    Interest & Fee Structure
                                </li>
                                <li class="rule-tab" onclick="showRulesBlock('rules-of-waiver')">
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-badge-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M13 7h-6l4 5l-4 5h6l4 -5l-4 -5" />
                                        </svg>
                                    </span>
                                    Rules For Waiver
                                </li>
                            </ul>
                        </aside>

                        <!-- display: loan rules  -->
                        <aside class="loan-rules-display-container">
                            <!-- general loan rules  -->
                            <div id="general-loan-rules" class="rules-block rules-block-active">
                                <h4 class="guide-block-title">
                                    <img src="../assets/icons/folder.gif" alt="icon" class="gbl-icon">
                                    <span>General Loan Rules</span>
                                </h4>
                                <ol class="list-of-rules">
                                    <li class="rule">Members must be registered and active participants of the organization.</li>
                                    <li class="rule">Loans shall be used only for legal, productive, and income-generating purposes.</li>
                                    <li class="rule">Borrowers must provide accurate information during loan application and monitoring.</li>
                                    <li class="rule">Loan approval depends on eligibility, repayment capacity, and compliance with organizational policies.</li>
                                    <li class="rule">The borrower is fully responsible for repaying the loan according to the agreed schedule.</li>
                                    <li class="rule">Loan funds cannot be transferred, lent, or assigned to another person.</li>
                                    <li class="rule">Members must cooperate with field visits, monitoring, and verification activities.</li>
                                    <li class="rule">Any false information or misuse of loan funds may result in loan cancellation and disqualification from future loans.</li>
                                    <li class="rule">Members should avoid taking excessive loans that may affect their repayment capacity.</li>
                                    <li class="rule">Late or missed installments may result in penalties and restrictions on future borrowing.</li>
                                </ol>
                            </div>

                            <!-- product specific loan rules  -->
                            <div id="product-specific-loan-rules" class="rules-block no-display">
                                <h4 class="guide-block-title">
                                    <img src="../assets/icons/box.gif" alt="icon" class="gbl-icon">
                                    <span>Product-Specific Loan Rules</span>
                                </h4>

                                <!-- product-specific-loan grid payout  -->
                                <div class="product-specific-loan-grid-layout">
                                    <div class="product-specific-loan">
                                        <h4 class="psl-title">1. Jagoron</h4>
                                        <ul class="rule-sublist">
                                            <li class="sub-rule">The loan must be used only for legal and environmentally friendly income-generating activities.</li>
                                            <li class="sub-rule">Preference may be given to women borrowers and economically disadvantaged households.</li>
                                            <li class="sub-rule">Borrowers must comply with the approved loan purpose and repayment schedule.</li>
                                        </ul>
                                    </div>

                                    <div class="product-specific-loan">
                                        <h4 class="psl-title">2. Agrosor</h4>
                                        <ul class="rule-sublist">
                                            <li class="sub-rule">The loan shall be used only for business, trade, farming, processing, or service-sector enterprises.</li>
                                            <li class="sub-rule">Borrowers must operate a viable microenterprise and demonstrate the ability to manage the business.</li>
                                            <li class="sub-rule">Business expansion loans may be considered based on satisfactory repayment performance.</li>
                                        </ul>
                                    </div>

                                    <div class="product-specific-loan">
                                        <h4 class="psl-title">3. Sufolon</h4>
                                        <ul class="rule-sublist">
                                            <li class="sub-rule">The loan shall be used only for agriculture-related activities, including crop cultivation, livestock, and fisheries.</li>
                                            <li class="sub-rule">Borrowers must be engaged in farming activities and use the loan for productive agricultural purposes.</li>
                                            <li class="sub-rule">Repayment schedules may be aligned with seasonal agricultural income.</li>
                                        </ul>
                                    </div>

                                    <div class="product-specific-loan">
                                        <h4 class="psl-title">4. Buniad</h4>
                                        <ul class="rule-sublist">
                                            <li class="sub-rule">The loan is intended for ultra-poor households to improve livelihoods and generate income.</li>
                                            <li class="sub-rule">Funds may be used for approved income-generating activities, land lease, or other productive purposes.</li>
                                            <li class="sub-rule">Borrowers shall use the loan solely for the approved activity</li>
                                        </ul>
                                    </div>

                                    <div class="product-specific-loan">
                                        <h4 class="psl-title">5. Abason</h4>
                                        <ul class="rule-sublist">
                                            <li class="sub-rule">For house construction, repair, or improvement.</li>
                                            <li class="sub-rule">Can include sanitation and basic home facilities.</li>
                                            <li class="sub-rule">Must be used only for family housing purposes.</li>
                                            <li class="sub-rule">Priority for landless or poor housing families.</li>
                                        </ul>
                                    </div>

                                    <div class="product-specific-loan">
                                        <h4 class="psl-title">6. WASH (Water, Sanitation & Hygiene)</h4>
                                        <ul class="rule-sublist">
                                            <li class="sub-rule">For water, sanitation, and hygiene improvements.</li>
                                            <li class="sub-rule">Includes tube-wells and sanitary latrines.</li>
                                            <li class="sub-rule">Improves health and living standards.</li>
                                            <li class="sub-rule">Must be used strictly for WASH purposes.</li>
                                        </ul>
                                    </div>

                                    <div class="product-specific-loan">
                                        <h4 class="psl-title">7. SMART</h4>
                                        <ul class="rule-sublist">
                                            <li class="sub-rule">The loan must be used only for approved microenterprise or income-generating business activities.</li>
                                            <li class="sub-rule">Funds can be used for business setup, expansion, working capital, or equipment.</li>
                                            <li class="sub-rule">The borrower must actively operate and manage the financed business.</li>
                                            <li class="sub-rule">The loan must not be used for personal or unapproved expenses.</li>
                                            <li class="sub-rule">Regular repayment is mandatory, and the organization may verify business use at any time.</li>
                                        </ul>
                                    </div>

                                    <div class="product-specific-loan">
                                        <h4 class="psl-title">8. RAISE</h4>
                                        <ul class="rule-sublist">
                                            <li class="sub-rule">The loan supports youth and micro-entrepreneurs in starting, recovering, or expanding income-generating businesses.</li>
                                            <li class="sub-rule">Funds must be used only for approved business purposes, working capital, or productive assets.</li>
                                            <li class="sub-rule">Borrowers must actively operate and manage the financed enterprise.</li>
                                            <li class="sub-rule">Priority may be given to youth, women, and vulnerable entrepreneurs.</li>
                                            <li class="sub-rule">Good repayment performance may qualify borrowers for larger loans and future support.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- additional Mandatory Requirements -->
                            <div id="additional-mandatory-requirements" class="rules-block no-display">
                                <h4 class="guide-block-title">
                                    <img src="../assets/icons/process.gif" alt="icon" class="gbl-icon">
                                    <span>Additional Mandatory Requirements</span>
                                </h4>

                                <ol class="list-of-rules">
                                    <li class="rule">
                                        <strong>
                                            Compulsory Savings:
                                        </strong> Members must maintain compulsory savings equal to 5% of the approved loan amount for their first loan cycle and 10% of the approved loan amount from the second loan cycle onwards, in accordance with the organization's savings policy
                                    </li>
                                    <li class="rule">
                                        <strong>
                                            Insurance Contribution:
                                        </strong> Members must contribute 1% insurance fee with the loan to provide financial protection against unforeseen events.
                                    </li>
                                    <li class="rule">
                                        <strong>
                                            Guarantor Requirement:
                                        </strong> Each borrower must provide
                                        1 person as Surety and 1 or 2 person as guarantor who will support the loan application and repayment commitment.
                                    </li>
                                    <li class="rule">
                                        <strong>
                                            Required Documents:
                                        </strong> Each borrower must provide
                                        Members must submit necessary documents including National ID (NID), recent passport-size photograph, application form, guarantor’s NID and contact details, electricity or utility bill for address verification, and any other documents required for specific loan products.
                                    </li>
                                    <li class="rule">
                                        <strong>
                                            Compliance Requirement:
                                        </strong> Each borrower must provide
                                        All savings, insurance, guarantor, and documentation requirements must be completed before loan disbursement. Failure to comply may delay or cancel loan approval.
                                    </li>
                                </ol>
                            </div>

                            <!-- interest and fee structure -->
                            <div id="interest-and-fee-structure" class="rules-block no-display">
                                <!-- structure -->
                                <div class="rule-info-block">
                                    <h4 class="guide-block-title">
                                        <img src="../assets/icons/business.gif" alt="icon" class="gbl-icon">
                                        <span> Daily Interest on Declining Balance</span>
                                    </h4>
                                    <p class="rule-info-text">
                                        Interest is calculated on a daily basis using the declining balance method. Interest is charged only on the outstanding loan balance, not on the original loan amount. As borrowers make repayments and the outstanding balance decreases, the amount of interest charged also decreases, ensuring a fair and transparent loan calculation process.
                                    </p>
                                </div>

                                <!-- structure -->
                                <div class="rule-info-block">
                                    <h4 class="guide-block-title">
                                        <img src="../assets/icons/analytics.gif" alt="icon" class="gbl-icon">
                                        <span> Annual Interest Rate: 4% – 24%</span>
                                    </h4>
                                    <p class="rule-info-text">
                                        Interest rates range from 4% to 24%, depending on the loan product. All rates are clearly communicated to borrowers before loan disbursement to ensure transparency and informed financial decision-making.
                                    </p>
                                </div>

                                <!-- structure -->
                                <div class="rule-info-block">
                                    <h4 class="guide-block-title">
                                        <img src="../assets/icons/fee-receipt.gif" alt="icon" class="gbl-icon">
                                        <span>Loan-Related Charges</span>
                                    </h4>
                                    <ul class="rule-sublist">
                                        <li class="sub-rule">Passbook Fee: 10 BDT</li>
                                        <li class="sub-rule">Loan Application Form: 5 BDT</li>
                                        <li class="sub-rule">Membership Admission Form: 10 BDT</li>
                                        <li class="sub-rule">CIB Verification Fee: 5 BDT</li>
                                    </ul>
                                </div>

                                <!-- structure -->
                                <div class="rule-info-block">
                                    <h4 class="guide-block-title">
                                        <img src="../assets/icons//no-fee.gif" alt="icon" class="gbl-icon">
                                        <span>No Late Payment Fee</span>
                                    </h4>
                                    <p class="rule-info-text">
                                        PMK does not charge any late payment penalty. However, borrowers must maintain regular repayments to stay eligible for future loans, services, and continued financial support from the organization.
                                    </p>
                                </div>

                                <!-- structure -->
                                <div class="rule-info-block">
                                    <h4 class="guide-block-title">
                                        <img src="../assets/icons/money.gif" alt="icon" class="gbl-icon">
                                        <span>Early Repayment Allowed</span>
                                    </h4>
                                    <p class="rule-info-text">
                                        Borrowers may fully repay their loan before the scheduled maturity date without any prepayment penalty, allowing flexibility and financial convenience while supporting responsible borrowing and early settlement of obligations.
                                    </p>
                                </div>
                            </div>

                            <!-- loan waiver  -->
                            <div id="rules-of-waiver" class="rules-block no-display">
                                <div class="rule-info-block">
                                    <h4 class="guide-block-title">
                                        <img src="../assets/icons/voucher.gif" alt="icon" class="gbl-icon">
                                        <span>Loan Waiver Due to Death</span>
                                    </h4>
                                    <p class="rule-info-text">
                                        In the event of the natural death of a member or the member’s loan surety person (as defined under normal circumstances), the member will be eligible for loan waiver benefits due to death, as per organizational rules. In such cases, loan recovery activities will be stopped.
                                    </p>

                                    <!-- benefit  -->
                                    <ul class="rule-sublist">
                                        <h6 class="rule-sublist-title">Benefits</h6>
                                        <li class="sub-rule">The member may receive loan waiver up to a maximum of BDT 15,00,000 (Fifteen Lakh Taka).</li>
                                        <li class="sub-rule">The member’s deposited savings will be returned to the member or legal nominee.</li>
                                    </ul>

                                    <!-- benefit  -->
                                    <ul class="rule-sublist">
                                        <h6 class="rule-sublist-title">Condition</h6>
                                        <li class="sub-rule">The death must be a natural death as recognized under organizational policy and verification procedures.</li>
                                    </ul>
                                </div>
                            </div>
                        </aside>

                        <div class="rule-note">
                            <div class="rn-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-alert-triangle">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 9v4" />
                                    <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                                    <path d="M12 16h.01" />
                                </svg>
                            </div>

                            <p class="rule-note-text">
                                PMK strictly prohibits any form of coercion, harassment, or unethical conduct during loan repayment collection. If you experience any concern or wish to file a complaint, please contact our helpline: +8801709914000.
                            </p>
                        </div>
                    </div>

                    <!-- loan installment method container -->
                    <div id="loan-installment-method" class="guide-block no-display">
                        <h4 class="guide-block-title">Installment Payment Method</h4>
                        <!-- payment grid layout -->
                        <div class="payment-grid-layout">

                            <!-- cash payment  -->
                            <div class="payment-method">
                                <div class="payment-head">
                                    <img src="../assets/icons/payment.gif" alt="icon" class="ph-icon">
                                    <div class="ph-content">
                                        <h5 class="ph-title">Cash installment</h5>
                                        <p class="ph-text">In-person payment <span class="payment-badge">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-flame">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 10.941c2.333 -3.308 .167 -7.823 -1 -8.941c0 3.395 -2.235 5.299 -3.667 6.706c-1.43 1.408 -2.333 3.294 -2.333 5.588c0 3.704 3.134 6.706 7 6.706c3.866 0 7 -3.002 7 -6.706c0 -1.712 -1.232 -4.403 -2.333 -5.588c-2.084 3.353 -3.257 3.353 -4.667 2.235" />
                                                </svg>
                                                Popular</span></p>
                                    </div>
                                </div>

                                <p class="payment-step-text">Pay your loan installment in cash through any of the following methods:</p>

                                <!--payment steps  -->
                                <div class="payment-step">
                                    <h5 class="payment-step-title">
                                        <span class="st-icon">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            </svg>
                                        </span>
                                        <span>
                                            Through Credit Officer (Field Visit):
                                        </span>
                                    </h5>
                                    <p class="payment-step-text">
                                        Hand the installment amount directly to your PMK Credit Officer during field visits. The officer will record the payment in your passbook.
                                    </p>
                                </div>
                                <div class="payment-step">
                                    <h5 class="payment-step-title">
                                        <span class="st-icon">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-skyscraper">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 21l18 0" />
                                                <path d="M5 21v-14l8 -4v18" />
                                                <path d="M19 21v-10l-6 -4" />
                                                <path d="M9 9l0 .01" />
                                                <path d="M9 12l0 .01" />
                                                <path d="M9 15l0 .01" />
                                                <path d="M9 18l0 .01" />
                                            </svg>
                                        </span>
                                        <span>At PMK Branch Office:</span>
                                    </h5>
                                    <p class="payment-step-text">
                                        Visit the branch that issued your loan and pay a Credit Officer, Accounts Officer, or Branch Manager. Payment will be recorded in your passbook.
                                    </p>
                                </div>

                                <!-- payment confirmation -->
                                <div class="payment-confirmation">
                                    <span class="pc-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-mobile-message">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M11 3h10v8h-3l-4 2v-2h-3l0 -8" />
                                            <path d="M15 16v4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h2" />
                                            <path d="M10 18v.01" />
                                        </svg>
                                    </span>
                                    <p class="pc-text">
                                        Confirmation SMS sent to your registered mobile within 24 hours of payment.
                                    </p>
                                </div>
                            </div>

                            <!-- bank payment  -->
                            <div class="payment-method">
                                <div class="payment-head">
                                    <img src="../assets/icons/mobile-banking.gif" alt="icon" class="ph-icon">
                                    <div class="ph-content">
                                        <h5 class="ph-title">Bank transfer</h5>
                                        <p class="ph-text">Transfer from your account
                                            <span class="payment-badge">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-shield-half">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M11.998 2l.032 .002l.086 .005a1 1 0 0 1 .342 .104l.105 .062l.097 .076l.016 .015l.247 .21a11 11 0 0 0 7.189 2.537l.342 -.01a1 1 0 0 1 1.005 .717a13 13 0 0 1 -9.208 16.25a1 1 0 0 1 -.502 0a13 13 0 0 1 -9.209 -16.25a1 1 0 0 1 1.005 -.717a11 11 0 0 0 7.791 -2.75l.046 -.036l.053 -.041a1 1 0 0 1 .217 -.112l.075 -.023l.036 -.01a1 1 0 0 1 .12 -.022l.086 -.005zm.002 2.296l-.176 .135a13 13 0 0 1 -7.288 2.572l-.264 .006l-.064 .31a11 11 0 0 0 1.064 7.175l.17 .314a11 11 0 0 0 6.49 5.136l.068 .019z" />
                                                </svg>
                                                Convenient</span>
                                        </p>
                                    </div>
                                </div>

                                <!-- payments steps  -->
                                <div class="payment-step">
                                    <h5 class="payment-step-title">
                                        <span class="st-icon" style="transform: rotate(-45deg);">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send-2">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124" />
                                                <path d="M6.5 12h14.5" />
                                            </svg>
                                        </span>
                                        <span>
                                            Transfer the amount
                                        </span>
                                    </h5>
                                    <p class="payment-step-text">
                                        Transfer your installment from your personal bank account to the bank account of your PMK branch.
                                    </p>
                                </div>
                                <div class="payment-step">
                                    <h5 class="payment-step-title">
                                        <span class="st-icon">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-check">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                                                <path d="M9 15l2 2l4 -4" />
                                            </svg>
                                        </span>
                                        <span>
                                            Share proof of payment
                                        </span>
                                    </h5>
                                    <p class="payment-step-text">
                                        Send a deposit slip, transfer receipt, or transaction confirmation to your branch's Credit Officer, Accounts Officer, or Branch Manager.
                                    </p>
                                </div>

                                <!-- passbook update  -->
                                <div class="payment-step">
                                    <h5 class="payment-step-title">
                                        <span class="st-icon">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-vocabulary">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 19h-6a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h6a2 2 0 0 1 2 2a2 2 0 0 1 2 -2h6a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-6a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2" />
                                                <path d="M12 5v16" />
                                                <path d="M7 7h1" />
                                                <path d="M7 11h1" />
                                                <path d="M16 7h1" />
                                                <path d="M16 11h1" />
                                                <path d="M16 15h1" />
                                            </svg>
                                        </span>
                                        <span>
                                            Passbook update
                                        </span>
                                    </h5>
                                    <p class="payment-step-text">
                                        Visit the branch with your passbook, or hand it to your Credit Officer who will arrange updating and return it to you
                                    </p>
                                </div>


                                <!-- payment confirmation -->
                                <div class="payment-confirmation">
                                    <span class="pc-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-mobile-message">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M11 3h10v8h-3l-4 2v-2h-3l0 -8" />
                                            <path d="M15 16v4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h2" />
                                            <path d="M10 18v.01" />
                                        </svg>
                                    </span>
                                    <p class="pc-text">
                                        Confirmation SMS sent to your registered mobile within 24 hours once payment is posted.
                                    </p>
                                </div>
                            </div>

                            <!-- bikash payment  -->
                            <div class="payment-method bkash">
                                <div class="payment-head">
                                    <!-- <img src="../assets/partners/development partners/bkash.png" alt="icon" class="ph-icon"> -->
                                    <img src="../assets/icons/bkash.svg" alt="icon" class="ph-icon">
                                    <div class="ph-content">
                                        <h5 class="ph-title">bKash installment</h5>
                                        <p class="ph-text">Pay anytime, from anywhere
                                            <span class="payment-badge">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-sparkles">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2m0 -12a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2m-7 12a6 6 0 0 1 6 -6a6 6 0 0 1 -6 -6a6 6 0 0 1 -6 6a6 6 0 0 1 6 6" />
                                                </svg>
                                                Digital</span>
                                        </p>
                                    </div>
                                </div>

                                <!-- bkash process  -->
                                <div class="bkash-process">
                                    <!-- bkash process left -->
                                    <div>
                                        <!-- payment steps  -->
                                        <div class="payment-step">
                                            <h5 class="payment-step-title">
                                                <span class="st-icon">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-qrcode">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" />
                                                        <path d="M7 17l0 .01" />
                                                        <path d="M14 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" />
                                                        <path d="M7 7l0 .01" />
                                                        <path d="M4 15a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" />
                                                        <path d="M17 7l0 .01" />
                                                        <path d="M14 14l3 0" />
                                                        <path d="M20 14l0 .01" />
                                                        <path d="M14 14l0 3" />
                                                        <path d="M14 20l3 0" />
                                                        <path d="M17 17l3 0" />
                                                        <path d="M20 17l0 3" />
                                                    </svg>
                                                </span>
                                                <span>
                                                    Open bKash app
                                                </span>
                                            </h5>
                                            <p class="payment-step-text">
                                                Tab on Microfinance menu option, choose Palli Mongal Karmosuchi (PMK) from the institution list, and enter your 9 or 11 digit Member Code. Then enter your loan and saving deposit amount and tab to next.
                                            </p>
                                        </div>
                                        <div class="payment-step">
                                            <h5 class="payment-step-title">
                                                <span class="st-icon">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lock">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                                                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                                    </svg>
                                                </span>
                                                <span>
                                                    Confirm with PIN
                                                </span>
                                            </h5>
                                            <p class="payment-step-text">
                                                Verify payment details and amount, then complete the transaction using your bKash PIN.
                                            </p>
                                        </div>
                                        <div class="payment-step">
                                            <h5 class="payment-step-title">
                                                <span class="st-icon">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-receipt">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                                                    </svg>
                                                </span>
                                                <span>
                                                    Save digital receipt
                                                </span>
                                            </h5>
                                            <p class="payment-step-text">
                                                Save or download the digital receipt from bKash — it serves as proof of payment for future inquiries.
                                            </p>
                                        </div>
                                    </div>


                                    <!-- bkash process right -->
                                    <div>
                                        <!-- payment step  -->
                                        <div class="payment-step">
                                            <h5 class="payment-step-title">
                                                <span class="st-icon">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-check">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M20.707 6.293a1 1 0 0 1 0 1.414l-10 10a1 1 0 0 1 -1.414 0l-5 -5a1 1 0 0 1 1.414 -1.414l4.293 4.293l9.293 -9.293a1 1 0 0 1 1.414 0" />
                                                    </svg>
                                                </span>
                                                <span>
                                                    Auto-updated by PMK
                                                </span>
                                            </h5>
                                            <p class="payment-step-text">
                                                PMK receives the payment automatically and updates your installment in the system — no manual follow-up needed.
                                            </p>
                                        </div>

                                        <!-- passbook update  -->
                                        <div class="payment-step">
                                            <h5 class="payment-step-title">
                                                <span class="st-icon">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-vocabulary">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 19h-6a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h6a2 2 0 0 1 2 2a2 2 0 0 1 2 -2h6a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-6a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2" />
                                                        <path d="M12 5v16" />
                                                        <path d="M7 7h1" />
                                                        <path d="M7 11h1" />
                                                        <path d="M16 7h1" />
                                                        <path d="M16 11h1" />
                                                        <path d="M16 15h1" />
                                                    </svg>
                                                </span>
                                                <span>
                                                    Passbook update
                                                </span>
                                            </h5>
                                            <p class="payment-step-text">
                                                Visit your PMK branch with your passbook, or hand it to your Credit Officer to arrange updating.
                                            </p>
                                        </div>

                                        <!-- payment confirmation -->
                                        <div class="payment-confirmation">
                                            <span class="pc-icon">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-mobile-message">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M11 3h10v8h-3l-4 2v-2h-3l0 -8" />
                                                    <path d="M15 16v4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h2" />
                                                    <path d="M10 18v.01" />
                                                </svg>
                                            </span>
                                            <p class="pc-text">
                                                Confirmation SMS sent within 24 hours once payment is posted to your loan account.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- loan guide container -->
                    <div id="loan-guide" class="guide-block no-display">
                        <!-- loan guide layout  -->
                        <div class="loan-guide-grid-layout">
                            <!-- loan guide step bu step  -->
                            <aside class="step-by-step-loan-guide">
                                <h4 class="guide-block-title">Step-by-Step Guide</h4>

                                <!-- steps -->
                                <div class="guide-steps-container">
                                    <!-- 1st guide step  -->
                                    <div class="guide-step-block">
                                        <div class="guide-step-number">
                                            <span>1</span>
                                        </div>
                                        <div class="guide-step-content">
                                            <h5 class="guide-step-title">Become PMK member</h5>
                                            <p class="guide-step-text">
                                                Register as a PMK member to become eligible for savings services, loan programs, financial support, and other development opportunities.
                                            </p>
                                            <div class="guide-step-badge">
                                                <span class="gsb-icon">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                                    </svg>
                                                </span>
                                                <span class="gsb-label">Membership</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 2nd guide step  -->
                                    <div class="guide-step-block">
                                        <div class="guide-step-number">
                                            <span>2</span>
                                        </div>
                                        <div class="guide-step-content">
                                            <h5 class="guide-step-title">Required Savings</h5>
                                            <p class="guide-step-text">
                                                Maintain savings equal to five percent of your requested loan amount to meet eligibility requirements before applying successfully.
                                            </p>
                                            <div class="guide-step-badge">
                                                <span class="gsb-icon">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pig-money">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M15 11v.01" />
                                                        <path d="M5.173 8.378a3 3 0 1 1 4.656 -1.377" />
                                                        <path d="M16 4v3.803a6.019 6.019 0 0 1 2.658 3.197h1.341a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-1.342c-.336 .95 -.907 1.8 -1.658 2.473v2.027a1.5 1.5 0 0 1 -3 0v-.583a6.04 6.04 0 0 1 -1 .083h-4a6.04 6.04 0 0 1 -1 -.083v.583a1.5 1.5 0 0 1 -3 0v-2l0 -.027a6 6 0 0 1 4 -10.473h2.5l4.5 -3" />
                                                    </svg>
                                                </span>
                                                <span class="gsb-label">5% savings</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 3rd guide step  -->
                                    <div class="guide-step-block">
                                        <div class="guide-step-number">
                                            <span>3</span>
                                        </div>
                                        <div class="guide-step-content">
                                            <h5 class="guide-step-title">Prepare Documents</h5>
                                            <p class="guide-step-text">
                                                Complete the loan application form and prepare all required documents according to the loan ceiling to ensure a smooth submission process.
                                            </p>
                                            <div class="guide-step-badge">
                                                <span class="gsb-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-text">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                                                        <path d="M9 9l1 0" />
                                                        <path d="M9 13l6 0" />
                                                        <path d="M9 17l6 0" />
                                                    </svg>
                                                </span>
                                                <span class="gsb-label">Documents ready</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 4th guide step  -->
                                    <div class="guide-step-block">
                                        <div class="guide-step-number">
                                            <span>4</span>
                                        </div>
                                        <div class="guide-step-content">
                                            <h5 class="guide-step-title">Submit loan form</h5>
                                            <p class="guide-step-text">
                                                Submit your completed loan application and supporting documents to begin the official review and assessment process
                                            </p>
                                            <div class="guide-step-badge">
                                                <span class="gsb-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                        <path d="M9 12l2 2l4 -4" />
                                                    </svg>
                                                </span>
                                                <span class="gsb-label">Application submitted</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 5th guide step  -->
                                    <div class="guide-step-block">
                                        <div class="guide-step-number">
                                            <span>5</span>
                                        </div>
                                        <div class="guide-step-content">
                                            <h5 class="guide-step-title">Verification Visit</h5>
                                            <p class="guide-step-text">
                                                As per the loan ceiling, the Director, DD, AD, PM, DPM, APM or BM, and Credit Officer may visit your home or business to verify information and assess your repayment capacity.
                                            </p>
                                            <div class="guide-step-badge">
                                                <span class="gsb-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home-check">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2" />
                                                        <path d="M19 13.488v-1.488h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h4.525" />
                                                        <path d="M15 19l2 2l4 -4" />
                                                    </svg>
                                                </span>
                                                <span class="gsb-label">Field verification</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 6th guide step  -->
                                    <div class="guide-step-block">
                                        <div class="guide-step-number">
                                            <span>6</span>
                                        </div>
                                        <div class="guide-step-content">
                                            <h5 class="guide-step-title">Loan approval</h5>
                                            <p class="guide-step-text">
                                                Your application is reviewed and approved by the organization’s authority, including the Director, DD, AD, PM, DPM, APM or BM in accordance with the loan ceiling.
                                            </p>
                                            <div class="guide-step-badge">
                                                <span class="gsb-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-check">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                                        <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                                                        <path d="M9 14l2 2l4 -4" />
                                                    </svg>
                                                </span>
                                                <span class="gsb-label">approval</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 7th guide step  -->
                                    <div class="guide-step-block">
                                        <div class="guide-step-number">
                                            <span>7</span>
                                        </div>
                                        <div class="guide-step-content">
                                            <h5 class="guide-step-title">Loan Disbursement</h5>
                                            <p class="guide-step-text">
                                                Once approved, loan funds are released through the designated payment method for your intended purpose.
                                            </p>
                                            <div class="guide-step-badge">
                                                <span class="gsb-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin-taka">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M8 8l.553 -.276a1 1 0 0 1 1.447 .894v6.382a2 2 0 0 0 2 2h.5a2.5 2.5 0 0 0 2.5 -2.5v-.5h-1" />
                                                        <path d="M8 11h7" />
                                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                    </svg>
                                                </span>
                                                <span class="gsb-label">Funds released</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 8th guide step  -->
                                    <div class="guide-step-block">
                                        <div class="guide-step-number">
                                            <span>8</span>
                                        </div>
                                        <div class="guide-step-content">
                                            <h5 class="guide-step-title">Repay & Grow</h5>
                                            <p class="guide-step-text">
                                                Make timely repayments according to schedule to build trust and qualify for larger future loan opportunities.
                                            </p>
                                            <div class="guide-step-badge">
                                                <span class="gsb-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trending-up">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M3 17l6 -6l4 4l8 -8" />
                                                        <path d="M14 7l7 0l0 7" />
                                                    </svg>
                                                </span>
                                                <span class="gsb-label">Credit growth</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>

                            <!-- loan guide information  -->
                            <aside class="loan-guide-info">
                                <!-- required documents  -->
                                <div class="required-documents">
                                    <h4 class="guide-block-title">Documents Required</h4>

                                    <!-- document  -->
                                    <div class="document-container">
                                        <!-- nid  -->
                                        <div class="document">
                                            <figure class="document-image">
                                                <img src="../assets/icons/id-card.gif" alt="nid card">
                                            </figure>
                                            <div class="document-content">
                                                <h5 class="document-step-title">National ID Card (NID)</h5>
                                                <p class="document-step-text">
                                                    Attach clear front-back NID copies of member, surety, and grantor with loan form.

                                                </p>
                                            </div>
                                        </div>

                                        <!-- photo  -->
                                        <div class="document">
                                            <figure class="document-image">
                                                <img src="../assets/icons/picture.gif" alt="nid card">
                                            </figure>
                                            <div class="document-content">
                                                <h5 class="document-step-title">Passport-size photographs</h5>
                                                <p class="document-step-text">
                                                    Attach 3 passport-size joint photos of members and surety, plus grantor copy with form.

                                                </p>
                                            </div>
                                        </div>

                                        <!-- check  -->
                                        <div class="document">
                                            <figure class="document-image">
                                                <img src="../assets/icons/cheque.gif" alt="cheques card">
                                            </figure>
                                            <div class="document-content">
                                                <h5 class="document-step-title">Bank cheque Page</h5>
                                                <p class="document-step-text">
                                                    Attach 3 pages of members’ cheques and 2 pages of surety person’s cheques.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- stamp  -->
                                        <div class="document">
                                            <figure class="document-image">
                                                <img src="../assets/icons/stamp.gif" alt="stamp">
                                            </figure>
                                            <div class="document-content">
                                                <h5 class="document-step-title">Stamp Paper</h5>
                                                <p class="document-step-text">
                                                    Under 1 lakh attach 2×75 Tk stamps; 1 lakh+ attach 3×100 Tk stamps.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- proof of residence  -->
                                        <div class="document">
                                            <figure class="document-image">
                                                <img src="../assets/icons/proof-of-concept.gif" alt="document">
                                            </figure>
                                            <div class="document-content">
                                                <h5 class="document-step-title">Proof of residence</h5>
                                                <p class="document-step-text">
                                                    Utility bill, word member letter, or community leader confirmation of address.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- photo  -->
                                        <div class="document">
                                            <figure class="document-image">
                                                <img src="../assets/icons/file-settings.gif" alt="document">
                                            </figure>
                                            <div class="document-content">
                                                <h5 class="document-step-title">Other Documents</h5>
                                                <p class="document-step-text">
                                                    Member must also attach any additional documents required by the loan product and applicable rules.
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- faq section  -->
                                <div class="faq-section">
                                    <h4 class="guide-block-title">Frequently Asked Questions</h4>

                                    <!-- faq container  -->
                                    <div class="accordion" id="loan-guide-faq">
                                        <!-- 1st accordion item  -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#loan-question-one" aria-expanded="true" aria-controls="loan-question-one">
                                                    Can I apply for more than one loan at the same time?
                                                </button>
                                            </h2>
                                            <div id="loan-question-one" class="accordion-collapse collapse show" data-bs-parent="#loan-guide-faq">
                                                <div class="accordion-body">
                                                    No. Members can only have one active loan at a time. A new loan application can be submitted after the current loan is fully repaid.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 2nd accordion item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loan-question-two" aria-expanded="false" aria-controls="loan-question-two">
                                                    How much can I borrow?
                                                </button>
                                            </h2>
                                            <div id="loan-question-two" class="accordion-collapse collapse" data-bs-parent="#loan-guide-faq">
                                                <div class="accordion-body">
                                                    The loan amount depends on your eligibility, income, repayment capacity, and the type of loan requested.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 3rd accordion item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loan-question-three" aria-expanded="false" aria-controls="loan-question-three">
                                                    Can I get a second loan while repaying the first?
                                                </button>
                                            </h2>
                                            <div id="loan-question-three" class="accordion-collapse collapse" data-bs-parent="#loan-guide-faq">
                                                <div class="accordion-body">
                                                    No. Members are not eligible for a second loan until the existing loan has been fully repaid and closed.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 4th accordion item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loan-question-four" aria-expanded="false" aria-controls="loan-question-four">
                                                    Are there any hidden charges?
                                                </button>
                                            </h2>
                                            <div id="loan-question-four" class="accordion-collapse collapse" data-bs-parent="#loan-guide-faq">
                                                <div class="accordion-body">
                                                    No. All fees, charges, and applicable costs are clearly disclosed before loan approval. No hidden charges apply.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 5th accordion item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loan-question-five" aria-expanded="false" aria-controls="loan-question-five">
                                                    What happens if I miss a loan payment?
                                                </button>
                                            </h2>
                                            <div id="loan-question-five" class="accordion-collapse collapse" data-bs-parent="#loan-guide-faq">
                                                <div class="accordion-body">
                                                    No fees or penalties apply. Members can adjust the missed payment by settling it with the next scheduled repayment.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: mfi saving program  -->
        <section id="mfi-saving-program">
            <div class="container-width">
                <hgroup class="mfi-section-header">
                    <span class="mfi-header-label">Savings Program</span>
                    <h3 class="mfi-header-title">Build the habit of saving —
                        <br>
                        and watch it grow
                    </h3>
                    <p class="mfi-header-description">
                        Safe and simple savings opportunities designed to help individuals grow financial resilience, achieve goals, and secure a better future.
                    </p>
                </hgroup>

                <!-- saving program  layout  -->
                <div class="saving-program-layout">
                    <!-- saving program  COM-->
                    <div class="saving-program saving-active-container">
                        <figure class="sp-icon">
                            <img src="../assets/icons/piggy_bank.png" alt="piggy bank">
                        </figure>
                        <h4 class="saving-program-title">Compulsory Savings (COM)</h4>
                        <p class="saving-program-description">
                            Build a stronger future with PMK Compulsory Savings. Save from just 50 taka weekly, develop consistent saving habits, improve loan eligibility, and create financial security for future goals and unexpected challenges.
                        </p>
                        <div class="saving-program-info-container">
                            <div class="saving-program-info">
                                <span class="spi-label">Minimum deposit</span>
                                <span class="spi-value">৳50/week</span>
                            </div>
                            <div class="saving-program-info">
                                <span class="spi-label">Interest rate </span>
                                <span class="spi-value">6% P.SA</span>
                            </div>
                            <div class="saving-program-info">
                                <span class="spi-label">Withdrawal</span>
                                <span class="spi-value">After loan closure</span>
                            </div>
                        </div>

                        <button onclick="slideRuleContainer('compulsory-saving-rules')" type="button" class="visit-saving-rule-button">See Saving Rule</button>
                    </div>

                    <!-- saving program  VOL-->
                    <div class="saving-program">
                        <figure class="sp-icon">
                            <img src="../assets/icons/money.png" alt="money icon coin">
                        </figure>
                        <h4 class="saving-program-title">Voluntary Savings (VOL)</h4>
                        <p class="saving-program-description">
                            PMK Voluntary Savings lets members save 50 taka or more at their convenience. Grow your savings steadily, build financial security, and stay prepared for future opportunities and unexpected needs.
                        </p>
                        <div class="saving-program-info-container">
                            <div class="saving-program-info">
                                <span class="spi-label">Minimum deposit</span>
                                <span class="spi-value">৳50/week</span>
                            </div>
                            <div class="saving-program-info">
                                <span class="spi-label">Interest rate </span>
                                <span class="spi-value">6% P.SA</span>
                            </div>
                            <div class="saving-program-info">
                                <span class="spi-label">Withdrawal</span>
                                <span class="spi-value">Anytime (48hr notice)</span>
                            </div>
                        </div>

                        <button onclick="slideRuleContainer('voluntary-saving-rules')" type="button" class="visit-saving-rule-button">See Saving Rule</button>
                    </div>

                    <!-- saving program  MSP-->
                    <div class="saving-program">
                        <figure class="sp-icon">
                            <img src="../assets/icons/time_increse_money.png" alt="money icon coin">
                        </figure>
                        <h4 class="saving-program-title">Monthly Savings Project (MSP)</h4>
                        <p class="saving-program-description">
                            Turn monthly deposits into meaningful savings with PMK MSP. Save consistently, grow your funds over time, and prepare confidently for education, business opportunities, family needs, and future financial goals.
                        </p>
                        <div class="saving-program-info-container">
                            <div class="saving-program-info">
                                <span class="spi-label">Monthly deposit</span>
                                <span class="spi-value">৳100–৳5,000</span>
                            </div>
                            <div class="saving-program-info">
                                <span class="spi-label">Interest rate </span>
                                <span class="spi-value">6%-12%</span>
                            </div>
                            <div class="saving-program-info">
                                <span class="spi-label">Tenure</span>
                                <span class="spi-value">5/10 years</span>
                            </div>
                        </div>

                        <button onclick="slideRuleContainer('msp-saving-rules')" type="button" class="visit-saving-rule-button">See Saving Rule</button>
                    </div>

                    <!-- saving program  FBS-->
                    <div class="saving-program">
                        <figure class="sp-icon">
                            <img src="../assets/icons/safe_box.png" alt="money icon coin">
                        </figure>
                        <h4 class="saving-program-title">fixed beneficiary scheme (FBS)</h4>
                        <p class="saving-program-description">
                            A secure savings program encouraging members to deposit fixed amounts regularly, promoting financial discipline, community welfare, and long-term financial stability with assured benefits and structured, FDR-like savings growth support.
                        </p>
                        <div class="saving-program-info-container">
                            <div class="saving-program-info">
                                <span class="spi-label">Minimum Amount</span>
                                <span class="spi-value">৳50,000</span>
                            </div>
                            <div class="saving-program-info">
                                <span class="spi-label">Interest rate </span>
                                <span class="spi-value">11.04% (MAX)</span>
                            </div>
                            <div class="saving-program-info">
                                <span class="spi-label">Tenure</span>
                                <span class="spi-value">1/3 years</span>
                            </div>
                        </div>

                        <button onclick="slideRuleContainer('fbs-saving-rules')" type="button" class="visit-saving-rule-button">See Saving Rule</button>
                    </div>
                </div>

                <!-- rules container  -->
                <div class="saving-rules-parent-container">
                    <!-- compulsory saving rules and benefit  -->
                    <div id="compulsory-saving-rules" class="saving-program-rules-container rule-container-active">
                        <!-- saving rules  -->
                        <aside class="saving-program-rules">
                            <h4 class="saving-rules-title">Compulsory Savings Rules</h4>

                            <!-- saving rules container -->
                            <div class="saving-rules-cards">
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Flexible Savings Amount
                                        </h5>
                                        <p class="src-content-text">
                                            Members can start saving from a minimum of 50 TK and contribute any amount based on their capacity and preference.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Flexible Compulsory Savings Period
                                        </h5>
                                        <p class="src-content-text">
                                            Members can continue saving for any duration based on their preference, with no fixed time limit.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Pre-Loan Compulsory Savings Requirement
                                        </h5>
                                        <p class="src-content-text">
                                            Before applying for a loan, members must maintain compulsory savings equal to 5% of the loan amount for the first application and 10% for the second application, fully deposited in their account.
                                        </p>
                                    </div>
                                </div>
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Loan Closure via Savings Adjustment
                                        </h5>
                                        <p class="src-content-text">
                                            Members can close their loan by adjusting and utilizing their total savings balance to fully settle the outstanding loan amount.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Compulsory Savings cannot be withdrawn during loan tenure
                                        </h5>
                                        <p class="src-content-text">
                                            Compulsory savings act as a security buffer during loan Full withdrawal allowed after loan repayment; member may withdraw remaining after keeping 10 TK.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Account is non-transferable
                                        </h5>
                                        <p class="src-content-text">
                                            Savings accounts are personal and non-transferable; only the nominee may withdraw funds after the member’s death, following proper verification and account closure procedures.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <!-- saving benefits  -->
                        <aside class=" saving-program-benefits">
                            <h4 class="saving-rules-title">Savings Benefits</h4>

                            <!-- saving rules container -->
                            <div class="saving-rules-cards">
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Savings Interest Rate
                                        </h5>
                                        <p class="src-content-text">
                                            Members’ savings earn 6% interest rate, credited periodically as per organizational policy and applied to eligible savings accounts accordingly.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Savings Interest Provision & Payment
                                        </h5>
                                        <p class="src-content-text">
                                            Organization calculates monthly interest and keeps it as provision, then automatically credits 6% interest to members’ accounts every six months.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Additional Savings Benefits
                                        </h5>
                                        <p class="src-content-text">
                                            Members enjoy flexible deposits, easy withdrawal options, transparent balance tracking, and eligibility advantages for future financial services and organizational support programs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <!-- Voluntary  saving rules and benefit  -->
                    <div id="voluntary-saving-rules" class="saving-program-rules-container no-display">
                        <!-- saving rules  -->
                        <aside class="saving-program-rules">
                            <h4 class="saving-rules-title">Voluntary Savings Rules</h4>

                            <!-- saving rules container -->
                            <div class="saving-rules-cards">
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Flexible Savings Amount
                                        </h5>
                                        <p class="src-content-text">
                                            Members can start saving from a minimum of 50 TK and contribute any amount based on their capacity and preference.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Flexible Voluntary Savings Period
                                        </h5>
                                        <p class="src-content-text">
                                            Members can continue saving for any duration based on their preference, with no fixed time limit.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Loan Closure via Savings Adjustment
                                        </h5>
                                        <p class="src-content-text">
                                            Members can close their loan by adjusting and utilizing their total savings balance to fully settle the outstanding loan amount.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Voluntary Savings Withdrawal & Loan Repayment
                                        </h5>
                                        <p class="src-content-text">
                                            Members may withdraw voluntary savings anytime, fully or partially, and may also use savings to repay outstanding loan balances. However, withdrawal requires 48 hours’ prior notice to PMK during office hours.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <!-- saving benefits  -->
                        <aside class=" saving-program-benefits">
                            <h4 class="saving-rules-title">Savings Benefits</h4>

                            <!-- saving rules container -->
                            <div class="saving-rules-cards">
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Savings Interest Rate
                                        </h5>
                                        <p class="src-content-text">
                                            Members’ savings earn 6% interest rate, credited periodically as per organizational policy and applied to eligible savings accounts accordingly.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Savings Interest Provision & Payment
                                        </h5>
                                        <p class="src-content-text">
                                            Organization calculates monthly interest and keeps it as provision, then automatically credits 6% interest to members’ accounts every six months.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Savings Advantage
                                        </h5>
                                        <p class="src-content-text">
                                            Encourages disciplined saving habits, builds financial resilience, and provides members quick access to their own funds when needed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <!-- msp saving rules and benefit  -->
                    <div id="msp-saving-rules" class="saving-program-rules-container no-display">
                        <!-- saving rules  -->
                        <aside class="saving-program-rules">
                            <h4 class="saving-rules-title">MSP Rules</h4>

                            <!-- saving rules container -->
                            <div class="saving-rules-cards">
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Flexible Savings Plan
                                        </h5>
                                        <p class="src-content-text">
                                            Members can save flexible amounts from 100, 200, 300, 500 up to maximum 5000 TK according to their preference as per member choice.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Flexible Long-Term Savings Plan
                                        </h5>
                                        <p class="src-content-text">
                                            Members can save flexible amounts from 100 to 5000 TK over 5 or 10 years, depending on their preferred saving duration choice.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            MSP Inactivity Policy for Non-Payment
                                        </h5>
                                        <p class="src-content-text">
                                            If a member does not deposit MSP for 2 consecutive months, the account will be marked inactive and MSP deposits will no longer be accepted. The savings will be transferred to general savings and will earn 6% interest.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            MSP Inactivity Due to Irregular Payments
                                        </h5>
                                        <p class="src-content-text">
                                            If a member fails to deposit MSP for 3 consecutive months, the account will be marked inactive and further MSP deposits will not be accepted. The savings will be transferred to general savings and will earn 6% interest.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Withdrawal Rules
                                        </h5>
                                        <p class="src-content-text">
                                            Members may withdraw their savings at any time, either before the tenure is completed or after it ends. However, any withdrawal request must be communicated to PMK at least 48 hours in advance during official office hours.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            MSP Early Closure Interest Rule
                                        </h5>
                                        <p class="src-content-text">
                                            Members closing MSP before completing 1 year will not receive any interest on deposited savings amount as per policy terms and conditions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <!-- saving benefits  -->
                        <aside class=" saving-program-benefits">
                            <h4 class="saving-rules-title">Savings Benefits</h4>

                            <!-- saving rules container -->
                            <div class="saving-rules-cards">
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            MSP Savings Interest Rate
                                        </h5>
                                        <p class="src-content-text">
                                            Members can earn interest on MSP deposits at a rate ranging from 7% to 12%, depending on the applicable terms and conditions of the savings plan.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            MSP Interest & Maturity Benefits (1–5 Years)
                                        </h5>
                                        <p class="src-content-text">
                                            If a member closes MSP after 1 year and 1 month but before 5 years, they will receive 6% interest. Upon completing 5 years, the member will receive the full maturity benefit.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            MSP Interest & Maturity Benefits (5–10 Years)
                                        </h5>
                                        <p class="src-content-text">
                                            If a member closes MSP after 5 years and 1 month but before 10 years, they will receive 7% interest. Upon completing 10 years, the member will receive the maturity benefit along with 12% interest.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            MSP Maturity Benefits
                                        </h5>
                                        <p class="src-content-text">
                                            Members will receive a maturity benefit upon completing 5 years of MSP. An additional maturity benefit will also be provided upon completing 10 years.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <!-- fbs  saving rules and benefit  -->
                    <div id="fbs-saving-rules" class="saving-program-rules-container no-display">
                        <!-- saving rules  -->
                        <aside class="saving-program-rules">
                            <h4 class="saving-rules-title">FBS Rules</h4>

                            <!-- saving rules container -->
                            <div class="saving-rules-cards">
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Flexible Fixed Savings with Full Security
                                        </h5>
                                        <p class="src-content-text">
                                            Members can fix savings starting from 50,000 TK and above. Any amount may be deposited according to the member’s preference, with full safety and security.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            FBS Term Options
                                        </h5>
                                        <p class="src-content-text">
                                            Members can fix their deposit amount in FBS for a term of 1 year or 3 years, according to their financial goals.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Flexible Interest Payment Options
                                        </h5>
                                        <p class="src-content-text">
                                            Members may receive interest monthly, every three months, or at the end of the deposit term, according to their preference.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Bank Account Interest Eligibility
                                        </h5>
                                        <p class="src-content-text">
                                            Members can receive interest only through bank accounts, with payout options depending on selected account terms and banking policies.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Withdrawals
                                        </h5>
                                        <p class="src-content-text">
                                            Members may withdraw a fixed amount anytime, provided they give at least 48 hours’ prior notice before processing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <!-- saving benefits  -->
                        <aside class=" saving-program-benefits">
                            <h4 class="saving-rules-title">Savings Benefits</h4>

                            <!-- saving rules container -->
                            <div class="saving-rules-cards">
                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            FBS Interest Rate
                                        </h5>
                                        <p class="src-content-text">
                                            Members can earn up to a maximum of 11.04% interest on their fixed deposit amount, subject to account terms and conditions.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            Early FBS Closure Interest Rate
                                        </h5>
                                        <p class="src-content-text">
                                            Members closing FBS before maturity will receive interest at a reduced rate of 6% on the deposited amount.
                                        </p>
                                    </div>
                                </div>

                                <!-- rule card  -->
                                <div class="saving-rule-card">
                                    <div class="src-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
                                            <path d="M16 12l-4 -4" />
                                            <path d="M16 12h-8" />
                                            <path d="M12 16l4 -4" />
                                        </svg>
                                    </div>
                                    <div class="src-content">
                                        <h5 class="src-content-head">
                                            FBS Maturity Interest Rate
                                        </h5>
                                        <p class="src-content-text">
                                            Upon maturity, members will receive interest at a rate of 11.04% (max) on the deposited amount as per account terms.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>

                <!-- saving auth strip  -->
                <div class="saving-auth-strip">
                    <!-- strip item  -->
                    <div class="strip-item">
                        <div class="st-icon">🔐</div>
                        <h6 class="st-label">Secure Deposits</h6>
                        <p class="st-text">
                            Your savings are protected through regulated and audited account management under Bangladesh financial law system
                        </p>
                    </div>

                    <!-- strip item  -->
                    <div class="strip-item">
                        <div class="st-icon">📱</div>
                        <h6 class="st-label">Mobile Access</h6>
                        <p class="st-text">
                            Make deposits via bKash or bank transfer with instant SMS confirmations received immediately always
                        </p>
                    </div>

                    <!-- strip item  -->
                    <div class="strip-item">
                        <div class="st-icon">📒</div>
                        <h6 class="st-label">Passbook System</h6>
                        <p class="st-text">
                            Every transaction is recorded in your passbook providing a permanent transparent financial record always
                        </p>
                    </div>

                    <!-- strip item  -->
                    <div class="strip-item">
                        <div class="st-icon">💸</div>
                        <h6 class="st-label">Quarterly Interest</h6>
                        <p class="st-text">
                            Interest is calculated monthly and automatically credited to your account every six months consistently
                        </p>
                    </div>

                    <!-- strip item  -->
                    <div class="strip-item">
                        <div class="st-icon">🙋‍♀️</div>
                        <h6 class="st-label">Household Stability for Women</h6>
                        <p class="st-text">
                            Women-led households benefit from disciplined saving habits supporting essential daily needs consistently always
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- section:: mfi-activity  -->
        <section id="mfi-activity">
            <div class="container-width">
                <!-- activity impact layout  -->
                <div class="mfi-activity-impact-layout">
                    <aside class="activity-module">
                        <hgroup class="mfi-section-header">
                            <span class="mfi-header-label">MFI Activities</span>
                            <h3 class="mfi-header-title">Inside PMK MFI’s
                                <br>
                                Field-Level Activities
                            </h3>
                            <p class="mfi-header-description">
                                PMK MFI delivers microfinance services, supports savings and loans, conducts field visits, and empowers underserved communities through inclusive financial development and guidance.
                            </p>
                        </hgroup>


                        <!-- key Field activities  -->
                        <div class="mfi-key-field-activities">
                            <h5 class="key-field-activity-title">Our Key Field Activities</h5>

                            <!-- activities  -->
                            <div class="activity-pillars">
                                <!-- item  -->
                                <div class="activity-pillar">
                                    <span class="ap-num">01</span>
                                    <p class="ap-text">
                                        Providing Microfinance & Savings Services
                                    </p>
                                    <span class="ap-icon">💰</span>
                                </div>

                                <!-- item  -->
                                <div class="activity-pillar">
                                    <span class="ap-num">02</span>
                                    <p class="ap-text">
                                        Supporting Livelihood Development
                                    </p>
                                    <span class="ap-icon">🌾</span>
                                </div>

                                <!-- item  -->
                                <div class="activity-pillar">
                                    <span class="ap-num">03</span>
                                    <p class="ap-text">
                                        Conducting Financial Literacy Training
                                    </p>
                                    <span class="ap-icon">🎓</span>
                                </div>

                                <!-- item  -->
                                <div class="activity-pillar">
                                    <span class="ap-num">04</span>
                                    <p class="ap-text">
                                        Promoting Health & Social Awareness
                                    </p>
                                    <span class="ap-icon">👩‍⚕️</span>
                                </div>

                                <!-- item  -->
                                <div class="activity-pillar">
                                    <span class="ap-num">05</span>
                                    <p class="ap-text">
                                        Empowering Women Through SHGs
                                    </p>
                                    <span class="ap-icon">👩‍👩‍👧</span>
                                </div>

                                <!-- item  -->
                                <div class="activity-pillar">
                                    <span class="ap-num">06</span>
                                    <p class="ap-text">
                                        Monitoring Progress & Measuring Impact
                                    </p>
                                    <span class="ap-icon">📊</span>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <!-- activity impact  -->
                    <aside id="activity-impact-board">
                        <div class="mfi-impact-field two-cell">
                            <h3 class="mfi-impact-head">
                                <span id="impact-year">38</span>
                                Years
                            </h3>
                            <p class="impact-label">
                                of community microfinance work across Bangladesh
                            </p>
                        </div>
                        <div class="mfi-impact-field">
                            <h3 class="mfi-impact-head">
                                ৳
                                <span id="impact-loan">40,000</span>
                                M
                            </h3>
                            <p class="impact-label">
                                Loan Disbursed across Bangladesh
                            </p>
                        </div>
                        <div class="mfi-impact-field">
                            <h3 class="mfi-impact-head">
                                <span id="impact-borrower">313,219</span>
                            </h3>
                            <p class="impact-label">
                                Active Borrower across Bangladesh
                            </p>
                        </div>
                        <div class="mfi-impact-field">
                            <h3 class="mfi-impact-head">
                                <span id="impact-district">36</span>
                            </h3>
                            <p class="impact-label">
                                Active districts with field offices
                            </p>
                        </div>
                        <div class="mfi-impact-field">
                            <h3 class="mfi-impact-head">
                                <span id="impact-village">46,003</span>
                            </h3>
                            <p class="impact-label">
                                Villages directly served by PMK officers
                            </p>
                        </div>
                    </aside>
                </div>

                <!-- activity slider  -->
                <div class="activity-slider-container">
                    <h4 class="asc-title">Impact Stories from the Field</h4>

                    <div class="activity-slider swiper">
                        <!-- Additional required wrapper -->
                        <div class="activity-slider-wrapper swiper-wrapper">
                            <!-- 1st Slides -->
                            <div class="swiper-slide activity-microfinance">
                                <div class="activity-cards">
                                    <figure class="activity-card-image">
                                        <img src="../assets/images/mfi_1.png" class="ac-image" alt="mfi activity image">

                                        <!-- overlay logo -->
                                        <div class="overlay-logo">
                                            <img src="../assets/logo/main-logo.png" class="over-img" alt="pmk logo">
                                        </div>

                                        <!-- overlay wave  -->
                                        <div class="overlay-wave"></div>
                                    </figure>
                                    <div class="activity-content-container">
                                        <div class="activity-content">
                                            <h4 class="content-title">
                                                Empowering Communities Through Microfinance & Savings
                                            </h4>

                                            <p class="content-text">
                                                Our work is focused on bringing real financial solutions directly to the grassroots level. Through microfinance and savings services, we have worked closely with communities to create meaningful and measurable impact in their daily lives.
                                            </p>
                                            <p class="content-text">
                                                This is not just a service—it is field-based development work that has changed lives.
                                            </p>

                                            <ul class="content-lists">
                                                <h5 class="content-sub-title">What we have done in the field:</h5>

                                                <li class="content-sub-text">
                                                    Delivered microloans to support small businesses, farming, and self-employment
                                                </li>
                                                <li class="content-sub-text">
                                                    Helped rural families increase income through productive investment
                                                </li>
                                                <li class="content-sub-text">
                                                    Built a safe system for savings to improve financial security
                                                </li>
                                                <li class="content-sub-text">
                                                    Supported households in managing emergencies without falling into debt traps
                                                </li>
                                                <li class="content-sub-text">
                                                    Promoted financial discipline through continuous field follow-up
                                                </li>
                                            </ul>

                                            <!-- ground impact  -->
                                            <div class="ground-impact">
                                                <h5 class="content-sub-title">Our impact on the ground:</h5>
                                                <p class="content-text">
                                                    Through consistent field engagement, we have created real change in people’s lives. Families are now able to generate income, save regularly, and improve their living conditions. Many have moved from financial vulnerability to stability and confidence.
                                                </p>
                                                <p class="content-text">
                                                    This work reflects our core achievement—we have not only provided services, but we have created impact at the community level by empowering people to become financially independent and self-reliant.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2nd Slides -->
                            <div class="swiper-slide activity-livelihood">
                                <div class="activity-cards">
                                    <figure class="activity-card-image">
                                        <img src="../assets/images/mfi_2.jpg" class="ac-image" alt="mfi activity image">

                                        <!-- overlay logo -->
                                        <div class="overlay-logo">
                                            <img src="../assets/logo/main-logo.png" class="over-img" alt="pmk logo">
                                        </div>

                                        <!-- overlay wave  -->
                                        <div class="overlay-wave"></div>
                                    </figure>
                                    <div class="activity-content-container">
                                        <div class="activity-content">
                                            <h4 class="content-title">
                                                Strengthening Rural Livelihoods Through Financial Support
                                            </h4>

                                            <p class="content-text">
                                                We is committed to strengthening the economic foundation of rural and low-income communities by supporting sustainable livelihood development through financial inclusion.
                                            </p>
                                            <p class="content-text">
                                                Our focus is to ensure that people not only receive financial services, but also use them to build stable and long-term income sources.
                                            </p>

                                            <ul class="content-lists">
                                                <h5 class="content-sub-title">What we have done in the field:</h5>

                                                <li class="content-sub-text">
                                                    Provide microloans for agriculture, livestock, small trade, and rural enterprises
                                                </li>
                                                <li class="content-sub-text">
                                                    Support individuals in starting new income-generating activities
                                                </li>
                                                <li class="content-sub-text">
                                                    Help existing small businesses expand and increase productivity
                                                </li>
                                                <li class="content-sub-text">
                                                    Encourage savings to build financial security for households
                                                </li>
                                                <li class="content-sub-text">
                                                    Offer continuous field-level guidance on effective loan utilization
                                                </li>
                                            </ul>

                                            <!-- ground impact  -->
                                            <div class="ground-impact">
                                                <h5 class="content-sub-title">Our impact on the ground:</h5>
                                                <p class="content-text">
                                                    Through consistent engagement with communities, we have helped families create reliable sources of income and reduce financial uncertainty. Many households have moved from irregular earnings to more stable livelihoods.
                                                </p>
                                                <p class="content-text">
                                                    This work has contributed to improved living standards, stronger rural economies, and greater self-reliance among community members.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3rd Slides -->
                            <div class="swiper-slide activity-financial-raining">
                                <div class="activity-cards">
                                    <figure class="activity-card-image">
                                        <img src="../assets/images/mfi_3.png" class="ac-image" alt="mfi activity image">

                                        <!-- overlay logo -->
                                        <div class="overlay-logo">
                                            <img src="../assets/logo/main-logo.png" class="over-img" alt="pmk logo">
                                        </div>

                                        <!-- overlay wave  -->
                                        <div class="overlay-wave"></div>
                                    </figure>
                                    <div class="activity-content-container">
                                        <div class="activity-content">
                                            <h4 class="content-title">
                                                Strengthening Financial Skills for Sustainable Growth
                                            </h4>

                                            <p class="content-text">
                                                Our work is committed to strengthening community capacity by delivering financial literacy training and skill-building programs at the grassroots level. The aim is to empower clients not only with access to financial services, but also with the knowledge and confidence to use them effectively.
                                            </p>

                                            <ul class="content-lists">
                                                <h5 class="content-sub-title">What we have done in the field:</h5>

                                                <li class="content-sub-text">
                                                    Conduct financial literacy sessions on savings, budgeting, and credit management
                                                </li>
                                                <li class="content-sub-text">
                                                    Train clients on responsible borrowing and productive loan use
                                                </li>
                                                <li class="content-sub-text">
                                                    Strengthen household financial planning and cash-flow management skills
                                                </li>
                                                <li class="content-sub-text">
                                                    Build awareness on risk management and avoiding over-indebtedness
                                                </li>
                                                <li class="content-sub-text">
                                                    Support capacity building for small entrepreneurs and rural households
                                                </li>
                                            </ul>

                                            <!-- ground impact  -->
                                            <div class="ground-impact">
                                                <h5 class="content-sub-title">Our impact on the ground:</h5>
                                                <p class="content-text">
                                                    Through continuous training and field engagement, PMK has improved financial understanding among clients, enabling better decision-making and stronger financial discipline. Communities are now more capable of managing resources, growing small enterprises, and maintaining stable household economies.
                                                </p>
                                                <p class="content-text">
                                                    This capacity-building approach has resulted in improved repayment behavior, increased savings culture, and long-term financial resilience at the community level.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4th Slides -->
                            <div class="swiper-slide activity-microfinance">
                                <div class="activity-cards">
                                    <figure class="activity-card-image">
                                        <img src="../assets/slider/medical_team_pmk.jpg" class="ac-image" alt="mfi activity image">

                                        <!-- overlay logo -->
                                        <div class="overlay-logo">
                                            <img src="../assets/logo/main-logo.png" class="over-img" alt="pmk logo">
                                        </div>

                                        <!-- overlay wave  -->
                                        <div class="overlay-wave"></div>
                                    </figure>
                                    <div class="activity-content-container">
                                        <div class="activity-content">
                                            <h4 class="content-title">
                                                Community Health & Social Development Awareness
                                            </h4>

                                            <p class="content-text">
                                                We extends our development work beyond financial services by actively promoting health and social awareness at the grassroots level. The objective is to improve overall well-being and create more informed, resilient communities.
                                            </p>

                                            <ul class="content-lists">
                                                <h5 class="content-sub-title">What we have done in the field:</h5>

                                                <li class="content-sub-text">
                                                    Conduct awareness sessions on basic health, hygiene, and sanitation
                                                </li>
                                                <li class="content-sub-text">
                                                    Educate families on preventive healthcare practices and nutrition
                                                </li>
                                                <li class="content-sub-text">
                                                    Promote safe drinking water and clean living environments
                                                </li>
                                                <li class="content-sub-text">
                                                    Raise awareness on social issues such as child welfare and gender equality
                                                </li>
                                                <li class="content-sub-text">
                                                    Encourage community participation in health and social development activities
                                                </li>
                                            </ul>

                                            <!-- ground impact  -->
                                            <div class="ground-impact">
                                                <h5 class="content-sub-title">Our impact on the ground:</h5>
                                                <p class="content-text">
                                                    Through continuous field engagement, PMK MFI has helped communities adopt healthier lifestyles and improved awareness of essential social and health practices. Families are now more informed about prevention, hygiene, and well-being, leading to healthier households and stronger communities.
                                                </p>
                                                <p class="content-text">
                                                    This initiative has contributed to improved quality of life, reduced health risks, and greater social responsibility at the community level.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 5th Slides -->
                            <div class="swiper-slide activity-livelihood">
                                <div class="activity-cards">
                                    <figure class="activity-card-image">
                                        <img src="../assets/slider/various_project.JPG" class="ac-image" alt="mfi activity image">

                                        <!-- overlay logo -->
                                        <div class="overlay-logo">
                                            <img src="../assets/logo/main-logo.png" class="over-img" alt="pmk logo">
                                        </div>

                                        <!-- overlay wave  -->
                                        <div class="overlay-wave"></div>
                                    </figure>
                                    <div class="activity-content-container">
                                        <div class="activity-content">
                                            <h4 class="content-title">
                                                Empowering Women Through Collective SHG Action
                                            </h4>

                                            <p class="content-text">
                                                PMK MFI is committed to strengthening women’s empowerment by organizing and supporting Self-Help Groups (SHGs) at the grassroots level. These groups serve as a platform for financial inclusion, collective growth, and social empowerment.
                                            </p>

                                            <ul class="content-lists">
                                                <h5 class="content-sub-title">What we have done in the field:</h5>

                                                <li class="content-sub-text">
                                                    Form and support women-led SHGs in rural and semi-urban areas
                                                </li>
                                                <li class="content-sub-text">
                                                    Provide microfinance access through group-based lending models
                                                </li>
                                                <li class="content-sub-text">
                                                    Encourage regular savings and internal group fund management
                                                </li>
                                                <li class="content-sub-text">
                                                    Conduct training on leadership, financial literacy, and entrepreneurship
                                                </li>
                                                <li class="content-sub-text">
                                                    Strengthen decision-making and participation in household income activities
                                                </li>
                                            </ul>

                                            <!-- ground impact  -->
                                            <div class="ground-impact">
                                                <h5 class="content-sub-title">Our impact on the ground:</h5>
                                                <p class="content-text">
                                                    Through SHGs, women have gained greater financial independence and confidence in managing economic activities. Many members have started or expanded small businesses, contributing to household income and community development.
                                                </p>
                                                <p class="content-text">
                                                    This initiative has enhanced women’s leadership, improved financial stability, and strengthened social empowerment at the community level.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 6th Slides -->
                            <div class="swiper-slide activity-financial-raining">
                                <div class="activity-cards">
                                    <figure class="activity-card-image">
                                        <img src="../assets/images/mfi_4.png" class="ac-image" alt="mfi activity image">

                                        <!-- overlay logo -->
                                        <div class="overlay-logo">
                                            <img src="../assets/logo/main-logo.png" class="over-img" alt="pmk logo">
                                        </div>

                                        <!-- overlay wave  -->
                                        <div class="overlay-wave"></div>
                                    </figure>
                                    <div class="activity-content-container">
                                        <div class="activity-content">
                                            <h4 class="content-title">
                                                Emergency Relief & Disaster Recovery Support
                                            </h4>

                                            <p class="content-text">
                                                PMK MFI plays an active role in supporting communities during times of natural disasters and emergencies, ensuring quick assistance and financial resilience for affected families.
                                            </p>

                                            <ul class="content-lists">
                                                <h5 class="content-sub-title">What we have done in the field:</h5>

                                                <li class="content-sub-text">
                                                    Provide emergency financial support to affected households
                                                </li>
                                                <li class="content-sub-text">
                                                    Assist clients in rebuilding livelihoods after disasters
                                                </li>
                                                <li class="content-sub-text">
                                                    Support recovery of small businesses and agricultural activities
                                                </li>
                                                <li class="content-sub-text">
                                                    Offer flexible repayment arrangements during crisis periods
                                                </li>
                                                <li class="content-sub-text">
                                                    Coordinate with local communities for rapid response and assistance
                                                </li>
                                            </ul>

                                            <!-- ground impact  -->
                                            <div class="ground-impact">
                                                <h5 class="content-sub-title">Our impact on the ground:</h5>
                                                <p class="content-text">
                                                    Through timely intervention and field-level engagement, PMK MFI has helped vulnerable families recover faster from disasters and financial shocks. Many households have been able to restart their income activities and stabilize their living conditions.
                                                </p>
                                                <p class="content-text">
                                                    This response approach has strengthened community resilience, reduced long-term economic damage, and supported faster recovery in affected areas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
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
    include("../includes/otherPageFooter.php");
    ?>


    <!-- Linked swiperjs script  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>


    <!-- Linked custom script  -->
    <script src="../js/pmk_mfi.js"></script>


</body>

</html>