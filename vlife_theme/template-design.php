<?php

/*
 Template Name:Design-template
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
	<form class="recruit-form">
		<p class="form-info">
			採用ご担当者様用のお問い合わせフォームです。<br>
			以下の項目をご入力の上、お問い合わせください。<br>
			※求職者様用のお問い合わせフォームは <a href="#">こちら</a>
		</p>
		<div class="form-field">
			<label class="form-label" for="hira-name">氏名</label>
			<input type="text" class="input-box free-input" placeholder="（例）山田太郎">
		</div>
		<div class="form-field">
			<label class="form-label" for="furi-name">氏名（フリガナ）</label>
			<input type="text" class="input-box free-input" placeholder="（例）ヤマダタロウ">
		</div>
		<div class="form-field">
			<label class="form-label" for="email">メールアドレス<span class="require">必須</span></label>
			<input type="email" class="input-box free-input" placeholder="（例）sample@exampl.com">
		</div>
		<div class="form-field">
			<label class="form-label" for="tel">電話番号</label>
			<input type="text" class="input-box free-input" placeholder="（例）09012345678">
		</div>
		<div class="form-field">
			<label class="form-label" for="inquiry">お問い合わせ内容</label>
			<textarea class="input-box free-input" rows="10" placeholder="ご自由にご入力ください。"></textarea>
		</div>
		<div class="form-field">
			<label class="form-label">商品画像</label>
			<div class="input-wrap">
				<label for="file" class="file-btn"><input type="file" name="" id="file" hidden />こちらからアップロード</label>
				<span class="file-name" id="file-name">No file chosen</span>
			</div>
		</div>
		<div class="form-field">
			<label class="form-label">ジュエリーの種類<span class="multiple">※複数選択可</span></label>
			<div class="chk-wrap">
				<label for="type1" class="chk-box">
					<input type="checkbox" name="" id="type1" hidden>
					<span class="chk-name"> リング</span>
				</label>
				<label for="type2" class="chk-box">
					<input type="checkbox" name="" id="type2" hidden>
					<span class="chk-name"> イヤリング／ピアス</span>
				</label>
				<label for="type3" class="chk-box">
					<input type="checkbox" name="" id="type3" hidden>
					<span class="chk-name"> ネックレス／ペンダント／ペンダントトップ</span>
				</label>
				<label for="type4" class="chk-box">
					<input type="checkbox" name="" id="type4" hidden>
					<span class="chk-name"> ブローチ</span>
				</label>
				<label for="type5" class="chk-box">
					<input type="checkbox" name="" id="type5" hidden>
					<span class="chk-name"> ブレスレット</span>
				</label>
				<label for="type6" class="chk-box">
					<input type="checkbox" name="" id="type6" hidden>
					<span class="chk-name"> ルース</span>
				</label>
				<label for="type7" class="chk-box">
					<input type="checkbox" name="" id="type7" hidden>
					<span class="chk-name"> 腕時計</span>
				</label>
				<label for="type8" class="chk-box">
					<input type="checkbox" name="" id="type8" hidden>
					<span class="chk-name"> その他</span>
				</label>
			</div>
		</div>

		<div class="form-field">
			<label class="form-label">宝石の種類<span class="multiple">※商品刻印などご確認ください</span></label>
			<div class="input-wrap">
				<div class="box-blk">
					1 <input type="text" class="input-box" placeholder="例：ダイヤモンド">
					<input type="number" class="input-box" placeholder="Ct数">Ct
					<label for="unk1" class="chk-box">
						<input type="checkbox" name="" id="unk1" hidden>
						<span class="chk-name"> その他</span>
					</label>
				</div>
				<div class="box-blk">
					2 <input type="text" class="input-box" placeholder="例：ダイヤモンド">
					<input type="number" class="input-box" placeholder="Ct数">Ct
					<label for="unk2" class="chk-box">
						<input type="checkbox" name="" id="unk2" hidden>
						<span class="chk-name"> その他</span>
					</label>
				</div>
				<div class="box-blk">
					3 <input type="text" class="input-box" placeholder="例：ダイヤモンド">
					<input type="number" class="input-box" placeholder="Ct数">Ct
					<label for="unk3" class="chk-box">
						<input type="checkbox" name="" id="unk3" hidden>
						<span class="chk-name"> その他</span>
					</label>
				</div>
			</div>
		</div>

		<div class="agree-chk">
			<input type="checkbox" name="" id="">
			<label for="chk"><a href="#">プライバシーポリシーに</a>同意する</label>
		</div>
		<button type="submit" class="form-btn">入力内容を確認する</button>
	</form>
</div>
<?php
get_footer();
