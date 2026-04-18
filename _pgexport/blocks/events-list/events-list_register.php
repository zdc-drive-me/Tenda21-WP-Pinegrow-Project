<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/events-list',
            'title' => __( 'Events List', 'tenda21' ),
            'description' => __( 'Archive wrapper for the Events CPT loop. Provides schedule header and loop container. Loop id: events-schedule.', 'tenda21' ),
            'category' => 'tenda21_event',
            'render_template' => 'blocks/events-list/events-list.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/events-list/events-list.js',
            'attributes' => array(
                'events_schedule_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Upcoming Schedule'
                ),
                'events_timezone_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'All times · Serra da Estrela, Portugal · GMT+1'
                )
            ),
            'example' => array(
'events_schedule_label' => 'Upcoming Schedule', 'events_timezone_label' => 'All times · Serra da Estrela, Portugal · GMT+1'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
