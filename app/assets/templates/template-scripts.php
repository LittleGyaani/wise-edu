<!-- Script Section Starts -->

<!-- jQuery -->
<script src="<?= $base_URI; ?>/app/assets/js/jquery.min.js?v=3.6.0" type="text/javascript"></script>
<!-- jQuery Migrate -->
<script src="<?= $base_URI; ?>/app/assets/js/jquery-migrate.min.js?v=3.3.2" type="text/javascript"></script>
<!-- Popper -->
<script src="<?= $base_URI; ?>/app/assets/js/popper.min.js?v=2.9.2" type="text/javascript"></script>
<!-- Bootstrap JS -->
<script src="<?= $base_URI; ?>/app/assets/js/bootstrap.min.js?v=4.5.0" type="text/javascript"></script>

<!--
  =================
   Vendor JS Files
  =================
-->

<!-- Waypoint -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/waypoints.min.js" type="text/javascript"></script>
<!-- ScrollMagic -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/ScrollMagic.js" type="text/javascript"></script>
<!-- Swiper -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/swiper.min.js" type="text/javascript"></script>
<!-- Countdown -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/countdown.js" type="text/javascript"></script>
<!-- Simple Parallax -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/simpleParallax.min.js" type="text/javascript"></script>
<!-- Counter Up -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/jquery.counterup.min.js" type="text/javascript"></script>
<!-- Sticky -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/sticky.min.js" type="text/javascript"></script>
<!-- AOS -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/aos.js" type="text/javascript"></script>
<!-- Main JS -->
<script src="<?= $base_URI; ?>/app/assets/js/main.js" type="text/javascript"></script>
<!-- Sweetalert2 JS -->
<script defer src="//cdn.jsdelivr.net/npm/sweetalert2@10" type="text/javascript"></script>
<?php if ($currentSegment === 'university')
  echo '<!-- University Page Specific JS -->
      <script src="' . $base_URI . '/app/assets/js/pages/university-details.js?v=1.0.0" type="text/javascript"></script>';
?>
<!-- Easy Autcomplete JS -->
<script defer href="<?= $base_URI; ?>/app/assets/js/vendor/easy-autocomplete.min.js?v=1.4.0" type="text/javascript"></script>
<!-- Fancy Box -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0-alpha.2/dist/fancybox.umd.min.js" type="text/javascript"></script>
<!-- Filterizr -->
<script src="<?= $base_URI; ?>/app/assets/js/vendor/jquery.filterizr.min.js" type="text/javascript"></script>
<!-- Main APP JS -->
<script src="<?= $base_URI; ?>/app/assets/js/app.js" type="text/javascript"></script>

<!-- Script Section Ends -->

<?php ob_end_flush(); ?>