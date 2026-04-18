<div <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "flex flex-col gap-5 rounded-sm border border-mist-300 bg-bone-50/80 p-6", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="space-y-2">
        <span class="font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-charcoal-500"><?php echo PG_Blocks_v4::getAttribute( $args, 'starts_label' ) ?></span>
        <p class="font-serif text-4xl leading-tight text-charcoal-900"><?php _e( '12 April 2024', 'tenda21' ); ?></p>
        <p class="font-sans text-sm uppercase tracking-[0.3em] text-charcoal-600"><?php _e( '09:00', 'tenda21' ); ?></p>
    </div>
    <div class="h-px w-full bg-mist-300"></div>
    <div class="space-y-2">
        <span class="font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-charcoal-500"><?php echo PG_Blocks_v4::getAttribute( $args, 'ends_label' ) ?></span>
        <p class="font-serif text-2xl leading-tight text-charcoal-800"><?php _e( '14 April 2024', 'tenda21' ); ?></p>
        <p class="font-sans text-sm uppercase tracking-[0.3em] text-charcoal-600"><?php _e( '14:00', 'tenda21' ); ?></p>
    </div>
    <p class="font-sans text-[0.6rem] uppercase tracking-[0.3em] text-charcoal-500"><?php echo PG_Blocks_v4::getAttribute( $args, 'timezone_label' ) ?></p>
</div>