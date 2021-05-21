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

  <title> <?= $title_constant; ?> &bull; Home</title>

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
      <header class="header-nav-center no_blur header__workspace active-blue-blue" id="myNavbar">
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

        <!-- Start Banner Section -->
        <section class="demo_1 banner_section banner_demo7">
          <div class="container">
            <div class="row">
              <div class="col-md-5 my-auto">
                <div class="banner_title">
                  <h1>Discover the perfect <strong>University</strong> for you.</h1>
                  <p>
                    We made it simple to <b><i>Find</i></b>, <b><i>Apply</i></b> & <b><i>Enroll</i></b> at <strong>Universities Abroad</strong>.
                  </p>
                  <a href="<?= $router->generate('search-page'); ?>" class="btn btn_md_primary rounded-8 bg-blue c-white">
                    <div>Find a Program</div>
                  </a>
                  <div class="margin-t-8">
                    <button type="button" class="btn btn_video" data-toggle="modal" data-src="https://www.youtube.com/embed/ZqTnUbpwSZ4" data-target="#mdllVideo">
                      <div class="scale rounded-circle play_video">
                        <i class="tio play_outlined"></i>
                      </div>
                      <span class="ml-3 font-s-16 c-dark"><strong>Why they became a Doctor</strong>?</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <img class="ill_05" src="app/assets/img/icons/hero-globe-icon.png" alt="Wise Education Degree Programs" />
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner Section -->

        <!-- Start Quick Feature -->
        <section class="abo_company">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item bg-green">
                  <!-- <span class="d-block c-white font-s-16">Search.</span> -->
                  <div class="title_sections">
                    <img class="img-fluid mb-3 centered" src="app/assets/img/icons/graduation-cap.png" alt="Wise Education Graduation Program" />
                    <h2 class="c-white">University & Program Search</h2>
                    <p class="c-white">
                      Find the right program for you and your career aspirations.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item ill_item bg-blue">
                  <!-- <span class="d-block c-dark font-s-16">Explore.</span> -->
                  <img class="img-fluid mb-3 centered" src="app/assets/img/icons/documentation-service.png" alt="Wise Education Documentation Service" />
                  <div class="title_sections">
                    <h2 class="c-white">Application & Document Guide</h2>
                    <p class="c-white">
                      We'll get you to the right place to start your application.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 emo">
                <div class="gq_item ill_item bg-red">
                  <!-- <span class="d-block c-dark font-s-16">Apply.</span> -->
                  <img class="img-fluid mb-3 centered" src="app/assets/img/icons/visa-service.png" alt="Wise Education VISA Service" />
                  <div class="title_sections">
                    <h2 class="c-white">Accomodation & Visa Assistance</h2>
                    <p class="c-white">
                      Get help after application, all the way to your first day at university.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Quick Feature Section -->

        <!-- Start Banner Section -->
        <section class="demo_1 demo__charity demo__workspace" id="Discover">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-lg-6">
                <div class="banner_title workspace_title">
                  <h1>
                    Planning for a <span class="c-blue">Brighter & Better</span> Future?
                  </h1>
                  <p>
                    Our overseas consultancy service focuses on the education especially MBBS, B-TECH, Management, ETC. degree abroad for aspiring Indian students in top universities or colleges in countries like USA,
                    UK, Ukraine, Newzealand, Canada, France, Poland, Australia, Singapore, etc.
                  </p>

                </div>
              </div>
              <div class="col-lg-6 ml-auto">
                <div class="row">
                  <div class="col-lg-10 ml-auto">
                    <div class="block__srarch">
                      <div class="title__search">
                        <h2>Let your career begin.</h2>
                        <p>Drop us your details, we will be in touch ASAP.</p>
                      </div>
                      <form class="form-row" name="student-enquiry" id="studentEnquiry" method="POST" action="javascript:void(0);" enctype="multipart/form-data">
                        <div class="col-12">
                          <div class="form-group">
                            <label>Full Name <sup class="c-red">*</sup></label>
                            <input type="text" name="full-name" id="fullName" class="form-control" placeholder="Enter your full name" required />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div class="form-group">
                            <label>Email ID <sup class="c-red">*</sup></label>
                            <input type="email" name="email-id" id="emailID" class="form-control" placeholder="Enter your email id" required />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div class="form-group">
                            <label>Phone Number <sup class="c-red">*</sup></label>
                            <input type="telephone" name="phone-number" id="phoneNumber" class="form-control" placeholder="Enter your phone number" required />
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label>Postal Address <sup class="c-red">*</sup></label>
                            <input type="text" name="postal-address" id="postalAddress" class="form-control" placeholder="Enter your full address" required />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div class="form-group">
                            <label>Choose Country <sup class="c-red">*</sup></label>
                            <select class="form-control custom-select" name="country-choice" id="countryChoice" required>
                              <option value="" disabled selected>Select Country</option>
                              <?php
                              //List All Countries
                              $listAllCountries = "SELECT * FROM `we_country_list` WHERE `we_country_status` = 1";
                              $fetchAllCountries = $db_conn->query($listAllCountries);
                              while ($getAllCountriesInfo = $fetchAllCountries->fetch_assoc()) {
                                echo '<option value="' . $getAllCountriesInfo['we_country_alias'] . '">' . $getAllCountriesInfo['we_country_name'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div class="form-group">
                            <label>Choose Course <sup class="c-red">*</sup></label>
                            <select class="form-control custom-select" name="course-choice" id="courseChoice" required>
                              <option value="" disabled selected>Select Course</option>
                              <?php
                              //List All Countries
                              $listAllCourses = "SELECT * FROM `we_program_list` WHERE `we_program_status` = 1";
                              $fetchAllCourses = $db_conn->query($listAllCourses);
                              while ($getAllCoursesInfo = $fetchAllCourses->fetch_assoc()) {
                                echo '<option value="' . $getAllCoursesInfo['we_program_alias'] . '">' . $getAllCoursesInfo['we_program_name'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn__search rounded-pill scale border-0 sweep_letter sweep_top"> Enquire Now <i class="tio chevron_right mr-1 align-middle font-s-16"></i></button>
                          <p class="text-center font-s-14 c-gray mt-3 mb-0"><i>Need any assistance?</i> <br /> Talk to Us: <a href="tel:+919439937117" class="c-blue">+91 9439 937 117</a> / <a href="tel:+380636908318" class="c-blue">+380 63 690 8318</a>
                          </p>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bg__cover_office">
            <div class="img__off">
              <img src="app/assets/img/backgrounds/office.jpg" alt="Wise Education Group Bhubaneswar Office" />
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="item__conatct">
                    <div class="item__top">
                      <h3>Let us do the heavy lifting!</h3>
                      <p>Our expert team will help you in finding the best option for your career.</p>
                    </div>
                    <div class="item__bottom">
                      <div class="person__peo">
                        <center>
                          <img src="app/assets/img/icons/call-support.png" alt="Wise Education Support" height="100px" width="100px" />
                        </center>
                      </div>
                      <p class="c-gray font-s-14 mb-0">
                        Call Us: <a href="tel:+919439937117">+91 9439 937 117</a> / <a href="tel:+380636908318">+38 0636 908 318</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner -->

        <!-- Start Info -->
        <section class="service__workspace padding-py-12" id="Service">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-5">
                <div class="title_sections">
                  <h2>How <strong>WISE EDUCATION</strong> can help you?</h2>
                  <p>
                    Our team of advisors is ready to support you at every step of your study abroad journey.
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 block__item mb-4 mb-lg-0">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
                  <div class="media">
                    <div class="ico">
                      <i class="tio search"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt d-flex justify-content-between">
                        <h4>Find your <br /> <b>Dream University</h4></b>
                        <i class="tio arrow_forward my-auto c-gray font-s-18"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 block__item mb-4 mb-lg-0">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                  <div class="media">
                    <div class="ico">
                      <i class="tio file_text_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt d-flex justify-content-between">
                        <h4>Fill your <br /> <b>Application Form</h4></b>
                        <i class="tio arrow_forward my-auto c-gray font-s-18"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 block__item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="200">
                  <div class="media">
                    <div class="ico">
                      <i class="tio flight"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt d-flex justify-content-between">
                        <h4>Get your <br /> <b>Travel VISA</h4></b>
                        <i class="tio arrow_forward my-auto c-gray font-s-18"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- End. Info -->

        <!-- Start Services -->
        <section class="service__workspace features__workspace padding-py-12">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-5">
                <div class="title_sections">
                  <div class="before_title">
                    <span class="c-blue-red">Our Services</span>
                  </div>
                  <h2>Why MBBS Abroad?</h2>
                  <p> We have a lot of options and services that you will be delightened of and interested in going study abroad.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 fa_item mt-2">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
                  <div class="icon--top">
                    <div class="ico">
                      <i class="tio money"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4">
                        <h4>Low Tution Fees</h4>
                        <p>Studying MBBS abroad is way cheaper than studying in MBBS India with the fees being as low as ₹11.50 lakh for the entire MBBS course. The college fees will be paid in yearly instalments. Therefore, you don’t have to pay the entire fees at once.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item mt-2">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon--top">
                    <div class="ico icon--top">
                      <i class="tio wallet_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4">
                        <h4>No Donation</h4>
                        <p>Apart from the low fee structure, there will be no donation for studying MBBS abroad which is not the case for Indian private colleges. That is right, you will get MBBS admission without any donation.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item mt-2">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon--top">
                    <div class="ico">
                      <i class="tio top_security_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4">
                        <h4>MCI and WHO approved Medical Universities</h4>
                        <p>All Medical Universities are MCI and WHO approved and also approved by their respective national regulator of education, the student will be eligible to practice in India or any other country subject to fulfilment of the eligibility criteria.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item mt-2">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
                  <div class="icon--top">
                    <div class="ico">
                      <i class="tio mic_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4">
                        <h4>Medium of Instruction is English</h4>
                        <p>The medium of instruction will be English for MBBS in Kyrgyzstan, Philippines, Bangladesh, Russia, Ukraine and China. Teachers/lecturers will be adept in the language so as to facilitate learning. Students need not learn the local language for classroom learning.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item mt-2">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon--top">
                    <div class="ico">
                      <i class="tio globe"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4">
                        <h4>Global Job Opportunities</h4>
                        <p>MBBS abroad opens the doors of the world for you. You can practice anywhere in the world after completing your MBBS degree and complying with the eligibility criteria of the country of your choice where you wish to practice.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item mt-2">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon--top">
                    <div class="ico">
                      <i class="tio award_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4">
                        <h4>Advance Academic Curriculum</h4>
                        <p>The structure of the MBBS abroad is based on the latest and updated trends, findings and the most advanced curriculum present currently in the world. This means that the students are fed with the best and latest knowledge which benefits them in their career ahead.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item mt-2">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
                  <div class="icon--top">
                    <div class="ico">
                      <i class="tio credit_card_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4">
                        <h4>No Hidden Cost</h4>
                        <p>The dealings and consulting provided by <b>Wise Education Group</b> is 100% genuine. We retain the trust of our clients and have emerged as the leading institution. We guarantee 100% satisfaction from our services. There will be no hidden information or cost when you deal with <b>Wise Education Group</b>.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item mt-2">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon--top">
                    <div class="ico">
                      <i class="tio fastfood"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4 mb-4">
                        <h4>Indian Food Available</h4>
                        <p>With so many students studying MBBS abroad, Indian food is now easily accessible for the students via Indian mess. There are many restaurants providing Indian food, both vegetarian and non-vegetarian.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item mt-4">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon--top">
                    <div class="ico">
                      <i class="tio user_big_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt mt-4">
                        <h4>Indian Representative</h4>
                        <p><b>Wise Education Group</b> has its own office in Ukraine, Russia &amp; Armenia. Our representative lives there permanently and helps students out whenever the need arises. We also have our Indian partners at every university where we send students to. We guide students for the full duration of their stay abroad.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. Services -->

        <!-- Start Universities -->
        <section class="product__office padding-t-12" id="Offices">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-5">
                <div class="title_sections">
                  <h2>Explore <b>Universities</b>. <br /> All Of Them.</h2>
                  <p>From ‘Best-To-Go’ universities to exploring the best locations we have everything sorted.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- List All Universities -->
              <?php
              //University List
              $listAllUniversities = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wul.`we_univeristy_id` = wud.`we_university_id` JOIN `we_location_list` wll ON wll.`we_location_id` = wul.`we_univeristy_location_id` JOIN `we_country_list` wcl ON wcl.`we_country_id` = wul.`we_univeristy_country_id` LIMIT 5";
              $fetchAllUniversities = $db_conn->query($listAllUniversities);
              while ($getAllUniversitiesInfo = $fetchAllUniversities->fetch_assoc()) {
              ?>
                <div class="col-md-6 col-lg-4 mb-4 mt-4 mb-lg-0">
                  <a href="<?= $router->generate('university-details') . $getAllUniversitiesInfo['we_univeristy_alias']; ?>" class="boo__item" data-aos="fade-up" data-aos-delay="0">
                    <div class="img__off">
                      <img src="app/assets/img/universities/<?= ($getAllUniversitiesInfo['we_university_cover_image'] == '' ? 'university-default.jpeg' : '' . $getAllUniversitiesInfo["we_university_cover_image"] . ''); ?>" height="auto" width="auto" alt="<?= $getAllUniversitiesInfo['we_univeristy_name']; ?>" />
                    </div>
                    <div class="body__txt">
                      <div class="d-flex justify-content-between">
                        <div class="title_txt">
                          <h4><?= $getAllUniversitiesInfo['we_univeristy_name']; ?></h4>
                          <p><?= $getAllUniversitiesInfo['we_location_name'] . ', ' . $getAllUniversitiesInfo['we_country_name']; ?></p>
                        </div>
                        <div class="price"><?= $getAllUniversitiesInfo['we_university_data_course_fee']; ?></div>
                      </div>
                      <div class="desc_txt">
                        <h5 class="font-s-14 c-dark">Program Offered</h5>
                        <span class="font-12 c-gray mb-0"><?= $getAllUniversitiesInfo['we_university_data_course_offered']; ?></span>
                      </div>
                      <div class="desc_txt">
                        <h5 class="font-s-14 c-dark">Program Duration</h5>
                        <span class="font-12 c-gray mb-0"><?= $getAllUniversitiesInfo['we_university_data_course_duration']; ?></span>
                      </div>
                    </div>
                  </a>
                </div>
              <?php
              }
              ?>
              <div class="col-md-6 col-lg-3 mx-lg-auto">
                <div class="other__office" data-aos="fade-up" data-aos-delay="200">
                  <h3>Looking for all options?</h3>
                  <p>Go give us a try to find them, all of them.</p>
                  <a href="<?= $router->generate('search-page'); ?>" class="btn btn_md_primary sweep_top sweep_letter c-white bg-dark opacity-1 rounded-8">
                    <div class="inside_item">
                      <span data-hover="Let's go 🏃‍♂️">Search Now</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 text-center margin-t-5">
              <a href="<?= $router->generate('all-universities'); ?>" class="btn btn_md_primary rounded-8 border-1 c-dark text-center">
                Explore Universities
              </a>
            </div>
          </div>
        </section>
        <!-- End Universities -->

        <!-- Start About_office -->
        <section class="about__office margin-t-6 padding-t-6">
          <div class="container">
            <div class="head__picture">
              <!-- <img src="app/assets/img/backgrounds/banner-home-about.jpg" alt="About Wise Education" /> -->
              <iframe width="1110" height="650" src="https://www.youtube-nocookie.com/embed/videoseries?list=PLvBdY4ulW2Bn6yiigZr2UiG6ha6oCwLcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="body__content padding-b-12">
            <div class="container">
              <div class="info__company">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="title_sections" data-aos="fade-up" data-aos-delay="0">
                      <h2 class="c-white">About <strong>Wise Education</strong></h2>
                      <p class="c-white">We use office search alchemy to take the complexity and guesswork out of
                        finding your perfect
                        office space.</p>
                    </div>
                  </div>
                  <div class="col-lg-5 ml-auto mb-4 mb-lg-0">
                    <div class="description_full" data-aos="fade-up" data-aos-delay="100">
                      <p>
                        Wise Education, a premier organization in India was founded in 2014 with a vision to provide quality, economically viable education abroad.
                      </p>
                      <a href="<?= $router->generate('about-us'); ?>" class="btn btn_md_primary bg-white c-dark rounded-8 opacity-1">Learn More</a>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="item__counter" data-aos="fade-up" data-aos-delay="0">
                    <h4>
                      <span class="counter">60</span>
                      +
                    </h4>
                    <p>University partners</p>
                  </div>
                </div>
                <div class="col-md-3 mx-auto">
                  <div class="item__counter" data-aos="fade-up" data-aos-delay="100">
                    <h4>
                      <span class="counter">3000</span>
                      +
                    </h4>
                    <p>Faculties onboard</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="item__counter" data-aos="fade-up" data-aos-delay="200">
                    <h4>
                      <span class="counter">1500</span>
                      +
                    </h4>
                    <p>Classrooms available</p>
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-3">
                <div class="item__counter" data-aos="fade-up" data-aos-delay="200">
                  <h4>
                    <span class="counter">20,000</span>
                    +
                  </h4>
                  <p>Satisfied students</p>
                </div>
              </div>
            </div> -->

            </div>
          </div>
        </section>
        <!-- End About -->

        <!-- Start Testimonials -->
        <section class="test_monials__workspace margin-t-2 padding-t-10" id="Testimonial">
          <div class="container-fluid">
            <div class="box__others">
              <div class="row">
                <div class="col-lg-5 pl-lg-0">
                  <div class="img__people">
                    <img src="app/assets/img/backgrounds/testimonials.svg" alt="">
                    <div class="col-lg-5 item_title">
                      <div class="title_sections">
                        <div class="before_title">
                          <span class="c-blue-red">Testimonial</span>
                        </div>
                        <h2>What Our Students Say</h2>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-5 my-lg-auto mx-auto">
                  <div class="people__say">
                    <div class="swiper-container gallery-top swipe_circle"> 
                -->
                <!-- item Users -->
                <!-- <div class="person_thumbs">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img class="pagination rounded-circle" src="app/assets/img/persons/04.png" />
                          </div>
                          <div class="swiper-slide">
                            <img class="pagination rounded-circle" src="app/assets/img/persons/15.png" />
                          </div>
                          <div class="swiper-slide">
                            <img class="pagination rounded-circle" src="app/assets/img/persons/03.png" />
                          </div>
                          <div class="swiper-slide">
                            <img class="pagination rounded-circle" src="app/assets/img/persons/02.png" />
                          </div>
                          <div class="swiper-slide">
                            <img class="pagination rounded-circle" src="app/assets/img/persons/01.png" />
                          </div>
                        </div>
                      </div> 
                    -->
                <!-- item content -->
                <!-- <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="img__user">
                            <img src="app/assets/img/persons/04.png" alt="">
                          </div>
                          <div class="username👨">
                            <h4>Rosa J. Lightfoot</h4>
                            <span>Loan processing clerk</span>
                          </div>
                          <div class="content col-md-8 mx-auto text-center">
                            "Impressed with master class support of the team and really look forward for the
                            future.Really, really well made! Love that each component is handmade and customised.
                            Great
                            Work!"
                          </div>
                          <div class="stars__rate">
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="img__user">
                            <img src="app/assets/img/persons/15.png" alt="">
                          </div>
                          <div class="username👨">
                            <h4>Angel G. Wilson</h4>
                            <span>Military occupation</span>
                          </div>
                          <div class="content col-md-8 mx-auto text-center">
                            "Impressed with master class support of the team and really look forward for the
                            future.Really, really well made! Love that each component is handmade and customised.
                            Great
                            Work!"
                          </div>
                          <div class="stars__rate">
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="img__user">
                            <img src="app/assets/img/persons/03.png" alt="">
                          </div>
                          <div class="username👨">
                            <h4>Troy D. Snead</h4>
                            <span>UI Developer</span>
                          </div>
                          <div class="content col-md-8 mx-auto text-center">
                            "Impressed with master class support of the team and really look forward for the
                            future.Really, really well made! Love that each component is handmade and customised.
                            Great
                            Work!"
                          </div>
                          <div class="stars__rate">
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="img__user">
                            <img src="app/assets/img/persons/02.png" alt="">
                          </div>
                          <div class="username👨">
                            <h4>Nona J. Franklin</h4>
                            <span>Material scheduling</span>
                          </div>
                          <div class="content col-md-8 mx-auto text-center">
                            "Impressed with master class support of the team and really look forward for the
                            future.Really, really well made! Love that each component is handmade and customised.
                            Great
                            Work!"
                          </div>
                          <div class="stars__rate">
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="img__user">
                            <img src="app/assets/img/persons/01.png" alt="">
                          </div>
                          <div class="username👨">
                            <h4>John M. Davalos</h4>
                            <span>Attorney</span>
                          </div>
                          <div class="content col-md-8 mx-auto text-center">
                            "Impressed with master class support of the team and really look forward for the
                            future.Really, really well made! Love that each component is handmade and customised.
                            Great
                            Work!"
                          </div>
                          <div class="stars__rate">
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                            <i class="tio star"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="simple__particles">
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                    </div> -->
                <!-- End Swiper -->
                <!--
                  </div>
                </div> 
                -->
              </div>
            </div>
          </div>
        </section>
        <!-- End Testimonials -->

        <!-- Start CTA -->
        <section class="contact__workspace margin-t-2 padding-py-10 margin-b-10">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="title_sections mb-0">
                  <h2 class="c-white">Ready to give us a try?</h2>
                  <p class="c-white mb-0">Let your beautiful career begin with us, under our expert guidance.
                  </p>
                </div>
              </div>
              <div class="col-lg-7 mt-4 mt-lg-0 text-lg-right my-lg-auto">
                <a href="<?= $router->generate('apply-now'); ?>" class="btn btn_md_primary sweep_top sweep_letter rounded-8 opacity-1">
                  <div class="inside_item">
                    <span data-hover="Explore more">Give us a try</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- End CTA -->

      </main>

    </div>
    <!-- Content -->

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