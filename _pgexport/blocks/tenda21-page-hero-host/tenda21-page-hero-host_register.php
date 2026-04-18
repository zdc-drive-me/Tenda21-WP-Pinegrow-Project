<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/tenda21-page-hero-host',
            'title' => __( 'Page Hero Host', 'tenda21' ),
            'description' => __( 'Hero section for the A Anfitriã host page', 'tenda21' ),
            'category' => 'tenda21_host',
            'render_template' => 'blocks/tenda21-page-hero-host/tenda21-page-hero-host.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/tenda21-page-hero-host/tenda21-page-hero-host.js',
            'attributes' => array(
                'hero_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'A Anfitriã'
                ),
                'hero_subtitle' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Sobre quem sustenta a casa'
                )
            ),
            'example' => array(
'hero_title' => 'A Anfitriã', 'hero_subtitle' => 'Sobre quem sustenta a casa'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
