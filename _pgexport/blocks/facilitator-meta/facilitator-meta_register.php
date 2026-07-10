<?php

        PG_Blocks_v7::register_block_type( array(
            'render_template' => 'blocks/facilitator-meta/facilitator-meta.php',
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'metadata_path' => __DIR__,
            'js_file' => 'blocks/facilitator-meta/facilitator-meta.js',
            'dynamic' => true,
            'version' => '1.0.121'
        ) );
