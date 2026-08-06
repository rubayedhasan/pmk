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

// CONDITIONAL BASE QUERY :: 
$condition = '';
$sort_order = ' ORDER BY post_datetme DESC';

// FILTER BY:: post title 
if (isset($_REQUEST['search_post']) && $_REQUEST['search_post'] != "") {
    $condition .= ' AND p.post_title LIKE "%' . $_REQUEST['search_post'] . '%"';
}

// FILTER BY:: post category 
if (isset($_REQUEST['post_category']) && $_REQUEST['post_category'] != "") {
    $condition .= ' AND p.post_cat =' . (int)$_REQUEST['post_category'];
}

// FILTER BY:: post sub-category 
if (isset($_REQUEST['post_subcategory']) && $_REQUEST['post_subcategory'] != "") {
    $condition .= ' AND p.post_subcat =' . (int)$_REQUEST['post_subcategory'];
}

// FILTER BY:: post title sort order 
if (isset($_REQUEST['post_latest']) && $_REQUEST['post_latest'] == 2) {
    $sort_order = ' ORDER BY post_datetme ASC';
}

$all_post_query = "SELECT 
                            p.*,
                            c.postcat_name,
                            s.postsub_cat_name
                     FROM 
                            posts AS p
                    LEFT JOIN post_catecgory AS c
                            ON p.post_cat = c.postcat_id
                    LEFT JOIN postsub_cat AS s
                            ON p.post_subcat = s.postsub_cat_id
                    WHERE 1 " . $condition . $sort_order . "";
$all_post_arr = $dbConnection->query($all_post_query)->fetch_all(MYSQLI_ASSOC);

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
                Total Post: <span style="color:var(--pmk-blue-dark); font-weight: 600;">
                    <?php echo count($all_post_arr); ?>
                </span>
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
                        <select name="post_latest" id="post-subcategory">
                            <option value="1">Newest First</option>
                            <option value="2">Oldest First</option>
                        </select>
                        <button type="submit" class="src-post-submit" name="submit_post_filter" title="submit filter">
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
                            <?php foreach ($all_post_arr as $post) {
                                // QUERY::thumbnail image 
                                $thumbnail_image_query = "SELECT post_image FROM post_image WHERE postcust_id = '$post[post_customid]'";
                                $thumbnail_image = $dbConnection->query($thumbnail_image_query)->fetch_assoc();

                            ?>
                                <tr>
                                    <td>
                                        <span class="post-id">
                                            <?php echo $post["post_customid"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <figure class="post-thumbnail">
                                            <img src="../assets/uploads/posts/<?php echo $thumbnail_image["post_image"] ?? "" ?>" alt="<?php echo $post["post_title"]; ?>">
                                        </figure>
                                    </td>
                                    <td>
                                        <h4 class="post-title">
                                            <?php echo $post["post_title"]; ?>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="post-categories-container">
                                            <div class="post-categories">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 4h6v6h-6l0 -6" />
                                                    <path d="M14 4h6v6h-6l0 -6" />
                                                    <path d="M4 14h6v6h-6l0 -6" />
                                                    <path d="M14 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                </svg>
                                                <?php echo $post["postcat_name"]; ?>
                                            </div>
                                            <div class="post-categories post-sub">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category-2">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M14 4h6v6h-6l0 -6" />
                                                    <path d="M4 14h6v6h-6l0 -6" />
                                                    <path d="M14 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                    <path d="M4 7a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                </svg>
                                                <?php echo $post["postsub_cat_name"]; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="post-author">
                                            <?php echo $post["post_authorname"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="post-date">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-clock">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10.5 21h-4.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" />
                                                <path d="M16 3v4" />
                                                <path d="M8 3v4" />
                                                <path d="M4 11h10" />
                                                <path d="M14 18a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                                <path d="M18 16.5v1.5l.5 .5" />
                                            </svg>
                                            <?php echo $post["post_datetme"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class='item-actions'>
                                            <a href="../includes/view_news_page.php?post_id=<?php echo $post["post_customid"]; ?>" title='view' class='action-btn btn-view'>
                                                <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-eye'>
                                                    <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                    <path d='M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0' />
                                                    <path d='M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6' />
                                                </svg>
                                            </a>

                                            <?php if ($user_role == 1) { ?>
                                                <a href='../includes/edit_post_news.php?post_id=<?php echo $post["post_customid"]; ?>' title='edit' class='action-btn btn-edit'>
                                                    <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-edit'>
                                                        <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                        <path d='M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1' />
                                                        <path d='M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415' />
                                                        <path d='M16 5l3 3' />
                                                    </svg>
                                                </a>
                                                <a href="../server/delete_post.php?post_id=<?php echo $post["post_customid"]; ?>" title='delete' class='action-btn btn-delete' onclick="return confirm('Are you sure you want to delete this post?')">
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
                            <?php } ?>
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

        // functionality:: enable the sub category after selection the category
        const postMainCategory = document.querySelector("#post-category");
        const postSubcategoryMain = document.querySelector("#post-subcategory");
        postMainCategory.addEventListener("change", function() {
            const categoryId = this.value;

            // fetch the sub category data from server
            fetch("../server/fetch_post_subcategory.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: "post_category_id=" + categoryId,
                })
                .then((response) => response.text())
                .then((subcategory_data) => {
                    postSubcategoryMain.innerHTML = subcategory_data;
                    postSubcategoryMain.removeAttribute("disabled");
                });
        });
    </script>

</body>

</html>