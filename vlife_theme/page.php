<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife
 */

get_header();
?>

<section class="sec-pagemv js-height">
	<h2 class="page-ttl">
		<span class="eng-ttl eff-txt"><?php the_field('eng_ttl'); ?></span>
		<span class="jp-ttl"><?php the_field('jp_ttl'); ?></span>
	</h2>
	<?php if (has_post_thumbnail()) : ?>
		<div class="page-mv">
			<?php the_post_thumbnail($post->ID, 'thumbnail'); ?>
		</div>
	<?php endif; ?>
</section><!-- /.sec-pagemv -->

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>

<!-- =============== content ============== -->
<div class="content pg-gluten">
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</div><!-- ./ content-area -->

<?php
get_footer();
