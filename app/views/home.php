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

  <title>Wise Education - Your Study Abroad Destination Partner &bull; Home</title>

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
      
      <!-- Start Banner Section -->
      <section class="demo_1 banner_section banner_demo7">
          <div class="container">
            <div class="row">
              <div class="col-md-5 my-auto">
                <div class="banner_title">
                  <h1>Discover the perfect <strong>University</strong> for you.</h1>
                  <p>
                    We make it simple to <b><i>Find</i></b>, <b><i>Apply</i></b> & <b><i>Enroll</i></b> at <strong>Universities Abroad</strong>.
                  </p>
                  <a href="#" class="btn btn_md_primary rounded-8 bg-blue c-white"><div>Find a Program</div></a>
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
                <img class="ill_05" src="https://ouch-cdn.icons8.com/preview/281/94c91ae7-7c5d-4817-a79f-a543c364c03c.png" />
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner Section -->

        <section class="abo_company">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item bg-green">
                  <!-- <span class="d-block c-white font-s-16">Search.</span> -->
                  <div class="title_sections">
                    <img class="img-fluid mb-3 centered" src="https://img.icons8.com/bubbles/344/graduation-cap.png" />
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
                  <img class="img-fluid mb-3 centered" src="https://img.icons8.com/bubbles/344/rescan-document.png" />
                  <div class="title_sections">
                    <h2 class="c-white">Application & Document Guide</h2>
                    <p class="c-white">
                      We'll get you to the right place to start your application.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 emo">
                <div class="gq_item ill_item bg-orange">
                  <!-- <span class="d-block c-dark font-s-16">Apply.</span> -->
                  <img class="img-fluid mb-3 centered" src="https://img.icons8.com/bubbles/344/passport.png" />
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

        <!-- Start Banner Section -->
        <section class="demo_1 demo__charity demo__workspace" id="Discover">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-lg-6">
                <div class="banner_title workspace_title">
                  <h1>
                    Planning for a <span class="c-orange-red">Brighter & Better</span> Future?
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
                        <h2>One World. One Search</h2>
                        <p>Let's begin a new world of education, all together.</p>
                      </div>
                      <form class="form-row">
                        <div class="col-6">
                          <div class="form-group">
                            <label>University Type</label>
                            <select class="form-control custom-select">
                              <option>Personal</option>
                              <option>Teams</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Course Type</label>
                            <select class="form-control custom-select">
                              <option>Personal</option>
                              <option>Teams</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Country</label>
                            <select class="form-control custom-select">
                              <option>Daily</option>
                              <option>Monthly</option>
                              <option>Annual</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Location</label>
                            <select class="form-control custom-select">
                              <option>Daily</option>
                              <option>Monthly</option>
                              <option>Annual</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Course Option</label>
                            <select class="form-control custom-select">
                              <option>Daily</option>
                              <option>Monthly</option>
                              <option>Annual</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Program Type</label>
                            <select class="form-control custom-select">
                              <option>Creative Studio</option>
                              <option>Small Office</option>
                              <option>One-person office</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="button" class="btn btn__search rounded-pill scale border-0 sweep_letter sweep_top">Start Your Search <i class="tio chevron_right mr-1 align-middle font-s-16"></i></button>
                          <p class="text-center font-s-14 c-gray mt-3 mb-0"><i>Need any assistance?</i> <br/> Talk to Us: <a href="tel:+919439937117" class="c-blue">+91 9439937117</a> / <a href="tel:+380636908318" class="c-blue">+380 63 690 8318</a>
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
              <img src="app/assets/img/workspace/office.jpg" alt="">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="item__conatct">
                    <div class="item__top">
                      <h3>Let us do the heavy lifting</h3>
                      <p>Our team of personal property advisors will manage your entire search for free</p>
                    </div>
                    <div class="item__bottom">
                      <div class="person__peo">
                        <img src="app/assets/img/persons/01.png" alt="">
                        <img src="app/assets/img/persons/15.png" alt="">
                        <img src="app/assets/img/persons/02.png" alt="">
                      </div>
                      <p class="c-gray font-s-14 mb-0">Call Us: <a href="tel:+44 20 3868 6470" class="c-orange-red">+44
                          20
                          3868 6470</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
        <!-- End Banner -->

        <!-- Start service__workspace -->
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
                        <h4>Find Your <b>Dream <br>University</h4></b>
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
                        <h4>Fill the <b>Application <br>Form</h4></b>
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
                        <h4>Get <b>Travel VISA & <br>Move</h4></b>
                        <i class="tio arrow_forward my-auto c-gray font-s-18"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- End. service__workspace -->

        <!-- Start product__office -->
        <section class="product__office padding-t-12" id="Offices">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-5">
                <div class="title_sections">
                  <h2>Search Offices. All Of Them.</h2>
                  <p>From ‘Ready-To-Go’ To ‘Build-Your-Own’, We List Every Office Space In The City. Find Yours.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="boo__item" data-aos="fade-up" data-aos-delay="0">
                  <div class="img__off">
                    <img src="app/assets/img/workspace/12.jpg">
                  </div>
                  <div class="body__txt">
                    <div class="d-flex justify-content-between">
                      <div class="title_txt">
                        <h4>WeWork - Old Street</h4>
                        <p>N1, London</p>
                      </div>
                      <div class="price">£350.00</div>
                    </div>
                    <div class="desc_txt">
                      <h5 class="font-s-14 c-dark">UK£ 400/m</h5>
                      <span class="font-12 c-gray mb-0">Size</span>
                    </div>
                    <div class="desc_txt">
                      <h5 class="font-s-14 c-dark">UK£ 400/m</h5>
                      <span class="font-12 c-gray mb-0">Size</span>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="boo__item" data-aos="fade-up" data-aos-delay="100">
                  <div class="img__off">
                    <img src="app/assets/img/workspace/13.jpg">
                  </div>
                  <div class="body__txt">
                    <div class="d-flex justify-content-between">
                      <div class="title_txt">
                        <h4>WeWork - Old Street</h4>
                        <p>N1, London</p>
                      </div>
                      <div class="price">£225.00</div>
                    </div>
                    <div class="desc_txt">
                      <h5 class="font-s-14 c-dark">UK£ 400/m</h5>
                      <span class="font-12 c-gray mb-0">Size</span>
                    </div>
                    <div class="desc_txt">
                      <h5 class="font-s-14 c-dark">UK£ 400/m</h5>
                      <span class="font-12 c-gray mb-0">Size</span>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-6 col-lg-3 mx-lg-auto">
                <div class="other__office" data-aos="fade-up" data-aos-delay="200">
                  <h3>Mix Your Own Space</h3>
                  <p>Looking to build on your brand and not someone else’s? Sprinkle your own </p>
                  <a href="#" class="btn btn_md_primary sweep_top sweep_letter c-white bg-dark opacity-1 rounded-8">
                    <div class="inside_item">
                      <span data-hover="Let's go 🏃‍♂️">Talk to expert</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 text-center margin-t-5">
              <a href="#" class="btn btn_md_primary rounded-8 border-1 c-dark text-center">
                Search Office
              </a>
            </div>
          </div>
        </section>
        <!-- End. product__office -->

        <!-- Start About_office -->
        <section class="about__office margin-t-6 padding-t-6">
          <div class="container">
            <div class="head__picture">
              <img src="app/assets/img/workspace/0654.jpg" alt="">
            </div>
          </div>
          <div class="body__content padding-b-12">
            <div class="container">
              <div class="info__company">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="title_sections" data-aos="fade-up" data-aos-delay="0">
                      <h2 class="c-white">About WorkSpace</h2>
                      <p class="c-white">We use office search alchemy to take the complexity and guesswork out of
                        finding your perfect
                        office space.</p>
                    </div>
                  </div>
                  <div class="col-lg-5 ml-auto mb-4 mb-lg-0">
                    <div class="description_full" data-aos="fade-up" data-aos-delay="100">
                      <p>We’ve developed the industry’s most advanced tech platform, optimised to simplify and
                        supercharge
                        your search.
                      </p>
                      <a href="#" class="btn btn_md_primary bg-white c-dark rounded-8 opacity-1">Learn More</a>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="item__counter" data-aos="fade-up" data-aos-delay="0">
                    <h4>
                      <span class="counter">300</span>
                      %
                    </h4>
                    <p>Faster than the average office search</p>
                  </div>
                </div>
                <div class="col-md-3 mx-auto">
                  <div class="item__counter" data-aos="fade-up" data-aos-delay="100">
                    <h4>
                      <span>4.7/5</span>
                    </h4>
                    <p>Google star rating</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="item__counter" data-aos="fade-up" data-aos-delay="200">
                    <h4>
                      <span class="counter">100</span>
                      %
                    </h4>
                    <p>Market coverage</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- End. about__office -->

        <!-- Start service__about -->
        <section class="service__about padding-py-12">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-sm-flex justify-content-between">
                  <div class="title_sections mb-0">
                    <div class="before_title">
                      <span class="c-orange-red">Solutions</span>
                    </div>
                    <h2>Solutions designed for all <br> your needs</h2>
                  </div>
                  <div class="my-auto">
                    <a href="#" class="btn d-block btn_md_primary sweep_top sweep_letter border-1 opacity-1 rounded-8">
                      <div class="inside_item">
                        <span data-hover="All Availability">All Availability</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="body__tab">
              <div class="row">
                <div class="col-lg-4">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Private Office</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Coworking Space</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">On-Demand Access</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Event Space</a>
                  </div>
                </div>

                <div class="col-lg-8 ml-auto">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <div class="block_video">
                        <div class="cover_video">
                          <img src="app/assets/img/workspace/15.jpg" alt="">
                          <div class="icon_played">
                            <button type="button" class="btn btn_video" data-toggle="modal" data-src="https://www.youtube.com/embed/VvHoHw5AWTk" data-target="#mdllVideo">
                              <div class="scale rounded-circle b play_video">
                                <i class="tio play"></i>
                              </div>
                            </button>
                          </div>
                        </div>
                        <div class="about__info">
                          <p>Volutpat sed cras ornare arcu dui vivamus. Enim praesent elementum facilisis leo vel
                            fringilla. Eget sit amet tellus cras adipiscing enim eu. Laoreet id donec ultrices tincidunt
                            arcu. Lectus vestibulum mattis ullamcorper velit.</p>
                          <a href="#">
                            View Availability
                            <i class="tio chevron_right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <div class="block_video">
                        <div class="cover_video">
                          <img src="app/assets/img/workspace/16.jpg" alt="">
                          <div class="icon_played">
                            <button type="button" class="btn btn_video" data-toggle="modal" data-src="https://www.youtube.com/embed/VvHoHw5AWTk" data-target="#mdllVideo">
                              <div class="scale rounded-circle b play_video">
                                <i class="tio play"></i>
                              </div>
                            </button>
                          </div>
                        </div>
                        <div class="about__info">
                          <p>Volutpat sed cras ornare arcu dui vivamus. Enim praesent elementum facilisis leo vel
                            fringilla. Eget sit amet tellus cras adipiscing enim eu. Laoreet id donec ultrices tincidunt
                            arcu. Lectus vestibulum mattis ullamcorper velit.</p>
                          <a href="#">
                            View Availability
                            <i class="tio chevron_right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                      <div class="block_video">
                        <div class="cover_video">
                          <img src="app/assets/img/workspace/17.jpg" alt="">
                          <div class="icon_played">
                            <button type="button" class="btn btn_video" data-toggle="modal" data-src="https://www.youtube.com/embed/VvHoHw5AWTk" data-target="#mdllVideo">
                              <div class="scale rounded-circle b play_video">
                                <i class="tio play"></i>
                              </div>
                            </button>
                          </div>
                        </div>
                        <div class="about__info">
                          <p>Volutpat sed cras ornare arcu dui vivamus. Enim praesent elementum facilisis leo vel
                            fringilla. Eget sit amet tellus cras adipiscing enim eu. Laoreet id donec ultrices tincidunt
                            arcu. Lectus vestibulum mattis ullamcorper velit.</p>
                          <a href="#">
                            View Availability
                            <i class="tio chevron_right"></i>
                          </a>
                        </div>
                      </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                      <div class="block_video">
                        <div class="cover_video">
                          <img src="app/assets/img/workspace/18.jpg" alt="">
                          <div class="icon_played">
                            <button type="button" class="btn btn_video" data-toggle="modal" data-src="https://www.youtube.com/embed/VvHoHw5AWTk" data-target="#mdllVideo">
                              <div class="scale rounded-circle b play_video">
                                <i class="tio play"></i>
                              </div>
                            </button>
                          </div>
                        </div>
                        <div class="about__info">
                          <p>Volutpat sed cras ornare arcu dui vivamus. Enim praesent elementum facilisis leo vel
                            fringilla. Eget sit amet tellus cras adipiscing enim eu. Laoreet id donec ultrices tincidunt
                            arcu. Lectus vestibulum mattis ullamcorper velit.</p>
                          <a href="#">
                            View Availability
                            <i class="tio chevron_right"></i>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- End. service__about -->

        <!-- Start features__workspace -->
        <section class="service__workspace features__workspace padding-py-12" id="Features">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-5">
                <div class="title_sections">
                  <div class="before_title">
                    <span class="c-orange-red">Features</span>
                  </div>
                  <h2>How does Rakon help your Coworking Space?</h2>
                  <p> Rakon was developed to automate these everyday tasks and help other coworking spaces to run
                    effortlessly.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 fa_item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
                  <div class="media">
                    <div class="ico">
                      <i class="tio dashboard_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt">
                        <h4>Activity Dashboard</h4>
                        <p>Have Full Control of Your Space</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                  <div class="media">
                    <div class="ico">
                      <i class="tio face_id"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt">
                        <h4>White-Label Customization</h4>
                        <p>Add Your Brand</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="200">
                  <div class="media">
                    <div class="ico">
                      <i class="tio account_square_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt">
                        <h4>Member Profiles</h4>
                        <p>Know Your Members</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
                  <div class="media">
                    <div class="ico">
                      <i class="tio file_text_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt">
                        <h4>Plans Setup</h4>
                        <p>Create Highly Customizable Plans</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                  <div class="media">
                    <div class="ico">
                      <i class="tio credit_card_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt">
                        <h4>Billing & Payments</h4>
                        <p>Keep your Billings in Check</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="200">
                  <div class="media">
                    <div class="ico">
                      <i class="tio user_big_outlined"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt">
                        <h4>Member View</h4>
                        <p>Track Check-Ins</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
                  <div class="media">
                    <div class="ico">
                      <i class="tio earth_west"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt">
                        <h4>Spaces Mapping</h4>
                        <p>Open Multiple Locations</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 fa_item">
                <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
                  <div class="media">
                    <div class="ico">
                      <i class="tio chart_bar_1"></i>
                    </div>
                    <div class="media-body">
                      <div class="t_xt">
                        <h4>Business Analytics</h4>
                        <p>Learn from Your Data</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. features__workspace -->

        <!-- Start news__workspace -->
        <section class="news__workspace margin-t-5 padding-t-12">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="title_sections">
                  <div class="before_title">
                    <span class="c-orange-red">Latest</span>
                  </div>
                  <h2>New for you</h2>
                  <p>Proin sagittis nisl rhoncus mattis rhoncus. </p>
                </div>
                <!-- item_news -->
                <a href="#" class="fa__news mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                  <div class="img__cover">
                    <img src="app/assets/img/workspace/16.jpg" alt="">
                  </div>
                  <div class="body__content">
                    <span class="c-aquamarine">Report</span>
                    <h3>2020 State of the Flexible Workspace Industry Report</h3>
                    <p>Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et.</p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-3 ml-lg-auto">
                <!-- item_news -->
                <a href="#" class="fa__news margin-b-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="img__cover sm_height">
                    <img src="app/assets/img/workspace/17.jpg" alt="">
                  </div>
                  <div class="body__content">
                    <span class="c-aquamarine">Report</span>
                    <h3>Corporate Companies: The 9 Best Executive Office</h3>
                  </div>
                </a>
                <!-- item_news -->
                <a href="#" class="fa__news" data-aos="fade-up" data-aos-delay="100">
                  <div class="img__cover sm_height">
                    <img src="app/assets/img/workspace/20.jpg" alt="">
                  </div>
                  <div class="body__content">
                    <span class="c-orange-red">Guide</span>
                    <h3>What’s actually included in a Serviced in London?</h3>
                  </div>
                </a>
              </div>

              <div class="col-md-6 col-lg-3 ml-lg-auto block_end">
                <!-- item_news -->
                <a href="#" class="fa__news margin-b-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="img__cover sm_height">
                    <img src="app/assets/img/workspace/15.jpg" alt="">
                  </div>
                  <div class="body__content">
                    <span class="c-orange-red">Guide</span>
                    <h3>Which Is the Best Serviced Office in London?</h3>
                  </div>
                </a>
                <!-- item_news -->
                <a href="#" class="fa__news " data-aos="fade-up" data-aos-delay="100">
                  <div class="img__cover sm_height">
                    <img src="app/assets/img/workspace/19.jpg" alt="">
                  </div>
                  <div class="body__content">
                    <span class="c-aquamarine">Report</span>
                    <h3>The Coolest Coworking Spaces in London.</h3>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </section>
        <!-- End news__workspace -->

        <!-- Start test_monials__workspace -->
        <section class="test_monials__workspace margin-t-2 padding-t-10" id="Testimonial">
          <div class="container-fluid">
            <div class="box__others">
              <div class="row">
                <div class="col-lg-5 pl-lg-0">
                  <div class="img__people">
                    <img src="app/assets/img/workspace/others.svg" alt="">
                    <div class="col-lg-5 item_title">
                      <div class="title_sections">
                        <div class="before_title">
                          <span class="c-orange-red">Testimonial</span>
                        </div>
                        <h2>What Our Clients Say</h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 my-lg-auto mx-auto">
                  <div class="people__say">
                    <div class="swiper-container gallery-top swipe_circle">
                      <!-- item Users -->
                      <div class="person_thumbs">
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
                      <!-- item content -->
                      <div class="swiper-wrapper">
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
                    </div>
                    <!-- End Swiper -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. test_monials__workspace -->

        <!-- Start contact__workspace -->
        <section class="contact__workspace margin-t-12 padding-py-10">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="title_sections mb-0">
                  <h2 class="c-white">Ready to give us a try?</h2>
                  <p class="c-white mb-0">You will be in company with some of the greatest coworking and shared
                    workspaces.
                  </p>
                </div>
              </div>
              <div class="col-lg-7 mt-4 mt-lg-0 text-lg-right my-lg-auto">
                <a href="#" class="btn btn_md_primary sweep_top sweep_letter rounded-8 opacity-1">
                  <div class="inside_item">
                    <span data-hover="Try it free">Try it free</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- End.contact__workspace -->
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

    <!-- Website credit -->
    <a href="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" target="_blank" class="rakon_purchase">
      <button type="button" class="btn btn_purch">
        <div class="icon">
          <img src="app/assets/img/rakon/envato.svg" />
        </div>
        <span class="txt">Little Gyaani</span>
      </button>
    </a>
    <!-- End. -->

    <!-- Tosts -->
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
      <div class="toast toast_demo" id="myTost" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-autohide="false">
        <div class="toast-body">
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <i class="tio clear"></i>
          </button>
          <h5>Hi there 👋</h5>
          <p>We are glad you joined us <a href="#">Join us</a></p>
        </div>
      </div>
    </div>
    <!-- End. Toasts -->

    <!-- Start Section Loader -->
    <section class="loading_overlay">
      <div class="loader_logo">
        <img class="logo" src="https://www.youroaks.com/assets/oaks-loader.gif" />
      </div>
    </section>
    <!-- End. Loader -->
  </div>
  <!-- End. wrapper -->

</body>

</html>

<!-- Include Scripts -->
<?php
//Calling Scripts Template
include_once 'app/assets/templates/template-scripts.php';
?>