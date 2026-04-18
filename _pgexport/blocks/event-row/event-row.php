<article <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "bg-bone-50/90 border border-mist-300 px-4 py-4 md:px-6 md:py-5 shadow-[0_1px_0_rgba(42,41,38,0.04)]", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="grid grid-cols-[96px_1fr] md:grid-cols-[120px_1fr_148px_164px] gap-4 md:gap-x-6 items-start">
        <!-- thumbnail -->
        <div class="aspect-square rounded-sm bg-mist-300 bg-cover bg-center shrink-0" style=";<?php echo ( PG_Blocks_v4::getImageUrl( $args, 'event_featured', 'full' ) ? ( 'background-image: url('.PG_Blocks_v4::getImageUrl( $args, 'event_featured', 'full' ).')' ) : '' ); ?>"></div>
        <!-- identity -->
        <div class="min-w-0 space-y-2">
            <div class="flex flex-wrap items-baseline gap-x-4 gap-y-1">
                <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'event_experience' ) ?>" class="font-serif text-xl md:text-2xl leading-tight text-charcoal-900 underline-offset-4 hover:underline"><?php _e( 'Silent Immersion Weekend', 'tenda21' ); ?></a>
                <span class="inline-flex items-center gap-1.5 text-[0.65rem] font-sans uppercase tracking-[0.25em] text-charcoal-500"> <span class="h-px w-4 bg-charcoal-400"></span> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'event_location_type' ) ?></span> </span>
            </div>
            <div class="flex flex-wrap items-center gap-x-3 gap-y-1.5">
                <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500"><?php _e( 'Guided by', 'tenda21' ); ?></span>
                <div class="flex flex-wrap gap-1.5" data-repeater="event_facilitators">
                    <a href="#" class="inline-flex items-center border border-mist-400 px-2 py-0.5 text-[0.7rem] text-charcoal-700 hover:border-charcoal-700 transition-colors"><?php _e( 'Ana Silva', 'tenda21' ); ?></a>
                    <a href="#" class="inline-flex items-center border border-mist-400 px-2 py-0.5 text-[0.7rem] text-charcoal-700 hover:border-charcoal-700 transition-colors"><?php _e( 'Rafael Santos', 'tenda21' ); ?></a>
                </div>
            </div>
            <p class="font-sans text-sm leading-relaxed text-charcoal-600 line-clamp-2"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_excerpt' ) ?></p>
            <span class="font-sans text-xs text-charcoal-500"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_location' ) ?></span>
        </div>
        <!-- date — desktop only -->
        <div class="hidden md:flex flex-col gap-1.5 border-l border-mist-300 pl-5 self-stretch justify-center">
            <div class="space-y-0.5">
                <span class="font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500"><?php _e( 'Starts', 'tenda21' ); ?></span>
                <p class="font-serif text-base leading-tight text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_start_date' ) ?></p>
                <p class="font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_start_time' ) ?></p>
            </div>
            <div class="h-px w-full bg-mist-300 my-1.5"></div>
            <div class="space-y-0.5">
                <span class="font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500"><?php _e( 'Ends', 'tenda21' ); ?></span>
                <p class="font-serif text-sm leading-tight text-charcoal-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_end_date' ) ?></p>
                <p class="font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_end_time' ) ?></p>
            </div>
        </div>
        <!-- booking — desktop only -->
        <div class="hidden md:flex flex-col justify-between gap-4 border-l border-mist-300 pl-5 self-stretch">
            <div class="space-y-1.5">
                <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500 block"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_price_label' ) ?></span>
                <span class="font-serif text-xl text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_price' ) ?></span>
                <div>
                    <span class="inline-flex items-center border border-charcoal-900/20 px-2.5 py-0.5 text-[0.6rem] font-sans uppercase tracking-[0.2em] text-charcoal-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_booking_status' ) ?></span>
                </div>
            </div>
            <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'event_booking' ) ?>" class="inline-flex items-center justify-center bg-clay-500 text-bone-50 font-sans font-medium text-[0.65rem] uppercase tracking-[0.2em] px-5 py-2.5 transition-all duration-300 hover:bg-clay-600"><?php _e( 'Book Your Place', 'tenda21' ); ?></a>
        </div>
        <!-- mobile footer bar -->
        <div class="col-span-2 md:hidden flex items-center justify-between gap-3 border-t border-mist-300 pt-3">
            <div class="space-y-0.5">
                <p class="font-serif text-sm text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_start_date' ) ?></p>
                <p class="font-sans text-[0.6rem] uppercase tracking-[0.2em] text-charcoal-500"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_start_time' ) ?></p>
            </div>
            <div class="flex items-center gap-3">
                <span class="font-serif text-lg text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_price' ) ?></span>
                <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'event_booking' ) ?>" class="inline-flex items-center justify-center bg-clay-500 text-bone-50 font-sans font-medium text-[0.6rem] uppercase tracking-[0.2em] px-4 py-2 hover:bg-clay-600"><?php _e( 'Book', 'tenda21' ); ?></a>
            </div>
        </div>
    </div>
</article>