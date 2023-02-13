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
$border_ttl = get_field('border-ttl') ?: 'テキストが入ります';
$border_txt = get_field('border-txt') ?: 'テキストが入ります';
?>
<div class="border-blk">
	<h3 class="border-ttl"><?php echo $border_ttl ?></h3>
	<p class="border-txt"><?php echo $border_txt ?></p>
</div>