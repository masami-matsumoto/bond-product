<?php 
/*
Template Name:contact
*/
get_header(); 
?>
<main class="main-contents">
  <div class="container">
    <section class="section">
      <h1 class="section__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bn_contact.png" alt="Contact"/></h1>
      <p class="section__subtitle">お問い合わせ</p>
      
      <!-- フォーム -->
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="ec35b4f" title="お問い合わせフォーム"]'); ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>