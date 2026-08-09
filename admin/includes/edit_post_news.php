<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

// get all post category 
$getCategoryQuery = "SELECT * FROM post_catecgory";
$allPostCategory = $dbConnection->query($getCategoryQuery)->fetch_all(MYSQLI_ASSOC);

// get all sub category 
$getSubCategoryQuery = "SELECT * FROM postsub_cat";
$allSubCAtegory = $dbConnection->query($getSubCategoryQuery)->fetch_all(MYSQLI_ASSOC);

// EDIT POST :: 
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    // QUERY:: get post details
    $get_post_details_query = "SELECT * FROM posts WHERE post_customid = '$post_id'";
    $post_details = $dbConnection->query($get_post_details_query)->fetch_assoc();

    // QUERY:: get post images 
    $get_post_images_query = "SELECT * FROM post_image WHERE postcust_id = '$post_id'";
    $post_images = $dbConnection->query($get_post_images_query)->fetch_all(MYSQLI_ASSOC);

    // echo "<pre>";
    // print_r($post_images);
    // echo "</pre>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Post News</title>
    <?php
    // Linked with shared links
    include_once("../includes/sharedLinks.php");
    ?>

    <!-- TinyMCE CDN (Free Tier) -->
    <script src="https://cdn.jsdelivr.net/npm/tinymce@7/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Linked custom stylesheet -->
    <link rel="stylesheet" href="../styles/publish_page_header.css">
    <link rel="stylesheet" href="../styles/post_news.css">
</head>

