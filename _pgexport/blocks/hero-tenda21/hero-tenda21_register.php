<?php

        PG_Blocks_v7::register_block_type( array(
            'render_template' => 'blocks/hero-tenda21/hero-tenda21.php',
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'metadata_path' => __DIR__,
            'js_file' => 'blocks/hero-tenda21/hero-tenda21.js',
            'dynamic' => true,
            'version' => '1.0.121'
        ) );
