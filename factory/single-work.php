<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package factory
 */

get_header(); ?>
<!-- ===============  Breadcrumb ============== -->
<!-- <div class="breadcrumb clearfix">
  <?php
	//the_breadcrumb();
	?>
</div> -->

<div class="page-mv work-mv js-height">
	<div class="inner">
		<h1 class="page-ttl">
			<span class="first-ttl">WORKS</span>
			<span class="second-ttl">caritatem</span>
		</h1>
	</div>
</div><!-- /.page-mv -->
<div class="content single">
	<div class="inner">
		<?php if ($wp_query->have_posts()) : ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="work">
					<?php if (has_post_thumbnail()) : ?>
						<div class="work-img">
							<?php the_post_thumbnail($post->ID, 'thumbnail'); ?>
						</div>
					<?php endif; ?>
					<div class="work-txt">
						<h3 class="work-ttl"><?php the_title(); ?></h3>
						<div class="work-desc"><?php the_field('work-desc'); ?></div>
						<ul class="badge-list">
							<?php if (have_rows('badge-list')) :
								while (have_rows('badge-list')) :

									the_row();
									$type = get_sub_field('badge-type');
									$txt = get_sub_field('badge-txt');
							?>
									<li>
										<span class="badge-type"><?php echo $type; ?> </span>
										<span class="badge-txt"><?php echo $txt; ?></span>
									</li>
								<?php
								endwhile; ?>
							<?php
							endif; ?>
						</ul>
					</div>
					<ul class="task">
						<?php
						$acf_repeater_field = get_field('task');
						if (!empty($acf_repeater_field)) :
							while (have_rows('task')) :

								the_row();
								$ttl = get_sub_field('task-ttl');
								$desc = get_sub_field('task-desc');
						?>
								<li>
									<span class="task-ttl"><?php echo $ttl; ?> </span>
									<span class="task-desc"><?php echo $desc; ?></span>
								</li>
							<?php
							endwhile; ?>
						<?php
						endif;
						?>
					</ul>
					<ul class="tag-list">
						<?php
						$tags = get_the_tags();
						if ($tags) :
							foreach ($tags as $tag) : ?>
								<li>
									<a href="<?php echo esc_url(
															get_tag_link($tag->term_id)
														); ?>" title="<?php echo esc_attr($tag->name); ?>">
										<?php echo esc_html($tag->name); ?>
									</a>
								</li>
						<?php endforeach;
						endif;	?>
					</ul>
				</div>

			<?php endwhile; ?>
			<div class="single_navigation">
				<?php if (get_adjacent_post(false, '', true)) { ?>
					<span class="button"><?php previous_post_link('%link','←    Previous') ?></span>
				<?php } ?>
				<span class="button">
				<a href="<?php echo site_url(); ?>/work/">Work List</a>
				</span>				
				<?php if (get_adjacent_post(false, '', false)) { ?>
					<span class="button"><?php next_post_link('%link','Next   →') ?></span>
				<?php } ?>
			</div><!--/single navigation-->
		<?php endif; ?>
		<?php $wp_query = null;
		wp_reset_query(); ?>
	</div>
</div>
<!-- ./ single-page -->


<?php get_footer();
