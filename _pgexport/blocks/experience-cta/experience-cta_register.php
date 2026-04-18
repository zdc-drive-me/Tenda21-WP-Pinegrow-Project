<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experience-cta',
            'title' => __( 'Experience CTA', 'tenda21' ),
            'description' => __( 'Booking call-to-action for a single Experience page. Supports custom booking note, CTA label, and CTA URL.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experience-cta/experience-cta.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experience-cta/experience-cta.js',
            'attributes' => array(
                'experience_booking_note' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Booking note or availability message.'
                ),
                'experience_cta_url' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com', 'post_type' => '', 'title' => '')
                ),
                'experience_cta_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Reserve Your Place'
                )
            ),
            'example' => array(
'experience_booking_note' => 'Booking note or availability message.', 'experience_cta_url' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com', 'post_type' => '', 'title' => ''), 'experience_cta_label' => 'Reserve Your Place'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
