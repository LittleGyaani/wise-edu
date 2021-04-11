<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Welcome to Rakon Creative Multi-Purpose, built with HTML, JS, SASS, CSS3 and jQuery, RTL Supported, Easy User Experience and Responsive to all devices">
  <meta name="keywords"
    content="HTML, CSS, JavaScript, Bootstrap, Multi-Purpose, jQuery, Rakon, orino, Themeforest, Template, envato, SASS, SCSS, HTML5, landing page, SaaS Product, SaaS Modern, Crypto, blog, contact, inner pages,  Currency, ICO, Hosting, Agency, Mobile, App, Interior, Charity">
  <meta name="author" content="Rakon - Creative Multi-Purpose HTML5 Templates">

  <title>Rakon - Creative Multi-Purpose HTML5 Templates</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="assets/css/animate.css" type="text/css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="assets/css/swiper.min.css" />
  <!-- aos -->
  <link rel="stylesheet" href="assets/css/aos.css" type="text/css" />
  <!-- icons -->
  <link rel="stylesheet" href="assets/css/icons.css" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css" />
  <!-- normalize -->
  <link rel="stylesheet" href="assets/css/normalize.css" type="text/css" />

  <!-- js for Brwoser -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- Global site tag (gtag.js) - Google Ads: 971083070 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-971083070"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-971083070');
  </script>
  <!-- Event snippet for Website sale conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
  <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof (url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
        'send_to': 'AW-971083070/7bFICNXzudkBEL6ahs8D',
        'transaction_id': '',
        'event_callback': callback
      });
      return false;
    }
  </script>

</head>

