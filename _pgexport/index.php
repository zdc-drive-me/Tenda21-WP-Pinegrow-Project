<?php get_header(); ?>

        <!-- =========================================================
             FUTURE WORDPRESS BLOCK: main-navigation
             ========================================================= -->
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

<?php get_footer(); ?>