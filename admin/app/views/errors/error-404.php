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
        <div class="content container-fluid">
            <div class="row align-items-sm-center py-sm-10">
                <div class="col-sm-6">
                    <div class="text-center text-sm-right mr-sm-4 mb-5 mb-sm-0">
                        <img class="w-60 w-sm-100 mx-auto" src="<?= $base_URI; ?>/app/assets/svg/illustrations/think.svg" alt="Image Description" style="max-width: 15rem;">
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center text-sm-left">
                    <h1 class="display-1 mb-0">404</h1>
                    <p class="lead">Sorry, the page you're looking for cannot be found.</p>
                    <a class="btn btn-primary" href="<?= $router -> generate('dashboard-page'); ?>">Go back to the App</a>
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