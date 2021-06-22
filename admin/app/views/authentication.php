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
    <title><?= $title_constant; ?> | Admin Login</title>

    <?php
    //Calling Header Section
    include_once 'app/assets/templates/template-header.php';
    ?>

</head>

<body class="d-flex align-items-center min-h-100">

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pt-0">
        <!-- Content -->
        <div class="container-fluid px-3">
            <div class="row">
                <!-- Cover -->
                <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
                    <!-- Start Logo -->
                    <div class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
                        <div class="d-none d-lg-flex justify-content-between">
                            <a href="index.html">
                                <img class="w-100" src="<?= $base_URI; ?>/app/assets/img/logos/wise-education.png" alt="Image Description" style="min-width: 7rem; max-width: 7rem;">
                            </a>
                        </div>
                    </div>
                    <!-- End Logo -->

                    <div style="max-width: 23rem;">
                        <div class="text-center mb-5">
                            <img class="img-fluid" src="<?= $base_URI; ?>/app/assets/svg/illustrations/chat.svg" alt="Image Description" style="width: 12rem;">
                        </div>

                        <div class="mb-5">
                            <h2 class="display-4">Access the Dashboard : <strong>WISE GROUP</strong></h2>
                        </div>

                        <!-- List Checked -->
                        <!-- <ul class="list-checked list-checked-lg list-checked-primary list-unstyled-py-4">
                            <li class="list-checked-item">
                                <span class="d-block font-weight-bold mb-1">All-in-one tool</span>
                                Build, run, and scale your apps - end to end
                            </li>

                            <li class="list-checked-item">
                                <span class="d-block font-weight-bold mb-1">Easily add &amp; manage your services</span>
                                It brings together your tasks, projects, timelines, files and more
                            </li>
                        </ul> -->
                        <!-- End List Checked -->

                        <!-- <div class="row justify-content-between mt-5 gx-2">
                            <div class="col">
                                <img class="img-fluid" src="<?= $base_URI; ?>/app/assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="<?= $base_URI; ?>/app/assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="<?= $base_URI; ?>/app/assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="<?= $base_URI; ?>/app/assets/svg/brands/layar-gray.svg" alt="Image Description">
                            </div>
                        </div> -->
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Cover -->

                <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
                    <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
                        <!-- Form -->
                        <form class="js-validate" id="adminLogin" name="admin-login" method="POST" action="javascript:void(0);" enctype="multipart/form-data" autocomplete="off">
                            <div class="text-center mb-5">
                                <h1 class="display-4"><strong>Sign In</strong></h1>
                                <p>to access the Dashboard.</p>
                            </div>

                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="input-label" for="signupSrEmail">Your Email*</label>
                                <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="Type your email address here" aria-label="Markwilliams@example.com" required data-msg="Please enter a valid email address." required />
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="input-label" for="signupSrPassword" tabindex="0">
                                    <span class="d-flex justify-content-between align-items-center">
                                        Your Password*
                                    </span>
                                </label>

                                <div class="input-group input-group-merge">
                                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="Type your password here" aria-label="8+ characters required" required data-msg="Your password is invalid. Please try again." data-hs-toggle-password-options='{
                                            "target": "#changePassTarget",
                                            "defaultClass": "tio-hidden-outlined",
                                            "showClass": "tio-visible-outlined",
                                            "classChangeTarget": "#changePassIcon"
                                        }' required />
                                    <div id="changePassTarget" class="input-group-append">
                                        <a class="input-group-text" href="javascript:;">
                                            <i id="changePassIcon" class="tio-visible-outlined"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Checkbox -->
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                                    <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                                </div>
                            </div>
                            <!-- End Checkbox -->

                            <button type="submit" class="btn btn-lg btn-block btn-primary">Sign in</button>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
            <!-- End Row -->
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

</body>

</html>

<!-- ========== START SCRIPT SECTION ========== -->

<!-- Include Scripts -->
<?php
//Calling Scripts Template
include_once 'app/assets/templates/template-scripts.php';
?>

<!-- ========== END SCRIPT SECTION ========== -->