<?php 
function assign_post_to_page($post_id) {
    if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) {
        return;
    }

    $post_types_to_pages = array(
        'post' => 'about',
        'post' => 'business',
        'post' => 'enterprise',
    );

    $post_type = get_post_type($post_id);

    if (array_key_exists($post_type, $post_types_to_pages)) {
        $page_slug = $post_types_to_pages[$post_type];
        $page_id = get_page_by_path($page_slug)->ID;
        wp_set_post_terms($post_id, $page_id, 'category', true);
    }
}

add_action('save_post', 'assign_post_to_page');
