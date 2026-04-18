<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/upcoming-events',
            'title' => __( 'Upcoming Events', 'tenda21' ),
            'description' => __( 'Upcoming events/sessions for this Experience. Event CPT query loop to be wired in a later pass.', 'tenda21' ),
            'render_template' => 'blocks/upcoming-events/upcoming-events.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/upcoming-events/upcoming-events.js',
            'attributes' => array(
                'event_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Weekly Experience Circle'
                ),
                'event_description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Join us every Thursday evening for a guided journey in community.'
                ),
                'event_duration' => array(
                    'type' => array('string', 'null'),
                    'default' => '90 minutes'
                ),
                'event_spots' => array(
                    'type' => array('string', 'null'),
                    'default' => '15 per session'
                ),
                'event_date' => array(
                    'type' => array('string', 'null'),
                    'default' => 'TBA'
                ),
                'event_cta_url' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com', 'post_type' => '', 'title' => '')
                ),
                'event_cta_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Book Session'
                )
            ),
            'example' => array(
'event_title' => 'Weekly Experience Circle', 'event_description' => 'Join us every Thursday evening for a guided journey in community.', 'event_duration' => '90 minutes', 'event_spots' => '15 per session', 'event_date' => 'TBA', 'event_cta_url' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com', 'post_type' => '', 'title' => ''), 'event_cta_label' => 'Book Session'
            ),
            'dynamic' => true,
            'version' => '1.0.18'
        ) );
