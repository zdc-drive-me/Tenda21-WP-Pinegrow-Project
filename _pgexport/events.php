<?php get_header(); ?>

<!-- NAV -->
<!-- HERO -->
<section class="relative bg-bone-200 min-h-[65vh] flex flex-col items-center justify-center pt-32 pb-24 px-6 md:px-16 overflow-hidden text-center">
    <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-clay-400 to-transparent"></div>
    <div class="relative z-10 max-w-5xl mx-auto w-full flex flex-col items-center">
        <div class="flex items-center gap-5 mb-10">
            <span class="block w-12 h-px bg-clay-400 shrink-0"></span>
            <p class="font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-forest-700 whitespace-nowrap"><?php _e( 'Monthly Agenda · 2026', 'tenda21' ); ?></p>
            <span class="block w-12 h-px bg-clay-400 shrink-0"></span>
        </div>
        <h1 class="font-serif font-light text-[clamp(3.8rem,8vw,7.5rem)] leading-[1.0] tracking-[-0.01em] text-charcoal-900 mb-10"> <?php _e( 'Events &amp;', 'tenda21' ); ?><br><em class="italic text-clay-500"><?php _e( 'Immersions', 'tenda21' ); ?></em> </h1>
        <div class="w-px h-10 bg-mist-400 mb-10"></div>
        <p class="font-sans font-light text-base md:text-lg leading-[1.9] text-charcoal-700 max-w-[52ch] mx-auto"><?php _e( 'An editorial view of upcoming circles, retreats, and seasonal gatherings at Tenda 21. Each line tells you who is guiding, when it unfolds, and how to reserve your place.', 'tenda21' ); ?></p>
    </div>
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50">
        <span class="font-sans uppercase text-[0.5rem] tracking-[0.28em] text-charcoal-500"><?php _e( 'Scroll', 'tenda21' ); ?></span>
        <div class="w-px h-8 bg-mist-500"></div>
    </div>
