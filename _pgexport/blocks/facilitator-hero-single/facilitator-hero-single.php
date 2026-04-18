<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "relative pt-32 pb-24 px-6 bg-bone-200", 'data-block-name' => "facilitator-hero", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-6xl mx-auto w-full">
        <div class="grid md:grid-cols-5 gap-12 items-start">
            <div class="md:col-span-2">
                <div class="aspect-[3/4] bg-mist-300 bg-[url('https://images.unsplash.com/photo-1506677162879-a52bf9de54d0?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDl8fG1lZGl0YXRpb24lMjByZXRyZWF0fGVufDB8fHx8MTc3MzA3ODExNHww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop')] bg-cover bg-center sticky top-32" style=";<?php echo ( PG_Blocks_v4::getImageUrl( $args, 'facilitator_featured', 'full' ) ? ( 'background-image: url('.PG_Blocks_v4::getImageUrl( $args, 'facilitator_featured', 'full' ).')' ) : '' ); ?>"></div>
            </div>
            <div class="md:col-span-3 space-y-8">
                <div>
                    <a href="facilitators.html" class="inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-6 transition-colors"><?php _e( '← All Facilitators', 'tenda21' ); ?></a>
                    <h1 class="font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4"><?php echo PG_Blocks_v4::getAttribute( $args, 'title' ) ?></h1>
                    <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'facilitator_role_label' ) ?></p>
                </div>
                <div class="space-y-6">
                    <?php echo PG_Blocks_v4::getAttribute( $args, 'post_content' ) ?>
                </div>
            </div>
        </div>
    </div>
</section>