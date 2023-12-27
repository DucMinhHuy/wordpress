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

	<title>福岡県宗像市の複合ショッピングセンター【くりえいと宗像】</title>

	<!-- custom -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/common/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/top.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- meta -->
	<meta name="description" content="福岡県宗像市の複合ショッピングセンター【くりえいと宗像】"/>
	<meta name="keywords" content="福岡県,宗像市,複合,ショッピング,センター,くりえいと,宗像"/>
	<meta property="og:site_name" content="くりえいと宗像" />
	<meta property="og:title" content="福岡県宗像市の複合ショッピングセンター【くりえいと宗像】" />
	<meta property="og:type" content="website" />
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
<div id="toppage">
<section id="topbanner">
  <div class="wrap clearfix">
		<div class="slidewp">
    <ul class="topslider">
      <!-- スライダー画像 -->
      <?php
      $args = array(
        'post_type' => 'topbanner',
        'posts_per_page' => '1',
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $slider_query = new WP_Query( $args );
      $count = 1;
      ?>
      <?php if ( $slider_query->have_posts() ): ?>
        <?php while ( $slider_query->have_posts() ) : $slider_query->the_post();?>
          <?php for($i=0;$i<6;$i++){ ?>
            <?php $simg = 'sliderimg' . $i; ?>
            <?php $surl = 'sliderurl' . $i; ?>
            <?php if(get_field($simg)){ ?>
              <li>
                <?php if(get_field($surl)){ ?><a href="<?php echo get_field($surl); ?>"><?php } ?>
                  <img src="<?php echo get_field($simg); ?>">
                <?php if(get_field($surl)){ ?></a><?php } ?>
              </li>
            <?php } ?>
          <?php } ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <?php endif; ?>
    </ul>
		</div>
    <ul class="tbanner is-pc">
      <li><a href="<?php echo home_url(); ?>/sunlive_"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner01.png" alt="サンリブ"></a></li>
      <li><a href="<?php echo home_url(); ?>/access"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner02.png" alt="交通アクセス"></a></li>
      <li><a href="<?php echo home_url(); ?>/open"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner03.png" alt="出店について"></a></li>
      <li><a href="<?php echo home_url(); ?>/time"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner04.png" alt="営業時間のご案内"></a></li>
			<li><a href="https://twitter.com/create_munakata?lang=ja" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner06.png"></a></li>
			<li><a href="https://www.facebook.com/create.munakata" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner05.png"></a></li>
    </ul>
  </div>
</section>
<section class="is-sp">
	<nav id="topnav">
		<ul class="clearfix">
			<li><a href="<?php echo home_url(); ?>/shop_category/gourmet"><div class="img"></div></a></li>
			<li><a href="<?php echo home_url(); ?>/shop_category/fashion"><div class="img"></div></a></li>
			<li><a href="<?php echo home_url(); ?>/shop_category/entertainment"><div class="img"></div></a></li>
			<li><a href="<?php echo home_url(); ?>/shop_category/life"><div class="img"></div></a></li>
			<li><a href="<?php echo home_url(); ?>/shop_category/medical"><div class="img"></div></a></li>
		</ul>
	</nav>
	<ul class="tbanner clearfix">
		<li><a href="<?php echo home_url(); ?>/sunlive_"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner01.png" alt="サンリブ"></a></li>
		<li><a href="<?php echo home_url(); ?>/time"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner04.png" alt="営業時間のご案内"></a></li>
		<li><a href="<?php echo home_url(); ?>/access"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner02.png" alt="交通アクセス"></a></li>
		<li><a href="<?php echo home_url(); ?>/open"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner03.png" alt="出店について"></a></li>
		<li><a href="https://twitter.com/create_munakata?lang=ja" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner06.png"></a></li>
		<li><a href="https://www.facebook.com/create.munakata" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/tbanner05.png"></a></li>
	</ul>
</section>
<section id="shopnews">
  <div class="wrap">
    <h3><span class="cl-y">SHOP</span> NEWS<span class="subttl">店舗からのお知らせ</span></h3>
    <a href="<?php echo home_url(); ?>/shopnews" class="dtlbtn arrow-r is-pc">一覧はこちら</a>
    <ul class="snews clearfix">
      <!-- SHOP NEWS -->
      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'shopnews',
        'posts_per_page' => '4',
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $news_query = new WP_Query( $args );
      ?>
      <?php if ( $news_query->have_posts() ): ?>
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
      <?php else: ?>
        <p class="notext">現在お知らせはございません。</p>
      <?php endif; ?>
    </ul>
  </div>
</section>

<section id="eventnews">
  <div class="wrap clearfix">
    <div class="event">
      <h3 class="cl-b">EVENT<span class="subttl">イベント</span></h3>
      <!-- EVENT -->
      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'event',
        'posts_per_page' => '1',
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $news_query = new WP_Query( $args );
      ?>
      <?php if ( $news_query->have_posts() ): ?>
        <?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
          <div class="ev-cont"><a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()){ ?>
                <?php the_post_thumbnail('full',
								array(
								'alt' => get_the_title(), // altにページタイトルを指定
								'title' => get_the_title() // titleにページタイトルを指定
								)); ?>
            <?php }else{ ?>
                <img src="" />
            <?php } ?>
            <div class="txtArea">
              <p class="ttl"><?php the_title(); ?></p>
            </div>
          </a></div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
        <p class="notext">現在開催中のイベントはございません。</p>
      <?php endif; ?>
    </div>
    <div class="news">
      <h3 class="cl-b">NEWS<span class="subttl">お知らせ</span></h3>
      <!--  NEWS -->
      <ul class="is-pc">
        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'news',
          'posts_per_page' => '6',
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $news_query = new WP_Query( $args );
        ?>
        <?php if ( $news_query->have_posts() ): ?>
          <?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
            <li><?php if(get_the_content()){ ?><a href="<?php the_permalink(); ?>"><?php } ?>
              <dl>
                <dt><?php the_time('Y.m.d');?></dt>
                <dd><?php the_title(); ?></dd>
              </dl>
            <?php if(get_the_content()){ ?></a><?php } ?></li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p class="notext">現在お知らせはございません。</p>
        <?php endif; ?>
      </ul>
			<ul class="is-sp">
        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'news',
          'posts_per_page' => '3',
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $news_query = new WP_Query( $args );
        ?>
        <?php if ( $news_query->have_posts() ): ?>
          <?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
            <li><?php if(get_the_content()){ ?><a href="<?php the_permalink(); ?>"><?php } ?>
              <dl>
                <dt><?php the_time('Y.m.d');?></dt>
                <dd><?php the_title(); ?></dd>
              </dl>
            <?php if(get_the_content()){ ?></a><?php } ?></li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p class="notext">現在お知らせはございません。</p>
        <?php endif; ?>
      </ul>
			<a href="<?php echo home_url(); ?>/news" class="dtlbtn arrow-r is-sp">一覧を見る</a>
    </div>
  </div>
