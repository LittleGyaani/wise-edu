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
    <title><?= $title_constant; ?> | Program Add</title>

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
                        <h1 class="page-header-title">Add Program</h1>
                    </div>
                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="javascript:void(0);"> <i class="tio-document mr-1"></i> View Programs </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <div class="row gx-2 gx-lg-3">
                <div class="col-12">
                    <form method="POST" name="student_testimonial_form" id="studentTestimonialForm" action="javascript:void(0);" enctype="multipart/form-data">
                        <!-- Card -->
                        <div class="card">
                            <!-- Profile Cover -->
                            <div class="profile-cover">
                            </div>
                            <!-- End Profile Cover -->

                            <!-- Avatar -->
                            <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">

                                <img id="avatarImg" class="avatar-img" src="https://image.flaticon.com/icons/png/512/387/387561.png" alt="Student Photo" />

                                    <input type="file" accept="image/*" class="js-file-attach avatar-uploader-input" id="avatarUploader" required />

                                <span class="avatar-uploader-trigger">
                                    <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                </span>

                            </label>
                            <!-- End Avatar -->

                            <!-- Body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="d-block font-size-sm mb-2">Student Name*</span>
                                        <input type="text" class="form-control form-control-pill" id="studentName" name="student_name" placeholder="Student Name" aria-label="Student Name" required />
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="d-block font-size-sm mb-2">Student Designation*</span>
                                        <input type="text" class="form-control form-control-pill" id="studentDesignation" name="student_designation" placeholder="Student Designation" aria-label="Student Designation" required />
                                    </div>
                                </div>
                                <!-- End Row -->
                                <br />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="d-block font-size-sm mb-2">Student Testimonial*</span>
                                        <textarea name="student_testimonial" id="studentTestimonial" class="form-control form-control-pill" rows="4" maxlength="100">
                                    </textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-info">Add Student Testimonial</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Body -->
                        </div>
                        <!-- End Card -->
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