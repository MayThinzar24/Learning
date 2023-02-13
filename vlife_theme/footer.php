<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vlife
 */

?>

<!-- =============== footer ============== -->
<footer class="footer">
	<?php if ((is_home())) { ?>
		<div class="sns-blk" data-aos="fade-up">
			<div class="inner">
				<h2 class="sns-ttl">公式SNSアカウント</h2>
				<p class="txt">VALUABLE LIFEからの最新情報を<br class="s-sp">発信しております。</p>
				<ul class="sns-list">
					<li class="sns-ico">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/ico_twitter.png" alt="Twitter" width="37" height="30" loading="lazy">
						</a>
					</li>
					<li class="sns-ico">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/ico_facebook.png" alt="Facebook" width="34" height="33" loading="lazy">
						</a>
					</li>
					<li class="sns-ico">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/ico_line.png" alt="Line" width="36" height="36" loading="lazy">
						</a>
					</li>
					<li class="sns-ico">
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/ico_instagram.png" alt="Instagram" width="36" height="36" loading="lazy">
						</a>
					</li>
				</ul>
			</div>
		</div><!-- /.sns-blk -->
	<?php } ?>
	<div class="copyright-blk" data-aos="fade-up">
		<div class="inner">
			<a href="#" class="logo">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/shared/img_logo.png" alt="VALUABLE LIFE みんな違ってみんないい" width="320" height="60" loading="lazy">
			</a>
			<ul class="menu-list">
				<li><a href="#" class="menu-link underline-txt">私たちについて</a></li>
				<li><a href="#" class="menu-link underline-txt">事業内容</a></li>
				<li><a href="#" class="menu-link underline-txt">トップメッセージ</a></li>
				<li><a href="#" class="menu-link underline-txt">会社概要</a></li>
				<li><a href="#" class="menu-link underline-txt">採用情報</a></li>
				<li><a href="#" class="menu-link underline-txt">お知らせ</a></li>
			</ul>
			<div class="btn-list">
				<a href="#" class="cmn-btn purple-btn">
					<span class="btn-txt underline-txt">採用ご担当者様はこちらから</span>
					<span class="btn-circle"></span>
				</a>
				<a href="#" class="cmn-btn blue-btn">
					<span class="btn-txt underline-txt">求職者様お問い合わせ</span>
					<span class="btn-circle"></span>
				</a>
			</div>
			<p class="copy-txt">Copyright &copy; VALUABLE LIFE Co., Ltd.<br class="s-sp"> All Rights Reserved.</p>
		</div>
	</div><!-- /.copyright-blk-->
</footer>
<!-- ./footer -->
<?php wp_footer(); ?>
<!-- js -->
<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/jquery.js"></script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/aos.js"></script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/share.js"></script>
<script>
	AOS.init({
		easing: 'ease',
		duration: 1000,
		once: true
	});
</script>
</body>

</html>