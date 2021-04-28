<?php
//Calling Global Configuration
require_once 'app/config/global.config.php';

$attr = "";

if (empty($_GET)) {
    $university_type = "";
    header('Location:' . $router->generate('search-page') . '?show=all');
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

                <!-- Start All Universities -->
                <section class="section__stories blog_slider padding-t-9">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="swip__stories">
                                    <!-- Swiper -->
                                    <div class="swiper-container blog-slider">
                                        <div class="title_sections_inner">
                                            <h2>Featured Posts</h2>
                                        </div>
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="grid_blog_avatar">
                                                    <div class="cover_blog">
                                                        <img src="../../assets/img/inner/01219874.jpg" alt="">
                                                    </div>
                                                    <div class="body_blog">
                                                        <a href="#">
                                                            <div class="person media">
                                                                <img src="../../assets/img/persons/03.png" alt="">
                                                                <div class="media-body">
                                                                    <div class="txt">
                                                                        <h3>Olivia DeSmit</h3>
                                                                        <time>27 Sep, 2020</time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="single-blog.html" class="link_blog">
                                                            <h4 class="title_blog">
                                                                As climate warms, Ecuador fights fires with forecasts
                                                            </h4>
                                                            <p class="short_desc">
                                                                Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                                nunc aliquet .
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End grid_blog_avatar -->
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="grid_blog_avatar">
                                                    <div class="cover_blog">
                                                        <img src="../../assets/img/inner/px0654.jpg" alt="">
                                                    </div>
                                                    <div class="body_blog">
                                                        <a href="#">
                                                            <div class="person media">
                                                                <img src="../../assets/img/persons/02.png" alt="">
                                                                <div class="media-body">
                                                                    <div class="txt">
                                                                        <h3>Paul Brasseur</h3>
                                                                        <time>30 Sep, 2020</time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="single-blog.html" class="link_blog">
                                                            <h4 class="title_blog">
                                                                Funds adding fuel in tech’s climate race
                                                            </h4>
                                                            <p class="short_desc">
                                                                Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum nunc aliquet .
                                                            </p>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- End grid_blog_avatar -->
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="grid_blog_avatar">
                                                    <div class="cover_blog">
                                                        <img src="../../assets/img/inner/px00654.jpg" alt="">
                                                    </div>
                                                    <div class="body_blog">
                                                        <a href="#">
                                                            <div class="person media">
                                                                <img src="../../assets/img/persons/01.png" alt="">
                                                                <div class="media-body">
                                                                    <div class="txt">
                                                                        <h3>Merlin Roux</h3>
                                                                        <time>24 Sep, 2020</time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="single-blog.html" class="link_blog">
                                                            <h4 class="title_blog">
                                                                Satellite tags shed light on sea turtle treks
                                                            </h4>
                                                            <p class="short_desc">
                                                                Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum nunc aliquet .
                                                            </p>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- End grid_blog_avatar -->
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="grid_blog_avatar">
                                                    <div class="cover_blog">
                                                        <img src="../../assets/img/inner/069874.jpg" alt="">
                                                    </div>
                                                    <div class="body_blog">
                                                        <a href="#">
                                                            <div class="person media">
                                                                <img src="../../assets/img/persons/01.png" alt="">
                                                                <div class="media-body">
                                                                    <div class="txt">
                                                                        <h3>Olivia DeSmit</h3>
                                                                        <time>27 Sep, 2020</time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="single-blog.html" class="link_blog">
                                                            <h4 class="title_blog">
                                                                As climate warms, Ecuador fights fires with forecasts
                                                            </h4>
                                                            <p class="short_desc">
                                                                Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                                nunc aliquet .
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End grid_blog_avatar -->
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="grid_blog_avatar">
                                                    <div class="cover_blog">
                                                        <img src="../../assets/img/inner/11987.jpg" alt="">
                                                    </div>
                                                    <div class="body_blog">
                                                        <a href="#">
                                                            <div class="person media">
                                                                <img src="../../assets/img/persons/01.png" alt="">
                                                                <div class="media-body">
                                                                    <div class="txt">
                                                                        <h3>Paul Brasseur</h3>
                                                                        <time>30 Sep, 2020</time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="single-blog.html" class="link_blog">
                                                            <h4 class="title_blog">
                                                                Funds adding fuel in tech’s climate race
                                                            </h4>
                                                            <p class="short_desc">
                                                                Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum nunc aliquet .
                                                            </p>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- End grid_blog_avatar -->
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="grid_blog_avatar">
                                                    <div class="cover_blog">
                                                        <img src="../../assets/img/inner/6450.png" alt="">
                                                    </div>
                                                    <div class="body_blog">
                                                        <a href="#">
                                                            <div class="person media">
                                                                <img src="../../assets/img/persons/01.png" alt="">
                                                                <div class="media-body">
                                                                    <div class="txt">
                                                                        <h3>Merlin Roux</h3>
                                                                        <time>24 Sep, 2020</time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="single-blog.html" class="link_blog">
                                                            <h4 class="title_blog">
                                                                Satellite tags shed light on sea turtle treks
                                                            </h4>
                                                            <p class="short_desc">
                                                                Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum nunc aliquet .
                                                            </p>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- End grid_blog_avatar -->
                                            </div>
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
                <!-- End All Universities -->

                <!-- dividar_line -->
                <div class="container margin-my-7">
                    <div class="dividar_line"></div>
                </div>
                <!-- End. dividar_line -->

                <!-- Start blog_inner_list -->
                <section class="blog_inner_list">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 margin-b-12">

                                <div class="grid_blog_avatar list_style">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="cover_blog">
                                                <img src="../../assets/img/inner/ppx00654.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-auto">
                                            <div class="body_blog">
                                                <a href="#">
                                                    <div class="person media">
                                                        <img src="../../assets/img/persons/02.png" alt="">
                                                        <div class="media-body">
                                                            <div class="txt">
                                                                <h3>Olivia DeSmit</h3>
                                                                <time>27 Sep, 2020</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="single-blog.html" class="link_blog">
                                                    <h4 class="title_blog">
                                                        As climate warms, Ecuador fights fires with forecasts
                                                    </h4>
                                                    <p class="short_desc">
                                                        Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                        nunc aliquet .
                                                    </p>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End grid_blog_avatar -->

                                <div class="grid_blog_avatar list_style">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="cover_blog">
                                                <img src="../../assets/img/inner/uin048.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-auto">
                                            <div class="body_blog">
                                                <a href="#">
                                                    <div class="person media">
                                                        <img src="../../assets/img/persons/03.png" alt="">
                                                        <div class="media-body">
                                                            <div class="txt">
                                                                <h3>Lakia Rogers</h3>
                                                                <time>27 Sep, 2020</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="single-blog.html" class="link_blog">
                                                    <h4 class="title_blog">
                                                        Meet a scientist: the island-hopping adventurer
                                                    </h4>
                                                    <p class="short_desc">
                                                        Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                        nunc aliquet .
                                                    </p>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End grid_blog_avatar -->

                                <div class="grid_blog_avatar list_style">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="cover_blog">
                                                <img src="../../assets/img/inner/un009734.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-auto">
                                            <div class="body_blog">
                                                <a href="#">
                                                    <div class="person media">
                                                        <img src="../../assets/img/persons/04.png" alt="">
                                                        <div class="media-body">
                                                            <div class="txt">
                                                                <h3>Danielle Derby</h3>
                                                                <time>27 Sep, 2020</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="single-blog.html" class="link_blog">
                                                    <h4 class="title_blog">
                                                        Quarantine reading list: nature edition
                                                    </h4>
                                                    <p class="short_desc">
                                                        Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                        nunc aliquet.
                                                        Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                        nunc aliquet .
                                                    </p>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End grid_blog_avatar -->

                                <div class="grid_blog_avatar list_style">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="cover_blog">
                                                <img src="../../assets/img/inner/un00640.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-auto">
                                            <div class="body_blog">
                                                <a href="#">
                                                    <div class="person media">
                                                        <img src="../../assets/img/persons/24.jpg" alt="">
                                                        <div class="media-body">
                                                            <div class="txt">
                                                                <h3>Rose Schaefer</h3>
                                                                <time>27 Sep, 2020</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="single-blog.html" class="link_blog">
                                                    <h4 class="title_blog">
                                                        Pandemic crippling small-scale fishing worldwide, study finds
                                                    </h4>
                                                    <p class="short_desc">
                                                        Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                        nunc aliquet .
                                                    </p>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End grid_blog_avatar -->

                                <div class="grid_blog_avatar list_style">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="cover_blog">
                                                <img src="../../assets/img/inner/00065ui.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-auto">
                                            <div class="body_blog">
                                                <a href="#">
                                                    <div class="person media">
                                                        <img src="../../assets/img/persons/25.jpg" alt="">
                                                        <div class="media-body">
                                                            <div class="txt">
                                                                <h3>Joanna Hagans</h3>
                                                                <time>27 Sep, 2020</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="single-blog.html" class="link_blog">
                                                    <h4 class="title_blog">
                                                        Big win for tuna fisheries nets renewed focus on human rights
                                                    </h4>
                                                    <p class="short_desc">
                                                        Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                        nunc aliquet .
                                                    </p>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End grid_blog_avatar -->

                                <div class="grid_blog_avatar list_style">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="cover_blog">
                                                <img src="../../assets/img/inner/pxpe0324.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-auto">
                                            <div class="body_blog">
                                                <a href="#">
                                                    <div class="person media">
                                                        <img src="../../assets/img/persons/26.jpg" alt="">
                                                        <div class="media-body">
                                                            <div class="txt">
                                                                <h3>Leslie Rizer</h3>
                                                                <time>27 Sep, 2020</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="single-blog.html" class="link_blog">
                                                    <h4 class="title_blog">
                                                        A ‘first aid kit’ for the world’s coral reefs?
                                                    </h4>
                                                    <p class="short_desc">
                                                        Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                        nunc aliquet .
                                                    </p>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End grid_blog_avatar -->

                                <div class="grid_blog_avatar list_style">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="cover_blog">
                                                <img src="../../assets/img/inner/0pxsd05.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-auto">
                                            <div class="body_blog">
                                                <a href="#">
                                                    <div class="person media">
                                                        <img src="../../assets/img/persons/27.jpg" alt="">
                                                        <div class="media-body">
                                                            <div class="txt">
                                                                <h3>Paul Brasseur</h3>
                                                                <time>27 Sep, 2020</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="single-blog.html" class="link_blog">
                                                    <h4 class="title_blog">
                                                        Big win for tuna fisheries nets renewed focus on human rights
                                                    </h4>
                                                    <p class="short_desc">
                                                        Vitae semper quis lectus nulla at volutpat diam. Sed viverra ipsum
                                                        nunc aliquet .
                                                    </p>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End grid_blog_avatar -->

                                <!-- pagination button_step -->
                                <div class="pagination button_step">
                                    <a href="#" class="btn btn_prev">
                                        Previous
                                    </a>
                                    <a href="#" class="btn btn_nxt">
                                        Next
                                    </a>
                                </div>
                                <!-- End. pagination button_step -->

                            </div>
                            <div class="col-lg-4 margin-b-5">
                                <div class="widgets">
                                    <div class="SSmedia_follow-w">
                                        <div class="title">Follow us</div>
                                        <a href="" target="_blank">
                                            <i class="tio twitter"></i>
                                            <span>42K</span>
                                        </a>
                                        <a href="" target="_blank">
                                            <i class="tio facebook"></i>
                                            <span>53K</span>
                                        </a>
                                        <a href="" target="_blank">
                                            <i class="tio instagram"></i>
                                            <span>1.4M</span>
                                        </a>
                                        <a href="" target="_blank">
                                            <i class="tio medium"></i>
                                            <span>4.3K</span>
                                        </a>
                                        <a href="" target="_blank">
                                            <i class="tio youtube"></i>
                                            <span>15K</span>
                                        </a>
                                    </div>
                                    <div class="banner-w">
                                        <a href="" target="_blank">
                                            <img src="../../assets/img/inner/11654.png" alt="">
                                        </a>
                                    </div>
                                    <div class="categories_list-w">
                                        <div class="title">Categories</div>
                                        <ul>
                                            <li>
                                                <a href="">
                                                    <p>All</p>
                                                    <span>(54)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <p>Oceans</p>
                                                    <span>(15)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="active">
                                                    <p>Livelihoods</p>
                                                    <span>(95)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <p>Biodiversity</p>
                                                    <span>(23)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <p>Science</p>
                                                    <span>(19)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <p>Policy</p>
                                                    <span>(16)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="quotatio-w">
                                        <span>Our Members Speak</span>
                                        <p>Impressed with the master class support of the team and really look forward to the future.
                                            Really, really well made!
                                        </p>
                                        <span class="auther">CEO Founder Mexoo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. blog_inner_list -->

                <!-- Start simple-subscribe -->
                <section class="simple-subscribe margin-b-12">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="content">
                                    <div class="row  justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="title_sections_inner text-center">
                                                <h2>Subscribe to Rakon</h2>
                                                <p>Get the latest posts delivers right to your inbox </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="form-group item_scubscribe">
                                                <div class="input_group">
                                                    <input type="text" class="form-control" placeholder="Enter email address">
                                                    <button type="button" class="btn bg-red">
                                                        <i class="tio send"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. simple-subscribe -->

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