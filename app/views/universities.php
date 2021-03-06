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

    <title> <?= $title_constant; ?> &bull; Universities</title>

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
            <main>

                <!-- Start banner_about -->
                <section class="pt_banner_inner banner_px_image single_blog featured_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="app/assets/img/backgrounds/universities-banner.jpeg" height="auto" width="auto" alt="Universities WISE EDUCATIONS">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-7">
                                <div class="banner_title_inner">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb default">
                                            <li class="breadcrumb-item"><a href="<?= $base_URI; ?>">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Universities</li>
                                        </ol>
                                    </nav>
                                    <h1 class="margin-my-3 font-s-60 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                                        Let's Find Your <br />
                                        Dream University
                                    </h1>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-5 card-info">
                                <div class="row justify-content-center text-center">
                                    <div class="col-lg-12">
                                        <div class="title_sections_inner margin-b-2">
                                            <center>
                                                <h2>University Facts</h2><small>One of the popular university in Ukraine<b></b></small>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf"><img class="inf_ico" src="https://img.icons8.com/color/344/university.png"></div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Type</h5>
                                                        <p class="inf_sub"> PUBLIC </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf"><img class="inf_ico" src="https://img.icons8.com/color/2x/courses.png"></div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Course</h5>
                                                        <p class="inf_sub"> M.D. PHYSICIAN </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf"><img class="inf_ico" src="https://img.icons8.com/color/344/google-calendar--v1.png"></div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Duration</h5>
                                                        <p class="inf_sub"> 6 YEARS </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf"><img class="inf_ico" src="https://img.icons8.com/color/2x/translation.png"></div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Language</h5>
                                                        <p class="inf_sub"> ENGLISH </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf"><img class="inf_ico" src="https://img.icons8.com/officel/344/money.png"></div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Fee</h5>
                                                        <p class="inf_sub"> 5000$ </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf"><img class="inf_ico" src="https://img.icons8.com/color/344/skyscrapers.png"></div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">City</h5>
                                                        <p class="inf_sub"> Vinnytsia </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End banner_about -->

                <!-- Start Popular Universities -->
                <section class="section__stories blog_slider padding-t-9">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="swip__stories">
                                    <!-- Swiper -->
                                    <div class="swiper-container blog-slider">
                                        <div class="title_sections_inner">
                                            <span class="item_new inx">New</span>
                                            <h2>Popular Universities</h2>
                                        </div>
                                        <div class="swiper-wrapper">
                                            <!-- List All Universities -->
                                            <?php

                                            //Fetch All Universities
                                            $listAllUniversities = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wul.`we_univeristy_id` = wud.`we_university_id` JOIN `we_location_list` wll ON wll.`we_location_id` = wul.`we_univeristy_location_id` JOIN `we_country_list` wcl ON wcl.`we_country_id` = wul.`we_univeristy_country_id`";
                                            $fetchAllUniversities = $db_conn->query($listAllUniversities);
                                            while ($getAllUniversitiesInfo = $fetchAllUniversities->fetch_assoc()) {
                                            ?>
                                                <div class="swiper-slide">
                                                    <div class="grid_blog_avatar">
                                                        <div class="body_blog">
                                                            <a href="<?= $router->generate('university-details') . $getAllUniversitiesInfo['we_univeristy_alias']; ?>" class="link_blog">
                                                                <mark>Explore University</mark>
                                                                <h6 class="title_blog mt-2">
                                                                    <strong><?= $getAllUniversitiesInfo['we_univeristy_name']; ?></strong>
                                                                </h6>
                                                                <a href="<?= $router->generate('university-details') . $getAllUniversitiesInfo['we_univeristy_alias']; ?>" class="link_poet margin-t-1">
                                                                    <div class="cover_blog cover_link">
                                                                        <img src="app/assets/img/universities/<?= (($getAllUniversitiesInfo['we_university_cover_image'] === '') ? 'university-default.jpeg' : '' . $getAllUniversitiesInfo["we_university_cover_image"]) . ''; ?>" alt="<?= $getAllUniversitiesInfo['we_univeristy_name']; ?>">
                                                                    </div>
                                                                </a>
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
                                                    <!-- End University -->
                                                    <br />
                                                    <div class="row">
                                                        <center>
                                                            <div class="col-12 col-md-12 col-lg-12">

                                                                <a href="<?= $router->generate('university-details') . $getAllUniversitiesInfo['we_univeristy_alias']; ?>" class="btn btn_lg_primary scale border-0 sweep_letter sweep_top bg-orange-red c-white rounded-pill">
                                                                    <div class="inside_item">
                                                                        <span data-hover="Let's Explore ???">Explore University</span>
                                                                    </div>
                                                                </a>

                                                                <a href="javascript:void(0);" class="btn btn_lg_primary scale border-0 sweep_letter sweep_top bg-red c-white rounded-pill ml-1">
                                                                    <div class="inside_item">
                                                                        <span data-hover="Let's Apply">Apply Now</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </center>
                                                    </div>
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
                                                        <h4 class="title_blog">
                                                            <mark>
                                                                Let's Explore <b><?= $getAllCountriesInfo['we_country_name']; ?></b>
                                                            </mark>
                                                        </h4>
                                                        <a href="<?= $router->generate('country-details') . $getAllCountriesInfo['we_country_alias']; ?>" class="link-poet">
                                                            <div class="cover_blog cover_link margin-t-2">
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
                                                                <span data-hover="Let's Explore ???">Explore Country</span>
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
                                                        <h4 class="title_blog">
                                                            <mark>
                                                                Let's Explore <b><?= $getAllLocationsInfo['we_location_name']; ?></b>
                                                            </mark>
                                                        </h4>
                                                        <a href="<?= $router->generate('location-details') . $getAllLocationsInfo['we_location_alias']; ?>" class="link-poet">
                                                            <div class="cover_blog cover_link margin-t-2">
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
                                                                <p class="short_desc">
                                                                    <?= $getAllLocationsInfo['we_location_description']; ?>
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- End grid_blog_avatar -->
                                                    <br />
                                                    <center>
                                                        <a href="<?= $router->generate('location-details') . $getAllLocationsInfo['we_location_alias']; ?>" class="btn btn_lg_primary scale border-0 sweep_letter sweep_top bg-orange-red c-white rounded-pill">
                                                            <div class="inside_item">
                                                                <span data-hover="Let's Explore ???">Explore Location</span>
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