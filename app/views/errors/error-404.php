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

  <title> <?= $title_constant; ?> &bull; 404 Not Found</title>

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
        <div class="row margin-t-12 margin-b-12 justify-item-center">
          <div class="col-12">
            <center>
              <h2>Sorry this destination does not exists.</h2>
              <br />
              <a href="<?= $base_URI; ?>">
                <img src="https://www.pristinit.com/assets/images/not-found.gif" alt="404 Not Found - WISE EDUCATION" height="auto" width="auto" />
              </a>
              <h1>404 Error occured. Please go back.</h1>
              <br />
              <a href="<?= $base_URI; ?>" class="btn btn_md_primary sweep_top sweep_letter c-white bg-dark opacity-1 rounded-8" onclick="window.history.go(-1); return false;">
                <div class="inside_item">Go Back</div>
              </a>
            </center>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Include Footer -->
  <?php
  //Calling Footer Template
  include_once 'app/assets/templates/template-footer.php';
  ?>

</body>

</html>

<!-- Include Scripts -->
<?php
//Calling Scripts Template
include_once 'app/assets/templates/template-scripts.php';
?>