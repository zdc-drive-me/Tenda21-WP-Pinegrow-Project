<?php get_header(); ?>

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-bone-200/90 backdrop-blur-md border-b border-mist-400" data-block-name="main-navigation">
    <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full">
        <a href="index.html" class="font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors"><?php _e( 'Tenda 21', 'tenda21' ); ?></a>
        <div class="flex gap-8 items-center">
            <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Home', 'tenda21' ); ?></a>
            <a href="a-anfitria.html" class="font-sans text-sm font-medium text-charcoal-900 tracking-[0.1em]"><?php _e( 'A Anfitriã', 'tenda21' ); ?></a>
            <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
            <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Facilitators', 'tenda21' ); ?></a>
            <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Contact', 'tenda21' ); ?></a>
        </div>
    </div>
</nav>
<!-- Page Hero -->
<!-- Host Profile -->
<!-- Footer -->
<footer class="py-20 px-6 bg-bone-200" data-block-name="site-footer">
    <div class="max-w-7xl mx-auto w-full">
        <div class="text-center mb-12">
            <a href="index.html" class="font-serif font-light text-3xl text-charcoal-900 hover:text-charcoal-700 transition-colors inline-block mb-8"><?php _e( 'Tenda 21', 'tenda21' ); ?></a>
            <div class="flex gap-8 items-center justify-center mb-8">
                <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Home', 'tenda21' ); ?></a>
                <a href="a-anfitria.html" class="font-sans text-sm font-medium text-charcoal-900 tracking-[0.1em]"><?php _e( 'A Anfitriã', 'tenda21' ); ?></a>
                <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
                <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Facilitators', 'tenda21' ); ?></a>
                <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Contact', 'tenda21' ); ?></a>
            </div>
        </div>
        <div class="text-center pt-8">
            <p class="font-sans text-sm font-light text-charcoal-600 mb-4"><?php _e( 'hello@tenda21.com', 'tenda21' ); ?></p>
            <p class="font-sans text-xs font-light text-charcoal-500 uppercase tracking-[0.12em]"><?php _e( '© 2026 Tenda 21 — All Rights Reserved', 'tenda21' ); ?></p>
        </div>
    </div>
</footer>        

<?php get_footer(); ?>