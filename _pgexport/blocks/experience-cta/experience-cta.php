<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-24 px-6 bg-bone-100", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-3xl mx-auto text-center w-full space-y-8">
        <p class="font-sans font-light text-base leading-[1.8] text-charcoal-600 max-w-[60ch] mx-auto"><?php echo PG_Blocks_v4::getAttribute( $args, 'experience_booking_note' ) ?></p>
        <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'experience_cta_url' ) ?>" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-sm uppercase tracking-[0.12em] px-12 py-5 transition-all duration-300 hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]"><?php echo PG_Blocks_v4::getAttribute( $args, 'experience_cta_label' ) ?></a>
    </div>
</section>