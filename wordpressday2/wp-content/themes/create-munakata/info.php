<?php
/*
Template Name: info
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

	<title>福岡県宗像市の複合ショッピングセンター【くりえいと宗像】 | 店舗一覧</title>

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
		<a class="arrow-r" href="<?php echo home_url(); ?>/">くりえいと宗像トップ</a>店舗一覧
	</div>
</div>
<h2>店舗一覧</h2>
<div id="container">
	<div id="info">
		<h3 class="cl-b mb50">Shop List<span class="subttl">店舗一覧</span></h3>

		<!-- グルメ -->
		<p class="catettl"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/gourmet.png"></p>
		<ul id="sc-list" class="sc-list clearfix">

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
		$news_query = new WP_Query( $args );
		?>
		<?php if ( $news_query->have_posts() ): ?>
			<?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
				<li>
					<?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){ ?>
						<a href="<?php echo get_permalink(); ?>">
					<?php } elseif(get_field('s-sunlive') == true) {?>
						<img class="sunlive-icon" src="<?php bloginfo('template_directory'); ?>/assets/img/shop/icon_sunlive.png">
					<?php } ?>
					<div class="simg">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
						} else {
								echo '<img src="http://placehold.it/300x200">';
						}?>
					</div>
					<div class="sdtl">
						<p class="skind"><?php echo get_field('s-kind'); ?></p>
						<p class="sttl"><?php echo get_the_title(); ?></p>
						<table>
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
									<th>店休日</th>
									<td><?php echo get_field('s-holiday'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){ ?></a><?php } ?></li>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		<?php else: ?>
		<?php endif; ?>
		</ul>

		<!-- ファッション -->
		<p class="catettl"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/fashion.png"></p>
		<ul id="sc-list2" class="sc-list clearfix">

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
		$news_query = new WP_Query( $args );
		?>
		<?php if ( $news_query->have_posts() ): ?>
			<?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
				<li>
					<?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){ ?>
						<a href="<?php echo get_permalink(); ?>">
					<?php } elseif(get_field('s-sunlive') == true) {?>
						<img class="sunlive-icon" src="<?php bloginfo('template_directory'); ?>/assets/img/shop/icon_sunlive.png">
					<?php } ?>

					<div class="simg">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
						} else {
								echo '<img src="http://placehold.it/300x200">';
						}?>
					</div>
					<div class="sdtl">
						<p class="skind"><?php echo get_field('s-kind'); ?></p>
						<p class="sttl"><?php echo get_the_title(); ?></p>
						<table>
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
									<th>店休日</th>
									<td><?php echo get_field('s-holiday'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){ ?></a><?php } ?></li>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		<?php else: ?>
		<?php endif; ?>
		</ul>

		<!-- エンタメ・学び -->
		<p class="catettl"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/entertainment.png"></p>
		<ul id="sc-list3" class="sc-list clearfix">

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
		$news_query = new WP_Query( $args );
		?>
		<?php if ( $news_query->have_posts() ): ?>
			<?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
				<li>
					<?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){ ?>
						<a href="<?php echo get_permalink(); ?>">
					<?php } elseif(get_field('s-sunlive') == true) {?>
						<img class="sunlive-icon" src="<?php bloginfo('template_directory'); ?>/assets/img/shop/icon_sunlive.png">
					<?php } ?>

					<div class="simg">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
						} else {
								echo '<img src="http://placehold.it/300x200">';
						}?>
					</div>
					<div class="sdtl">
						<p class="skind"><?php echo get_field('s-kind'); ?></p>
						<p class="sttl"><?php echo get_the_title(); ?></p>
						<table>
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
									<th>店休日</th>
									<td><?php echo get_field('s-holiday'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){ ?></a><?php } ?></li>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		<?php else: ?>
		<?php endif; ?>
		</ul>

		<!-- 生活 -->
		<p class="catettl"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/life.png"></p>
		<ul id="sc-list4" class="sc-list clearfix">

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
		$news_query = new WP_Query( $args );
		?>
		<?php if ( $news_query->have_posts() ): ?>
			<?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
				<li>
					<?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){ ?>
						<a href="<?php echo get_permalink(); ?>">
					<?php } elseif(get_field('s-sunlive') == true) { ?>
						<img class="sunlive-icon" src="<?php bloginfo('template_directory'); ?>/assets/img/shop/icon_sunlive.png">
					<?php } ?>

					<div class="simg">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
						} else {
								echo '<img src="http://placehold.it/300x200">';
						}?>
					</div>
					<div class="sdtl">
						<p class="skind"><?php echo get_field('s-kind'); ?></p>
						<p class="sttl"><?php echo get_the_title(); ?></p>
						<table>
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
									<th>店休日</th>
									<td><?php echo get_field('s-holiday'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){ ?></a><?php } ?></li>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		<?php else: ?>
		<?php endif; ?>
		</ul>

		<!-- サンリブ -->
		<p class="catettl"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sunlive.png"></p>
		<ul id="sc-list2" class="sc-list clearfix">

		<?php
		$args = array(
			'post_type' => 'sunlive',
			'posts_per_page' => '1',
			'orderby' => 'date',
			'order' => 'DESC',
		);
		$news_query = new WP_Query( $args );
		?>
		<?php if ( $news_query->have_posts() ): ?>
			<?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
				<li><a href="<?php echo home_url(); ?>/sunlive_">
					<div class="simg">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
						} else {
								echo '<img src="http://placehold.it/300x200">';
						}?>
					</div>
					<div class="sdtl">
						<p class="sttl"><?php echo get_the_title(); ?></p>
						<table>
							<tbody>
								<tr>
									<th>営業時間</th>
									<td><?php echo get_field('sun-time'); ?></td>
								</tr>
								<tr>
									<th>電話番号</th>
									<td><?php echo get_field('sun-tel'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</a></li>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		<?php else: ?>
		<?php endif; ?>
		</ul>
	</div>
</div>




<!-- footer -->
<?php get_footer(); ?>
<!-- footer end -->
