<?php
// database connection 
require_once('../db_auth/db_global.php');

if (isset($_GET['branch_code'])) {
    $branch_code = $_GET['branch_code'];

    // QUERY:: get all branch
    $get_branches_query = "SELECT ob.*,
ad.division_name,
adc.disctrict_name,
upz.upazilla_name,
oar.area_name,
orgn.region_name,
ozn.zone_name
FROM office_branch AS ob

LEFT JOIN area_division AS ad
ON ob.division_code = ad.division_code

LEFT JOIN area_district AS adc
ON ob.district_code = adc.district_code

LEFT JOIN area_upazilla AS upz
ON ob.upazilla_code = upz.upazilla_code

LEFT JOIN office_area AS oar
ON ob.area_code = oar.area_code

LEFT JOIN office_region AS orgn
ON ob.region_code = orgn.region_code

LEFT JOIN office_zone AS ozn
ON ob.zone_code = ozn.zone_code

 WHERE branch_code = '$branch_code'";
    $branch = $conn_ad->query($get_branches_query)->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find complete information about this branch, including branch code, address, phone, email, district, division, location, and contact details.">
    <title>PMK | Branch</title>
    <?php include('../includes/sharedLinks.php'); ?>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/branch.css">
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
                <div class="branch-intro-container">
                    <div class="br-intro-meta">
                        <div class="br-meta br-code">
                            <?php echo $branch['branch_code'] ?? "N/A"; ?>
                        </div>
                        <div class="br-meta br-division">
                            <?php echo $branch['division_name'] ?? "N/A"; ?>
                            Division
                        </div>
                        <div class="br-meta br-status">
                            <span class="active-dot"></span>
                            Open Now
                        </div>
                    </div>

                    <div class="branch-self-container">
                        <div class="branch-self">
                            <h3 class="branch-name">
                                <?php
                                echo $branch['branch_name'] ?? "N/A";
                                echo $branch['branch_code'] !== '000' ? " Branch" : "";
                                ?>
                            </h3>
                            <p class="branch-text">
                                <?php echo $branch['upazilla_name'] ?? "N/A"; ?> Upazilla,
                                <?php echo $branch['disctrict_name'] ?? "N/A"; ?> District
                            </p>
                        </div>
                        <div class="action-buttons">
                            <a href="tel:<?php echo $branch['mobile_no'] ?? "N/A"; ?>" type="button" class="action-btn cta-call">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone-call">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                    <path d="M15 7a2 2 0 0 1 2 2" />
                                    <path d="M15 3a6 6 0 0 1 6 6" />
                                </svg>
                                Call Branch
                            </a>
                            <a href="https://www.google.com/maps?q=<?php echo $branch['loc_latitute'] ?? '0'; ?>,<?php echo $branch['loc_longitute'] ?? '0'; ?>" target="_blank" type="button" class="action-btn cta-direction">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                                get directions
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- section:: branch details main container  -->
        <section class="br-details-main-container">
            <div class="container-width">
                <div class="br-details-container">
                    <!-- sub-section:: branch address and contact  -->
                    <div class="br-address-contact-container">
                        <!-- branch address and contact  -->
                        <div class="br-detail-container">
                            <h4 class="br-detail-title">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                                Location and contact
                            </h4>

                            <!-- address  -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-smart-home">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" />
                                        <path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" />
                                    </svg>
                                    Address
                                </div>
                                <div class="detail-value">
                                    <?php echo $branch['address'] ?? "N/A"; ?>
                                </div>
                            </div>

                            <!-- phone  -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                    </svg>
                                    Phone
                                </div>
                                <div class="detail-value">
                                    <a href="tel:<?php echo $branch['mobile_no'] ?? "N/A"; ?>" class="detail-value-link">
                                        <?php echo $branch['mobile_no'] ?? "N/A"; ?>
                                    </a>
                                </div>
                            </div>

                            <!-- email  -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                        <path d="M3 7l9 6l9 -6" />
                                    </svg>
                                    Email
                                </div>
                                <div class="detail-value">
                                    <a href="mailto:<?php echo $branch['email_id'] ?? "N/A"; ?>" class="detail-value-link">
                                        <?php echo $branch['email_id'] ?? "N/A"; ?>
                                    </a>
                                </div>
                            </div>

                            <!-- opening date  -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                        <path d="M16 3v4" />
                                        <path d="M8 3v4" />
                                        <path d="M4 11h16" />
                                        <path d="M7 14h.013" />
                                        <path d="M10.01 14h.005" />
                                        <path d="M13.01 14h.005" />
                                        <path d="M16.015 14h.005" />
                                        <path d="M13.015 17h.005" />
                                        <path d="M7.01 17h.005" />
                                        <path d="M10.01 17h.005" />
                                    </svg>
                                    Established
                                </div>
                                <div class="detail-value">
                                    <?php
                                    echo !empty($branch['branch_op_date'])
                                        ? date('d F Y', strtotime($branch['branch_op_date']))
                                        : 'N/A';
                                    ?>
                                </div>
                            </div>

                            <!-- location  -->
                            <div class="detail-row">
                                <?php if (!empty($branch['loc_latitute']) && !empty($branch['loc_longitute'])): ?>
                                    <iframe
                                        src="https://www.google.com/maps?q=<?php echo $branch['loc_latitute']; ?>,<?php echo $branch['loc_longitute']; ?>&output=embed"
                                        class="branch-location"
                                        allowfullscreen
                                        loading="lazy"
                                        referrerpolicy="strict-origin-when-cross-origin">
                                    </iframe>
                                <?php else: ?>
                                    <div class="branch-location no-map">
                                        <span>Google Maps location will be added soon.</span>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>

                        <!-- branch services  -->
                        <div class="br-detail-container">
                            <h4 class="br-detail-title">
                                <svg style="transform: rotate(90deg);" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mobiledata">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M16 12v-8" />
                                    <path d="M8 20v-8" />
                                    <path d="M13 7l3 -3l3 3" />
                                    <path d="M5 17l3 3l3 -3" />
                                </svg>
                                Services offered
                            </h4>

                            <!-- services  -->
                            <div class="detail-row services">
                                <span class="offered">Compulsory Savings</span>
                                <span class="offered">Voluntary Savings</span>
                                <span class="offered">Monthly Savings Project</span>
                                <span class="offered">Fixed Beneficiary Scheme</span>
                                <span class="offered">Different Types of Loans</span>
                            </div>
                        </div>
                    </div>

                    <!-- sub-section:: branch area details container  -->
                    <aside class="br-area-details-container">
                        <!-- branch coverage details  -->
                        <div class="br-detail-container br-coverage">
                            <h4 class="br-detail-title">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-community">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                                    <path d="M13 7l0 .01" />
                                    <path d="M17 7l0 .01" />
                                    <path d="M17 11l0 .01" />
                                    <path d="M17 15l0 .01" />
                                </svg>
                                Branch Coverage
                            </h4>

                            <!-- branch code  -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-blocks">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 4a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1l0 -5" />
                                        <path d="M3 14h12a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h3a2 2 0 0 1 2 2v12" />
                                    </svg>
                                    Branch Code
                                </div>
                                <div class="detail-value">
                                    <?php
                                    echo $branch['branch_code'] ?? "N/A";
                                    ?>
                                </div>
                            </div>

                            <!-- branch Name  -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-blocks">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 4a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1l0 -5" />
                                        <path d="M3 14h12a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h3a2 2 0 0 1 2 2v12" />
                                    </svg>
                                    Branch Name
                                </div>
                                <div class="detail-value">
                                    <?php echo $branch['branch_name'] ?? "N/A"; ?>
                                </div>
                            </div>

                            <!-- Area  -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-blocks">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 4a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1l0 -5" />
                                        <path d="M3 14h12a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h3a2 2 0 0 1 2 2v12" />
                                    </svg>
                                    Area
                                </div>
                                <div class="detail-value">
                                    <?php echo $branch['area_name'] ?? "N/A"; ?>
                                </div>
                            </div>

                            <!-- Region -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-blocks">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 4a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1l0 -5" />
                                        <path d="M3 14h12a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h3a2 2 0 0 1 2 2v12" />
                                    </svg>
                                    Region
                                </div>
                                <div class="detail-value">
                                    <?php echo $branch['region_name'] ?? "N/A"; ?>
                                </div>
                            </div>

                            <!-- Zone -->
                            <div class="detail-row">
                                <div class="detail-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-blocks">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 4a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1l0 -5" />
                                        <path d="M3 14h12a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h3a2 2 0 0 1 2 2v12" />
                                    </svg>
                                    Zone
                                </div>
                                <div class="detail-value">
                                    <?php echo $branch['zone_name'] ?? "N/A"; ?>
                                </div>
                            </div>

                        </div>

                        <!-- working hours  -->
                        <div class="br-detail-container working-hours">
                            <h4 class="br-detail-title">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clock-hour-3">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M12 12h3.5" />
                                    <path d="M12 7v5" />
                                </svg>
                                Working hours
                            </h4>

                            <!-- work time  -->
                            <div class="detail-row">
                                <div class="detail-label">Sunday – Thursday</div>
                                <div class="detail-value">9:00 AM – 5:00 PM</div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-label">Friday – Saturday</div>
                                <div class="detail-value closed">Closed</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <?php
    // Linked section:: Footer
    include("../includes/footer.php");
    ?>
</body>

</html>

<?php mysqli_close($conn_ad); ?>