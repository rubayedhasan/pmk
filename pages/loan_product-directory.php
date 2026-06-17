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
                        <input type="text" name="input_search" id="inputSearch" class="input-search" placeholder="Search by name, code, or category…">
                    </div>

                    <div class="directory-tabs">
                        <button class="directory-tab directory-tab-active" type="button">All</button>
                        <button class="directory-tab" type="button">Main Products</button>
                        <button class="directory-tab" type="button">Other Products</button>
                    </div>
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