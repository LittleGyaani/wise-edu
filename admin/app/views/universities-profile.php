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
    <title><?= $title_constant; ?> | View Universities Profile</title>

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

                                <!-- Datatable Info -->
                                <!-- <div id="datatableCounterInfo" style="display: none;">
                                    <div class="d-flex align-items-center">
                                        <span class="font-size-sm mr-3">
                                            <span id="datatableCounter">0</span>
                                            Selected
                                        </span>
                                        <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                                            <i class="tio-delete-outlined"></i> Delete
                                        </a>
                                    </div>
                                </div> -->
                                <!-- End Datatable Info -->
                            </div>
                        </div>

                        <div class="col-auto">
                            <!-- Filter -->
                            <div class="row align-items-sm-center">

                                <div class="col-md">
                                    <form>
                                        <!-- Search -->
                                        <div class="input-group input-group-merge input-group-flush">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tio-search"></i>
                                                </div>
                                            </div>
                                            <input id="datatableSearch" type="search" class="form-control" placeholder="Search University Profile" aria-label="Search University Profile">
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
                        <div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                        <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="datatable"></label></div>
                        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer" data-hs-datatables-options="{
                     'columnDefs': [{
                        'targets': [0, 1, 4],
                        'orderable': false
                      }],
                     'order': [],
                     'info': {
                       'totalQty': '#datatableWithPaginationInfoTotalQty'
                     },
                     'search': '#datatableSearch',
                     'entries': '#datatableEntries',
                     'pageLength': 8,
                     'isResponsive': false,
                     'isShowPaging': false,
                     'pagination': 'datatablePagination'
                   }" role="grid" aria-describedby="datatable_info">
                            <thead class="thead-light" style="text-align: left; align-items:center;">
                                <tr role="row">
                                    <th scope="col" class="table-column-pr-0 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 31.7812px;">
                                        <div class="custom-control custom-checkbox">
                                            <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label" for="datatableCheckAll"></label>
                                        </div>
                                    </th>

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
                                $getUniversityList = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wud.`we_university_id` = wul.`we_univeristy_id` WHERE wul.`we_univeristy_id` = wud.`we_university_id`";
                                $fetchUniversityList = $db_conn->query($getUniversityList);
                                $count = 1;
                                while ($showUniversityList = $fetchUniversityList->fetch_assoc()) {
                                ?>
                                    <tr role="row" class="even">
                                        <td class="table-column-pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                                                <label class="custom-control-label" for="usersDataCheck2"></label>
                                            </div>
                                        </td>
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
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 8 of 17 entries</div>
                    </div>
                </div>
                <!-- End Table -->

                <!-- Footer -->
                <div class="card-footer">
                    <!-- Pagination -->
                    <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                        <div class="col-sm mb-2 mb-sm-0">
                            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                                <span class="mr-2">Showing:</span>

                                <!-- Select -->
                                <select id="datatableEntries" class="js-select2-custom select2-hidden-accessible" data-hs-select2-options="{
                            'minimumResultsForSearch': 'Infinity',
                            'customClass': 'custom-select custom-select-sm custom-select-borderless',
                            'dropdownAutoWidth': true,
                            'width': true
                          }" data-select2-id="datatableEntries" tabindex="-1" aria-hidden="true">
                                    <option value="4" data-select2-id="13">4</option>
                                    <option value="6" data-select2-id="14">6</option>
                                    <option value="8" selected="" data-select2-id="15">8</option>
                                    <option value="12" data-select2-id="16">12</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="12"><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-datatableEntries-container"><span class="select2-selection__rendered" id="select2-datatableEntries-container" role="textbox" aria-readonly="true" title="8"><span>8</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <!-- End Select -->

                                <span class="text-secondary mr-2">of</span>

                                <!-- Pagination Quantity -->
                                <span id="datatableWithPaginationInfoTotalQty">17</span>
                            </div>
                        </div>

                        <div class="col-sm-auto">
                            <div class="d-flex justify-content-center justify-content-sm-end">
                                <!-- Pagination -->
                                <nav id="datatablePagination" aria-label="Activity pagination" style="">
                                    <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                        <ul id="datatable_pagination" class="pagination datatable-custom-pagination">
                                            <li class="paginate_item page-item disabled"><a class="paginate_button previous page-link" aria-controls="datatable" data-dt-idx="0" tabindex="0" id="datatable_previous"><span aria-hidden="true">Prev</span></a></li>
                                            <li class="paginate_item page-item active"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li>
                                            <li class="paginate_item page-item"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li>
                                            <li class="paginate_item page-item"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li>
                                            <li class="paginate_item page-item"><a class="paginate_button next page-link" aria-controls="datatable" data-dt-idx="4" tabindex="0" id="datatable_next"><span aria-hidden="true">Next</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
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