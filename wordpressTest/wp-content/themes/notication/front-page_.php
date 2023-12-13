<!doctype html>
<html lang="ja">

<head>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/meta.html"); ?>

	<title>西日本新聞社</title>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/css.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/other.html"); ?>


</head>

<body class="page-top">


	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/header.html"); ?>

	<div class="l-contents -col--1 --top">

		<div class="l-contents-detail">

			<main class="l-main --is-top">


				<div class="p-top">
					<div id="js-loading" class="c-loading">
						<p class="c-loading__text">
							<span class="c-liading__text__item">地</span>
							<span class="c-liading__text__item">域</span>
							<span class="c-liading__text__item">に</span>
							<span class="c-liading__text__item">火</span>
							<span class="c-liading__text__item">を</span>
							<span class="c-liading__text__item">灯</span>
							<span class="c-liading__text__item">す</span>
						</p>
					</div>

					<div class="p-top-hero">
						<div class="p-top-hero__mv">
							<video loop="loop" autoplay="autoplay" muted="muted" playsinline="true" controlslist="nodownload nofullscreen noremoteplayback" id="js-mainVideo" class="video-autoplay lazyloading" src="http://regional-revitalization.medialab.co.jp/assets/video/video_PC@ver1.1.mp4"></video>
							<button id="js-videoPauseButton" class="p-top-hero__mv__pauseButton"><span class="myfont myfont-movie_stop"></span></button>
						</div>
						<h1 class="p-top-hero__title">
							私たちの九州、<br>西日本新聞社は<br>地域づくりの先頭に<br class="u-show--sp">立ちます。
						</h1>

						<div class="p-top-hero__scroll">
							<div class="p-top-hero__scroll__wrap">
								<svg viewBox="0 0 100 100" class="p-top-hero__scroll__circle">
									<path d="M 0,50 a 50,50 0 1,1 0,1 z" id="circle"></path>
									<text>
										<textPath xlink:href="#circle">SCROLL DOWN SCROLL DOWN SCROLL DOWN SCROLL DOWN</textPath>
									</text>
								</svg>
								<span class="p-top-hero__scroll__text"><span class="myfont myfont-barred_arrow"></span></span>
							</div>
						</div>
					</div>

					<!-- information -->
					<section id="js-top-information" class="p-top-information l-section --noYPadding">
						<div class="p-top-information__inner l-section__inner">
							<div class="p-top-information__title"></div>
							<div class="p-top-information__detail">
								<h2 class="c-heading --small">
									<span class="c-heading__ja c-heading_noti">お知らせ</span>
									<span class="c-heading__en">Information</span>
								</h2>
								<ul class="p-top-information__detail__list">
									<?php
									$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
									$posts_per_page = get_option('posts_per_page', 10);
									$args = array(
										'post_type'      => 'post',
										'order'          => 'DESC',
										'posts_per_page' => $posts_per_page,
										'paged'          => $paged	,
									);
									$posts = new WP_Query($args); 

									while ($posts->have_posts()) :
										$posts->the_post();
										?>
										<li class="p-top-information__detail__list__item">
											<time class="p-top-information__detail__list__item__time"><?php echo esc_html(get_the_date()); ?></time>
											<p class="p-top-information__detail__list__item__category">
												<?php echo get_the_category_list(', '); ?>
											</p>
											<h3 class="p-top-information__detail__list__item__title">
												<a href="<?php echo esc_url(get_permalink()); ?>">
													<?php echo esc_html(get_the_title()); ?>
												</a>
											</h3>
										</li>
									<?php endwhile; ?>
									<?php
									$categories = get_the_category();
									if ($categories) {
										$first_category_link = get_category_link($categories[0]->term_id);
										?>
										<p class="c-button p-top-information__title__button__permalinks">
											<a href="<?php echo esc_url($first_category_link); ?>" class="c-button__link">一覧はこちら <span class="myfont myfont-circle_arrow"></span></a>
										</p>
									<?php } ?>
								</ul>
								<?php wp_reset_postdata(); ?>
							</div>
							<br>
							<div class="pagination">
								<?php
								$pagination_file = $_SERVER["DOCUMENT_ROOT"] . "/assets/inc/pagination.php";
								if (file_exists($pagination_file)) {
									include($pagination_file);
								}
								?>
							</div>
						</div>
					</section>


					<!-- topics -->
					<section class="l-section p-top-topics">
						<div class="l-section__inner p-top-topics__inner">
							<h2 class="c-heading">
								<span class="c-heading__ja">トピックス</span>
								<span class="c-heading__en">Topics</span>
							</h2>
							<ul class="p-top-topics__detail">
								<li class="p-top-topics__detail__item u-shadow">
									<a href="#test" class="p-top-topics__detail__item__wrapper">
										<div class="p-top-topics__detail__item__thumbnail">
											<img src="/assets/img/top/topics_01.png" alt="">
										</div>
										<div class="p-top-topics__detail__item__character">
											<div class="p-top-topics__detail__item__character__tag">地域貢献</div>
											<time class="p-top-topics__detail__item__character__time">2023.07.29</time>
											<!-- 68文字まで表示 -->
											<h3 class="p-top-topics__detail__item__character__title">レガシーピアノ保存プロジェクト」クラウドファンディング開始</h3>
										</div>
									</a>
								</li>
								<li class="p-top-topics__detail__item u-shadow">
									<a href="#test" class="p-top-topics__detail__item__wrapper">
										<div class="p-top-topics__detail__item__thumbnail">
											<img src="/assets/img/top/topics_02.png" alt="">
										</div>
										<div class="p-top-topics__detail__item__character">
											<div class="p-top-topics__detail__item__character__tag">スポーツ</div>
											<time class="p-top-topics__detail__item__character__time">2023.05.27</time>
											<h3 class="p-top-topics__detail__item__character__title">金鷲旗玉竜旗高校柔剣道大会 クラウドファンディング募集開始</h3>
										</div>
									</a>
								</li>
								<li class="p-top-topics__detail__item u-shadow">
									<a href="#test" class="p-top-topics__detail__item__wrapper">
										<div class="p-top-topics__detail__item__thumbnail">
											<img src="/assets/img/top/topics_03.png" alt="">
										</div>
										<div class="p-top-topics__detail__item__character">
											<div class="p-top-topics__detail__item__character__tag">リリース</div>
											<time class="p-top-topics__detail__item__character__time">2023.06.28</time>
											<h3 class="p-top-topics__detail__item__character__title">焼酎に特化したWEBメディア「YAKUSAKE」を開設焼酎に特化したWEBメディア「YAKUSAKE」を開設焼酎に特化したWEBメディア</h3>
										</div>
									</a>
								</li>
							</ul>
							<div class="c-button">
								<a href="/topics/" class="c-button__link">
									<span>一覧はこちら</span>
									<span class="myfont myfont-barred_arrow"></span>
								</a>
							</div>
						</div>
					</section>

					<!-- service -->
					<section class="l-section p-top-service">
						<div class="l-section__inner p-top-service__inner">
							<h2 class="c-heading">
								<span class="c-heading__ja">事業・サービス</span>
								<span class="c-heading__en">Service</span>
							</h2>

							<div class="p-top-service__slider js-topServiceSlider swiper-container">
								<ul class="swiper-wrapper p-top-service__slider__list">
									<li class="swiper-slide p-top-service__slider__list__item u-shadow">
										<a href="#test" class="p-top-service__slider__list__item__link">
											<figure class="p-top-service__slider__list__item__figure">
												<div class="p-top-service__slider__list__item__thumb">
													<img src="/assets/img/service/thumb01.png" alt="">
												</div>
												<figcaption class="p-top-service__slider__list__item__caption">
													<div class="p-top-service__slider__list__item__caption__logo">
														<img src="/assets/img/service/icon_me.png" alt="">
														<span class="myfont myfont-link"></span>
													</div>
													<div class="p-top-service__slider__list__item__caption__name">西日本新聞me</div>
													<!-- 42文字まで表示 -->
													<p class="p-top-service__slider__list__item__caption__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
												</figcaption>
											</figure>
										</a>
									</li>
									<li class="swiper-slide p-top-service__slider__list__item u-shadow">
										<a href="#test" class="p-top-service__slider__list__item__link">
											<figure class="p-top-service__slider__list__item__figure">
												<div class="p-top-service__slider__list__item__thumb">
													<img src="/assets/img/service/thumb01.png" alt="">
												</div>
												<figcaption class="p-top-service__slider__list__item__caption">
													<div class="p-top-service__slider__list__item__caption__logo">
														<img src="/assets/img/service/icon_me.png" alt="">
														<span class="myfont myfont-link"></span>
													</div>
													<div class="p-top-service__slider__list__item__caption__name">西日本新聞me</div>
													<!-- 42文字まで表示 -->
													<p class="p-top-service__slider__list__item__caption__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
												</figcaption>
											</figure>
										</a>
									</li>
									<li class="swiper-slide p-top-service__slider__list__item u-shadow">
										<a href="#test" class="p-top-service__slider__list__item__link">
											<figure class="p-top-service__slider__list__item__figure">
												<div class="p-top-service__slider__list__item__thumb">
													<img src="/assets/img/service/thumb01.png" alt="">
												</div>
												<figcaption class="p-top-service__slider__list__item__caption">
													<div class="p-top-service__slider__list__item__caption__logo">
														<img src="/assets/img/service/icon_me.png" alt="">
														<span class="myfont myfont-link"></span>
													</div>
													<div class="p-top-service__slider__list__item__caption__name">西日本新聞me</div>
													<!-- 42文字まで表示 -->
													<p class="p-top-service__slider__list__item__caption__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
												</figcaption>
											</figure>
										</a>
									</li>
									<li class="swiper-slide p-top-service__slider__list__item u-shadow">
										<a href="#test" class="p-top-service__slider__list__item__link">
											<figure class="p-top-service__slider__list__item__figure">
												<div class="p-top-service__slider__list__item__thumb">
													<img src="/assets/img/service/thumb01.png" alt="">
												</div>
												<figcaption class="p-top-service__slider__list__item__caption">
													<div class="p-top-service__slider__list__item__caption__logo">
														<img src="/assets/img/service/icon_me.png" alt="">
														<span class="myfont myfont-link"></span>
													</div>
													<div class="p-top-service__slider__list__item__caption__name">西日本新聞me</div>
													<!-- 42文字まで表示 -->
													<p class="p-top-service__slider__list__item__caption__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
												</figcaption>
											</figure>
										</a>
									</li>
									<li class="swiper-slide p-top-service__slider__list__item u-shadow">
										<a href="#test" class="p-top-service__slider__list__item__link">
											<figure class="p-top-service__slider__list__item__figure">
												<div class="p-top-service__slider__list__item__thumb">
													<img src="/assets/img/service/thumb01.png" alt="">
												</div>
												<figcaption class="p-top-service__slider__list__item__caption">
													<div class="p-top-service__slider__list__item__caption__logo">
														<img src="/assets/img/service/icon_me.png" alt="">
														<span class="myfont myfont-link"></span>
													</div>
													<div class="p-top-service__slider__list__item__caption__name">西日本新聞me</div>
													<!-- 42文字まで表示 -->
													<p class="p-top-service__slider__list__item__caption__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
												</figcaption>
											</figure>
										</a>
									</li>
								</ul>
							</div>
							<!-- /swiper -->
							<div class="p-top-service__navigation">
								<div class="swiper-button-prev"><span class="myfont myfont-barred_arrow"></span></div>
								<div class="swiper-button-next"><span class="myfont myfont-barred_arrow"></span></div>
							</div>
							<div class="c-button">
								<a href="/service/" class="c-button__link">
									<span>一覧はこちら</span>
									<span class="myfont myfont-barred_arrow"></span>
								</a>
							</div>
						</div>
					</section>

					<!-- community -->
					<section class="l-section p-top-community">
						<div class="l-section__inner p-top-community__inner">
							<h2 class="c-heading">
								<span class="c-heading__ja">地域貢献・地域づくり</span>
								<span class="c-heading__en">Community</span>
							</h2>
							<ul class="p-top-community__detail">
								<!-- 4件表示 -->
								<li class="p-top-community__detail__item">
									<a href="#test" class="p-top-community__detail__item__wrap">
										<div class="p-top-community__detail__item__thumb u-shadow">
											<img src="/assets/img/top/topics_01.png" alt="">
										</div>
										<div class="p-top-community__detail__item__character">
											<div class="p-top-community__detail__item__character__attribute">地域貢献</div>
											<h3 class="p-top-community__detail__item__character__title">「レガシーピアノ保存プロジェクト」クラウドファンディング開始「レガシーピアノ保存プロジェクト」クラウドファンディング開始</h3>
											<div class="p-top-community__detail__item__character__tag">
												<div class="p-top-community__detail__item__character__tag__item">ファンファン福岡</div>
												<div class="p-top-community__detail__item__character__tag__item">ふくおか散歩</div>
											</div>
										</div>
									</a>
								</li>
								<li class="p-top-community__detail__item">
									<a href="#test" class="p-top-community__detail__item__wrap">
										<div class="p-top-community__detail__item__thumb u-shadow">
											<img src="/assets/img/top/topics_01.png" alt="">
										</div>
										<div class="p-top-community__detail__item__character">
											<div class="p-top-community__detail__item__character__attribute">地域貢献</div>
											<h3 class="p-top-community__detail__item__character__title">「レガシーピアノ保存プロジェクト」クラウドファンディング開始</h3>
											<div class="p-top-community__detail__item__character__tag">
												<div class="p-top-community__detail__item__character__tag__item">ファンファン福岡</div>
												<div class="p-top-community__detail__item__character__tag__item">ふくおか散歩</div>
											</div>
										</div>
									</a>
								</li>
								<li class="p-top-community__detail__item">
									<a href="#test" class="p-top-community__detail__item__wrap">
										<div class="p-top-community__detail__item__thumb u-shadow">
											<img src="/assets/img/top/topics_01.png" alt="">
										</div>
										<div class="p-top-community__detail__item__character">
											<div class="p-top-community__detail__item__character__attribute">地域貢献</div>
											<h3 class="p-top-community__detail__item__character__title">「レガシーピアノ保存プロジェクト」クラウドファンディング開始</h3>
											<div class="p-top-community__detail__item__character__tag">
												<div class="p-top-community__detail__item__character__tag__item">ファンファン福岡</div>
											</div>
										</div>
									</a>
								</li>
								<li class="p-top-community__detail__item">
									<a href="#test" class="p-top-community__detail__item__wrap">
										<div class="p-top-community__detail__item__thumb u-shadow">
											<img src="/assets/img/top/topics_01.png" alt="">
										</div>
										<div class="p-top-community__detail__item__character">
											<div class="p-top-community__detail__item__character__attribute">地域貢献</div>
											<h3 class="p-top-community__detail__item__character__title">「レガシーピアノ保存プロジェクト」クラウドファンディング開始</h3>
											<div class="p-top-community__detail__item__character__tag">
												<div class="p-top-community__detail__item__character__tag__item">ファンファン福岡</div>
											</div>
										</div>
									</a>
								</li>
							</ul>
							<div class="c-button">
								<a href="/community/" class="c-button__link">
									<span>一覧はこちら</span>
									<span class="myfont myfont-barred_arrow"></span>
								</a>
							</div>
						</div>

					</section>

					<!-- recruit -->
					<section class="p-top-recruit">
						<div class="p-top-recruit__inner">
							<h2 class="c-heading">
								<span class="c-heading__ja">採用情報</span>
								<span class="c-heading__en">Recruit</span>
							</h2>
							<div class="p-top-recruit__bnr js-top-recruit__in">
								<a href="/recruit/" class="p-top-recruit__bnr__inner">
									<div class="p-top-recruit__bnr__wrap js-top-recruit__bg">
										<img src="/assets/img/top/bnr_recruit.png" alt="採用情報" class="u-show--pc-tb">
										<img src="/assets/img/top/bnr_recruit_sp.png" alt="採用情報" class="u-show--sp">
									</div>
									<div class="p-top-recruit__bnr__text js-top-recruit__text">
										<img src="/assets/img/top/bnr_recruit_text.png" alt="">
									</div>
									<div class="p-top-recruit__bnr__logo">
										<img src="/assets/img/top/bnr_recruit_logo.png" alt="">
									</div>
								</a class="">
							</div>
							<p class="p-top-recruit__text">一緒に福岡・九州の地域づくりに<br class="u-show--sp">貢献する仲間を募集しています。</p>
							<div class="p-top-recruit__button">
								<div class="c-button">
									<a href="/community/" class="c-button__link">
										<span>新卒採用</span>
										<span class="myfont myfont-barred_arrow"></span>
									</a>
								</div>
								<div class="c-button">
									<a href="/community/" class="c-button__link">
										<span>中途採用</span>
										<span class="myfont myfont-barred_arrow"></span>
									</a>
								</div>
							</div>
						</div>
					</section>
				</div>

			</main><!-- l-main -->

		</div><!-- /l-contents-detail -->

	</div><!-- /l-contents -->



	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/footer.html"); ?>


	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/js.html"); ?>


</body>

</html>