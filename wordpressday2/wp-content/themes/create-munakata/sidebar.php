<?php
/* 内部文字エンコーディングをUTF-8に設定 */
mb_internal_encoding("UTF-8");
?>

<div id="sidebar">
  <h2>店舗一覧</h2>
  <?php
  $terms = get_the_terms($post->ID,'shop_category');
  foreach( $terms as $term ) {
    $term_slug = $term->slug; // スラッグ
  }
  ?>
  <div class="cate_img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/<?php echo $term_slug; ?>.png"></div>

  <ul class="slist clearfix">
    <?php
    $args = array(
      'taxonomy' => 'shop_category',
      'posts_per_page' => '-1',
      'term' => $term_slug,
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC'
    );
    $shop_query = new WP_Query( $args );
    if ( $shop_query->have_posts() ):
    while ( $shop_query->have_posts() ) : $shop_query->the_post();
    ?>
    <?php if(get_field('s-sunlive') == false && get_field('s-not-detail') == false){?>
    <li><a class="arrow-r" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php } ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

  </ul>
  <ul class="sbanner clearfix">
    <li><a href="<?php echo home_url(); ?>/open"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner02.png" alt="出店について"></li>
    <li><a href="<?php echo home_url(); ?>/sunlive"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner03.png" alt="サンリブ"></li>
    <li><a href="<?php echo home_url(); ?>/access"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner04.png" alt="採用情報"></li>
    <li><a href="<?php echo home_url(); ?>/time"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner01.png" alt="出店について"></li>
    <li><a href="https://www.facebook.com/create.munakata" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner05.png" alt="サンリブ"></li>
    <li><a href="https://twitter.com/create_munakata?lang=ja" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/common/sidebanner06.png" alt="採用情報"></li>
  </ul>
</div>
