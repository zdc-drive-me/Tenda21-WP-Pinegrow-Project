<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "relative bg-bone-200 min-h-[65vh] flex flex-col items-center justify-center pt-32 pb-24 px-6 md:px-16 overflow-hidden text-center", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-clay-400 to-transparent"></div>
    <div class="relative z-10 max-w-5xl mx-auto w-full flex flex-col items-center">
        <div class="flex items-center gap-5 mb-10">
            <span class="block w-12 h-px bg-clay-400 shrink-0"></span>
            <p class="font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-forest-700 whitespace-nowrap"><?php echo PG_Blocks_v4::getAttribute( $args, 'events_eyebrow' ) ?></p>
            <span class="block w-12 h-px bg-clay-400 shrink-0"></span>
        </div>
        <h1 class="font-serif font-light text-[clamp(3.8rem,8vw,7.5rem)] leading-[1.0] tracking-[-0.01em] text-charcoal-900 mb-10"><?php echo PG_Blocks_v4::getAttribute( $args, 'events_title' ) ?></h1>
        <div class="w-px h-10 bg-mist-400 mb-10"></div>
        <p class="font-sans font-light text-base md:text-lg leading-[1.9] text-charcoal-700 max-w-[52ch] mx-auto"><?php echo PG_Blocks_v4::getAttribute( $args, 'events_intro' ) ?></p>
    </div>
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50">
        <span class="font-sans uppercase text-[0.5rem] tracking-[0.28em] text-charcoal-500"><?php echo PG_Blocks_v4::getAttribute( $args, 'events_scroll_label' ) ?></span>
        <div class="w-px h-8 bg-mist-500"></div>
    </div>
</section>