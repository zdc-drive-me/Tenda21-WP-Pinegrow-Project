<?php get_header(); ?>

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-bone-200/90 backdrop-blur-md border-b border-mist-400" data-block-name="main-navigation">
    <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full">
        <a href="index.html" class="font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </a>
        <div class="flex gap-8 items-center">
            <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Home', 'tenda21' ); ?></a>
            <a href="a-anfitria.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'A Anfitriã', 'tenda21' ); ?></a>
            <a href="experiences.html" class="font-sans text-sm font-medium text-charcoal-900 tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
            <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Contact', 'tenda21' ); ?></a>
        </div>
    </div>
</nav>
<!-- Page Hero -->
<section class="relative pt-40 pb-24 px-6 bg-bone-200" data-block-name="experiences-hero">
    <div class="max-w-4xl mx-auto text-center w-full">
        <h1 class="font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-8"> <?php _e( 'Experiences', 'tenda21' ); ?> </h1>
        <p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto"> <?php _e( 'Each immersion is designed to guide you back to what matters most. Choose the path that calls to you—or let us help you find it.', 'tenda21' ); ?> </p>
    </div>
</section>
<!-- Experiences Grid -->
<section class="py-24 px-6 bg-bone-200 border-b border-mist-400" data-block-name="experiences-grid">
    <div class="max-w-7xl mx-auto w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <a href="experience-conscious-gatherings.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1719495851723-bff1a4ffcf40?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDl8fGNvbnNjaW91cyUyMGdhdGhlcmluZ3xlbnwwfHx8fDE3NzMxMzc4MDN8MA&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Community', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Conscious Gatherings', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Circle-based sessions for intentional connection and shared presence.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
            <a href="experience-breathwork.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1713429204572-8a951faffa74?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDN8fGJyZWF0aHdvcmt8ZW58MHx8fHwxNzczMTM3Nzk2fDA&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Embodiment', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Breathwork', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Conscious connected breathing journeys to release and realign.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
            <a href="experience-bodywork.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1610211834087-f6fca85cf5d2?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDZ8fGJvZHl3b3JrJTIwdGhlcmFweXxlbnwwfHx8fDE3NzMxMzc3OTZ8MA&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Somatic', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Bodywork', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Hands-on therapies and craniosacral-inspired touch for nervous system reset.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
            <a href="experience-dance.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1542887800-faca0261c9e1?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDd8fGRhbmNlfGVufDB8fHx8MTc3MzEzNzgwNnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Movement', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Dance', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Liberating ecstatic dance and somatic flow to move emotion through.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
            <a href="experience-family-constellations.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1764253340521-c920fd89a66e?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDF8fGZhbWlseSUyMGNvbnN0ZWxsYXRpb25zfGVufDB8fHx8MTc3MzEzNzc5OHww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Systemic Healing', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Family Constellations', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Reveal ancestral patterns and reweave family energetics with care.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
            <a href="experience-akashic-records.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1694902967176-070e63512b3c?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDE5fHxhc3Ryb2xvZ3klMjByZWFkaW5nfGVufDB8fHx8MTc3MzEzNzc5OXww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Divination', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Akashic Records • Astrology • Tarot', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Multi-modal readings weaving cosmic maps, intuition, and archetypal cards.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
            <a href="experience-medicine-cerimonies.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1502082553048-f009c37129b9?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDN8fGNlcmVtb25pYWwlMjBmaXJlfGVufDB8fHx8MTc3MzEzNzc5OXww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Ceremony', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Medicine Cerimonies', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Held spaces for plant medicine immersion with integration support.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
            <a href="experience-fire-circle.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1723091192079-1c5ec953ffb8?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDR8fGZpcmUlMjBjaXJjbGV8ZW58MHx8fHwxNzczMTM3ODA5fDA&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Ritual', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Fire Circle', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Night gatherings for prayer, song, and ancestral remembrance by the fire.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
            <a href="experience-womens-circle.html" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]"> <div class="aspect-[4/3] bg-mist-200 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1589565920470-c051a55c9c5d?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDZ8fHdvbWVucyUyMGNpcmNsZXxlbnwwfHx8fDE3NzMxMzc4MTB8MA&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop');"></div> <div class="p-6 space-y-2">
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Circle', 'tenda21' ); ?></p>
                    <h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3"><?php _e( 'Women\'s Circle', 'tenda21' ); ?></h2>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600"><?php _e( 'Monthly circles for feminine wisdom, storytelling, and mutual uplift.', 'tenda21' ); ?></p>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-500 block pt-2"></span>
                </div> </a>
        </div>
    </div>
</section>
<!-- CTA Section -->
<!-- Footer -->
<footer class="py-20 px-6 bg-bone-200 border-t border-mist-400" data-block-name="site-footer">
    <div class="max-w-7xl mx-auto w-full">
        <div class="text-center mb-12">
            <a href="index.html" class="font-serif font-light text-3xl text-charcoal-900 hover:text-charcoal-700 transition-colors inline-block mb-8"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </a>
            <div class="flex gap-8 items-center justify-center mb-8">
                <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Home', 'tenda21' ); ?></a>
                <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
                <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Contact', 'tenda21' ); ?></a>
            </div>
        </div>
        <div class="text-center border-t border-mist-400 pt-8">
            <p class="font-sans text-sm font-light text-charcoal-600 mb-4"> <?php _e( 'hello@tenda21.com', 'tenda21' ); ?> </p>
            <p class="font-sans text-xs font-light text-charcoal-500 uppercase tracking-[0.12em]"> <?php _e( '© 2026 Tenda 21 — All Rights Reserved', 'tenda21' ); ?> </p>
        </div>
    </div>
</footer>        

<?php get_footer(); ?>