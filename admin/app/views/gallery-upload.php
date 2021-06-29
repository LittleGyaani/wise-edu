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
    <title><?= $title_constant; ?> | Gallery Upload</title>

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
                        <h1 class="page-header-title">Add Gallery</h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#inviteUserModal"> <i class="tio-user-add mr-1"></i> View Galleries </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
                <div class="col-lg-12 gx-2 gx-lg-3">
                    <form name="gallery_upload" id="galleryUpload" method="POST" action="javascript:void(0);" autocomplete="off" enctype="multipart/form-data">
                        <div class="col-12">
                            <!-- Dropzone -->
                            <div id="attachFilesLabel" class="js-dropzone dropzone-custom custom-file-boxed">
                                <div class="dz-message custom-file-boxed-label">
                                    <img class="avatar avatar-xl avatar-4by3 mb-3" src="<?= $base_URI; ?>/app/assets/svg/illustrations/browse.svg" alt="Image Description">

                                    <h5>Drag and drop your file here</h5>

                                    <p class="mb-2">or</p>

                                    <span class="btn btn-sm btn-white">Browse files</span>
                                </div>
                            </div>
                            <!-- End Dropzone -->
                        </div>

                </div>
            </div>
            <div class="form-row align-items-center mt-6">
                <div class="col-12">
                    <div class="form-group">
                        <label for="filtersGallery" class="input-label">Gallery Filters*</label>
                        <?php
                        //Gallery Filters
                        $get_gallery_filters = "SELECT GROUP_CONCAT(DISTINCT `we_gallery_filters` SEPARATOR ' , ') AS `tags` FROM `we_gallery` WHERE `we_gallery_status` = 1";
                        $fetch_gallery_filters = $db_conn->query($get_gallery_filters);
                        // $x = array();
                        while ($list_gallery_filters = $fetch_gallery_filters->fetch_assoc())
                            $x[] = $list_gallery_filters['we_gallery_tag_name'];
                        // print_r(json_encode($x));
                        // $y = json_encode($x);
                        ?>
                        <input type="text" name="gallery_tags" id="galleryTags" class="js-tagify tgf tagify-form-control form-control" placeholder="Choose/Add some tags for gallery" value="" />
                        <p>*10 tags allowed per gallery</p>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
            </form>
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