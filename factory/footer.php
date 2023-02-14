<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package factory
 */

?>

<!-- =============== footer ============== -->
<footer class="footer">
	<div class="ft-logo">
		<a href="<?php echo get_bloginfo('url'); ?>" class="logo">
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/shared/img_logo.png" alt="Product Factory" width="122" height="52" loading="lazy">
		</a>
	</div><!-- /.ft-logo-->
	<div class="ft-base">
		<div class="inner clearfix">
			<ul class="menu-list clearfix s-pc">
				<li>
					<a href="#" class="menu-link">home</a>
				</li>
				<li>
					<a href="#" class="menu-link">Service</a>
				</li>
				<li>
					<a href="#" class="menu-link">Case Study</a>
				</li>
				<li>
					<a href="<?php echo site_url(); ?>/column" class="menu-link">Column</a>
				</li>
				<li>
					<a href="#" class="menu-link">Operation Company</a>
				</li>
				<li>
					<a href="<?php echo site_url(); ?>/contact" class="menu-link">Contact</a>
				</li>
				<li>
					<a href="#" class="menu-link">Privacy Policy</a>
				</li>
				<li>
					<a href="#" class="menu-link">terms of service</a>
				</li>
			</ul>
			<p class="copy-right">&copy;2022 Roadmap inc.</p>
		</div>
	</div><!-- /.ft-base -->
</footer>
<!-- ./footer -->
<?php wp_footer(); ?>
<!-- js -->
</script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/jquery.js"></script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/share.js"></script>

</body>

</html>