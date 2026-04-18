<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/main-navigation',
            'title' => __( 'Main Navigation', 'tenda21' ),
            'description' => __( 'Site header with logo and navigation links', 'tenda21' ),
            'render_template' => 'blocks/main-navigation/main-navigation.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/main-navigation/main-navigation.js',
            'attributes' => array(

            ),
            'example' => array(

            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
