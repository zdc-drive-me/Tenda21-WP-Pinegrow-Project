<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experience-hero',
            'title' => __( 'Experience Hero', 'tenda21' ),
            'description' => __( 'Hero section for a single Experience page. Shows back link, title, subtitle, intro, duration, format, and featured image.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experience-hero/experience-hero.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experience-hero/experience-hero.js',
            'attributes' => array(
                'back_link_label' => array(
                    'type' => array('string', 'null'),
                    'default' => '← All Experiences'
                ),
                'duration_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Duration'
                ),
                'format_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Format'
                )
            ),
            'example' => array(
'back_link_label' => '← All Experiences', 'duration_label' => 'Duration', 'format_label' => 'Format'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
