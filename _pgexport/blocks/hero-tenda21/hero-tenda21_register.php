<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/hero-tenda21',
            'title' => __( 'Hero', 'tenda21' ),
            'description' => __( 'Main hero section with background image', 'tenda21' ),
            'render_template' => 'blocks/hero-tenda21/hero-tenda21.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/hero-tenda21/hero-tenda21.js',
            'attributes' => array(
                'background_image' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
                ),
                'title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Tenda 21'
                ),
                'subtitle' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Shelter for Presence'
                )
            ),
            'example' => array(
'background_image' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null), 'title' => 'Tenda 21', 'subtitle' => 'Shelter for Presence'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
