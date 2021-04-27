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

            <!-- Start main -->
            <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

                <!-- Start banner_about -->
                <section class="pt_banner_inner banner_px_image single_blog featured_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="https://images.unsplash.com/photo-1526638684360-95cdcee762ce?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=cover&w=auto&q=80" alt="Countries WISE EDUCATIONS">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                <div class="banner_title_inner">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb default">
                                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Countries</li>
                                        </ol>
                                    </nav>

                                    <h1 class="margin-my-3 font-s-60 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                                        Explore Countries <br />
                                        for Abroad Studies
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End banner_about -->

                <!-- Start Popular Countries -->
                <section class="section__stories blog_slider padding-t-9">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="swip__stories">
                                    <!-- Swiper -->
                                    <div class="swiper-container blog-slider">
                                        <div class="title_sections_inner">
                                            <h2>Popular Countries</h2>
                                        </div>
                                        <div class="swiper-wrapper">
                                            <!-- List All Countries -->
                                            <?php
                                            //Fetch All Countries
                                            $listAllCountries = "SELECT * FROM `we_country_list`";
                                            $fetchAllCountries = $db_conn->query($listAllCountries);
                                            while ($getAllCountriesInfo = $fetchAllCountries->fetch_assoc()) {
                                            ?>
                                                <div class="swiper-slide">
                                                    <div class="grid_blog_avatar">
                                                        <a href="<?= $router->generate('country-details') . $getAllCountriesInfo['we_country_alias']; ?>" class="link-poet">
                                                            <div class="cover_blog cover_link">
                                                                <img src="<?= $getAllCountriesInfo['we_country_cover_image']; ?>" alt="">
                                                            </div>
                                                        </a>
                                                        <div class="body_blog">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/skyscrapers.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>City</b></h3>
                                                                                <p><?= $getAllCountriesInfo['we_country_capital']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/conference-background-selected.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Population</b></h3>
                                                                                <p><?= $getAllCountriesInfo['we_country_population']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/banknotes.png" alt="">
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Currency</b></h3>
                                                                                <p><?= $getAllCountriesInfo['we_country_currency']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/translate-text.png" alt="">
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Language</b></h3>
                                                                                <p><?= $getAllCountriesInfo['we_country_official_language']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="single-blog.html" class="link_blog">
                                                                <h4 class="title_blog">
                                                                    <mark>
                                                                        Let's Know more about <b><?= $getAllCountriesInfo['we_country_name']; ?></b>
                                                                    </mark>
                                                                </h4>
                                                                <p class="short_desc">
                                                                    <?= $getAllCountriesInfo['we_country_demographics']; ?>
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- End grid_blog_avatar -->
                                                    <br />
                                                    <center>
                                                        <a href="<?= $router->generate('country-details') . $getAllCountriesInfo['we_country_alias']; ?>" class="btn btn_lg_primary scale border-0 sweep_letter sweep_top bg-orange-red c-white rounded-pill">
                                                            <div class="inside_item">
                                                                <span data-hover="Let's Explore →">Explore Country</span>
                                                            </div>
                                                        </a>
                                                    </center>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next">
                                            <i class="tio chevron_right"></i>
                                        </div>
                                        <div class="swiper-button-prev">
                                            <i class="tio chevron_left"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End Popular Countries -->

                <!-- Start Popular Locations -->
                <section class="section__stories blog_slider padding-t-9">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="swip__stories">
                                    <!-- Swiper -->
                                    <div class="swiper-container blog-slider">
                                        <div class="title_sections_inner">
                                            <h2>Popular Locations</h2>
                                        </div>
                                        <div class="swiper-wrapper">
                                            <!-- List All Locations -->
                                            <?php
                                            //Fetch All Locations
                                            $listAllLocations = "SELECT * FROM `we_location_list` wll JOIN `we_country_list` wcl ON wll.`we_location_country_id` = wcl.`we_country_id`";
                                            $fetchAllLocations = $db_conn->query($listAllLocations);
                                            while ($getAllLocationsInfo = $fetchAllLocations->fetch_assoc()) {
                                            ?>
                                                <div class="swiper-slide">
                                                    <div class="grid_blog_avatar">
                                                        <a href="<?= $router->generate('location-details') . $getAllLocationsInfo['we_location_alias']; ?>" class="link-poet">
                                                            <div class="cover_blog cover_link">
                                                                <img src="<?= $getAllLocationsInfo['we_location_cover_image']; ?>" alt="">
                                                            </div>
                                                        </a>
                                                        <div class="body_blog">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/worldwide-location.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Country</b></h3>
                                                                                <p><?= $getAllLocationsInfo['we_country_name']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/university.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Universities</b></h3>
                                                                                <!-- <p><?= $getAllLocationsInfo['we_country_population']; ?></p> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="single-blog.html" class="link_blog">
                                                                <h4 class="title_blog">
                                                                    <mark>
                                                                        Let's Know more about <b><?= $getAllLocationsInfo['we_location_name']; ?></b>
                                                                    </mark>
                                                                </h4>
                                                                <p class="short_desc">
                                                                    <?= $getAllLocationsInfo['we_location_description']; ?>
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- End grid_blog_avatar -->
                                                    <br />
                                                    <center>
                                                        <a type="button" href="<?= $router->generate('location-details') . $getAllLocationsInfo['we_location_alias']; ?>" class="btn btn_lg_primary scale border-0 sweep_letter sweep_top bg-orange-red c-white rounded-pill">
                                                            <div class="inside_item">
                                                                <span data-hover="Let's Explore →">Explore Location</span>
                                                            </div>
                                                        </a>
                                                    </center>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next">
                                            <i class="tio chevron_right"></i>
                                        </div>
                                        <div class="swiper-button-prev">
                                            <i class="tio chevron_left"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End Popular Locations -->

                <!-- Start Popular Universities -->
                <section class="section__stories blog_slider padding-t-9">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="swip__stories">
                                    <!-- Swiper -->
                                    <div class="swiper-container blog-slider">
                                        <div class="title_sections_inner">
                                            <h2>Popular Universities</h2>
                                        </div>
                                        <div class="swiper-wrapper">
                                            <!-- List All Universities -->
                                            <?php

                                            //Fetch All Universities
                                            $listAllUniversities = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wul.`we_univeristy_id` = wud.`we_university_id` JOIN `we_location_list` wll ON wll.`we_location_id` = wul.`we_univeristy_location_id` JOIN `we_country_list` wcl ON wcl.`we_country_id` = wul.`we_univeristy_country_id`";
                                            $fetchAllUniversities = $db_conn->query($listAllUniversities);
                                            while ($getAllUniversitiesInfo = $fetchAllUniversities->fetch_assoc())
                                            {
                                            ?>
                                                <div class="swiper-slide">
                                                    <!-- <img class="icon_popular" src="https://orinostudio.com/assets/img/stars.svg" /> -->
                                                    <div class="grid_blog_avatar">
                                                        <a href="<?= $router->generate('university-details') . $getAllUniversitiesInfo['we_univeristy_alias']; ?>" class="link-poet">
                                                            <div class="cover_blog cover_link">
                                                                <img src="<?= $getAllUniversitiesInfo['we_university_cover_image']; ?>" alt="<?= $getAllUniversitiesInfo['we_univeristy_name']; ?>">
                                                            </div>
                                                        </a>
                                                        <div class="body_blog">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/motarboard.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Country</b></h3>
                                                                                <p><?= $getAllUniversitiesInfo['we_country_name']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/skyscrapers.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>City</b></h3>
                                                                                <p><?= $getAllUniversitiesInfo['we_location_name']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/university.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>University Type</b></h3>
                                                                                <p><?= $getAllUniversitiesInfo['we_university_data_university_type']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/google-calendar--v1.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Stay Duration</b></h3>
                                                                                <p><?= $getAllUniversitiesInfo['we_university_data_course_duration']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/2x/courses.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Course Offered</b></h3>
                                                                                <p><?= $getAllUniversitiesInfo['we_university_data_course_offered']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/2x/translation.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Language Used</b></h3>
                                                                                <p><?= $getAllUniversitiesInfo['we_university_data_course_language']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/skyscrapers.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Tution Fees</b></h3>
                                                                                <p><?= $getAllUniversitiesInfo['we_university_data_course_fee']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="person media">
                                                                        <img src="https://img.icons8.com/color/344/distributed-counter.png" alt="" />
                                                                        <div class="media-body">
                                                                            <div class="txt">
                                                                                <h3><b>Yearly In-takes</b></h3>
                                                                                <p>5000+</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="<?= $router->generate('university-details') . $getAllUniversitiesInfo['we_univeristy_alias']; ?>" class="link_blog">
                                                                <mark>Explore the University</mark>
                                                                <h6 class="title_blog">
                                                                    <strong><?= $getAllUniversitiesInfo['we_univeristy_name']; ?></strong>
                                                                </h6>
                                                                <p class="short_desc">
                                                                    <?php
                                                                    $uvshort = str_ireplace('<p>', '', $getAllUniversitiesInfo['we_university_profile']);
                                                                    $uvshort = str_ireplace('</p>', '', $uvshort);
                                                                    echo $uvshort;
                                                                    ?>
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- End grid_blog_avatar -->
                                                    <br />
                                                    <center>
                                                        <a href="<?= $router->generate('university-details') . $getAllUniversitiesInfo['we_univeristy_alias']; ?>" class="btn btn_lg_primary scale border-0 sweep_letter sweep_top bg-orange-red c-white rounded-pill">
                                                            <div class="inside_item">
                                                                <span data-hover="Let's Explore →">Explore the University</span>
                                                            </div>
                                                        </a>

                                                        <br />
                                                        <br />

                                                        <a type="button" href="<?= $router->generate('university-details') . $getAllUniversitiesInfo['we_univeristy_alias']; ?>" class="btn btn_lg_primary scale border-0 sweep_letter sweep_top bg-red c-white rounded-pill">
                                                            <div class="inside_item">
                                                                <span data-hover="Let's Apply →">Apply to University</span>
                                                            </div>
                                                        </a>
                                                    </center>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next">
                                            <i class="tio chevron_right"></i>
                                        </div>
                                        <div class="swiper-button-prev">
                                            <i class="tio chevron_left"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End Popular Universities -->

                <!-- Bottom Divider -->
                <div class="container margin-my-7">
                    <div class="dividar_line"></div>
                </div>

            </main>
        </div>
        <!-- [id] content -->

        <!-- Include Footer -->
        <?php
        //Calling Footer Template
        include_once 'app/assets/templates/template-footer.php';
        ?>

        <!-- Video Modal -->
        <div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <!-- Close -->
            <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
                <i class="tio clear"></i>
            </button>
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to top with progress indicator-->
        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Purchase item -->
        <a href="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" target="_blank" class="rakon_purchase">
            <button type="button" class="btn btn_purch">
                <div class="icon">
                    <img src="../../assets/img/rakon/envato.svg" />
                </div>
                <span class="txt">Purchase</span>
            </button>
        </a>
        <!-- End. -->


    </div>
    <!-- End. wrapper -->

</body>

</html>

<!-- Include Scripts -->
<?php
//Calling Scripts Template
include_once 'app/assets/templates/template-scripts.php';
?>