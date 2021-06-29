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

    <!-- Title -->
    <title><?= $title_constant; ?> | FAQ Add</title>

    <?php
    //Calling Header Section
    include_once 'app/assets/templates/template-header.php';
    ?>

</head>

<body class="footer-offset footer-offset has-navbar-vertical-aside navbar-vertical-aside-show-xl">

    <!-- ========== HEADER ========== -->

    <?php
    //Calling Sidebar Section
    include_once 'app/assets/templates/template-navigation.php';
    ?>

    <!-- ========== END HEADER ========== -->

    <!-- ========== START NAVIGATION ========== -->

    <?php
    //Calling Sidebar Section
    include_once 'app/assets/templates/template-sidebar.php';
    ?>

    <!-- ========== END NAVIGATION ========== -->

    <!-- ========== START MAIN ========== -->
    <main id="content" role="main" class="main pointer-event">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Add FAQ</h1>
                    </div>
                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="javascript:void(0);"> <i class="tio-help mr-1"></i> View FAQs </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <div class="row gx-2 gx-lg-3">
                <div class="col-12">
                    <form id="addFAQ" method="POST" action="javascript:void(0);" enctype="multipart/form-data">
                        <div id="faqsection">
                            <div class="row form-group">
                                <div class="col-lg-5">
                                    <label>FAQ Question</label>
                                    <input type="text" class="form-control form-control-hover-light" name="faq_question[]" placeholder="Type Question here" aria-label="FAQ Question" required />
                                </div>
                                <div class="col-lg-5">
                                    <label>FAQ Answer</label>
                                    <input type="text" class="form-control form-control-hover-light" name="faq_answer[]" placeholder="Type Answer here" aria-label="FAQ Answer" required />
                                </div>
                                <div class="col-lg-2">
                                    <label>Action(+)</label>
                                    <br />
                                    <button type="button" id="addRow" class="btn btn-success">+</button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Save FAQ</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Content -->

        <!-- ========== START FOOTER ========== -->
        <?php
        //Optional Call
        include_once 'app/assets/templates/template-footer.php';
        ?>
        <!-- ========== END FOOTER ========== -->

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <?php
    //Optional Call
    //include_once '';//template-misc
    ?>
    <!-- ========== END SECONDARY CONTENTS ========== -->

</body>

</html>

<!-- ========== START SCRIPT SECTION ========== -->

<!-- Include Scripts -->
<?php
//Calling Scripts Template
include_once 'app/assets/templates/template-scripts.php';
?>

<!-- ========== END SCRIPT SECTION ========== -->