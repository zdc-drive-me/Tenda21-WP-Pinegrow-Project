<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/event-hero',
            'title' => __( 'Event Hero', 'tenda21' ),
            'description' => __( 'Single Event hero with relationships, meta, and booking CTA', 'tenda21' ),
            'category' => 'tenda21_event',
            'render_template' => 'blocks/event-hero/event-hero.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/event-hero/event-hero.js',
            'attributes' => array(
                'back_link_label' => array(
                    'type' => array('string', 'null'),
                    'default' => '← Back to Events'
                ),
                'experience_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'from the Experience'
                ),
                'type_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Type'
                ),
                'location_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Location'
                ),
                'facilitated_by_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Facilitated by'
                ),
                'starts_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'From'
                ),
                'ends_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'To'
                ),
                'investment_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Investment'
                ),
                'booking_note' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Need a custom date or private immersion? Mention it in your note.'
                )
            ),
            'example' => array(
'back_link_label' => '← Back to Events', 'experience_label' => 'from the Experience', 'type_label' => 'Type', 'location_label' => 'Location', 'facilitated_by_label' => 'Facilitated by', 'starts_label' => 'From', 'ends_label' => 'To', 'investment_label' => 'Investment', 'booking_note' => 'Need a custom date or private immersion? Mention it in your note.'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
