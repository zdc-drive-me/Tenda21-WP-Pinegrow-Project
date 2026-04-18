<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/events-schedule',
            'title' => __( 'Events Schedule', 'tenda21' ),
            'description' => __( 'Events listing section with schedule header and event cards', 'tenda21' ),
            'render_template' => 'blocks/events-schedule/events-schedule.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/events-schedule/events-schedule.js',
            'attributes' => array(
                'schedule_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Upcoming Schedule'
                ),
                'schedule_meta' => array(
                    'type' => array('string', 'null'),
                    'default' => 'All times · Serra da Estrela, Portugal · GMT+1'
                ),
                'feature_image' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1476611317561-60117649dd94?w=800&h=700&fit=crop&crop=center', 'size' => '', 'svg' => '', 'alt' => 'Fire circle gathering')
                ),
                'image_caption' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Tenda 21 · May'
                ),
                'event_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Fire Circle Gathering'
                ),
                'event_type' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Remote'
                ),
                'date_start' => array(
                    'type' => array('string', 'null'),
                    'default' => '03 May 2026 · 18:00'
                ),
                'date_end' => array(
                    'type' => array('string', 'null'),
                    'default' => '03 May 2026 · 22:00'
                ),
                'event_description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Voices weave across continents for an evening of song, prayer, and story held around the hearth at Tenda 21.'
                ),
                'location' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Zoom · Link shared after booking'
                ),
                'atmosphere' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Sliding scale · €45–€75'
                ),
                'price_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Contribution'
                ),
                'price' => array(
                    'type' => array('string', 'null'),
                    'default' => '€65'
                ),
                'booking_status' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Open seats'
                ),
                'cta_url' => array(
                    'type' => array('string', 'null'),
                    'default' => ''
                ),
                'cta_text' => array(
                    'type' => array('string', 'null'),
                    'default' => 'RSVP'
                )
            ),
            'example' => array(
'schedule_label' => 'Upcoming Schedule', 'schedule_meta' => 'All times · Serra da Estrela, Portugal · GMT+1', 'feature_image' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1476611317561-60117649dd94?w=800&h=700&fit=crop&crop=center', 'size' => '', 'svg' => '', 'alt' => 'Fire circle gathering'), 'image_caption' => 'Tenda 21 · May', 'event_title' => 'Fire Circle Gathering', 'event_type' => 'Remote', 'date_start' => '03 May 2026 · 18:00', 'date_end' => '03 May 2026 · 22:00', 'event_description' => 'Voices weave across continents for an evening of song, prayer, and story held around the hearth at Tenda 21.', 'location' => 'Zoom · Link shared after booking', 'atmosphere' => 'Sliding scale · €45–€75', 'price_label' => 'Contribution', 'price' => '€65', 'booking_status' => 'Open seats', 'cta_url' => '', 'cta_text' => 'RSVP'
            ),
            'dynamic' => true,
            'version' => '1.0.18'
        ) );
