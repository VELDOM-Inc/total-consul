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
		<title>送信内容確認画面：お問い合わせ｜機械設備の総合商社　トータルコンサル株式会社</title>
		<meta name="description" content="お問い合わせのページです。トータルコンサルは、クライアント様の視点に立ち、戦略的な設備機械の導入を提案しています。既に導入されているシステムの生産性向上や品質向上についての、改善案を含めたトータルプロデュースもお任せ下さい。">
		<meta name="keywords" content="">
		<meta property="og:title" content="送信内容確認画面：お問い合わせ｜機械設備の総合商社　トータルコンサル株式会社">
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
					<li class="breadcrumb__item"><a href="/inquiry/" class="breadcrumb__link">お問い合わせ</a></li>
					<li class="breadcrumb__item">送信内容確認</li>
				</ul>
			</nav>
			<!-- /.breadcrumb -->
			
			<!-- .contents -->
			<div class="contents">
			
				<div class="contents__inner _narrow_">

					<!-- .contact-form -->
					<div id="form" class="fade-up show">

						<p class="mb60 mb30_sp">ご入力内容を確認いただき、よろしければ「入力内容を送信する」ボタンを、<br>
						修正する場合は「修正する」ボタンをクリックしてください。</p>

						<form method="post">
							<table class="table _sp-col1_ mb90 mb45_sp contact-form__table">
								<tbody class="table__body">
									<tr>
										<th class="wp30 wp100_sp">会社名</th>
										<td><?php echo e($form->get('company')); ?></td>
									</tr>
									<tr>
										<th class="">メールアドレス</th>
										<td><?php echo e($form->get('email')); ?></td>
									</tr>
									<tr>
										<th class="">電話番号</th>
										<td><?php echo e($form->get('tel')); ?></td>
									</tr>
									<tr>
										<th class="">お問い合わせ種別</th>
										<td><?php echo e($form->get('class', ', ')); ?></td>
									</tr>
									<tr>
										<th class="">お問い合わせ内容</th>
										<td><?php echo nl2br(e($form->get('comment'))); ?></td>
									</tr>
									<tr>
										<th class="">必須項目の記載確認</th>
										<td><?php echo e($form->get('must')); ?></td>
									</tr>
								</tbody>
							</table>

							<div class="al-fc">
								<button type="button" class="btn _outline_ _order2_" onclick="window.location='./#form';">
									<span class="__txt">修正する</span>
								</button>
								<button type="submit" class="btn _black_ _order1_ mb20_sp">
									<span class="__txt">入力内容を送信する</span>
								</button>
							</div>
						</form>
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