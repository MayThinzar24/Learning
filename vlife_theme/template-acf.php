<?php

/*
 Template Name:ACF-template
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
<!-- =============== content ============== -->
<div class="content">
	<!-- ===============  Breadcrumb ============== -->
	<div class="breadcrumb clearfix">
		<?php the_breadcrumb(); ?>
	</div>
	<div class="inner">
		<div class="t-field">
			<h3>Text area</h3>
			<div>
				<?php the_field('tarea'); ?>
			</div>
		</div>
		<div class="t-field">
			<h3>Number</h3>
			<div>
				<?php the_field('qty'); ?> bottles
			</div>
		</div>
		<div class="t-field">
			<h3>Range</h3>
			<div>
				<p class="range-txt"><?php the_field('range'); ?></p>
				<?php

				$range = get_field('range');
				if ($range) : ?>
					<style type="text/css">
						.range-txt {
							font-size: <?php echo $range; ?>px;
						}
					</style>
				<?php endif; ?>
			</div>
		</div>
		<div class="t-field">
			<h3>Email</h3>
			<div>
				<?php the_field('email'); ?>
			</div>
		</div><!-- /.t-field-->
		<div class="t-field">
			<h3>URL</h3>
			<div>
				To dump dump <a href="<?php the_field('url'); ?>" target="_blank" class="">go there</a>.
			</div>
		</div><!-- /.t-field-->

		<div class="t-field">
			<h3>Image Array</h3>
			<div>
				<?php
				$image = get_field('img-array');
				if ($image) :

					// Image variables.
					$url = $image['url'];
					$title = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];

					// Thumbnail size attributes.
					$size = 'thumbnail';
					$thumb = $image['sizes'][$size];
					$width = $image['sizes'][$size . '-width'];
					$height = $image['sizes'][$size . '-height'];

					// Begin caption wrap.
					if ($caption) : ?>
						<div class="wp-caption">
						<?php endif; ?>

						<a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
							<img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
						</a>

						<?php
						// End caption wrap.
						if ($caption) : ?>
							<p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div><!-- /.t-field-->
		<div class="t-field">
			<h3>Image url</h3>
			<div>
				<?php if (get_field('img')) : ?>
					<img src="<?php the_field('img'); ?>" />
				<?php endif; ?>
			</div>
		</div><!-- /.t-field-->
		<div class="t-field">
			<h3>Image ID</h3>
			<div>
				<?php
				$image = get_field('img-id');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ($image) {
					echo wp_get_attachment_image($image, $size);
				}
				?>
			</div>
		</div><!-- /.t-field-->


		<div class="t-field">
			<h3>File Array</h3>
			<div>
				<?php
				$file = get_field('file-array');
				if ($file) :

					// Extract variables.
					$url = $file['url'];
					$title = $file['title'];
					$caption = $file['caption'];
					$icon = $file['icon'];

					// Display image thumbnail when possible.
					if ($file['type'] == 'image') {
						$icon =  $file['sizes']['thumbnail'];
					}

					// Begin caption wrap.
					if ($caption) : ?>
						<div class="wp-caption">
						<?php endif; ?>

						<a href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
							<img src="<?php //echo esc_attr($icon); 
												?>" />
							<span><?php echo esc_html($title); ?></span>
						</a>

						<?php
						// End caption wrap.
						if ($caption) : ?>
							<p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div><!-- /.t-field-->

		<div class="t-field">
			<h3>File URL</h3>
			<div>
				<?php if (get_field('file-url')) : ?>
					<a href="<?php the_field('file'); ?>">Download File</a>
				<?php endif; ?>
			</div>
		</div><!-- /.t-field-->

		<div class="t-field">
			<h3>File ID</h3>
			<div>
				<?php
				$file = get_field('file-id');
				if ($file) :
					$url = wp_get_attachment_url($file); ?>
					<a href="<?php echo esc_html($url); ?>">Download File</a>
				<?php endif; ?>
			</div>
		</div><!-- /.t-field-->

		<div class="t-field">
			<h3>oEmbed</h3>
			<div class="embed-container">
				<?php the_field('oembed'); ?>
			</div>
		</div><!-- /.t-field-->
		<div class="t-field">
			<h3>Select</h3>
			<p>My favorite color is <span class="color"><?php the_field('select'); ?></span> .</p>
			<?php
			$field = get_field_object('select');
			$value = $field['value'];
			$label = $field['choices'][$value];
			?>
			<p>Color: <span class="color-<?php echo esc_attr($value); ?>"><?php echo esc_html($label); ?></span></p>
		</div><!-- /.t-filed -->

		<div class="t-field">
			<h3>Checkbox</h3>
			<p>Drink <span class="color"><?php the_field('chk'); ?></span> .</p>
		</div><!-- /.t-filed -->
		
		<div class="t-field">
			<h3>Radio Button</h3>
			<p>Gender is  <span class="color"><?php the_field('radio'); ?></span> .</p>
		</div><!-- /.t-filed -->
	</div>
</div>
<?php
get_footer();
