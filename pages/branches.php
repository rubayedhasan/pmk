<?php
// database connection 
require_once('../db_auth/db_global.php');

// QUERY:: get all division 
$get_division_query = "SELECT * FROM area_division";
$divisions = $conn_ad->query($get_division_query)->fetch_all(MYSQLI_ASSOC);

// QUERY:: get all district 
$get_district_query = "SELECT  * FROM area_district";
$districts = $conn_ad->query($get_district_query)->fetch_all(MYSQLI_ASSOC);

// QUERY:: get all branche 
$get_branches_query = "SELECT ob.*,
ad.division_name,
adc.disctrict_name,
upz.upazilla_name
FROM office_branch AS ob

LEFT JOIN area_division AS ad
ON ob.division_code = ad.division_code

LEFT JOIN area_district AS adc
ON ob.district_code = adc.district_code

LEFT JOIN area_upazilla AS upz
ON ob.upazilla_code = upz.upazilla_code

 WHERE branch_status = 1 ORDER BY branch_code ASC";
$branches = $conn_ad->query($get_branches_query)->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// print_r($branches);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Branches</title>
    <meta name="description" content="Explore PMK branches, locations, contact details, and services. Find the nearest PMK branch and get the support you need quickly and conveniently.">
    <!-- Linked to shared stylesheet.php" -->
    <?php include("../includes/sharedLinks.php") ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/branches.css">
</head>


<body>
    <?php
    // Linked section:: Navar/Header
    include("../includes/navbar.php");
    ?>

    <!-- section::Main  -->
    <main>
        <!-- section:: branch page header -->
        <section class="branch-page-header">
            <div class="container-width">
                <div class="branch-filter-container">
                    <!-- sub-section:: search box  -->
                    <form class="search-container">
                        <div class="search-field">
                            <svg class="search-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>

                            <div class="search-input-container">
                                <input type="text" name="search_branch" id="search-branch" placeholder="search by branch name...">

                                <button type="button" id="clear-search-btn" aria-label="clear search">×</button>
                            </div>
                        </div>

                        <div>
                            <select name="search_division" id="search-division">
                                <option value="">All Divisions</option>
                                <?php foreach ($divisions as $division) { ?>
                                    <option value="<?php echo $division['division_code']; ?>"><?php echo $division['division_name']; ?></option>
                                <?php } ?>
                            </select>

                            <select name="search_district" id="search-district">
                                <option value="">All Districts</option>
                                <?php foreach ($districts as $district) { ?>
                                    <option value="<?php echo $district['district_code']; ?>"><?php echo $district['disctrict_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </form>

                    <!-- sub-section:: branch metas -->
                    <div class="branch-metas">
                        <div class="br-meta">
                            <h5 class="br-meta-value">
                                <?php echo count($branches); ?>
                            </h5>
                            <p class="br-meta-label">Branches</p>
                        </div>
                        <div class="br-meta">
                            <h5 class="br-meta-value">36</h5>
                            <p class="br-meta-label">Districts</p>
                        </div>
                        <div class="br-meta">
                            <h5 class="br-meta-value">07</h5>
                            <p class="br-meta-label">Divisions</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section:: branch list container  -->
        <section class="branch-list-container">
            <div class="container-width">
                <div class="branch-grid-layout">
                </div>

                <!-- section::pagination  -->
                <div id="pagination-container">
                    <!-- page details  -->
                    <div class="page-details">Showing 1 to 10 of 100</div>

                    <!-- pagination container  -->
                    <ul class="" id="pagination"></ul>

                    <!-- page input  -->
                    <div class="page-input">
                        <input
                            type="number"
                            id="go-page"
                            placeholder="Go"
                            min="1">

                        <div class="page-select">
                            <label for="per-page">Rows</label>
                            <select id="per-page">
                                <option value="10">10</option>
                                <option value="25" selected>25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");    ?>


    <!-- Linked custom script  -->
    <script src="../js/branches.js"></script>
</body>

</html>