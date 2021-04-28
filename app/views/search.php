<?php
//Calling Global Configuration
require_once 'app/config/global.config.php';

$attr = "";

if (empty($_GET)) {
    $university_type = "";
    // header('Location:' . $router->generate('search-page') . '?show=all');
} else {
    // header('Location:' . $router->generate('search-page') . '?show=all');
    $university_type = empty($_GET['university-type']) ? 'all' . $university_type = '' . '' : '' . $_GET['university-type'] . '';
}
// header('Location:' . $router->generate('search-page') . '?show=all');

// if($_GET['show'] === 'all')
//     $attr = "selected="selected"";
// else if 


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Include Meta Section -->
    <?php
    //Calling Meta Template
    include_once 'app/assets/templates/template-meta.php';
    ?>

    <title> <?= $title_constant; ?> &bull; Countries</title>

    <!-- Include Header Section -->
    <?php
    //Calling Header Template
    include_once 'app/assets/templates/template-header.php';
    ?>

</head>

<body>
    <div id="wrapper">
        <div id="content">
            <!-- Start header -->
            <header class="header-nav-center no_blur header__workspace active-orange-blue" id="myNavbar">
                <div class="container">
                    <!-- Include Navigation Section -->
                    <?php
                    //Calling Navigation Template
                    include_once 'app/assets/templates/template-navigation.php';
                    ?>
                </div>
                <!-- end container -->
            </header>
            <!-- End header -->

            <!-- Stat main -->
            <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

                <!-- Start banner_about -->
                <section class="pt_banner_inner banner_px_image blog-banner_with_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="https://images.unsplash.com/photo-1542650742-d3150fb66298?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=auto&q=80" alt="Search Wise Education" />
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <div class="banner_title_inner margin-b-3">
                                    <h1 data-aos="fade-up" data-aos-delay="0">
                                        Let's find out what suits You!
                                    </h1>
                                    <p data-aos="fade-up" data-aos-delay="100">
                                        Share your stories and news with everyone.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="filter_form" data-aos="fade-up" data-aos-delay="200">
                            <form method="GET" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- <div class="col-md-6 col-lg-3">
                                    <div class="simple_search">
                                        <div class="form-group">
                                            <div class="input_group">
                                                <input type="search" class="form-control" placeholder="Type your search word">
                                                <i class="tio search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="universityType" name="university-type">
                                                <option value="null" selected disabled>University Type</option>
                                                <option value="all" <?= ($university_type === 'all' ? 'selected' : ''); ?>>All Types</option>
                                                <option value="public" <?= ($university_type === 'public' ? 'selected' : ''); ?>>Public</option>
                                                <option value="private" <?= ($university_type === 'private' ? 'selected' : ''); ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="universityLocation" name="university-location">
                                                <option value="null" selected="selected" disabled>University Location</option>
                                                <!-- List All Locations -->
                                                <?php
                                                $getAllLocationDetails = "SELECT * FROM `we_location_list`";
                                                $fetchAllLocationDetails = $db_conn->query($getAllLocationDetails);
                                                while ($listAllLocationDetails = $fetchAllLocationDetails->fetch_assoc()) {
                                                ?>
                                                    <option value="<?= $listAllLocationDetails['we_location_id']; ?>"><?= $listAllLocationDetails['we_location_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="universityCountry" name="university-country">
                                                <option value="null" selected="selected" disabled>University Country</option>
                                                <!-- List All Countries -->
                                                <?php
                                                $getAllCountryDetails = "SELECT * FROM `we_country_list`";
                                                $fetchAllCountryDetails = $db_conn->query($getAllCountryDetails);
                                                while ($listAllCountryDetails = $fetchAllCountryDetails->fetch_assoc()) {
                                                ?>
                                                    <option value="<?= $listAllCountryDetails['we_country_id']; ?>"><?= $listAllCountryDetails['we_country_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="universityProgram" name="university-program">

                                                <option value="null" selected="selected" disabled>University Program</option>
                                                <!-- List All Programs -->
                                                <?php
                                                $getAllProgramDetails = "SELECT * FROM `we_program_list`";
                                                $fetchAllProgramDetails = $db_conn->query($getAllProgramDetails);
                                                while ($listAllProgramDetails = $fetchAllProgramDetails->fetch_assoc()) {
                                                ?>
                                                    <option value="<?= $listAllProgramDetails['we_program_name']; ?>"><?= $listAllProgramDetails['we_program_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn_lg_primary p bg-dark c-white rounded-8">
                                                <span>Search</span>
                                                <i class="tio search mr-1 align-middle font-s-16"></i>
                                            </button>
                                            <button type="reset" class="btn btn_lg_primary p bg-red c-white rounded-8">
                                                <span>Reset</span>
                                                <i class="tio info mr-1 align-middle font-s-16"></i>
                                            </button>
                                        </div>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- End banner_about -->

            </main>
        </div>
        <!-- [id] content -->

        <!-- Include Footer -->
        <?php
        //Calling Footer Template
        include_once 'app/assets/templates/template-footer.php';
        ?>

    </div>
    <!-- End. wrapper -->

</body>

</html>

<!-- Include Scripts -->
<?php
//Calling Scripts Template
include_once 'app/assets/templates/template-scripts.php';
?>