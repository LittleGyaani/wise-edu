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

    <title> <?= $title_constant; ?> &bull; Contact Us</title>

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

            <!-- Stat main -->
            <main>
                <!-- Start banner_about -->
                <section class="pt_banner_inner banner_px_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="https://images.unsplash.com/photo-1560264280-88b68371db39?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=auto&q=80" height="auto" width="auto" alt="Contact Wise Education" />
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <div class="banner_title_inner">

                                    <h1 data-aos="fade-up" data-aos-delay="0">
                                        Contact us
                                    </h1>
                                    <p data-aos="fade-up" data-aos-delay="100">
                                        Have any query or doubt, we are here.
                                    </p>

                                    <!-- <div data-aos="fade-up" data-aos-delay="200">
                                        <a href="#" class="btn btn_sm_primary bg-red c-white rounded-8">Let's talk!</a>
                                    </div> -->

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End banner_about -->

                <!-- Start section_contact_four -->
                <section class="section_contact_five contact_six margin-t-5 padding-t-7 margin-b-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="title_sections_inner">
                                    <h2>Get in touch</h2>
                                </div>
                                <div class="information_agency d-md-flex">
                                    <div class="item_data mr-4">
                                        <p>Call Support</p>
                                        <a class="tel" href="tel:+919439937117">+91 9439 937 117</a>
                                        <br />
                                        <a class="tel" href="tel:+380636908318">+38 0636 908 318</a>
                                    </div>
                                    <div class="item_data">
                                        <p>Mail Support</p>
                                        <a class="tel" href="mailto:enquiry@wiseeducation.in">enquiry@wiseeducation.in</a>
                                        <br/>
                                        <a class="tel" href="mailto:info@wiseeducation.in">info@wiseeducation.in</a>
                                    </div>
                                </div>

                                <h3 class="font-s-16 font-w-500 c-gray margin-t-4">HO - Bhubaneswar, OD</h3>
                                <p class="font-s-16">Plot No. : 191/A, Kharavela Nagar, Unit-3, Bhubaneswar, Odisha, 751001 India</p>

                                <div class="information_agency margin-t-4">
                                    <div class="item_data">
                                        <p>Office Hours</p>
                                        <div>(Mon-Sat) 9am to 9pm IST/GMT+5:30</div>
                                    </div>
                                </div>

                                <div class="scoail__media">

                                    <a href="https://www.facebook.com/wiseeducation" target="_blank" aria-label="Like Wise Group on Facebook" data-microtip-position="top" role="tooltip">
                                        <i class="tio facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/wiseeducationg2" target="_blank" aria-label="Follow Wise Group on Twitter" data-microtip-position="top" role="tooltip">
                                        <i class="tio twitter"></i>
                                    </a>
                                    <a href="https://instagram.com/gwiseeducation/" target="_blank" aria-label="Follow Wise Group on Instagram" data-microtip-position="top" role="tooltip">
                                        <i class="tio instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UC1OlVHFElQ0HTvmXIkaZ28g" target="_blank" aria-label="Subscribe Wise Group on YouTube" data-microtip-position="top" role="tooltip">
                                        <i class="tio youtube"></i>
                                    </a>
                                </div>


                            </div>
                            <div class="col-lg-6 ml-auto">

                                <div class="form_cc_four">

                                    <form class="row" method="post" action="javascript:void(0);" name="contact-form" id="contactForm" enctype="multipart/form-data">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Full name*</label>
                                                <input name="full-name" id="fullName" type="text" class="form-control" placeholder="ex. BRAHMANANDA MOHANTY" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email address*</label>
                                                <input name="email-address" id="emailAddress" type="email" class="form-control" placeholder="ex. bmohanty@live.com" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone number*</label>
                                                <input name="phone-number" id="phoneNumber" type="telphone" class="form-control" placeholder="ex. +91 9853 233 951" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Enquiry type*</label>
                                                <select name="enquiry-type" id="enquiryType" class="form-control custom-select" required>
                                                    <option value="" selected disabled>Select Subject</option>
                                                    <option value="general-enquiry">General Enquiry</option>
                                                    <option value="admission-enquiry">Admission Enquiry</option>
                                                    <option value="general-support">Support</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea name="message-details" id="messageDetails" class="form-control" rows="7" placeholder="Desribe everything here."></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12 d-md-flex justify-content-between margin-t-2">
                                            <button type="submit" class="btn btn_md_primary bg-red rounded-8 c-white h-fit-content">
                                                Send Enquiry
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. section_contact_four -->

                <!-- Start sec__office_location -->
                <section class="sec__office_location with_map_office padding-t-15 padding-b-12">
                    <div class="container">
                        <div class="title_sections_inner justify-content-lg-center">
                            <center>
                                <h2>We are also located at</h2>
                            </center>
                        </div>
                        <div class="office_location_icon">
                            <div class="row justify-content-lg-center">
                                <?php
                                //List All Office Location
                                $fetchAllOfficeLocations = "SELECT * FROM `we_contact_list` WHERE `we_contact_status` = 1 ORDER BY `we_contact_location` ASC";
                                $getAllOfficeLocations = $db_conn->query($fetchAllOfficeLocations);
                                while ($listAllOfficeLocations = $getAllOfficeLocations->fetch_assoc()) {
                                ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="block_loaction" data-aos="fade-up" data-aos-delay="200">
                                            <div class="title">
                                                <?= $listAllOfficeLocations['we_contact_location']; ?> (<?= $listAllOfficeLocations['we_contact_office_type']; ?>)
                                            </div>
                                            <div class="item_locat">
                                                <p class="add_ress">
                                                    <?= $listAllOfficeLocations['we_contact_address']; ?>
                                                </p>

                                                <img class="responsive" src="app/assets/img/icons/company-building.png" height="75" width="75" alt="Wise Group <?= $listAllOfficeLocations['we_contact_location']; ?> Office" />

                                                <div class="availability mt-2">
                                                    <span>Office Timing</span>
                                                    <p><?= $listAllOfficeLocations['we_contact_timing']; ?></p>
                                                </div>
                                                <div class="availability mb-0">
                                                    <span>General enquiries</span>
                                                    <a href="mailto:<?= $listAllOfficeLocations['we_contact_email']; ?>" class="c-blue"><?= $listAllOfficeLocations['we_contact_email']; ?></a>
                                                </div>
                                                <div class="availability mb-0 mt-1">
                                                    <span>Call Support</span>
                                                    <a href="javascript:void(0);" class="c-blue"><?= str_replace(',', ', ', $listAllOfficeLocations['we_contact_phone']); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
        </div>
        </section>
        <!-- End. sec__office_location -->

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