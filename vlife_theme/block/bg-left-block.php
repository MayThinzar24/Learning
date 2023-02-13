<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if (!empty($block['anchor'])) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if (!empty($block['className'])) {
	$className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$className .= ' align' . $block['align'];
}
// Load values and assign defaults.
$jp_ttl = get_field('jpttl') ?: 'テキストが入ります';
$eng_ttl = get_field('engttl') ?: 'Text';
$info_ttl = get_field('info-ttl')?: 'テキストが入ります';
$info_txt = get_field('info-txt') ?: 'テキストが入ります';

?>

<div class="bg-blk left-side">
	<div class="gradient-bg">
		<div class="part-ttl">
			<span class="eng-ttl"><?php echo $eng_ttl; ?></span>
			<span class="jp-ttl"><?php echo $jp_ttl; ?></span>
		</div>
	</div>
	<div class="white-bg">
		<div class="info-ttl">
			<span><?php echo $info_ttl ?></span>
		</div>
		<p class="info-txt">
			<?php echo $info_txt ?>
		</p>
	</div>
</div>