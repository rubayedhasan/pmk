<?php
require_once("../db/dbconnect.php");
$dbConnection = $conn;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid Request");
}

$circular_id = $_POST["circular_id"] ?? "";

// Fetch all
if ($circular_id == "") {

    // $query = "SELECT
    //             cgi.*,
    //             pc.circular_title
    //         FROM candidate_general_information cgi
    //         INNER JOIN publish_circular pc
    //             ON cgi.circular_id = pc.circular_id
    //         WHERE cgi.applicant_status = 1
    //         ORDER BY cgi.id DESC";

    $query = "SELECT
            cgi.*,
            pc.circular_title,
            pc.age_deadline,

            ca.per_division,
            ca.per_district,
            ca.per_upazilla,
            ca.per_post,
            ca.per_post_code,
            ci.date_of_birth,

            -- GROUP_CONCAT(
            --     DISTINCT ce.edu_institution
            --     ORDER BY ce.id
            --     SEPARATOR ' | '
            -- ) AS edu_institutions

              /* Latest Bachelor's / Master's / PhD */
        ce.edu_examination,
        ce.edu_institution,
        ce.edu_msubject,
        ce.board_university,
        ce.academic_year,
        ce.result

        FROM candidate_general_information AS cgi

        INNER JOIN publish_circular AS pc
            ON cgi.circular_id = pc.circular_id

        -- LEFT JOIN candidate_education AS ce
        --     ON ce.user_id = cgi.user_id
        --     AND ce.circular_id = cgi.circular_id

        LEFT JOIN candidate_education AS ce
        ON ce.user_id = cgi.user_id
        AND ce.circular_id = cgi.circular_id

        /* Only Bachelor's, Master's or PhD */
        AND LOWER(ce.edu_examination) IN (
            'bachelor',
            'bachelor''s',
            'bachelors',
            'master',
            'master''s',
            'masters',
            'phd',
            'ph.d',
            'doctorate'
        )

        /* Get the latest one */
        AND ce.id = (
            SELECT MAX(ce2.id)
            FROM candidate_education AS ce2
            WHERE ce2.user_id = cgi.user_id
                AND ce2.circular_id = cgi.circular_id
                AND LOWER(ce2.edu_examination) IN (
                    'bachelor',
                    'bachelor''s',
                    'bachelors',
                    'master',
                    'master''s',
                    'masters',
                    'phd',
                    'ph.d',
                    'doctorate'
                )
        )

        LEFT JOIN candidate_identity AS ci
            ON ci.user_id = cgi.user_id
            AND ci.circular_id = cgi.circular_id

        LEFT JOIN candidate_address AS ca
            ON ca.user_id = cgi.user_id
            AND ca.circular_id = cgi.circular_id

        WHERE cgi.applicant_status = 0

        GROUP BY cgi.id

        ORDER BY cgi.id DESC";
} else {

    // $query = "SELECT
    //             cgi.*,
    //             pc.circular_title
    //         FROM candidate_general_information cgi
    //         INNER JOIN publish_circular pc
    //             ON cgi.circular_id = pc.circular_id
    //         WHERE cgi.circular_id='$circular_id'
    //         AND cgi.applicant_status=1
    //         ORDER BY cgi.id DESC";

    $query = "SELECT
            cgi.*,
            pc.circular_title,
            pc.age_deadline,

            ca.per_division,
            ca.per_district,
            ca.per_upazilla,
            ca.per_post,
            ca.per_post_code,
            ci.date_of_birth,

            -- GROUP_CONCAT(
            --     DISTINCT ce.edu_institution
            --     ORDER BY ce.id
            --     SEPARATOR ' | '
            -- ) AS edu_institutions

              /* Latest Bachelor's / Master's / PhD */
        ce.edu_examination,
        ce.edu_institution,
        ce.edu_msubject,
        ce.board_university,
        ce.academic_year,
        ce.result

        FROM candidate_general_information AS cgi

        INNER JOIN publish_circular AS pc
            ON cgi.circular_id = pc.circular_id

        -- LEFT JOIN candidate_education AS ce
        --     ON ce.user_id = cgi.user_id
        --     AND ce.circular_id = cgi.circular_id

        LEFT JOIN candidate_education AS ce
        ON ce.user_id = cgi.user_id
        AND ce.circular_id = cgi.circular_id

        /* Only Bachelor's, Master's or PhD */
        AND LOWER(ce.edu_examination) IN (
            'bachelor',
            'bachelor''s',
            'bachelors',
            'master',
            'master''s',
            'masters',
            'phd',
            'ph.d',
            'doctorate'
        )

        /* Get the latest one */
        AND ce.id = (
            SELECT MAX(ce2.id)
            FROM candidate_education AS ce2
            WHERE ce2.user_id = cgi.user_id
                AND ce2.circular_id = cgi.circular_id
                AND LOWER(ce2.edu_examination) IN (
                    'bachelor',
                    'bachelor''s',
                    'bachelors',
                    'master',
                    'master''s',
                    'masters',
                    'phd',
                    'ph.d',
                    'doctorate'
                )
        )

        LEFT JOIN candidate_identity AS ci
            ON ci.user_id = cgi.user_id
            AND ci.circular_id = cgi.circular_id

        LEFT JOIN candidate_address AS ca
            ON ca.user_id = cgi.user_id
            AND ca.circular_id = cgi.circular_id

        WHERE cgi.circular_id = '$circular_id'
            AND cgi.applicant_status = 0

        GROUP BY cgi.id

        ORDER BY cgi.id DESC";
}

$candidates = $dbConnection->query($query)->fetch_all(MYSQLI_ASSOC);

/*
|--------------------------------------------------------------------------
| Get all job experiences for this circular
|--------------------------------------------------------------------------
*/
$experienceQuery = "SELECT * FROM candidate_job_experience WHERE circular_id = '$circular_id' ORDER BY user_id, from_date ASC, ID ASC";
$experiences = $dbConnection->query($experienceQuery)->fetch_all(MYSQLI_ASSOC);

/*
|--------------------------------------------------------------------------
| Group experience by user_id
|--------------------------------------------------------------------------
*/

$experienceByUser = [];
foreach ($experiences as $experience) {
    $userId = $experience['user_id'];

    if (!isset($experienceByUser[$userId])) {
        $experienceByUser[$userId] = [];
    }

    $experienceByUser[$userId][] = $experience;
}

/*
|--------------------------------------------------------------------------
| Attach experience to each candidate
|--------------------------------------------------------------------------
*/

foreach ($candidates as $index => $candidate) {
    $userId = $candidate['user_id'];

    $candidates[$index]["experiences"] =
        $experienceByUser[$userId] ?? [];
}


/*
|--------------------------------------------------------------------------
| Return JSON
|--------------------------------------------------------------------------
*/

header("Content-Type: application/json; charset=UTF-8");

echo json_encode(
    $candidates,
    JSON_UNESCAPED_UNICODE
);
