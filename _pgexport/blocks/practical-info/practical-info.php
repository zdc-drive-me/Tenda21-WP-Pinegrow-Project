<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-32 px-6 bg-bone-100", 'data-block-name' => "practical-info", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-5xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-20"><?php echo PG_Blocks_v4::getAttribute( $args, 'section_label' ) ?></h2>
        <div class="grid md:grid-cols-2 gap-12 md:gap-20">
            <div class="space-y-8">
                <div>
                    <h3 class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-3"><?php echo PG_Blocks_v4::getAttribute( $args, 'location_heading' ) ?></h3>
                    <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'location_text' ) ?></p>
                </div>
                <div>
                    <h3 class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-3"><?php echo PG_Blocks_v4::getAttribute( $args, 'accommodation_heading' ) ?></h3>
                    <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'accommodation_text' ) ?></p>
                </div>
            </div>
            <div class="space-y-8">
                <div>
                    <h3 class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-3"><?php echo PG_Blocks_v4::getAttribute( $args, 'included_heading' ) ?></h3>
                    <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'included_text' ) ?></p>
                </div>
                <div>
                    <h3 class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-3"><?php echo PG_Blocks_v4::getAttribute( $args, 'not_included_heading' ) ?></h3>
                    <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-800"><?php echo PG_Blocks_v4::getAttribute( $args, 'not_included_text' ) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>