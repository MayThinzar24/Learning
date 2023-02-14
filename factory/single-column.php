<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package factory
 */

get_header();

?>
<!-- ===============  Breadcrumb ============== -->
<!-- <div class="breadcrumb clearfix">
  <?php //the_breadcrumb(); 
	?>
</div> -->
<div class="page-mv column-mv js-height">
	<div class="inner">
		<h1 class="page-ttl">
			<span class="first-ttl">EVENT & COLUMN</span>
			<span class="second-ttl">aperiam</span>
		</h1>
	</div>
</div><!-- /.page-mv -->
<div class="content single">
	<div class="inner">
		<?php if ($wp_query->have_posts()) : ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="col single-col">
					<?php if (has_post_thumbnail()) : ?>
						<div class="col-img">
							<?php the_post_thumbnail($post->ID, 'thumbnail'); ?>
						</div>
					<?php endif; ?>
					<div class="cat-name">
						<p class="cat-btn"><?php the_category(' '); ?></p>
						<?php
						$terms = get_the_terms($post->ID, 'taxo');
						if (!empty($terms)) {
							foreach ($terms as $term) {
						?>
								<p class="cat-btn">
									<a href="<?php echo get_term_link($term->slug, 'taxo'); ?>">
										<?php echo $term->slug; ?>
									</a>
								</p>
						<?php
							}
						} ?>
					</div>
					<h3 class="col-ttl">
						<?php the_title(); ?>
					</h3>
					<div class="col-desc">
						<?php the_content(); ?>
					</div>
				</div>

			<?php endwhile; ?>
			<div class="related-post">
				<h4 class="s-fs-40 s-txt-center">Related Post</h4>
				<?php

				//get the taxonomy terms of custom post type
				$customTaxonomyTerms = wp_get_object_terms($post->ID, 'taxo', array('fields' => 'ids'));

				//query arguments
				$args = array(
					'post_type' => 'column',
					'posts_per_page' => 3,
					'orderby' => 'rand',
					'tax_query' => array(
						array(
							'taxonomy' => 'taxo',
							'field' => 'id',
							'terms' => $customTaxonomyTerms
						)
					),
					'post__not_in' => array($post->ID),
				);

				//the query
				$relatedPosts = new WP_Query($args);

				//loop through query
				if ($relatedPosts->have_posts()) { ?>
					<ul class="col-list">
						<?php while ($relatedPosts->have_posts()) {
							$relatedPosts->the_post();
						?>
							<li class="col">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) : ?>
										<div class="col-img">
											<?php the_post_thumbnail($post->ID, 'thumbnail'); ?>
										</div>
									<?php endif; ?>									
								</a>
									<div class="cat-name">
										<p class="cat-btn"><?php the_category(' '); ?></p>
										<?php
										$terms = get_the_terms($post->ID, 'taxo');
										if (!empty($terms)) {
											foreach ($terms as $term) {
										?>
												<p class="cat-btn">
													<a href="<?php echo get_term_link($term->slug, 'taxo'); ?>">
														<?php echo $term->slug; ?>
													</a>
												</p>
										<?php
											}
										} ?>
									</div>
									<h3 class="col-ttl s-txt-center">
										<?php the_title(); ?>
									</h3>
									<div class="col-desc">
										<?php the_content(); ?>
									</div>
							</li>
					<?php
						}
						echo '</ul>';
						echo '</div>';
					} else {
						echo '<p class="s-fs-20 s-mt-30 s-mb-50">Related Has No Post Found</p>';
					}

					//restore original post data
					wp_reset_postdata();

					?>
			</div>
			<div class="single_navigation">
				<?php if (get_adjacent_post(false, '', true)) { ?>
					<span class="button"><?php previous_post_link('%link', '←    Previous') ?></span>
				<?php } ?>
				<span class="button">
					<a href="<?php echo site_url(); ?>/column/">Column List</a>
				</span>
				<?php if (get_adjacent_post(false, '', false)) { ?>
					<span class="button"><?php next_post_link('%link', 'Next   →') ?></span>
				<?php } ?>
			</div><!--/single navigation-->
		<?php endif; ?>
		<?php $wp_query = null;
		wp_reset_query(); ?>
	</div>
</div>
</div>
<!-- ./ single-page -->

<?php
get_footer();
