<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experience-content',
            'title' => __( 'Experience Content', 'tenda21' ),
            'description' => __( 'Editorial middle section for a single Experience page. Contains What to Expect, Benefits, and Who This Is For subsections.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experience-content/experience-content.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experience-content/experience-content.js',
            'attributes' => array(
                'expectations_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'What to Expect'
                ),
                'benefits_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Benefits'
                ),
                'audience_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Who This Is For'
                )
            ),
            'example' => array(
'expectations_label' => 'What to Expect', 'benefits_label' => 'Benefits', 'audience_label' => 'Who This Is For'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
