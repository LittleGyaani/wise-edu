<?php
//Calling Global Configuration
require_once 'app/config/global.config.php';

//Retrieve the University Slug From URL
$university_slug = $match["params"]["university_alias"];
$university_name = ucwords(str_replace('-', ' ', $university_slug));

$getUniversityInfo = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wul.`we_univeristy_id` = wud.`we_university_id` JOIN `we_location_list` wll ON wll.`we_location_id` = wul.`we_univeristy_location_id` JOIN `we_country_list` wcl ON wcl.`we_country_id` = wul.`we_univeristy_country_id` WHERE wul.`we_univeristy_alias` = '$university_slug' ";
$fetchUniversityInfo = $db_conn->query($getUniversityInfo);
$listAllUniversityInfo = $fetchUniversityInfo->fetch_assoc();

//Redirect to 404 Error Page, if no such University Exists
if ($fetchUniversityInfo->num_rows === 0)
    header('Location:' . $router->generate('error-404'));

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Include Meta Section -->
    <?php
    //Calling Meta Template
    include_once 'app/assets/templates/template-meta.php';
    ?>

    <title> <?= $title_constant; ?> &bull; <?= $university_name; ?> Details</title>

    <!-- Include Header Section -->
    <?php
    //Calling Header Template
    include_once 'app/assets/templates/template-header.php';
    ?>

</head>

