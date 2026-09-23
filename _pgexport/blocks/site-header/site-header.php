<header <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "bg-white px-5 relative site-main-nav
 z-30 md:px-8
 lg:px-10
", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="mx-auto max-w-[1600px]">
        <div class="flex h-[62px] items-center">
            <!-- Logo -->
            <a href="<?php echo esc_url( home_url() ); ?>" class="shrink-0" aria-label="Tenda 21"> <?php if ( !PG_Blocks_v7::getImageSVG( $args, 'logo', false) && PG_Blocks_v7::getImageUrl( $args, 'logo', 'full' ) ) : ?><img src="<?php echo PG_Blocks_v7::getImageUrl( $args, 'logo', 'full' ) ?>" alt="<?php echo PG_Blocks_v7::getImageField( $args, 'logo', 'alt', true); ?>" class="<?php echo (PG_Blocks_v7::getImageField( $args, 'logo', 'id', true) ? ('wp-image-' . PG_Blocks_v7::getImageField( $args, 'logo', 'id', true)) : '') ?> h-[55px] object-contain w-[55px]"><?php endif; ?><?php if ( PG_Blocks_v7::getImageSVG( $args, 'logo', false) ) : ?><?php echo PG_Blocks_v7::mergeInlineSVGAttributes( PG_Blocks_v7::getImageSVG( $args, 'logo' ), array( 'class' => 'h-[55px] w-[55px] object-contain' ) ) ?><?php endif; ?> </a>
            <!-- Desktop navigation -->
            <nav class="flex-1 hidden text-blue_tenda-600 lg:block" aria-label="Primary navigation">
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::init();
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="{CLASSES}" id="{ID}">
                                                <a class="transition-opacity hover:opacity-60" {ATTRS}>{TITLE}
                                                </a>
                                            </li>';
                        wp_nav_menu( array(
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="%2$s flex font-light font-sans items-center justify-between max-w-[1160px]
                         mx-auto px-10 text-[#7899b1]
                         text-[11px]
                         uppercase" id="%1$s">%3$s</ul>',
                            'walker' => new PG_Smart_Walker_Nav_Menu()
                    ) ); ?>
                <?php endif; ?>
            </nav>
            <!-- Desktop language -->
            <?php if ( has_nav_menu( 'lang_menu' ) ) : ?>
                <?php
                    PG_Smart_Walker_Nav_Menu::init();
                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="{CLASSES}" id="{ID}">
                                        <a {ATTRS}>{TITLE}
                                        </a>
                                    </li>';
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'lang_menu',
                        'items_wrap' => '<ul class="%2$s font-light font-sans gap-1 hidden items-center lg:flex
                     ml-auto text-[11px]
                     text-blue_tenda-900
                     uppercase" id="%1$s">%3$s</ul>',
                        'walker' => new PG_Smart_Walker_Nav_Menu()
                ) ); ?>
            <?php endif; ?>
            <!-- Mobile trigger -->
            <button type="button" class="ml-auto
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
        <?php if ( !PG_Blocks_v7::getImageSVG( $args, 'divider_image', false) && PG_Blocks_v7::getImageUrl( $args, 'divider_image', 'full' ) ) : ?>
            <img src="<?php echo PG_Blocks_v7::getImageUrl( $args, 'divider_image', 'full' ) ?>" alt="<?php echo PG_Blocks_v7::getImageField( $args, 'divider_image', 'alt', true); ?>" aria-hidden="true" class="<?php echo (PG_Blocks_v7::getImageField( $args, 'divider_image', 'id', true) ? ('wp-image-' . PG_Blocks_v7::getImageField( $args, 'divider_image', 'id', true)) : '') ?> block object-fill w-full" style="height: 15px;">
        <?php endif; ?>
        <?php if ( PG_Blocks_v7::getImageSVG( $args, 'divider_image', false) ) : ?>
            <?php echo PG_Blocks_v7::mergeInlineSVGAttributes( PG_Blocks_v7::getImageSVG( $args, 'divider_image' ), array( 'aria-hidden' => 'true', 'class' => 'block w-full object-fill', 'style' => 'height: 15px;' ) ) ?>
        <?php endif; ?>
        <!-- =====================================================
             MOBILE MENU PANEL
             ===================================================== -->
        <div id="mobile-menu" class="hidden
 lg:hidden
" data-mobile-menu>
            <nav class="flex flex-col items-center pb-10 pt-8 px-5 text-center" aria-label="Mobile navigation">
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::init();
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="{CLASSES}" id="{ID}">
                                                <a {ATTRS}>{TITLE}
                                                </a>
                                            </li>';
                        wp_nav_menu( array(
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="
                         %2$s flex
                         flex-col
                         font-light
                         font-sans
                         gap-6
                         items-center
                         max-w-sm
                         text-[#7899b1]
                         text-sm
                         tracking-wide
                         uppercase
                         w-full
                        " id="%1$s">%3$s</ul>',
                            'walker' => new PG_Smart_Walker_Nav_Menu()
                    ) ); ?>
                <?php endif; ?>
                <!-- Mobile language -->
                <div class="mt-8">
                    <ul class="
                            flex
                            items-center
                            justify-center
                            gap-1
                            font-sans
                            text-xs
                            font-light
                            uppercase
                            tracking-wide
                            text-[#7899b1]
                        ">
                        <li>
                            <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v7::getLinkUrl( $args, 'language_link_en_mobile' ) ?>"><?php echo PG_Blocks_v7::getAttribute( $args, 'language_label_en_mobile' ) ?></a>
                        </li>
                        <li aria-hidden="true">
                            -
</li>
                        <li>
                            <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v7::getLinkUrl( $args, 'language_link_pt_mobile' ) ?>"><?php echo PG_Blocks_v7::getAttribute( $args, 'language_label_pt_mobile' ) ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>