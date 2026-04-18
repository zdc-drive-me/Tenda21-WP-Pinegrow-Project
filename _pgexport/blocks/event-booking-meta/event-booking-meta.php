<div <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "flex flex-col gap-5 bg-charcoal-900 px-5 py-5 text-bone-50", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="flex items-end justify-between">
        <div class="space-y-1">
            <span class="font-sans uppercase text-[0.55rem] tracking-[0.25em] font-medium text-bone-200/60 block"><?php echo PG_Blocks_v4::getAttribute( $args, 'investment_label' ) ?></span>
            <span class="font-serif text-3xl leading-tight text-bone-50"><?php _e( '€420', 'tenda21' ); ?></span>
        </div>
        <span class="inline-flex items-center border border-bone-200/30 px-3 py-1 text-[0.58rem] font-sans uppercase tracking-[0.18em] text-bone-200"><?php _e( 'Few seats left', 'tenda21' ); ?></span>
    </div>
    <p class="font-sans text-xs leading-relaxed text-bone-200/55"><?php echo PG_Blocks_v4::getAttribute( $args, 'booking_note' ) ?></p>
    <a href="mailto:hello@tenda21.com" class="inline-flex items-center justify-center bg-bone-50 text-charcoal-900 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5 transition-all duration-300 hover:bg-clay-400 hover:text-bone-50"> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'booking_cta_label' ) ?></span> </a>
</div>