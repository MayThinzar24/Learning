<?php

/*
 Template Name:About-template
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
<div class="content about-pg">
	<!-- ===============  Breadcrumb ============== -->
	<div class="breadcrumb clearfix">
		<?php the_breadcrumb(); ?>
	</div>
	<section class="block-columns-part">\
		<div class="line-ttl">
			大見出しが入ります。<br> ダミー大見出しが入ります。大見出しが入ります。
		</div>
		<div class="block-columns clearfix">
			<div class="block-column-txt">
				<p>
					テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
				</p>
				<p>
					テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
				</p>
			</div>
			<div class="block-column-img">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/about/img_holding.jpg" width="500" height="381" alt="大見出しが入ります">
			</div>
		</div>
	</section><!-- /.sec-desc -->
	<div class="bg-blk right-side">
		<div class="gradient-bg">
			<div class="part-ttl">
				<span class="eng-ttl">mission</span>
				<span class="jp-ttl">ミッション</span>
			</div>
		</div>
		<div class="white-bg">
			<div class="info-ttl">
				<span>医療福祉業界において、<br>
					価値ある人材に価値ある人生を</span>
			</div>
			<p class="info-txt">
				テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
			</p>
		</div>
	</div>
	<div class="bg-blk left-side">
		<div class="gradient-bg">
			<div class="part-ttl">
				<span class="eng-ttl">vision</span>
				<span class="jp-ttl">ビジョン</span>
			</div>
		</div>
		<div class="white-bg">
			<div class="info-ttl">
				<span>医療福祉業界において、<br>
					価値ある人材に価値ある人生を</span>
			</div>
			<p class="info-txt">
				テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
			</p>
		</div>
	</div>

	<div class="bg-blk right-side">
		<div class="gradient-bg">
			<div class="part-ttl">
				<span class="eng-ttl">value</span>
				<span class="jp-ttl">価 値</span>
			</div>
		</div>
		<div class="white-bg">
			<div class="info-ttl">
				<span>医療福祉業界において、<br>
					価値ある人材に価値ある人生を</span>
			</div>
			<p class="info-txt">
				テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
			</p>
		</div>
	</div>
</div>
<?php
get_footer();
