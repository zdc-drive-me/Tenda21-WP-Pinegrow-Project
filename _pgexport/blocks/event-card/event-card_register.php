<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/event-card',
            'title' => __( 'Event Card', 'tenda21' ),
            'description' => __( 'Individual event with feature image, dates, facilitators, and booking panel', 'tenda21' ),
            'render_template' => 'blocks/event-card/event-card.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/event-card/event-card.js',
            'attributes' => array(
                'feature_image' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1502082553048-f009c37129b9?w=800&h=700&fit=crop&crop=center', 'size' => '', 'svg' => '', 'alt' => 'Cedar forest at dawn')
                ),
                'image_caption' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Serra da Estrela · April'
                ),
                'event_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Silent Immersion Weekend'
                ),
                'event_type' => array(
                    'type' => array('string', 'null'),
                    'default' => 'On-site'
                ),
                'date_start' => array(
                    'type' => array('string', 'null'),
                    'default' => '12 Apr 2026 · 09:00'
                ),
                'date_end' => array(
                    'type' => array('string', 'null'),
                    'default' => '14 Apr 2026 · 14:00'
                ),
                'event_description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Three days of contemplative silence, mindful movement, and nature-based ritual held in a small circle amid cedar and stone.'
                ),
                'location' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Serra da Estrela · Portugal'
                ),
                'atmosphere' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Morning fog, cedar smoke, linen tents'
                ),
                'price_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Investment'
                ),
                'price' => array(
                    'type' => array('string', 'null'),
                    'default' => '€420'
                ),
                'booking_status' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Few seats left'
                ),
                'cta_url' => array(
                    'type' => array('string', 'null'),
                    'default' => ''
                ),
                'cta_text' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Book Your Place'
                )
            ),
            'example' => array(
'feature_image' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1502082553048-f009c37129b9?w=800&h=700&fit=crop&crop=center', 'size' => '', 'svg' => '', 'alt' => 'Cedar forest at dawn'), 'image_caption' => 'Serra da Estrela · April', 'event_title' => 'Silent Immersion Weekend', 'event_type' => 'On-site', 'date_start' => '12 Apr 2026 · 09:00', 'date_end' => '14 Apr 2026 · 14:00', 'event_description' => 'Three days of contemplative silence, mindful movement, and nature-based ritual held in a small circle amid cedar and stone.', 'location' => 'Serra da Estrela · Portugal', 'atmosphere' => 'Morning fog, cedar smoke, linen tents', 'price_label' => 'Investment', 'price' => '€420', 'booking_status' => 'Few seats left', 'cta_url' => '', 'cta_text' => 'Book Your Place'
            ),
            'dynamic' => true,
            'version' => '1.0.18'
        ) );
