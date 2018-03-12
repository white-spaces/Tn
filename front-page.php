<script src="main.js"></script>

<script type="text/javascript">
  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
  </script>
<?php get_header(); ?>


<div class="row hero-wrapper">
    <div class="col-sm-12 hero-container">
      <div class="row hero-text-wrapper no-padding no-margin">
        <div class="col-5 hero-text-container">
          <h1 class="text-light bg-dark"><?php echo get_theme_mod('showcase_heading', 'Fjarnám á þínum forsemdum'); ?></h1>
          <h3 class="text-light bg-dark"><?php echo get_theme_mod('showcase-heading-2', 'Hvar sem er'); ?></h3>
          <a href="<?php echo get_theme_mod('showcase-heading-btn-url', 'https://sso.teachable.com/secure/144338/users/sign_up?reset_purchase_session=1'); ?>">
            <button class="btn btn-this" id="hero-btn">
              <?php echo get_theme_mod('showcase-heading-btn', 'Skráðu þig hér'); ?>
            </button>
          </a>
        </div>
      </div>
      <div class="row icons-wrapper">
        <div class="col-sm-4 icon-container no-padding no-margin">
          <div class="row ind-container no-padding no-margin">
            <div class="col-2">
              <img src="<?php bloginfo('template_url'); ?>/images/unlimited-white.png" alt="" class="icon-photo">
            </div>
            <div class="col-10 icon-text">
              <h4><?php echo get_theme_mod('left-icon-head', 'Ótakmarkaður aðgangur'); ?></h4>
              <h6><?php echo get_theme_mod('left-icon-sub', 'Ein kaup að eilífu'); ?>.<h6>
            </div>
          </div>
        </div>
        <div class="col-sm-4 icon-container no-padding no-margin">
          <div class="row ind-container no-padding no-margin">
            <div class="col-2">
              <img src="<?php bloginfo('template_url'); ?>/images/teacher-white.png" alt="" class="icon-photo">
            </div>
            <div class="col-10 icon-text">
              <h4><?php echo get_theme_mod('mid-icon-head', 'Sérfræðingar kenna'); ?></h4>
              <h6><?php echo get_theme_mod('mid-icon-sub', 'Lærðu frá þeim bestu'); ?></h6>
            </div>
          </div>
        </div>
        <div class="col-sm-4 icon-container no-padding no-margin">
          <div class="row ind-container no-padding no-margin">
            <div class="col-2">
              <img src="<?php bloginfo('template_url'); ?>/images/anywhere-white.png" alt="" class="icon-photo">
            </div>
            <div class="col-10 icon-text">
              <h4><?php echo get_theme_mod('right-icon-head', 'Lærðu hvar sem er!'); ?></h4>
              <h6><?php echo get_theme_mod('right-icon-sub', 'Sími eða tölva, það skiptir ekki máli.'); ?></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row no-margin bg-light block-header">
    <div class="col-12 header-text">
      <h1 class="text-dark"><?php echo get_theme_mod('category-head', 'Flokkarnir okkar'); ?></h1>
      <p class="text-dark first-p"><?php echo get_theme_mod('category-sub-1', 'Hér eru kúrsar sem við kennum og sérhæfum okkur í.'); ?></p>
      <p class="text-dark second-p"><?php echo get_theme_mod('category-sub-2', 'Veldu flokk til að kynna þér betur.'); ?></p>
    </div>
    </div>
