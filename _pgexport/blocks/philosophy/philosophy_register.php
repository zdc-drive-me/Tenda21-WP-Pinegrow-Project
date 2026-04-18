<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/philosophy',
            'title' => __( 'Philosophy', 'tenda21' ),
            'description' => __( 'Philosophy section with a quote and descriptive paragraphs', 'tenda21' ),
            'render_template' => 'blocks/philosophy/philosophy.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/philosophy/philosophy.js',
            'attributes' => array(
                'quote' => array(
                    'type' => array('string', 'null'),
                    'default' => 'In the quiet,<br>we remember who we are.'
                ),
                'paragraph_1' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Tenda 21 is not an escape. It is a return—to presence, to the body, to the earth beneath our feet. Here, time moves differently. Days unfold without the relentless pulse of notifications, the weight of screens, the noise that drowns out our own thoughts.'
                ),
                'paragraph_2' => array(
                    'type' => array('string', 'null'),
                    'default' => 'We offer space. Not empty space, but space filled with birdsong, the smell of rain on stone, the texture of linen, the warmth of shared silence. Space to breathe fully. Space to listen. Space to simply be.'
                ),
                'paragraph_3' => array(
                    'type' => array('string', 'null'),
                    'default' => 'This is where you practice the art of living deliberately—where every moment is an invitation to arrive, again and again, in the only place we ever truly are: here, now.'
                )
            ),
            'example' => array(
'quote' => 'In the quiet,<br>we remember who we are.', 'paragraph_1' => 'Tenda 21 is not an escape. It is a return—to presence, to the body, to the earth beneath our feet. Here, time moves differently. Days unfold without the relentless pulse of notifications, the weight of screens, the noise that drowns out our own thoughts.', 'paragraph_2' => 'We offer space. Not empty space, but space filled with birdsong, the smell of rain on stone, the texture of linen, the warmth of shared silence. Space to breathe fully. Space to listen. Space to simply be.', 'paragraph_3' => 'This is where you practice the art of living deliberately—where every moment is an invitation to arrive, again and again, in the only place we ever truly are: here, now.'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
