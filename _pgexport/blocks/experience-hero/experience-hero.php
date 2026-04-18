<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "relative pt-32 pb-16 px-6 bg-bone-200", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-6xl mx-auto w-full">
        <a href="experiences.html" class="inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-8 transition-colors"> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'back_link_label' ) ?></span> </a>
        <div class="grid md:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <div class="space-y-3">
                    <h1 class="font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900"><?php _e( 'Experience Title', 'tenda21' ); ?></h1>
                    <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Category', 'tenda21' ); ?></p>
                </div>
                <p class="font-sans font-light text-xl leading-[1.8] text-charcoal-700"><?php _e( 'Intro text for the experience.', 'tenda21' ); ?></p>
                <div class="flex items-start gap-10 pt-2 border-t border-mist-400">
                    <div class="pt-6">
                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'duration_label' ) ?></span>
                        <span class="font-sans text-sm text-charcoal-800"><?php _e( 'Flexible', 'tenda21' ); ?></span>
                    </div>
                    <div class="pt-6">
                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'format_label' ) ?></span>
                        <span class="font-sans text-sm text-charcoal-800"><?php _e( 'Group &amp; Private', 'tenda21' ); ?></span>
                    </div>
                </div>
            </div>
            <div class="aspect-[4/5] bg-mist-300 bg-cover bg-center sticky top-32"></div>
        </div>
    </div>
</section>