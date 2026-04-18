<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-8 md:py-24 px-6 bg-bone-200", 'data-block-name' => "host-profile", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-12 items-start">
        <!-- Portrait slot -->
        <figure class="md:col-span-5 lg:col-span-5">
            <!--
                        Drop the host photo at `assets/images/host-portrait.jpg` (recommended 1600x2000, soft natural light).
                        Replace the `src` below with the final filename if different.
                    -->
            <div class="aspect-[4/5] bg-mist-200 overflow-hidden relative">
                <?php if ( !PG_Blocks_v4::getImageSVG( $args, 'portrait_image', false) && PG_Blocks_v4::getImageUrl( $args, 'portrait_image', 'full' ) ) : ?>
                    <img src="<?php echo PG_Blocks_v4::getImageUrl( $args, 'portrait_image', 'full' ) ?>" alt="<?php echo PG_Blocks_v4::getImageField( $args, 'portrait_image', 'alt', true); ?>" class="<?php echo (PG_Blocks_v4::getImageField( $args, 'portrait_image', 'id', true) ? ('wp-image-' . PG_Blocks_v4::getImageField( $args, 'portrait_image', 'id', true)) : '') ?> absolute h-full inset-0 object-center object-cover w-full" loading="eager" decoding="async" onerror="this.style.display='none'; this.parentElement.classList.add('bg-[url(/assets/images/background_coastal_sunset_cliffs_2000w_q90.webp)]','bg-cover','bg-center');">
                <?php endif; ?>
                <?php if ( PG_Blocks_v4::getImageSVG( $args, 'portrait_image', false) ) : ?>
                    <?php echo PG_Blocks_v4::mergeInlineSVGAttributes( PG_Blocks_v4::getImageSVG( $args, 'portrait_image' ), array( 'class' => 'absolute inset-0 h-full w-full object-cover object-center' ) ) ?>
                <?php endif; ?>
                <!-- Subtle vignette for focus -->
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-charcoal-950/10 via-transparent to-transparent"></div>
            </div>
            <figcaption class="mt-4 flex items-center justify-between">
                <span class="font-sans text-xs uppercase tracking-[0.14em] text-charcoal-600"><?php echo PG_Blocks_v4::getAttribute( $args, 'figure_label' ) ?></span>
                <span class="font-sans text-xs text-charcoal-500"><?php _e( 'Retrato • 4:5', 'tenda21' ); ?></span>
            </figcaption>
        </figure>
        <!-- Bio content -->
        <div class="md:col-span-7 lg:col-span-6 md:pt-2">
            <div class="max-w-2xl space-y-6">
                <p class="font-sans font-light text-lg leading-[1.9] text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'bio_p1' ) ?></p>
                <p class="font-sans font-light text-lg leading-[1.9] text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'bio_p2' ) ?></p>
                <p class="font-sans font-light text-lg leading-[1.9] text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'bio_p3' ) ?></p>
                <p class="font-sans font-light text-lg leading-[1.9] text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'bio_p4' ) ?></p>
            </div>
            <!-- Soft pull-quote card -->
            <div class="mt-10 bg-bone-100/60 p-6">
                <p class="font-serif text-[clamp(1.25rem,2.4vw,1.75rem)] leading-snug text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'pull_quote' ) ?></p>
            </div>
        </div>
    </div>
</section>