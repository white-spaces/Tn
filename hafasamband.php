<?php

/*

Template Name: Contact

*/

?>

<?php get_header(); ?>





<div class="contact-section-wrapper" id="samband">
  <div class="contact-tint"></div>
  <div class="h1-contact">
  <h1 class="bg-dark"><?php echo get_theme_mod('contact-head', 'Hafðu Samband'); ?></h1>
  </div>
  <div class="row no-padding contact-section-container">
    <div class="contact-form-container col-12">

      <form class="bg-dark" action="">
        <div class="left-contact">
        <input type="text" placeholder="NAFN" class="text-dark">
        <input type="text" placeholder="NETFANG" class="text-dark">
        <input type="text" placeholder="SÍMI" class="text-dark">
        <input type="text" placeholder="FYRIRTÆKI" class="text-dark">
        </div>
        <div class="right-contact">
          <textarea id="message" type="text" placeholder="SKILABOÐ" class="text-dark"></textarea>
        </div>
        <button class="btn submit btn-this">Senda</button>
      </form>
    </div>
  </div>
</div>





<?php get_footer(); ?>