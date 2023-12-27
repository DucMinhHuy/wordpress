<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
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
	<title>福岡県宗像市の複合ショッピングセンター【くりえいと宗像】 | <?php the_title(); ?></title>

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
<?php get_header(); ?>

<div class="pan">
	<div class="inner">
		<a class="arrow-r" href="<?php echo home_url(); ?>/">くりえいと宗像トップ</a><a class="arrow-r" href="<?php echo home_url(); ?>/shoplist">店舗一覧</a><?php the_title(); ?>
	</div>
</div>
<!-- shop_content  -->
<div id="shop_content" class="clearfix">
	<div id="sleft_cont">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();
			$terms = get_the_terms($post->ID,'shop_category');
			foreach ( $terms as $term ){
				$tname = $term->name;
				$tslug = $term->slug;
			}

			$areamap = get_field('s-map');
			?>
			<div class="stitArea clearfix">
				<div class="slogo"><img src="<?php echo get_field('s-logo'); ?>"></div>
				<div class="stit">
					<p class="scate"><?php echo $tname; ?></p>
					<p class="sname"><?php the_title(); ?></p>
					<p class="sfuri"><?php echo get_field('s-furi'); ?></p>
				</div>
			</div>
			<div class="simg"><img src="<?php echo get_field('shopimg'); ?>"></div>
			<p class="stext"><?php echo get_field('s-detail'); ?></p>
			<table class="sinfoTbl">
				<tbody>
					<tr>
						<th>営業時間</th>
						<td><?php echo get_field('s-hour'); ?></td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><?php echo get_field('s-tel'); ?></td>
					</tr>
					<tr>
						<th>URL</th>
						<td><a href="<?php echo get_field('s-url'); ?>" target="_blank"><?php echo get_field('s-url'); ?></a></td>
					</tr>
					<tr>
						<th>店休日</th>
						<td><?php echo get_field('s-holiday'); ?></td>
					</tr>
					<tr>
						<th>住所</th>
						<td><?php echo get_field('s-address'); ?></td>
					</tr>
				</tbody>
			</table>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		<?php
			//urlの最後の部分取得(ニュース表示用)
			$url = $_SERVER['REQUEST_URI'];
			$tmp = array_reverse(explode("/", $url));
			$term_slug = $tmp[1];
		?>
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
		      'meta_value' => $term_slug,
		      'meta_compare' => '='
				);
				$news_query = new WP_Query( $args );
				?>
				<?php if ( $news_query->have_posts() ): ?>
					<ul class="snews snslider clearfix">
					<?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
						<li><a href="<?php the_permalink(); ?>">
							<div class="imgArea">
								<?php if (has_post_thumbnail()){ ?>
										<?php the_post_thumbnail(); ?>
								<?php }else{ ?>
										<img src="" />
								<?php } ?>
							</div>
							<div class="txtArea">
								<p class="ttl"><?php the_title(); ?></p>
								<div class="clearfix">
									<p class="date"><?php the_time('Y.m.d');?></p>
									<p class="sname">
										<?php $field = get_field_object('shopname');
										$values = $field['value'];
										echo $field['choices'][$values];
										?>
									</p>
								</div>
							</div>
						</a></li>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</ul>

				<?php else: ?>
					<p>現在お知らせはございません。</p>
				<?php endif; ?>
		</div>
		<!-- AREA MAP -->
		<div class="areamap">
			<h3>AREA MAP</h3>
			<div class="amapArea"><img src="<?php echo $areamap; ?>"></div>
			<a href="<?php echo home_url(); ?>/shoplist" class="dtlbtn arrow-l">店舗一覧はこちら</a>
		</div>
	</div>

	<!-- sidemenu -->
	<div id="sright_cont">
		<?php include('sidebar.php'); ?>
	</div>
	<!--// sidemenu -->
</div>
<!--// shop_content  -->
<?php get_footer(); ?>
