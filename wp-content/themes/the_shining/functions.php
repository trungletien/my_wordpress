<?php
include_once(get_template_directory() . '/helper.php');
include_once(get_template_directory() . '/blocks.php');

add_filter('show_admin_bar', '__return_false');
// Register css and js of the page
function the_shining_theme_front_end_scripts()
{
    // Those files is at the header in the "template" folder
    wp_enqueue_style('mainCss', get_template_directory_uri() . '/assets/css/all.css');
    wp_enqueue_style('flickity-css', get_template_directory_uri() . '/node_modules/flickity/dist/flickity.min.css');
    wp_enqueue_style('normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');

    // Those files is at the footer in the "template" folder
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', [], '', true);
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.slim.min.js', [], '', true);
    wp_enqueue_script('flickity-js', get_template_directory_uri() . '/node_modules/flickity/dist/flickity.pkgd.min.js', [], '', true);
    wp_enqueue_script('allJs', get_template_directory_uri() . '/assets/js/all.js', [], '', true);
    wp_localize_script('allJs', 'the_shining_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'the_shining_theme_front_end_scripts');

// Register css and js of the page
function the_shining_theme_back_end_scripts()
{
    // Those files is at the header in the "template" folder
    wp_enqueue_style('mainCss', get_template_directory_uri() . '/assets/css/all.css');
    wp_enqueue_style('adminCss', get_template_directory_uri() . '/assets/css/admin.css');
    wp_enqueue_style('flickity-css', get_template_directory_uri() . '/node_modules/flickity/dist/flickity.min.css');
    wp_enqueue_style('normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');

    // Those files is at the footer in the "template" folder
    wp_enqueue_script('flickity-js', get_template_directory_uri() . '/node_modules/flickity/dist/flickity.pkgd.min.js', [], '', true);
    wp_enqueue_script('allJs', get_template_directory_uri() . '/assets/js/all.js', [], '', true);
    wp_localize_script('allJs', 'the_shining_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'the_shining_theme_back_end_scripts');

add_filter('block_categories_all', function ($categories) {

    // Adding a new category.
    $categories[] = array(
        'slug'  => 'the-shining-blocks',
        'title' => 'The shining blocks'
    );

    return $categories;
});
