<?php
// session_start();
$user_role = $_SESSION['admin']['role'];

// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

// get circular list 
$get_circular_list_query = "SELECT circular_id, circular_title FROM publish_circular ORDER BY application_deadline DESC";
$circular_list = $dbConnection->query($get_circular_list_query)->fetch_all(MYSQLI_ASSOC);

// set the user role in js 
echo "
        <script> 
            let userRole = $user_role;
        </script>
"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apply list</title>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/all_circular.css">
    <link rel="stylesheet" href="../styles/applied_list.css">
</head>

<body>
    <!-- section:: panel header  -->
    <header class="panel-header">
        <!-- head  -->
        <div class="panel-content-box">
            <h4 class="panel-title">Applied List</h4>
            <span class="panel-text">View and manage all job applications.</span>
        </div>

        <!-- search box  -->
        <div class="panel-search-box">
            <form class="search_form" onsubmit="(e)=>e.preventDefault()">
                <!-- search by phone or name  -->
                <input type="text" name="search_circular" id="search-candidate" placeholder="Search by id or name or phone">

                <!-- search by education  -->
                <input type="text" name="search_edu" id="search-edu" placeholder="Search By University...">

                <!-- filter by last degree  -->
                <select name="select_higher_degree" id="select-higher-degree">
                    <option value="">Select Higher Degree</option>
                    <option value="bachelors">Bachelor's</option>
                    <option value="masters">Master's</option>
                    <option value="phd">PhD</option>
                </select>

                <!-- circular list  -->
                <select name="select_circular" id="select-circular">
                    <option value="">All Circulars</option>
                    <?php
                    foreach ($circular_list as $circular) { ?>
                        <option value="<?php echo $circular['circular_id']; ?>">
                            <?php echo $circular['circular_title'] . " [" . $circular['circular_id'] . "]"; ?>
                        </option>
                    <?php } ?>
                </select>
            </form>
        </div>
    </header>

    <main>
        <!-- section:: main container  -->
        <section class="panel-main-container">
            <div class="table-wrapper">

                <div class="table-header">
                    <h2 id="selected-circular-title">
                        All Circular
                    </h2>

                    <button
                        type="button"
                        id="download-excel"
                        class="download-excel-btn">
                        Download Excel
                    </button>
                </div>

                <table class="panel-table">
                    <thead class="panel-table-head">
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Recent Institution</th>
                            <th>Highest Degree</th>
                            <th>Applied Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="applied_list_tbody" class="panel-table-body"></tbody>
                </table>
            </div>
        </section>

        <!-- section:: status modal  -->
        <section id="candidate_status_modal" class="d-modal">
            <div class="d-modal-content">
                <h4 class="d-modal-label">Change Applicant Status</h4>
                <div class="d-modal-form">
                    <h5 class="candidate">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-screen">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19.03 17.818a3 3 0 0 0 1.97 -2.818v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3v8c0 1.317 .85 2.436 2.03 2.84" />
                            <path d="M10 14a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M8 21a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2" />
                        </svg>
                        <span id="d-modal-candidate-Name"></span>
                    </h5>
                    <input type="hidden" name="candidate_user_id" id="candidate_user_id">
                    <input type="hidden" name="candidate_circular_id" id="candidate_circular_id">
                    <select name="candidate_status" id="candidate-status">
                        <option value="1">Pending</option>
                        <option value="2">ShortListed / Present</option>
                        <option value="3">Selected</option>
                        <option value="0">Rejected</option>
                    </select>

                    <div class="d-modal-actions">
                        <button type="button" class="d-modal-update" onclick="updateCandidateStatus()">Update</button>
                        <button type="button" class="d-modal-close" onclick="closeStatusModal()">Cancel</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- section::pagination  -->
        <section id="pagination-container">
            <!-- page details  -->
            <div class="page-details">Showing 1 to 10 of 100</div>

            <!-- pagination container  -->
            <ul class="" id="pagination">
                <!-- <li class="d-page-item">
                    <button type="button" class="d-page-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M11 7l-5 5l5 5" />
                            <path d="M17 7l-5 5l5 5" />
                        </svg>
                    </button>
                </li>
                <li class="d-page-item">
                    <button type="button" class="d-page-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </button>
                </li>
                <li class="d-page-item">
                    <button type="button" class="d-page-link d-page-active">
                        1
                    </button>
                </li>
                <li class="d-page-item">
                    <button type="button" class="d-page-link">
                        2
                    </button>
                </li>
                <li class="d-page-item">
                    <button type="button" class="d-page-link">
                        3
                    </button>
                </li>
                <li class="d-page-item">
                    <button type="button" class="d-page-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 6l6 6l-6 6" />
                        </svg>
                    </button>
                </li>
                <li class="d-page-item">
                    <button type="button" class="d-page-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7l5 5l-5 5" />
                            <path d="M13 7l5 5l-5 5" />
                        </svg>
                    </button>
                </li> -->
            </ul>

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
        </section>
    </main>

    <script>
        window.addEventListener("pageshow", function(event) {
            if (event.persisted || performance.getEntriesByType("navigation")[0]?.type === "back_forward") {
                location.reload();
            }
        });
    </script>
    <script src="../js/applied_list.js"></script>
</body>

</html>