<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experience-facilitator',
            'title' => __( 'Experience Facilitator', 'tenda21' ),
            'description' => __( 'Facilitated By section for a single Experience page. Pulls facilitator image, role, short bio, and profile link from the experience_facilitator relationship field.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experience-facilitator/experience-facilitator.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experience-facilitator/experience-facilitator.js',
            'attributes' => array(
                'heading_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Facilitated By'
                ),
                'link_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'View Full Profile →'
                )
            ),
            'example' => array(
'heading_label' => 'Facilitated By', 'link_label' => 'View Full Profile →'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
