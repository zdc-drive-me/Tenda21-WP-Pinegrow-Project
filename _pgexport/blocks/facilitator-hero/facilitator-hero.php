<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "relative pt-32 pb-24 px-6 bg-bone-200", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-6xl mx-auto w-full">
        <div class="grid md:grid-cols-5 gap-12 items-start">
            <div class="md:col-span-2">
                <div class="aspect-[3/4] bg-mist-300 bg-cover bg-center sticky top-32"></div>
            </div>
            <div class="md:col-span-3 space-y-8">
                <div>
                    <a href="facilitators.html" class="inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-6 transition-colors"> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'back_link_label' ) ?></span> </a>
                    <h1 class="font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4"><?php _e( 'Facilitator Name', 'tenda21' ); ?></h1>
                    <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Role / Practice', 'tenda21' ); ?></p>
                </div>
                <div class="space-y-6">
                    <p class="font-light font-sans leading-[1.8] text-charcoal-700 text-lg md:text-xl"><?php _e( 'Facilitator long bio text goes here. This is the WordPress post content area.', 'tenda21' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>