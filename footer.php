<footer class="bg-dark">
  <div class="footer-banner bg-focus no-padding no-margin"></div>
  <div class="row footer-wrapper">
    <div class="col-xl-4 col-lg-6 col-md-12 footer-sections footer-information-wrapper text-light">
      <h3>
        <?php echo get_theme_mod('social-head', 'Fylgdu okkur á samfélagsmiðlum!'); ?>

      </h3>
      <div class="footer-social-media-container">
        <a href="">
        <img src="<?php bloginfo('template_url'); ?>/images/social media/twitter.png" alt="" class="footer-social-media">
        </a>
        <a href="">
        <img src="<?php bloginfo('template_url'); ?>/images/social media/linkedin.png" alt="" class="footer-social-media">
        </a>
        <a href="">
        <img src="<?php bloginfo('template_url'); ?>/images/social media/facebook.png" alt="" class="footer-social-media">
        </a>
        <a href="">
        <img src="<?php bloginfo('template_url'); ?>/images/social media/google.png" alt="" class="footer-social-media">
        </a>
        <a href="">
        <img src="<?php bloginfo('template_url'); ?>/images/social media/insta.png" alt="" class="footer-social-media">
        </a>
      </div>
      <div class="wrap">
      <p class="left">Netfang:</p> <p class="right">
        <?php echo get_theme_mod('social-email', 'test@test.com'); ?>

      </p>
      <p class="left">Sími:</p> <p class="right">
        <?php echo get_theme_mod('social-phone', '111-1111'); ?>

      </p>
      <p class="left">Hvar:</p> <p class="right">
        <?php echo get_theme_mod('social-location', 'hringbraut 1, 101 Reykjavík'); ?>

      </p>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12 footer-sections mail-list-wrapper text-light">
      <h3>
        <?php echo get_theme_mod('maillist-head', 'Fylgstu með'); ?>

         <span class="focus">
           <?php echo get_theme_mod('maillist-head-color', 'Okkur'); ?>!

         </span></h3>
      <p>
        <?php echo get_theme_mod('maillist-des', 'skrifaðu netfang þitt hér fyrir neðan til að fá nýjar upplýsingar um kúrsa'); ?>

      </p>
      <div class="newsletter-cont">
      <h5>
        <?php echo get_theme_mod('maillist-second-head', 'Póstlisti'); ?>

      </h5>
      <input type="text" placeholder="Netfang">
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12 footer-sections footer-navigation-wrapper">
      <h3 class="text-light">
        <?php echo get_theme_mod('nav-footer-head', 'Hvert viltu stefna?'); ?>

      </h3>
      <ul class="right-list">
        <li class="footer-nav footer-nav-right"><a class="focus" href="<?php echo get_theme_mod('nav-footer-right-1-url', 'https://namskeid.taekninam.is/courses'); ?>">
          <?php echo get_theme_mod('nav-footer-right-1', 'Öll Námskeið'); ?>

        </a></li>
        <li class="footer-nav footer-nav-right"><a class="focus" href="<?php echo get_theme_mod('nav-footer-right-2-url', 'https://sso.teachable.com/secure/144338/users/sign_up?reset_purchase_session=1'); ?>">
          <?php echo get_theme_mod('nav-footer-right-2', 'Skráning á Námskeið'); ?>

        </a></li>
      </ul>
      <ul class="focus left-list">
        <li class="footer-nav footer-nav-left"><a class="focus" href="">
          <?php echo get_theme_mod('nav-btn-1', 'Námskeið'); ?>

        </a></li>
        <li class="footer-nav footer-nav-left"><a class="focus" href="#about">
          <?php echo get_theme_mod('nav-btn-2', 'Hafa Samband'); ?>

        </a></li>
        <li class="footer-nav footer-nav-left"><a class="focus" href="#samband">
          <?php echo get_theme_mod('nav-btn-3', 'Um Okkur'); ?>

        </a></li>
      </ul>
      <a href="#top" id="topbtn">
        <button class="btn top-button-container" style="cursor: pointer;"><img class="top-button" src="<?php bloginfo('template_url'); ?>/images/arrow.png" alt=""></button>
      </a>

    </div>
    </div>



</footer>
<?php wp_footer(); ?>

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script>
  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
  </script>
  <script>
    var open = false

    jQuery('.navbar-toggler').click(function(){
      open = !open

      if(open) {
        jQuery('.contact-tint').css('margin-top', '2600px');

      } else {
        jQuery('.contact-tint').css('margin-top', '2480px');
      }

    });
    </script>
    
</body>
</html>
