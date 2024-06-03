<?php 
/*
Template Name:about
*/
get_header(); 
?>

<main class="main-contents">
  <div class="container">
    <section class="section">
      <h1 class="section__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bn_about.png" alt="About"/></h1>
      <div class="page-intro">
        <h2 class="page-intro__header">BONDのおもい</h2>
        <p class="page-intro__txt">私たちは“モノづくり“が大好きです。<br>
          そして何よりも、まだ世の中に無いプロダクトを皆様にお届けする事が最大の使命と考えています。</p>
        <p class="page-intro__txt">BONDは、ただの“OEM企業”ではなく、プランニング（商品企画）からディレクション・製造までをトータルで行う、<br class="br-sp">
          フレグランス商品のエキスパート企業です。<br>
          お客様の「これを作りたい」「こんなモノを作ってみたい」をそのまま作るのではなく、お客様と同じ視点に立ち、寄り添い、<br class="br-sp">
          柔軟な発想と、培った経験により、お客様とお互いの意見を混ぜ合わせたOnly oneのモノづくりを大切にしていきます。</p>
        <p class="page-intro__txt">また、社名のBONDには「絆」や「縁」「結びつける」の意味がこめられており、<br class="br-sp">
          BONDを通じ、様々なスペシャリストとご縁がつながることで、<br class="br-sp">
          まだ世にない商品を作り出す喜びをお客様と共に感じ、新しい道につなげていくことが出来る企業でありたいと思っています。</p>
      </div>
    </section>
    <section class="section">
      <h2 class="company__header">CORPORATE  PROFILE</h2>
      <div class="table">
        <table>
          <tbody>
            <tr>
              <th> 社名 </th>
              <td>株式会社BOND</td>
            </tr>
            <tr>
              <th> 設立年月日 </th>
              <td>2024年3月</td>
            </tr>
            <tr>
              <th> 代表名 </th>
              <td>代市　旬</td>
            </tr>
            <tr>
              <th> 資本金 </th>
              <td>500万円</td>
            </tr>
            <tr>
              <th> 本社 </th>
              <td>〒156-0045<br>
                東京都世田谷区桜上水2-6-1-102<br>
                TEL:03-6379-6153<br>
                FAX:03-6379-6154</td>
            </tr>
            <tr>
              <th> 事業内容 </th>
              <td>化粧品・香り製品のOEM<br>
                化粧品・雑貨品のプロデュース<br>
                日用雑貨・インテリア用品の企画・製造<br>
                食品及び飲料のOEM</td>
            </tr>
            <tr>
              <th>取引銀行 </th>
              <td>城南信用金庫　桜上水支店</td>
            </tr>
            <!-- <tr>
              <th>許認可等 </th>
              <td>化粧品製造販売業取得準備中</td>
            </tr> -->
          </tbody>
        </table>
      </div>
      <div class="about__img"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about1.jpg" alt=""/> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about2.jpg" class="_sp-none" alt=""/> </div>
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
