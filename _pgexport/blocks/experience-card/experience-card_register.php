<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experience-card',
            'title' => __( 'Experience Card', 'tenda21' ),
            'description' => __( 'Archive card for a single Experience. Shows featured image, category label, title, and short description. Used inside the experiences-grid loop.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experience-card/experience-card.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experience-card/experience-card.js',
            'attributes' => array(
                'experience_permalink' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
                ),
                'experience_featured' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
                ),
                'experience_category_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Category'
                ),
                'title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Experience Title'
                ),
                'experience_short_description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Short description of this experience.'
                )
            ),
            'example' => array(
'experience_permalink' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => ''), 'experience_featured' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null), 'experience_category_label' => 'Category', 'title' => 'Experience Title', 'experience_short_description' => 'Short description of this experience.'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
