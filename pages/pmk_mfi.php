<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | MFI</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/otherPageSharedLinks.php") ?>

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
                                            Compulsory Savings:
                                        </strong> Members must maintain savings equivalent to 5% of the approved loan amount, according to organizational policy.
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
                                        <li class="sub-rule">The member may receive loan waiver up to a maximum of BDT 5,00,000 (Five Lakh Taka).</li>
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
                    </div>

                    <!-- loan installment method container -->
                    <div id="loan-installment-method" class="guide-block no-display">
                        <p>loan installment</p>
                    </div>

                    <!-- loan guide container -->
                    <div id="loan-guide" class="guide-block no-display">
                        <p>loan Guide</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: mfi saving program  -->
        <!-- <section id="mfi-saving-program">
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
            </div>
        </section> -->


    </main>

    <?php
    // Linked section:: Footer
    include("../includes/otherPageFooter.php");
    ?>



    <!-- Linked custom script  -->
    <script src="../js/pmk_mfi.js"></script>

</body>

</html>