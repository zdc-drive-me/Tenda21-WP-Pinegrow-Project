<?php get_header(); ?>

<!-- =========================================================
 FUTURE WORDPRESS BLOCK
 main-navigation
 ========================================================= -->
<header data-block-name="main-navigation" class="relative z-30 bg-white px-5 md:px-8 lg:px-10">
    <div class="mx-auto max-w-[1600px]">
        <div class="flex h-[62px] items-center">
            <a href="#" aria-label="Tenda 21" class="shrink-0"> <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/site logo.webp" alt="Tenda 21" class="h-[52px] w-[52px] object-contain"> </a>
            <nav aria-label="Primary navigation" class="hidden flex-1 lg:block">
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
        <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/menu_line_devider.webp" alt="" aria-hidden="true" class="block h-[5px] w-full object-fill">
    </div>
</header>
<!-- =========================================================
 FUTURE WORDPRESS BLOCK
 home-intro-composition
 ========================================================= -->
<main>
    <section data-block-name="home-intro-composition" class="relative bg-white" style="min-height: 760px;">
        <div class="relative mx-auto max-w-[1600px]" style="height: 760px;">
            <!-- Large left decorative trace -->
            <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/traccia_per_home.webp" alt="" aria-hidden="true" class="
                pointer-events-none
                absolute
                left-[-1.5%]
                top-[27%]
                z-0
                w-[58%]
                max-w-none
                object-contain
            ">
            <!-- Central decorative trace -->
            <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/traccia_per_testo.webp" alt="" aria-hidden="true" class="
                pointer-events-none
                absolute
                left-[30%]
                top-[33%]
                z-[1]
                w-[34%]
                max-w-none
                object-contain
            ">
            <!-- TENDA 21 + dragonfly -->
            <div class="
                absolute
                left-1/2
                top-[4.5%]
                z-20
                flex
                -translate-x-1/2
                flex-col
                items-center
            ">
                <h1 class="
                    font-sans
                    text-[31px]
                    font-light
                    uppercase
                    tracking-[0.18em]
                    text-[#c47d59]
                "> <?php _e( 'Tenda 21', 'tenda21' ); ?> </h1>
                <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/hero-dragonfly.webp" alt="" aria-hidden="true" class="
                    mt-2
                    h-auto
                    w-[225px]
                    object-contain
                ">
            </div>
            <!-- Text block 1 -->
            <div class="
                absolute
                left-[15.5%]
                top-[24%]
                z-10
                w-[430px]
                text-center
            ">
                <p class="
                    font-sans
                    text-[17px]
                    font-light
                    leading-[1.35]
                    text-[#7899b1]
                "> <?php _e( 'Com o oceano no horizonte,', 'tenda21' ); ?><br> <?php _e( 'abre-se um espaço para o que é essencial.', 'tenda21' ); ?><br> <?php _e( 'Um espaço vivo de escuta e presença.', 'tenda21' ); ?> </p>
            </div>
            <!-- Text block 2 -->
            <div class="
                absolute
                left-[15.5%]
                top-[49%]
                z-10
                w-[440px]
                text-center
            ">
                <p class="
                    font-sans
                    text-[17px]
                    font-light
                    leading-[1.35]
                    text-[#7899b1]
                "> <?php _e( 'Criado para nutrir a reconexão com o corpo,', 'tenda21' ); ?><br> <?php _e( 'a leveza da respiração, a liberdade de sentir', 'tenda21' ); ?><br> <?php _e( 'e o encontro com o que é verdadeiro.', 'tenda21' ); ?> </p>
            </div>
            <!-- Text block 3 -->
            <div class="
                absolute
                left-[19%]
                top-[70%]
                z-10
                w-[410px]
                text-center
            ">
                <p class="
                    font-sans
                    text-[17px]
                    font-light
                    leading-[1.35]
                    text-[#7899b1]
                "> <?php _e( 'Um abrigo que recebe você.', 'tenda21' ); ?><br> <?php _e( 'Apenas respire. Chegue.', 'tenda21' ); ?><br> <?php _e( 'Deixe seu coração se abrir no seu tempo.', 'tenda21' ); ?><br> <?php _e( 'A alma sabe o caminho.', 'tenda21' ); ?> </p>
            </div>
            <!-- Architecture drawing -->
            <figure class="
                absolute
                right-[-2%]
                top-[23%]
                z-[5]
                w-[43.5%]
            ">
                <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/architecture-drawing.webp" alt="Tenda 21 architecture" class="
                    block
                    h-auto
                    w-full
                    object-contain
                ">
            </figure>
            <!-- CTA -->
            <div class="
                absolute
                bottom-[4.5%]
                left-[52%]
                z-20
                -translate-x-1/2
            ">
                <a href="#experiencias" class="
                    inline-flex
                    h-[46px]
                    items-center
                    justify-center
                    rounded-full
                    bg-[#7797ad]
                    px-[25px]
                    font-sans
                    text-[12px]
                    font-medium
                    text-white
                    transition-transform
                    duration-300
                    hover:scale-[1.025]
                "> <?php _e( 'Conheça as experiências', 'tenda21' ); ?> </a>
            </div>
        </div>
    </section>
</main>
<!-- =========================================================
 FUTURE WORDPRESS BLOCK
 site-footer
 ========================================================= -->
<footer data-block-name="site-footer" class="bg-white px-5 pb-4 md:px-8 lg:px-10">
    <div class="mx-auto max-w-[1600px]">
        <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/footer devider.webp" alt="" aria-hidden="true" class="block h-[6px] w-full object-fill">
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
                <div class="flex items-center justify-center gap-4">
                    <a href="#" aria-label="Instagram"> <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/instagram icon.webp" alt="" class="h-[24px] w-[24px] object-contain"> </a>
                    <a href="#" aria-label="Telegram"> <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/telegram icon.webp" alt="" class="h-[24px] w-[24px] object-contain"> </a>
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
                <div class="flex items-center justify-center gap-4">
                    <a href="mailto:hello@tenda21.com" aria-label="Email"> <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/contact icon.webp" alt="" class="h-[27px] w-[27px] object-contain"> </a>
                    <a href="#" aria-label="WhatsApp"> <img src="<?php echo get_template_directory_uri(); ?>/../assets/images/home/whatsapp icon.webp" alt="" class="h-[27px] w-[27px] object-contain"> </a>
                </div>
            </div>
        </div>
        <p class="
            pb-1
            text-center
            font-sans
            text-[9px]
            font-light
            text-[#7899b1]
        "> <?php _e( 'Tenda 21 · All rights reserved · 2026', 'tenda21' ); ?> </p>
    </div>
</footer>        

<?php get_footer(); ?>