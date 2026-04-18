<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/event-row',
            'title' => __( 'Event Row', 'tenda21' ),
            'description' => __( 'Single event row with thumbnail, facilitators, schedule, and booking metadata.', 'tenda21' ),
            'category' => 'tenda21_event',
            'render_template' => 'blocks/event-row/event-row.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/event-row/event-row.js',
            'attributes' => array(
                'event_featured' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80', 'size' => '', 'svg' => '', 'alt' => null)
                ),
                'event_experience' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
                ),
                'event_location_type' => array(
                    'type' => array('string', 'null'),
                    'default' => 'On-site'
                ),
                'event_excerpt' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Three days of contemplative silence, mindful movement, and nature-based ritual held in a small circle.'
                ),
                'event_location' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Serra da Estrela · Portugal'
                ),
                'event_start_date' => array(
                    'type' => array('string', 'null'),
                    'default' => '12 April 2024'
                ),
                'event_start_time' => array(
                    'type' => array('string', 'null'),
                    'default' => '09:00'
                ),
                'event_end_date' => array(
                    'type' => array('string', 'null'),
                    'default' => '14 April 2024'
                ),
                'event_end_time' => array(
                    'type' => array('string', 'null'),
                    'default' => '14:00'
                ),
                'event_price_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Investment'
                ),
                'event_price' => array(
                    'type' => array('string', 'null'),
                    'default' => '€420'
                ),
                'event_booking_status' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Few seats left'
                ),
                'event_booking' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
                )
            ),
            'example' => array(
'event_featured' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80', 'size' => '', 'svg' => '', 'alt' => null), 'event_experience' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => ''), 'event_location_type' => 'On-site', 'event_excerpt' => 'Three days of contemplative silence, mindful movement, and nature-based ritual held in a small circle.', 'event_location' => 'Serra da Estrela · Portugal', 'event_start_date' => '12 April 2024', 'event_start_time' => '09:00', 'event_end_date' => '14 April 2024', 'event_end_time' => '14:00', 'event_price_label' => 'Investment', 'event_price' => '€420', 'event_booking_status' => 'Few seats left', 'event_booking' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
