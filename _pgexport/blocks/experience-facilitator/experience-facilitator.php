<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-24 px-6 bg-mist-100", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-5xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12"><?php echo PG_Blocks_v4::getAttribute( $args, 'heading_label' ) ?></h2>
        <div class="grid md:grid-cols-4 gap-8 items-start">
            <div class="md:col-span-1">
                <div class="aspect-[3/4] bg-mist-300 bg-cover bg-center mb-4"></div>
            </div>
            <div class="md:col-span-3 space-y-4">
                <div>
                    <h3 class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 mb-2"><?php _e( 'Facilitator Name', 'tenda21' ); ?></h3>
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Role / Practice', 'tenda21' ); ?></p>
                </div>
                <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"><?php _e( 'Short bio excerpt for the facilitator.', 'tenda21' ); ?></p>
                <a href="facilitators.html" class="inline-block font-sans text-sm text-forest-700 hover:text-forest-800 uppercase tracking-[0.1em] transition-colors"><?php echo PG_Blocks_v4::getAttribute( $args, 'link_label' ) ?></a>
            </div>
        </div>
    </div>
</section>