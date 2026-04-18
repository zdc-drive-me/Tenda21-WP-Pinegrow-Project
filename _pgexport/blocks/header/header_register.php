<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/header',
            'title' => __( 'Header', 'tenda21' ),
            'description' => __( 'Site header with logo and navigation', 'tenda21' ),
            'render_template' => 'blocks/header/header.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/header/header.js',
            'attributes' => array(

            ),
            'example' => array(

            ),
            'dynamic' => true,
            'version' => '1.0.0'
        ) );
