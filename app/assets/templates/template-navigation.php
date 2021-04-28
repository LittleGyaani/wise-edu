<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light px-sm-0">
    <a class="navbar-brand" href="<?= $base_URI; ?>">
        <img class="logo" src="<?= $base_URI; ?>/app/assets/img/logos/wise-education-logo.png" alt="WISE EDUCATION" />
    </a>

    <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg viewBox="0 0 64 48">
            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
        </svg>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="<?= $router->generate('about-us'); ?>">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $router->generate('search-page'); ?>">Search
                    <span class="item_new">New</span>
                </a>
            </li>
            <li class="nav-item dropdown dropdown-hover">
                <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Explore <span class="item_new">New</span>
                    <div class="icon_arrow">
                        <i class="tio chevron_right"></i>
                    </div>
                </a>
                <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">
                        <li class="dropdown-submenu dropdown-hover">
                            <a class="dropdown-item dropdown_menu d-flex justify-content-between" href="<?= $router->generate('all-programs'); ?>">Programs</a>
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a class="dropdown-item dropdown_menu d-flex justify-content-between" href="<?= $router->generate('all-countries'); ?>">Countries</a>
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a class="dropdown-item dropdown_menu d-flex justify-content-between" href="<?= $router->generate('all-locations'); ?>">Locations</a>
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a class="dropdown-item dropdown_menu d-flex justify-content-between" href="<?= $router->generate('all-universities'); ?>">Universities</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-hover">
                <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Collections
                    <div class="icon_arrow">
                        <i class="tio chevron_right"></i>
                    </div>
                </a>
                <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">
                        <li class="dropdown-submenu dropdown-hover">
                            <a class="dropdown-item dropdown_menu d-flex justify-content-between" href="">Blog</a>
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a class="dropdown-item dropdown_menu d-flex justify-content-between" href="">FAQs</a>
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a class="dropdown-item dropdown_menu d-flex justify-content-between" href="">Testimonials</a>
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a class="dropdown-item dropdown_menu d-flex justify-content-between" href="">Gallery</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $router->generate('contact-us'); ?>">Contact</a>
            </li>
        </ul>
        <center>
            <div class="nav_account btn_demo3">
                <a href="<?= $router->generate('apply-now'); ?>" class="btn btn_sm_primary opacity-1 sweep_letter scale sweep_top rounded-8">
                    <div class="inside_item">
                        <span data-hover="Apply Now">Apply Now</span>
                    </div>
                </a>
            </div>
        </center>

        <!-- <div class="ml-3 margin-t-1">
            <div class="simple_search">
                <div class="form-group">
                    <div class="input_group">
                        <input type="search" class="form-control" placeholder="Type your search word">
                        <i class="tio search"></i>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Search Bar -->
        <!-- <div class="search-wrapper">
            <div class="input-holder">
                <input type="text" class="search-input" placeholder="Type to search" />
                <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
            </div>
            <span class="close" onclick="searchToggle(this, event);"></span>
        </div> -->
    </div>
</nav>
<!-- End Navbar -->