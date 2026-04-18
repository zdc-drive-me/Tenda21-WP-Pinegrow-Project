<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/facilitators-grid',
            'title' => __( 'Facilitators Grid', 'tenda21' ),
            'description' => __( 'Archive section wrapper for the Facilitators CPT. Owns the grid layout and loop. Loop item: facilitator-card.', 'tenda21' ),
            'category' => 'tenda21_facilitator',
            'render_template' => 'blocks/facilitators-grid/facilitators-grid.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/facilitators-grid/facilitators-grid.js',
            'attributes' => array(
                'facilitator_permalink' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
                ),
                'facilitator_featured' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
                ),
                'title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Facilitator Name'
                ),
                'facilitator_role_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Role / Practice'
                ),
                'facilitator_short_bio' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Short facilitator bio.'
                )
            ),
            'example' => array(
'facilitator_permalink' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => ''), 'facilitator_featured' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null), 'title' => 'Facilitator Name', 'facilitator_role_label' => 'Role / Practice', 'facilitator_short_bio' => 'Short facilitator bio.'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
