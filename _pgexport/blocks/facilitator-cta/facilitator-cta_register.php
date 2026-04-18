<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/facilitator-cta',
            'title' => __( 'Facilitator CTA', 'tenda21' ),
            'description' => __( 'Call-to-action section for the Facilitators page. Invites practitioners to get in touch via email.', 'tenda21' ),
            'category' => 'tenda21_facilitator',
            'render_template' => 'blocks/facilitator-cta/facilitator-cta.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/facilitator-cta/facilitator-cta.js',
            'attributes' => array(
                'facilitator_cta_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Are you a facilitator?'
                ),
                'facilitator_cta_body' => array(
                    'type' => array('string', 'null'),
                    'default' => 'We\'re always open to collaborating with practitioners who share our values of presence, integrity, and deep respect for the process of transformation.'
                ),
                'facilitator_cta_link' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com?subject=Facilitator%20Collaboration', 'post_type' => '', 'title' => '')
                )
            ),
            'example' => array(
'facilitator_cta_heading' => 'Are you a facilitator?', 'facilitator_cta_body' => 'We\'re always open to collaborating with practitioners who share our values of presence, integrity, and deep respect for the process of transformation.', 'facilitator_cta_link' => array('post_id' => 0, 'url' => 'mailto:hello@tenda21.com?subject=Facilitator%20Collaboration', 'post_type' => '', 'title' => '')
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