<body>
    <!-- section:: header  -->
    <header class="publish-page-header">
        <div class="publish-header-content">
            <figure class="pmk-logo-container">
                <img src="../assets/logo/main-logo.png" alt="pmk logo" class="pmk-logo">
            </figure>
            <div class="publish-page-into">
                <p class="page-intro-text">Edit Content</p>
                <h4 class="page-intro-title">Edit and publish content.</h4>
            </div>
        </div>
        <div class="publish-action-buttons">
            <button type="button" class="publish-action-button ppab-light" onclick="handleCancel()">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-progress-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" />
                    <path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" />
                    <path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" />
                    <path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" />
                    <path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" />
                    <path d="M14 14l-4 -4" />
                    <path d="M10 14l4 -4" />
                </svg>
                <span>Cancel</span>
            </button>
            <button type="button" class="publish-action-button ppab-green publish-button" onclick="uploadThePost()">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                </svg>
                <span>Upload</span>
            </button>
        </div>
    </header>

    <!-- section:: main  -->
    <main>
        <!-- section:: post  -->
        <section id="post" class="post-section">
            <div class="container-width">
                <div class="post-section-container">
                    <!-- category form  -->
                    <div class="section-form-container grid-full">
                        <hgroup>
                            <span class="post-section-label">Post</span>
                            <h4 class="post-section-title">Publish a Post</h4>
                            <p class="post-section-text">
                                Add a clear, engaging description that summarizes your post, highlights its purpose, and encourages readers to explore further.
                            </p>
                        </hgroup>

                        <!-- post form  container (form will create by js FormData obj)-->
                        <div class="section-form">
                            <!-- input:: post ID       -->
                            <div class="form-input">
                                <label for="post-id">Post ID</label>
                                <input type="text" name="post_id" id="post-id" value="<?php echo $post_details['post_customid']; ?>" disabled>
                            </div>

                            <!-- input:: post title  -->
                            <div class="form-input grid-full">
                                <label for="post-title">
                                    Title
                                    <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                                </label>
                                <input type="text" name="post_title" id="post-title" value="<?php echo $post_details['post_title']; ?>">
                            </div>

                            <!-- select:: category      -->
                            <div class="form-input">
                                <label for="post-main-category">
                                    Category
                                    <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                                </label>
                                <select name="post_main_category" id="post-main-category">
                                    <option value=''>
                                        Select Category
                                    </option>
                                    <?php
                                    foreach ($allPostCategory as $category) {
                                        echo "<option value='{$category['postcat_id']}' " . ($post_details['post_cat'] == $category['postcat_id'] ? 'selected' : '') . "> {$category['postcat_name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- select:: sub category       -->
                            <div class="form-input">
                                <label for="post-subcategory-main">
                                    Sub Category
                                    <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                                </label>
                                <select name="post_subcategory_main" id="post-subcategory-main">
                                    <option value=''>
                                        Select Sub Category
                                    </option>
                                    <?php
                                    foreach ($allSubCAtegory as $subCategory) {
                                        echo "<option value='{$subCategory['postsub_cat_id']}' " .
                                            ($post_details['post_subcat'] == $subCategory['postsub_cat_id'] ? 'selected' : '') . "> {$subCategory['postsub_cat_name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- select:: post description        -->
                            <div class="form-input grid-full">
                                <label for="post-subcategory-main">
                                    Post Description
                                    <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                                </label>
                                <textarea name="post_description" id="post-description"><?php echo $post_details['post_description']; ?></textarea>
                            </div>

                            <!-- input:: author name       -->
                            <div class="form-input">
                                <label for="author-name">
                                    Author Name
                                    <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                                </label>
                                <input type="text" name="author_name" id="author-name" value="<?php echo $post_details['post_authorname']; ?>">
                            </div>

                            <!-- input:: Image upload       -->
                            <div class="form-input grid-full">
                                <div class="upload-image-header">
                                    <div>
                                        <h4 class="upload-header-title">Upload Images</h4>
                                        <p class="upload-header-text">
                                            Fill in the necessary fields by assigning a category and uploading an image for each row.
                                        </p>
                                    </div>
                                    <button type="button" class="image-row-add-btn" id="img-row-add-btn" onclick="addNewRow()">
                                        + Add Image
                                    </button>
                                </div>

                                <!-- form table  -->
                                <div class="image-table-wrapper">
                                    <table class="table-upload-image">
                                        <thead>
                                            <tr>
                                                <th>Image Category</th>
                                                <th>Image</th>
                                                <th>Preview</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="image-tbody" id="imageTbody"></tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- for show the table row  -->
                            <template id="image-row-template">
                                <tr>
                                    <!-- image id  -->
                                    <input type="hidden" name="" id="" class="existing-image-id" value="">

                                    <!-- image category  -->
                                    <td>
                                        <select class="image-category">
                                            <option value="">Select Image Category</option>

                                            <!-- Website UI -->
                                            <option value="slider">Slider</option>
                                            <option value="page-banner">Page Banner</option>
                                            <option value="thumbnail">Thumbnail</option>

                                            <!-- Content -->
                                            <option value="project">Project</option>
                                            <option value="field-operations">Field Operations</option>
                                            <option value="program-events">Program & Events</option>
                                            <option value="community-engagement">Community Engagement</option>
                                            <option value="training-workshops">Training & Workshops</option>
                                            <option value="project-update">Project Update</option>
                                            <option value="recent-activity">Recent Activity</option>

                                            <!-- Media -->
                                            <option value="gallery">Gallery</option>
                                            <option value="report-cover">Report Cover</option>
                                            <option value="publication-cover">Publication Cover</option>
                                        </select>
                                        <span class="image-category-label section-hidden"></span>
                                    </td>

                                    <!-- image input  -->
                                    <td>
                                        <div class="image-drop-area">
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 16V4M12 4l-4 4M12 4l4 4"
                                                    stroke="#33504D"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M4 16v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"
                                                    stroke="#33504D"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round" />
                                            </svg>
                                            <h5 class="drop-area-title">Click to upload, or drag an image here</h5>
                                            <p class="drop-area-text">JPG, PNG, WEBP — up to 5MB</p>
                                            <input type="file" class="post-image section-hidden" accept="image/*">
                                        </div>
                                    </td>

                                    <!-- preview  -->
                                    <td>
                                        <div class="image-preview-area"></div>
                                    </td>

                                    <!-- action  -->
                                    <td>
                                        <button type="button" class="delete-image-row-btn" title="Remove Row">✕</button>
                                    </td>
                                </tr>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- TinyMCE Initialization Script -->
    <script>
        tinymce.init({
            selector: '#post-description',

            // Editor
            height: 500,
            resize: false,
            menubar: 'file edit view insert format table tools help',
            branding: false,
            promotion: false,

            // Plugins
            plugins: [
                'advlist',
                'anchor',
                'autolink',
                'autosave',
                'charmap',
                'code',
                'codesample',
                'directionality',
                'fullscreen',
                'help',
                'image',
                'insertdatetime',
                'link',
                'lists',
                'media',
                'preview',
                'searchreplace',
                'table',
                'visualblocks',
                'visualchars',
                'wordcount'
            ],

            // Toolbar
            toolbar: [
                'undo redo | blocks fontfamily fontsize',
                'bold italic underline strikethrough forecolor backcolor',
                'alignleft aligncenter alignright alignjustify',
                'bullist numlist outdent indent',
                'link image media table',
                'codesample code fullscreen preview',
                'removeformat'
            ].join(' | '),

            // Clean HTML
            forced_root_block: 'p',
            forced_root_block_attrs: {
                class: 'news-description'
            },
            verify_html: true,
            cleanup: true,
            remove_linebreaks: false,
            convert_urls: false,

            // Prevent TinyMCE classes/styles
            inline_styles: false,
            convert_fonts_to_spans: false,

            // Remove unwanted attributes/classes/styles
            invalid_styles: {
                '*': 'color font-size font-family line-height background background-color'
            },

            // Allow only clean HTML
            valid_elements: 'p,br,strong/b,em/i,u,s,' +
                'h1,h2,h3,h4,h5,h6,' +
                'ul,ol,li,' +
                'blockquote,' +
                'table,thead,tbody,tr,th,td,' +
                'a[href|target|title],' +
                'img[src|alt|width|height],' +
                'pre,code',

            // Remove class/style attributes from output
            extended_valid_elements: 'span',
            invalid_elements: 'font',

            // Clean pasted content
            paste_as_text: false,
            paste_remove_styles: true,
            paste_remove_spans: true,
            paste_strip_class_attributes: 'all',
            paste_webkit_styles: 'none',

            // Image
            image_title: true,
            automatic_uploads: false,

            // Table
            table_default_attributes: {},
            table_default_styles: {},
            table_class_list: [],

            // Content CSS
            content_css: false,
            content_style: `
        body{
            font-family:Arial,Helvetica,sans-serif;
            font-size:16px;
            margin:15px;
        }

        table{
            border-collapse:collapse;
            width:100%;
        }

        table,th,td{
            border:1px solid #ccc;
        }

        th,td{
            padding:8px;
        }

        img{
            max-width:100%;
            height:auto;
        }
    `,

            // Remove classes before saving
            setup: function(editor) {

                editor.on('GetContent', function(e) {

                    let div = document.createElement('div');
                    div.innerHTML = e.content;

                    div.querySelectorAll('*').forEach(el => {
                        el.removeAttribute('class');
                        el.removeAttribute('style');
                        el.removeAttribute('id');
                        el.removeAttribute('data-mce-style');
                        el.removeAttribute('data-mce-src');
                        el.removeAttribute('data-mce-selected');
                    });

                    e.content = div.innerHTML;
                });

            }
        });
    </script>

    <!-- set the image json  -->
    <script>
        const existingPostImage = <?php echo json_encode($post_images); ?>;
    </script>

    <!-- Linked custom script  -->
    <script src="../js/edit_post_news.js"></script>
</body>

</html>