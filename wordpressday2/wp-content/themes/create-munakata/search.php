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
	<title>福岡県宗像市の複合ショッピングセンター【くりえいと宗像】 | 検索結果</title>

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
<?php get_header(); ?>

<?php if (have_posts()): ?>
<!--<?php
if (isset($_GET['s']) && empty($_GET['s'])) {
echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
} else {
echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
}
?>-->
<div class="pan">
	<div class="inner">
		<a class="arrow-r" href="<?php echo home_url(); ?>/">くりえいと宗像トップ</a>検索結果 <?php
		if (isset($_GET['s']) && empty($_GET['s'])) {
		echo ''; // 検索キーワードが未入力の場合のテキストを指定
		} else {
		echo '“'.$_GET['s'] .'”'; // 検索キーワードと該当件数を表示
		}
		?>
	</div>
</div>
<h2>検索結果</h2>
<div id="container">
<ul id="sc-list" class="sc-list clearfix">
<?php while(have_posts()): the_post(); ?>
	<?php $terms = get_the_terms($post->ID,'shop_category');
	foreach( $terms as $term ) {
	  $termname = $term->slug;
	}?>
	<?php if($termname == 'medical'){ ?>
		<!--<li>
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
				<p class="skind"><?php echo get_field('m-cate'); ?></p>
				<p class="sttl"><?php echo get_the_title(); ?></p>
				<table>
					<tbody>
						<tr>
							<th>電話番号</th>
							<td><?php echo get_field('m-tel'); ?></td>
						</tr>
						<tr>
							<th>住所</th>
							<td><?php echo get_field('m-address'); ?></td>
						</tr>
						<tr>
							<th><?php if(get_field('m-pharmacy')){echo '管理';}else{echo '院長';} ?></th>
							<td><?php echo get_field('m-director'); ?></td>
						</tr>
						<tr>
							<th><?php if(get_field('m-pharmacy')){echo '営業時間';}else{echo '診療時間';} ?></th>
							<td><?php echo get_field('m-time'); ?></td>
						</tr>
						<?php if(get_field('m-url')){ ?>
						<tr>
							<th>URL</th>
							<td><a href="<?php echo get_field('m-url'); ?>" target="_blank"><?php echo get_field('m-url'); ?></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</li>-->
	<?php } else {?>
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
<?php } ?>
<?php endwhile; ?>
</ul>
<?php else: ?>
<p class="nomatch">検索されたキーワードにマッチする記事はありませんでした</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
