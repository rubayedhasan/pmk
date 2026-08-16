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
                    <div class="search-container">
                        <div class="search-field">
                            <svg class="search-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>

                            <div class="search-input-container">
                                <input type="text" name="search_branch" id="search-branch" placeholder="search branch by branch name...">

                                <button type="button" id="clear-search-btn" aria-label="clear search">×</button>
                            </div>
                        </div>

                        <select name="search_division" id="search-division">
                            <option value="">All Divisions</option>
                        </select>

                        <select name="search_district" id="search-district">
                            <option value="">All Districts</option>
                        </select>
                    </div>

                    <!-- sub-section:: branch metas -->
                    <div class="branch-metas">
                        <div class="br-meta">
                            <h5 class="br-meta-value">368</h5>
                            <p class="br-meta-label">Branches</p>
                        </div>
                        <div class="br-meta">
                            <h5 class="br-meta-value">64</h5>
                            <p class="br-meta-label">Districts</p>
                        </div>
                        <div class="br-meta">
                            <h5 class="br-meta-value">08</h5>
                            <p class="br-meta-label">Divisions</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="branch-list-container">

        </section>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");    ?>

</body>

</html>