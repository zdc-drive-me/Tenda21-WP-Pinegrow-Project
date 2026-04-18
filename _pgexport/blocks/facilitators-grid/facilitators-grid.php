<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-24 px-6 bg-bone-200", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-7xl mx-auto w-full">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Include facilitator-card block within the loop -->
            <article class="group">
                <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'facilitator_permalink' ) ?>" class="block"> <div class="aspect-[3/4] bg-mist-300 bg-cover bg-center mb-6 transition-all duration-500 group-hover:shadow-[0_20px_60px_rgba(42,41,38,0.12)]" style=";<?php echo ( PG_Blocks_v4::getImageUrl( $args, 'facilitator_featured', 'full' ) ? ( 'background-image: url('.PG_Blocks_v4::getImageUrl( $args, 'facilitator_featured', 'full' ).')' ) : '' ); ?>"></div> <div class="space-y-2">
                        <h3 class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 group-hover:text-forest-800 transition-colors"><?php echo PG_Blocks_v4::getAttribute( $args, 'title' ) ?></h3>
                        <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'facilitator_role_label' ) ?></p>
                        <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'facilitator_short_bio' ) ?></p>
                    </div> </a>
            </article>
        </div>
    </div>
</section>