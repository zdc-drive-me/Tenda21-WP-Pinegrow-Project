<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/cta-invitation',
            'title' => __( 'CTA Invitation', 'tenda21' ),
            'description' => __( 'Call to action section with a message and contact button', 'tenda21' ),
            'render_template' => 'blocks/cta-invitation/cta-invitation.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/cta-invitation/cta-invitation.js',
            'attributes' => array(
                'heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'When you\'re ready,<br>we\'re here.'
                ),
                'description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Retreats run year-round with limited capacity. Reach out to learn about upcoming dates or inquire about a custom immersion for your group.'
                ),
                'button_email' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Get in Touch'
                ),
                'button_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Get in Touch'
                )
            ),
            'example' => array(
'heading' => 'When you\'re ready,<br>we\'re here.', 'description' => 'Retreats run year-round with limited capacity. Reach out to learn about upcoming dates or inquire about a custom immersion for your group.', 'button_email' => 'Get in Touch', 'button_label' => 'Get in Touch'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
