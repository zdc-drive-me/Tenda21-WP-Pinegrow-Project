<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "pt-28 pb-0 bg-bone-200", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-6xl mx-auto px-6">
        <!-- Back link -->
        <a href="events.html" class="inline-flex items-center gap-2 text-xs font-sans uppercase tracking-[0.2em] text-forest-700 hover:text-forest-800 transition-colors mb-8 block"> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'back_link_label' ) ?></span> </a>
        <!-- Featured Image — contained with border -->
        <div class="w-full aspect-[16/7] bg-mist-300 bg-cover bg-center border border-mist-400 overflow-hidden"></div>
        <!-- Content grid -->
        <div class="grid gap-10 lg:grid-cols-[1.2fr,0.8fr] pt-10 pb-16">
            <!-- Left: title + meta -->
            <div class="space-y-7">
                <div class="space-y-4">
                    <div class="space-y-0.5">
                        <p class="font-sans uppercase text-[0.65rem] tracking-[0.25em] text-charcoal-500"><?php echo PG_Blocks_v4::getAttribute( $args, 'experience_label' ) ?></p>
                        <a href="#" class="font-sans inline-flex items-center text-xs uppercase tracking-[0.2em] text-charcoal-700 hover:text-charcoal-900 transition-colors"><?php _e( 'Silent Immersion', 'tenda21' ); ?></a>
                    </div>
                    <h1 class="font-serif font-light text-[clamp(2.4rem,5vw,4rem)] leading-[1.15] tracking-[0.01em] text-charcoal-900"><?php _e( 'Return to Stillness Retreat', 'tenda21' ); ?></h1>
                    <p class="font-sans font-light text-base leading-[1.85] text-charcoal-600 max-w-[58ch]"><?php _e( 'A three-day contemplative retreat with noble silence, mindful movement, and evening integration fires led by Ana Silva and guests.', 'tenda21' ); ?></p>
                </div>
                <!-- Location + Facilitators -->
                <div class="flex flex-wrap gap-8 pt-5 border-t border-mist-400">
                    <div class="space-y-1">
                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php echo PG_Blocks_v4::getAttribute( $args, 'type_label' ) ?></span>
                        <span class="font-sans text-sm text-charcoal-700"><?php _e( 'On-site', 'tenda21' ); ?></span>
                    </div>
                    <div class="space-y-1">
                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php echo PG_Blocks_v4::getAttribute( $args, 'location_label' ) ?></span>
                        <span class="font-sans text-sm text-charcoal-700"><?php _e( 'Serra da Estrela · Portugal', 'tenda21' ); ?></span>
                    </div>
                    <div class="space-y-1">
                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php echo PG_Blocks_v4::getAttribute( $args, 'facilitated_by_label' ) ?></span>
                        <div class="flex flex-wrap gap-2 pt-0.5" data-repeater="event_facilitators">
                            <a href="#" class="font-sans inline-flex items-center text-xs uppercase tracking-[0.15em] border border-mist-500 text-charcoal-700 hover:border-charcoal-700 hover:text-charcoal-900 transition-colors px-3 py-1"><?php _e( 'Ana Silva', 'tenda21' ); ?></a>
                            <a href="#" class="font-sans inline-flex items-center text-xs uppercase tracking-[0.15em] border border-mist-500 text-charcoal-700 hover:border-charcoal-700 hover:text-charcoal-900 transition-colors px-3 py-1"><?php _e( 'Rafael Santos', 'tenda21' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right: date + booking -->
            <div class="space-y-4">
                <!-- Date meta — compact single-line -->
                <div class="border border-mist-400 bg-bone-100/70 px-4 py-3 flex items-center justify-between gap-2">
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-400 shrink-0"><?php echo PG_Blocks_v4::getAttribute( $args, 'starts_label' ) ?></span>
                        <span class="font-serif text-sm text-charcoal-900"><?php _e( '12 April 2024', 'tenda21' ); ?></span>
                        <span class="font-sans text-[0.65rem] text-charcoal-500"><?php _e( '09:00', 'tenda21' ); ?></span>
                    </div>
                    <span class="font-sans text-[0.6rem] text-charcoal-300 shrink-0 select-none">→</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-400 shrink-0"><?php echo PG_Blocks_v4::getAttribute( $args, 'ends_label' ) ?></span>
                        <span class="font-serif text-sm text-charcoal-800"><?php _e( '14 April 2024', 'tenda21' ); ?></span>
                        <span class="font-sans text-[0.65rem] text-charcoal-500"><?php _e( '14:00', 'tenda21' ); ?></span>
                    </div>
                    <span class="font-sans text-[0.55rem] uppercase tracking-[0.15em] text-charcoal-400 shrink-0 hidden lg:block"><?php _e( 'GMT+1', 'tenda21' ); ?></span>
                </div>
                <!-- Booking card -->
                <div class="flex flex-col gap-5 bg-charcoal-900 px-5 py-5 text-bone-50">
                    <div class="flex items-end justify-between">
                        <div class="space-y-1">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.25em] font-medium text-bone-200/60 block"><?php echo PG_Blocks_v4::getAttribute( $args, 'investment_label' ) ?></span>
                            <span class="font-serif text-3xl leading-tight text-bone-50"><?php _e( '€420', 'tenda21' ); ?></span>
                        </div>
                        <span class="inline-flex items-center border border-bone-200/30 px-3 py-1 text-[0.58rem] font-sans uppercase tracking-[0.18em] text-bone-200"><?php _e( 'Few seats left', 'tenda21' ); ?></span>
                    </div>
                    <p class="font-sans text-xs leading-relaxed text-bone-200/55"><?php echo PG_Blocks_v4::getAttribute( $args, 'booking_note' ) ?></p>
                    <a href="mailto:hello@tenda21.com" class="inline-flex items-center justify-center bg-bone-50 text-charcoal-900 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5 transition-all duration-300 hover:bg-clay-400 hover:text-bone-50"><?php _e( 'Book Your Place', 'tenda21' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>