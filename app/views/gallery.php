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

    <title> <?= $title_constant; ?> &bull; Our Gallery</title>

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

                <!-- Start banner_about -->
                <section class="pt_banner_inner banner_px_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="app/assets/img/backgrounds/banner-gallery.jpeg" alt="Wise Education About" height="auto" width="auto" />
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <div class="banner_title_inner">
                                    <h1 data-aos="fade-up" data-aos-delay="0">
                                        Our Gallery
                                    </h1>
                                    <p data-aos="fade-up" data-aos-delay="100">
                                        Our gallery which showcases our activities.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End banner_about -->

                <!-- Start Gallery Grid -->
                <section class="team_overlay_style margin-6">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-5">
                                <div class="title_sections_inner margin-b-5 margin-t-8">
                                    <h2>Photo Gallery</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row justify-content-center text-center">
                                    <div class="col-12 mb-5 gfilter">
                                        <a href="javascript:void(0);" data-filter="all" class="btn btn_md_primary p c-blue border-1 rounded-pill mt-2">
                                            <span>All</span>
                                        </a>
                                        <?php
                                            //Gallery Filters
                                            $get_gallery_filters = $db_conn -> query("SELECT GROUP_CONCAT(DISTINCT `we_gallery_filters` SEPARATOR ' , ') AS `tags` FROM `we_gallery` WHERE `we_gallery_status` = 1");
                                            $fetch_gallery_filters = $get_gallery_filters -> fetch_assoc();
                                            $unique_tags = implode(', ', array_unique(explode(",", str_replace(', ', ',', str_replace(' ,', ',', $fetch_gallery_filters))['tags'])));
                                            $tags = explode(',',$unique_tags);
                                            // print_r($tags);
                                            foreach($tags as $tag){
                                                // echo $tag;
                                                echo "<a href='javascript:void(0);' data-filter=" .$tag. " class='btn btn_md_primary p c-white bg-primary border-1 rounded-pill mt-2 ml-2'>
                                                        <span>" . $tag . "</span>
                                                    </a>";
                                            }
                                        ?>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Search control -->
                                    <div class="form-group --password col-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded-12 border-1" width="50" name="filtr-search" value="" placeholder="Typer your search query to filter" data-search="" />
                                            <div class="input-group-prepend">
                                                <span class="input-group-text tio search"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-shuffle class="btn btn_sm_primary p bg-dark border-1 rounded-pill c-white rounded-2 mt-1">
                                            <i class="tio shuffle mr-1 align-middle font-s-16"></i>
                                            <span>Shuffle</span>
                                        </a>
                                        <a href="javascript:void(0);" data-sortAsc class="btn btn_sm_primary p bg-green border-1 rounded-pill c-white rounded-2 mt-1 ml-2">
                                            <i class="tio arrow_upward mr-1 align-middle font-s-16"></i>
                                            <span>Ascending</span>
                                        </a>
                                        <a href="javascript:void(0);" data-sortDsc class="btn btn_sm_primary p bg-red border-1 rounded-pill c-white rounded-2 mt-1 ml-2">
                                            <i class="tio arrow_downward mr-1 align-middle font-s-16"></i>
                                            <span>Descending</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- To choose the value by which you want to sort add -->
                                <!-- <select data-sortOrder>
                                    <option value="index"> Position </option>
                                    <option value="sortData"> Custom Data </option>
                                </select> -->
                            </div>
                            <div class="filtr-container">
                                <?php
                                //Select Galleries
                                $get_galleries = "SELECT * FROM `we_gallery`";
                                $fetch_galleries = $db_conn->query($get_galleries);
                                while ($list_galleries = $fetch_galleries->fetch_assoc()) 
                                {
                                    $gallery_items = explode('""', $list_galleries['we_gallery_file_name']);
                                    $gallery_items = str_replace('"', '', $gallery_items);
                                    // echo '<pre>';
                                    // print_r($gallery_items);exit;
                                    foreach ($gallery_items as $gallery_item) 
                                    {
                                        // print_r($gallery_item);
                                ?>
                                        <a class="fbox" data-fancybox="gallery" data-type="image" data-src="app/uploads/gallery/<?= $gallery_item; ?>" data-caption="<?= $list_galleries['we_gallery_filters']; ?>">
                                            <div class="col-lg-3 filtr-item" data-category="<?= $list_galleries['we_gallery_filters']; ?>" data-sort="value">
                                                <div class="item_group">
                                                    <div class="image_ps">
                                                        <img src="app/uploads/gallery/<?= $gallery_item; ?>" alt="">
                                                    </div>
                                                    <div class="content_txt">
                                                        <h3><?= $list_galleries['we_gallery_filters']; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Gallery Grid -->

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