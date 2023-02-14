<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package factory
 */

get_header();
?>
<div class="page-mv error-mv js-height">
  <div class="inner">
    <h1 class="page-ttl">
      <span class="first-ttl">404 NOT FOUND</span>
      <span class="second-ttl">Not Found</span>
    </h1>
  </div>
</div><!-- /.page-mv -->
<!-- ===============  Breadcrumb ============== -->
<!-- <div class="breadcrumb w-980 clearfix">
  <?php //the_breadcrumb(); ?>
</div> -->

<div class="content-area w-980">
  <div class="inner not-found s-txt-center">
    <p class="s-lh-20 s-fs-16 s-mt-30 s-mb-30">
    We're sorry, but we couldn't find the page you were looking for.<br>
The page you are looking for may have been deleted or the URL may have changed.
    </p>
    <a href="<?php echo site_url(); ?>" class="cmn-btn btn-red s-pt-15 s-pb-15 s-pl-40 s-pr-40">TOP Page</a>
  </div>
  <!-- ./ not-found -->
</div>
<!-- ./ content-area -->

<?php
get_footer();
