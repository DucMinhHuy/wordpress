<?php
function notication_register_block_patterns() {
    $block_pattern_categories = array(
        'header' => array('label' => __('Headers', 'notication')),
    );
    $block_pattern_categories = apply_filters('notication_block_pattern_categories', $block_pattern_categories);
    foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
    $block_patterns = array( 
        'header-default',
    );
    $block_patterns = apply_filters('notication_block_patterns', $block_patterns);
    foreach($block_patterns as $block_pattern) {
        $pattern_file = get_theme_file_path('/inc/patterns/'.$block_pattern.'php');
        register_block_pattern(
            'notication/'.$block_pattern,
            require $pattern_file
        );
    }
}
add_action('init', 'notication_register_block_patterns',9);
