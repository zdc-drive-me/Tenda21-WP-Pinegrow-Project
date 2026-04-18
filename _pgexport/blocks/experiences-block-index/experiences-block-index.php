<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-32 px-6 bg-mist-200", 'data-block-name' => "experiences-grid", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-7xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-20"><?php echo PG_Blocks_v4::getAttribute( $args, 'section_title' ) ?></h2>
        <div class="grid md:grid-cols-3 gap-8 md:gap-12">
            <!-- Experience Card 1 -->
            <article class="bg-bone-100 p-10 md:p-12 transition-all duration-500 hover:[transform:translateY(-8px)] hover:shadow-[0_20px_60px_rgba(42,41,38,0.08)]">
                <h3 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900 mb-6"><?php echo PG_Blocks_v4::getAttribute( $args, 'card1_title' ) ?></h3>
                <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700 mb-8"><?php echo PG_Blocks_v4::getAttribute( $args, 'card1_description' ) ?></p>
                <span class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'card1_duration' ) ?></span>
            </article>
            <!-- Experience Card 2 -->
            <article class="bg-bone-100 p-10 md:p-12 transition-all duration-500 hover:[transform:translateY(-8px)] hover:shadow-[0_20px_60px_rgba(42,41,38,0.08)]">
                <h3 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900 mb-6"><?php echo PG_Blocks_v4::getAttribute( $args, 'card2_title' ) ?></h3>
                <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700 mb-8"><?php echo PG_Blocks_v4::getAttribute( $args, 'card2_description' ) ?></p>
                <span class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'card2_duration' ) ?></span>
            </article>
            <!-- Experience Card 3 -->
            <article class="bg-bone-100 p-10 md:p-12 transition-all duration-500 hover:[transform:translateY(-8px)] hover:shadow-[0_20px_60px_rgba(42,41,38,0.08)]">
                <h3 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900 mb-6"><?php echo PG_Blocks_v4::getAttribute( $args, 'card3_title' ) ?></h3>
                <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700 mb-8"><?php echo PG_Blocks_v4::getAttribute( $args, 'card3_description' ) ?></p>
                <span class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php echo PG_Blocks_v4::getAttribute( $args, 'card3_duration' ) ?></span>
            </article>
        </div>
    </div>
</section>