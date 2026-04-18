<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/facilitators-hero',
            'title' => __( 'Facilitators Hero', 'tenda21' ),
            'description' => __( 'Intro/title section for the Facilitators archive page. Contains page title and intro paragraph.', 'tenda21' ),
            'category' => 'tenda21_facilitator',
            'render_template' => 'blocks/facilitators-hero/facilitators-hero.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/facilitators-hero/facilitators-hero.js',
            'attributes' => array(
                'title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Facilitators'
                ),
                'intro' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Each facilitator brings deep practice, embodied wisdom, and a genuine commitment to holding space for transformation. They are not teachers standing above—they are fellow travelers walking alongside.'
                )
            ),
            'example' => array(
'title' => 'Facilitators', 'intro' => 'Each facilitator brings deep practice, embodied wisdom, and a genuine commitment to holding space for transformation. They are not teachers standing above—they are fellow travelers walking alongside.'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
