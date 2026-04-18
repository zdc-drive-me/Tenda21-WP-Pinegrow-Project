<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experience-upcoming-events',
            'title' => __( 'Experience Upcoming Events', 'tenda21' ),
            'description' => __( 'Upcoming Events for the current Experience page. Loop id: upcoming-events. Requires pg_query_args filter in custom.php.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experience-upcoming-events/experience-upcoming-events.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experience-upcoming-events/experience-upcoming-events.js',
            'attributes' => array(
                'title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Event Title'
                ),
                'post_excerpt' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Short event excerpt.'
                ),
                'event_start_time' => array(
                    'type' => array('string', 'null'),
                    'default' => '00:00'
                ),
                'event_price' => array(
                    'type' => array('string', 'null'),
                    'default' => '€ —'
                ),
                'event_start_date' => array(
                    'type' => array('string', 'null'),
                    'default' => 'TBA'
                ),
                'event_booking_status' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Open'
                ),
                'event_booking' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
                )
            ),
            'example' => array(
'title' => 'Event Title', 'post_excerpt' => 'Short event excerpt.', 'event_start_time' => '00:00', 'event_price' => '€ —', 'event_start_date' => 'TBA', 'event_booking_status' => 'Open', 'event_booking' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
