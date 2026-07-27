<?php
// session_start();
$user_role = $_SESSION['admin']['role'];

// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

// QUERY:: get all post, category, subcategory 
// category 
$all_category_query = "SELECT * FROM post_catecgory";
$all_category_arr = $dbConnection->query($all_category_query)->fetch_all(MYSQLI_ASSOC);

// subcategory 
$all_subcategory_query = "SELECT * FROM postsub_cat";
$all_subcategory_arr = $dbConnection->query($all_subcategory_query)->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// print_r($all_subcategory_arr);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All post</title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/all_posts.css">
</head>

<body>
    <!-- section:: panel header  -->
    <header class="panel-header">
        <!-- head  -->
        <div class="panel-content-box">
            <h4 class="panel-title">All Post Lists</h4>
        </div>

        <!-- search box  -->
        <div class="panel-meta-container">
            <div class="panel-meta">
                Total Post: <span style="color:var(--pmk-blue-dark); font-weight: 600;"></span>
            </div>
            <div class="panel-meta">
                Total Category: <span style="color:var(--pmk-blue-dark); font-weight: 600;">
                    <?php echo count($all_category_arr); ?>
                </span>
            </div>
            <div class="panel-meta">
                Total Subcategory: <span style="color:var(--pmk-blue-dark); font-weight: 600;">
                    <?php echo count($all_subcategory_arr); ?>
                </span>
            </div>
        </div>

        <!-- button  -->
        <div class="panel-button-box">
            <button type="button" class="panel-action-button" onclick="window.location.href='../includes/post_news.php'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                </svg>
                New Post
            </button>
        </div>
    </header>

    <main>
        <!-- section:: main container  -->
        <section class="panel-main-container">
            <div class="post-container">
                <div class="post-filter-container">
                    <form class="post-filter-form" method="post">
                        <input type="search" name="search_post" id="search-post" placeholder="Search by Post Title">
                        <select name="post_category" id="post-category">
                            <option value="">All Category</option>
                            <?php foreach ($all_category_arr as $category) { ?>
                                <option value="<?php echo $category['postcat_id']; ?>">
                                    <?php echo $category["postcat_name"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <select name="post_subcategory" id="post-subcategory">
                            <option value="">All Sub Category</option>
                            <?php foreach ($all_subcategory_arr as $subcategory) { ?>
                                <option value="<?php echo $subcategory['postsub_cat_id'] ?>">
                                    <?php echo $subcategory['postsub_cat_name'] ?>
                                </option>
                            <?php } ?>

                        </select>
                        <select name="post_subcategory" id="post-subcategory">
                            <option value="">Newest First</option>
                            <option value="">Oldest First</option>
                        </select>
                        <button type="submit" class="src-post-submit" title="submit filter">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-filter-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 6h16" />
                                <path d="M6 12h12" />
                                <path d="M9 18h6" />
                            </svg>
                            Filter
                        </button>
                        <button type="button" class="src-post-reset" title="reset filter" onclick="setTimeout(()=> document.querySelector( '.post-filter-form').submit(),0)">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-rotate-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M15 4.55a8 8 0 0 0 -6 14.9m0 -4.45v5h-5" />
                                <path d="M18.37 7.16l0 .01" />
                                <path d="M13 19.94l0 .01" />
                                <path d="M16.84 18.37l0 .01" />
                                <path d="M19.37 15.1l0 .01" />
                                <path d="M19.94 11l0 .01" />
                            </svg>
                            Reset
                        </button>
                    </form>
                </div>

                <!-- table wrapper  -->
                <div class="table-wrapper">
                    <table class="post-table">
                        <thead class="post-table-head">
                            <tr>
                                <th>ID</th>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Published Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="post-table-body">
                            <tr>
                                <td>tabel-1</td>
                                <td>tabel-2</td>
                                <td>tabel-3</td>
                                <td>tabel-4</td>
                                <td>tabel-5</td>
                                <td>tabel-6</td>
                                <td>
                                    <div class='item-actions'>
                                        <a href='' title='view' class='action-btn btn-view'>
                                            <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-eye'>
                                                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                <path d='M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0' />
                                                <path d='M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6' />
                                            </svg>
                                        </a>

                                        <?php if ($user_role == 1) { ?>
                                            <a href='' title='edit' class='action-btn btn-edit'>
                                                <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-edit'>
                                                    <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                    <path d='M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1' />
                                                    <path d='M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415' />
                                                    <path d='M16 5l3 3' />
                                                </svg>
                                            </a>
                                            <a href='' title='delete' class='action-btn btn-delete' onclick="return confirm('Are you sure you want to delete this circular?')">
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
            </div>
        </section>
    </main>

    <!-- auto reloan on page show  -->
    <script>
        window.addEventListener("pageshow", function(event) {
            if (event.persisted || performance.getEntriesByType("navigation")[0]?.type === "back_forward") {
                location.reload();
            }
        });
    </script>
</body>

</html>