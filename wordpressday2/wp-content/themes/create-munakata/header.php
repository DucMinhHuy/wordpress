<body>
<!-- header -->
<header class="globalheader clearfix">
	<div class="is-pc">
		<a href="<?php echo home_url(); ?>"><dl class="hlogo">
			<dt><h1><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/hlogo.png" height="100%" alt="福岡県,宗像市,複合,ショッピング,センター,くりえいと,宗像"></h1></dt>
			<dd>宗像市の未来(あす)を創造(クリエイト)<br>いき･イキ･生活 くりえいと宗像</dd>
		</dl></a>

		<div class="searchArea">
			<ul class="clearfix">
				<a href="<?php echo home_url(); ?>/info/"><li class="arrow-r">店舗一覧</li></a>
				<a href="<?php echo home_url(); ?>/access"><li class="arrow-r">アクセス</li></a>
				<!--<a href="<?php echo home_url(); ?>/shoplist"><li class="arrow-r">施設案内</li></a>-->
			</ul>
			<div class="searchbox">
				<?php get_search_form(); ?>
			</div>
		</div>
		<nav>
			<ul class="clearfix">
				<li><a href="<?php echo home_url(); ?>/shop_category/gourmet/"><div class="img"></div></a></li>
				<li><a href="<?php echo home_url(); ?>/shop_category/fashion/"><div class="img"></div></a></li>
				<li><a href="<?php echo home_url(); ?>/shop_category/entertainment/"><div class="img"></div></a></li>
				<li><a href="<?php echo home_url(); ?>/shop_category/life/"><div class="img"></div></a></li>
				<li><a href="<?php echo home_url(); ?>/shop_category/medical/"><div class="img"></div></a></li>
			</ul>
		</nav>
	</div>
	<div class="is-sp spheader clearfix">
		<div class="hlogo"><a href="<?php echo home_url(); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/hlogo.png" height="100%" alt="福岡県,宗像市,複合,ショッピング,センター,くりえいと,宗像">
		</a></div>
		<div class="accessBtn"><a href="<?php echo home_url(); ?>/access"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/spaccess.png" height="100%"></a></div>
		<div id="globalheadersp">
			<button type="button" class="btn_menu">
				<span class="bar bar1"></span>
				<span class="bar bar2"></span>
				<span class="bar bar3"></span>
			</button>
			<p>メニュー</p>
		</div>
		<div class="fnav">
			<div class="wrap">
				<ul>
					<li><a href="<?php echo home_url(); ?>/">トップ</a></li>
					<li><a class="navlink" href="<?php echo home_url(); ?>/shoplist">店舗一覧</a><a class="navmore"><span></span><span></span></a>
						<ul>
							<li><a class="arrow-r" href="<?php echo home_url(); ?>/shop_category/gourmet">グルメ</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/shop_category/fashion/">ファッション</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/shop_category/entertainment/">エンタメ・学び</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/shop_category/life/">生活</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/shop_category/medical/">医療</a></li>
						</ul>
					</li>
					<li><a href="<?php echo home_url(); ?>/info">施設案内</a><a class="navmore"><span></span><span></span></a>
						<ul>
							<li><a class="arrow-r" href="<?php echo home_url(); ?>/time">営業時間</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/access">交通アクセス</a></li>
	            <!--<li><a class="arrow-r" href="#">wifi 対応店舗</a></li>
	            <li><a class="arrow-r" href="#">小さなお子様をお連れのお客様へ</a></li>
	            <li><a class="arrow-r" href="#">よくあるご質問</a></li>-->
						</ul>
					</li>
					<li><a href="<?php echo home_url(); ?>/news">新着情報</a></li>
					<li><a href="<?php echo home_url(); ?>/event">イベント情報</a></li>
					<li><a href="<?php echo home_url(); ?>/aboutus">会社概要</a><a class="navmore"><span></span><span></span></a>
	          <ul>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/concepts">施設コンセプト</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/open">出店案内</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/adoption">採用情報</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/privacypolicy/">プライバシーポリシー</a></li>
	            <li><a class="arrow-r" href="<?php echo home_url(); ?>/user_terms/">免責事項</a></li>
	          </ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>

<main>
