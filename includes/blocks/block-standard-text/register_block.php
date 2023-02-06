<?php
acf_register_block_type(
    array(
        'name'				=> 'block-standard-text',
        'title'				=> __('Standard text', 'theme-domain'),
        'description'		=> __('Standard text', 'theme-domain'),
        'render_template'   => dirname(__FILE__) . '/block.php',
        'category'			=> 'layout',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'Tekst', 'text', 'standard' ),
        'mode'				=> 'edit'
    )
);