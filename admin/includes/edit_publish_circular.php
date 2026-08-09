<?php
// connect database 
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if (isset($_GET["circular_id"])) {
    $circular_id = $_GET["circular_id"];

    // QUERY:: GET THE CIRCULAR DATA 
    $circular_data_query = "SELECT * FROM publish_circular WHERE circular_id = '$circular_id'";
    $circular_data = $dbConnection->query($circular_data_query)->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Publish Circular 2</title>

    <!-- Linked favicon  -->
    <link rel="shortcut icon" href="../assets/logo/main-logo.png" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/publish_page_header.css">
    <link rel="stylesheet" href="../styles/publish_circular.css">
</head>

<body>
    <!-- section:: header  -->
    <header class="publish-page-header">
        <div class="publish-header-content">
            <figure class="pmk-logo-container">
                <img src="../assets/logo/main-logo.png" alt="pmk logo" class="pmk-logo">
            </figure>
            <div class="publish-page-into">
                <p class="page-intro-text">Edit Circular</p>
                <h4 class="page-intro-title">Edit & Publish Circular</h4>
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
            <button type="button" class="publish-action-button ppab-green publish-button" onclick="handlePublishCircular()">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                </svg>
                <span>Publish</span>
            </button>
        </div>
    </header>

    <!-- section:: main  -->
    <main class="container-width">
        <!--section:: main container -->
        <section class="published-main-container">

            <!-- step-1 basic information  -->
            <div class="circular-info-container">
                <!-- step container header  -->
                <div class="info-container-header">
                    <div class="info-header-serial">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-number-1-small">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M11 8h1v8" />
                        </svg>
                    </div>
                    <div class="info-header-content">
                        <h4 class="info-header-title">Basic Information</h4>
                        <p class="info-header-text">The position title and reference used across the circular</p>
                    </div>
                </div>

                <!-- input field container  -->
                <div class="circular-action-input-container">
                    <!-- circular designation title  -->
                    <div class="circular-input-container input-field-full">
                        <label for="circular-designation-title" class="circular-input-label">
                            Circular / position title
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input type="text" name="circular_designation_title" value="<?php echo $circular_data['circular_title']; ?>" id="circular-designation-title" class="circular-input-field">
                    </div>

                    <!-- circular designation category  -->
                    <div class="circular-input-container">
                        <label for="circular-designation-category" class="circular-input-label">
                            Designation Category
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input type="text" name="circular_designation_category" value="<?php echo $circular_data['designation_category']; ?>" id="circular-designation-category" class="circular-input-field">
                        <p class="field-suggest-text">Short form only. e.g: CO/SCO/AO/BM/APM/DPM/PM/AD/DD/DIR</p>
                    </div>

                    <!-- circular available Position  -->
                    <div class="circular-input-container">
                        <label for="circular-available-position" class="circular-input-label">
                            available Position
                            <span style="color:#8fa19a; font-size:0.8rem; font-weight: 400;">(only number)</span>
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input type="text" name="circular_available_position" value="<?php echo $circular_data['available_vacancy']; ?>" id="circular-available-position" class="circular-input-field">
                    </div>

                    <!-- Employment Type  -->
                    <div class="circular-input-container">
                        <label for="circular-id" class="circular-input-label">
                            Employment Type
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <select name="employment_type" id="employment-type" class="circular-input-field">
                            <option value="">Select Employment Type</option>
                            <option value="1" <?php if ($circular_data['employment_type'] == '1') echo 'selected'; ?>>Regular</option>
                            <option value="2" <?php if ($circular_data['employment_type'] == '2') echo 'selected'; ?>>Contractual</option>
                            <option value="3" <?php if ($circular_data['employment_type'] == '3') echo 'selected'; ?>>Intern</option>
                            <option value="4" <?php if ($circular_data['employment_type'] == '4') echo 'selected'; ?>>Part Time</option>
                        </select>
                    </div>

                    <!-- circular id  -->
                    <div class="circular-input-container">
                        <label for="circular-id" class="circular-input-label">
                            Circular ID
                            <span style="color:#8fa19a; font-size:0.8rem; font-weight: 400;">(auto-generated)</span>
                        </label>
                        <input type="text" name="circular_id" value="<?php echo $circular_data['circular_id']; ?>" id="circular-id" class="circular-input-field" disabled>
                        <p class="field-suggest-text">Unique circular reference, like: BM20260001</p>
                    </div>
                </div>
            </div>

            <!-- step-2 publish date  -->
            <div class="circular-info-container">
                <!-- step container header  -->
                <div class="info-container-header">
                    <div class="info-header-serial">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-number-2-small">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 8h3a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h3" />
                        </svg>
                    </div>
                    <div class="info-header-content">
                        <h4 class="info-header-title">Dates & visibility</h4>
                        <p class="info-header-text">
                            When this circular is published and when applications close</p>
                    </div>
                </div>

                <!-- input field container  -->
                <div class="circular-action-input-container">
                    <!-- Job location  -->
                    <div class="circular-input-container input-field-full">
                        <label for="job-location" class="circular-input-label">
                            Job Location
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input type="text" name="job_location" value="<?php echo $circular_data['job_location']; ?>" id="job-location" class="circular-input-field">
                    </div>

                    <!-- circular publish date  -->
                    <div class="circular-input-container">
                        <label for="circular-publish-date" class="circular-input-label">
                            Circular Publish Date
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input onfocus="this.showPicker()" type="date" name="circular_publish_date" id="circular-publish-date" class="circular-input-field" value="<?php echo $circular_data['circular_publish_date']; ?>">
                    </div>

                    <!-- circular deadline date  -->
                    <div class="circular-input-container">
                        <label for="circular-application-deadline" class="circular-input-label">
                            Circular Deadline Date
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input onfocus="this.showPicker()" type="date" name="circular_application_deadline" id="circular-application-deadline" class="circular-input-field" value="<?php echo $circular_data['application_deadline']; ?>">
                    </div>
                </div>
            </div>

            <!-- step-3 compensation & age information  -->
            <div class="circular-info-container">
                <!-- step container header  -->
                <div class="info-container-header">
                    <div class="info-header-serial">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-number-3-small">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 8h2.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1 -1.5 1.5h-1.5h1.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1 -1.5 1.5h-2.5" />
                        </svg>
                    </div>
                    <div class="info-header-content">
                        <h4 class="info-header-title">compensation & Age Limit</h4>
                        <p class="info-header-text">age limits and salary shown to applicants</p>
                    </div>
                </div>

                <!-- input field container  -->
                <div class="circular-action-input-container">
                    <!--  probation period Salary -->
                    <div class="circular-input-container">
                        <label for="circular-probation-salary" class="circular-input-label">
                            Probation Period Salary
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input type="text" name="circular_probation_salary" value="<?php echo $circular_data['probation_salary']; ?>" id="circular-probation-salary" class="circular-input-field">
                        <p class="field-suggest-text">Enter the probation period salary.</p>
                    </div>

                    <!-- gross salary  -->
                    <div class="circular-input-container">
                        <label for="circular-gross-salary" class="circular-input-label">
                            Gross Salary
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input type="text" name="circular_gross_salary" value="<?php echo $circular_data['gross_salary']; ?>" id="circular-gross-salary" class="circular-input-field">
                        <p class="field-suggest-text">Specify the gross salary after confirmation (including PF)</p>
                    </div>

                    <!-- Min & Max Age  -->
                    <div class="circular-input-container">
                        <label for="circular-min-age" class="circular-input-label">
                            Min Age
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input type="number" name="circular_min_age" value="<?php echo $circular_data['min_age']; ?>" min="18" id="circular-min-age" class="circular-input-field">
                    </div>

                    <!--  Max Age  -->
                    <div class="circular-input-container">
                        <label for="circular-max-age" class="circular-input-label">
                            Max Age
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input type="number" name="circular_max_age" value="<?php echo $circular_data['max_age']; ?>" min="18" id="circular-max-age" class="circular-input-field">
                    </div>

                    <!-- age deadline   -->
                    <div class="circular-input-container input-field-full">
                        <label for="circular-age-deadline" class="circular-input-label">
                            Age Deadline
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <input onfocus="this.showPicker()" type="date" name="circular_age_deadline" id="circular-age-deadline" class="circular-input-field" value="<?php echo $circular_data['age_deadline']; ?>">
                    </div>
                </div>
            </div>

            <!-- step-4 Qualification information  -->
            <div class="circular-info-container">
                <!-- step container header  -->
                <div class="info-container-header">
                    <div class="info-header-serial">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-number-4-small">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 8v3a1 1 0 0 0 1 1h3" />
                            <path d="M14 8v8" />
                        </svg>
                    </div>
                    <div class="info-header-content">
                        <h4 class="info-header-title">Eligibility, Experience & Responsibility</h4>
                        <p class="info-header-text">Qualification, experience, skilled and responsibility shown to applicants</p>
                    </div>
                </div>

                <!-- input field container  -->
                <div class="circular-action-input-container">
                    <!-- Educational qualification  -->
                    <div class="circular-input-container input-field-full">
                        <label for="circular-education-requirement" class="circular-input-label">
                            Circular Description
                            <span style="color:red; pointer-events: none;  user-select: none;">*</span>
                        </label>
                        <textarea name="circular_description" id="circular-description" class="circular-input-field"><?php echo $circular_data['circular_description']; ?></textarea>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script>
        $(document).ready(function() {
            $('#circular-description').summernote({
                placeholder: 'Write the job description...',
                height: 350,
                tabsize: 2,

                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview']]
                ],

                callbacks: {
                    onPaste: function(e) {
                        e.preventDefault();

                        const text = (e.originalEvent || e).clipboardData.getData('text/plain');

                        document.execCommand('insertText', false, text);

                        // Add default classes after the paste is complete
                        setTimeout(() => {
                            const $editable = $(this).next('.note-editor').find('.note-editable');

                            $editable.find('p').addClass('vacancy-info-description');
                            $editable.find('h1').addClass('vacancy-info-title');
                            $editable.find('h2').addClass('vacancy-info-title');
                            $editable.find('h3').addClass('vacancy-info-title');
                            $editable.find('h4').addClass('vacancy-info-title');
                            $editable.find('h5').addClass('vacancy-info-title');
                            $editable.find('h6').addClass('vacancy-info-title');
                            $editable.find('ul').addClass('vacancy-info-list');
                            $editable.find('ol').addClass('vacancy-info-list');
                        }, 0);
                    },

                    onChange: function(contents, $editable) {
                        $editable.find('p').addClass('vacancy-info-description');
                        $editable.find('h1').addClass('vacancy-info-title');
                        $editable.find('h2').addClass('vacancy-info-title');
                        $editable.find('h3').addClass('vacancy-info-title');
                        $editable.find('h4').addClass('vacancy-info-title');
                        $editable.find('h5').addClass('vacancy-info-title');
                        $editable.find('h6').addClass('vacancy-info-title');
                        $editable.find('ul').addClass('vacancy-info-list');
                        $editable.find('ol').addClass('vacancy-info-list');
                    }
                }
            });
        });
    </script>

    <!-- Linked custom script  -->
    <script src="../js/edit_publish_circular.js"></script>
</body>

</html>