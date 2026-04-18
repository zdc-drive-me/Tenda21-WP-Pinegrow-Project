<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/facilitator-hero-single',
            'title' => __( 'Facilitator Hero Single Page', 'tenda21' ),
            'description' => __( 'Hero section for a single Facilitator page. Shows back link, photo, name, role label, and long bio (post content).', 'tenda21' ),
            'render_template' => 'blocks/facilitator-hero-single/facilitator-hero-single.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/facilitator-hero-single/facilitator-hero-single.js',
            'attributes' => array(
                'facilitator_featured' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
                ),
                'title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Ana Silva'
                ),
                'facilitator_role_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Meditation &amp; Silence Practice'
                ),
                'post_content' => array(
                    'type' => array('string', 'null'),
                    'default' => '<p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700">Ana discovered meditation not in a monastery, but in the wreckage of burnout. Twenty years ago, after collapsing under the weight of an unsustainable career, she found her way to a ten-day Vipassana retreat. She went seeking relief. She found a life.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">Since then, Ana has studied with teachers across traditions—Theravada, Zen, and Insight Meditation—completing multiple long-term silent retreats and teacher training programs. But her real teacher, she says, is daily practice: the unglamorous work of showing up to the cushion every morning, regardless of mood or circumstance.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">Ana\'s teaching style is marked by clarity, kindness, and an absence of spiritual bypassing. She doesn\'t promise bliss or transcendence. She offers tools for being with what is—the pleasant, the unpleasant, and everything in between. Participants often describe her presence as both gentle and uncompromising, a rare combination that creates profound safety.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">When not guiding retreats, Ana lives quietly in Lisbon, where she maintains a small meditation sangha and works as a psychotherapist specializing in contemplative approaches to anxiety and trauma.</p>'
                )
            ),
            'example' => array(
'facilitator_featured' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null), 'title' => 'Ana Silva', 'facilitator_role_label' => 'Meditation &amp; Silence Practice', 'post_content' => '<p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700">Ana discovered meditation not in a monastery, but in the wreckage of burnout. Twenty years ago, after collapsing under the weight of an unsustainable career, she found her way to a ten-day Vipassana retreat. She went seeking relief. She found a life.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">Since then, Ana has studied with teachers across traditions—Theravada, Zen, and Insight Meditation—completing multiple long-term silent retreats and teacher training programs. But her real teacher, she says, is daily practice: the unglamorous work of showing up to the cushion every morning, regardless of mood or circumstance.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">Ana\'s teaching style is marked by clarity, kindness, and an absence of spiritual bypassing. She doesn\'t promise bliss or transcendence. She offers tools for being with what is—the pleasant, the unpleasant, and everything in between. Participants often describe her presence as both gentle and uncompromising, a rare combination that creates profound safety.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">When not guiding retreats, Ana lives quietly in Lisbon, where she maintains a small meditation sangha and works as a psychotherapist specializing in contemplative approaches to anxiety and trauma.</p>'
            ),
            'dynamic' => true,
            'version' => '1.0.18'
        ) );
