<?php
// database connection 
require_once('../db_auth/db_global.php');

// only accept post method request 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid Request");
}

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

echo json_encode($branches);

// close database connection 
mysqli_close($conn_ad);
