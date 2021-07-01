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
    <title><?= $title_constant; ?> | View Countries</title>

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
                        <h1 class="page-header-title">Countries</h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal"> <i class="tio-add-circle mr-1"></i> Add Country </a>
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
                                <h5 class="card-header-title">Countries</h5>

                                <!-- Datatable Info -->
                                <div id="datatableCounterInfo" style="display: none;">
                                    <div class="d-flex align-items-center">
                                        <span class="font-size-sm mr-3">
                                            <span id="datatableCounter">0</span>
                                            Selected
                                        </span>
                                        <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                                            <i class="tio-delete-outlined"></i> Delete
                                        </a>
                                    </div>
                                </div>
                                <!-- End Datatable Info -->
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
                                            <input id="countrySearch" type="search" class="form-control" placeholder="Search Country" aria-label="Search Country" />
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
                        "search": "#countrySearch",
                        "isResponsive": true,
                        "isShowPaging": true,
                        "pagination": "countryListPagination"
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
                                    <th class="sorting" tabindex="0" aria-label="SL">Country Name</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">Country Demographics</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="SL">Country Flag</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">Country Currency</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="SL">Country Dial Code</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">Country Lat-Long</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">Country Population</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">Country Official Language</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">Country Capital</th>

                                </tr>
                            </thead>

                            <tbody style="text-align: center; align-items:center;">
                                <?php

                                //Fetch Country List
                                $getCountryList = "SELECT * FROM `we_country_list` WHERE `we_country_status` = 1";
                                $fetchCountryList = $db_conn->query($getCountryList);
                                $count = 1;
                                while ($showCountryList = $fetchCountryList->fetch_assoc()) {
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
                                            <?= $showCountryList['we_country_id']; ?>
                                        </td>
                                        <td>

                                            <!-- Start Edit Action -->
                                            <a class="btn btn-icon btn-soft-primary rounded-circle mr-2" href="<?= $router->generate('country-edit') . $showCountryList['we_country_id']; ?>" data-toggle="tooltip" data-html="true" title="Edit Country">
                                                <i class="tio-edit"></i>
                                            </a>
                                            <!-- End Edit Action -->

                                            <!-- View Action -->
                                            <a class="btn btn-icon btn-soft-primary rounded-circle mr-2" href="" data-toggle="tooltip" data-html="true" title="View Country">
                                                <i class="tio-visible-outlined"></i>
                                            </a>
                                            <!-- End View Action -->

                                        </td>
                                        <td>
                                            <a class="media align-items-center" href="./user-profile.html">
                                                <div class="media-body">
                                                    <span class="h5 text-hover-primary mb-0"><?= $showCountryList['we_country_name']; ?></span>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <span class="new">
                                                <?= $showCountryList['we_country_demographics']; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle mr-3">
                                                <img class="avatar-img" src="<?= $showCountryList['we_country_flag_icon']; ?>" alt="Image Description">
                                            </div>
                                        </td>
                                        <td><b><?= $showCountryList['we_country_currency']; ?></b></td>
                                        <td>+<?= $showCountryList['we_country_dial_code']; ?></td>
                                        <td><?= $showCountryList['we_country_lat_long']; ?></td>
                                        <td><?= $showCountryList['we_country_population']; ?></td>
                                        <td><?= $showCountryList['we_country_official_language']; ?></td>
                                        <td><?= $showCountryList['we_country_capital']; ?></td>
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
                        <nav id="countryListPagination" aria-label="Activity pagination"></nav>
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