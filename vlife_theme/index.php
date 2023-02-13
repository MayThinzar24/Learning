<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife
 */

get_header();
?>
<!-- =============== content ============== -->
<div class="content js-height">
  <div class="load js-load">
    <div class="load-content">
      <div class="load-logo js-fadein">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/shared/img_load_logo.png" alt="VALUABLE LIFE みんな違ってみんないい" width="253" height="144" loading="lazy">
      </div>
      <div class="type-txt js-type">
        <span>一</span>
        <span>度</span>
        <span>き</span>
        <span>り</span>
        <span>の</span>
        <span class="eff-txt">人</span>
        <span class="eff-txt">生</span>
        <span>を</span>
        <span>、</span><br class="s-sp">
        <span>価</span>
        <span>値</span>
        <span>あ</span>
        <span>る</span>
        <span class="eff-txt">人</span>
        <span class="eff-txt">生</span>
        <span>に</span>
        <span>。</span>
      </div>
    </div>
  </div><!-- /.load -->
  <!-- ===============  main visual ============== -->
  <section class="sec-mv">
    <div class="mv-img-list">
      <div class="list-img" data-aos="fade-down" data-aos-delay="7000">
      </div>
      <div class="list-img" data-aos="fade-up" data-aos-delay="7000">
      </div>
      <div class="list-img" data-aos="fade-down" data-aos-delay="7000">
      </div>
    </div>
    <h1 class="mv-ttl" data-aos="fade-up" data-aos-delay="7500">
      全ての人が安心して<br>
      <span class="yellow-line">医療・介護・保育</span>を<br>
      受けられる社会へ
    </h1>
    <div class="mv-txt" data-aos="fade-up" data-aos-delay="7500" data-aos-anchor-placement="top">
      <p>Everyone can rest assured Medical care, nursing care,
        and childcare to a society that accepts</p>
    </div>
  </section><!-- /.sec-mv -->
  <section class="sec-about" data-aos="fade-up">
    <div class="inner">
      <h2 class="sec-ttl eff-txt">
        <span class="eng-ttl">about us</span>
        <span class="jp-ttl">私たちについて</span>
      </h2>
      <h3 class="desc">価値ある人生、一度きりの人生 <br>相手の立場になって深く考える</h3>
      <div class="about-txt">
        私たちについての見出し対しての本文サブコピーが入る想定私たちについての見出し対しての本文私たちについての見出し対しての本文私たちについての見出し対しての本文私たちについての見出し対しての本文私たちについての私たちについての見出し対しての本文
      </div>
      <a href="#" class="cmn-btn sec-btn">
        <span class="btn-circle"></span>
        <span class="btn-txt">私たちについてへ</span>
      </a>
    </div>
  </section><!-- /.sec-about -->
  <section class="sec-news" data-aos="fade-up">
    <div class="inner clearfix">
      <div class="news-content">
        <h2 class="sec-ttl eff-txt">
          <span class="eng-ttl">news</span>
          <span class="jp-ttl">お知らせ</span>
        </h2>
        <ul class="news-list">
          <?php query_posts('posts_per_page=3&post_type=news&order=DESC&paged=' . $paged); ?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="news-data">
                <div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
                <a href="<?php the_permalink(); ?>" class="news-link">
                  <?php the_title(); ?>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </ul>
      </div>
      <a href="<?php echo site_url(); ?>/news/" class="cmn-btn sec-btn">
        <span class="btn-circle"></span>
        <span class="btn-txt">お知らせ一覧へ</span>
      </a>
    </div>
  </section><!-- /.sec-news -->
  <section class="sec-contact" data-aos="fade-up">
    <div class="inner">
      <h2 class="sec-ttl">
        <span class="eng-ttl">contact</span>
        <span class="jp-ttl">お問い合わせ</span>
      </h2>
      <p class="contact-txt">VALUABLE LIFEへの各種お問い合わせはこちらからお願いします。</p>
      <div class="btn-list">
        <a href="#" class="cmn-btn contact-btn">
          <span class="btn-txt underline-txt">採用ご担当者様はこちらから</span>
          <span class="btn-circle"></span>
        </a>
        <a href="#" class="cmn-btn contact-btn">
          <span class="btn-txt underline-txt">求職者様お問い合わせ</span>
          <span class="btn-circle"></span>
        </a>
      </div>
    </div>
  </section><!-- /.sec-contact -->
</div>
<?php
get_footer();
