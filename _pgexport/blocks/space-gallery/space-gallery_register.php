<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/space-gallery',
            'title' => __( 'Space Gallery', 'tenda21' ),
            'description' => __( 'Gallery showcasing the space with a heading and three images', 'tenda21' ),
            'render_template' => 'blocks/space-gallery/space-gallery.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/space-gallery/space-gallery.js',
            'attributes' => array(
                'section_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'The Space'
                ),
                'image_1' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
                ),
                'image_2' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
                ),
                'image_wide' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
                )
            ),
            'example' => array(
'section_title' => 'The Space', 'image_1' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null), 'image_2' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null), 'image_wide' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
