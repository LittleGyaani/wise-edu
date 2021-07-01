<?php
//Calling Global Configuration
require_once 'app/config/global.config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Include Meta Section -->
    <?php
    //Calling Meta Template
    include_once 'app/assets/templates/template-meta.php';
    ?>

    <!-- Title -->
    <title><?= $title_constant; ?> | View Locations</title>

    <?php
    //Calling Header Section
    include_once 'app/assets/templates/template-header.php';
    ?>

</head>

<body class="footer-offset footer-offset has-navbar-vertical-aside navbar-vertical-aside-show-xl">

    <!-- ========== HEADER ========== -->

    <?php
    //Calling Sidebar Section
    include_once 'app/assets/templates/template-navigation.php';
    ?>

    <!-- ========== END HEADER ========== -->

    <!-- ========== START NAVIGATION ========== -->

    <?php
    //Calling Sidebar Section
    include_once 'app/assets/templates/template-sidebar.php';
    ?>

    <!-- ========== END NAVIGATION ========== -->

    <!-- ========== START MAIN ========== -->
    <main id="content" role="main" class="main pointer-event">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Locations</h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal"> <i class="tio-add-circle mr-1"></i> Add Location </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Country List -->
            <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-12 col-md">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Location</h5>
                            </div>
                        </div>

                        <div class="col-auto">
                            <!-- Filter -->
                            <div class="row align-items-sm-center">
                                <div class="col-md">
                                    <form action="javascript:void(0);" method="" enctype="multipart/form-data">
                                        <!-- Search -->
                                        <div class="input-group input-group-merge input-group-flush">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tio-search"></i>
                                                </div>
                                            </div>
                                            <input id="locationSearch" type="search" class="form-control" placeholder="Search Location" aria-label="Search Location" />
                                        </div>
                                        <!-- End Search -->
                                    </form>
                                </div>
                            </div>
                            <!-- End Filter -->
                        </div>
                    </div>
                </div>
                <!-- End Header -->

                <!-- Table -->
                <div class="table-responsive datatable-custom">
                    <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer" role="grid" aria-describedby="datatable_info" data-hs-datatables-options='{
                        "search": "#locationSearch",
                        "isResponsive": true,
                        "isShowPaging": true,
                        "pagination": "locationListPagination"
                            }'>
                            <thead class="thead-light" style="text-align: center; align-items:center;">
                                <tr role="row">
                                    <!-- <th scope="col" class="table-column-pr-0 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 31.7812px;">
                                        <div class="custom-control custom-checkbox">
                                            <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label" for="datatableCheckAll"></label>
                                        </div>
                                    </th> -->
                                    <th class="sorting_disabled" tabindex="0" aria-label="SL">SL</th>
                                    <th class="sorting" tabindex="0" aria-label="ID">ID</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="SL">Action</th>
                                    <th class="sorting" tabindex="0" aria-label="SL">Location Name</th>
                                    <th class="sorting" tabindex="0" aria-label="SL">Location Demographics</th>
                                    <th class="sorting" tabindex="0" aria-label="SL">Location Country</th>
                                    <th class="sorting" tabindex="0" aria-label="SL">Location Added At</th>
                                    <th class="sorting" tabindex="0" aria-label="SL">Location Updated At</th>
                                    <th class="sorting" tabindex="0" aria-label="SL">Location Added By</th>
                                    <th class="sorting" tabindex="0" aria-label="SL">Location Status</th>
                                </tr>
                            </thead>

                            <tbody style="text-align: left; align-items:center;">
                                <?php

                                //Fetch Locations List
                                $getLocationList = "SELECT * FROM `we_location_list` wll JOIN `we_country_list` wcl ON wll.`we_location_country_id` = wcl.`we_country_id` WHERE wll.`we_location_status` = 1";
                                $fetchLocationList = $db_conn->query($getLocationList);
                                $count = 1;
                                while ($showLocationList = $fetchLocationList->fetch_assoc()) {
                                ?>
                                    <tr role="row" class="even">
                                        <!-- <td class="table-column-pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                                                <label class="custom-control-label" for="usersDataCheck2"></label>
                                            </div>
                                        </td> -->
                                        <td>
                                            <?= $count++; ?>
                                        </td>
                                        <td>
                                            <?= $showLocationList['we_location_id']; ?>
                                        </td>
                                        <td>

                                            <!-- Start Edit Action -->
                                            <a class="btn btn-icon btn-soft-primary rounded-circle mr-2" href="<?= $router->generate('country-edit') . $showLocationList['we_country_id']; ?>" data-toggle="tooltip" data-html="true" title="Edit Location">
                                                <i class="tio-edit"></i>
                                            </a>
                                            <!-- End Edit Action -->

                                            <!-- View Action -->
                                            <a class="btn btn-icon btn-soft-primary rounded-circle mr-2" href="" data-toggle="tooltip" data-html="true" title="View Location">
                                                <i class="tio-visible-outlined"></i>
                                            </a>
                                            <!-- End View Action -->

                                        </td>
                                        <td>
                                            <a class="media align-items-left" href="javascript:void(0);">
                                                <div class="media-body">
                                                    <span class="h5 text-hover-primary mb-0"><?= $showLocationList['we_location_name']; ?></span>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <span class="new">
                                                <?= $showLocationList['we_location_description']; ?>
                                            </span>
                                        </td>
                                        <td><?= $showLocationList['we_country_name']; ?></td>
                                        <td><b><?= $showLocationList['we_location_details_added_at']; ?></b></td>
                                        <td><?= $showLocationList['we_location_details_updated_at']; ?></td>
                                        <td><?= (($showLocationList['we_location_details_added_by'] == 1) ? 'Admin' : 'None'); ?></td>
                                        <td><?= (($showLocationList['we_location_status'] != 1) ? 'Inactive' : 'Active'); ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 8 of 17 entries</div>
                    </div>
                </div>
                <!-- End Table -->

                <!-- Footer -->
                <div class="card-footer">
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center justify-content-sm-end">
                        <nav id="locationListPagination" aria-label="Activity pagination"></nav>
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Country List -->

        </div>
        <!-- End Content -->

        <!-- ========== START FOOTER ========== -->
        <?php
        //Optional Call
        include_once 'app/assets/templates/template-footer.php';
        ?>
        <!-- ========== END FOOTER ========== -->

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <?php
    //Optional Call
    //include_once '';//template-misc
    ?>
    <!-- ========== END SECONDARY CONTENTS ========== -->

</body>

</html>

<!-- ========== START SCRIPT SECTION ========== -->

<!-- Include Scripts -->
<?php
//Calling Scripts Template
include_once 'app/assets/templates/template-scripts.php';
?>

<!-- ========== END SCRIPT SECTION ========== -->