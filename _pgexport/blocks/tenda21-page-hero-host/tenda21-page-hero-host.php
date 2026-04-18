<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "relative pt-40 pb-16 px-6 bg-bone-200", 'data-block-name' => "page-hero-host", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-4xl mx-auto w-full text-center">
        <h1 class="font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4"><?php echo PG_Blocks_v4::getAttribute( $args, 'hero_title' ) ?></h1>
        <p class="font-sans font-light text-base uppercase tracking-[0.12em] text-charcoal-600"><?php echo PG_Blocks_v4::getAttribute( $args, 'hero_subtitle' ) ?></p>
    </div>
</section>