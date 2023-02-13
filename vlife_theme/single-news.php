<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vlife
 */

get_header();

?>
<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix  js-height">
	<?php the_breadcrumb(); ?>
</div>

<div class="content">
	<div class="detail">
		<h2 class="news-ttl"><?php the_title(); ?></h2>
		<?php
		while (have_posts()) : the_post();
			the_content('');
		endwhile;
		?>
	</div>
</div>
<!-- ./ single-page -->


<?php
get_footer();