<body class="bg_mode_black" id="myNavbar">

  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <header class="header-nav-center nav_rakon light">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
              <img class="logo" src="assets/img/logo.svg" alt="logo" />
            </a>
            <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <svg viewBox="0 0 64 48">
                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
              </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Demos">Demos</a>
                </li>

                <li class="nav-item dropdown dropdown-hover dropdown_full position-static">
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    elements

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu w-100 single-drop" aria-labelledby="navbarDropdown">
                    <div class="dropdown_menu_nav">
                      <!-- menu #1 -->
                      <div class="item_colume">
                        <span class="sub_title">Content</span>
                        <div class="sub_nav_menu">
                          <ul class="nav_meun">
                            <li>
                              <a href="html/elements/accordion.html" class="dropdown-item">Accordion</a>
                            </li>
                            <li>
                              <a href="html/elements/carousel.html" class="dropdown-item">Carousel</a>
                            </li>
                            <li>
                              <a href="html/pricing/pricing-list.html" class="dropdown-item">Pricing List</a>
                            </li>
                            <li>
                              <a href="html/elements/pricing-table.html" class="dropdown-item">Pricing Table</a>
                            </li>
                            <li>
                              <a href="html/elements/tabs.html" class="dropdown-item">Tabs</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <!-- menu #2 -->
                      <div class="item_colume">
                        <span class="sub_title">Presentational</span>
                        <div class="sub_nav_menu">
                          <ul class="nav_meun">
                            <li>
                              <a href="html/elements/blog-posts.html" class="dropdown-item">Blog Posts
                                <span class="item_new">New</span>
                              </a>
                            </li>
                            <li>
                              <a href="html/elements/parallax.html" class="dropdown-item">Parallax</a>
                            </li>

                            <li>
                              <a href="html/elements/team.html" class="dropdown-item">Team Member</a>
                            </li>
                            <li>
                              <a href="html/elements/video.html" class="dropdown-item">Video</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <!-- menu #3 -->
                      <div class="item_colume">
                        <span class="sub_title">Typography</span>
                        <div class="sub_nav_menu">
                          <ul class="nav_meun">
                            <li>
                              <a href="html/elements/call-to-action.html" class="dropdown-item">Call to Action</a>
                            </li>
                            <li>
                              <a href="html/elements/grid.html" class="dropdown-item">Grid</a>
                            </li>
                            <li>
                              <a href="html/elements/heading.html" class="dropdown-item">Heading</a>
                            </li>
                            <li>
                              <a href="html/elements/alert.html" class="dropdown-item">Alerts</a>
                            </li>
                            <li>
                              <a href="html/elements/testimonial.html" class="dropdown-item">Testimonials</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <!-- menu #4 -->
                      <div class="item_colume">
                        <span class="sub_title">Basic</span>
                        <div class="sub_nav_menu">
                          <ul class="nav_meun">
                            <li>
                              <a href="html/elements/button.html" class="dropdown-item">Button</a>
                            </li>
                            <li>
                              <a href="html/elements/contact-form.html" class="dropdown-item">Contact Form</a>
                            </li>
                            <li>
                              <a href="html/elements/clients-logo.html" class="dropdown-item">Clients Logo</a>
                            </li>
                            <li>
                              <a href="html/elements/social-networks.html" class="dropdown-item">Social
                                Networks</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <!-- menu #5 -->
                      <div class="item_colume">
                        <span class="sub_title">Infographic</span>
                        <div class="sub_nav_menu">
                          <ul class="nav_meun">
                            <li>
                              <a href="html/elements/countdown.html" class="dropdown-item">Countdown</a>
                            </li>
                            <li>
                              <a href="html/elements/counter.html" class="dropdown-item">Counter</a>
                            </li>
                            <li>
                              <a href="html/elements/iconbox.html" class="dropdown-item">Icon Box</a>
                            </li>
                            <li>
                              <a href="html/elements/process.html" class="dropdown-item">Process</a>
                            </li>
                            <li>
                              <a href="html/elements/services.html" class="dropdown-item">Service Box</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          Grid Layout
                          <div class="icon_arrow">
                            <i class="tio chevron_right"></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu sec-drop">
                          <li><a class="dropdown-item" href="html/blog/blog-classic.html">Blog: Classic</a></li>
                          <li><a class="dropdown-item" href="html/blog/blog-classic-three-columen.html">
                              Blog: Classic 3 Column</a></li>
                          <li><a class="dropdown-item" href="html/blog/blog-creative.html">Blog: Creative</a></li>
                          <li><a class="dropdown-item" href="html/blog/blog-standard.html">Blog: Standard</a></li>
                        </ul>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          Single Post
                          <div class="icon_arrow">
                            <i class="tio chevron_right"></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu sec-drop">
                          <li><a class="dropdown-item" href="html/blog/single-blog.html">Creative</a></li>
                          <li><a class="dropdown-item" href="html/blog/single-featured-image.html">Featured Image</a>
                          </li>
                          <li><a class="dropdown-item" href="html/blog/single-background-color.html">Background
                              Color</a>
                          </li>
                        </ul>
                      </li>

                    </ul>

                  </div>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          About
                          <div class="icon_arrow">
                            <i class="tio chevron_right"></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu sec-drop">
                          <li><a class="dropdown-item" href="html/about/about.html">About Us</a></li>
                          <li><a class="dropdown-item" href="html/about/about-2.html">Our Studio</a></li>
                          <li><a class="dropdown-item" href="html/about/about-3.html">Our Creative</a></li>
                        </ul>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          Contact
                          <div class="icon_arrow">
                            <i class="tio chevron_right"></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu sec-drop">
                          <li><a class="dropdown-item" href="html/contact/contact-agency.html">Contact: Agency</a></li>
                          <li><a class="dropdown-item" href="html/contact/contact-blocks.html">Contact: Blocks</a></li>
                          <li><a class="dropdown-item" href="html/contact/contact-classic.html">Contact: Classic</a>
                          </li>
                          <li><a class="dropdown-item" href="html/contact/contact-corporate.html">Contact: Corporate</a>
                          </li>
                          <li><a class="dropdown-item" href="html/contact/contact-simple.html">Contact: Simple</a></li>
                          <li><a class="dropdown-item" href="html/contact/contact-creative.html">Contact: Creative</a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          Account
                          <div class="icon_arrow">
                            <i class="tio chevron_right"></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu sec-drop">
                          <li><a class="dropdown-item" href="html/account/signin-2.html">Sign in 1</a></li>
                          <li><a class="dropdown-item" href="html/account/signin-3.html">Sign in 2</a></li>
                          <li><a class="dropdown-item" href="html/account/signup.html">Sign up 1</a></li>
                          <li><a class="dropdown-item" href="html/account/signup-2.html">Sign up 2</a></li>
                          <li><a class="dropdown-item" href="html/account/signup-3.html">Sign up 3</a></li>
                          <li><a class="dropdown-item" href="html/account/forgot-2.html">forgot 1</a></li>
                          <li><a class="dropdown-item" href="html/account/forgot-3.html">forgot 2</a></li>
                        </ul>
                      </li>

                    </ul>

                  </div>
                </li>

              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->
      <!-- Stat main -->

      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <!-- Start Banner Section -->
        <section class="demo_2 banner_section banner_theme">
          <div class="banner_cover">
            <img class="horizontal-parallax" src="assets/img/rakon/banner_cover.png" alt="">
          </div>
          <div class="content_body">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-12">
                  <div class="vr_2">
                    <div class="img_two">
                      <img src="assets/img/rakon/vv2.png" alt="">
                      <div class="released">
                        Released
                      </div>
                    </div>
                    <p class="name_vv">Rakon 2.0</p>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="banner_title">
                    <h1 class="c-white" data-aos="fade-up" data-aos-delay="0">Creative Multi-Purpose HTML5 Template
                    </h1>
                    <div class="action_btn" data-aos="fade-up" data-aos-delay="100">
                      <a href="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" target="_blank"
                        class="btn btn_buy mb-3 mb-md-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17">
                          <path id="envato"
                            d="M3.263,4.742C-.671,10.159,2.882,14.594,5.208,16c2.724,1.648,8.1,1.647,10.235-3.028C18.109,7.152,14.986.465,14.217.093h0c-.613-.3-3.722.043-5.964,2.175a12.109,12.109,0,0,0-3.446,8.1s-.116.474-.614-.214C3.1,8.784,3.674,5.618,3.739,5.177c.09-.621-.31-.64-.476-.435Z"
                            transform="translate(-1.5 0)" fill="#fff" />
                        </svg>
                        <span>Buy Now $19</span>
                      </a>
                      <a href="#Demos" class="btn btn_demo">
                        <span>View All Demos</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="man_colors">
            <img src="assets/img/rakon/068.png" alt="">
          </div>

        </section>

        <section class="plugin_free padding-py-12">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-7">
                <div class="title_sections">
                  <div class="before_title">
                    <span class="c-blue">Stunning Designs</span>
                  </div>
                  <h2 class="font-s-50">Create a beautiful website with effective design</h2>
                </div>
              </div>

            </div>
            <div class="item_plugins">
              <div class="row">
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                  <div class="free_txt">Free!</div>
                  <div class="media item_product">
                    <div class="icon">
                      <span class="tio home"></span>
                    </div>
                    <div class="media-body my-auto">
                      <div class="txt">
                        <h5>1100+ pixel perfect.</h5>
                        <p>
                          Regular price: $28.00
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <div class="free_txt">Free!</div>
                  <div class="media item_product">
                    <div class="icon">
                      <img width="28" src="assets/img/rakon/1f647-2640.png" />
                    </div>
                    <div class="media-body my-auto">
                      <div class="txt">
                        <h5>10 Illustrations.</h5>
                        <p>
                          Regular price: $19.00
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                  <div class="free_txt">Free!</div>
                  <div class="media item_product">
                    <div class="icon">
                      <svg id="Stockholm-icons-_-Home-_-Door-open" data-name="Stockholm-icons-/-Home-/-Door-open"
                        xmlns="http://www.w3.org/2000/svg" width="27.408" height="28.55" viewBox="0 0 27.408 28.55">
                        <rect id="bound" width="27.408" height="28.55" fill="none" opacity="0.3" />
                        <path id="Path-90" d="M7.284,5.379V24.537H5V3.125h6.852V5.379Z"
                          transform="translate(0.71 0.444)" fill="#0b2238" opacity="0.3" />
                        <path id="Combined-Shape"
                          d="M10.354,2.345,19.49,4.069a1.142,1.142,0,0,1,.93,1.122V22.7a1.142,1.142,0,0,1-.93,1.122l-9.136,1.724A1.142,1.142,0,0,1,9,24.422V3.467a1.142,1.142,0,0,1,1.354-1.122Zm1.977,12.678a1.531,1.531,0,0,0,1.427-1.617,1.531,1.531,0,0,0-1.427-1.617A1.531,1.531,0,0,0,10.9,13.406,1.531,1.531,0,0,0,12.331,15.023Z"
                          transform="translate(1.278 0.33)" fill="#0b2238" fill-rule="evenodd" />
                      </svg>
                    </div>
                    <div class="media-body my-auto">
                      <div class="txt">
                        <h5>640 Vector.</h5>
                        <p>
                          Regular price: $24.00
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="ststues_elements padding-py-7">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="item" data-aos="fade-up" data-aos-delay="0">
                  <h3><span class="counter">210</span>+</h3>
                  <p>UI Elements and
                    Templates.</p>
                </div>
              </div>
              <div class="col-lg-3 mx-auto mb-3 mb-lg-0">
                <div class="item" data-aos="fade-up" data-aos-delay="100">
                  <h3><span class="counter">350</span>+</h3>
                  <p>Shortcodes and
                    Widgets. </p>
                </div>
              </div>
              <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="item" data-aos="fade-up" data-aos-delay="200">
                  <h3>UX</h3>
                  <p>User Experience Analyzed.</p>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="demos_two" id="Demos">

          <div class="block_filter d-none d-lg-block" id="filter">
            <div class="container">
              <ul class="nav">
                <li class="nav-item">
                  <button type="button" class="btn nav-link active" data-name="*">All Sites</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".agency">Agency</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".portfolio">Portfolio</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".app">App</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".inner">inner Page</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".ecommerce">Ecommerce</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".software">Software</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".crypto">Crypto</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".products">Products</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="btn nav-link" data-name=".service">Service</button>
                </li>
              </ul>
            </div>
          </div>

          <div class="body_ui">
            <div class="container">

              <div class="row justify-content-md-center">
                <div class="col-md-6 text-center">
                  <div class="title_sections margin-b-5">
                    <div class="before_title">
                      <span class="c-blue">Quick Getting Started</span>
                    </div>
                    <h2 class="font-s-50 font-w-600">Demo Websites.</h2>
                  </div>
                </div>
              </div>

              <div class="grid-box">
                <div class="row">
                  <div class="col-md-6 col-lg-4 grid-item app">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/app3.png" alt="">

                        <div class="links_preview">
                          <a href="html/home/mobile-app-2.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/mobile-app-2.html" target="_blank">Ver. RTL</a>
                        </div>

                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Mobile App</span>
                        <h3>Music, App, Movies</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item app">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/app2.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/mobile-app-3.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/mobile-app-3.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Mobile App 2</span>
                        <h3>Sport, App, Product</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item portfolio">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/portfolio.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/portfolio.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/portfolio.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Portfolio</span>
                        <h3>Agency, Personal, Portfolio</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item software">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/soft.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/software.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/software.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Software</span>
                        <h3>Sass, Product, Service</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item service">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/ws.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/workspace.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/workspace.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>WorkSpace</span>
                        <h3>Service, Product, office</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item service">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/ch.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/charity.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/charity.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Charity</span>
                        <h3>Service, Product, Charity</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item software products">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/pr.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/sass-products.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/sass-products.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="body_preivew">
                        <span>SaaS Product </span>
                        <h3>Service, Product, Software</h3>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-6 col-lg-4 grid-item software products">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/mo.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/sass-modern.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/sass-modern.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="body_preivew">
                        <span>SaaS Product 2</span>
                        <h3>Service, Product, Software</h3>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 col-lg-4 grid-item crypto service">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/cr.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/crypto-currency.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/crypto-currency.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="body_preivew">
                        <span>Crypto Currency</span>
                        <h3>Crypto, Product, Service</h3>
                      </div>
                    </div>
                  </div>

                  <!-- Show Filter -->
                  <div id="triggerForm"></div>
                  <!-- End. -->

                  <div class="col-md-6 col-lg-4 grid-item crypto service">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/cd.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/crypto-dark.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/crypto-dark.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="body_preivew">
                        <span>ICO Crypto</span>
                        <h3>Crypto, Product, Service</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item agency service">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/in.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/Interior.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/Interior.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="body_preivew">
                        <span>Interior </span>
                        <h3>Design, Product, Portfolio</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item agency service portfolio">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/ag.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/agency.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/agency.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="body_preivew">
                        <span>Agency </span>
                        <h3>Design, Service, Portfolio</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item products service">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/ho.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/hosting.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/hosting.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="body_preivew">
                        <span>Hosting</span>
                        <h3>Host, Service, Product</h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item app service">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/ma.png" alt="">
                        <div class="links_preview">
                          <a href="html/home/mobile-app.html" target="_blank">Preview</a>
                          <a href="html-rtl/home/mobile-app.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="body_preivew">
                        <span>Mobile App 3</span>
                        <h3>Delivery, App, Service</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row justify-content-md-center margin-t-10">
                <div class="col-md-6 text-center">
                  <div class="title_sections margin-b-5">
                    <div class="before_title">
                      <span class="c-blue">Creative</span>
                    </div>
                    <h2 class="font-s-50 font-w-600">Inner Pages</h2>
                  </div>
                </div>
              </div>

              <div class="grid-box">
                <div class="row">
                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/about.png" alt="">

                        <div class="links_preview">
                          <a href="html/about/about-3.html" target="_blank">Preview</a>
                          <a href="html-rtl/about/about-3.html" target="_blank">Ver. RTL</a>
                        </div>

                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>About: Creative</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/about2.png" alt="">
                        <div class="links_preview">
                          <a href="html/about/about-2.html" target="_blank">Preview</a>
                          <a href="html-rtl/about/about-2.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>About: Simple</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/about3.png" alt="">
                        <div class="links_preview">
                          <a href="html/about/about.html" target="_blank">Preview</a>
                          <a href="html-rtl/about/about.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>About: Classic</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/blog.png" alt="">
                        <div class="links_preview">
                          <a href="html/blog/blog-creative.html" target="_blank">Preview</a>
                          <a href="html-rtl/blog/blog-creative.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Creative Blog</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/blog2.png" alt="">
                        <div class="links_preview">
                          <a href="html/blog/blog-standard.html" target="_blank">Preview</a>
                          <a href="html-rtl/blog/blog-standard.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Standard Blog</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/blog3.png" alt="">
                        <div class="links_preview">
                          <a href="html/blog/blog-classic.html" target="_blank">Preview</a>
                          <a href="html-rtl/blog/blog-classic.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Classic Blog</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/sinlgeblog.png" alt="">
                        <div class="links_preview">
                          <a href="html/blog/single-blog.html" target="_blank">Preview</a>
                          <a href="html-rtl/blog/single-blog.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Single Blog</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/singleblog2.png" alt="">
                        <div class="links_preview">
                          <a href="html/blog/single-featured-image.html" target="_blank">Preview</a>
                          <a href="html-rtl/blog/single-featured-image.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Single Blog</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/singleblog3.png" alt="">
                        <div class="links_preview">
                          <a href="html/blog/single-background-color.html" target="_blank">Preview</a>
                          <a href="html-rtl/blog/single-background-color.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Single Blog</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/contact0.png" alt="">
                        <div class="links_preview">
                          <a href="html/contact/contact-agency.html" target="_blank">Preview</a>
                          <a href="html-rtl/contact/contact-agency.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Contact: Agency</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/contact2.png" alt="">
                        <div class="links_preview">
                          <a href="html/contact/contact-corporate.html" target="_blank">Preview</a>
                          <a href="html-rtl/contact/contact-corporate.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Contact: Corporate</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/contact3.png" alt="">
                        <div class="links_preview">
                          <a href="html/contact/contact-simple.html" target="_blank">Preview</a>
                          <a href="html-rtl/contact/contact-simple.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Contact: Simple</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/contact5.png" alt="">
                        <div class="links_preview">
                          <a href="html/contact/contact-blocks.html" target="_blank">Preview</a>
                          <a href="html-rtl/contact/contact-blocks.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Contact: Blocks</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/contact4.png" alt="">
                        <div class="links_preview">
                          <a href="html/contact/contact-classic.html" target="_blank">Preview</a>
                          <a href="html-rtl/contact/contact-classic.html" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Contact: Classic</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 grid-item inner">
                    <div class="item_preview">
                      <div class="img_cover">
                        <img src="assets/img/rakon/ui/pricinglist.png" alt="">
                        <div class="links_preview">
                          <a href="html/pricing/pricing-list.html	" target="_blank">Preview</a>
                          <a href="html-rtl/pricing/pricing-list.html	" target="_blank">Ver. RTL</a>
                        </div>
                      </div>
                      <div class="latest_preview">Latest</div>
                      <div class="body_preivew">
                        <span>Pricing list</span>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Show Filter -->
        <div id="triggerEnd"></div>
        <!-- End. -->

        <section class="section_slider_swipe padding-t-8">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="title_sections mb-0">
                  <div class="before_title">
                    <span class="c-blue">Creative</span>
                  </div>
                  <h2 class="font-s-50 mb-0">One Screen</h2>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid px-0">
            <div class="multi_shot">
              <!-- Swiper -->
              <div class="swiper-container swipe_shot">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="swiper-slide">
                      <a href="html/account/signup.html" target="_blank" class="shot_img">
                        <img src="assets/img/rakon/ui/signup0.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <a href="html/contact/contact-creative.html" target="_blank" class="shot_img">
                      <img src="assets/img/rakon/ui/contact_sho.png" alt="">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="html/account/signin-2.html" target="_blank" class="shot_img">
                      <img src="assets/img/rakon/ui/signin1.png" alt="">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-slide">
                      <a href="html/account/signin-3.html" target="_blank" class="shot_img">
                        <img src="assets/img/rakon/ui/sinin2.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-slide">
                      <a href="html/account/signup-2.html" target="_blank" class="shot_img">
                        <img src="assets/img/rakon/ui/sinup1.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-slide">
                      <a href="html/account/signup-3.html" target="_blank" class="shot_img">
                        <img src="assets/img/rakon/ui/signup2.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-slide">
                      <a href="html/account/forgot-2.html" target="_blank" class="shot_img">
                        <img src="assets/img/rakon/ui/forgot1.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-slide">
                      <a href="html/account/forgot-3.html" target="_blank" class="shot_img">
                        <img src="assets/img/rakon/ui/forgot2.png" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>

          <div class="w-100 comming padding-t-5 padding-b-10">
            More demos coming soon...
          </div>

        </section>

        <section class="features_one">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-2 mb-3 mb-lg-0">
                <div class="item" data-aos="fade-up" data-aos-delay="0">
                  <div class="media">
                    <div class="ico">
                      <svg id="Stockholm-icons-_-Layout-_-Layout-top-panel-3"
                        data-name="Stockholm-icons-/-Layout-/-Layout-top-panel-3" xmlns="http://www.w3.org/2000/svg"
                        width="27.268" height="27.268" viewBox="0 0 27.268 27.268">
                        <rect id="Rectangle-17" width="27.268" height="27.268" fill="none" />
                        <path id="Combined-Shape"
                          d="M3.136,4H22.451a1.136,1.136,0,0,1,1.136,1.136V7.408a1.136,1.136,0,0,1-1.136,1.136H3.136A1.136,1.136,0,0,1,2,7.408V5.136A1.136,1.136,0,0,1,3.136,4Zm0,6.817H14.5a1.136,1.136,0,0,1,1.136,1.136v9.089A1.136,1.136,0,0,1,14.5,22.178H3.136A1.136,1.136,0,0,1,2,21.042V11.953A1.136,1.136,0,0,1,3.136,10.817Z"
                          transform="translate(0.272 0.545)" fill="#0b2238" fill-rule="evenodd" />
                        <rect id="Rectangle-7-Copy-2" width="5.681" height="11.361" rx="1"
                          transform="translate(18.178 11.361)" fill="#0b2238" opacity="0.3" />
                      </svg>
                    </div>
                    <div class="media-body my-auto">
                      <h3>Advanced layouts</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-2 mb-3 mb-lg-0">
                <div class="item" data-aos="fade-up" data-aos-delay="100">
                  <div class="media">
                    <div class="ico">
                      <svg id="Stockholm-icons-_-General-_-Settings-1"
                        data-name="Stockholm-icons-/-General-/-Settings-1" xmlns="http://www.w3.org/2000/svg"
                        width="27.021" height="27.021" viewBox="0 0 27.021 27.021">
                        <rect id="bound" width="27.021" height="27.021" fill="none" />
                        <path id="Combined-Shape"
                          d="M7.5,3H18.763a4.5,4.5,0,1,1,0,9.007H7.5A4.5,4.5,0,1,1,7.5,3Zm0,6.755A2.252,2.252,0,1,0,5.252,7.5,2.252,2.252,0,0,0,7.5,9.755Z"
                          transform="translate(0.378 0.378)" fill="#0b2238" fill-rule="evenodd" />
                        <path id="Combined-Shape-2" data-name="Combined-Shape"
                          d="M7.5,13H18.763a4.5,4.5,0,1,1,0,9.007H7.5A4.5,4.5,0,0,1,7.5,13Zm11.259,6.755A2.252,2.252,0,1,0,16.511,17.5,2.252,2.252,0,0,0,18.763,19.755Z"
                          transform="translate(0.378 1.637)" fill="#0b2238" fill-rule="evenodd" opacity="0.3" />
                      </svg>

                    </div>
                    <div class="media-body my-auto">
                      <h3>High
                        adjustable</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-2 mb-3 mb-lg-0">
                <div class="item" data-aos="fade-up" data-aos-delay="200">
                  <div class="media">
                    <div class="ico">
                      <svg id="Stockholm-icons-_-Media-_-DVD" data-name="Stockholm-icons-/-Media-/-DVD"
                        xmlns="http://www.w3.org/2000/svg" width="27.053" height="27.053" viewBox="0 0 27.053 27.053">
                        <rect id="bound" width="27.053" height="27.053" fill="none" />
                        <circle id="Combined-Shape" cx="10.145" cy="10.145" r="10.145"
                          transform="translate(3.382 3.382)" fill="#0b2238" opacity="0.3" />
                        <path id="Path-10"
                          d="M11.264,16.874l4.5-3.925a.564.564,0,0,0,0-.848l-4.5-3.95a.564.564,0,0,0-.935.424v7.876a.564.564,0,0,0,.934.425Z"
                          transform="translate(1.314 1.019)" fill="#0b2238" fill-rule="evenodd" />
                      </svg>

                    </div>
                    <div class="media-body my-auto">
                      <h3>Video
                        support</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-2 mb-3 mb-lg-0">
                <div class="item" data-aos="fade-up" data-aos-delay="300">
                  <div class="media">
                    <div class="ico">
                      <svg id="Stockholm-icons-_-Code-_-CMD" data-name="Stockholm-icons-/-Code-/-CMD"
                        xmlns="http://www.w3.org/2000/svg" width="27.252" height="27.252" viewBox="0 0 27.252 27.252">
                        <rect id="bound" width="27.252" height="27.252" fill="none" />
                        <path id="Path-2"
                          d="M9.677,16.49h-1.7a1.7,1.7,0,1,0,1.7,1.7Zm0,0V9.677H16.49V16.49Zm6.813,1.7a1.7,1.7,0,1,0,1.7-1.7h-1.7Zm1.7-8.516a1.7,1.7,0,1,0-1.7-1.7v1.7Zm-8.516-1.7a1.7,1.7,0,1,0-1.7,1.7h1.7Zm2.271,6.245h2.271V11.948H11.948Zm2.271-2.271V7.974a3.974,3.974,0,1,1,3.974,3.974Zm3.974,2.271a3.974,3.974,0,1,1-3.974,3.974V14.219Zm-6.245,3.974a3.974,3.974,0,1,1-3.974-3.974h3.974ZM7.974,11.948a3.974,3.974,0,1,1,3.974-3.974v3.974Z"
                          transform="translate(0.542 0.542)" fill="#0b2238" />
                      </svg>
                    </div>
                    <div class="media-body my-auto">
                      <h3>Interface
                        shortcode</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-2 mb-3 mb-lg-0">
                <div class="item" data-aos="fade-up" data-aos-delay="400">
                  <div class="media">
                    <div class="ico">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20.503" height="20.503"
                        viewBox="0 0 20.503 20.503">
                        <g id="Group_6545" data-name="Group 6545" transform="translate(-3.416 -3.417)">
                          <path id="Combined-Shape"
                            d="M12.139,3a1.139,1.139,0,0,1,1.139,1.139V5.278a1.139,1.139,0,1,1-2.278,0V4.139A1.139,1.139,0,0,1,12.139,3Zm0,5.7a1.139,1.139,0,0,1,1.139,1.139v1.139a1.139,1.139,0,1,1-2.278,0V9.834A1.139,1.139,0,0,1,12.139,8.7Zm0,5.7a1.139,1.139,0,0,1,1.139,1.139v1.139a1.139,1.139,0,0,1-2.278,0V15.53A1.139,1.139,0,0,1,12.139,14.391Zm0,5.7a1.139,1.139,0,0,1,1.139,1.139v1.139a1.139,1.139,0,1,1-2.278,0V21.225A1.139,1.139,0,0,1,12.139,20.086Z"
                            transform="translate(1.529 0.417)" fill="#0b2238" fill-rule="evenodd" />
                          <path id="Combined-Shape-2" data-name="Combined-Shape"
                            d="M23.5,9.11v6.743a.57.57,0,0,1-.925.445l-4.214-3.371a.57.57,0,0,1,0-.889l4.214-3.371a.57.57,0,0,1,.925.445ZM3,15.852V9.11a.57.57,0,0,1,.925-.445l4.214,3.371a.57.57,0,0,1,0,.889L3.925,16.3A.57.57,0,0,1,3,15.852Z"
                            transform="translate(0.416 1.188)" fill="#0b2238" fill-rule="evenodd" opacity="0.3" />
                        </g>
                      </svg>

                    </div>
                    <div class="media-body my-auto">
                      <h3>RTL supported</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-2">
                <div class="item" data-aos="fade-up" data-aos-delay="500">
                  <div class="media">
                    <div class="ico">
                      <svg id="Stockholm-icons-_-Design-_-Patch" data-name="Stockholm-icons-/-Design-/-Patch"
                        xmlns="http://www.w3.org/2000/svg" width="27.301" height="27.301" viewBox="0 0 27.301 27.301">
                        <rect id="bound" width="27.301" height="27.301" fill="none" />
                        <path id="Combined-Shape"
                          d="M12.168,5.636l8.044,8.044-7.239,7.239L4.929,12.875ZM8.951,12.071a1.138,1.138,0,1,0,1.609,0A1.138,1.138,0,0,0,8.951,12.071Zm3.217-3.217a1.138,1.138,0,1,0,1.609,0A1.138,1.138,0,0,0,12.168,8.853Zm0,6.435a1.138,1.138,0,1,0,1.609,0A1.138,1.138,0,0,0,12.168,15.288Zm3.217-3.217a1.138,1.138,0,1,0,1.609,0A1.138,1.138,0,0,0,15.386,12.071Z"
                          transform="translate(0.678 0.775)" fill="#0b2238" fill-rule="evenodd" />
                        <path id="Path" d="M11.582,21.368A5.689,5.689,0,0,1,3.7,13.485Z"
                          transform="translate(0.379 1.855)" fill="#0b2238" fill-rule="evenodd" opacity="0.3" />
                        <path id="Path-2" data-name="Path" d="M12.778,4.406a5.689,5.689,0,0,1,7.883,7.883Z"
                          transform="translate(1.757 0.476)" fill="#0b2238" fill-rule="evenodd" opacity="0.3" />
                      </svg>

                    </div>
                    <div class="media-body my-auto">
                      <h3>Sticky
                        header</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="showcase_screens padding-t-12">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="title_sections">
                <div class="before_title">
                  <span class="c-blue">Quick Getting Started</span>
                </div>
                <h2 class="c-white font-s-50">Creative UI Elements</h2>
              </div>
            </div>
          </div>
          <div class="container-fluid px-0">
            <div class="showcase_multipage">
              <img class="horizontal-parallax" src="assets/img/rakon/ui/0654.png" alt="">
            </div>
          </div>
        </section>


        <!-- Start Features -->
        <section class="features_section padding-py-12 showcase_device showcase">
          <div class="container">
            <div class="row">
              <!-- img -->
              <div class="col-lg-7 mb-4 mb-lg-0 my-lg-auto">
                <div class="images_desc">
                  <img class="img-fluid" src="assets/img/rakon/ipad.png" alt="" data-aos="fade-up" data-aos-delay="0" />
                  <img class="img-fluid d-none d-sm-inline-block" src="assets/img/rakon/003.png" alt=""
                    data-aos="fade-up" data-aos-delay="100" />
                </div>
              </div>
              <!-- text -->
              <div class="col-lg-4">
                <div class="title_sections">
                  <div class="before_title">
                    <span class="c-blue">Showcase</span>
                  </div>
                  <h2 class="font-s-50">Make your Products at their best.</h2>
                  <p>
                    With <span class="c-dark">beautifully designed</span> custom post types
                    to show off your works and collections!
                  </p>
                </div>
                <a href="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" target="_blank"
                  class="btn btn_md_primary c-white opacity-1 bg-blue sweep_letter sweep_top rounded-8">
                  <div class="inside_item">
                    <span data-hover="Let's go 🏃‍♂️">Get website</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- End Features -->

        <section class="other_features padding-t-10 padding-b-6">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 my-auto">
                <div class="title_sections mb-4 mb-lg-0">
                  <div class="before_title">
                    <span class="c-white">Features</span>
                  </div>
                  <h2 class="font-s-50 c-white">Core <br>
                    Features.</h2>
                  <p>Best features with the latest technologies
                    to make a modern website.</p>
                </div>
              </div>

              <div class="col-lg-6 ml-auto">
                <div class="features_one">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="item" data-aos="fade-up" data-aos-delay="0">
                        <div class="ico">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20.266" height="20.265"
                            viewBox="0 0 20.266 20.265">
                            <g id="Group_6550" data-name="Group 6550" transform="translate(-3.377 -3.379)">
                              <path id="Combined-Shape"
                                d="M7.5,3H18.763a4.5,4.5,0,1,1,0,9.007H7.5A4.5,4.5,0,1,1,7.5,3Zm0,6.755A2.252,2.252,0,1,0,5.252,7.5,2.252,2.252,0,0,0,7.5,9.755Z"
                                transform="translate(0.377 0.379)" fill="#fff" fill-rule="evenodd" />
                              <path id="Combined-Shape-2" data-name="Combined-Shape"
                                d="M7.5,13H18.763a4.5,4.5,0,1,1,0,9.007H7.5A4.5,4.5,0,0,1,7.5,13Zm11.259,6.755A2.252,2.252,0,1,0,16.511,17.5,2.252,2.252,0,0,0,18.763,19.755Z"
                                transform="translate(0.377 1.637)" fill="#fff" fill-rule="evenodd" opacity="0.3" />
                            </g>
                          </svg>
                        </div>
                        <h3>Highly Adjustable
                          Website Layouts</h3>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item" data-aos="fade-up" data-aos-delay="100">
                        <div class="ico">
                          <svg class="anime_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <g id="Stockholm-icons-_-Design-_-Pixels" data-name="Stockholm-icons-/-Design-/-Pixels"
                              transform="translate(-4 -4)">
                              <rect class="opac03" id="Rectangle-187" width="4" height="4" rx="1"
                                transform="translate(4 16)" fill="#0b2238" />
                              <rect class="opac02" id="Rectangle-187-Copy-3" width="4" height="4" rx="1"
                                transform="translate(4 10)" fill="#0b2238" />
                              <rect class="opac04" id="Rectangle-187-Copy" width="4" height="4" rx="1"
                                transform="translate(10 16)" fill="#0b2238" />
                              <rect class="opac" id="Rectangle-187-Copy-4" width="4" height="4" rx="1"
                                transform="translate(10 10)" fill="#0b2238" />
                              <rect class="opac01" id="Rectangle-187-Copy-5" width="4" height="4" rx="1"
                                transform="translate(4 4)" fill="#0b2238" />
                              <rect class="opac05" id="Rectangle-187-Copy-2" width="4" height="4" rx="1"
                                transform="translate(16 16)" fill="#0b2238" />
                            </g>
                          </svg>
                        </div>
                        <h3>
                          Smooth CSS3
                          Animations
                        </h3>

                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item" data-aos="fade-up" data-aos-delay="200">
                        <div class="ico">
                          <svg xmlns="http://www.w3.org/2000/svg" width="18.168" height="18.168"
                            viewBox="0 0 18.168 18.168">
                            <path id="Path-2"
                              d="M9.677,16.49h-1.7a1.7,1.7,0,1,0,1.7,1.7Zm0,0V9.677H16.49V16.49Zm6.813,1.7a1.7,1.7,0,1,0,1.7-1.7h-1.7Zm1.7-8.516a1.7,1.7,0,1,0-1.7-1.7v1.7Zm-8.516-1.7a1.7,1.7,0,1,0-1.7,1.7h1.7Zm2.271,6.245h2.271V11.948H11.948Zm2.271-2.271V7.974a3.974,3.974,0,1,1,3.974,3.974Zm3.974,2.271a3.974,3.974,0,1,1-3.974,3.974V14.219Zm-6.245,3.974a3.974,3.974,0,1,1-3.974-3.974h3.974ZM7.974,11.948a3.974,3.974,0,1,1,3.974-3.974v3.974Z"
                              transform="translate(-4 -4)" fill="#fff" />
                          </svg>
                        </div>
                        <h3>
                          Huge Shortcode
                          Collection
                        </h3>

                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item" data-aos="fade-up" data-aos-delay="300">
                        <div class="ico">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 24 14">
                            <g id="Group_6548" data-name="Group 6548" transform="translate(0 -5)">
                              <path id="Combined-Shape"
                                d="M1.5,5h3A1.5,1.5,0,0,1,6,6.5v11A1.5,1.5,0,0,1,4.5,19h-3A1.5,1.5,0,0,1,0,17.5V6.5A1.5,1.5,0,0,1,1.5,5Zm17,0h4A1.5,1.5,0,0,1,24,6.5v11A1.5,1.5,0,0,1,22.5,19h-4A1.5,1.5,0,0,1,17,17.5V6.5A1.5,1.5,0,0,1,18.5,5Z"
                                fill="#fff" fill-rule="evenodd" />
                              <rect id="Rectangle-7-Copy-2" width="7" height="14" rx="1.5" transform="translate(8 5)"
                                fill="#fff" opacity="0.3" />
                            </g>
                          </svg>
                        </div>
                        <h3>
                          Swiper JS for <br>
                          Slider
                        </h3>

                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item" data-aos="fade-up" data-aos-delay="400">
                        <div class="ico">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24.83" height="19.244"
                            viewBox="0 0 24.83 19.244">
                            <g id="Group_6549" data-name="Group 6549" transform="translate(-1.164 -4.335)">
                              <path id="Path-3"
                                d="M17.47,22.583l6.8-10.2a.872.872,0,0,0-.726-1.356H18.2V4.6a.872.872,0,0,0-1.6-.484l-6.8,10.2a.872.872,0,0,0,.726,1.356h5.349V22.1a.872.872,0,0,0,1.6.484Z"
                                transform="translate(1.574 0.607)" fill="#fff" fill-rule="evenodd" />
                              <path id="Combined-Shape"
                                d="M5.071,5h5.815a1.745,1.745,0,0,1,0,3.489H5.071A1.745,1.745,0,0,1,5.071,5Zm0,13.957h5.815a1.745,1.745,0,0,1,0,3.489H5.071a1.745,1.745,0,0,1,0-3.489ZM2.745,11.979H7.4a1.745,1.745,0,0,1,0,3.489H2.745a1.745,1.745,0,0,1,0-3.489Z"
                                transform="translate(0.164 0.816)" fill="#fff" fill-rule="evenodd" opacity="0.3" />
                            </g>
                          </svg>
                        </div>
                        <h3>
                          Fast <br>
                          Performance
                        </h3>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="item" data-aos="fade-up" data-aos-delay="500">
                        <div class="ico">
                          <svg xmlns="http://www.w3.org/2000/svg" width="19.101" height="18.278"
                            viewBox="0 0 19.101 18.278">
                            <path id="Star"
                              d="M13.189,19.954,8.524,22.406a1.142,1.142,0,0,1-1.657-1.2l.891-5.195L3.983,12.329a1.142,1.142,0,0,1,.633-1.948l5.216-.758L12.165,4.9a1.142,1.142,0,0,1,2.048,0l2.333,4.726,5.216.758a1.142,1.142,0,0,1,.633,1.948L18.62,16.007l.891,5.195a1.142,1.142,0,0,1-1.657,1.2Z"
                              transform="translate(-3.638 -4.259)" fill="#fff" fill-rule="evenodd" />
                          </svg>
                        </div>
                        <h3>
                          5 Stars Customer
                          Flexibility
                        </h3>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>

        <section class="section_library_use padding-py-10">
          <div class="container">
            <div class="box_lib" data-aos="fade-up" data-aos-delay="0">
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/bbo.png" alt="">
                </div>
                <h5>Bootstrap 4.5</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/0654.png" alt="">
                </div>
                <h5>Particles 2.0 </h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/03.png" alt="">
                </div>
                <h5>TweenMax</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/04.png" alt="">
                </div>
                <h5>ScrollMagic </h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/05.png" alt="">
                </div>
                <h5>Swiper</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/06.png" alt="">
                </div>
                <h5>Simple Parallax</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/07.png" alt="">
                </div>
                <h5>bxSlider</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/08.png" alt="">
                </div>
                <h5>Aos</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/09.png" alt="">
                </div>
                <h5>countdown</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/10.svg" alt="">
                </div>
                <h5>counterup</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/11.svg" alt="">
                </div>
                <h5>imagesloaded</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/12.png" alt="">
                </div>
                <h5>Sharer</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/13.png" alt="">
                </div>
                <h5>Sticky</h5>
              </div>
              <div class="item">
                <div class="imag_lib">
                  <img src="assets/img/rakon/lib/14.png" alt="">
                </div>
                <h5>Type</h5>
              </div>
            </div>

            <div class="dividar margin-t-5 margin-b-8"></div>

            <div class="purchase_section">
              <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                  <div class="title_sections mb-0">
                    <h2 class="font-s-50">Get Rakon and set up
                      your website today.</h2>
                    <p>
                      Bundled with The Icon of, Stockholm Icons and 10 <br> Illustrations which save you $70!
                    </p>
                  </div>
                </div>
                <div class="col-md-4 col-lg-2 ml-lg-auto my-auto text-lg-right">
                  <div class="price_item mb-3 mb-lg-0">
                    <div class="txt d-inline-block">
                      <h3>19 <sup>$</sup></h3>
                      <p>
                        Available every time<br /> Support Included
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 my-lg-auto text-lg-right">
                  <a href="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" target="_blank"
                    class="btn buy_theme scale rounded-8">
                    <img src="assets/img/rakon/envato.svg">
                    Buy Rakon
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>


      </main> <!-- end main -->
    </div>
    <!-- [id] content -->

    <footer class="footer_rakon">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="item">
              <div class="ico">
                <span class="tio update"></span>
              </div>
              <div class="title_sections">
                <h2>Reliable and<br />
                  Regular Updates</h2>
                <p>
                  Get a lifetime reliable & regular updates with your purchase.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="item">
              <div class="ico">
                <span class="tio document_text_outlined"></span>
              </div>
              <div class="title_sections">
                <h2>Check<br />
                  Documentation</h2>
                <p>
                  We are making Documentation. It's available Now!
                  <span class="c-white">Sooner</span>, it will be available Online.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="item">
              <div class="ico">
                <span class="tio support"></span>
              </div>
              <div class="title_sections">
                <h2>Customer<br />
                  Support</h2>
                <p>
                  Please open a ticket in the support forum to get in touch with us.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>
            Made with ♥️ by <a target="_blank" href="https://themeforest.net/user/orinostu">OrinoStu</a>.
          </p>
          <p>

            © 2020 <a href="https://themeforest.net/item/rakon-html-landing-page-templates/27849521"
              target="_blank">Rakon Template</a>.
            All Right Reseved
          </p>
        </div>
      </div>
    </footer>

    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator d-none">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

    <!-- Purchase item -->
    <a href="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" target="_blank"
      class="rakon_purchase">
      <button type="button" class="btn btn_purch">
        <div class="icon">
          <img src="assets/img/rakon/envato.svg" />
        </div>
        <span class="txt">Purchase</span>
      </button>
    </a>
    <!-- End. -->

    <!-- Start Section Loader -->
    <!-- <section class="loading_overlay">
      <div class="loader_logo">
        <img class="logo" src="assets/img/logo.svg" />
      </div>
    </section> -->
    <!-- End. Loader -->

  </div>
  <!-- .warapper -->

  <!-- jquery -->
  <script src="assets/js/jquery-3.5.0.js" type="text/javascript"></script>
  <!-- jquery-migrate -->
  <script src="assets/js/jquery-migrate.min.js" type="text/javascript"></script>
  <!-- popper -->
  <script src="assets/js/popper.min.js" type="text/javascript"></script>
  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <script src="//code.tidio.co/jhrmpcz8yambeyubeni4oo6nw8lxvtxc.js"></script>
  <!-- particles -->
  <script src="assets/js/vendor/particles.min.js" type="text/javascript"></script>
  <!-- TweenMax -->
  <script src="assets/js/vendor/TweenMax.min.js" type="text/javascript"></script>
  <!-- ScrollMagic -->
  <script src="assets/js/vendor/ScrollMagic.js" type="text/javascript"></script>
  <!-- animation.gsap -->
  <script src="assets/js/vendor/animation.gsap.js" type="text/javascript"></script>
  <!-- addIndicators -->
  <script src="assets/js/vendor/debug.addIndicators.min.js" type="text/javascript"></script>
  <!-- Swiper js -->
  <script src="assets/js/vendor/swiper.min.js" type="text/javascript"></script>
  <!-- countdown -->
  <script src="assets/js/vendor/countdown.js" type="text/javascript"></script>
  <!-- simpleParallax -->
  <script src="assets/js/vendor/simpleParallax.min.js" type="text/javascript"></script>
  <!-- waypoints -->
  <script src="assets/js/vendor/waypoints.min.js" type="text/javascript"></script>
  <!-- counterup -->
  <script src="assets/js/vendor/jquery.counterup.min.js" type="text/javascript"></script>
  <!-- charming -->
  <script src="assets/js/vendor/charming.min.js" type="text/javascript"></script>
  <!-- imagesloaded -->
  <script src="assets/js/vendor/imagesloaded.pkgd.min.js" type="text/javascript"></script>
  <!-- BX-Slider -->
  <script src="assets/js/vendor/jquery.bxslider.min.js" type="text/javascript"></script>
  <!-- typed -->
  <script src="assets/js/vendor/typed.js" type="text/javascript"></script>
  <!-- sticky -->
  <script src="assets/js/vendor/sticky.min.js" type="text/javascript"></script>
  <!-- Aos -->
  <script src="assets/js/vendor/aos.js" type="text/javascript"></script>
  <!-- isotope -->
  <script src="assets/js/vendor/isotope.pkgd.min.js" type="text/javascript"></script>
  <!-- main file -->
  <script src="assets/js/main.js" type="text/javascript"></script>


  <script>
    // Type js
    // var typed = new Typed('.typed', {
    //   strings: ["simplicity", "creativity", "versatility"],
    //   typeSpeed: 40,
    //   backSpeed: 20,
    //   backDelay: 2000,
    //   startDelay: 1000,
    //   loop: true,
    // });

    // aos
    AOS.init({
      easing: 'ease-in-out', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      duration: 500, // values from 0 to 3000, with step 50ms
    });


    var $grid = $('.grid-box').isotope({
      itemSelector: '.grid-item',
      layoutMode: 'fitRows',
    });

    $('.block_filter .btn').on("click", function () {
      var value = $(this).attr('data-name');

      $grid.isotope({
        filter: value,
      });

      $('.block_filter .btn').removeClass('active');
      $(this).addClass('active');

    });

    var swiper = new Swiper('.swipe_shot', {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      // grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      breakpoints: {
        240: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        540: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      }
    });


    /*-----------------------------
      Show Filter
    -----------------------------*/
    // build scene
    var scene = new ScrollMagic.Scene({
      triggerElement: "#triggerForm",
    })
      // trigger animation by adding a css class
      .setClassToggle("#filter", "fixedfilter")
      .addIndicators({
        name: "1 - add a class",
      }) // add indicators (requires plugin)
      .addTo(controller);

    /*-----------------------------
    hide Filter
  -----------------------------*/
    // build scene
    var scene = new ScrollMagic.Scene({
      triggerElement: "#triggerEnd",
    })
      // trigger animation by adding a css class
      .setClassToggle("#filter", "hidefilter")
      .addIndicators({
        name: "1 - add a class",
      }) // add indicators (requires plugin)
      .addTo(controller);
  </script>


</body>

</html>