</section>
<!-- EVENTS -->
<section class="py-16 md:py-24 px-6 bg-bone-100 border-t border-b border-mist-300">
    <div class="max-w-6xl mx-auto w-full">
        <div class="flex items-center justify-between border-b border-mist-400 pb-4 mb-10 text-xs font-sans uppercase tracking-[0.2em] text-charcoal-500">
            <span><?php _e( 'Upcoming Schedule', 'tenda21' ); ?></span>
            <span><?php _e( 'All times · Serra da Estrela, Portugal · GMT+1', 'tenda21' ); ?></span>
        </div>
        <div class="space-y-6">
            <!-- EVENT 1 -->
            <article class="bg-bone-50/90 border border-mist-300 px-4 py-4 md:px-6 md:py-5 shadow-[0_1px_0_rgba(42,41,38,0.04)]">
                <div class="grid grid-cols-[96px_1fr] md:grid-cols-[120px_1fr_148px_164px] gap-4 md:gap-x-6 items-start">
                    <!-- thumbnail -->
                    <div class="aspect-square rounded-sm bg-mist-300 bg-cover bg-center shrink-0" style="background-image:url('https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80')"></div>
                    <!-- identity -->
                    <div class="min-w-0 space-y-2">
                        <div class="flex flex-wrap items-baseline gap-x-4 gap-y-1">
                            <a href="experience-breathwork.html" class="font-serif text-xl md:text-2xl leading-tight text-charcoal-900 underline-offset-4 hover:underline"><?php _e( 'Silent Immersion Weekend', 'tenda21' ); ?></a>
                            <span class="inline-flex items-center gap-1.5 text-[0.65rem] font-sans uppercase tracking-[0.25em] text-charcoal-500"> <span class="h-px w-4 bg-charcoal-400"></span> <span><?php _e( 'On-site', 'tenda21' ); ?></span> </span>
                        </div>
                        <div class="flex flex-wrap items-center gap-x-3 gap-y-1.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500"><?php _e( 'Guided by', 'tenda21' ); ?></span>
                            <div class="flex flex-wrap gap-1.5">
                                <a href="facilitator-ana-silva.html" class="inline-flex items-center border border-mist-400 px-2 py-0.5 text-[0.7rem] text-charcoal-700 hover:border-charcoal-700 transition-colors"><?php _e( 'Ana Silva', 'tenda21' ); ?></a>
                                <a href="facilitator-rafael.html" class="inline-flex items-center border border-mist-400 px-2 py-0.5 text-[0.7rem] text-charcoal-700 hover:border-charcoal-700 transition-colors"><?php _e( 'Rafael Santos', 'tenda21' ); ?></a>
                            </div>
                        </div>
                        <p class="font-sans text-sm leading-relaxed text-charcoal-600 line-clamp-2"><?php _e( 'Three days of contemplative silence, mindful movement, and nature-based ritual held in a small circle amid cedar and stone.', 'tenda21' ); ?></p>
                        <span class="font-sans text-xs text-charcoal-500"><?php _e( 'Serra da Estrela · Portugal', 'tenda21' ); ?></span>
                    </div>
                    <!-- date — desktop only -->
                    <div class="hidden md:flex flex-col gap-1.5 border-l border-mist-300 pl-5 self-stretch justify-center">
                        <div class="space-y-0.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500"><?php _e( 'Starts', 'tenda21' ); ?></span>
                            <p class="font-serif text-base leading-tight text-charcoal-900"><?php _e( '12 April 2026', 'tenda21' ); ?></p>
                            <p class="font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600"><?php _e( '09:00', 'tenda21' ); ?></p>
                        </div>
                        <div class="h-px w-full bg-mist-300 my-1.5"></div>
                        <div class="space-y-0.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500"><?php _e( 'Ends', 'tenda21' ); ?></span>
                            <p class="font-serif text-sm leading-tight text-charcoal-700"><?php _e( '14 April 2026', 'tenda21' ); ?></p>
                            <p class="font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600"><?php _e( '14:00', 'tenda21' ); ?></p>
                        </div>
                    </div>
                    <!-- booking — desktop only -->
                    <div class="hidden md:flex flex-col justify-between gap-4 border-l border-mist-300 pl-5 self-stretch">
                        <div class="space-y-1.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500 block"><?php _e( 'Investment', 'tenda21' ); ?></span>
                            <span class="font-serif text-xl text-charcoal-900"><?php _e( '€420', 'tenda21' ); ?></span>
                            <div>
                                <span class="inline-flex items-center border border-charcoal-900/20 px-2.5 py-0.5 text-[0.6rem] font-sans uppercase tracking-[0.2em] text-charcoal-700"><?php _e( 'Few seats left', 'tenda21' ); ?></span>
                            </div>
                        </div>
                        <a href="mailto:hello@tenda21.com?subject=Silent%20Immersion" class="inline-flex items-center justify-center bg-clay-500 text-bone-50 font-sans font-medium text-[0.65rem] uppercase tracking-[0.2em] px-5 py-2.5 transition-all duration-300 hover:bg-clay-600"><?php _e( 'Book Your Place', 'tenda21' ); ?></a>
                    </div>
                    <!-- mobile footer bar -->
                    <div class="col-span-2 md:hidden flex items-center justify-between gap-3 border-t border-mist-300 pt-3">
                        <div class="space-y-0.5">
                            <p class="font-serif text-sm text-charcoal-900"><?php _e( '12 April 2026', 'tenda21' ); ?></p>
                            <p class="font-sans text-[0.6rem] uppercase tracking-[0.2em] text-charcoal-500"><?php _e( '09:00', 'tenda21' ); ?></p>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="font-serif text-lg text-charcoal-900"><?php _e( '€420', 'tenda21' ); ?></span>
                            <a href="mailto:hello@tenda21.com?subject=Silent%20Immersion" class="inline-flex items-center justify-center bg-clay-500 text-bone-50 font-sans font-medium text-[0.6rem] uppercase tracking-[0.2em] px-4 py-2 hover:bg-clay-600"><?php _e( 'Book', 'tenda21' ); ?></a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- EVENT 2 -->
            <article class="bg-bone-50/90 border border-mist-300 px-4 py-4 md:px-6 md:py-5 shadow-[0_1px_0_rgba(42,41,38,0.04)]">
                <div class="grid grid-cols-[96px_1fr] md:grid-cols-[120px_1fr_148px_164px] gap-4 md:gap-x-6 items-start">
                    <!-- thumbnail -->
                    <div class="aspect-square rounded-sm bg-mist-300 bg-cover bg-center shrink-0" style="background-image:url('https://images.unsplash.com/photo-1476611317561-60117649dd94?auto=format&fit=crop&w=400&q=80')"></div>
                    <!-- identity -->
                    <div class="min-w-0 space-y-2">
                        <div class="flex flex-wrap items-baseline gap-x-4 gap-y-1">
                            <a href="experience-circle.html" class="font-serif text-xl md:text-2xl leading-tight text-charcoal-900 underline-offset-4 hover:underline"><?php _e( 'Fire Circle Gathering', 'tenda21' ); ?></a>
                            <span class="inline-flex items-center gap-1.5 text-[0.65rem] font-sans uppercase tracking-[0.25em] text-charcoal-500"> <span class="h-px w-4 bg-charcoal-400"></span> <span><?php _e( 'Remote', 'tenda21' ); ?></span> </span>
                        </div>
                        <div class="flex flex-wrap items-center gap-x-3 gap-y-1.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500"><?php _e( 'Guided by', 'tenda21' ); ?></span>
                            <div class="flex flex-wrap gap-1.5">
                                <a href="facilitator-ana-silva.html" class="inline-flex items-center border border-mist-400 px-2 py-0.5 text-[0.7rem] text-charcoal-700 hover:border-charcoal-700 transition-colors"><?php _e( 'Ana Silva', 'tenda21' ); ?></a>
                            </div>
                        </div>
                        <p class="font-sans text-sm leading-relaxed text-charcoal-600 line-clamp-2"><?php _e( 'Voices weave across continents for an evening of song, prayer, and story held around the hearth at Tenda 21.', 'tenda21' ); ?></p>
                        <span class="font-sans text-xs text-charcoal-500"><?php _e( 'Zoom · Link shared after booking', 'tenda21' ); ?></span>
                    </div>
                    <!-- date — desktop only -->
                    <div class="hidden md:flex flex-col gap-1.5 border-l border-mist-300 pl-5 self-stretch justify-center">
                        <div class="space-y-0.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500"><?php _e( 'Starts', 'tenda21' ); ?></span>
                            <p class="font-serif text-base leading-tight text-charcoal-900"><?php _e( '3 May 2026', 'tenda21' ); ?></p>
                            <p class="font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600"><?php _e( '18:00', 'tenda21' ); ?></p>
                        </div>
                        <div class="h-px w-full bg-mist-300 my-1.5"></div>
                        <div class="space-y-0.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500"><?php _e( 'Ends', 'tenda21' ); ?></span>
                            <p class="font-serif text-sm leading-tight text-charcoal-700"><?php _e( '3 May 2026', 'tenda21' ); ?></p>
                            <p class="font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600"><?php _e( '22:00', 'tenda21' ); ?></p>
                        </div>
                    </div>
                    <!-- booking — desktop only -->
                    <div class="hidden md:flex flex-col justify-between gap-4 border-l border-mist-300 pl-5 self-stretch">
                        <div class="space-y-1.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500 block"><?php _e( 'Contribution', 'tenda21' ); ?></span>
                            <span class="font-serif text-xl text-charcoal-900"><?php _e( '€65', 'tenda21' ); ?></span>
                            <div>
                                <span class="inline-flex items-center border border-charcoal-900/20 px-2.5 py-0.5 text-[0.6rem] font-sans uppercase tracking-[0.2em] text-charcoal-700"><?php _e( 'Open seats', 'tenda21' ); ?></span>
                            </div>
                        </div>
                        <a href="mailto:hello@tenda21.com?subject=Fire%20Circle" class="inline-flex items-center justify-center border border-charcoal-900 text-charcoal-900 font-sans font-medium text-[0.65rem] uppercase tracking-[0.2em] px-5 py-2.5 transition-all duration-300 hover:bg-charcoal-900 hover:text-bone-50"><?php _e( 'RSVP', 'tenda21' ); ?></a>
                    </div>
                    <!-- mobile footer bar -->
                    <div class="col-span-2 md:hidden flex items-center justify-between gap-3 border-t border-mist-300 pt-3">
                        <div class="space-y-0.5">
                            <p class="font-serif text-sm text-charcoal-900"><?php _e( '3 May 2026', 'tenda21' ); ?></p>
                            <p class="font-sans text-[0.6rem] uppercase tracking-[0.2em] text-charcoal-500"><?php _e( '18:00', 'tenda21' ); ?></p>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="font-serif text-lg text-charcoal-900"><?php _e( '€65', 'tenda21' ); ?></span>
                            <a href="mailto:hello@tenda21.com?subject=Fire%20Circle" class="inline-flex items-center justify-center border border-charcoal-900 text-charcoal-900 font-sans font-medium text-[0.6rem] uppercase tracking-[0.2em] px-4 py-2 hover:bg-charcoal-900 hover:text-bone-50"><?php _e( 'RSVP', 'tenda21' ); ?></a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>        

<?php get_footer(); ?>