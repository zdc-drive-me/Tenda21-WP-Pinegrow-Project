<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-12 px-6 bg-bone-100 border-t border-mist-400", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-6xl mx-auto w-full">
        <div class="flex flex-wrap gap-x-12 gap-y-6 items-start">
            <div>
                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'languages_label' ) ?></span>
                <span class="font-sans text-sm text-charcoal-800"><?php _e( 'Portuguese, English', 'tenda21' ); ?></span>
            </div>
            <div>
                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'website_label' ) ?></span>
                <a href="#" class="font-sans text-sm text-forest-700 hover:text-forest-800 transition-colors"><?php _e( 'website.com', 'tenda21' ); ?></a>
            </div>
            <div>
                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo PG_Blocks_v4::getAttribute( $args, 'instagram_label' ) ?></span>
                <a href="#" class="font-sans text-sm text-forest-700 hover:text-forest-800 transition-colors"><?php _e( '@handle', 'tenda21' ); ?></a>
            </div>
        </div>
    </div>
</section>