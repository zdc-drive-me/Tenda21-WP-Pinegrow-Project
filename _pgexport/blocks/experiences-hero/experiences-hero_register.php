<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experiences-hero',
            'title' => __( 'Experiences Hero', 'tenda21' ),
            'description' => __( 'Intro/title section for the Experiences archive page. Contains page title and intro paragraph.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experiences-hero/experiences-hero.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experiences-hero/experiences-hero.js',
            'attributes' => array(
                'title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Experiences'
                ),
                'intro' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Each immersion is designed to guide you back to what matters most. Choose the path that calls to you—or let us help you find it.'
                )
            ),
            'example' => array(
'title' => 'Experiences', 'intro' => 'Each immersion is designed to guide you back to what matters most. Choose the path that calls to you—or let us help you find it.'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
