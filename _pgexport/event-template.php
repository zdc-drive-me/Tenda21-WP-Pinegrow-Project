<?php get_header(); ?>

        <!-- Navigation -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-bone-200/90 backdrop-blur-md border-b border-mist-400" data-block-name="main-navigation">
            <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full">
                <a href="index.html" class="font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors"><?php _e( 'Tenda 21', 'tenda21' ); ?></a>
                <div class="flex gap-8 items-center">
                    <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Home', 'tenda21' ); ?></a>
                    <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
                    <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Facilitators', 'tenda21' ); ?></a>
                    <a href="events.html" class="font-sans text-sm font-medium text-charcoal-900 tracking-[0.1em]"><?php _e( 'Events', 'tenda21' ); ?></a>
                    <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Contact', 'tenda21' ); ?></a>
                </div>
            </div>
        </nav>
        <!-- Event Hero -->
        <!-- Composition guide only. Canonical block definitions are in blocks/event-hero.html,
             blocks/event-date-meta.html, and blocks/event-booking-meta.html -->
        <section class="pt-28 pb-0 bg-bone-200" data-block-name="event-hero">
            <div class="max-w-6xl mx-auto px-6">
                <!-- Back link -->
                <a href="events.html" class="inline-flex items-center gap-2 text-xs font-sans uppercase tracking-[0.2em] text-forest-700 hover:text-forest-800 transition-colors mb-8 block"> <?php _e( '← Back to Events', 'tenda21' ); ?> </a>
                <!-- Featured Image — contained with border -->
                <div class="w-full aspect-[16/7] bg-mist-300 bg-cover bg-center border border-mist-400 overflow-hidden" style="background-image:url('https://images.unsplash.com/photo-1502082553048-f009c37129b9?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDN8fGNlcmVtb25pYWwlMjBmaXJlfGVufDB8fHx8MTc3MzEzNzc5OXww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1600&h=700&fit=crop');">
