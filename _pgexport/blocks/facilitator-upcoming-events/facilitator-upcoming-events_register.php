<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/facilitator-upcoming-events',
            'title' => __( 'Facilitator Upcoming Events', 'tenda21' ),
            'description' => __( 'Upcoming Events connected to the current Facilitator via event_facilitators relationship field. Requires pg_query_args filter in custom.php.', 'tenda21' ),
            'category' => 'tenda21_facilitator',
            'render_template' => 'blocks/facilitator-upcoming-events/facilitator-upcoming-events.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/facilitator-upcoming-events/facilitator-upcoming-events.js',
            'attributes' => array(
                'section_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Upcoming Sessions'
                ),
                'event_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Event'
                ),
                'start_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Start'
                ),
                'end_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'End'
                ),
                'format_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Format'
                ),
                'location_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Location'
                ),
                'price_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Price'
                ),
                'status_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Status'
                ),
                'cta_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Register'
                ),
                'empty_state_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'No upcoming sessions for this facilitator yet.'
                )
            ),
            'example' => array(
'section_heading' => 'Upcoming Sessions', 'event_label' => 'Event', 'start_label' => 'Start', 'end_label' => 'End', 'format_label' => 'Format', 'location_label' => 'Location', 'price_label' => 'Price', 'status_label' => 'Status', 'cta_label' => 'Register', 'empty_state_label' => 'No upcoming sessions for this facilitator yet.'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
