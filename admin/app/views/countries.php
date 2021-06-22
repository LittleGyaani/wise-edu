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
                                <div class="col-sm-auto">
                                    <div class="d-flex align-items-center mr-2">
                                        <span class="text-secondary mr-2">Status:</span>

                                        <!-- Select -->
                                        <select class="js-select2-custom js-datatable-filter custom-select-sm select2-hidden-accessible" size="1" style="opacity: 0;" data-target-column-index="2" data-hs-select2-options="{
                                            'minimumResultsForSearch': 'Infinity',
                                            'customClass': 'custom-select custom-select-sm custom-select-borderless',
                                            'dropdownAutoWidth': true,
                                            'width': true
                                        }" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="3">All</option>
                                            <option value="successful" data-select2-id="4">Successful</option>
                                            <option value="overdue" data-select2-id="5">Overdue</option>
                                            <option value="pending" data-select2-id="6">Pending</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2"><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-57on-container"><span class="select2-selection__rendered" id="select2-57on-container" role="textbox" aria-readonly="true" title="All"><span>All</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!-- End Select -->
                                    </div>
                                </div>

                                <div class="col-sm-auto">
                                    <div class="d-flex align-items-center mr-2">
                                        <span class="text-secondary mr-2">Signed up:</span>

                                        <!-- Select -->
                                        <select class="js-select2-custom js-datatable-filter custom-select-sm select2-hidden-accessible" size="1" style="opacity: 0;" data-target-column-index="5" data-hs-select2-options="{
                                'minimumResultsForSearch': 'Infinity',
                                'customClass': 'custom-select custom-select-sm custom-select-borderless',
                                'dropdownAutoWidth': true,
                                'width': true
                              }" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="9">All</option>
                                            <option value="1 year ago" data-select2-id="10">1 year ago</option>
                                            <option value="6 months ago" data-select2-id="11">6 months ago</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8"><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-z1d2-container"><span class="select2-selection__rendered" id="select2-z1d2-container" role="textbox" aria-readonly="true" title="All"><span>All</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!-- End Select -->
                                    </div>
                                </div>

                                <div class="col-md">
                                    <form>
                                        <!-- Search -->
                                        <div class="input-group input-group-merge input-group-flush">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tio-search"></i>
                                                </div>
                                            </div>
                                            <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
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
                            <thead class="thead-light" style="text-align: center; align-items:center;">
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
                                $getCountryList = "SELECT * FROM `we_country_list`";
                                $fetchCountryList = $db_conn->query($getCountryList);
                                $count = 1;
                                while ($showCountryList = $fetchCountryList->fetch_assoc()) {
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
                                <nav id="datatablePagination" aria-label="Activity pagination">
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