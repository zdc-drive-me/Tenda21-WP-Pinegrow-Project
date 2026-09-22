<?php get_header(); ?>

<!-- Hero Section -->
<!-- Navigation -->
<nav class="backdrop-blur-xs bg-bone-200/60 border-mist-400/50 fixed left-0 right-0 site-main-nav top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full">
        <a href="<?php echo esc_url( home_url() ); ?>" class="font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors" rel="home"><?php bloginfo( 'name' ); ?></a>
        <div class="flex gap-8 items-center">
            <ul class="flex gap-8 items-center">
                <li class="nav-item">
                    <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Facilitators', 'tenda21' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="a-anfitria.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'A Anfitriã', 'tenda21' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Contact', 'tenda21' ); ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Philosophy Section -->
<!-- Experience Section -->
<!-- Space Section -->
<!-- Practical Information -->
<!-- Invitation Section -->
<!-- Footer -->
<style>@keyframes fadeInUp { from {  opacity: 0;  transform: translateY(20px); }  to {  opacity: 1;  transform: translateY(0); } } @keyframes fadeIn { from {  opacity: 0; }  to {  opacity: 1; } } @keyframes fadeInScale { from {  opacity: 0;  transform: scale(0.98); }  to {  opacity: 1;  transform: scale(1); } }</style>        

<?php get_footer(); ?>