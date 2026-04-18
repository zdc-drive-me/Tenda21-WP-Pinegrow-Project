<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-32 md:py-48 px-6 bg-bone-200", 'data-block-name' => "philosophy-section", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-4xl mx-auto space-y-16 w-full">
        <p class="font-serif font-light text-[clamp(1.75rem,4vw,3rem)] leading-[1.4] text-charcoal-800 text-center"><?php echo PG_Blocks_v4::getAttribute( $args, 'quote' ) ?></p>
        <p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto"><?php echo PG_Blocks_v4::getAttribute( $args, 'paragraph_1' ) ?></p>
        <p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto"><?php echo PG_Blocks_v4::getAttribute( $args, 'paragraph_2' ) ?></p>
        <p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto"><?php echo PG_Blocks_v4::getAttribute( $args, 'paragraph_3' ) ?></p>
    </div>
</section>