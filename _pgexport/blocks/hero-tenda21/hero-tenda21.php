<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "bg-[url(/assets/images/sea-mist-1-optimized.webp)] bg-center bg-cover flex items-center justify-center min-h-screen overflow-hidden pt-24 relative", 'style' => ";".( PG_Blocks_v4::getImageUrl( $args, 'background_image', 'full' ) ? ( 'background-image: url('.PG_Blocks_v4::getImageUrl( $args, 'background_image', 'full' ).')' ) : '' )."", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="absolute inset-0 bg-bone-200/30 backdrop-blur-[1px]"></div>
    <div class="relative z-10 text-center px-6 py-20 max-w-5xl mx-auto w-full">
        <h1 class="font-light font-serif leading-[1.2] mb-8 text-[clamp(3rem,8vw,6rem)] text-charcoal-900 tracking-[0.02em] [animation:fadeInUp_1.2s_ease-out_0.3s_forwards]"><?php echo PG_Blocks_v4::getAttribute( $args, 'title' ) ?></h1>
        <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-700 mb-16 [animation:fadeInUp_1.2s_ease-out_0.6s_forwards]"><?php echo PG_Blocks_v4::getAttribute( $args, 'subtitle' ) ?></p>
        <div class="w-px h-16 bg-charcoal-400 mx-auto opacity-0 [animation:fadeIn_1s_ease-out_1.5s_forwards]"></div>
    </div>
</section>