<body id="myNavbar" >
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
                        <img class="cover-parallax" src="<?= $listAllUniversityInfo['we_university_cover_image']; ?>" alt="image">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-7">
                                <div class="banner_title_inner">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb default">
                                            <li class="breadcrumb-item"><a href="<?= $base_URI; ?>">Home</a></li>
                                            <li class="breadcrumb-item">University</li>
                                            <li class="breadcrumb-item active" aria-current="page"><?= $listAllUniversityInfo['we_univeristy_name']; ?></li>
                                        </ol>
                                    </nav>
                                    <h1 class="margin-my-3 font-s-55" data-aos="fade-up" data-aos-delay="0">
                                        <?= $listAllUniversityInfo['we_univeristy_name']; ?>
                                    </h1>
                                    <h6 class="margin-my-3 font-s-30 red" data-aos="fade-up" data-aos-delay="0">
                                        <mark>Explore whether this university is for you!</mark>
                                    </h6>
                                    <div class="footer_content">
                                        <div data-aos="fade-up" data-aos-delay="0">
                                            <a href="<?= $router->generate('apply-now'); ?>" class="btn btn_sm_primary bg-orange-red c-white rounded-8">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-5 card-info">
                                <div class="row justify-content-center text-center">
                                    <div class="col-lg-12">
                                        <div class="title_sections_inner margin-b-2">
                                            <center>
                                                <h2>University Facts</h2>
                                                <small>One of the popular university in <?= $listAllUniversityInfo['we_country_name']; ?><b></b></small>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/university.png" />
                                                </div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Type</h5>
                                                        <p class="inf_sub">
                                                            <?= $listAllUniversityInfo['we_university_data_university_type']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/2x/courses.png" />
                                                </div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Course</h5>
                                                        <p class="inf_sub">
                                                            <?= $listAllUniversityInfo['we_university_data_course_offered']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/google-calendar--v1.png" />
                                                </div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Duration</h5>
                                                        <p class="inf_sub">
                                                            <?= $listAllUniversityInfo['we_university_data_course_duration']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/2x/translation.png" />
                                                </div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Language</h5>
                                                        <p class="inf_sub">
                                                            <?= $listAllUniversityInfo['we_university_data_course_language']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf">
                                                    <img class="inf_ico" src="https://img.icons8.com/officel/344/money.png" />
                                                </div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">Fee</h5>
                                                        <p class="inf_sub">
                                                            <?= $listAllUniversityInfo['we_university_data_course_fee']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 tile mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="media-body ic-inf">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/skyscrapers.png" />
                                                </div>
                                                <div class="media-body mb-inf">
                                                    <div class="za_tzt">
                                                        <h5 class="inf_ttl">City</h5>
                                                        <p class="inf_sub">
                                                            <?= $listAllUniversityInfo['we_location_name']; ?>
                                                        </p>
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

                <div id="navbar" class="scrollmenu">
                    <a href="#university-profile" class="scrollTo">University Profile</a>
                    <a href="#degree-and-duration" class="scrollTo">Degree & Duration</a>
                    <a href="#accommodation-facility" class="scrollTo">Accommodation Facility</a>
                    <a href="#fee-structure" class="scrollTo">Fee Structure</a>
                    <a href="#entry-requirement" class="scrollTo">Entry Requirement</a>
                    <a href="#university-recognition" class="scrollTo">University Recognition</a>
                </div>


                <!-- Start content-Sblog -->
                <section class="content-Sblog" data-sticky-container>
                    <div class="container">

                        <div id="university-profile">
                        </div>
                        <div class="row">
                            <div class="col-lg-8 margin-t-4">
                                <div class="body_content">
                                    <h3 class="mn-title">University Profile</h3>
                                    <p class="margin-b-3 clr-read"><?= $listAllUniversityInfo['we_university_profile']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4 margin-t-4">
                                <div class="image_grid">
                                    <img class="img-fluid img_one" src="https://kslabs.online/demo/wise-edu/wp-content/uploads/2021/01/university-profile-2-scaled-800x700.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div id="degree-and-duration">
                        </div>
                        <div class="row">
                            <div class="col-lg-4 margin-t-4">
                                <div class="image_grid">
                                    <img class="img-fluid img_one" src="https://kslabs.online/demo/wise-edu/wp-content/uploads/2021/01/degree-duration-scaled-500x550.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 margin-t-4">
                                <div class="body_content">
                                    <h3 class="mn-title">Degree & Duration</h3>
                                    <p class="margin-b-3 clr-read"><?= $listAllUniversityInfo['we_university_degree_duration']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div id="accommodation-facility">
                        </div>
                        <div class="row">
                            <div class="col-lg-8 margin-t-4">
                                <div class="body_content">
                                    <h3 class="mn-title">Accommodation Facility</h3>
                                    <p class="margin-b-3 clr-read"><?= $listAllUniversityInfo['we_university_accommodation']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="image_grid">
                                    <img class="img-fluid img_one" src="https://kslabs.online/demo/wise-edu/wp-content/uploads/2021/01/accomodation-scaled-800x850.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="fee-structure"></div>
                        <div class="row">
                            <div class="col-lg-4 margin-t-12">
                                <div class="image_grid">
                                    <img class="img-fluid img_one" src="https://ouch-cdn2.icons8.com/U6ACOH1t4TK7cw2vvWtNo6C3aVd93JpZw3g7LgHfMZA/rs:fit:1216:912/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvNjky/Lzc2YWQzNGQ4LWIx/NzEtNDM0YS1iM2Fj/LWE3NjI5YmM0NGMw/Mi5zdmc.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 margin-t-4">
                                <div class="body_content">
                                    <h3 class="mn-title">Fee Structure</h3>
                                    <p class="margin-b-3 clr-read"><?= $listAllUniversityInfo['we_university_fee_structure']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div id="entry-requirement"></div>
                        <div class="row">
                            <div class="col-lg-8 margin-t-8">
                                <div class="body_content">
                                    <h3 class="mn-title">Entry Requirement</h3>
                                    <p class="margin-b-3 clr-read"><?= $listAllUniversityInfo['we_university_entry_requirement']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4 margin-t-14">
                                <div class="image_grid">
                                    <img class="img-fluid img_one" src="https://kslabs.online/demo/wise-edu/wp-content/uploads/2021/01/entry-requirements-scaled-800x850.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="university-recognition"></div>
                        <div class="row">
                            <div class="col-lg-4 margin-t-4">
                                <div class="image_grid">
                                    <img class="img-fluid img_one" src="https://kslabs.online/demo/wise-edu/wp-content/uploads/2021/01/recognization-2-scaled-400x450.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 margin-t-8">
                                <div class="body_content">
                                    <h3 class="mn-title">University Recognition</h3>
                                    <p class="margin-b-3 clr-read"><?= $listAllUniversityInfo['we_university_recognition']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. content-Sblog -->

                <!-- Start blog_masonry -->
                <section class="blog_masonry three_column height_fixed padding-t-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="title_sections margin-b-3">
                                    <h2>Recent Posts</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <a href="#" class="link_poet">
                                        <div class="cover_link">
                                            <img class="main_img" src="../../assets/img/inner/px0654.jpg" class="card-img-top" alt="...">
                                            <div class="auther_post">
                                                <div class="media">
                                                    <img src="../../assets/img/persons/23.jpg" alt="">
                                                    <div class="media-body my-auto">
                                                        <div class="txt">
                                                            <h4>Chad Faircloth</h4>
                                                            <p>30 Sep, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <div class="about_post">
                                            <span class="c_ategory">
                                                <a href="#Design">Design</a>
                                                <a href="#Developer">Developer</a>
                                            </span>
                                            <span class="dot"></span>
                                            <time>15min</time>
                                        </div>
                                        <a href="#" class="d-block">
                                            <h5 class="card-title">SpaceX: Simple, beautiful interfaces are the future</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                                to
                                                additional content. This content is a little bit longer.
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <a href="#" class="link_poet">
                                        <div class="cover_link">
                                            <img class="main_img" src="../../assets/img/inner/px00654.jpg" class="card-img-top" alt="...">
                                            <div class="auther_post">
                                                <div class="media">
                                                    <img src="../../assets/img/persons/23.jpg" alt="">
                                                    <div class="media-body my-auto">
                                                        <div class="txt">
                                                            <h4>Chad Faircloth</h4>
                                                            <p>30 Sep, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <div class="about_post">
                                            <span class="c_ategory">
                                                <a href="#Design">Design</a>
                                                <a href="#Developer">Developer</a>
                                            </span>
                                            <span class="dot"></span>
                                            <time>15min</time>
                                        </div>
                                        <a href="#" class="d-block">
                                            <h5 class="card-title">10 Insights from Apple’s Human Interface Design Guidelines</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                                to
                                                additional content. This content is a little bit longer.
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <a href="#" class="link_poet">
                                        <div class="cover_link">
                                            <img class="main_img" src="../../assets/img/inner/00pxsd.jpg" class="card-img-top" alt="...">
                                            <div class="auther_post">
                                                <div class="media">
                                                    <img src="../../assets/img/persons/23.jpg" alt="">
                                                    <div class="media-body my-auto">
                                                        <div class="txt">
                                                            <h4>Chad Faircloth</h4>
                                                            <p>30 Sep, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <div class="about_post">
                                            <span class="c_ategory">
                                                <a href="#Design">Design</a>
                                                <a href="#Developer">Developer</a>
                                            </span>
                                            <span class="dot"></span>
                                            <time>15min</time>
                                        </div>
                                        <a href="#" class="d-block">
                                            <h5 class="card-title">17 UI Design Mistakes That Fails Your Website</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                                to
                                                additional content. This content is a little bit longer.
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End. blog_masonry -->

                <!-- Start dividar -->
                <section class="dividar margin-t-12"></section>
                <!-- End. divider -->

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