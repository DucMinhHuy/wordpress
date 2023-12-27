<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<!-- meta -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="google-site-verification" content="GqRRdH_THroQp_8bRUoaO9WO-3v_zsKWT6SfGxETU4A" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="viewport" content="width=device-width,user-scalable=no,shrink-to-fit=yes">
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/viewport.js"></script>

	<title>福岡県宗像市の複合ショッピングセンター【くりえいと宗像】 | 医療</title>

	<!-- custom -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/common/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/shop_category.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- meta -->
	<meta name="description" content="福岡県宗像市の複合ショッピングセンター【くりえいと宗像】"/>
	<meta name="keywords" content="福岡県,宗像市,複合,ショッピング,センター,くりえいと,宗像"/>
	<meta property="og:site_name" content="くりえいと宗像" />
	<meta property="og:title" content="福岡県宗像市の複合ショッピングセンター【くりえいと宗像】" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="create-munakata.co.jp/" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="福岡県宗像市の複合ショッピングセンター【くりえいと宗像】"/>
	<meta property="og:locale" content="ja_JP" />

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126460678-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-126460678-1');
	</script>

</head>
<!-- header -->
<?php get_header(); ?>
<!--// header -->

<div class="pan">
	<div class="inner">
		<a class="arrow-r" href="<?php echo home_url(); ?>/">くりえいと宗像トップ</a><a class="arrow-r" href="<?php echo home_url(); ?>/shoplist">店舗一覧</a><?php single_cat_title(); ?>
	</div>
</div>
	<h2>店舗一覧</h2>
	<div id="container">
	<p class="catettl"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/<?php echo $term ?>.png"></p>
				<?php
				$args = array(
					'taxonomy' => 'shop_category',
					'posts_per_page' => '-1',
					'term' => $term,
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$shop_query = new WP_Query( $args );
				if ( $shop_query->have_posts() ):?>
				<h3 class="cl-b mb50">Clinic<span class="subttl">各種医院</span></h3>

				<ul id="md-list" class="clearfix md-list">
				<?php while ( $shop_query->have_posts() ) : $shop_query->the_post(); ?>
					<?php
					if(get_field('m-pharmacy')){
						$p_title = get_the_title();
						$p_mainimg = get_the_post_thumbnail_url();
						$p_tel = get_field('m-tel');
						$p_address = get_field('m-address');
						$p_director = get_field('m-director');
						$p_time = get_field('m-time');
						$p_cate = get_field('m-cate');
						$p_schedule = get_field('m-schedule');
						$p_etc = get_field('m-etc');
					} else {?>
					<li class="clearfix">
						<div class="simg">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('full',
								array(
								'alt' => get_the_title(), // altにページタイトルを指定
								'title' => get_the_title() // titleにページタイトルを指定
								));
							} else {
									echo '<img src="http://placehold.it/300x200">';
							}?>
						</div>
						<div class="sdtl">
							<p class="sttl"><?php echo get_the_title(); ?></p>
							<p class="skind"><?php echo get_field('m-cate'); ?></p>
							<table>
								<tbody>
									<tr>
										<th><p>電話番号</p></th>
										<td><?php echo get_field('m-tel'); ?></td>
									</tr>
									<tr>
										<th><p>住<span></span>所</p></th>
										<td><?php echo get_field('m-address'); ?></td>
									</tr>
									<tr>
										<th><p>院<span></span>長</p></th>
										<td><?php echo get_field('m-director'); ?></td>
									</tr>
									<tr>
										<th><p>診療時間</p></th>
										<td><?php echo get_field('m-time'); ?></td>
									</tr>
								</tbody>
							</table>
							<?php if(get_field('m-url')){ ?><a class="surl" href="<?php echo get_field('m-url'); ?>" target="_blank"><?php echo get_field('m-url'); ?></a><?php } ?>
							<?php if(get_field('m-etc')){ ?><p class="setc"><?php echo get_field('m-etc'); ?></p><?php } ?>
						</div>
						<div class="ssche">
							<?php if(get_field('m-schedule')){ ?><img src="<?php echo get_field('m-schedule'); ?>"/><?php } ?>
						</div>
					</li>
					<?php } ?>
				<?php endwhile;?>
				</ul>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>

				<h3 class="cl-b mb50">Pharmacy<span class="subttl">調剤薬局</span></h3>

				<?php
				$args = array(
					'taxonomy' => 'shop_category',
					'posts_per_page' => '-1',
					'term' => $term,
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$shop_query = new WP_Query( $args );

				if ( $shop_query->have_posts() ):?>
				<ul id="md-list" class="clearfix md-list">
					<?php while ( $shop_query->have_posts() ) : $shop_query->the_post(); ?>
					<?php if(get_field('m-pharmacy')){?>

					<li class="clearfix cl-pink">
						<div class="simg">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('full',
								array(
								'alt' => get_the_title(), // altにページタイトルを指定
								'title' => get_the_title() // titleにページタイトルを指定
								));
							} else {
									echo '<img src="http://placehold.it/300x200">';
							}?>
						</div>
						<div class="sdtl">
							<p class="sttl"><?php echo get_the_title(); ?></p>
							<p class="skind"><?php echo get_field('m-cate'); ?></p>
							<table>
								<tbody>
									<tr>
										<th><p>電話番号</p></th>
										<td><?php echo get_field('m-tel'); ?></td>
									</tr>
									<tr>
										<th><p>住<span></span>所</p></th>
										<td><?php echo get_field('m-address'); ?></td>
									</tr>
									<tr>
										<th><p>管<span></span>理</p></th>
										<td><?php echo get_field('m-director'); ?></td>
									</tr>
									<tr>
										<th><p>営業時間</p></th>
										<td><?php echo get_field('m-time'); ?></td>
									</tr>
								</tbody>
							</table>
							<?php if(get_field('m-url')){ ?><a class="surl" href="<?php echo get_field('m-url'); ?>" target="_blank"><?php echo get_field('m-url'); ?></a><?php } ?>
							<?php if(get_field('m-etc')){ ?><p class="setc"><?php echo get_field('m-etc'); ?></p><?php } ?>
						</div>
						<div class="ssche">
							<?php if(get_field('m-schedule')){ ?><img src="<?php echo get_field('m-schedule'); ?>"/><?php } ?>
						</div>
					</li>
				<?php } ?>
				<?php endwhile;?>

				</ul>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>


			</div>

<!-- footer -->
<?php get_footer(); ?>
<!-- footer end -->
