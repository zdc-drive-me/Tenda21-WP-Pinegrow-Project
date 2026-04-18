<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/facilitator-hero',
            'title' => __( 'Facilitator Hero', 'tenda21' ),
            'description' => __( 'Hero section for a single Facilitator page. Shows photo, name, role label, and long bio (post content).', 'tenda21' ),
            'category' => 'tenda21_facilitator',
            'render_template' => 'blocks/facilitator-hero/facilitator-hero.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/facilitator-hero/facilitator-hero.js',
            'attributes' => array(
                'back_link_label' => array(
                    'type' => array('string', 'null'),
                    'default' => '← All Facilitators'
                )
            ),
            'example' => array(
'back_link_label' => '← All Facilitators'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
