<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "relative pt-40 pb-24 px-6 bg-bone-200", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-4xl mx-auto text-center w-full">
        <h1 class="font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-8"><?php echo PG_Blocks_v4::getAttribute( $args, 'title' ) ?></h1>
        <p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto"><?php echo PG_Blocks_v4::getAttribute( $args, 'intro' ) ?></p>
    </div>
</section>