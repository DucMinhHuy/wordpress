<?php
/*
Template Name: enterprise
*/
?>
<!doctype html>
<html lang="ja">

<head>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/meta.html"); ?>

	<title>企業情報｜CPCエナジー株式会社</title>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/css.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/other.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/gtm_head.html"); ?>

</head>

<body>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/gtm_body.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/header.html"); ?>


	<?php
    $posts_per_page = get_option('posts_per_page', 10);
    $page_id = get_the_ID();
    $args = array(
        'post_type' => 'page',
        'order' => 'DESC',
        'page_id' => $page_id,
        'posts_per_page' => $posts_per_page,
    );
    $page_query = new WP_Query($args);

    if ($page_query->have_posts()) :
        while ($page_query->have_posts()) : $page_query->the_post();
    ?>
    <?php echo get_the_content(); ?>
    <?php endwhile;
        wp_reset_postdata();
    else :
        ?>
        <p>no page "enterprise".</p>
    <?php endif; ?>



	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/footer.html"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/inc/js.html"); ?>

</body>

</html>
