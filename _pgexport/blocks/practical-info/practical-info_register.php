<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/practical-info',
            'title' => __( 'Practical Info', 'tenda21' ),
            'description' => __( 'Details section with location, accommodation, and inclusions', 'tenda21' ),
            'render_template' => 'blocks/practical-info/practical-info.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/practical-info/practical-info.js',
            'attributes' => array(
                'section_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Details'
                ),
                'location_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Location'
                ),
                'location_text' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Nestled in the foothills of Serra da Estrela, Portugal. Two hours from Porto, a world away from everywhere else.'
                ),
                'accommodation_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Accommodation'
                ),
                'accommodation_text' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Private canvas tents with wooden floors, linen bedding, and wood-burning stoves. Shared bathhouse with hot water and composting toilets.'
                ),
                'included_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'What\'s Included'
                ),
                'included_text' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Three seasonal vegetarian meals daily, guided practices, access to trails and natural swimming spots, herbal tea library, journal and pen.'
                ),
                'not_included_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Not Included'
                ),
                'not_included_text' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Your phone. (We lock them away on arrival. You\'ll thank us later.)'
                )
            ),
            'example' => array(
'section_label' => 'Details', 'location_heading' => 'Location', 'location_text' => 'Nestled in the foothills of Serra da Estrela, Portugal. Two hours from Porto, a world away from everywhere else.', 'accommodation_heading' => 'Accommodation', 'accommodation_text' => 'Private canvas tents with wooden floors, linen bedding, and wood-burning stoves. Shared bathhouse with hot water and composting toilets.', 'included_heading' => 'What\'s Included', 'included_text' => 'Three seasonal vegetarian meals daily, guided practices, access to trails and natural swimming spots, herbal tea library, journal and pen.', 'not_included_heading' => 'Not Included', 'not_included_text' => 'Your phone. (We lock them away on arrival. You\'ll thank us later.)'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
