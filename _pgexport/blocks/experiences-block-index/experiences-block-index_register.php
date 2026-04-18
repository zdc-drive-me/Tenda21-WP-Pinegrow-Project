<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experiences-block-index',
            'title' => __( 'Experiences Grid Home', 'tenda21' ),
            'description' => __( 'Immersions section with three experience cards', 'tenda21' ),
            'render_template' => 'blocks/experiences-block-index/experiences-block-index.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experiences-block-index/experiences-block-index.js',
            'attributes' => array(
                'section_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Immersions'
                ),
                'card1_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Silent Immersion'
                ),
                'card1_description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Three days of noble silence. Guided meditation, mindful movement, and contemplative practices. Learn to hear the voice beneath the noise.'
                ),
                'card1_duration' => array(
                    'type' => array('string', 'null'),
                    'default' => '3–5 Days'
                ),
                'card2_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Nature Practice'
                ),
                'card2_description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Forest bathing, wild foraging, earth-based rituals. Restore your relationship with the living world. Remember that you are nature, not separate from it.'
                ),
                'card2_duration' => array(
                    'type' => array('string', 'null'),
                    'default' => '4–7 Days'
                ),
                'card3_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Creative Retreat'
                ),
                'card3_description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Write, draw, make. Creativity flows when the mind quiets. Supported by gentle structure, ample solitude, and evening gatherings around the fire.'
                ),
                'card3_duration' => array(
                    'type' => array('string', 'null'),
                    'default' => '5–10 Days'
                )
            ),
            'example' => array(
'section_title' => 'Immersions', 'card1_title' => 'Silent Immersion', 'card1_description' => 'Three days of noble silence. Guided meditation, mindful movement, and contemplative practices. Learn to hear the voice beneath the noise.', 'card1_duration' => '3–5 Days', 'card2_title' => 'Nature Practice', 'card2_description' => 'Forest bathing, wild foraging, earth-based rituals. Restore your relationship with the living world. Remember that you are nature, not separate from it.', 'card2_duration' => '4–7 Days', 'card3_title' => 'Creative Retreat', 'card3_description' => 'Write, draw, make. Creativity flows when the mind quiets. Supported by gentle structure, ample solitude, and evening gatherings around the fire.', 'card3_duration' => '5–10 Days'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
