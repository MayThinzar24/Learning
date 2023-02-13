<?php
/**
 * The template for displaying Category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife
 */

get_header();
?>

<div class="breadcrumb clearfix js-height">
  <?php the_breadcrumb(); ?>
</div>
<!-- =============== content ============== -->
<div class="content">
  <?php
    if (have_posts()) : ?>
    <?php  $category = get_the_category($post->ID);
      $cat_id = $category[0]->cat_ID;
      $cat_name = $category[0]->name;
      $cat_slug = $category[0]->slug; ?>
      <?php
      query_posts('category_name='.$cat_slug.'&posts_per_page=3&order=DESC&paged='.$paged);
      ?>
    <?php while (have_posts()) : the_post(); ?>
      <div>
        <h4><?php the_title(); ?></h4>
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile; ?>
   <?php endif; ?>
   <?php wp_reset_query(); ?>
</div>
<!-- ./content -->

<?php
get_footer();
