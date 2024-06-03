<?php
/**
 * Template Name: newslist
 */
get_header(); ?>

<main id="primary" class="main-contents">
<div class="container">
<section class="section">
      <h1 class="section__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bn_newslist.png" alt="News一覧"/></h1>
<?php
    // カスタムクエリを使って最新のニュース投稿を取得
    $news_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category_name' => 'news' // ニュースカテゴリーのスラッグを指定
    ));

    if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <div class="news__item">
                <dt class="news__date">
                    <time><?php echo get_the_date(); ?></time>
                </dt>
                <dd class="news__data"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>ニュースがありません。</p>
    <?php endif; ?>
    </section>
</div>
</main>

<?php
get_footer();
