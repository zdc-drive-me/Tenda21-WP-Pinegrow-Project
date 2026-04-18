<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-24 px-6 bg-bone-200", 'data-block-name' => "upcoming-events", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-5xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-16"><?php _e( 'Upcoming Sessions', 'tenda21' ); ?></h2>
        <div class="space-y-6">
            <article class="bg-bone-100 p-8 border-l-2 border-forest-700">
                <div class="grid md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-2 space-y-3">
                        <h3 class="font-serif font-light text-2xl leading-[1.3] text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_title' ) ?></h3>
                        <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_description' ) ?></p>
                        <div class="flex gap-8 text-sm">
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Duration', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_duration' ) ?></span>
                            </div>
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Spots', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_spots' ) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-2"><?php _e( 'Date', 'tenda21' ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_date' ) ?></span>
                        </div>
                        <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v4::getLinkUrl( $args, 'event_cta_url' ) ?>" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_cta_label' ) ?></a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>