<?php
add_action('acf/init', 'my_acf_init_blocks');
function my_acf_init_blocks() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a restricted block.
        acf_register_block_type(array(
            'name'              => 'homepage-carousel',
            'title'             => 'Homepage carousel',
            'description'       => 'This is a homepage carousel.',
            'category'          => 'the-shining-blocks',
            'mode'              => 'preview',
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
            'render_template' => 'components/homepage-carousel.php',
        ));
    }
}