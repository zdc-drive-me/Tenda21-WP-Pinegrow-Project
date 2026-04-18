<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-32 px-6 bg-bone-100", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-3xl mx-auto text-center w-full">
        <h2 class="font-serif font-light text-[clamp(1.75rem,4vw,3rem)] leading-[1.4] text-charcoal-800 mb-8"><?php echo PG_Blocks_v4::getAttribute( $args, 'facilitator_cta_heading' ) ?></h2>
        <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700 mb-12 max-w-[65ch] mx-auto"><?php echo PG_Blocks_v4::getAttribute( $args, 'facilitator_cta_body' ) ?></p>
        <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'facilitator_cta_link' ) ?>" class="bg-clay-500 duration-300 font-normal font-sans inline-block px-12 py-5 text-bone-50 text-sm tracking-[0.12em] transition-all uppercase hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]"> <?php _e( 'Get in Touch', 'tenda21' ); ?> </a>
    </div>
</section>