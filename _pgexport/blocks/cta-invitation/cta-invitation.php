<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-48 px-6 bg-bone-200", 'data-block-name' => "cta-invitation", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-3xl mx-auto text-center w-full">
        <p class="font-serif font-light text-[clamp(1.5rem,3.5vw,2.5rem)] leading-[1.4] text-charcoal-800 mb-12"><?php echo PG_Blocks_v4::getAttribute( $args, 'heading' ) ?></p>
        <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700 mb-16 max-w-[65ch] mx-auto"><?php echo PG_Blocks_v4::getAttribute( $args, 'description' ) ?></p>
        <a href="mailto:hello@tenda21.com" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-sm uppercase tracking-[0.12em] px-12 py-5 transition-all duration-300 hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]"><?php echo PG_Blocks_v4::getAttribute( $args, 'button_label' ) ?></a>
    </div>
</section>