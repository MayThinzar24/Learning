<?php

/**
 * The template for displaying Archive
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
<div class="content">
  <div class="inner">
    <ul class="news-list">
      <?php query_posts('posts_per_page=5&post_type=news&order=DESC&paged=' . $paged); ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li class="news-data">
            <div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
            <a href="<?php the_permalink(); ?>" class="news-link">
              <?php the_title(); ?></a>
          </li>
        <?php endwhile; ?>
      
      <?php endif; ?>
      <?php the_posts_pagination(); ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div>
</div>
<?php
get_footer();
