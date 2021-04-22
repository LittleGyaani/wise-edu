
<!-- Script Section Starts -->
  <!-- jquery -->
  <script src="app/assets/js/jquery.min.js?v=3.6.0" type="text/javascript"></script>
  <!-- jquery-migrate -->
  <script src="app/assets/js/jquery-migrate.min.js?v=3.3.2" type="text/javascript"></script>
  <!-- popper -->
  <script src="app/assets/js/popper.min.js" type="text/javascript"></script>
  <!-- bootstrap -->
  <script src="app/assets/js/bootstrap.min.js" type="text/javascript"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <!-- particles -->
  <script src="app/assets/js/vendor/particles.min.js" type="text/javascript"></script>
  <!-- TweenMax -->
  <script src="app/assets/js/vendor/TweenMax.min.js" type="text/javascript"></script>
  <!-- ScrollMagic -->
  <script src="app/assets/js/vendor/ScrollMagic.js" type="text/javascript"></script>
  <!-- animation.gsap -->
  <script src="app/assets/js/vendor/animation.gsap.js" type="text/javascript"></script>
  <!-- addIndicators -->
  <script src="app/assets/js/vendor/debug.addIndicators.min.js" type="text/javascript"></script>
  <!-- Swiper js -->
  <script src="app/assets/js/vendor/swiper.min.js" type="text/javascript"></script>
  <!-- countdown -->
  <script src="app/assets/js/vendor/countdown.js" type="text/javascript"></script>
  <!-- simpleParallax -->
  <script src="app/assets/js/vendor/simpleParallax.min.js" type="text/javascript"></script>
  <!-- waypoints -->
  <script src="app/assets/js/vendor/waypoints.min.js" type="text/javascript"></script>
  <!-- counterup -->
  <script src="app/assets/js/vendor/jquery.counterup.min.js" type="text/javascript"></script>
  <!-- charming -->
  <script src="app/assets/js/vendor/charming.min.js" type="text/javascript"></script>
  <!-- imagesloaded -->
  <script src="app/assets/js/vendor/imagesloaded.pkgd.min.js" type="text/javascript"></script>
  <!-- BX-Slider -->
  <script src="app/assets/js/vendor/jquery.bxslider.min.js" type="text/javascript"></script>
  <!-- Sharer -->
  <script src="app/assets/js/vendor/sharer.js" type="text/javascript"></script>
  <!-- sticky -->
  <script src="app/assets/js/vendor/sticky.min.js" type="text/javascript"></script>
  <!-- Aos -->
  <script src="app/assets/js/vendor/aos.js" type="text/javascript"></script>
  <!-- main file -->
  <script src="app/assets/js/main.js" type="text/javascript"></script>
  <!-- scroll to anchro -->
  <script src="app/assets/js/vendor/scrolltoanchor.js" type="text/javascript"></script>
<!-- Script Section Ends -->
<script>
function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}
const smoothScroll = new scrolltoanchor({
  offset: 0, // integer in pixels from the top of window
  duration: 1000, // integer in ms the scroll animation will go for
});
</script>