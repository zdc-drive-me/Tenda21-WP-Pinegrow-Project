<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/event-booking-meta',
            'title' => __( 'Event Booking Meta', 'tenda21' ),
            'description' => __( 'Price, booking status and CTA for an Event', 'tenda21' ),
            'category' => 'tenda21_event',
            'render_template' => 'blocks/event-booking-meta/event-booking-meta.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/event-booking-meta/event-booking-meta.js',
            'attributes' => array(
                'investment_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Investment'
                ),
                'booking_note' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Need a custom date or private immersion? Mention it in your note.'
                ),
                'booking_cta_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Book Your Place'
                )
            ),
            'example' => array(
'investment_label' => 'Investment', 'booking_note' => 'Need a custom date or private immersion? Mention it in your note.', 'booking_cta_label' => 'Book Your Place'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
