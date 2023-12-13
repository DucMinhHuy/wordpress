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
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-title-bg.png">
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
                            お知らせ
                        </h1>
                        <div class="c-pageTitle-en">NEWS</div>
                    </div>

                    <section class="l-section">
                        <div class="p-news__inner l-section__inner">
                            <div class="p-news-detail">
                                <div class="p-news-detail__wrap">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'order' => 'DESC',
                                );
                                $posts = get_posts($args);
                                ?>
                                    <div class="p-news-detail__head">
                                        <div class="p-news-detail__head__tag p-news-contents__list__item__text__tag">地域貢献</div>
                                        <h2 class="p-news-detail__head__title"><?php echo esc_html(get_the_title()); ?></h2>
                                    </div>
                                    <div class="p-news-detail__textarea">
                                        <p><?php echo wpautop(get_the_content()); ?></p>
                                        <p><a href="#test">aaaaa</a></p>
                                        <p><img src="<?php bloginfo('template_directory'); ?>/assets/images/topics_01.png"></p>
                                    </div>
                                <?php wp_reset_postdata(); ?>

                                    <div class="p-news-detail__button c-button --white02">
                                        <a href="#test" target="_blank" class="p-news-detail__button__link">
                                            <span class="myfont myfont-pdf"></span>
                                            <span>PDF版はこちら</span>
                                            <span class="myfont myfont-download"></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-news-detail__prev">
                                    <?php
                                        $previous_page = wp_get_referer();
                                        $back_url = $previous_page ? esc_url($previous_page) : esc_url(home_url('/'));
                                        ?>
                                    <a class="p-news-detail__prev__link" href="<?php echo $back_url; ?>">
                                        <div class="p-news-detail__prev__icon"><span class="myfont myfont-return"></span></div>
                                        <span class="p-news-detail__prev__text">一覧へ戻る</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>

            </main>

        </div>

    </div>



    <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/footer.html"); ?>


    <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/js.html"); ?>


</body>

</html>