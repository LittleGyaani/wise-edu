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
    <title><?= $title_constant; ?> | Universities</title>

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
                        <h1 class="page-header-title">University Profiles</h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal"> <i class="tio-add-circle mr-1"></i> Add University </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- University List -->
            <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-12 col-md">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">University Profiles</h5>
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
                                            <input id="universityList" type="search" class="form-control" placeholder="Search University" aria-label="Search Univesity" />
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
                        <table id="datatable" class="table exportOptionsDatatables universityList table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer" role="grid" aria-describedby="datatable_info" data-hs-datatables-options='{
                        "search": "#universityList",
                        "isResponsive": true,
                        "isShowPaging": true,
                        "pagination": "universityListPagination"
                    }'>
                            <thead class="thead-light" style="text-align: left; align-items:center;">
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
                                    <th class="sorting" tabindex="0" aria-label="SL">University Name</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">University Type</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">University Program</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="SL">University Course</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">University Course Language</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">University Course Duration</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">University Course Fee</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">University Data Added</th>
                                    <th class="sorting_disabled" tabindex="0" aria-label="ID">University Data Updated</th>
                                </tr>
                            </thead>

                            <tbody style="text-align: left; align-items:center;">
                                <?php
                                //Fetch University List
                                $getUniversityList = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wud.`we_university_id` = wul.`we_univeristy_id` WHERE wul.`we_univeristy_id` = wud.`we_university_id` AND wul.`we_univeristy_status` = 1";
                                $fetchUniversityList = $db_conn->query($getUniversityList);
                                $count = 1;
                                while ($showUniversityList = $fetchUniversityList->fetch_assoc()) {
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
                                            <?= $showUniversityList['we_university_id']; ?>
                                        </td>
                                        <td>

                                            <!-- Start Edit Action -->
                                            <a class="btn btn-icon btn-soft-primary rounded-circle mr-2" href="<?= $router->generate('university-edit') . $showUniversityList['we_university_data_id']; ?>" data-toggle="tooltip" data-html="true" title="Edit University">
                                                <i class="tio-edit"></i>
                                            </a>
                                            <!-- End Edit Action -->

                                            <!-- View Action -->
                                            <a class="btn btn-icon btn-soft-primary rounded-circle mr-2" href="" data-toggle="tooltip" data-html="true" title="View University">
                                                <i class="tio-visible-outlined"></i>
                                            </a>
                                            <!-- End View Action -->

                                        </td>
                                        <td>
                                            <a class="media align-items-center" href="javascript:void(0);">
                                                <div class="media-body">
                                                    <span class="h5 text-hover-primary mb-0"><?= $showUniversityList['we_univeristy_name']; ?></span>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <?= $showUniversityList['we_university_data_university_type']; ?>
                                        </td>
                                        <td>
                                            <?= strtoupper(str_replace('-', ' ', $showUniversityList['we_university_data_program_type'])); ?>
                                        </td>
                                        <td><b><?= $showUniversityList['we_university_data_course_offered']; ?></b></td>
                                        <td><?= $showUniversityList['we_university_data_course_language']; ?></td>
                                        <td><?= $showUniversityList['we_university_data_course_duration']; ?></td>
                                        <td><?= $showUniversityList['we_university_data_course_fee']; ?></td>
                                        <td><?= $showUniversityList['we_university_data_added_at']; ?></td>
                                        <td><?= $showUniversityList['we_university_data_updated_at']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Table -->

                <!-- Footer -->
                <div class="card-footer">
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center justify-content-sm-end">
                        <nav id="universityListPagination" aria-label="Activity pagination"></nav>
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End University List -->

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