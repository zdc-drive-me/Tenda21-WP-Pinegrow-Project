<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/events-hero',
            'title' => __( 'Events Hero', 'tenda21' ),
            'description' => __( 'Intro hero for the Events archive page with eyebrow label, title, and intro paragraph.', 'tenda21' ),
            'category' => 'tenda21_event',
            'render_template' => 'blocks/events-hero/events-hero.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/events-hero/events-hero.js',
            'attributes' => array(
                'events_eyebrow' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Monthly Agenda · 2026'
                ),
                'events_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Events &amp;<br><em class="italic text-clay-500">Immersions</em>'
                ),
                'events_intro' => array(
                    'type' => array('string', 'null'),
                    'default' => 'An editorial view of upcoming circles, retreats, and seasonal gatherings at Tenda 21. Each line tells you who is guiding, when it unfolds, and how to reserve your place.'
                ),
                'events_scroll_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Scroll'
                )
            ),
            'example' => array(
'events_eyebrow' => 'Monthly Agenda · 2026', 'events_title' => 'Events &amp;<br><em class="italic text-clay-500">Immersions</em>', 'events_intro' => 'An editorial view of upcoming circles, retreats, and seasonal gatherings at Tenda 21. Each line tells you who is guiding, when it unfolds, and how to reserve your place.', 'events_scroll_label' => 'Scroll'
            ),
            'dynamic' => true,
            'version' => '1.0.98'
        ) );
