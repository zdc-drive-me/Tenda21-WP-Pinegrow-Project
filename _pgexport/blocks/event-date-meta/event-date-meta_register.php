<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/event-date-meta',
            'title' => __( 'Event Date Meta', 'tenda21' ),
            'description' => __( 'Start and end date/time cluster for an Event', 'tenda21' ),
            'category' => 'tenda21_event',
            'render_template' => 'blocks/event-date-meta/event-date-meta.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/event-date-meta/event-date-meta.js',
            'attributes' => array(
                'starts_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Starts'
                ),
                'ends_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Ends'
                ),
                'timezone_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'GMT+1 · Serra da Estrela'
                )
            ),
            'example' => array(
'starts_label' => 'Starts', 'ends_label' => 'Ends', 'timezone_label' => 'GMT+1 · Serra da Estrela'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
