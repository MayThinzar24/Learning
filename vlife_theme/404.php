<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vlife
 */

get_header();
?>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb w-980 clearfix js-height">
  <?php the_breadcrumb(); ?>
</div>

<div class="content-area w-980">
  <div class="not-found">
    <h2>お探しのページは見つかりません。</h2>
    <p class="s-lh-20 s-mt-30 s-mb-30 s-fs-30 s-fw-b">
      <span class="eff-txt">エラーコード：404 Not Found</span>
    </p>
    <a href="<?php echo site_url(); ?>" class="cmn-btn sec-btn"><span class="btn-circle"></span>
    <span class="btn-txt">トップページへ戻る</span></a>
  </div>
  <!-- ./ not-found -->
</div>
<!-- ./ content-area -->

<?php
get_footer();
