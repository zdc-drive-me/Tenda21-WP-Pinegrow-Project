<footer <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "hidden md:block site-footer-nav bg-white", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="mx-auto max-w-[1600px] px-5 md:px-8 lg:px-10">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer%20devider.webp" alt="" aria-hidden="true" class="block h-[15px] w-full object-fill">
        <div class="mx-auto grid max-w-[1100px] grid-cols-1 gap-10 py-12 text-center sm:grid-cols-2 md:gap-12 lg:grid-cols-4 lg:py-16">
            <!-- CONNECT -->
            <div class="flex flex-col items-center">
                <h2 class="mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500"><?php echo PG_Blocks_v7::getAttribute( $args, 'connect_heading' ) ?></h2>
                <div class="flex flex-col items-center gap-3">
                    <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v7::getLinkUrl( $args, 'instagram_link' ) ?>" class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500"><?php echo PG_Blocks_v7::getAttribute( $args, 'instagram_label' ) ?></a>
                    <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v7::getLinkUrl( $args, 'whatsapp_link' ) ?>" class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500"><?php echo PG_Blocks_v7::getAttribute( $args, 'whatsapp_label' ) ?></a>
                </div>
            </div>
            <!-- TENDA 21 -->
            <div class="flex flex-col items-center">
                <h2 class="mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500"><?php echo PG_Blocks_v7::getAttribute( $args, 'tenda_heading' ) ?></h2>
                <?php if ( has_nav_menu( 'footer_block_one' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::init();
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
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
                <h2 class="mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500"><?php echo PG_Blocks_v7::getAttribute( $args, 'community_heading' ) ?></h2>
                <?php if ( has_nav_menu( 'footer_block_two' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::init();
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
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
                <h2 class="mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500"><?php echo PG_Blocks_v7::getAttribute( $args, 'visit_heading' ) ?></h2>
                <?php if ( has_nav_menu( 'footer_block_three' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::init();
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
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
            <p class="text-center font-sans text-[11px] font-light uppercase tracking-[0.18em] text-caramelo_tenda-500"> <span><?php bloginfo( 'name' ); ?></span> <?php _e( '· All rights reserved ·', 'tenda21' ); ?> <span><?php echo date( 'Y' ); ?></span> </p>
        </div>
    </div>
</footer>