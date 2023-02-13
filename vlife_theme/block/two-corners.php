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
$corner_ttl = get_field('corner-ttl') ?: 'テキストが入ります';
$corner_txt = get_field('corner-txt') ?: 'テキストが入ります';
?>
<div class="corner-blk">
	<h3 class="corner-ttl"><?php echo $corner_ttl ?></h3>
	<p class="corner-txt"><?php echo $corner_txt ?></p>
</div><!-- /.corner-blk -->