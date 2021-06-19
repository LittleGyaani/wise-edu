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
    <title><?= $title_constant; ?> | Dashboard</title>

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