<?php
include_once(get_template_directory() . '/helper.php');

// Register css and js of the page
function the_shining_scripts()
{
    // Those files is at the header in the "template" folder
    wp_enqueue_style('mainCss', get_template_directory_uri() . '/assets/css/all.css');

    // Those files is at the footer in the "template" folder
    wp_enqueue_script('allJs', get_template_directory_uri() . '/assets/js/all.js', [], '', true);
    wp_localize_script('allJs', 'the_shining_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'the_shining_scripts');