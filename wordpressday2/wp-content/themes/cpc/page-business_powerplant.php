<!doctype html>
<html lang="ja">

<head>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/meta.html"); ?>

	<title>発電所一覧｜CPCエナジー株式会社</title>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/css.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/other.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/gtm_head.html"); ?>

</head>

<body>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/gtm_body.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/header.html"); ?>

	<div class="l-contents -col--1">
		<div class="l-contents-detail">
			<main class="l-main l-business_powerplant">

				<section class="l-hero">
					<figure class="p-hero_title_eng"><img src="/assets/img/powerplant_hero_title.svg" alt=""></figure>
					<p class="p-hero_title_jap">発電所一覧</p>
				</section>

				<div class="l-top p-business_margin_tuning">
					<section class="l-plant">
						<div class="c-inner">
							<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/powerplant_map.html"); ?>
						</div>
					</section>
				</div>

				<section class="l-powerplant_list c-inner">
					<article id="01">
						<figure class="p-fig_number"><img src="/assets/img/powerplant_no1.svg" alt=""></figure>
						<h2 class="p-h2">厚狭太陽光発電所</h2>
						<figure class="p-fig"><img src="/assets/img/powerplant_plant_img01.jpg" alt=""></figure>
						<dl class="l-plant_spec">
							<dt class="p-first_child">所在地</dt>
							<dd class="p-first_child">山口県山陽小野田市大字厚狭</dd>
							<dt>運転開始日</dt>
							<dd>2013年10月3日</dd>
							<dt>設置容量</dt>
							<dd>0.75MW</dd>
							<dt>実績発電量</dt>
							<dd>982MWh／年</dd>
						</dl>
					</article>
					<article id="02">
						<figure class="p-fig_number"><img src="/assets/img/powerplant_no2.svg" alt=""></figure>
						<h2 class="p-h2">敬川太陽光発電所</h2>
						<figure class="p-fig"><img src="/assets/img/powerplant_plant_img02.jpg" alt=""></figure>
						<dl class="l-plant_spec">
							<dt class="p-first_child">所在地</dt>
							<dd class="p-first_child">島根県江津市敬川町</dd>
							<dt>運転開始日</dt>
							<dd>2014年4月1日</dd>
							<dt>設置容量</dt>
							<dd>1.35MW</dd>
							<dt>実績発電量</dt>
							<dd>1,691MWh／年</dd>
						</dl>
					</article>
					<article id="03">
						<figure class="p-fig_number"><img src="/assets/img/powerplant_no3.svg" alt=""></figure>
						<h2 class="p-h2">吉名太陽光発電所</h2>
						<figure class="p-fig"><img src="/assets/img/powerplant_plant_img03.jpg" alt=""></figure>
						<dl class="l-plant_spec">
							<dt class="p-first_child">所在地</dt>
							<dd class="p-first_child">広島県竹原市吉名町</dd>
							<dt>運転開始日</dt>
							<dd>2014年8月1日</dd>
							<dt>設置容量</dt>
							<dd>0.94MW</dd>
							<dt>実績発電量</dt>
							<dd>1,174MWh／年</dd>
						</dl>
					</article>
					<!--
					<article id="04">
						<figure class="p-fig_number"><img src="/assets/img/powerplant_no4.svg" alt=""></figure>
						<h2 class="p-h2">江津太陽光発電所</h2>
						<figure class="p-fig"><img src="/assets/img/powerplant_plant_img04.jpg" alt=""></figure>
						<dl class="l-plant_spec">
							<dt class="p-first_child">所在地</dt>
							<dd class="p-first_child">島根県江津市敬川町</dd>
							<dt>運転開始日</dt>
							<dd>2016年3月8日</dd>
							<dt>設置容量</dt>
							<dd>1.41MW</dd>
							<dt>実績発電量</dt>
							<dd>1,685MWh／年</dd>
						</dl>
					</article>
				-->
				</section>

				<section class="l-breadcrumb c-inner">
					<ul class="l-breadcrumb-list">
						<li class="l-breadcrumb-list__item"><a href="/_index.php"><span class="l-breadcrumb-list__text">TOP</span></a></li>
						<li class="l-breadcrumb-list__item"><a href="/business/"><span class="l-breadcrumb-list__text">事業・サービス</span></a></li>
						<li class="l-breadcrumb-list__item"><span class="l-breadcrumb-list__text">発電所一覧</span></li>
					</ul>
				</section>

			</main><!-- l-main -->
		</div><!-- /l-contents-detail -->
	</div><!-- /l-contents -->



	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/footer.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/js.html"); ?>

</body>

</html>