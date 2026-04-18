<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-24 px-6 bg-bone-200 border-b border-mist-400", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-7xl mx-auto w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Include experience-card block within the loop -->
            <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'experience_permalink' ) ?>" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style=";<?php echo ( PG_Blocks_v4::getImageUrl( $args, 'experience_featured', 'full' ) ? ( 'background-image: url('.PG_Blocks_v4::getImageUrl( $args, 'experience_featured', 'full' ).')' ) : '' ); ?>"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'experience_category_label' ) ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php echo PG_Blocks_v4::getAttribute( $args, 'title' ) ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php echo PG_Blocks_v4::getAttribute( $args, 'experience_short_description' ) ?></p>
                </div> </a>
        </div>
    </div>
</section>