<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/facilitator-specialties',
            'title' => __( 'Facilitator Specialties', 'tenda21' ),
            'description' => __( 'Areas of expertise tag cloud for a Facilitator page. Maps to facilitator_specialties SCF field.', 'tenda21' ),
            'category' => 'tenda21_facilitator',
            'render_template' => 'blocks/facilitator-specialties/facilitator-specialties.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/facilitator-specialties/facilitator-specialties.js',
            'attributes' => array(
                'facilitator_specialties' => array(
                    'type' => array('string', 'null'),
                    'default' => '<span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty One</span> <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty Two</span> <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty Three</span>'
                )
            ),
            'example' => array(
'facilitator_specialties' => '<span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty One</span> <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty Two</span> <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty Three</span>'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
