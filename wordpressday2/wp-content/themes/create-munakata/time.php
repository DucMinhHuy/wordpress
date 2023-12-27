<?php
/*
Template Name: time
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

	<title>福岡県宗像市の複合ショッピングセンター【くりえいと宗像】 | 営業時間のご案内</title>

	<!-- custom -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/common/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/page.css">
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
		<a class="arrow-r" href="<?php echo home_url(); ?>/">くりえいと宗像トップ</a>営業時間のご案内
	</div>
</div>
<h2>営業時間のご案内</h2>

<div id="container">
<div id="time">
<h3 class="cl-b">Business Hours<span class="subttl">営業時間のご案内</span></h3><br>
<h4>グルメ</h4>
<table class="timeTbl">
<thead>
<tr>
<th>店舗名</th>
<th>電話番号</th>
<th>営業時間</th>
<th>定休日</th>
</tr>
</thead>
<tbody>
<?php
$args = array(
	'post_type' => 'shop',
	'tax_query' => array(
				array(
						'taxonomy' => 'shop_category',
						'field' => 'slug',
						'terms' => 'gourmet',
						),
	),
	'posts_per_page' => '-1',
	'orderby' => 'date',
	'order' => 'DESC',
);
$shop_query = new WP_Query( $args );
?>
<?php if ( $shop_query->have_posts() ): ?>
	<?php while ( $shop_query->have_posts() ) : $shop_query->the_post();?>
		<tr>
			<td <?php if(get_field('s-sunlive')){ echo "class='sunlive'"; }?>><?php echo get_the_title(); ?></td>
			<td><?php echo get_field('s-tel'); ?></td>
			<td><?php echo get_field('s-hour'); ?></td>
			<td><?php echo get_field('s-holiday'); ?></td>
		</tr>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

<?php else: ?>
<?php endif; ?>
</tbody>
</table>

<h4>ファッション</h4>
<table class="timeTbl">
<thead>
<tr>
<th>店舗名</th>
<th>電話番号</th>
<th>営業時間</th>
<th>定休日</th>
</tr>
</thead>
<tbody>
	<?php
	$args = array(
		'post_type' => 'shop',
		'tax_query' => array(
					array(
							'taxonomy' => 'shop_category',
							'field' => 'slug',
							'terms' => 'fashion',
							),
		),
		'posts_per_page' => '-1',
		'orderby' => 'date',
		'order' => 'DESC',
	);
	$shop_query = new WP_Query( $args );
	?>
	<?php if ( $shop_query->have_posts() ): ?>
		<?php while ( $shop_query->have_posts() ) : $shop_query->the_post();?>
			<tr>
				<td <?php if(get_field('s-sunlive')){ echo "class='sunlive'"; }?>><?php echo get_the_title(); ?></td>
				<td><?php echo get_field('s-tel'); ?></td>
				<td><?php echo get_field('s-hour'); ?></td>
				<td><?php echo get_field('s-holiday'); ?></td>
			</tr>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	<?php else: ?>
	<?php endif; ?>
</tbody>
</table>

<h4>エンタメ・学び</h4>
<table class="timeTbl">
<thead>
<tr>
<th>店舗名</th>
<th>電話番号</th>
<th>営業時間</th>
<th>定休日</th>
</tr>
</thead>
<tbody>
<tr>
	<?php
	$args = array(
		'post_type' => 'shop',
		'tax_query' => array(
					array(
							'taxonomy' => 'shop_category',
							'field' => 'slug',
							'terms' => 'entertainment',
							),
		),
		'posts_per_page' => '-1',
		'orderby' => 'date',
		'order' => 'DESC',
	);
	$shop_query = new WP_Query( $args );
	?>
	<?php if ( $shop_query->have_posts() ): ?>
		<?php while ( $shop_query->have_posts() ) : $shop_query->the_post();?>
			<tr>
				<td <?php if(get_field('s-sunlive')){ echo "class='sunlive'"; }?>><?php echo get_the_title(); ?></td>
				<td><?php echo get_field('s-tel'); ?></td>
				<td><?php echo get_field('s-hour'); ?></td>
				<td><?php echo get_field('s-holiday'); ?></td>
			</tr>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	<?php else: ?>
	<?php endif; ?>
</tbody>
</table>

<h4>生活</h4>
<table class="timeTbl">
<thead>
<tr>
<th>店舗名</th>
<th>電話番号</th>
<th>営業時間</th>
<th>定休日</th>
</tr>
</thead>
<tbody>
	<?php
	$args = array(
		'post_type' => 'shop',
		'tax_query' => array(
					array(
							'taxonomy' => 'shop_category',
							'field' => 'slug',
							'terms' => 'life',
							),
		),
		'posts_per_page' => '-1',
		'orderby' => 'date',
		'order' => 'DESC',
	);
	$shop_query = new WP_Query( $args );
	?>
	<?php if ( $shop_query->have_posts() ): ?>
		<?php while ( $shop_query->have_posts() ) : $shop_query->the_post();?>
			<tr>
				<td <?php if(get_field('s-sunlive')){ echo "class='sunlive'"; }?>><?php echo get_the_title(); ?></td>
				<td><?php echo get_field('s-tel'); ?></td>
				<td><?php echo get_field('s-hour'); ?></td>
				<td><?php echo get_field('s-holiday'); ?></td>
			</tr>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	<?php else: ?>
	<?php endif; ?>
</tbody>
</table>
</div>
</div>

<!-- footer -->
<?php get_footer(); ?>
<!-- footer end -->
