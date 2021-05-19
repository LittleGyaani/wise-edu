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

    <title> <?= $title_constant; ?> &bull; Services</title>

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

                <!-- Start Service Banner -->
                <section class="pt_banner_inner banner_px_image" id="Discover">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="app/assets/img/backgrounds/banner-services.jpeg" alt="Wise Education About" height="auto" width="auto" />
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <div class="banner_title_inner">
                                    <h1 data-aos="fade-up" data-aos-delay="0">
                                        Our Services
                                    </h1>
                                    <p data-aos="fade-up" data-aos-delay="100">
                                        We offer a variety of services to choose from, before leaving abroad.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End Service Banner -->

                <!-- Service Section Starts -->
                <section class="section__showcase margin-b-6 margin-t-10">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-5">
                                <div class="title_sections margin-b-6">
                                    <h2 class="c-dark">
                                        SERVICES WE OFFER
                                    </h2>
                                    <p class="c-gray">
                                        Explore our set of services provided to make it easy
                                        for you to get admission to study MBBS, Engineering, Management courses abroad.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="block__tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-free-counselling-tab" data-toggle="pill" href="#pills-free-counselling" role="tab" aria-controls="pills-free-counselling" aria-selected="false">
                                        <div class="icon">
                                            <img src="app/assets/img/icons/free-counselling.png" height="30" width="30" alt="Free Counselling Wise Education" />
                                        </div>
                                        <h3>Free Counselling</h3>
                                        <div class="prog"></div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-university-selection-tab" data-toggle="pill" href="#pills-university-selection" role="tab" aria-controls="pills-university-selection" aria-selected="false">
                                        <div class="icon">
                                            <img src="app/assets/img/icons/university-selection.png" height="30" width="30" alt="University Selection Wise Education" />
                                        </div>
                                        <h3>University Selection</h3>
                                        <div class="prog"></div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-documentation-assistance-tab" data-toggle="pill" href="#pills-documentation-assistance" role="tab" aria-controls="pills-documentation-assistance" aria-selected="false">
                                        <div class="icon">
                                            <img src="app/assets/img/icons/document-assistance.png" height="30" width="30" alt="Documentation Assistance Wise Education" />
                                        </div>
                                        <h3>Documentation Assistance</h3>
                                        <div class="prog"></div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-forex-assistance-tab" data-toggle="pill" href="#pills-forex-assistance" role="tab" aria-controls="pills-forex-assistance" aria-selected="true">
                                        <div class="icon">
                                            <img src="app/assets/img/icons/forex-assistance.png" height="30" width="30" alt="Forex Assistance Wise Education" />
                                        </div>
                                        <h3>Forex Assistance</h3>
                                        <div class="prog"></div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-travel-assistance-tab" data-toggle="pill" href="#pills-travel-assistance" role="tab" aria-controls="pills-travel-assistance" aria-selected="true">
                                        <div class="icon">
                                            <img src="app/assets/img/icons/travel-assistance.png" height="30" width="30" alt="Forex Assistance Wise Education" />
                                        </div>
                                        <h3>Travel Assistance</h3>
                                        <div class="prog"></div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-predeparture-guidance-tab" data-toggle="pill" href="#pills-predeparture-guidance" role="tab" aria-controls="pills-predeparture-guidance" aria-selected="true">
                                        <div class="icon">
                                            <img src="app/assets/img/icons/pre-departure-assistance.png" height="30" width="30" alt="Forex Assistance Wise Education" />
                                        </div>
                                        <h3>Pre-departure Guidance</h3>
                                        <div class="prog"></div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-postdeparture-guidance-tab" data-toggle="pill" href="#pills-postdeparture-guidance" role="tab" aria-controls="pills-postdeparture-guidance" aria-selected="true">
                                        <div class="icon">
                                            <img src="app/assets/img/icons/post-departure-assistance.png" height="30" width="30" alt="Forex Assistance Wise Education" />
                                        </div>
                                        <h3>Post-departure Guidance</h3>
                                        <div class="prog"></div>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-free-counselling" role="tabpanel" aria-labelledby="pills-free-counselling-tab">
                                    <div class="ss_software">
                                        <!-- <img src="app/assets/img/backgrounds/free-course-banner.png" alt=""  /> -->
                                    </div>
                                    <div class="about__info">
                                        <p><strong>WISE EDUCATION</strong> has a team of trained and expert counselors, who provide help to identify the professional goals, enabling the student to take a wiser academic decision. These counselors give Personal Guidance to choose courses that perfectly fits your Career or Personal Goals.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-university-selection" role="tabpanel" aria-labelledby="pills-university-selection-tab">
                                    <div class="ss_software">
                                        <!-- <img src="../../assets/img/software/ss2.png" alt=""> -->
                                    </div>
                                    <div class="about__info">
                                        <p><strong>WISE EDUCATION</strong> counselors help you to select the right University across the world according to the need and requirement of the student. We look at our students’ academic documents to make sure it is as per the norms specified by the University.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-documentation-assistance" role="tabpanel" aria-labelledby="pills-documentation-assistance-tab">
                                    <div class="ss_software">
                                        <!-- <img src="../../assets/img/software/ss3.png" alt=""> -->
                                    </div>
                                    <div class="about__info">
                                        <p>
                                            · Passport Assistance: <strong>WISE EDUCATION</strong> assists you completely while applying for the passport. We provide you with the admission letter that helps in acquiring the passport on Tatkal(immediate) Basis. <br/>
                                            · Education Loan: <strong>WISE EDUCATION</strong> provides you with all the necessary documentations which provide assistance in getting the educational loans. <br/>
                                            · Legalization of Documents: At <strong>WISE EDUCATION</strong>, we help you with the attestations, translations, and all the other documentation procedures of the student which are required to complete the admission procedure. <br/>
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-forex-assistance" role="tabpanel" aria-labelledby="pills-forex-assistance-tab">
                                    <div class="ss_software">
                                        <!-- <img src="../../assets/img/software/ss4.png" alt=""> -->
                                    </div>
                                    <div class="about__info">
                                        <p>We assist our students in getting currency exchange. At <strong>WISE EDUCATION</strong>, we make sure that our students get the best possible exchange rate. We have tie-ups with various International Banks that provide the students with Forex Card and traveler’s cheque at the time of departure.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-travel-assistance" role="tabpanel" aria-labelledby="pills-travel-assistance-tab">
                                    <div class="ss_software">
                                        <!-- <img src="../../assets/img/software/ss4.png" alt=""> -->
                                    </div>
                                    <div class="about__info">
                                        <p>At <strong>WISE EDUCATION</strong>, we have a separate department called <strong>FLY WISE</strong> which provides you with the best possible options to travel. We help you identify the right airline for excess baggage schemes. The department helps you in your entire course period in traveling. We also arrange travel for parents and relatives of the student when required.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-predeparture-guidance" role="tabpanel" aria-labelledby="pills-predeparture-guidance-tab">
                                    <div class="ss_software">
                                        <!-- <img src="../../assets/img/software/ss4.png" alt=""> -->
                                    </div>
                                    <div class="about__info">
                                        <p>Every year, <strong>WISE EDUCATION</strong> conducts <strong>WISE ANNUAL FEST</strong>, a get together of students and parents before the departure. In this session, they get to know about the ins and outs of the respective country and traveling guidelines. Also, we let you contact the other students who are already studying in the respective countries.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-postdeparture-guidance" role="tabpanel" aria-labelledby="pills-postdeparture-guidance-tab">
                                    <div class="ss_software">
                                        <!-- <img src="../../assets/img/software/ss4.png" alt=""> -->
                                    </div>
                                    <div class="about__info">
                                        <p>
                                            · We accompany our students from the Airport to the University. <br/>
                                            · We provide the accommodation facilities to our students till they get a hostel room. <br/>
                                            · We assist you in your hostel registration and allot you the room. <br/>
                                            · We assist you with the final documentation in the University. <br/>
                                            · We offer a 5-10 minutes complimentary call to our students from the University to your parents/ relatives. <br/>
                                            · We provide you with a local SIM Card from the University. <br/>
                                            · We assist you in getting enrollment in hostel mess. <br/>
                                            · We facilitate the issuance of your library membership card. <br/>
                                            · We help you with medical insurance. <br/>
                                            · We help you for the medical check-up in the University at the time of arrival. <br/>
                                            · We provide proper assistance in obtaining the Certificate of Equivalence from the Ministry of Education of the Destination Country. <br/>
                                            · We let you coordinate with University authorities in Monitoring students’ academic progress and behavior. <br/>
                                            · We provide you with the suitable information and consultation in obtaining a visa for students’ parents to visit their children. <br/>
                                            &bull; We assist you in visa extension if required. <br/>
                                            &bull; We take great care of our students during the entire period of study. <br/>
                                            &bull; We facilitate in providing visas to the parents for a visit (if needed). <br/>
                                            &bull; We assist parents in their smooth travel arrangements. <br/>
                                            &bull; We assist you in getting air tickets during the whole period of study. <br/>
                                            &bull; We assist our students in enrolling for MCI screening test coaching classes in the University. <br/>
                                            &bull; If a student wishes to change the room in the hostel, assistance is given, provided a genuine reason given by the student. <br/>
                                            &bull; At the time of emergency, complete assistance is provided. <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Service Section Ends -->

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