</section>

<section id="shoplist">
  <div class="wrap">
    <h3 class="cl-b">SHOP LIST<span class="subttl">店舗一覧</span></h3>
    <a href="<?php echo home_url(); ?>/info" class="dtlbtn arrow-r is-pc">店舗一覧はこちら</a>
  </div>
  <ul class="slslider">
      <!-- スライダー画像 -->
      <?php
      $args = array(
        'post_type' => 'shop',
        'posts_per_page' => '-1',
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $slider_query2 = new WP_Query( $args );
      ?>
      <?php if ( $slider_query2->have_posts() ): ?>
        <?php while ( $slider_query2->have_posts() ) : $slider_query2->the_post();?>
            <?php if(get_field('s-logo')){ ?>
              <li>
								<div class="inner">
                  <img src="<?php echo get_field('s-logo'); ?>" alt="<?php echo get_the_title(); ?>">
								</div>
              </li>
            <?php } ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <?php endif; ?>
  </ul>
</section>

<section id="accessmap">
  <div class="wrap">
    <h3 class="cl-b">ACCESS MAP<span class="subttl">アクセスマップ</span></h3>
  </div>
	<div class="mapArea">
	  <div id="map_canvas"></div>
		<div class="accdtl">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/top/mapimg01.png">
			<div class="about">
				<div class="mlogo is-pc"><img src="<?php bloginfo('template_directory'); ?>/assets/img/top/maplogo.png"></div>
				<p>〒811-4184<br>福岡県宗像市くりえいと2丁目3-1</p>
				<a href="<?php echo home_url(); ?>/access" class="dtlbtn arrow-r">交通アクセス</a>
			</div>
		</div>
	</div>
</section>
</div>
</main>
<footer>
  <div class="wrap clearfix">
    <div class="l-cont is-pc">
      <div class="flogo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/flogo.png" alt="くりえいと宗像"></div>
      <p class="address">〒811-4184<br>福岡県宗像市くりえいと2丁目3-1</p>
      <p class="tel">0940-38-8100</p>
    </div>
    <div class="r-cont">
      <div class="upper is-pc">
        <div class="fnav">
          <p><a href="<?php echo home_url(); ?>/info">店舗一覧</a></p>
          <ul>
            <li><a href="<?php echo home_url(); ?>/shop_category/gourmet">グルメ</a></li>
            <li><a href="<?php echo home_url(); ?>/shop_category/fashion/">ファッション</a></li>
            <li><a href="<?php echo home_url(); ?>/shop_category/entertainment/">エンタメ・学び</a></li>
            <li><a href="<?php echo home_url(); ?>/shop_category/life/">生活</a></li>
            <li><a href="<?php echo home_url(); ?>/shop_category/medical/">医療</a></li>
          </ul>
        </div>
        <div class="fnav">
          <p><a href="<?php echo home_url(); ?>/shoplist">施設案内</a></p>
          <ul>
            <li><a href="<?php echo home_url(); ?>/time">営業時間</a></li>
            <li><a href="<?php echo home_url(); ?>/access">交通アクセス</a></li>
            <!--<li><a href="#">wifi 対応店舗</a></li>
            <li><a href="#">小さなお子様をお連れのお客様へ</a></li>
            <li><a href="#">よくあるご質問</a></li>-->
          </ul>
        </div>
        <div class="fnav">
          <p><a href="<?php echo home_url(); ?>/news">新着情報</a></p>
          <p><a href="<?php echo home_url(); ?>/event">イベント情報</a></p>
        </div>
        <div class="fnav">
          <p><a href="<?php echo home_url(); ?>/aboutus">会社概要</a></p>
          <ul>
            <li><a href="<?php echo home_url(); ?>/concepts">施設コンセプト</a></li>
            <li><a href="<?php echo home_url(); ?>/open">出店案内</a></li>
            <li><a href="<?php echo home_url(); ?>/adoption">採用情報</a></li>
            <li><a href="<?php echo home_url(); ?>/privacypolicy/">プライバシーポリシー</a></li>
            <li><a href="<?php echo home_url(); ?>/user_terms/">免責事項</a></li>
          </ul>
        </div>
      </div>
      <div class="lower">
        <div class="fbanner clearfix">
          <p><a href="http://www.city.munakata.lg.jp/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/munakata.png" alt="宗像市"></a></p>
          <p><a href="http://www.create-munakata.co.jp/grandwork/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/fbanner02.png" alt="くりえいと宗像フェイスブック"></a></p>
          <p><a href="https://www.facebook.com/create.munakata" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/fbanner01.png" alt="NPO法人グランドワーク宗像"></a></p>
        </div>
      </div>
    </div>
  </div>
  <p class="copyright">Copyright (C) 2018 CREATE MUNAKATA , All Rights Reserved</p>
</footer>

</div>
<!-- javascripts: Base -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0XiWuWDhDWW9iNbKa-_1kHGW0VoJ7_1g"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/common.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/mapstyle.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jQueryAutoHeight.js"></script>

<noscript>
<div class="noscript" id="noscript">
    <div class="content">
        当サイトを最適な状態で閲覧していただくにはブラウザの<span>JavaScriptを有効</span>にしてご利用下さい。<br />
        JavaScriptを無効のままご覧いただいた場合には一部機能がご利用頂けない場合や正しい情報を取得できない場合がございます。
    </div>
</div>
</noscript><!-- /noscript -->

<?php wp_footer(); ?>
</body>
</html>