</div>
                <!-- Content grid -->
                <div class="grid gap-10 lg:grid-cols-[1.2fr,0.8fr] pt-10 pb-16">
                    <!-- Left: title + meta -->
                    <div class="space-y-7">
                        <div class="space-y-4">
                            <div class="space-y-0.5">
                                <p class="font-sans uppercase text-[0.65rem] tracking-[0.25em] text-charcoal-500"><?php _e( 'Experience', 'tenda21' ); ?></p>
                                <a href="experience-breathwork.html" class="font-sans inline-flex items-center text-xs uppercase tracking-[0.2em] text-charcoal-700 hover:text-charcoal-900 transition-colors"><?php _e( 'Silent Immersion', 'tenda21' ); ?></a>
                            </div>
                            <h1 class="font-serif font-light text-[clamp(2.4rem,5vw,4rem)] leading-[1.15] tracking-[0.01em] text-charcoal-900"> <?php _e( 'Return to Stillness Retreat', 'tenda21' ); ?> </h1>
                            <p class="font-sans font-light text-base leading-[1.85] text-charcoal-600 max-w-[58ch]"> <?php _e( 'A three-day contemplative retreat with noble silence, mindful movement, and evening integration fires led by Ana Silva and guests.', 'tenda21' ); ?> </p>
                        </div>
                        <!-- Location + Facilitators -->
                        <div class="flex flex-wrap gap-8 pt-5 border-t border-mist-400">
                            <div class="space-y-1">
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php _e( 'Type', 'tenda21' ); ?></span>
                                <span class="font-sans text-sm text-charcoal-700"><?php _e( 'On-site', 'tenda21' ); ?></span>
                            </div>
                            <div class="space-y-1">
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php _e( 'Location', 'tenda21' ); ?></span>
                                <span class="font-sans text-sm text-charcoal-700"><?php _e( 'Serra da Estrela · Portugal', 'tenda21' ); ?></span>
                            </div>
                            <div class="space-y-1">
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php _e( 'Facilitated by', 'tenda21' ); ?></span>
                                <div class="flex flex-wrap gap-2 pt-0.5">
                                    <a href="facilitator-ana-silva.html" class="font-sans inline-flex items-center text-xs uppercase tracking-[0.15em] border border-mist-500 text-charcoal-700 hover:border-charcoal-700 hover:text-charcoal-900 transition-colors px-3 py-1"><?php _e( 'Ana Silva', 'tenda21' ); ?></a>
                                    <a href="facilitator-rafael.html" class="font-sans inline-flex items-center text-xs uppercase tracking-[0.15em] border border-mist-500 text-charcoal-700 hover:border-charcoal-700 hover:text-charcoal-900 transition-colors px-3 py-1"><?php _e( 'Rafael Santos', 'tenda21' ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right: date + booking -->
                    <div class="space-y-4">
                        <!-- Date meta — compact single-line -->
                        <!-- event-date-meta: block action intentionally deactivated in this composition page; canonical definition is in blocks/event-date-meta.html -->
                        <div class="border border-mist-400 bg-bone-100/70 px-4 py-3 flex items-center justify-between gap-2">
                            <div class="flex items-baseline gap-1.5">
                                <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-400 shrink-0"><?php _e( 'From', 'tenda21' ); ?></span>
                                <span class="font-serif text-sm text-charcoal-900"><?php _e( '12 April 2024', 'tenda21' ); ?></span>
                                <span class="font-sans text-[0.65rem] text-charcoal-500"><?php _e( '09:00', 'tenda21' ); ?></span>
                            </div>
                            <span class="font-sans text-[0.6rem] text-charcoal-300 shrink-0 select-none">→</span>
                            <div class="flex items-baseline gap-1.5">
                                <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-400 shrink-0"><?php _e( 'To', 'tenda21' ); ?></span>
                                <span class="font-serif text-sm text-charcoal-800"><?php _e( '14 April 2024', 'tenda21' ); ?></span>
                                <span class="font-sans text-[0.65rem] text-charcoal-500"><?php _e( '14:00', 'tenda21' ); ?></span>
                            </div>
                            <span class="font-sans text-[0.55rem] uppercase tracking-[0.15em] text-charcoal-400 shrink-0 hidden lg:block"><?php _e( 'GMT+1', 'tenda21' ); ?></span>
                        </div>
                        <!-- Booking card -->
                        <!-- event-booking-meta: block action intentionally deactivated in this composition page; canonical definition is in blocks/event-booking-meta.html -->
                        <div class="flex flex-col gap-5 bg-charcoal-900 px-5 py-5 text-bone-50">
                            <div class="flex items-end justify-between">
                                <div class="space-y-1">
                                    <span class="font-sans uppercase text-[0.55rem] tracking-[0.25em] font-medium text-bone-200/60 block"><?php _e( 'Investment', 'tenda21' ); ?></span>
                                    <span class="font-serif text-3xl leading-tight text-bone-50"><?php _e( '€420', 'tenda21' ); ?></span>
                                </div>
                                <span class="inline-flex items-center border border-bone-200/30 px-3 py-1 text-[0.58rem] font-sans uppercase tracking-[0.18em] text-bone-200"><?php _e( 'Few seats left', 'tenda21' ); ?></span>
                            </div>
                            <p class="font-sans text-xs leading-relaxed text-bone-200/55"><?php _e( 'Need a custom date or private immersion? Mention it in your note.', 'tenda21' ); ?></p>
                            <a href="mailto:hello@tenda21.com" class="inline-flex items-center justify-center bg-bone-50 text-charcoal-900 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5 transition-all duration-300 hover:bg-clay-400 hover:text-bone-50"> <?php _e( 'Book Your Place', 'tenda21' ); ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event long-form content -->
        <section class="py-16 px-6 bg-bone-100 border-t border-mist-400" data-block-name="event-content">
            <div class="max-w-3xl mx-auto w-full space-y-6">
                <p class="font-sans font-light text-base leading-[1.9] text-charcoal-700"><?php _e( 'Use this space to dive deeper into the ceremony arc, daily rhythm, and what participants can expect.', 'tenda21' ); ?></p>
                <p class="font-sans font-light text-base leading-[1.9] text-charcoal-700"><?php _e( 'Share preparation notes, packing lists, or any prerequisites that help guests arrive ready to receive.', 'tenda21' ); ?></p>
            </div>
        </section>
        <!-- Facilitators -->
        <section class="py-16 px-6 bg-bone-200 border-t border-mist-400" data-block-name="event-facilitators">
            <div class="max-w-6xl mx-auto w-full">
                <div class="flex items-baseline justify-between mb-10">
                    <h2 class="font-sans uppercase text-[0.65rem] tracking-[0.3em] font-medium text-charcoal-500"><?php _e( 'Facilitated by', 'tenda21' ); ?></h2>
                    <a href="facilitators.html" class="font-sans text-xs uppercase tracking-[0.15em] text-charcoal-600 hover:text-charcoal-900 transition-colors"><?php _e( 'Meet all facilitators →', 'tenda21' ); ?></a>
                </div>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="flex items-center gap-5 border-t border-mist-400 pt-6">
                        <div class="w-16 h-16 shrink-0 rounded-full bg-mist-300 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1763699751431-dff04d232842?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDF8fG1pbmRmdWwlMjBwcmFjdGljZXxlbnwwfHx8fDE3NzMwNzgxMTV8MA&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop')"></div>
                        <div class="space-y-1">
                            <h3 class="font-serif font-light text-xl text-charcoal-900"><?php _e( 'Ana Silva', 'tenda21' ); ?></h3>
                            <p class="font-sans text-xs uppercase tracking-[0.15em] text-charcoal-500"><?php _e( 'Host · Curadora da Tenda', 'tenda21' ); ?></p>
                            <a href="facilitator-ana-silva.html" class="font-sans text-xs uppercase tracking-[0.12em] text-forest-700 hover:text-forest-800 transition-colors"><?php _e( 'Full profile →', 'tenda21' ); ?></a>
                        </div>
                    </article>
                    <article class="flex items-center gap-5 border-t border-mist-400 pt-6">
                        <div class="w-16 h-16 shrink-0 rounded-full bg-mist-300 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1544723795-3fb6469f5b39?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDIwfHxtZWRpdGF0aW9ufGVufDB8fHx8MTc3MzE0OTMyNnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop')"></div>
                        <div class="space-y-1">
                            <h3 class="font-serif font-light text-xl text-charcoal-900"><?php _e( 'Rafael Santos', 'tenda21' ); ?></h3>
                            <p class="font-sans text-xs uppercase tracking-[0.15em] text-charcoal-500"><?php _e( 'Breathwork · Somatic', 'tenda21' ); ?></p>
                            <a href="facilitators.html" class="font-sans text-xs uppercase tracking-[0.12em] text-forest-700 hover:text-forest-800 transition-colors"><?php _e( 'Full profile →', 'tenda21' ); ?></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- Booking Notes / CTA -->
        <section class="py-16 px-6 bg-bone-100 border-t border-mist-400" data-block-name="event-additional-info">
            <div class="max-w-2xl mx-auto w-full text-center space-y-7">
                <p class="font-sans uppercase text-[0.65rem] tracking-[0.3em] font-medium text-charcoal-400"><?php _e( 'Booking Notes', 'tenda21' ); ?></p>
                <p class="font-sans font-light text-base leading-[1.9] text-charcoal-600"> <?php _e( 'Rates include plant-based meals, lodging in canvas tents, and one integration call per participant. Scholarships available upon request.', 'tenda21' ); ?> </p>
                <a href="mailto:hello@tenda21.com?subject=Event%20Question" class="inline-flex items-center justify-center border border-charcoal-800 text-charcoal-800 font-sans font-medium text-xs uppercase tracking-[0.2em] px-10 py-3.5 transition-all duration-300 hover:bg-charcoal-900 hover:text-bone-50"> <?php _e( 'Ask a Question', 'tenda21' ); ?> </a>
            </div>
        </section>
        <!-- Footer -->
        <footer class="py-16 px-6 bg-bone-200 border-t border-mist-400" data-block-name="site-footer">
            <div class="max-w-7xl mx-auto w-full">
                <div class="text-center mb-10">
                    <a href="index.html" class="font-serif font-light text-3xl text-charcoal-900 hover:text-charcoal-700 transition-colors inline-block mb-6"><?php _e( 'Tenda 21', 'tenda21' ); ?></a>
                    <div class="flex gap-8 items-center justify-center mb-6">
                        <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Home', 'tenda21' ); ?></a>
                        <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
                        <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Facilitators', 'tenda21' ); ?></a>
                        <a href="events.html" class="font-sans text-sm font-medium text-charcoal-900 tracking-[0.1em]"><?php _e( 'Events', 'tenda21' ); ?></a>
                        <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Contact', 'tenda21' ); ?></a>
                    </div>
                </div>
                <div class="text-center border-t border-mist-400 pt-8">
                    <p class="font-sans text-sm font-light text-charcoal-600 mb-4"><?php _e( 'hello@tenda21.com', 'tenda21' ); ?></p>
                    <p class="font-sans text-xs font-light text-charcoal-500 uppercase tracking-[0.12em]"><?php _e( '© 2026 Tenda 21 — All Rights Reserved', 'tenda21' ); ?></p>
                </div>
            </div>
        </footer>        

<?php get_footer(); ?>