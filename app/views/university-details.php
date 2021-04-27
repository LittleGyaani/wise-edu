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

<body id="myNavbar">
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
                        <img class="cover-parallax" src="<?= $listAllUniversityInfo['we_university_cover_image']; ?>" alt="image">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                <div class="banner_title_inner">
                                    <div class="about_post">
                                        <span class="c_ategory">
                                            <a href="#Design">Design</a>
                                            <a href="#Developer">Developer</a>
                                        </span>
                                        <span class="dot"></span>
                                        <time>15min</time>
                                    </div>
                                    <h1 class="margin-my-3 font-s-60" data-aos="fade-up" data-aos-delay="0">
                                        <?= $listAllUniversityInfo['we_univeristy_name']; ?>
                                    </h1>
                                    <h6 class="margin-my-3 font-s-30 red" data-aos="fade-up" data-aos-delay="0">
                                        <mark>Explore whether this university is a fit for you.</mark>
                                    </h6>
                                    <div class="footer_content">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 card-info">
                                <div class="row justify-content-center text-center">
                                    <div class="col-lg-12">
                                        <div class="title_sections_inner margin-b-5">
                                            <center>
                                                <h2>University facts</h2>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-3 mt-2">
                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="icon_fr">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/university.png" height="25" width="25" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="za_tzt">
                                                        <h5>Type</h5>
                                                        <p class="inf_sub">
                                                            Public
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="icon_fr">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/university.png" height="25" width="25" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="za_tzt">
                                                        <h5>Type</h5>
                                                        <p class="inf_sub">
                                                            Public
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="icon_fr">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/university.png" height="25" width="25" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="za_tzt">
                                                        <h5>Type</h5>
                                                        <p class="inf_sub">
                                                            Public
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="icon_fr">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/university.png" height="25" width="25" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="za_tzt">
                                                        <h5>Type</h5>
                                                        <p class="inf_sub">
                                                            Public
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="icon_fr">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/university.png" height="25" width="25" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="za_tzt">
                                                        <h5>Type</h5>
                                                        <p class="inf_sub">
                                                            Public
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 mt-3">
                                        <div class="item_auther item_feth">
                                            <div class="media">
                                                <div class="icon_fr">
                                                    <img class="inf_ico" src="https://img.icons8.com/color/344/university.png" height="25" width="25" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="za_tzt">
                                                        <h5>Type</h5>
                                                        <p class="inf_sub">
                                                            Public
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
                    <a href="#home">Home</a>
                    <a href="#news">News</a>
                    <a href="#contact">Contact</a>
                    <a href="#about">About</a>
                    <a href="#support">Support</a>
                    <a href="#blog">Blog</a>
                    <a href="#tools">Tools</a>
                    <a href="#base">Base</a>
                    <a href="#custom">Custom</a>
                    <a href="#more">More</a>
                    <a href="#logo">Logo</a>
                    <a href="#friends">Friends</a>
                    <a href="#partners">Partners</a>
                    <a href="#people">People</a>
                    <a href="#work">Work</a>
                </div>


                <!-- Start content-Sblog -->
                <section class="content-Sblog" data-sticky-container>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="fixSide_scroll" data-sticky-for="1023" data-margin-top="100">
                                    <div class="share_socail">
                                        <div class="title">Share</div>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Facebook" data-sharer="facebook" data-hashtag="Rakon" data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521">
                                            <i class="tio facebook"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Twitter" data-sharer="twitter" data-title="Checkout Rakon!" data-hashtags="theme, Rakon" data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521">
                                            <i class="tio twitter"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Whatsapp" data-sharer="whatsapp" data-title="Checkout Rakon!" data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521">
                                            <i class="tio whatsapp_outlined"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Telegram" data-sharer="telegram" data-title="Checkout Rakon!" data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" data-to="+44555-03564">
                                            <i class="tio telegram"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Pinterest" data-sharer="pinterest" data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521">
                                            <i class="tio pinterest_circle"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right" title="skype" data-sharer="skype" data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" data-title="Checkout Rakon!">
                                            <i class="tio skype"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="body_content">
                                    <p class="margin-b-3">Many people don’t really know the difference between software architecture and
                                        software design.
                                        Even for developers, the line is often blurry and they might mix up elements of software
                                        architecture patterns and design patterns. </p>
                                    <h3>The Definition of Software Architecture</h3>
                                    <p class="margin-b-3">In simple words, software architecture is the process of converting software
                                        characteristics such
                                        as flexibility, scalability, feasibility, reusability, and <mark>security into a structured
                                            solution</mark> that
                                        meets the technical and the business expectations. </p>
                                    <h3>The Characteristics of Software Architecture</h3>
                                    <p>
                                        As explained, software characteristics describe the requirements and the expectations of a software
                                        in operational and technical levels. Thus, when a product owner says they are competing in a rapidly
                                        changing markets, and they should adapt their business model quickly. The software should be
                                        “extendable, modular and <strong>maintainable</strong>” if a business deals with urgent requests
                                        that need to be
                                        completed successfully in the matter of time. As a software architect, you should note that the
                                        performance and low fault tolerance, <u>scalability and reliability</u> are your key
                                        characteristics. Now,
                                        after defining the previous characteristics the business owner tells you that they have a limited
                                        budget for that project, another characteristic
                                    </p>
                                    <p>comes up here which is <b>“the feasibility.”</b></p>
                                    <p>Here you can find a full list of software characteristics, also known as “quality attributes,”
                                        <a href="#">here.</a>
                                    </p>

                                    <img class="img_md" src="../../assets/img/inner/00pxsd.jpg" alt="">
                                    <p class="margin-b-3"><b>SOLID</b> refers to Single Responsibility, <mark>Open Closed</mark>, Liskov
                                        substitution,
                                        Interface
                                        Segregation and
                                        Dependency Inversion Principles.
                                    </p>
                                    <h3>Software Design</h3>
                                    <p>While software architecture is responsible for the skeleton and the high-level
                                        infrastructure of a
                                        software, the software design is responsible for the code level design such as, what each module is
                                        doing, the classes scope, and the functions purposes, etc.</p>
                                    <ul>
                                        <li>
                                            <span class="c-dark">Single Responsibility Principle</span> means that each class has to have one
                                            single purpose, a
                                            responsibility and a reason to change.
                                        </li>
                                        <li>
                                            <span class="c-dark">Open Closed Principle:</span>
                                            a class should be open for extension, but closed for modification. In simple words, you should
                                            be able to add more functionality to the class but do not edit current functions in a way that
                                            breaks existing code that uses it
                                        </li>
                                    </ul>
                                    <div class="cover_video">
                                        <img src="../../assets/img/inner/un00640.jpg" alt="">
                                        <div class="icon_played">
                                            <button type="button" class="btn btn_video" data-toggle="modal" data-src="https://www.youtube.com/embed/VvHoHw5AWTk" data-target="#mdllVideo">
                                                <div class="scale rounded-circle b play_video bg-red">
                                                    <i class="tio play"></i>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <p class="margin-b-3"><b>SOLID</b> refers to Single Responsibility, <mark>Open Closed</mark>, Liskov
                                        substitution,
                                        Interface
                                        Segregation and
                                        Dependency Inversion Principles.
                                    </p>
                                    <p class="txt_quotation">
                                        Thanks for reading! If you are interested in machine learning (or just want to understand what it
                                        is), check out my Machine Learning is Fun! series too.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. content-Sblog -->
                <!-- Start section_tag_auther -->
                <section class="section_tag_auther">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-3">
                                <div class="box_tags_psot">
                                    <h4>Tags</h4>
                                    <a href="" class="btn">Design</a>
                                    <a href="" class="btn">Developer</a>
                                    <a href="" class="btn">Product Design</a>
                                </div>
                            </div>
                            <div class="col-lg-9 offset-lg-3">
                                <div class="block_auther_post margin-t-5">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="media">
                                                <img class="img_person" src="../../assets/img/persons/24.jpg" alt="">
                                                <div class="media-body">
                                                    <div class="txt">
                                                        <h4>Rose Schaefer</h4>
                                                        <p>I help fin-tech digital product teams to create amazing experiences by crafting top-level
                                                            UI/UX.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 my-auto ml-auto text-lg-right">
                                            <a href="#Testimonial" class="btn-social color-behance border-0  mr-2">
                                                <i class="tio behance"></i>
                                            </a>
                                            <a href="#Testimonial" class="btn-social color-instagram border-0 mr-2">
                                                <i class="tio instagram"></i>
                                            </a>
                                            <a href="#Testimonial" class="btn-social color-twitter border-0  mr-2">
                                                <i class="tio twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. section_tag_auther -->


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
                <!-- End. dividar -->

                <!-- Start sec_comments -->
                <section class="sec_comments padding-py-12" id="comment">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="title_commnt">
                                    <h2>3 Commtents</h2>
                                </div>
                                <div class="body_commnt">
                                    <div class="item_commnt">
                                        <div class="media">
                                            <img class="at_img" src="../../assets/img/persons/default.png" alt="">
                                            <div class="media-body">
                                                <div class="txt">
                                                    <h3>Lakia Rogers</h3>
                                                    <span class="date">2 days ago</span>
                                                    <p class="content">
                                                        Hey Sascha, good addition. The Whole servitization is another development that is causing
                                                        the shift. ☝️
                                                    </p>
                                                    <a href="#addcomment" class="btn_repy">Reply</a>
                                                </div>

                                                <div class="item_commnt">
                                                    <div class="media">
                                                        <img class="at_img" src="../../assets/img/persons/24.jpg" alt="">
                                                        <div class="media-body">
                                                            <div class="txt">
                                                                <h3>Paul Brasseur</h3>
                                                                <span class="date">2 days ago</span>
                                                                <p class="content">
                                                                    Just wanna thank you guys for this fabulous WordPress theme and your post. 🙂
                                                                </p>
                                                                <a href="#addcomment" class="btn_repy">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item_commnt">
                                        <div class="media">
                                            <img class="at_img" src="../../assets/img/persons/06.png" alt="">
                                            <div class="media-body">
                                                <div class="txt">
                                                    <h3>Chad Faircloth</h3>
                                                    <span class="date">2 days ago</span>
                                                    <p class="content">
                                                        Hey Sascha, good addition. The Whole servitization is another development that is causing
                                                        the shift. ☝️
                                                    </p>
                                                    <a href="#addcomment" class="btn_repy">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="form_comment  padding-t-10">
                                    <div class="row" id="addcomment">
                                        <div class="col-12">
                                            <div class="title_sections">
                                                <h2>Post a comment</h2>
                                                <p>Your email address will not be published.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-11">
                                            <div class="section_contact_five contact_six ml-auto">
                                                <div class="form_cc_four">
                                                    <form action="" class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Email address</label>
                                                                <input type="email" class="form-control" placeholder="ex. john@mail.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Full Name</label>
                                                                <input type="text" class="form-control" placeholder="ex. John Doe">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Leave a Reply</label>
                                                                <textarea class="form-control" rows="7" placeholder="Write your comment here..."></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label pl-1 c-gray" for="customCheck1">Save my name, and
                                                                    email
                                                                    in this browser for the next time I comment.</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 d-md-flex justify-content-between margin-t-3">
                                                            <a href="" class="btn btn_md_primary bg-red rounded-8 c-white h-fit-content">
                                                                Post Commtent
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. sec_comments -->


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

<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        myFunction()
    };

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>