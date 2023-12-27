<?php
/*
Template Name: sunlive
*/
?>
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

	<title>福岡県宗像市の複合ショッピングセンター【くりえいと宗像】 | サンリブ</title>

	<!-- custom -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/common/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/shop_single.css">
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
		<a class="arrow-r" href="<?php echo home_url(); ?>/">くりえいと宗像トップ</a><a class="arrow-r" href="<?php echo home_url(); ?>/shoplist">店舗一覧</a>サンリブ
	</div>
</div>
<?php
$args = array(
	'post_type' => 'sunlive',
	'post_status' => 'publish',
	'posts_per_page' => '1',
	'orderby' => 'date',
	'order' => 'DESC'
);
$sunlive_query = new WP_Query( $args );

?>
<?php if ( $sunlive_query->have_posts() ): ?>
	<?php while ( $sunlive_query->have_posts() ) : $sunlive_query->the_post();?>
	<div id="sunlive" class="clearfix">
		<div class="stitArea clearfix">
			<div class="slogo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/shop/icon_sunlive.png" alt="サンリブ"></div>
			<div class="stit">
				<p class="scate"></p>
				<p class="sname">SunLive</p>
				<p class="sfuri">サンリブ</p>
			</div>
		</div>
		<div class="simg"><img src="https://www.create-munakata.co.jp/wp-content/uploads/2022/11/DJI_0013.jpg" alt=""></div>
		<p class="stext">サンリブくりえいと宗像店にはバリエーションに富んだ専門店が皆様のお越しをお待ちしております。</p>
		<table class="sinfoTbl">
			<tbody>
				<tr>
					<th>営業時間</th>
					<td><?php echo get_field('sun-time'); ?><br><br>
					<a style="color:#666;text-decoration:underline;" href="<?php echo home_url(); ?>/time">営業時間一覧はこちら</a></td>
				</tr>
				<tr>
					<th>電話番号</th>
					<td><?php echo get_field('sun-tel'); ?></td>
				</tr>
				<tr>
					<th>URL</th>
					<td><a href="http://www.sunlive.co.jp/" target="_blank">http://www.sunlive.co.jp/</a></td>
				</tr>
				<tr>
					<th>住所</th>
					<td><?php echo get_field('sun-address'); ?></td>
				</tr>
				<tr>
					<th>駐車場</th>
					<td><?php echo get_field('sun-park'); ?></td>
				</tr>
			</tbody>
		</table>

		<div class="shopnews">
			<h3><span class="cl-y">SHOP</span> NEWS</h3>
				<!-- SHOP NEWS -->
				<?php
				$args = array(
					'post_type' => 'post',
					'category_name' => 'shopnews',
					'posts_per_page' => '-1',
					'orderby' => 'date',
					'order' => 'DESC',
					'meta_key' => 'shopname',
					'meta_value' => 'sunlive',
					'meta_compare' => 'LIKE'
				);
				?>
					<ul class="snews snslider clearfix">
						<?php
						$stuff = get_posts( $args );
						foreach( $stuff as $s ) {
						$date = $s->post_date
							?>
						<li><a href="<?php the_permalink( $s->ID ); ?>">
							<div class="imgArea">
								<?php
								if ( has_post_thumbnail( $s->ID ) ) {
						    	echo get_the_post_thumbnail( $s->ID );
						    ?>
	              <?php }else{ ?>
	                <img src="" />
	              <?php } ?>
							</div>
							<div class="txtArea">
								<p class="ttl"><?php echo $s->post_title; ?></p>
								<div class="clearfix">
									<p class="date"><?php echo date('Y.m.d', strtotime($date)); ?></p>
									<p class="sname">サンリブ</p>
								</div>
							</div>
						</a></li>
					<?php } ?>
				</ul>
		</div>
		<div class="shoplist-sun">
			<h3 class="cl-y">SHOP LIST 1F</h3>
			<ul class="clearfix">
				<li>
					<p class="cate"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/gourmet.png" alt="グルメ"></p>
					<p><?php echo get_field('sun-gourmet1'); ?></p>
				</li>
				<li>
					<p class="cate"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/fashion.png" alt="ファッション"></p>
					<p><?php echo get_field('sun-fashion1'); ?></p>
				</li>
				<li>
					<p class="cate"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/life.png" alt="生活"></p>
					<p><?php echo get_field('sun-life1'); ?></p>
				</li>
			</ul>
			<br>
			<a style="color:#666;text-decoration:underline;" href="<?php echo home_url(); ?>/time">営業時間一覧はこちら</a>

		</div>
		<div class="areamap areamap-sun">
			<h3 class="cl-b">FLOOR GUIDE 1F</h3>
			<div class="amapArea"><img src="<?php echo get_field('floormap1'); ?>" alt="フロアマップ1F"></div>
		</div>
		<div class="shoplist-sun">
			<h3 class="cl-y">SHOP LIST 2F</h3>
			<ul class="clearfix">
				<li>
					<p class="cate"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/gourmet.png" alt="グルメ"></p>
					<p><?php echo get_field('sun-gourmet2'); ?></p>
				</li>
				<li>
					<p class="cate"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/fashion.png" alt="ファッション"></p>
					<p><?php echo get_field('sun-fashion2'); ?></p>
				</li>
				<li>
					<p class="cate"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/life.png" alt="生活"></p>
					<p><?php echo get_field('sun-life2'); ?></p>
				</li>
			</ul>
			<br>
			<a style="color:#666;text-decoration:underline;" href="<?php echo home_url(); ?>/time">営業時間一覧はこちら</a>

		</div>
		<div class="areamap">
			<h3 class="cl-b">FLOOR GUIDE 2F</h3>
			<div class="amapArea"><img src="<?php echo get_field('floormap2'); ?>" alt="フロアマップ2F"></div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>

<!-- footer -->
<?php get_footer(); ?>
<!-- footer end -->
