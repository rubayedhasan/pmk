<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Loan Products</title>
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">


    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/otherPageSharedLinks.php") ?>

    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/loan_product-directory.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/otherPageNavbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section:: directory hero  -->
        <section id="product-directory-hero">
            <div class="container-width">
                <span class="pdh-tag">PMK Financial Services</span>
                <h1 class="pdh-title">Loan <span style="color: #6de8be;">Product</span> Directory</h1>
                <p class="pdh-text">Full list of loan products with interest rates, eligibility ranges, repayment frequencies, and installment options.</p>
            </div>
        </section>


        <!-- section:: product table  -->
        <section id="loan-product-directory">
            <div class="container-width">
                <!-- product controller menu  -->
                <div class="directory-controller-menu">
                    <div class="directory-search-container">
                        <svg
                            width="16"
                            height="16"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.2">
                            <circle cx="11" cy="11" r="8" />
                            <path d="M21 21l-4.35-4.35" />
                        </svg>

                        <!-- search  -->
                        <input type="text" name="input_search" id="inputSearch" class="input-search" placeholder="Search by name, code, or category…" oninput="applyProductFilter()">
                    </div>

                    <div class="directory-tabs">
                        <button class="directory-tab directory-tab-active" type="button" onclick="filterProductBy('all', this)">All</button>
                        <button class="directory-tab" type="button" onclick="filterProductBy('main-product', this)">Main Products</button>
                        <button class="directory-tab" type="button" onclick="filterProductBy('other-product', this)">Other Products</button>
                    </div>
                </div>

                <!-- ── main loan product── -->
                <div class="product-label" id="main-label">
                    <h4 class="label label-main">Main Loan Products</h4>
                </div>


                <!-- main product table  -->
                <div class="product-table-wrapper" id="main-product-table">
                    <div class="scroll-table">
                        <table>
                            <!-- table head  -->
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Primary</th>
                                    <th>Interest Rate</th>
                                    <th>Loan Amount Range</th>
                                    <th>Repayment Frequency</th>
                                    <th>Installments</th>
                                </tr>
                            </thead>

                            <!-- table body   -->
                            <tbody id="main-product-tbody">
                                <!-- 1st row (main product)  -->
                                <tr
                                    data-section="main-product"
                                    data-primary="yes"
                                    data-search="jagoron 128 jagoron">
                                    <td><span class="row-no">1</span></td>
                                    <td>
                                        <div class="product-name">JAGORON</div>
                                        <div class="product-code">Code: 128</div>
                                    </td>
                                    <td><span class="category">JAGORON</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">24%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,000<span class="sep">–</span>৳1,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                            <span class="installment-badge">46</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 2nd row (main product)  -->
                                <tr
                                    data-section="main-product"
                                    data-primary="yes"
                                    data-search="jagoron-m 161 jagoron">
                                    <td><span class="row-no">2</span></td>
                                    <td>
                                        <div class="product-name">JAGORON-M</div>
                                        <div class="product-code">Code: 161</div>
                                    </td>
                                    <td><span class="category">JAGORON</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">24%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳50,000<span class="sep">–</span>৳30,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                            <span class="installment-badge">46</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 3rd row (main product)  -->
                                <tr
                                    data-section="main-product"
                                    data-primary="yes"
                                    data-search="agroshor 130 agrosor">
                                    <td><span class="row-no">3</span></td>
                                    <td>
                                        <div class="product-name">Agroshor</div>
                                        <div class="product-code">Code: 130</div>
                                    </td>
                                    <td><span class="category">AGROSOR</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">24%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,00,001<span class="sep">–</span>৳80,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                            <span class="installment-badge">46</span>
                                            <span class="installment-badge">90</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 4th row (main product)  -->
                                <tr
                                    data-section="main-product"
                                    data-primary="yes"
                                    data-search="agrosor-pksf 129 agrosor">
                                    <td><span class="row-no">4</span></td>
                                    <td>
                                        <div class="product-name">AGROSOR-PKSF</div>
                                        <div class="product-code">Code: 129</div>
                                    </td>
                                    <td><span class="category">AGROSOR</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">24%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,00,001<span class="sep">–</span>৳30,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                            <span class="installment-badge">46</span>
                                            <span class="installment-badge">91</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 5th row (main product)  -->
                                <tr
                                    data-section="main-product"
                                    data-primary="yes"
                                    data-search="sufolon 146 sufolon">
                                    <td><span class="row-no">5</span></td>
                                    <td>
                                        <div class="product-name">Sufolon</div>
                                        <div class="product-code">Code: 146</div>
                                    </td>
                                    <td><span class="category">Sufolon</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">24%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳5,000<span class="sep">–</span>৳30,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                            <span class="installment-badge">46</span>
                                            <span class="installment-badge">90</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 6th row (main product)  -->
                                <tr
                                    data-section="main-product"
                                    data-primary="yes"
                                    data-search="sufolon-m 148 sufolon">
                                    <td><span class="row-no">6</span></td>
                                    <td>
                                        <div class="product-name">Sufolon-M</div>
                                        <div class="product-code">Code: 148</div>
                                    </td>
                                    <td><span class="category">SUFOLON</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">24%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳30,000<span class="sep">–</span>৳50,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 7th row (main product)  -->
                                <tr
                                    data-section="main-product"
                                    data-primary="yes"
                                    data-search="buniad 131 buniad">
                                    <td><span class="row-no">7</span></td>
                                    <td>
                                        <div class="product-name">BUNIAD</div>
                                        <div class="product-code">Code: 131</div>
                                    </td>
                                    <td>
                                        <span class="category">BUNIAD</span>
                                    </td>
                                    <td>
                                        <span class="info-badge">✓ Yes</span>
                                    </td>
                                    <td>
                                        <span class="interest-cell">20%</span>
                                    </td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,000<span class="sep">–</span>৳20,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">44</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 8th row (main product)  -->
                                <tr
                                    data-section="main-product"
                                    data-primary="yes"
                                    data-search="abason 215 abason">
                                    <td><span class="row-no">8</span></td>
                                    <td>
                                        <div class="product-name">Abason</div>
                                        <div class="product-code">Code: 215</div>
                                    </td>
                                    <td><span class="category">ABASON</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">12%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳80,000<span class="sep">–</span>৳20,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- empty row  -->
                                <tr class="empty-row" id="empty-row-main-product" style="display: none">
                                    <td colspan="8">No matching products found.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- ── mother loan product── -->
                <div class="product-label" id="other-label">
                    <h4 class="label label-other">Other Loan Products</h4>
                </div>

                <!-- other product table  -->
                <div class="product-table-wrapper" id="other-product-table">
                    <div class="scroll-table">
                        <table>
                            <!-- table head  -->
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Primary</th>
                                    <th>Interest Rate</th>
                                    <th>Loan Amount Range</th>
                                    <th>Repayment Frequency</th>
                                    <th>Installments</th>
                                </tr>
                            </thead>

                            <!-- table body   -->
                            <tbody id="other-product-tbody">
                                <!-- 9th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="no"
                                    data-search="hhsl 212 household sanitation loan">
                                    <td><span class="row-no">9</span></td>
                                    <td>
                                        <div class="product-name">HHSL</div>
                                        <div class="product-code">Code: 212</div>
                                    </td>
                                    <td><span class="category">Household Sanitation</span></td>
                                    <td><span class="info-badge">– No</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳10,000<span class="sep">–</span>৳60,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 10th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="no"
                                    data-search="hhwl 211 household water loan">
                                    <td><span class="row-no">10</span></td>
                                    <td>
                                        <div class="product-name">HHWL</div>
                                        <div class="product-code">Code: 211</div>
                                    </td>
                                    <td><span class="category">Household Water</span></td>
                                    <td><span class="info-badge">– No</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳10,000<span class="sep">–</span>৳60,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 11th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="no"
                                    data-search="lrp pksf 109 livelihood restoration project">
                                    <td><span class="row-no">11</span></td>
                                    <td>
                                        <div class="product-name">LRP(PKSF)</div>
                                        <div class="product-code">Code: 109</div>
                                    </td>
                                    <td><span class="category">LRP</span></td>
                                    <td><span class="info-badge">– No</span></td>
                                    <td><span class="interest-cell">4%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,000<span class="sep">–</span>৳1,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">45</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 12th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="no"
                                    data-search="li 150 livelihood improvement">
                                    <td><span class="row-no">12</span></td>
                                    <td>
                                        <div class="product-name">LI</div>
                                        <div class="product-code">Code: 212</div>
                                    </td>
                                    <td><span class="category">Livelihood Improvement</span></td>
                                    <td><span class="info-badge">– No</span></td>
                                    <td><span class="interest-cell">8%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳5,000<span class="sep">–</span>৳20,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">42</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 13th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="mfce 227 mfce">
                                    <td><span class="row-no">13</span></td>
                                    <td>
                                        <div class="product-name">MFCE</div>
                                        <div class="product-code">Code: 227</div>
                                    </td>
                                    <td><span class="category">MFCE</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,00,000<span class="sep">–</span>৳30,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 14th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="no"
                                    data-search="sdl 156 sanitation development loan">
                                    <td><span class="row-no">14</span></td>
                                    <td>
                                        <div class="product-name">SDL</div>
                                        <div class="product-code">Code: 156</div>
                                    </td>
                                    <td><span class="category">Sanitation Dev.</span></td>
                                    <td><span class="info-badge">– No</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳15,000<span class="sep">–</span>৳25,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">44</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 15th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="rmtp 228 rmtp">
                                    <td><span class="row-no">15</span></td>
                                    <td>
                                        <div class="product-name">RMTP</div>
                                        <div class="product-code">Code: 228</div>
                                    </td>
                                    <td><span class="category">RMTP</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">16%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳10,01,000<span class="sep">–</span>৳30,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 16th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="no"
                                    data-search="sahos 210 sahos">
                                    <td><span class="row-no">16</span></td>
                                    <td>
                                        <div class="product-name">SAHOS</div>
                                        <div class="product-code">Code: 210</div>
                                    </td>
                                    <td><span class="category">SAHOS</span></td>
                                    <td><span class="info-badge">– No</span></td>
                                    <td><span class="interest-cell">4%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,000<span class="sep">–</span>৳20,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">45</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 17th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="raise-youth 230 raise">
                                    <td><span class="row-no">17</span></td>
                                    <td>
                                        <div class="product-name">RAISE-YOUTH</div>
                                        <div class="product-code">Code: 230</div>
                                    </td>
                                    <td><span class="category">RAISE</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳51,000<span class="sep">–</span>৳7,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">44</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 18th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="raise-apt 231 raise">
                                    <td><span class="row-no">18</span></td>
                                    <td>
                                        <div class="product-name">RAISE-APT</div>
                                        <div class="product-code">Code: 231</div>
                                    </td>
                                    <td><span class="category">RAISE</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳51,000<span class="sep">–</span>৳7,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">44</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 19th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="raise-m 214 raise">
                                    <td><span class="row-no">19</span></td>
                                    <td>
                                        <div class="product-name">RAISE-M</div>
                                        <div class="product-code">Code: 214</div>
                                    </td>
                                    <td><span class="category">RAISE</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳51,000<span class="sep">–</span>৳7,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 20th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="raise-mcp 232 raise">
                                    <td><span class="row-no">20</span></td>
                                    <td>
                                        <div class="product-name">RAISE-MCP</div>
                                        <div class="product-code">Code: 232</div>
                                    </td>
                                    <td><span class="category">RAISE</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳51,000<span class="sep">–</span>৳7,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">44</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 21th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="raise-mcp-m 235 raise">
                                    <td><span class="row-no">21</span></td>
                                    <td>
                                        <div class="product-name">RAISE-MCP-M</div>
                                        <div class="product-code">Code: 235</div>
                                    </td>
                                    <td><span class="category">RAISE</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳51,000<span class="sep">–</span>৳7,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 22th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="raise-w 213 raise">
                                    <td><span class="row-no">22</span></td>
                                    <td>
                                        <div class="product-name">RAISE-W</div>
                                        <div class="product-code">Code: 213</div>
                                    </td>
                                    <td><span class="category">RAISE</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳51,000<span class="sep">–</span>৳7,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">44</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 23th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="raise-youth-m 233 raise">
                                    <td><span class="row-no">23</span></td>
                                    <td>
                                        <div class="product-name">RAISE-YOUTH-M</div>
                                        <div class="product-code">Code: 233</div>
                                    </td>
                                    <td><span class="category">RAISE</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">18%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳51,000<span class="sep">–</span>৳7,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 24th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="agroshor-smart 237 agroshor smart">
                                    <td><span class="row-no">24</span></td>
                                    <td>
                                        <div class="product-name">Agroshor-SMART</div>
                                        <div class="product-code">Code: 237</div>
                                    </td>
                                    <td><span class="category">Agroshor-SMART</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">24%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,00,000<span class="sep">–</span>৳50,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 25th row (other product)  -->
                                <tr
                                    data-section="other-product"
                                    data-primary="yes"
                                    data-search="csl-smart 238 common service smart">
                                    <td><span class="row-no">25</span></td>
                                    <td>
                                        <div class="product-name">CSL-SMART</div>
                                        <div class="product-code">Code: 238</div>
                                    </td>
                                    <td><span class="category">CSL-SMART</span></td>
                                    <td><span class="info-badge">✓ Yes</span></td>
                                    <td><span class="interest-cell">24%</span></td>
                                    <td>
                                        <div class="loan-amount-amount">
                                            ৳1,00,000<span class="sep">–</span>৳10,00,000
                                        </div>
                                    </td>
                                    <td>
                                        <div class="repayment-frequency">
                                            <span class="frequency-badge">WEEKLY</span>
                                            <span class="frequency-badge">MONTHLY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="installment-list">
                                            <span class="installment-badge">12</span>
                                            <span class="installment-badge">18</span>
                                            <span class="installment-badge">24</span>
                                            <span class="installment-badge">36</span>
                                        </div>
                                    </td>
                                </tr>


                                <!-- empty row  -->
                                <tr class="empty-row" id="empty-row-other-product" style="display: none">
                                    <td colspan="8">No matching products found.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/otherPageFooter.php");
    ?>


    <!-- Linked custom script  -->
    <script src="../js/loan_product_directory.js"></script>
</body>

</html>