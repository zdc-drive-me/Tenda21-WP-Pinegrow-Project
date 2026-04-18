<?php

        PG_Blocks_v4::register_block_type( array(
            'name' => 'tenda21/tenda21-host-profile',
            'title' => __( 'Host Profile', 'tenda21' ),
            'description' => __( 'Portrait image and bio for the host', 'tenda21' ),
            'category' => 'tenda21_host',
            'render_template' => 'blocks/tenda21-host-profile/tenda21-host-profile.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/tenda21-host-profile/tenda21-host-profile.js',
            'attributes' => array(
                'portrait_image' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1649976128988-3af35adda2d7?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDExfHxhc3NldHMlMkZzJTJGaG9zdCUyMHBvcnRyYWl0fGVufDB8fHx8MTc3MzE3NDAzMnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop', 'size' => '', 'svg' => '', 'alt' => 'Retrato da anfitriã')
                ),
                'figure_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'A anfitriã'
                ),
                'bio_p1' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Sempre fui movida por encontros. Pelo desejo de abrir a casa, reunir pessoas e cuidar do espaço que as recebe, para que se sintam bem. Há algo simples e bonito nesse gesto.'
                ),
                'bio_p2' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Venho das artes e da fotografia, onde aprendi a afinar a sensibilidade e o olhar, a perceber nuances e a reconhecer o que é essencial. Nasci no Brasil e ainda jovem fui viver na Itália. Essa travessia me ensinou a me reinventar e a receber o mundo com outros olhos. Com o tempo, fui me aproximando de estudos e práticas que ampliam a percepção e aprofundam a escuta. Não como teoria, mas como caminho vivido. Aos poucos, esse modo de viver foi pedindo forma.'
                ),
                'bio_p3' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Foi assim que a Tenda 21 começou a se revelar. Não como um plano, mas como uma continuidade espontânea&nbsp;do que sempre fiz naturalmente. Um espaço que reúne presença, integração e expansão, onde os encontros acontecem com verdade.'
                ),
                'bio_p4' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Aqui, meu papel não é conduzir. É sustentar. Convido facilitadores, organizo o ritmo da casa, preparo a mesa, cuido da atmosfera. A Tenda acolhe grupos pequenos, preservando a proximidade que sustenta a troca.'
                ),
                'pull_quote' => array(
                    'type' => array('string', 'null'),
                    'default' => '“Acolher é criar espaço para que o essencial apareça.”'
                )
            ),
            'example' => array(
'portrait_image' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1649976128988-3af35adda2d7?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDExfHxhc3NldHMlMkZzJTJGaG9zdCUyMHBvcnRyYWl0fGVufDB8fHx8MTc3MzE3NDAzMnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop', 'size' => '', 'svg' => '', 'alt' => 'Retrato da anfitriã'), 'figure_label' => 'A anfitriã', 'bio_p1' => 'Sempre fui movida por encontros. Pelo desejo de abrir a casa, reunir pessoas e cuidar do espaço que as recebe, para que se sintam bem. Há algo simples e bonito nesse gesto.', 'bio_p2' => 'Venho das artes e da fotografia, onde aprendi a afinar a sensibilidade e o olhar, a perceber nuances e a reconhecer o que é essencial. Nasci no Brasil e ainda jovem fui viver na Itália. Essa travessia me ensinou a me reinventar e a receber o mundo com outros olhos. Com o tempo, fui me aproximando de estudos e práticas que ampliam a percepção e aprofundam a escuta. Não como teoria, mas como caminho vivido. Aos poucos, esse modo de viver foi pedindo forma.', 'bio_p3' => 'Foi assim que a Tenda 21 começou a se revelar. Não como um plano, mas como uma continuidade espontânea&nbsp;do que sempre fiz naturalmente. Um espaço que reúne presença, integração e expansão, onde os encontros acontecem com verdade.', 'bio_p4' => 'Aqui, meu papel não é conduzir. É sustentar. Convido facilitadores, organizo o ritmo da casa, preparo a mesa, cuido da atmosfera. A Tenda acolhe grupos pequenos, preservando a proximidade que sustenta a troca.', 'pull_quote' => '“Acolher é criar espaço para que o essencial apareça.”'
            ),
            'dynamic' => true,
            'version' => '1.0.105'
        ) );
