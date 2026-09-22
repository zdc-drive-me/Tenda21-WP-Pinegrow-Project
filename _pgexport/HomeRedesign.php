<?php get_header(); ?>

        <!-- =========================================================
             FUTURE WORDPRESS BLOCK: main-navigation
             ========================================================= -->
        <header class="bg-white hidden px-5 relative site-main-nav z-30 md:px-8 lg:block lg:px-10">
            <div class="mx-auto max-w-[1600px]">
                <div class="flex h-[62px] items-center">
                    <!-- Logo -->
                    <a href="#" class="shrink-0" aria-label="Tenda 21"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/site logo.webp" alt="Tenda 21" class="h-[55px] w-[55px] object-contain"> </a>
                    <!-- Desktop navigation -->
                    <nav class="flex-1 hidden text-blue_tenda-600 lg:block" aria-label="Primary navigation">
                        <ul class="
                                mx-auto
                                flex
                                max-w-[1160px]
                                items-center
                                justify-between
                                px-10
                                font-sans
                                text-[11px]
                                font-light
                                uppercase
                                text-[#7899b1]
                            ">
                            <li>
                                <a href="#" class="transition-opacity hover:opacity-60"> <?php _e( 'A Tenda', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#" class="transition-opacity hover:opacity-60"> <?php _e( 'Experiências', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#" class="transition-opacity hover:opacity-60"> <?php _e( 'Facilitadores', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#" class="transition-opacity hover:opacity-60"> <?php _e( 'Calendário', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#" class="transition-opacity hover:opacity-60"> <?php _e( 'A Anfitriã', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#" class="transition-opacity hover:opacity-60"> <?php _e( 'Contato', 'tenda21' ); ?> </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Desktop language -->
                    <a href="#" class="font-sans font-light text-[11px] text-blue_tenda-900 uppercase ml-auto hidden lg:block"> <?php _e( 'EN-PT', 'tenda21' ); ?> </a>
                    <!-- Mobile trigger -->
                    <button type="button" class="
                            ml-auto
                            flex
                            items-center
                            gap-3
                            font-sans
                            text-xs
                            uppercase
                            tracking-[0.12em]
                            text-[#7899b1]
                            lg:hidden
                        " data-mobile-menu-toggle aria-expanded="false" aria-controls="mobile-menu">
                        <span data-mobile-menu-label> <?php _e( 'Menu', 'tenda21' ); ?> </span>
                        <span class="
                                relative
                                block
                                h-4
                                w-5
                            " aria-hidden="true"> <span class="
                                    absolute
                                    left-0
                                    top-1
                                    block
                                    h-px
                                    w-full
                                    bg-[#7899b1]
                                " data-mobile-menu-line="top"></span> <span class="
                                    absolute
                                    bottom-1
                                    left-0
                                    block
                                    h-px
                                    w-full
                                    bg-[#7899b1]
                                " data-mobile-menu-line="bottom"></span> </span>
                    </button>
                </div>
                <!-- Divider -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/menu_line_devider.webp" alt="" aria-hidden="true" class="block w-full object-fill" style="height: 15px;">
                <!-- =====================================================
                     MOBILE MENU PANEL
                     ===================================================== -->
                <div id="mobile-menu" class="
                        hidden
                        lg:hidden
                    " data-mobile-menu>
                    <nav class="
                            flex
                            flex-col
                            items-center
                            px-5
                            pb-10
                            pt-8
                            text-center
                        " aria-label="Mobile navigation">
                        <ul class="
                                flex
                                w-full
                                max-w-sm
                                flex-col
                                items-center
                                gap-6
                                font-sans
                                text-sm
                                font-light
                                uppercase
                                tracking-wide
                                text-[#7899b1]
                            ">
                            <li>
                                <a href="#"> <?php _e( 'A Tenda', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#"> <?php _e( 'Experiências', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#"> <?php _e( 'Facilitadores', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#"> <?php _e( 'Calendário', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#"> <?php _e( 'A Anfitriã', 'tenda21' ); ?> </a>
                            </li>
                            <li>
                                <a href="#"> <?php _e( 'Contato', 'tenda21' ); ?> </a>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="#" class="
                                    font-sans
                                    text-xs
                                    font-light
                                    uppercase
                                    tracking-wide
                                    text-[#7899b1]
                                "> <?php _e( 'EN-PT', 'tenda21' ); ?> </a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- =========================================================
             FUTURE WORDPRESS BLOCK: home-intro-composition
             ========================================================= -->
        <main>
            <section class="relative overflow-hidden bg-white">
                <!-- =====================================================
                     MOBILE + TABLET
                     ===================================================== -->
                <div class="mx-auto flex w-full max-w-3xl flex-col items-center px-5 pt-10 pb-14 md:px-8 md:pt-14 md:pb-20 lg:hidden">
                    <!-- Dragonfly -->
                    <div class="mb-12 flex w-full justify-center md:mb-16">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-dragonfly.webp" alt="" aria-hidden="true" class="h-auto w-24 md:w-56">
                    </div>
                    <!-- Text group -->
                    <div class="flex w-full max-w-xl flex-col items-center gap-12 text-center md:gap-16">
                        <!-- Text 1 -->
                        <div class="w-full">
                            <h1 class="font-light leading-snug text-base text-gray-900 tracking-tight"> <?php _e( 'Com o oceano no horizonte,', 'tenda21' ); ?><br> <?php _e( 'abre-se um espaço para o que é essencial.', 'tenda21' ); ?><br> <?php _e( 'Um espaço vivo de escuta e presença.', 'tenda21' ); ?> </h1>
                        </div>
                        <!-- Text 2 -->
                        <div class="w-full">
                            <h2 class="font-light leading-snug text-base text-gray-900 tracking-tight"> <?php _e( 'Criado para nutrir a reconexão com o corpo,', 'tenda21' ); ?><br> <?php _e( 'a leveza da respiração, a liberdade de sentir', 'tenda21' ); ?><br> <?php _e( 'e o encontro com o que é verdadeiro.', 'tenda21' ); ?> </h2>
                        </div>
                        <!-- Text 3 -->
                        <div class="w-full">
                            <h2 class="font-light leading-snug text-base text-gray-900 tracking-tight"> <?php _e( 'Um abrigo que recebe você.', 'tenda21' ); ?><br> <?php _e( 'Apenas respire. Chegue.', 'tenda21' ); ?><br> <?php _e( 'Deixe seu coração se abrir no seu tempo.', 'tenda21' ); ?><br> <?php _e( 'A alma sabe o caminho.', 'tenda21' ); ?> </h2>
                        </div>
                    </div>
                    <!-- Architecture -->
                    <figure class="mt-14 w-full pb-10 pt-20 md:mt-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/architecture-drawing.webp" alt="Tenda 21 architecture" class="block h-auto w-full object-contain">
                    </figure>
                    <!-- Decorative gesture -->
                    <div class="mt-10 hidden w-full justify-center md:mt-14 md:flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/traccia_per_testo.webp" alt="" aria-hidden="true" class="pointer-events-none h-auto w-2/3 object-contain md:w-1/2">
                    </div>
                    <!-- CTA -->
                    <div class="mt-8 flex justify-center md:mt-10">
                        <a href="#" class="inline-flex items-center justify-center rounded-full bg-blue_tenda-500 px-5 py-3 font-sans text-sm font-normal text-white no-underline transition-opacity hover:bg-sand_tenda-500 hover:opacity-80"> <?php _e( 'Conheça as experiências', 'tenda21' ); ?> </a>
                    </div>
                </div>
                <!-- =====================================================
                     DESKTOP
                     ===================================================== -->
                <div class="relative mx-auto hidden h-[700px] max-w-[1600px] lg:block">
                    <!-- Left decorative trace -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/traccia_per_testo.webp" alt="" aria-hidden="true" class="pointer-events-none absolute left-[-6%] top-[30%] z-0 w-[31%] max-w-none object-contain object-center">
                    <!-- Right decorative trace -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/traccia_per_home.webp" alt="" aria-hidden="true" class="pointer-events-none absolute left-[30%] top-[10%] z-[1] w-[34%] max-w-none object-contain">
                    <!-- Dragonfly -->
                    <div class="absolute
 z-20
 flex
 flex-col
 items-center
" style="
                            left: 50%;
                            top: 4%;
                            transform: translateX(-50%);
                        ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-dragonfly.webp" alt="" aria-hidden="true" style="width: 258.75px;">
                    </div>
                    <!-- Text group -->
                    <div class="absolute z-10 hidden lg:flex flex-col items-center justify-between text-center" style="
                            left: 16%;
                            top: 24%;
                            width: 440px;
                            height: 420px;
                        ">
                        <!-- Text 1 -->
                        <div class="w-full">
                            <h1 class="font-light leading-snug text-base text-gray-900 tracking-tight"> <?php _e( 'Com o oceano no horizonte,', 'tenda21' ); ?><br> <?php _e( 'abre-se um espaço para o que é essencial.', 'tenda21' ); ?><br> <?php _e( 'Um espaço vivo de escuta e presença.', 'tenda21' ); ?> </h1>
                        </div>
                        <!-- Text 2 -->
                        <div class="w-full">
                            <h2 class="font-light leading-snug text-base text-gray-900 tracking-tight"> <?php _e( 'Criado para nutrir a reconexão com o corpo,', 'tenda21' ); ?><br> <?php _e( 'a leveza da respiração, a liberdade de sentir', 'tenda21' ); ?><br> <?php _e( 'e o encontro com o que é verdadeiro.', 'tenda21' ); ?> </h2>
                        </div>
                        <!-- Text 3 -->
                        <div class="w-full">
                            <h2 class="font-light leading-snug text-base text-gray-900 tracking-tight"> <?php _e( 'Um abrigo que recebe você.', 'tenda21' ); ?><br> <?php _e( 'Apenas respire. Chegue.', 'tenda21' ); ?><br> <?php _e( 'Deixe seu coração se abrir no seu tempo.', 'tenda21' ); ?><br> <?php _e( 'A alma sabe o caminho.', 'tenda21' ); ?> </h2>
                        </div>
                    </div>
                    <!-- Architecture drawing -->
                    <figure class="absolute z-[5]
" style="
                            right: -2%;
                            top: 23%;
                            width: 43.5%;
                            margin: 0;
                        ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/architecture-drawing.webp" alt="Tenda 21 architecture" class="block h-auto object-contain w-full">
                    </figure>
                    <!-- CTA -->
                    <div style="
                            position: absolute;
                            left: 50%;
                            bottom: 28px;
                            transform: translateX(-50%);
                            z-index: 100;
                        ">
                        <a href="#" class="bg-blue_tenda-500 font-normal font-sans inline-flex items-center justify-center no-underline px-5 py-3 rounded-full text-sm text-white tracking-tighter transition-opacity hover:bg-sand_tenda-500 hover:opacity-80"> <?php _e( 'Conheça as experiências', 'tenda21' ); ?> </a>
                    </div>
                </div>
            </section>
        </main>
        <!-- =========================================================
             FUTURE WORDPRESS BLOCK: site-footer
             ========================================================= -->
        <footer class="hidden md:block site-footer-nav bg-white">
            <div class="mx-auto max-w-[1600px] px-5 md:px-8 lg:px-10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer devider.webp" alt="" aria-hidden="true" class="block h-[15px] w-full object-fill">
                <div class="mx-auto grid max-w-[1100px] grid-cols-1 gap-10 py-12 text-center sm:grid-cols-2 md:gap-12 lg:grid-cols-4 lg:py-16">
                    <!-- CONNECT -->
                    <div class="flex flex-col items-center">
                        <h2 class="mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500"> <?php _e( 'Connect', 'tenda21' ); ?> </h2>
                        <div class="flex flex-col items-center gap-3">
                            <a href="#" class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500"> <?php _e( 'Instagram', 'tenda21' ); ?> </a>
                            <a href="#" class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500"> <?php _e( 'WhatsApp', 'tenda21' ); ?> </a>
                        </div>
                    </div>
                    <!-- TENDA 21 -->
                    <div class="flex flex-col items-center">
                        <h2 class="mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </h2>
                        <?php if ( has_nav_menu( 'footer_block_one' ) ) : ?>
                            <?php
                                PG_Smart_Walker_Nav_Menu::init();
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}
                                                    </a>';
                                wp_nav_menu( array(
                                    'container' => '',
                                    'theme_location' => 'footer_block_one',
                                    'items_wrap' => '<nav class="%2$s flex flex-col footer-menu gap-3 items-center" aria-label="Tenda 21 footer menu" id="%1$s">%3$s</nav>',
                                    'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?>
                        <?php endif; ?>
                    </div>
                    <!-- COMMUNITY -->
                    <div class="flex flex-col items-center">
                        <h2 class="mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500"> <?php _e( 'Community', 'tenda21' ); ?> </h2>
                        <?php if ( has_nav_menu( 'footer_block_two' ) ) : ?>
                            <?php
                                PG_Smart_Walker_Nav_Menu::init();
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}
                                                    </a>';
                                wp_nav_menu( array(
                                    'container' => '',
                                    'theme_location' => 'footer_block_two',
                                    'items_wrap' => '<nav class="%2$s flex flex-col footer-menu gap-3 items-center" aria-label="Community footer menu" id="%1$s">%3$s</nav>',
                                    'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?>
                        <?php endif; ?>
                    </div>
                    <!-- VISIT US -->
                    <div class="flex flex-col items-center">
                        <h2 class="mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500"> <?php _e( 'Visit Us', 'tenda21' ); ?> </h2>
                        <?php if ( has_nav_menu( 'footer_block_three' ) ) : ?>
                            <?php
                                PG_Smart_Walker_Nav_Menu::init();
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}
                                                    </a>';
                                wp_nav_menu( array(
                                    'container' => '',
                                    'theme_location' => 'footer_block_three',
                                    'items_wrap' => '<nav class="%2$s flex flex-col footer-menu gap-3 items-center" aria-label="Visit us footer menu" id="%1$s">%3$s</nav>',
                                    'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="border-t border-blue_tenda-500/10 py-6">
                    <p class="text-center font-sans text-[11px] font-light uppercase tracking-[0.18em] text-caramelo_tenda-500"> <?php _e( 'Tenda 21 · All rights reserved · 2026', 'tenda21' ); ?> </p>
                </div>
            </div>
        </footer>        

<?php get_footer(); ?>