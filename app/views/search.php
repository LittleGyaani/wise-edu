<?php
//Calling Global Configuration
require_once 'app/config/global.config.php';

//Global Declarations
$university_course = "";
$university_program = "";
$university_type = "";
$university_country = "";

//Receive GET Parameters
$university_course = filter_var($_GET['university-course'], FILTER_SANITIZE_STRING);
$university_program = filter_var($_GET['university-program'], FILTER_SANITIZE_STRING);
$university_type = filter_var($_GET['university-type'], FILTER_SANITIZE_STRING);
$university_country = filter_var($_GET['university-country'], FILTER_SANITIZE_STRING);

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
            <main>

                <!-- Start banner_about -->
                <section class="pt_banner_inner banner_px_image blog-banner_with_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="app/assets/img/backgrounds/search-banner.jpeg" height="auto" width="auto" alt="Search Wise Education" />
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <div class="banner_title_inner margin-b-3">
                                    <h1 data-aos="fade-up" data-aos-delay="0">
                                        Let's find out what suits You!
                                    </h1>
                                    <p data-aos="fade-up" data-aos-delay="100">
                                        Choose from below options, and see the magic.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="filter_form" data-aos="fade-up" data-aos-delay="200">
                            <form method="GET" action="" enctype="application/x-www-form-urlencoded">
                                <div class="row">

                                    <!-- Course Selector -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="universityCourse" name="university-course">

                                                <option value="null" selected="selected" disabled>Choose Course</option>
                                                <!-- List All Courses -->
                                                <?php
                                                $getAllProgramDetails = "SELECT * FROM `we_program_list`";
                                                $fetchAllProgramDetails = $db_conn->query($getAllProgramDetails);
                                                while ($listAllProgramDetails = $fetchAllProgramDetails->fetch_assoc()) {
                                                    $course_name = $listAllProgramDetails['we_program_name'];
                                                ?>
                                                    <option value="<?= $course_name; ?>" <?= (($course_name === $university_course) ? 'selected' : ''); ?>><?= $listAllProgramDetails['we_program_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Program Selector -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="universityProgram" name="university-program">

                                                <option value="null" selected disabled>Choose Program</option>
                                                <!-- List All Programs -->
                                                <option value="under-graduate" <?= (($university_program === 'under-graduate') ? 'selected' : ''); ?>>Under Graduate</option>
                                                <option value="post-graduate" <?= (($university_program === 'post-graduate') ? 'selected' : ''); ?>>Post Graduate</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Type Selector -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="universityType" name="university-type">
                                                <option value="null" selected disabled>University Type</option>
                                                <option value="public" <?= (($university_type === 'public') ? 'selected' : ''); ?>>Public</option>
                                                <option value="private" <?= (($university_type === 'private') ? 'selected' : ''); ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Country Selector -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="universityCountry" name="university-country">
                                                <option value="null" selected="selected" disabled>University Country</option>
                                                <!-- List All Countries -->
                                                <?php
                                                $getAllCountryDetails = "SELECT * FROM `we_country_list`";
                                                $fetchAllCountryDetails = $db_conn->query($getAllCountryDetails);
                                                while ($listAllCountryDetails = $fetchAllCountryDetails->fetch_assoc()) {
                                                    $country_university = $listAllCountryDetails['we_country_id'];
                                                ?>
                                                    <option value="<?= $country_university; ?>" <?= (($country_university === $university_country) ? 'selected' : ''); ?>><?= $listAllCountryDetails['we_country_name']; ?></option>
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
                                            <button type="submit" class="btn btn_lg_primary p bg-dark c-white rounded-8 mr-2">
                                                <span>Search</span>
                                                <!-- <i class="tio search mr-1 align-middle font-s-16"></i> -->
                                            </button>
                                            <button type="reset" onclick="location.href='<?= $router -> generate('search-page'); ?>';" class="btn btn_lg_primary p bg-red c-white rounded-8">
                                                <span>Reset</span>
                                                <!-- <i class="tio info mr-1 align-middle font-s-16"></i> -->
                                            </button>
                                        </div>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- End banner_about -->

                <!-- University Section -->
                <section class="section__stories blog_slider margin-b-12 margin-t-12">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-5">
                                <div class="title_sections margin-b-5">
                                    <h2>All Universities & Programs</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <?php
                            //List All Universities
                            if($_GET)
                                echo $getAllUniversityDetails = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wul.`we_univeristy_id` = wud.`we_university_id` JOIN `we_location_list` wll ON wll.`we_location_id` = wul.`we_univeristy_location_id` JOIN `we_country_list` wcl ON wcl.`we_country_id` = wul.`we_univeristy_country_id` WHERE wul.`we_univeristy_country_id` = $university_country OR wud.`we_university_data_university_type` = '$university_type' OR wud.`we_university_data_program_type` = '$university_program' OR wud.`we_university_data_course_offered` = '$university_course'";
                            else
                                $getAllUniversityDetails = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wul.`we_univeristy_id` = wud.`we_university_id` JOIN `we_location_list` wll ON wll.`we_location_id` = wul.`we_univeristy_location_id` JOIN `we_country_list` wcl ON wcl.`we_country_id` = wul.`we_univeristy_country_id`";
                            
                            $fetchAllUniversityDetails = $db_conn->query($getAllUniversityDetails);
                            while ($listAllUniversityDetails = $fetchAllUniversityDetails->fetch_assoc()) {
                            ?>
                                <div class="col-lg-6">
                                    <div class="grid_blog_avatar list_style">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="cover_blog">
                                                    <a href="<?= $router->generate('university-details') . $listAllUniversityDetails['we_univeristy_alias']; ?>">
                                                        <img src="app/assets/img/universities/<?= (($listAllUniversityDetails['we_university_cover_image'] === '') ? 'university-default.jpeg' : '' . $listAllUniversityDetails["we_university_cover_image"]) . ''; ?>" alt="<?= $listAllUniversityDetails['we_univeristy_name']; ?>" height="auto" width="auto" />
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 my-auto">
                                                <div class="body_blog">
                                                    <a href="<?= $listAllUniversityDetails['we_university_website_url']; ?>" target="_blank">
                                                        <div class="person media">
                                                            <img src="app/assets/img/logos/universities/<?= $listAllUniversityDetails['we_university_logo']; ?>" alt="<?= $listAllUniversityDetails['we_univeristy_name']; ?>" />
                                                        </div>
                                                    </a>
                                                    <a href="<?= $router->generate('university-details') . $listAllUniversityDetails['we_univeristy_alias']; ?>" class="link_blog">
                                                        <h4 class="sp_ttl_blog">
                                                            <?= $listAllUniversityDetails['we_univeristy_name']; ?>
                                                        </h4>
                                                        <p class="short_desc">
                                                            <?php
                                                            $uvshort = str_ireplace('<p>', '', $listAllUniversityDetails['we_university_profile']);
                                                            $uvshort = str_ireplace('</p>', '', $uvshort);
                                                            echo $uvshort;
                                                            ?>
                                                        </p>
                                                    </a>
                                                    <a href="<?= $router->generate('university-details') . $listAllUniversityDetails['we_univeristy_alias']; ?>" class="btn btn_sm_primary bg-red c-white rounded-8"><span>Visit University</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End grid_blog_avatar -->
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
        </div>
        </section>
        <!-- University Section End -->

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