<nav <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "backdrop-blur-xs bg-bone-200/60 border-mist-400/50 fixed left-0 right-0 site-main-nav top-0 z-50", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full">
        <a href="<?php echo esc_url( home_url() ); ?>" class="font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors" rel="home"><?php bloginfo( 'name' ); ?></a>
        <div class="flex gap-8 items-center">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                    PG_Smart_Walker_Nav_Menu::init();
                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item {CLASSES}" id="{ID}">
                                                <a class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]" {ATTRS}>{TITLE}</a>
                                            </li>';
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="%2$s flex gap-8 items-center" id="%1$s">%3$s</ul>',
                        'walker' => new PG_Smart_Walker_Nav_Menu()
                ) ); ?>
            <?php endif; ?>
        </div>
    </div>
</nav>