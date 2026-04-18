<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-12 px-6 bg-bone-200", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-6xl mx-auto w-full">
        <div class="pt-8 border-t border-mist-400">
            <h3 class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-4"><?php _e( 'Areas of Expertise', 'tenda21' ); ?></h3>
            <div class="flex flex-wrap gap-3">
                <?php echo PG_Blocks_v4::getAttribute( $args, 'facilitator_specialties' ) ?>
            </div>
        </div>
    </div>
</section>