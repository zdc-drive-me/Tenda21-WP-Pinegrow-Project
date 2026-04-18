<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/footer',
            'title' => __( 'Footer', 'tenda21' ),
            'description' => __( 'Website footer with contact information, navigation and social links', 'tenda21' ),
            'render_template' => 'blocks/footer/footer.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/footer/footer.js',
            'attributes' => array(
                'address' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Serra da Estrela<br> 6260 Manteigas<br> Portugal'
                ),
                'phone' => array(
                    'type' => array('string', 'null'),
                    'default' => 'T: +351 275 000 000'
                ),
                'email' => array(
                    'type' => array('string', 'null'),
                    'default' => 'E: hello@tenda21.com'
                ),
                'btn_experiences_link' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => 'experiences.html', 'post_type' => '', 'title' => '')
                ),
                'btn_experiences_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Experiences'
                ),
                'btn_book_link' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com?subject=Booking%20Inquiry', 'post_type' => '', 'title' => '')
                ),
                'btn_book_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Book Now'
                ),
                'btn_support_link' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com?subject=Support%20Inquiry', 'post_type' => '', 'title' => '')
                ),
                'btn_support_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Support'
                ),
                'visit_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Visit Us'
                ),
                'social_ig' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => '')
                ),
                'social_fb' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => '')
                ),
                'nif' => array(
                    'type' => array('string', 'null'),
                    'default' => 'PT000000000'
                )
            ),
            'example' => array(
'address' => 'Serra da Estrela<br> 6260 Manteigas<br> Portugal', 'phone' => 'T: +351 275 000 000', 'email' => 'E: hello@tenda21.com', 'btn_experiences_link' => array('post_id' => 0, 'url' => 'experiences.html', 'post_type' => '', 'title' => ''), 'btn_experiences_label' => 'Experiences', 'btn_book_link' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com?subject=Booking%20Inquiry', 'post_type' => '', 'title' => ''), 'btn_book_label' => 'Book Now', 'btn_support_link' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com?subject=Support%20Inquiry', 'post_type' => '', 'title' => ''), 'btn_support_label' => 'Support', 'visit_heading' => 'Visit Us', 'social_ig' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => ''), 'social_fb' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => ''), 'nif' => 'PT000000000'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
