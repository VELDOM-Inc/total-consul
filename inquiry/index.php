<?php
require_once("./src/bootstrap.php");
?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
	<head>
		<!--============================================== html_head_above -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_head_above.html'; ?>
		<!--============================================== /html_head_above -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>お問い合わせ｜機械設備の総合商社　トータルコンサル株式会社</title>
		<meta name="description" content="お問い合わせのページです。トータルコンサルは、クライアント様の視点に立ち、戦略的な設備機械の導入を提案しています。既に導入されているシステムの生産性向上や品質向上についての、改善案を含めたトータルプロデュースもお任せ下さい。">
		<meta name="keywords" content="">
		<meta property="og:title" content="お問い合わせ｜機械設備の総合商社　トータルコンサル株式会社">
		<meta property="og:description" content="お問い合わせのページです。トータルコンサルは、クライアント様の視点に立ち、戦略的な設備機械の導入を提案しています。既に導入されているシステムの生産性向上や品質向上についての、改善案を含めたトータルプロデュースもお任せ下さい。">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://www.total-consul.co.jp/inquiry/">
		<meta property="og:image" content="https://www.total-consul.co.jp/common/img/common/og_image.png">
		<meta property="og:image:alt" content="機械設備の総合商社　トータルコンサル株式会社">
		<!--============================================== html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_head.html'; ?>
		<!--============================================== /html_head -->
	</head>

	<body>
		<!--============================================== body_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/body_head.html'; ?>
		<!--============================================== /body_head -->

		<div class="wrapper">
			<!--============================================== header -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/header.html'; ?>
			<!--============================================== /header -->
			
			<div class="h1 _base_ _narrow_">
				<h1 class="h1__inner">
					<span class="__en txt_poppins">Contact</span>
					<span class="__txt">お問い合わせ</span>
				</h1>
			</div>
			
			<!-- .breadcrumb -->
			<nav class="breadcrumb _narrow_">
				<ul class="breadcrumb__inner">
					<li class="breadcrumb__item"><a href="/" class="breadcrumb__link">TOP</a></li>
					<li class="breadcrumb__item">お問い合わせ</li>
				</ul>
			</nav>
			<!-- /.breadcrumb -->
			
			<!-- .contents -->
			<div class="contents">
			
				<div class="contents__inner _narrow_">
					
					<div class="fade-up show mb60 mb30_sp">
						<p class="mb20 txt_center txt_left_sp">このたびはトータルコンサル株式会社のオフィシャルサイトへお越しいただき、誠にありがとうございます。<br>
						当社の提供する各種サービス、運営サイトに関するお問い合わせ、業務提携に関するお問い合わせなどは、<br class="pc_view">お電話もしくは以下のメールフォームよりお願いいたします。</p>
						<p class="txt_center txt_left_sp"><span class="txt_bold">営業時間：<br class="sp_view">月～金（土・日・祝は除く）9：30～17：00</span><br>
							営業時間外のお問い合わせはメールフォームよりお願いいたします。</p>
					</div>
					
					<div class="column column2 sp-column1 contact-customer fade-up show">
						<section class="box _outline_">
							<h2 class="contact-customer__ttl">サービスの利用を検討中のお客様</h2>
							<p>各種設備、機材、機械の導入、及び、それらに伴う事前相談など、当社が提供するサービスの利用をお考えのお客様は、下記のメールフォームからお問い合わせ下さい。折り返し、当社担当より、ご連絡を差し上げます。</p>
						</section>
						<section class="box _outline_ mb0_sp">
							<h2 class="contact-customer__ttl">当社サービスを利用中のお客様</h2>
							<p class="mb10">当社のサービスを利用中のお客様は、直接担当宛にご連絡いただくか、下記の電話番号までお問い合わせ下さい。</p>
							<p class="indent"><span class="txt_bold indent__item">電話番号：</span>096-352-2800</p>
							<p class="indent mb10"><span class="txt_bold indent__item">営業時間：</span>9：30～17：00 <br class="sp_view">月～金（土・日・祝は除く）</p>
							<p>営業時間外のお問い合わせは、メールフォームよりお願いいたします。</p>
						</section>
					</div>
					
					<div class="contact-tel fade-up show">
						<section class="contact-title">
							<div class="contact-title__inner _tel_">
								<h2 class="__jp">お電話でのお問い合わせ</h2>
								<p class="__en">Tel</p>
							</div>
							<div class="contact-title__txt">
								<p class="__num"><a href="tel:096-352-2800" class="__link">096-352-2800</a></p>
								<p class="__desc">お電話受付時間 9：30～17：00</p>
							</div>
						</section>
					</div>
					
					<!-- .contact-form -->
					<div id="form" class="contact-form fade-up show">
						<div class="contact-form__inner">
							
							<div class="contact-title mb65 mb20_sp">
								<div class="contact-title__inner _mail_">
									<h2 class="__jp">フォームでのお問い合わせ</h2>
									<p class="__en">Mail</p>
								</div>
							</div>

							<?php if ($form->is_error()) : ?>
								<div class="box _error_ mb60 mb30_sp">
									<p class="text20 text18_sp mb10"><span class="__ico icon-error" aria-hidden="true"></span>入力内容にエラーがあります。</p>
									<?php echo $form->errors() ?>
								</div>
							<?php endif; ?>


							<form method="post" enctype="multipart/form-data" autocomplete="off" action="#form" class="h-adr">
								<input type="hidden" class="p-country-name" value="Japan">

								<table class="table _no-border_ _sp-col1_ mb90 mb45_sp contact-form__table">
									<tbody class="table__body">
										<tr>
											<th class="_va-t_ wp30 wp100_sp">会社名 <span class="textOrange">*</span></th>
											<td class="<?php if ($form->is_error('company')) : ?> error<?php endif; ?> wp70 wp100_sp">
												<input type="text" name="company" class="form-text" value="<?php echo e($form->get('company')); ?>">
												<?php echo $form->error('company', '<div class="alert">', '</div>'); ?>
											</td>
										</tr>
										<tr>
											<th class="_va-t_">メールアドレス <span class="textOrange">*</span></th>
											<td class="<?php if ($form->is_error('email')) : ?>error<?php endif; ?>">
												<input type="text" name="email" class="form-text" value="<?php echo e($form->get('email')); ?>">
												<?php echo $form->error('email', '<div class="alert">', '</div>'); ?>
											</td>
										</tr>
										<tr>
											<th class="_va-t_">電話番号 <span class="textOrange">*</span></th>
											<td class="<?php if ($form->is_error('tel')) : ?>error<?php endif; ?>">
												<input type="text" name="tel" class="form-text" value="<?php echo e($form->get('tel')); ?>">
												<?php echo $form->error('tel', '<div class="alert">', '</div>'); ?>
											</td>
										</tr>
										<tr>
											<th class="_va-t_">お問い合わせ種別 <span class="textOrange">*</span></th>
											<td class="<?php if ($form->is_error('class')) : ?>error<?php endif; ?>">
												<?php foreach($form->get_options('class') as $class) : ?>
												<label class="form-check">
													<input type="checkbox" name="class[]" value="<?php echo $class ?>" class="__elem" <?php echo $form->checked('class', $class) ?>>
													<span class="__txt"><?php echo $class ?></span>
												</label>
												<?php endforeach; ?>
												<?php echo $form->error('class', '<div class="alert">', '</div>'); ?>
											</td>
										</tr>
										<tr>
											<th class="_va-t_">お問い合わせ内容</th>
											<td class="<?php if ($form->is_error('comment')) : ?>error<?php endif; ?>">
												<textarea name="comment" cols="50" rows="4" class="form-textarea"><?php echo e($form->get('comment')); ?></textarea>
												<?php echo $form->error('comment', '<div class="alert">', '</div>'); ?>
											</td>
										</tr>
										<tr>
											<th class="_va-t_">必須項目の記載確認 <span class="textOrange">*</span></th>
											<td class="<?php if ($form->is_error('must')) : ?>error<?php endif; ?>">
												<?php foreach($form->get_options('must') as $must) : ?>
												<label class="form-check">
													<input type="checkbox" name="must" value="<?php echo $must ?>" class="__elem" <?php echo $form->checked('must', $must) ?>>
													<span class="__txt"><?php echo $must ?></span>
												</label>
												<?php endforeach; ?>
												<?php echo $form->error('must', '<div class="alert">', '</div>'); ?>
											</td>
										</tr>
									</tbody>
								</table>
								
								<div class="box _outline_ txt_center txt_left_sp mb90 mb45_sp">
									<p class="text15 mb20">当サイトは、ご利用者の個人情報について、ご利用者の承諾がない限り第三者に開示、提供を一切行いません。<br>
										個人情報の取扱いについて、同意の上送信します（よろしければチェックを入れてください。）</p>
									
									<?php foreach($form->get_options('agreement') as $agreement) : ?>
									<label class="form-check">
										<input type="checkbox" name="agreement" id="agreement" class="__elem" value="<?php echo $agreement ?>"<?php echo $form->checked('agreement', $agreement) ?>>
										<span class="__txt txt_bold"><?php echo $agreement ?></span>
									</label>			
									<?php endforeach; ?>
									<?php if($form->error('agreement')) : ?><div class="alert">※個人情報取り扱いについてご同意いただけない場合は、ご利用いただけません。</div><?php endif; ?>
								</div>
								
								<div class="al-fc">
									<button class="btn _black_">
										<span class="__txt">確認画面へ</span>
									</button>
								</div>
							</form>

						</div>
					</div>
					<!-- /.contact-form -->
			
				</div>
				
			</div>
			<!-- /.contents -->
			
			<!--============================================== footer -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/footer.html'; ?>
			<!--============================================== /footer -->
		</div>

		<!--============================================== html_foot -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_foot.html'; ?>
		<!--============================================== /html_foot -->
	</body>
</html>