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

    <title> <?= $title_constant; ?> &bull; FAQs</title>

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

            <!-- Stat Main -->
            <main>

                <!-- Start FAQs Banner -->
                <section class="pt_banner_inner banner_px_image single_blog featured_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="app/assets/img/backgrounds/banner-faqs.jpeg" height="auto" width="auto" alt="Countries WISE EDUCATIONS" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-8 col-lg-6">
                                <div class="banner_title_inner margin-b-10 margin-t-10">
                                    <h1 data-aos="fade-up" data-aos-delay="0">
                                        Frequenty Asked Questions(FAQs)
                                    </h1>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End FAQs Banner -->

                <!-- Start faq_one_inner -->
                <section class="faq_one_inner py-0 mt-0 margin-b-6 w-100">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-5">
                                <div class="title_sections_inner margin-b-5 margin-t-10">
                                    <h2>General Questions</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <!-- block Collapse -->
                                <div class="faq_section faq_demo3 faq_with_icon">
                                    <div class="block_faq">
                                        <div class="accordion" id="accordionExample">
                                            <?php
                                            //List ALL FAQs
                                            $getAllFAQs = "SELECT * FROM `we_faq_list`";
                                            $fetchAllFAQs = $db_conn->query($getAllFAQs);
                                            while ($listAllFAQs = $fetchAllFAQs->fetch_assoc()) {
                                            ?>
                                                <div class="card">
                                                    <div class="card-header <?= ($listAllFAQs['we_faq_id'] == 1) ? 'active' : ''; ?>" id="heading<?= $listAllFAQs['we_faq_id']; ?>">
                                                        <h3 class="mb-0">
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $listAllFAQs['we_faq_id']; ?>" aria-expanded="true" aria-controls="collapse<?= $listAllFAQs['we_faq_id']; ?>">
                                                                <?= $listAllFAQs['we_faq_question']; ?>
                                                            </button>
                                                        </h3>
                                                    </div>
                                                    <div id="collapse<?= $listAllFAQs['we_faq_id']; ?>" class="collapse <?= ($listAllFAQs['we_faq_id'] == 1) ? 'show' : ''; ?>" aria-labelledby="heading<?= $listAllFAQs['we_faq_id']; ?>" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p class="mb-0">
                                                                <?= $listAllFAQs['we_faq_answer']; ?>
                                                            </p>
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
                        </div>
                    </div>
                </section>
                <!-- End. faq_one_inner -->

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