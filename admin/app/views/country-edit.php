<?php
//Calling Global Configuration
require_once 'app/config/global.config.php';

// print_r($match["params"]["cid"]);

//Global Declarations
$country_id = '';

//Receive Parameter
$country_id = $match["params"]["cid"];

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
    <title><?= $title_constant; ?> | Dashboard</title>

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

    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <?php
            //Fetch Country Data
            $getCountryData = "SELECT * FROM `we_country_list` WHERE `we_country_id` = $country_id AND `we_country_status` = 1";
            $fetchCountryData = $db_conn->query($getCountryData);
            $listCountryData = $fetchCountryData->fetch_assoc();
            ?>
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Edit Country - <strong><?= $listCountryData['we_country_name']; ?></strong></h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal">
                            <i class="tio-add-circle mr-1"></i> Add Country
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <div class="row justify-content-sm-center text-center">
                <div class="col-lg-12 mb-3 mb-lg-5">
                    <!-- Nav -->
                    <ul class="nav nav-tabs" role="tablist" data-hs-transform-tabs-to-btn-options='{
                        "transformResolution": "lg",
                        "btnClassNames": "justify-content-center mb-3"
                        }'>
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab">
                                <i class="tio-user-outlined mr-1"></i> Country Basics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="billing-address-tab" data-toggle="tab" href="#billing-address" role="tab">
                                <i class="tio-city mr-1"></i> Country Demographics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab">
                                <i class="tio-lock-outlined mr-1"></i> Country Miscelleneous
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab">
                                <i class="tio-notifications-on-outlined mr-1"></i> Verify Informations
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav -->

                    <form>
                        <!-- Tab Content -->
                        <div class="tab-content mt-8" id="editUserModalTabContent">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                Tab 1
                            </div>

                            <div class="tab-pane fade" id="billing-address" role="tabpanel" aria-labelledby="billing-address-tab">
                                Tab 2
                            </div>

                            <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                                Tab 3
                            </div>

                            <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                                Tab 4
                            </div>
                        </div>
                        <!-- End Tab Content -->
                    </form>

                </div>
            </div>
        </div>
        <!-- End Content -->
    </main>

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