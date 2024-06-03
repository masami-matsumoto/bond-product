<?php get_header(); ?>
<main class="main-contents">
  <div class="mv">
    <div class="swiper mvSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <source media="(min-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main1.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_sp1.jpg" alt="フレグランス"/> </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source media="(min-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main2.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_sp2.jpg" alt="キャンドル"/> </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source media="(min-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main3.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_sp3.jpg" alt="ディフューザー"/> </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source media="(min-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main4.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_sp4.jpg" alt="コスメティック"/> </picture>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
  <div class="container">
    <section class="section">
      <h2 class="section__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bn_about.png" alt="About"/></h2>
      <div class="about">
        <figure class="about__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top1.jpg" alt="私たちについて"/></figure>
        <div class="about__body">
          <p class="about__text">
            香水をはじめとした化粧品を中心に、ディフューザーやキャン<br class="br-sp">ドルなどを含むフレグランス商品のOEMを行っております。<br>
            お客様のイメージをカタチにするサポートを企画から製造まで<br class="br-sp">一貫してさせていただきます。</p>
        </div>
      </div>
      <p class="section__button"><a href="/about/" class="button--sm">READ MORE</a></p>
    </section>
    <section class="section section--border">
      <h2 class="section__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bn_service.png" alt="Service"/></h2>
      <p class="section__lead service__lead">“あなたの特別“をプランニングする、<span>フレグランス商品のOEM</span></p>
      <div class="grid grid--pc3col card-list service__list">
        <section class="grid__item card">
          <div class="card__body">
            <h3 class="card__title">カスタマイズ可能な商品作り</h3>
            <p class="card__text">お客様のブランドや製品のオリジナル性を最大限に引き出すために、香り・パッケージ・デザインなど、さまざまな要素をカスタマイズ出来る柔軟性を持っています。</p>
          </div>
          <div class="card__image"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon1.png" alt="カスタマイズ可能な商品作り"/> </div>
        </section>
        <section class="grid__item card">
          <div class="card__body">
            <h3 class="card__title">安全と品質の管理</h3>
            <p class="card__text">厳格な品質管理基準に従い、原材料の選定から製造・検査・出荷まで、製品の品質を確保します。また、規制や法令を遵守し、お客様のプライバシーや機密情報を守ることにも配慮しています。</p>
          </div>
          <div class="card__image"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" alt="安全と品質管理"/> </div>
        </section>
        <section class="grid__item card">
          <div class="card__body">
            <h3 class="card__title">顧客志向なアプローチ</h3>
            <!-- ここだけstyle入れてる -->
            <p class="card__text" style="letter-spacing: -0.03em;">お客様との密なコミュニケーションを重視し、案件やスケジュールに合わせて効率的かつ迅速に対応します。お客様のビジネスの成功をお手伝いすべく、理想や希望を上回るプロダクトを提供致します。</p>
          </div>
          <div class="card__image"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon3.png" alt="顧客志向なアプローチ"/> </div>
        </section>
      </div>
      <p class="section__button"><a href="/service/" class="button--sm">READ MORE</a></p>
    </section>
    <section class="section section--border">
      <h2 class="section__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bn_news.png" alt="News"/></h2>
      <dl class="news">
      <?php
    // カスタムクエリを使って最新のニュース投稿を取得
    $news_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
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
        <!-- <div class="news__item">
          <dt class="news__date">
            <time>2024.5,31</time>
          </dt>
          <dd class="news__data">ホームページ公開のお知らせ</dd>
        </div>
        <div class="news__item">
          <dt class="news__date">
            <time>2024.3,15</time>
          </dt>
          <dd class="news__data">会社設立のお知らせ</dd>
        </div> -->
        <!-- <div class="news__item">
          <dt class="news__date">
            <time>2024.01,01</time>
          </dt>
          <dd class="news__data">コメントが入ります。コメントが入ります。コメントが入ります。</dd>
        </div> -->
      </dl>
      <p class="section__button"><a href="/news-page/" class="button--sm">READ MORE</a></p>
    </section>
  </div>
</main>
<aside class="cv-area">
  <div class="container">
    <h2 class="section__title"><a href="/contact/" class="button"><span class="noselect">CONTACT</span></a></h2>
    <p class="cv-area__txt">ご相談、ご質問、お見積もりなどのお問い合わせは、<br>
      こちらよりお気軽にお問い合わせください。 </p>
    <p class="cv-area__attention">※ また、お問い合わせ内容により対応にお時間をいただく場合がございますのでご了承ください。</p>
  </div>
</aside>
<?php get_footer(); ?>