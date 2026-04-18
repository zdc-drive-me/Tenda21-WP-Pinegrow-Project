<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/experience-back-nav',
            'title' => __( 'Experience Back Navigation', 'tenda21' ),
            'description' => __( 'Bottom back-link for a single Experience page. Renders a centred \'← View All Experiences\' link pointing to the Experiences archive.', 'tenda21' ),
            'category' => 'tenda21_experience',
            'render_template' => 'blocks/experience-back-nav/experience-back-nav.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/experience-back-nav/experience-back-nav.js',
            'attributes' => array(

            ),
            'example' => array(

            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
