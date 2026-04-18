<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-16 px-6 bg-bone-200", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <?php rewind_posts(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php PG_Helper_v2::rememberShownPost(); ?>
            <div class="max-w-6xl mx-auto text-center">
                <a href="experiences.html" class="inline-block font-sans text-sm text-charcoal-700 hover:text-charcoal-900 uppercase tracking-[0.1em] transition-colors"><?php _e( '← View All Experiences', 'tenda21' ); ?></a>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'tenda21' ); ?></p>
    <?php endif; ?>
</section>