<?php get_header(); ?>

        <!-- =========================================================
             FUTURE WORDPRESS BLOCK: main-navigation
             ========================================================= -->
        <header class="
        relative
        z-30
        bg-white
        px-5
        md:px-8
        lg:px-10
    ">
            <div class="mx-auto max-w-[1600px]">
                <div class="flex h-[62px] items-center">
                    <!-- Logo -->
                    <a href="#" class="shrink-0" aria-label="Tenda 21"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/site logo.webp" alt="Tenda 21" class="h-[55px] w-[55px] object-contain"> </a>
                    <!-- Desktop navigation -->
                    <nav class="hidden flex-1 lg:block" aria-label="Primary navigation">
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
                    <a href="#" class="
                    ml-auto
                    hidden
                    font-sans
                    text-[11px]
                    font-light
                    uppercase
                    text-[#7899b1]
                    lg:block
                "> <?php _e( 'EN-PT', 'tenda21' ); ?> </a>
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
                     Normal document flow
                     Hidden from LG upwards
                     ===================================================== -->
                <div class="
                        mx-auto
                        flex
                        w-full
                        max-w-3xl
                        flex-col
                        items-center
                        px-5
                        pb-14
                        pt-10
                        md:px-8
                        md:pb-20
                        md:pt-14
                        lg:hidden
                    ">
                    <!-- Dragonfly -->
                    <div class="
                            mb-12
                            flex
                            w-full
                            justify-center
                            md:mb-16
                        ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-dragonfly.webp" alt="" aria-hidden="true" class="
                                h-auto
                                w-48
                                md:w-56
                            ">
                    </div>
                    <!-- Text group -->
                    <div class="
                            flex
                            w-full
                            max-w-xl
                            flex-col
                            items-center
                            gap-12
                            text-center
                            md:gap-16
                        ">
                        <!-- Text 1 -->
                        <div class="w-full">
                            <h1 class="
                                    font-light
                                    leading-snug
                                    text-base
                                    text-gray-900
                                    tracking-tight
                                "> <?php _e( 'Com o oceano no horizonte,', 'tenda21' ); ?><br> <?php _e( 'abre-se um espaço para o que é essencial.', 'tenda21' ); ?><br> <?php _e( 'Um espaço vivo de escuta e presença.', 'tenda21' ); ?> </h1>
                        </div>
                        <!-- Text 2 -->
                        <div class="w-full">
                            <h2 class="
                                    font-light
                                    leading-snug
                                    text-base
                                    text-gray-900
                                    tracking-tight
                                "> <?php _e( 'Criado para nutrir a reconexão com o corpo,', 'tenda21' ); ?><br> <?php _e( 'a leveza da respiração, a liberdade de sentir', 'tenda21' ); ?><br> <?php _e( 'e o encontro com o que é verdadeiro.', 'tenda21' ); ?> </h2>
                        </div>
                        <!-- Text 3 -->
                        <div class="w-full">
                            <h2 class="
                                    font-light
                                    leading-snug
                                    text-base
                                    text-gray-900
                                    tracking-tight
                                "> <?php _e( 'Um abrigo que recebe você.', 'tenda21' ); ?><br> <?php _e( 'Apenas respire. Chegue.', 'tenda21' ); ?><br> <?php _e( 'Deixe seu coração se abrir no seu tempo.', 'tenda21' ); ?><br> <?php _e( 'A alma sabe o caminho.', 'tenda21' ); ?> </h2>
                        </div>
                    </div>
                    <!-- Architecture -->
                    <figure class="
                            mt-14
                            w-full
                            md:mt-20
                        ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/architecture-drawing.webp" alt="Tenda 21 architecture" class="
                                block
                                h-auto
                                w-full
                                object-contain
                            ">
                    </figure>
                    <!-- Decorative gesture -->
                    <div class="
                            mt-10
                            flex
                            w-full
                            justify-center
                            md:mt-14
                        ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/traccia_per_testo.webp" alt="" aria-hidden="true" class="pointer-events-none
 h-auto
 w-2/3
 object-contain
 md:w-1/2
">
                    </div>
                    <!-- CTA -->
                    <div class="
                            mt-8
                            flex
                            justify-center
                            md:mt-10
                        ">
                        <a href="#" class="tenda-line-cta font-sans"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cta-line.webp" alt="" aria-hidden="true" class="
                                    tenda-line-cta__line
                                    tenda-line-cta__line--top
                                "> <span class="
                                    tenda-line-cta__label
                                    text-base
                                    text-gray-900
                                "> <?php _e( 'Conheça as experiências', 'tenda21' ); ?> </span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cta-line.webp" alt="" aria-hidden="true" class="
                                    tenda-line-cta__line
                                    tenda-line-cta__line--bottom
                                "> </a>
                    </div>
                </div>
                <!-- =====================================================
                     DESKTOP
                     Existing art-directed composition
                     LG and above only
                     ===================================================== -->
                <div class="
                        relative
                        mx-auto
                        hidden
                        max-w-[1600px]
                        lg:block
                    " style="height: 760px;">
                    <!-- =====================================================
                         LEFT DECORATIVE TRACE
                         ===================================================== -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/traccia_per_testo.webp" alt="" aria-hidden="true" class="pointer-events-none
 absolute
 z-0
 max-w-none
 object-center
 object-contain
" style="
                            left: -6%;
                            top: 30%;
                            width: 31%;
                        ">
                    <!-- =====================================================
                         RIGHT / CENTRAL DECORATIVE TRACE
                         ===================================================== -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/traccia_per_home.webp" alt="" aria-hidden="true" class="
                            pointer-events-none
                            absolute
                            z-[1]
                            max-w-none
                            object-contain
                        " style="
                            left: 30%;
                            top: 10%;
                            width: 34%;
                        ">
                    <!-- =====================================================
                         DRAGONFLY
                         ===================================================== -->
                    <div class="
                            absolute
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
                    <!-- =====================================================
                         TEXT GROUP
                         ===================================================== -->
                    <div class="
                            absolute
                            z-10
                            flex
                            flex-col
                            items-center
                            justify-between
                            text-center
                        " style="
                            left: 16%;
                            top: 24%;
                            width: 440px;
                            height: 430px;
                        ">
                        <!-- Text 1 -->
                        <div class="w-full">
                            <h1 class="
                                    font-light
                                    leading-snug
                                    text-base
                                    text-gray-900
                                    tracking-tight
                                "> <?php _e( 'Com o oceano no horizonte,', 'tenda21' ); ?><br> <?php _e( 'abre-se um espaço para o que é essencial.', 'tenda21' ); ?><br> <?php _e( 'Um espaço vivo de escuta e presença.', 'tenda21' ); ?> </h1>
                        </div>
                        <!-- Text 2 -->
                        <div class="w-full">
                            <h2 class="
                                    font-light
                                    leading-snug
                                    text-base
                                    text-gray-900
                                    tracking-tight
                                "> <?php _e( 'Criado para nutrir a reconexão com o corpo,', 'tenda21' ); ?><br> <?php _e( 'a leveza da respiração, a liberdade de sentir', 'tenda21' ); ?><br> <?php _e( 'e o encontro com o que é verdadeiro.', 'tenda21' ); ?> </h2>
                        </div>
                        <!-- Text 3 -->
                        <div class="w-full">
                            <h2 class="
                                    font-light
                                    leading-snug
                                    text-base
                                    text-gray-900
                                    tracking-tight
                                "> <?php _e( 'Um abrigo que recebe você.', 'tenda21' ); ?><br> <?php _e( 'Apenas respire. Chegue.', 'tenda21' ); ?><br> <?php _e( 'Deixe seu coração se abrir no seu tempo.', 'tenda21' ); ?><br> <?php _e( 'A alma sabe o caminho.', 'tenda21' ); ?> </h2>
                        </div>
                    </div>
                    <!-- =====================================================
                         ARCHITECTURE DRAWING
                         ===================================================== -->
                    <figure class="
                            absolute
                            z-[5]
                        " style="
                            right: -2%;
                            top: 23%;
                            width: 43.5%;
                            margin: 0;
                        ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/architecture-drawing.webp" alt="Tenda 21 architecture" class="
                                block
                                h-auto
                                w-full
                                object-contain
                            ">
                    </figure>
                    <!-- =====================================================
                         CTA
                         ===================================================== -->
                    <div style="
                            position: absolute;
                            left: 50%;
                            bottom: 28px;
                            transform: translateX(-50%);
                            z-index: 100;
                        ">
                        <a href="#" class="tenda-line-cta font-sans"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cta-line.webp" alt="" aria-hidden="true" class="
                                    tenda-line-cta__line
                                    tenda-line-cta__line--top
                                "> <span class="
                                    tenda-line-cta__label
                                    text-base
                                    text-gray-900
                                "> <?php _e( 'Conheça as experiências', 'tenda21' ); ?> </span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cta-line.webp" alt="" aria-hidden="true" class="
                                    tenda-line-cta__line
                                    tenda-line-cta__line--bottom
                                "> </a>
                    </div>
                </div>
            </section>
        </main>
        <!-- =========================================================
             FUTURE WORDPRESS BLOCK: site-footer
             ========================================================= -->
        <footer class="
                bg-white
                px-5
                pb-4
                md:px-8
                lg:px-10
            ">
            <div class="mx-auto max-w-[1600px]">
                <!-- Footer divider -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer devider.webp" alt="" aria-hidden="true" class="block w-full object-fill" style="height: 15px;">
                <!-- Footer content -->
                <div class="
                        mx-auto
                        grid
                        max-w-[760px]
                        grid-cols-1
                        gap-8
                        py-6
                        text-center
                        sm:grid-cols-2
                        sm:gap-12
                        md:gap-[160px]
                    ">
                    <!-- Stay tuned -->
                    <div>
                        <h2 class="
                                mb-4
                                font-sans
                                text-[15px]
                                font-light
                                uppercase
                                text-[#7899b1]
                            "> <?php _e( 'Stay tuned', 'tenda21' ); ?> </h2>
                        <div class="
                                flex
                                items-center
                                justify-center
                                gap-4
                            ">
                            <a href="#" aria-label="Instagram"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/instagram icon.webp" alt="" class="h-[24px] w-[24px] object-contain"> </a>
                            <a href="#" aria-label="Telegram"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/telegram icon.webp" alt="" class="h-[24px] w-[24px] object-contain"> </a>
                        </div>
                    </div>
                    <!-- Contacts -->
                    <div>
                        <h2 class="
                                mb-4
                                font-sans
                                text-[15px]
                                font-light
                                uppercase
                                text-[#7899b1]
                            "> <?php _e( 'Contatos', 'tenda21' ); ?> </h2>
                        <div class="
                                flex
                                items-center
                                justify-center
                                gap-4
                            ">
                            <a href="mailto:hello@tenda21.com" aria-label="Email"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/contact icon.webp" alt="" class="h-[27px] w-[27px] object-contain"> </a>
                            <a href="#" aria-label="WhatsApp"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/whatsapp icon.webp" alt="" class="h-[27px] w-[27px] object-contain"> </a>
                        </div>
                    </div>
                </div>
                <!-- Copyright -->
                <p class="text-caramelo_tenda-500 text-center" style="
                        font-size: 7.5px;
                        line-height: 1.2;
                    "> <?php _e( 'Tenda 21 · All rights reserved · 2026', 'tenda21' ); ?> </p>
            </div>
        </footer>        

<?php get_footer(); ?>