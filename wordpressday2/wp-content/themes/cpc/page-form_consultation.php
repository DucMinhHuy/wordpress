<!doctype html>
<html lang="ja">

<head>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/meta.html"); ?>

	<title>買取相談フォーム｜CPCエナジー株式会社</title>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/css.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/other.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/gtm_head.html"); ?>

</head>

<body>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/gtm_body.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/header.html"); ?>

	<div class="l-contents -col--1">
		<div class="l-contents-detail">
			<main class="l-main l-form">

				<section class="l-hero p-consultation">
					<figure class="p-hero_title_eng"><img src="/assets/img/contact_kaitori_hero_title.svg" alt=""></figure>
					<p class="p-hero_title_jap">買取相談フォーム</p>
				</section>


				<form class="wpcf7-form" action="./thanks">
					<p class="l-contact_catch c-inner"><span class="contact-form-must">*</span>必須項目をご記入の上、確認ボタンを押して下さい。</p>

					<section class="l-form_round c-inner">
						<table>
							<tbody>
								<tr>
									<th class="p-first-child">会社名</th>
									<td class="p-first-child">
										<input type="text" name="" size="60" value="" placeholder="会社名を入力">
									</td>
								</tr>
								<tr>
									<th>姓名<span class="contact-form-must">*</span></th>
									<td>
										<input type="text" name="" size="60" value="" placeholder="氏名を入力">
									</td>
								</tr>
								<tr>
									<th>姓名（ふりがな）<span class="contact-form-must">*</span></th>
									<td><input type="text" name="" size="60" value="" placeholder="姓名（ふりがな）を入力"></td>
								</tr>
								<tr>
									<th>電話番号<span class="contact-form-must">*</span></th>
									<td><input type="text" name="" size="60" value="" placeholder="電話番号を入力"></td>
								</tr>
								<tr>
									<th>メールアドレス<span class="contact-form-must">*</span></th>
									<td>
										<input class="contact-form-input" type="text" name="" size="100" value="" placeholder="メールアドレスを入力">
										<!--<p class="p-re_enter_note">確認のため、再度メールアドレスの入力をお願いします。</p>
                                            <input class="contact-form-input confirm-hidden" type="text" name="" size="60" value="" placeholder="メールアドレスを入力">-->
									</td>
								</tr>
								<tr>
									<th>売却希望時期<span class="contact-form-must">*</span></th>
									<td><span class="input_short_box"><input type="text" name="" size="8" value="" placeholder="年"></span>年　<span class="input_short_box"><input type="text" name="" size="8" value="" placeholder="月"></span>月頃</td>
								</tr>
								<tr>
									<th>相談方法<span class="contact-form-must">*</span></th>
									<td>
										<span class="wpcf7-list-item">
											<label>
												<input type="radio" name="your-consultation" value="Web面談" kl_vkbd_parsed="true">
												<span class="wpcf7-list-item-label">Web面談</span>
											</label>
										</span>
										<span class="wpcf7-list-item">
											<label>
												<input type="radio" name="your-consultation" value="電話" kl_vkbd_parsed="true">
												<span class="wpcf7-list-item-label">電話</span>
											</label>
										</span>
										<span class="wpcf7-list-item">
											<label>
												<input type="radio" name="your-consultation" value="メール" kl_vkbd_parsed="true">
												<span class="wpcf7-list-item-label">メール</span>
											</label>
										</span>
									</td>
								</tr>
							</tbody>
						</table>

						<p class="p-lead_middle">売却を検討されている物件の概要（可能な範囲でお答えください)</p>

						<table>
							<tbody>
								<tr>
									<th class="p-first-child">所在地</th>
									<td class="p-first-child"><input type="text" name="" size="60" value="" placeholder="所在地を入力"></td>
								</tr>
								<tr>
									<th>パネル容量</th>
									<td><span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="パネル容量を入力"></span>kW　メーカー名<span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="メーカー名を入力"></span></td>
								</tr>
								</tr>
								<tr>
									<th>パワコン出力</th>
									<td><span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="パワコン出力を入力"></span>kW　メーカー名<span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="メーカー名を入力"></span></td>
								</tr>
								<tr>
									<th>売電(FIT)単価</th>
									<td><span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="売電(FIT)単価を入力"></span>円／kWh</td>
								</tr>
								<tr>
									<th>売電(FIT)期間</th>
									<td><span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="開始年月日"></span>　～　<span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="終了年月日"></span></td>
								</tr>
								<tr>
									<th>連系時期</th>
									<td><span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="年月日"></span></td>
								</tr>
								<tr>
									<th>土地</th>
									<td>
										<span class="wpcf7-list-item">
											<label>
												<input type="radio" name="your-land" value="購入" kl_vkbd_parsed="true">
												<span class="wpcf7-list-item-label">購入</span>
											</label>
										</span>
										<span class="wpcf7-list-item">
											<label>
												<input type="radio" name="your-land" value="賃貸" kl_vkbd_parsed="true" checked>
												<span class="wpcf7-list-item-label">賃貸</span>
											</label>
										</span>
									</td>
								</tr>
								<tr>
									<th>売却希望額</th>
									<td><span class="input_middle_box"><input type="text" name="" size="32" value="" placeholder="売却希望額を入力"></span>円</td>
								</tr>
								<tr>
									<th>その他</th>
									<td>
										<textarea name="" cols="100" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="ご要望等があればご記入ください"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
						<!--
                            <div class="l-privacy_protection">
                                <?php /*include($_SERVER["DOCUMENT_ROOT"] . "/_common/privacy_protection.php"); */ ?>
                            </div>
                            <div class="contact-form-policy contact-form-radio">
                                <span class="wpcf7-form-control-wrap agree">
                                    <span class="wpcf7-form-control wpcf7-acceptance optional">
                                        <span class="wpcf7-list-item">
                                            <label>
                                                <input type="checkbox" name="" value="1" aria-invalid="false" class="c-form-input-checkbox visually-hidden" id="agree">
                                                <span class="wpcf7-list-item-label">個人情報取り扱いの利用規約に同意する</span>
                                            </label>
                                        </span>
                                    </span>
                                </span>
                            </div>
                            -->
					</section>

					<section class="contact-form-submit c-inner">
						<div class="c-standerd_button_format contact-form-button -confirm">
							<input type="submit" value="入力内容の確認へ" class="wpcf7-form-control wpcf7-confirm wpcf7c-elm-step1 wpcf7c-btn-confirm ">
						</div>
						<div class="c-standerd_button_format contact-form-button c-arrow_reverce -back">
							<input type="button" value="入力内容を修正する" class="wpcf7-form-control wpcf7-back wpcf7c-elm-step2 wpcf7c-btn-back wpcf7c-force-hide ">
						</div>
						<div class="c-standerd_button_format contact-form-button -send">
							<input type="submit" value="送信する" class="wpcf7-form-control wpcf7-submit wpcf7c-elm-step2 wpcf7c-force-hide">
						</div>
						<span class="ajax-loader"></span>
					</section>
				</form>

				<section class="l-breadcrumb c-inner">
					<ul class="l-breadcrumb-list">
						<li class="l-breadcrumb-list__item"><a href="/_index.php"><span class="l-breadcrumb-list__text">TOP</span></a></li>
						<li class="l-breadcrumb-list__item"><span class="l-breadcrumb-list__text">買取相談フォーム</span></li>
					</ul>
				</section>

			</main><!-- l-main -->
		</div><!-- /l-contents-detail -->
	</div><!-- /l-contents -->



	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/footer.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/js.html"); ?>

</body>

</html>