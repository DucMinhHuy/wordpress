<!doctype html>
<html lang="ja">

<head>

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/meta.html"); ?>

    <title>お知らせ | 西日本新聞社</title>

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/css.html"); ?>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/other.html"); ?>

</head>

<body>


    <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/header.html"); ?>

    <div class="l-contents -col--1">

        <div class="l-contents-detail">

            <main class="l-main">

                <div class="p-news">

                    <div class="c-pageTitle --info">
                        <div class="c-pageTitle-bg">
                            <img src="/assets/img/news/page-title-bg.png" alt="">
                        </div>
                        <ul class="c-pageTitle-breadcrumb">
                            <li class="c-pageTitle-breadcrumb__item">
                                <a href="/" class="c-pageTitle-breadcrumb__item__wrap">トップ</a>
                            </li>
                            <li class="c-pageTitle-breadcrumb__item">
                                <div class="c-pageTitle-breadcrumb__item__wrap">お知らせ</div>
                            </li>
                        </ul>
                        <h1 class="c-pageTitle-text">
                            <!-- <span class="c-pageTitle-text__sub">事業・サービス</span> -->
                            お知らせ
                        </h1>
                        <div class="c-pageTitle-en">NEWS</div>
                    </div>

                    <section class="l-section">
                        <div class="p-news__inner">
                            <div class="p-news-nav">
                                <ul class="p-news-nav__list">
                                    <li class="p-news-nav__list__item <?php echo empty($selected_year) ? 'is-active' : ''; ?>">
                                        <a href="<?php echo esc_url(remove_query_arg('selected_year')); ?>" class="p-news-nav__list__item__link">すべて</a>
                                    </li>
                                    <?php
                                    global $wpdb;
                                    $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC");

                                    foreach ($years as $year) :                                    
                                    ?>
                                        <li class="p-news-nav__list__item <?php echo ($year == $selected_year) ? 'is-active' : ''; ?>">
                                            <a href="<?php echo esc_url(add_query_arg('selected_year', $year)); ?>" class="p-news-nav__list__item__link"><?php echo esc_html($year); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="p-news-contents">
                                <ul class="p-news-contents__list">
                                    <?php
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $selected_year = isset($_GET['selected_year']) ? intval($_GET['selected_year']) : null;
									$posts_per_page = get_option('posts_per_page', 10);
									$args = array(
										'post_type'      => 'post',
										'order'          => 'DESC',
										'posts_per_page' => $posts_per_page,
										'paged'          => $paged,
									);

                                    if ($selected_year) {
                                        $args['date_query'] = array(
                                            array(
                                                'year' => $selected_year,
                                            ),
                                        );
                                    }
                                    $posts = new WP_Query($args);

                                    while ($posts->have_posts()) :
                                        $posts->the_post();
                                    ?>
                                        <li class="p-news-contents__list__item">
                                            <a href="<?php echo esc_url(get_permalink()); ?>" class="p-news-contents__list__item__wrap" >
                                                <time class="p-news-contents__list__item__wrap p-news-contents__list__item__date"><?php echo esc_html(get_the_date()); ?></time>
                                                <div class="p-news-contents__list__item__text">
                                                    <h3 class="p-news-contents__list__item__text__title"><?php echo esc_html(get_the_title()); ?></h3>
                                                    <div class="p-news-contents__list__item__text__tag list__item__text__tag"><?php echo get_the_category() ?></div>
                                                    <span class="myfont myfont-barred_arrow myfont__arrow__adjustment"></span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php wp_reset_postdata(); ?>
                            </div>

                            <br>
                            <div class="pagination pagination__fix">
                                <?php
                                $pagination_file = $_SERVER["DOCUMENT_ROOT"] . "/assets/inc/pagination.php";
                                if (file_exists($pagination_file)) {
                                    include($pagination_file);
                                }
                                ?>
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