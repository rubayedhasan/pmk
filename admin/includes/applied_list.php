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
            <form class="search_form">
                <input type="search" name="search_circular" id="search-candidate" placeholder="Search by id or name or phone">
                <select name="select_circular" id="select-circular">
                    <option value="">Select Circular</option>
                    <?php
                    foreach ($circular_list as $circular) { ?>
                        <option value="<?php echo $circular['circular_id']; ?>">
                            <?php echo $circular['circular_title'] . " [" . $circular['circular_id'] . "]"; ?>
                        </option>
                    <?php } ?>
                </select>
                <button type="button" class="src-btn-reset" onclick="setTimeout(()=> document.querySelector( '.search_form').submit(),0)" title="reset">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-rotate-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 4.55a8 8 0 0 0 -6 14.9m0 -4.45v5h-5" />
                        <path d="M18.37 7.16l0 .01" />
                        <path d="M13 19.94l0 .01" />
                        <path d="M16.84 18.37l0 .01" />
                        <path d="M19.37 15.1l0 .01" />
                        <path d="M19.94 11l0 .01" />
                    </svg>
                </button>
            </form>
        </div>
    </header>

    <main>
        <!-- section:: main container  -->
        <section class="panel-main-container">
            <div class="table-wrapper">
                <table class="panel-table">
                    <thead class="panel-table-head">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Job Circular</th>
                            <th>Applied Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="applied_list_tbody" class="panel-table-body">
                        <tr>
                            <td>
                                <span class='circular-id'>
                                    1
                                </span>
                            </td>
                            <td>
                                <figure class="candidate-image">
                                    <img src="../assets/images/profile_pic_ai.jpeg" alt="picture">
                                </figure>
                            </td>
                            <td>
                                <span class='circular-id'>
                                    PMKU-01727955188
                                </span>
                            </td>
                            <td>
                                <span class='item-title'>
                                    R. Hasan
                                </span>
                            </td>
                            <td>
                                <span class='open-position'>
                                    01727955188
                                </span>
                            </td>
                            <td>
                                <span class='open-position'>
                                    01727955188
                                </span>
                            </td>
                            <td>
                                <div class='published-date'>
                                    <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-week'>
                                        <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                        <path d='M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12' />
                                        <path d='M16 3v4' />
                                        <path d='M8 3v4' />
                                        <path d='M4 11h16' />
                                        <path d='M7 14h.013' />
                                        <path d='M10.01 14h.005' />
                                        <path d='M13.01 14h.005' />
                                        <path d='M16.015 14h.005' />
                                        <path d='M13.015 17h.005' />
                                        <path d='M7.01 17h.005' />
                                        <path d='M10.01 17h.005' />
                                    </svg>
                                    24-06-2027
                                </div>
                            </td>
                            <td>
                                <span class='circular-status cs-pending'>pending</span>
                            </td>
                            <td>
                                <div class='item-actions'>
                                    <a href="" title='view profile' class='action-btn btn-view'>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-address-book">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2" />
                                            <path d="M10 16h6" />
                                            <path d="M11 11a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M4 8h3" />
                                            <path d="M4 12h3" />
                                            <path d="M4 16h3" />
                                        </svg>
                                    </a>
                                    <a href='' title='change applicant status' class='action-btn btn-edit'>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-id">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 7a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3l0 -10" />
                                            <path d="M7 10a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M15 8l2 0" />
                                            <path d="M15 12l2 0" />
                                            <path d="M7 16l10 0" />
                                        </svg>
                                    </a>

                                    <?php if ($user_role == 1) { ?>
                                        <a href="" title='delete' class='action-btn btn-delete' onclick="return confirm('Are you sure you want to delete this circular?')">
                                            <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-trash-x'>
                                                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                <path d='M4 7h16' />
                                                <path d='M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12' />
                                                <path d='M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3' />
                                                <path d='M10 12l4 4m0 -4l-4 4' />
                                            </svg>
                                        </a>
                                    <?php  } ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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