<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-24 px-6 bg-mist-100", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-6xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12"><?php echo PG_Blocks_v4::getAttribute( $args, 'section_heading' ) ?></h2>
        <div class="space-y-8">
            <!-- Event row — repeated by WordPress query loop -->
            <article class="bg-bone-100 p-8 md:p-10 border-l-2 border-forest-700">
                <div class="grid md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-2 space-y-4">
                        <!-- Linked Experience title -->
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_label' ) ?></span>
                            <a href="#" class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 hover:text-forest-800 transition-colors block"><?php _e( 'Event Title', 'tenda21' ); ?></a>
                        </div>
                        <!-- Date / Time -->
                        <div class="flex flex-wrap gap-x-10 gap-y-3 text-sm">
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'start_label' ) ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( 'DD MMM YYYY', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-600 ml-2"><?php _e( '00:00', 'tenda21' ); ?></span>
                            </div>
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'end_label' ) ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( 'DD MMM YYYY', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-600 ml-2"><?php _e( '00:00', 'tenda21' ); ?></span>
                            </div>
                        </div>
                        <!-- Location -->
                        <div class="flex gap-10 text-sm">
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'format_label' ) ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( 'In-person', 'tenda21' ); ?></span>
                            </div>
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'location_label' ) ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( 'Tenda 21, Serra da Estrela', 'tenda21' ); ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- Price / Status / CTA column -->
                    <div class="space-y-5">
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'price_label' ) ?></span>
                            <span class="font-sans text-sm text-charcoal-800">€ —</span>
                        </div>
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'status_label' ) ?></span>
                            <span class="font-sans text-sm text-charcoal-800"><?php _e( 'Open', 'tenda21' ); ?></span>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600"> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'cta_label' ) ?></span> </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <p class="font-sans font-light text-base text-charcoal-600 mt-10 opacity-80"><?php echo PG_Blocks_v4::getAttribute( $args, 'empty_state_label' ) ?></p>
    </div>
</section>