<?php
/*
Template Name: shopnews
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

	<title>福岡県宗像市の複合ショッピングセンター【くりえいと宗像】 | NEWS</title>

	<!-- custom -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/common/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.css">

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/news.css">
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
		<a class="arrow-r" href="<?php echo home_url(); ?>/">くりえいと宗像トップ</a>店舗からのお知らせ
	</div>
</div>
	<h2>店舗からのお知らせ</h2>
	<?php
	 	$url=$_SERVER["REQUEST_URI"];
		$url = ( explode( '=', $url ) );
		$target = $url[1];
	?>
	<?php if($target == ""){?>
		<div id="shopnews" class="clearfix">
	<?php }else{ ?>
		<div id="shop_content" class="clearfix">
			<div id="sleft_cont">
	<?php }?>
				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
				$news_query = new WP_Query();
				$args = array(
					'paged' => $paged,
					'posts_per_page' => '16',
					'category_name' => 'shopnews',
					'post_status' => 'publish',
					'meta_key' => 'shopname',
        	'meta_value' => $target,
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$news_query->query($args);
				?>
				<?php if ( $news_query->have_posts() ): ?>
					<ul class="snews_sgl clearfix">
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
					<?php if(function_exists('wp_pagenavi')){
					wp_pagenavi(array('query'=>$news_query));
					}?>
	        <?php wp_reset_postdata(); ?>
				</ul>
	      <?php else: ?>
	        <p>現在お知らせはございません。</p>
	      <?php endif; ?>
			<?php if($target == ""){ ?>
			</div>
			<?php } else { ?>
				</div>
				<div id="sright_cont">
					<div id="sidebar">
						<ul class="sbanner clearfix">
							<li><a href="<?php echo home_url(); ?>/open"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner02.png" alt="出店について"></li>
					    <li><a href="<?php echo home_url(); ?>/sunlive"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner03.png" alt="サンリブ"></li>
					    <li><a href="<?php echo home_url(); ?>/access"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner04.png" alt="採用情報"></li>
					    <li><a href="<?php echo home_url(); ?>/time"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner01.png" alt="出店について"></li>
					    <li><a href="https://www.facebook.com/create.munakata" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner05.png" alt="サンリブ"></li>
					    <li><a href="https://twitter.com/create_munakata?lang=ja" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner06.png" alt="採用情報"></li>
						</ul>
					</div>
				</div>
			<?php } ?>
	</div>

<!-- footer -->
<?php get_footer(); ?>
<!-- footer end -->
