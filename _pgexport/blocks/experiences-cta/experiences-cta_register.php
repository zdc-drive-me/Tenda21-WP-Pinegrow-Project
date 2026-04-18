<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experiences-cta',
            'title' => __( 'Experiences CTA', 'tenda21' ),
            'description' => __( 'Custom inquiry call-to-action for the Experiences archive page. Supports editable heading, body copy, button label, and button URL.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experiences-cta/experiences-cta.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experiences-cta/experiences-cta.js',
            'attributes' => array(
                'experiences_cta_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Not sure which experience is right for you?'
                ),
                'experiences_cta_body' => array(
                    'type' => array('string', 'null'),
                    'default' => 'We also offer custom immersions for groups and individuals with specific intentions. Reach out and let\'s create something together.'
                ),
                'experiences_cta_url' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com?subject=Custom%20Experience%20Inquiry', 'post_type' => '', 'title' => '')
                ),
                'experiences_cta_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Inquire About Custom Retreats'
                )
            ),
            'example' => array(
'experiences_cta_heading' => 'Not sure which experience is right for you?', 'experiences_cta_body' => 'We also offer custom immersions for groups and individuals with specific intentions. Reach out and let\'s create something together.', 'experiences_cta_url' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com?subject=Custom%20Experience%20Inquiry', 'post_type' => '', 'title' => ''), 'experiences_cta_label' => 'Inquire About Custom Retreats'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
