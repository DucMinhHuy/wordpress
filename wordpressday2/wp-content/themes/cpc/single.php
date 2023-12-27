<?php
$category_templates = array(
    'about' => 'page-about',
    'business' => 'page-business',
    'enterprise' => 'page-enterprise',
);

$category = get_the_category(); 

if (!empty($category) && isset($category_templates[$category[0]->slug])) {
    get_template_part($category_templates[$category[0]->slug]);
} else {
    get_template_part('default-template');
}
?>

