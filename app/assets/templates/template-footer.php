<!-- Bottom Divider -->
<!-- Start dividar -->
<section class="dividar margin-t-2"></section>
<!-- End. divider -->

<!-- Start Footer -->
<footer class="defalut-footer light padding-py-12 footer__workspace bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 mt-0 mb-lg-0">
        <div class="item_about">
          <a class="logo" href="<?= $router->generate('index'); ?>">
            <center>
              <img src="<?= $base_URI; ?>/app/assets/img/logos/wise-education-logo.png" alt="Wise Education Group" />
            </center>
          </a>
          <p>
            <b>Wise Education</b>, a premier organization in India was founded in 2014 with a vision to provide quality, economically viable education abroad. Wise Education takes great pride in being the pioneer organization to provide admission to worldwide.
          </p>
          <div class="address">
            <span>Locate us: Plot No. - 191/A, Kharavela Nagar, Unit-3, Bhubaneswar, Odisha, 751001 India
              <br />
              <small class="c-red"><strong>(Due to COVID-19 office might not be operational, please confirm before visiting.)</strong></small>
            </span>
            <span>Call us: <a href="tel:+919439937117">+91 9439 937 117</a> / <a href="tel:+380636908318">+38 0636 908 318</a></span>
            <span>Office hours: 09:00AM - 09:00PM (IST/GMT+5:30, MON-SAT)</span>
            <span>Email us: <a href="mailto:enquiry@wiseeducation.in">enquiry@wiseeducation.in</a></span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-2">
        <div class="item_links">
          <h4>Explore
            <span class="item_new bg-blue">Start Here</span>
          </h4>
          <a class="nav-link" href="<?= $router->generate('search-page'); ?>">Search
            <span class="item_new">New</span>
          </a>
          <a class="nav-link" href="<?= $router->generate('all-programs'); ?>">Programs</a>
          <a class="nav-link" href="<?= $router->generate('all-countries'); ?>">Countries</a>
          <a class="nav-link" href="<?= $router->generate('all-locations'); ?>">Locations</a>
          <a class="nav-link" href="<?= $router->generate('all-universities'); ?>">Universities</a>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-2">
        <div class="item_links">
          <h4>Company</h4>
          <a class="nav-link" href="<?= $router->generate('about-us'); ?>">About</a>
          <a class="nav-link" href="https://blog.wiseeducation.in/">Blog</a>
          <a class="nav-link" href="javascript:void(0);">Careers <span class="item_new">Hiring</span></a>
          <a class="nav-link" href="javascript:void(0);">Services</a>
          <a class="nav-link" href="<?= $router->generate('contact-us'); ?>">Contact</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
        <div class="item_subscribe">
          <h4>Subscribe</h4>
          <p>
            Subscribe to get the latest<br />
            news form us
          </p>
          <form class="form-row">
            <div class="col-md-11 form-group subscribebtn">
              <div class="item_input">
                <input type="email" class="form-control rounded-12 border-1" id="exampleInputEmail1" placeholder="Enter email address" aria-describedby="emailHelp">
                <button type="button" class="btn ripple_circle scale rounded-8 btn_subscribe">
                  <i class="tio send"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <a href="https://www.facebook.com/wiseeducation" target="_blank" aria-label="Like Wise Group on Facebook" data-microtip-position="top" role="tooltip" class="btn-social color-facebook border-0 mr-2">
          <i class="tio facebook"></i>
        </a>
        <a href="https://twitter.com/wiseeducationg2" target="_blank" aria-label="Follow Wise Group on Twitter" data-microtip-position="top" role="tooltip" class="btn-social color-twitter border-0 mr-2">
          <i class="tio twitter"></i>
        </a>
        <a href="https://instagram.com/gwiseeducation/" target="_blank" aria-label="Follow Wise Group on Instagram" data-microtip-position="top" role="tooltip" class="btn-social color-instagram border-0 mr-2">
          <i class="tio instagram"></i>
        </a>
        <a href="https://www.youtube.com/channel/UC1OlVHFElQ0HTvmXIkaZ28g" target="_blank" aria-label="Subscribe Wise Group on YouTube" data-microtip-position="top" role="tooltip" class="btn-social color-youtube border-0 mr-2">
          <i class="tio youtube"></i>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 margin-t-1">
        <select data-menu>
          <option>French</option>
          <option selected>English</option>
          <option>Arabic</option>
          <option>Russian</option>
        </select>
      </div>
    </div>
    <div class="col-12 text-center padding-t-4">
      <div class="copyright">
        <span>Copyright &copy; <?= Date('Y'); ?> <strong>WISE EDUCATION GROUP.</strong>
          All Rights Reseved.
          <p>Beautifully Crafted with <i class="fa fa-heart heart fa-beat" aria-hidden="true"></i> by <a class="ft-lnk" href="https://wa.me/919853233951?text=I got your Contact from Wise Education Group Official Website" target="_blank" aria-label="Ping BRAHMA a.k.a Little Gyaani on WhatsApp" data-microtip-position="top" role="tooltip"><b>Little Gyaani</b></a>.</p>
          <center>
            <strong>
              <a class="ft-lnk" href="javascript:void(0);">Terms & Conditions</a> &bull;
              <a class="ft-lnk" href="javascript:void(0);">Privacy Policy</a> &bull;
              <a class="ft-lnk" href="javascript:void(0);">Disclaimer</a>
            </strong>
          </center>
        </span>
      </div>
    </div>
  </div>
</footer>
<!-- End. Footer -->

<!-- Video Modal -->
<div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <!-- Close -->
  <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
    <i class="tio clear"></i>
  </button>
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Back to top with progress indicator-->
<div class="prgoress_indicator">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>

<!-- Website credit -->
<a href="https://wa.me/919853233951?text=I got your Contact from Wise Education Group Official Website" target="_blank" class="rakon_purchase">
  <button type="button" class="btn btn_purch">
    <div class="icon">
      <img src="https://img.icons8.com/color/344/github-2.png" alt="Meet the Developer" height="auto" width="auto" />
    </div>
    <span class="txt">BRAHMA</span>
  </button>
</a>
<!-- End. -->

<!-- Tosts -->
<!-- <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
  <div class="toast toast_demo" id="myTost" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-autohide="false">
    <div class="toast-body">
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <i class="tio clear"></i>
      </button>
      <h5>Hi there 👋</h5>
      <p>We are glad you joined us <a href="#">Join us</a></p>
    </div>
  </div>
</div> -->
<!-- End. Toasts -->

<!-- Start Section Loader -->
<section class="loading_overlay">
  <div class="loader_logo">
    <img class="logo" src=<?= $base_URI . "/app/assets/img/loaders/wise-loader.gif" ?> height="auto" width="auto" alt="Wise Education Group" />
  </div>
</section>
<!-- End. Loader -->

<!-- COVID Toast -->
<!-- <div id="toast">
  <div id="img"><img src="https://img.icons8.com/color/344/virus.png" height="35" width="35" alt="WISE GROUP COVID MESSAGE" /></div>
  <div id="desc">COVID is still here. <strong>Stay Home, Stay Safe.</strong></div>
</div> -->
<!-- COVID Toast End -->