<?php get_header(); ?>

<main id="primary" class="main-contents">
<div class="container">
<section class="section">
<?php while ( have_posts() ): the_post(); ?>
    <div class="article-block page-intro">
    <h2 class="page-intro__header"><?php the_title(); ?></h2>
      <p class="page-date"><?php echo get_the_date('Y/m/d'); ?></p>
      <?php if (has_post_thumbnail()): ?>
      <p class="thumb page-intro__txt"><?php the_post_thumbnail('large'); ?></p>
      <?php endif; ?>
      <p class="txt page-intro__txt">
        <?php the_content(); ?>
      </p>
    </div>
   <?php endwhile; ?>
   <p class="section__button"><a href="/news-page/" class="button--sm">一覧に戻る</a></p>
</div>
</section>
</main>

<?php get_footer();