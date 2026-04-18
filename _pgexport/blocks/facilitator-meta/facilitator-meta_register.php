<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/facilitator-meta',
            'title' => __( 'Facilitator Meta', 'tenda21' ),
            'description' => __( 'Meta row for a Facilitator page. Shows languages, website, and Instagram links.', 'tenda21' ),
            'category' => 'tenda21_facilitator',
            'render_template' => 'blocks/facilitator-meta/facilitator-meta.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/facilitator-meta/facilitator-meta.js',
            'attributes' => array(
                'languages_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Languages'
                ),
                'website_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Website'
                ),
                'instagram_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Instagram'
                )
            ),
            'example' => array(
'languages_label' => 'Languages', 'website_label' => 'Website', 'instagram_label' => 'Instagram'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
