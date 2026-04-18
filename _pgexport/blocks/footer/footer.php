<footer <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "bg-verde_oliva-500 px-6 py-16 site-footer-nav text-charcoal-900", 'data-block-name' => "site-footer", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-7xl mx-auto w-full">
        <!-- Main Footer Content -->
        <div class="grid md:grid-cols-4 gap-12 mb-16">
            <!-- Column 1: Location & Contact -->
            <div class="space-y-4">
                <h3 class="font-bold font-serif mb-0 text-2xl text-charcoal-900"><?php bloginfo( 'name' ); ?></h3>
                <address class="font-bold font-sans leading-tight not-italic text-2xl text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'address' ) ?></address>
                <div class="font-sans font-light text-sm text-charcoal-800 space-y-1">
                    <p> <a href="tel:+351275000000"><?php echo PG_Blocks_v4::getAttribute( $args, 'phone' ) ?></a> </p>
                    <p> <a href="<?php echo 'mailto:' . PG_Blocks_v4::getAttribute( $args, 'email' ) ?>"><?php echo PG_Blocks_v4::getAttribute( $args, 'email' ) ?></a> </p>
                </div>
            </div>
            <!-- Column 2: Action Buttons -->
            <div class="flex flex-col items-start space-y-4">
                <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'btn_experiences_link' ) ?>" class="!text-white bg-clay-500 font-normal font-sans inline-block px-4 py-3 text-center text-sm tracking-[0.12em] transition-colors uppercase hover:bg-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'btn_experiences_label' ) ?></a>
                <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'btn_book_link' ) ?>" class="!text-white bg-clay-500 font-normal font-sans inline-block px-4 py-3 text-center text-sm tracking-[0.12em] transition-colors uppercase hover:bg-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'btn_book_label' ) ?></a>
                <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'btn_support_link' ) ?>" class="!text-white bg-clay-500 font-normal font-sans inline-block px-4 py-3 text-center text-sm tracking-[0.12em] transition-colors uppercase hover:bg-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'btn_support_label' ) ?></a>
            </div>
            <!-- Column 3: About -->
            <div>
                <h4 class="font-medium font-sans mb-6 text-charcoal-900 text-sm tracking-[0.12em] uppercase"><?php bloginfo( 'name' ); ?></h4>
                <?php if ( has_nav_menu( 'footer_block_one' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::init();
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="block font-light font-sans text-charcoal-800 text-sm transition-colors hover:text-charcoal-900 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
                        wp_nav_menu( array(
                            'container' => '',
                            'theme_location' => 'footer_block_one',
                            'items_wrap' => '<nav class="%2$s footer-menu space-y-3" id="%1$s">%3$s</nav>',
                            'walker' => new PG_Smart_Walker_Nav_Menu()
                    ) ); ?>
                <?php endif; ?>
            </div>
            <!-- Column 4: Visit -->
            <div>
                <h4 class="font-sans font-medium text-sm uppercase tracking-[0.12em] text-charcoal-900 mb-6"><?php echo PG_Blocks_v4::getAttribute( $args, 'visit_heading' ) ?></h4>
                <?php if ( has_nav_menu( 'footer_block_two' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::init();
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
                        wp_nav_menu( array(
                            'container' => '',
                            'theme_location' => 'footer_block_two',
                            'items_wrap' => '<nav class="%2$s footer-menu space-y-3" id="%1$s">%3$s</nav>',
                            'walker' => new PG_Smart_Walker_Nav_Menu()
                    ) ); ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- Social Links & Language -->
        <div class="flex items-center justify-between border-t border-charcoal-400/30 pt-8 mb-8">
            <div class="flex gap-6">
                <?php if ( PG_Blocks_v4::getLinkUrl( $args, 'social_ig', false ) ) : ?>
                    <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'social_ig' ) ?>" class="font-sans text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Instagram', 'tenda21' ); ?> </a>
                <?php endif; ?>
                <?php if ( PG_Blocks_v4::getLinkUrl( $args, 'social_fb', false ) ) : ?>
                    <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'social_fb' ) ?>" class="font-sans text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Facebook', 'tenda21' ); ?> </a>
                <?php endif; ?>
            </div>
            <div class="flex gap-4">
                <a href="#" class="font-sans text-sm font-medium text-charcoal-900 underline"> <?php _e( 'English', 'tenda21' ); ?> </a>
                <a href="#" class="font-sans text-sm text-charcoal-700 hover:text-charcoal-900 transition-colors"> <?php _e( 'Português', 'tenda21' ); ?> </a>
            </div>
        </div>
        <!-- Bottom Legal -->
        <div class="text-center border-t border-charcoal-400/30 pt-8">
            <p class="font-sans text-xs font-light text-charcoal-700 leading-relaxed"> <?php _e( 'NIF:', 'tenda21' ); ?> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'nif' ) ?></span>
                — <a href="#privacy" class="hover:text-charcoal-900 transition-colors"><?php _e( 'Privacy Policy', 'tenda21' ); ?></a>
                — <a href="#cookies" class="hover:text-charcoal-900 transition-colors"><?php _e( 'Cookie Policy', 'tenda21' ); ?></a>
                — <a href="#transparency" class="hover:text-charcoal-900 transition-colors"><?php _e( 'Transparency', 'tenda21' ); ?></a>
                — <a href="#policy" class="hover:text-charcoal-900 transition-colors"><?php _e( 'Cancellation Policy', 'tenda21' ); ?></a> </p>
        </div>
    </div>
</footer>