<div class="row boxes-wrapper no-margin bg-light">


    <div class="col-5 large-block-container no-padding">
      <div class="large-block">
        <div class="large-block-on-hover">
        <div class="large-tint">
          <a style="text-decoration: none;" target="_blank" href="https://namskeid.taekninam.is/courses/category/Office%20365">
          <div class="tint-image-container">
            <img src="<?php bloginfo('template_url'); ?>/images/ms-icons/office.png" alt="">
            <h2 class="text-dark" style="text-align: center;"><?php echo get_theme_mod('large-head-hidden', 'Office 365'); ?></h2>
          </div>
        </a>
        </div>
        <div class="large-banner bg-focus">
          <h5 style="text-transform: uppercase;" class="text-light"><?php echo get_theme_mod('large-head', 'Office 365'); ?></h5>
          <p class="text-light" style="font-size: 0.9em;"><?php echo get_theme_mod('large-des', 'Með office námi okkar nærðu tökum á vinsæla kerfinu "office 365"'); ?></p>
        </div>
        </div>
      </div>
    </div>
    <div class="col-7 small-block-wrapper no-padding">
      <div class="row small-block-container first-row no-padding">
        <div class="col-lg-4 col-md-12 no-margin no-padding small-block-body">
          <div class="small-block" id="first">
            <div class="small-block-on-hover">
            <div class="tint">
              <a style="text-decoration: none;" target="_blank" href="https://namskeid.taekninam.is/courses/category/SharePoint">
              <div class="small-tint-img-container">
                <img src="<?php bloginfo('template_url'); ?>/images/ms-icons/sharepoint.png" alt="">
                <h3 class="text-dark"><?php echo get_theme_mod('small-head-1-hidden', 'SharePoint'); ?></h3>
              </div>
              </a>
            </div>
            <div class="banner bg-dark">
              <h5 style="text-transform: uppercase;" class="text-light"><?php echo get_theme_mod('small-head-1', 'SharePoint'); ?></h5>
              <p class="text-light" style="font-size: 0.9em;"><?php echo get_theme_mod('small-des-1', 'Með sharepoint námi okkar nærðu tökum á allri tækni sem tengist Sharepoint'); ?></p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 no-margin no-padding small-block-body">
          <div class="small-block" id="second">
          <div class="small-block-on-hover">            
            <div class="tint">
              <a style="text-decoration: none;" target="_blank" href="https://namskeid.taekninam.is/courses/category/Onedrive%20for%20Business">
              <div class="small-tint-img-container">
                <img src="<?php bloginfo('template_url'); ?>/images/ms-icons/onedrive.png" alt="">
                <h3 class="text-dark"><?php echo get_theme_mod('small-head-2-hidden', 'OneDrive'); ?></h3>
              </div>
            </a>
            </div>
            <div class="banner bg-dark">
              <h5 style="text-transform: uppercase;" class="text-light"><?php echo get_theme_mod('small-head-2', 'OneDrive'); ?></h5>
              <p class="text-light" style="font-size: 0.9em;"><?php echo get_theme_mod('small-des-2', 'Með OneDrive námi okkar nærðu tökum á allri tækni sem tengist OneDrive'); ?></p>
            </div>
           </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 no-margin no-padding small-block-body">
          <div class="small-block" id="third">
          <div class="small-block-on-hover">                          
            <div class="tint">
              <a style="text-decoration: none;" target="_blank" href="https://namskeid.taekninam.is/courses/category/OneNote">
              <div class="small-tint-img-container">
                <img src="<?php bloginfo('template_url'); ?>/images/ms-icons/onenote.png" alt="">
                <h3 class="text-dark">
                  <?php echo get_theme_mod('small-head-3-hidden', 'OneNote'); ?>
                </h3>
              </div>
            </a>
            </div>
            <div class="banner bg-dark">
              <h5 style="text-transform: uppercase;" class="text-light">
                <?php echo get_theme_mod('small-head-3', 'OneNote'); ?>
              </h5>
              <p class="text-light" style="font-size: 0.9em;">
                <?php echo get_theme_mod('small-des-3', 'Með OneNote námi okkar nærðu tökum á allri tækni sem tengist OneNote'); ?>
              </p>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row small-block-container second-row no-padding">
        <div class="col-lg-4 col-md-12 no-margin no-padding small-block-body">
          <div class="small-block" id="fourth">
          <div class="small-block-on-hover">                          
            <div class="tint">
              <a style="text-decoration: none;" target="_blank" href="https://namskeid.taekninam.is/courses/category/Outlook">
              <div class="small-tint-img-container">
                <img src="<?php bloginfo('template_url'); ?>/images/ms-icons/outlook.png" alt="">
                <h3 class="text-dark">
                  <?php echo get_theme_mod('small-head-4-hidden', 'Outlook'); ?>
                </h3>
              </div>
            </a>
            </div>
            <div class="banner bg-dark">
              <h5 style="text-transform: uppercase;" class="text-light">
                <?php echo get_theme_mod('small-head-4', 'Outlook'); ?>
              </h5>
              <p class="text-light" style="font-size: 0.9em;">
                <?php echo get_theme_mod('small-des-4', 'Með Outlook námi okkar nærðu tökum á allri tækni sem tengist Outlook'); ?>
              </p>
            </div>
           </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 no-margin no-padding small-block-body">
          <div class="small-block" id="fifth">
          <div class="small-block-on-hover">                          
            <div class="tint">
              <a style="text-decoration: none;" target="_blank" href="https://namskeid.taekninam.is/courses/category/Microsoft%20Teams">
              <div class="small-tint-img-container">
                <img src="<?php bloginfo('template_url'); ?>/images/ms-icons/teams.png" alt="">
                <h3 class="text-dark">
                  <?php echo get_theme_mod('small-head-5-hidden', 'Teams'); ?>
                </h3>
              </div>
            </a>
            </div>
            <div class="banner bg-dark">
              <h5 style="text-transform: uppercase;" class="text-light">
                <?php echo get_theme_mod('small-head-5', 'Teams'); ?>
              </h5>
              <p class="text-light" style="font-size: 0.9em;">
                <?php echo get_theme_mod('small-des-5', 'Með Teams námi okkar nærðu tökum á allri tækni sem tengist Teams'); ?>

              </p>
            </div>
           </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-12 no-margin no-padding small-block-body">

          <div class="small-block" id="sixth">
          <div class="small-block-on-hover">                          
            <div class="tint">
              <a style="text-decoration: none;" target="_blank" href="https://namskeid.taekninam.is/courses/category/Skjalastj%C3%B3rnun">

              <div class="small-tint-img-container">
                <img src="<?php bloginfo('template_url'); ?>/images/ms-icons/file.png" alt="">
                <h3 class="text-dark">
                  <?php echo get_theme_mod('small-head-6-hidden', 'Skjalastjórnun'); ?>

                </h3>
              </div>
            </a>
            </div>
            <div class="banner bg-dark">
              <h5 style="text-transform: uppercase;" class="text-light">
                <?php echo get_theme_mod('small-head-6', 'Skjalastjórnun'); ?>

              </h5>
              <p class="text-light" style="font-size: 0.9em;">
                <?php echo get_theme_mod('small-des-6', 'Með Skjalastjórnunar námi okkar nærðu tökum á allri tækni sem tengist skjalastjórnun'); ?>

              </p>
            </div>
           </div>
          </div>

        </div>
      </div>
    </div>

</div>



<?php get_footer(); ?>
