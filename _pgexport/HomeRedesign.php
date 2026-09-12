<?php get_header(); ?>

        <!-- =========================================================
             FUTURE WORDPRESS BLOCK: main-navigation
             ========================================================= -->
        <header class="relative z-30 bg-white px-5 md:px-8 lg:px-10">
            <div class="mx-auto max-w-[1600px]">
                <div class="flex h-[62px] items-center">
                    <a href="#" class="shrink-0" aria-label="Tenda 21"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/site logo.webp" alt="Tenda 21" class="h-[52px] w-[52px] object-contain"> </a>
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
                    <button type="button" class="
                            ml-auto
                            font-sans
                            text-xs
                            uppercase
                            tracking-[0.12em]
                            text-[#7899b1]
                            lg:hidden
                        ">
                        <?php _e( 'Menu', 'tenda21' ); ?>
                    </button>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/menu_line_devider.webp" alt="" aria-hidden="true" class="block w-full object-fill" style="height: 15px;">
            </div>
        </header>
        <!-- =========================================================
             FUTURE WORDPRESS BLOCK: home-intro-composition
             ========================================================= -->
        <main>
            <section class="relative overflow-hidden bg-white">
                <div class="relative mx-auto max-w-[1600px] px-5 pb-10 pt-8 md:px-8 md:pb-14 md:pt-12 lg:px-10 lg:pb-16 lg:pt-14">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/traccia_per_testo.webp" alt="" aria-hidden="true" class="pointer-events-none absolute left-[-18%] top-[30%] z-0 hidden w-[60%] max-w-none object-contain md:block lg:left-[-6%] lg:w-[31%]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/traccia_per_home.webp" alt="" aria-hidden="true" class="pointer-events-none absolute left-[38%] top-[12%] z-[1] hidden w-[40%] max-w-none object-contain md:block lg:left-[30%] lg:w-[34%]">
                    <div class="relative z-20 mx-auto flex max-w-[260px] justify-center lg:absolute lg:left-1/2 lg:top-[4%] lg:max-w-none lg:-translate-x-1/2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-dragonfly.webp" alt="" aria-hidden="true" class="mt-2 h-auto w-[150px] object-contain md:w-[190px] lg:w-[225px]">
                    </div>
                    <div class="relative z-10 mt-8 grid items-start gap-8 md:mt-10 md:gap-10 lg:mt-0 lg:min-h-[660px] lg:grid-cols-12 lg:gap-8">
                        <div class="space-y-8 text-center lg:col-span-6 lg:self-center lg:space-y-12 lg:pl-6">
                            <p class="mx-auto max-w-[440px] font-sans text-[15px] font-light leading-[1.5] text-gray_tenda-500 md:text-[17px] md:leading-[1.35]"> <?php _e( 'Com o oceano no horizonte,', 'tenda21' ); ?><br> <?php _e( 'abre-se um espaço para o que é essencial.', 'tenda21' ); ?><br> <?php _e( 'Um espaço vivo de escuta e presença.', 'tenda21' ); ?> </p>
                            <p class="mx-auto max-w-[440px] font-sans text-[15px] font-light leading-[1.5] text-gray_tenda-500 md:text-[17px] md:leading-[1.35]"> <?php _e( 'Criado para nutrir a reconexão com o corpo,', 'tenda21' ); ?><br> <?php _e( 'a leveza da respiração, a liberdade de sentir', 'tenda21' ); ?><br> <?php _e( 'e o encontro com o que é verdadeiro.', 'tenda21' ); ?> </p>
                            <p class="mx-auto max-w-[420px] font-sans text-[15px] font-light leading-[1.5] text-gray_tenda-500 md:text-[17px] md:leading-[1.35]"> <?php _e( 'Um abrigo que recebe você.', 'tenda21' ); ?><br> <?php _e( 'Apenas respire. Chegue.', 'tenda21' ); ?><br> <?php _e( 'Deixe seu coração se abrir no seu tempo.', 'tenda21' ); ?><br> <?php _e( 'A alma sabe o caminho.', 'tenda21' ); ?> </p>
                        </div>
                        <figure class="mx-auto w-full max-w-[640px] lg:col-span-6 lg:self-center lg:max-w-none lg:pr-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/architecture-drawing.webp" alt="Tenda 21 architecture" class="block h-auto w-full object-contain">
                        </figure>
                    </div>
                    <div class="relative z-20 mt-10 flex justify-center md:mt-12 lg:absolute lg:bottom-7 lg:left-1/2 lg:mt-0 lg:-translate-x-1/2">
                        <a href="#" class="inline-flex flex-col items-center font-sans text-[11px] font-light uppercase tracking-[0.12em] text-gray_tenda-500 transition-opacity hover:opacity-70"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cta-line.webp" alt="" aria-hidden="true" class="h-auto w-[240px] object-contain md:w-[280px]"> <span class="-mt-1 mb-1"><?php _e( 'Conheça as experiências', 'tenda21' ); ?></span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cta-line.webp" alt="" aria-hidden="true" class="h-auto w-[240px] object-contain md:w-[280px]"> </a>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer devider.webp" alt="" aria-hidden="true" class="block w-full object-fill" style="height: 15px;">
                <div class="
                        mx-auto
                        grid
                        max-w-[760px]
                        grid-cols-2
                        gap-[160px]
                        py-4
                        text-center
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
                <p class="
 font-light
 font-sans
 pb-1
 text-[#7899b1]
 text-center
" style="
                        font-size: 7.5px;
                        line-height: 1.2;
                    "> <?php _e( 'Tenda 21 · All rights reserved · 2026', 'tenda21' ); ?> </p>
            </div>
        </footer>        

<?php get_footer(); ?>