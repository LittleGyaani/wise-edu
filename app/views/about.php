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

    <title> <?= $title_constant; ?> &bull; About Us</title>

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
                <section class="pt_banner_inner banner_px_image" id="Discover">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=auto&q=80" alt="Wise Education About">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <div class="banner_title_inner">
                                    <h1 data-aos="fade-up" data-aos-delay="0">
                                        About Us
                                    </h1>
                                    <p data-aos="fade-up" data-aos-delay="100">
                                        Leave us a little info, and we’ll be in touch.
                                    </p>
                                    <div data-aos="fade-up" data-aos-delay="200">
                                        <a href="#" class="btn btn_sm_primary bg-orange-red c-white rounded-8">Contact Us</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End banner_about -->

                <!-- Start about_cc_grid -->
                <section class="about_cc_grid padding-py-12" id="About">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="title_sections_inner mb-0">
                                    <div class="before_title">
                                        <span class="c-orange-red">About <strong>Wise Education</strong></span>
                                    </div>
                                    <h2>We are Wise Education, explore more about us.</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 ml-auto">
                                <div class="title_sections_inner mb-0">
                                    <p style="text-align: justify;">
                                        <strong>Wise Education</strong>, a premier organization in India was founded in 2014 with a vision to provide quality, economically viable education abroad. <strong>Wise Education</strong> takes great pride in being the pioneer organization to provide admission to worldwide. We have sent more than 1000 students into various Universities in Europe countries and gulf countries for the various courses, being aware of its commitment to the youth, Hundreds of students are benefited through the wide range of learning opportunities, commitment, service and moral support rendered towards the need of students throughout their period of learning.
                                        <!-- <br />
                                        <br />
                                        <b>Wise Education</b> is more than just a student’s admissions firm. We are a team of doctors, career counselors & management experts with 6 years’ experience. We walked the same road as our students, going abroad to study. We understand the difficulty to decide whether to stay or leave the country but studying overseas is becoming an increasingly attractive option for students looking to obtain a world-class education.
                                        <br />
                                        <br />
                                        Our goal is to help students make informed choices that are right for them, guiding them, as well as their parents and advisers, through the entire higher education process. Each year we send numerous students abroad to pursue their degrees. Our current students frequently recommend our admission service due to our transparent and reliable work. We have a commitment to provide an efficient admissions and application system for higher education abroad. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. about_cc_grid -->

                <section class="software_web our_story margin-t-8" id="About">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 margin-t-8">
                                <div class="item__section mb-4 mb-lg-0">
                                    <div class="media">
                                        <div class="icon_sec">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.589" height="20.716" viewBox="0 0 23.589 20.716">
                                                <path id="Combined-Shape" d="M25.56,17.147l.029-.012v5.4a1.178,1.178,0,0,1-2.011.833l-2.7-2.7H5.534A3.534,3.534,0,0,1,2,17.136V6.534A3.534,3.534,0,0,1,5.534,3H22.026A3.534,3.534,0,0,1,25.56,6.534v10.6S25.56,17.143,25.56,17.147ZM6.91,11.9c1.778,2.667,4.1,4.058,6.87,4.058s5.092-1.391,6.87-4.058a1.178,1.178,0,1,0-1.96-1.307c-1.363,2.044-2.971,3.009-4.91,3.009s-3.547-.965-4.91-3.009A1.178,1.178,0,1,0,6.91,11.9Z" transform="translate(-2 -3)" fill="#fff" fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="title_sections mb-0">
                                                <div class="before_title">
                                                    <span class="c-green2">Explore a Bit More</span>
                                                </div>
                                                <h2>Our Vision</h2>
                                                <p>
                                                    Our vision is to become a peerless Overseas Education consultants who are capable to meet global competencies in Abroad study consulting and thereby set the highest benchmark on the foundation of growing aspiration of our clients.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mt-4 mt-lg-0 ml-auto">
                                <div class="image_grid">
                                    <img class="img-fluid img_one" src="https://ouch-cdn2.icons8.com/sWoEeWI4fiaC8ybOmI17I9L-y7p01NlCHaujzeSiFWw/rs:fit:1216:912/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvNTUy/L2ViYzY3MzVlLTAz/YjItNDNmZC1iZjk2/LWExNWU0NGQ5N2I4/Yy5zdmc.png" alt="Wise Education Vision" height="auto" width="auto" />
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="row">
                                <div class="col-lg-5 mt-4 mt-lg-0 mr-auto">
                                    <div class="image_grid">
                                        <img class="img-fluid img_one" src="https://ouch-cdn2.icons8.com/SwU1Y0kXoTo5oewfCiC0Wqx6upyy8bbGAAegjaij8eI/rs:fit:1216:912/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvMzY0/LzI0MmZjYjg0LTFm/OWEtNDZiZC05ZDMw/LTE1MzQxZmU3ZGZh/MS5zdmc.png" alt="Wise Education Pursuit" height="auto" width="auto" />
                                    </div>
                                </div>
                                <div class="col-lg-5 margin-t-8">
                                    <div class="item__section mb-4 mb-lg-0">
                                        <div class="media">
                                            <div class="icon_sec">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23.589" height="20.716" viewBox="0 0 23.589 20.716">
                                                    <path id="Combined-Shape" d="M25.56,17.147l.029-.012v5.4a1.178,1.178,0,0,1-2.011.833l-2.7-2.7H5.534A3.534,3.534,0,0,1,2,17.136V6.534A3.534,3.534,0,0,1,5.534,3H22.026A3.534,3.534,0,0,1,25.56,6.534v10.6S25.56,17.143,25.56,17.147ZM6.91,11.9c1.778,2.667,4.1,4.058,6.87,4.058s5.092-1.391,6.87-4.058a1.178,1.178,0,1,0-1.96-1.307c-1.363,2.044-2.971,3.009-4.91,3.009s-3.547-.965-4.91-3.009A1.178,1.178,0,1,0,6.91,11.9Z" transform="translate(-2 -3)" fill="#fff" fill-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <div class="media-body">
                                                <div class="title_sections mb-0">
                                                    <div class="before_title">
                                                        <span class="c-green2">Explore a Bit More</span>
                                                    </div>
                                                    <h2>Our Pursuit</h2>
                                                    <p>
                                                        Our overseas consultancy service focuses on education especially MBBS, B-TECH, Management ETC degree abroad for aspiring Indian students in top universities or colleges in countries like the USA, UK, Ukraine, New Zealand, Canada, France, Poland, Australia, Singapore, etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-5 margin-t-8">
                                <div class="item__section mb-4 mb-lg-0">
                                    <div class="media">
                                        <div class="icon_sec">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.589" height="20.716" viewBox="0 0 23.589 20.716">
                                                <path id="Combined-Shape" d="M25.56,17.147l.029-.012v5.4a1.178,1.178,0,0,1-2.011.833l-2.7-2.7H5.534A3.534,3.534,0,0,1,2,17.136V6.534A3.534,3.534,0,0,1,5.534,3H22.026A3.534,3.534,0,0,1,25.56,6.534v10.6S25.56,17.143,25.56,17.147ZM6.91,11.9c1.778,2.667,4.1,4.058,6.87,4.058s5.092-1.391,6.87-4.058a1.178,1.178,0,1,0-1.96-1.307c-1.363,2.044-2.971,3.009-4.91,3.009s-3.547-.965-4.91-3.009A1.178,1.178,0,1,0,6.91,11.9Z" transform="translate(-2 -3)" fill="#fff" fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="title_sections mb-0">
                                                <div class="before_title">
                                                    <span class="c-green2">Explore a Bit More</span>
                                                </div>
                                                <h2>Our Mission</h2>
                                                <p>
                                                    With ethics, honesty, transparency as our core strengths, we deliver our services in the most professional way. We are on the path of excellence by properly guiding our aspiring Indian students to study their dream course at an affordable cost.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mt-4 mt-lg-0 ml-auto">
                                <div class="image_grid">
                                    <img class="img-fluid img_one" src="https://ouch-cdn2.icons8.com/oYoS7wS6HhqwLFVpBF-AoPjwqM9n2rSOMb4gx3Jq7N8/rs:fit:912:912/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvNjA3/LzAwMTMzYjRhLTNh/ZTYtNDJkOS1hZDdi/LThjZDVkNjZiNDc4/Mi5zdmc.png" alt="Wise Education Mission" height="auto" width="auto" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Vision, Mission Ends -->

                <!-- Start group_logo_list -->
                <section class="group_logo_list margin-b-12" data-aos="fade-up" data-aos-delay="0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 my-auto">
                                <div class="title_section mb-0">
                                    <p>Trusted by content creators across the world</p>
                                </div>
                            </div>
                            <div class="col-lg-9 ml-auto my-auto">
                                <div class="item_tto">
                                    <img src="../../assets/img/logos/uber.png" alt="">
                                    <img src="../../assets/img/logos/netflix.png" alt="">
                                    <img src="../../assets/img/logos/google.png" alt="">
                                    <img src="../../assets/img/logos/aust.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. group_logo_list -->

                <!-- Start features__workspace -->
                <section class="service__workspace features__workspace padding-py-12" id="Services">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-8 col-lg-4">
                                <div class="title_sections_inner mb-0">
                                    <div class="before_title">
                                        <span class="c-orange-red">Our Values</span>
                                    </div>
                                    <h2>Core Values of
                                        <br />
                                        Wise Group
                                    </h2>
                                    <p> We care for our student’s future. We think and act like parents of the student, not as consultants. We share our student’s and their parent’s aspirations, work to understand their reality, and align our incentives with their objectives — so they know we’re in this together.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 ml-auto mt-4 mt-lg-0">
                                <div class="row">
                                    <div class="col-md-6 fa_item">
                                        <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
                                            <div class="media">
                                                <div class="ico">
                                                    <i class="tio dashboard_outlined"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="t_xt">
                                                        <h4>Integrity Values</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 fa_item">
                                        <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                                            <div class="media">
                                                <div class="ico">
                                                    <i class="tio face_id"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="t_xt">
                                                        <h4>Long Sightedness</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 fa_item">
                                        <div class="inside__zoop" data-aos="fade-up" data-aos-delay="200">
                                            <div class="media">
                                                <div class="ico">
                                                    <i class="tio account_square_outlined"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="t_xt">
                                                        <h4>Best Services</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 fa_item">
                                        <div class="inside__zoop" data-aos="fade-up" data-aos-delay="300">
                                            <div class="media">
                                                <div class="ico">
                                                    <i class="tio file_text_outlined"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="t_xt">
                                                        <h4>Honest & Genuine</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 fa_item">
                                        <div class="inside__zoop" data-aos="fade-up" data-aos-delay="400">
                                            <div class="media">
                                                <div class="ico">
                                                    <i class="tio credit_card_outlined"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="t_xt">
                                                        <h4>Quality Work</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 fa_item">
                                        <div class="inside__zoop" data-aos="fade-up" data-aos-delay="400">
                                            <div class="media">
                                                <div class="ico">
                                                    <i class="tio credit_card_outlined"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="t_xt">
                                                        <h4>Industry Expertise</h4>
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
                <!-- End. features__workspace -->

                <!-- Start team_overlay_style -->
                <section class="team_overlay_style margin-b-7">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="title_sections_inner margin-b-5">
                                    <h2>People who work at <br /> <strong>Wise Education Group</strong> share the vision of our community.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="item_group" data-aos="fade-up" data-aos-delay="0">
                                    <div class="image_ps">
                                        <img src="../../assets/img/persons/17.jpg" alt="">
                                    </div>
                                    <div class="share_soisal">
                                        <a href="">
                                            <i class="tio instagram"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio twitter"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio messenger_outlined"></i>
                                        </a>
                                    </div>
                                    <div class="content_txt">
                                        <h3>Christopher L. Belle</h3>
                                        <p>Co-Founder & CEO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="item_group" data-aos="fade-up" data-aos-delay="100">
                                    <div class="image_ps">
                                        <img src="../../assets/img/persons/20.jpg" alt="">
                                    </div>
                                    <div class="share_soisal">
                                        <a href="">
                                            <i class="tio instagram"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio twitter"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio messenger_outlined"></i>
                                        </a>
                                    </div>
                                    <div class="content_txt">
                                        <h3>CLee Carter </h3>
                                        <p>Managing Partner</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="item_group" data-aos="fade-up" data-aos-delay="200">
                                    <div class="image_ps">
                                        <img src="../../assets/img/persons/19.jpg" alt="">
                                    </div>
                                    <div class="share_soisal">
                                        <a href="">
                                            <i class="tio instagram"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio twitter"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio messenger_outlined"></i>
                                        </a>
                                    </div>
                                    <div class="content_txt">
                                        <h3>Mary Merrill </h3>
                                        <p>Operations Director</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="item_group" data-aos="fade-up" data-aos-delay="300">
                                    <div class="image_ps">
                                        <img src="../../assets/img/persons/22.jpg" alt="">
                                    </div>
                                    <div class="share_soisal">
                                        <a href="">
                                            <i class="tio instagram"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio twitter"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio messenger_outlined"></i>
                                        </a>
                                    </div>
                                    <div class="content_txt">
                                        <h3>John Myers </h3>
                                        <p>Operations Director</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="item_group" data-aos="fade-up" data-aos-delay="0">
                                    <div class="image_ps">
                                        <img src="../../assets/img/persons/16.png" alt="">
                                    </div>
                                    <div class="share_soisal">
                                        <a href="">
                                            <i class="tio instagram"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio twitter"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio messenger_outlined"></i>
                                        </a>
                                    </div>
                                    <div class="content_txt">
                                        <h3>Christopher L. Belle</h3>
                                        <p>Co-Founder & CEO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="item_group" data-aos="fade-up" data-aos-delay="100">
                                    <div class="image_ps">
                                        <img src="../../assets/img/persons/18.png" alt="">
                                    </div>
                                    <div class="share_soisal">
                                        <a href="">
                                            <i class="tio instagram"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio twitter"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio messenger_outlined"></i>
                                        </a>
                                    </div>
                                    <div class="content_txt">
                                        <h3>CLee Carter </h3>
                                        <p>Managing Partner</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="item_group" data-aos="fade-up" data-aos-delay="200">
                                    <div class="image_ps">
                                        <img src="../../assets/img/persons/23.jpg" alt="">
                                    </div>
                                    <div class="share_soisal">
                                        <a href="">
                                            <i class="tio instagram"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio twitter"></i>
                                        </a>
                                        <a href="">
                                            <i class="tio messenger_outlined"></i>
                                        </a>
                                    </div>
                                    <div class="content_txt">
                                        <h3>Mary Merrill </h3>
                                        <p>Operations Director</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 my-auto mx-auto" data-aos="fade-up" data-aos-delay="200">
                                <p class="font-s-20 c-dark font-w-600">You’ll work with creative people.</p>
                                <a href="" class="btn btn_md_primary sweep_top sweep_letter bg-orange-red c-white rounded-8">
                                    <div class="inside_item">
                                        <span data-hover="Welcome !">Join us now</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. team_overlay_style -->

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