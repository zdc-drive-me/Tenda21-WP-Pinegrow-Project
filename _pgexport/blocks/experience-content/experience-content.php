<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-24 px-6 bg-mist-100", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-4xl mx-auto w-full space-y-16">
        <!-- What to Expect -->
        <div class="space-y-8">
            <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'expectations_label' ) ?></h2>
            <div class="space-y-6">
                <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"><?php _e( 'Describe what participants can expect during the experience.', 'tenda21' ); ?></p>
            </div>
        </div>
        <!-- Benefits -->
        <div class="border-t border-mist-400 pt-12 space-y-8">
            <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'benefits_label' ) ?></h2>
            <div class="space-y-4">
                <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"><?php _e( 'List the key benefits participants will receive.', 'tenda21' ); ?></p>
            </div>
        </div>
        <!-- Who This Is For -->
        <div class="border-t border-mist-400 pt-12 space-y-8">
            <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"><?php echo PG_Blocks_v4::getAttribute( $args, 'audience_label' ) ?></h2>
            <div class="space-y-6">
                <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"><?php _e( 'Describe who the experience is suited for, including any contraindications.', 'tenda21' ); ?></p>
            </div>
        </div>
    </div>
</section>