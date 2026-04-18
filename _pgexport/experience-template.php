<?php get_header(); ?>

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-bone-200/90 backdrop-blur-md border-b border-mist-400" data-block-name="main-navigation">
    <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full">
        <a href="index.html" class="font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </a>
        <div class="flex gap-8 items-center">
            <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"> <?php _e( 'Home', 'tenda21' ); ?> </a>
            <a href="experiences.html" class="font-sans text-sm font-medium text-charcoal-900 tracking-[0.1em]"> <?php _e( 'Experiences', 'tenda21' ); ?> </a>
            <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"> <?php _e( 'Facilitators', 'tenda21' ); ?> </a>
            <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"> <?php _e( 'Contact', 'tenda21' ); ?> </a>
        </div>
    </div>
</nav>
<!-- Experience Hero -->
<section class="relative pt-32 pb-16 px-6 bg-bone-200" data-block-name="experience-hero">
    <div class="max-w-6xl mx-auto w-full">
        <a href="experiences.html" class="inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-8 transition-colors"><?php _e( '← All Experiences', 'tenda21' ); ?></a>
        <div class="grid md:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <div class="space-y-3">
                    <h1 class="font-extralight leading-[1.2] text-[clamp(2.5rem,6vw,4.5rem)] text-charcoal-900 tracking-[0.02em]"><?php _e( 'Experience Title', 'tenda21' ); ?></h1>
                    <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Conscious Breathing Practice', 'tenda21' ); ?></p>
                </div>
                <p class="font-sans font-light text-xl leading-[1.8] text-charcoal-700"><?php _e( 'Your breath is the bridge between conscious and unconscious, between body and mind, between this moment and the next. Through intentional breathwork, we access states of deep release, energetic activation, and profound insight.', 'tenda21' ); ?></p>
                <div class="flex items-start gap-10 pt-2 border-t border-mist-400">
                    <div class="pt-6">
                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Duration', 'tenda21' ); ?></span>
                        <span class="font-sans text-sm text-charcoal-800"><?php _e( '90–120 min', 'tenda21' ); ?></span>
                    </div>
                    <div class="pt-6">
                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Format', 'tenda21' ); ?></span>
                        <span class="font-sans text-sm text-charcoal-800"><?php _e( 'Group &amp; Private', 'tenda21' ); ?></span>
                    </div>
                </div>
            </div>
            <div class="aspect-[4/5] bg-mist-300 bg-[url('https://images.unsplash.com/photo-1713429204572-8a951faffa74?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDN8fGJyZWF0aHdvcmt8ZW58MHx8fHwxNzczMTM3Nzk2fDA&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop')] bg-cover bg-center sticky top-32"></div>
        </div>
    </div>
</section>
<!-- Experience Details -->
<section class="py-24 px-6 bg-mist-100" data-block-name="experience-content">
    <div class="max-w-4xl mx-auto w-full space-y-16">
        <div class="space-y-8">
            <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"> <?php _e( 'What to Expect', 'tenda21' ); ?> </h2>
            <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <?php _e( 'Our breathwork sessions blend ancient pranayama techniques with modern conscious connected breathing practices. You\'ll be guided through rhythmic breathing patterns designed to oxygenate the body, activate the nervous system, and create conditions for emotional release and energetic clearing.', 'tenda21' ); ?> </p>
            <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <?php _e( 'Sessions typically last 90 minutes and include gentle warm-up movements, the breathwork journey itself (30-45 minutes of active breathing), and integration time with journaling or quiet reflection. All experiences happen lying down on comfortable mats with supportive music.', 'tenda21' ); ?> </p>
            <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <?php _e( 'Participants often report experiences ranging from deep relaxation to cathartic emotional release, tingling sensations, visions, and profound insights. Whatever arises is welcome—there is no "right" way to breathe.', 'tenda21' ); ?> </p>
        </div>
        <div class="border-t border-mist-400 pt-12 space-y-8">
            <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"> <?php _e( 'Benefits', 'tenda21' ); ?> </h2>
            <ul class="space-y-4">
                <li class="font-sans font-light text-lg leading-[1.8] text-charcoal-700 pl-6 relative before:content-['•'] before:absolute before:left-0 before:text-forest-700">
                    <?php _e( 'Release stored tension and trauma held in the body', 'tenda21' ); ?>
                </li>
                <li class="font-sans font-light text-lg leading-[1.8] text-charcoal-700 pl-6 relative before:content-['•'] before:absolute before:left-0 before:text-forest-700">
                    <?php _e( 'Access altered states of consciousness without substances', 'tenda21' ); ?>
                </li>
                <li class="font-sans font-light text-lg leading-[1.8] text-charcoal-700 pl-6 relative before:content-['•'] before:absolute before:left-0 before:text-forest-700">
                    <?php _e( 'Increase energy and vitality through deep oxygenation', 'tenda21' ); ?>
                </li>
                <li class="font-sans font-light text-lg leading-[1.8] text-charcoal-700 pl-6 relative before:content-['•'] before:absolute before:left-0 before:text-forest-700">
                    <?php _e( 'Regulate nervous system and reduce anxiety', 'tenda21' ); ?>
                </li>
                <li class="font-sans font-light text-lg leading-[1.8] text-charcoal-700 pl-6 relative before:content-['•'] before:absolute before:left-0 before:text-forest-700">
                    <?php _e( 'Develop greater body awareness and presence', 'tenda21' ); ?>
                </li>
                <li class="font-sans font-light text-lg leading-[1.8] text-charcoal-700 pl-6 relative before:content-['•'] before:absolute before:left-0 before:text-forest-700">
                    <?php _e( 'Connect with emotional intelligence and intuition', 'tenda21' ); ?>
                </li>
            </ul>
        </div>
        <div class="border-t border-mist-400 pt-12 space-y-8">
            <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"> <?php _e( 'Who This Is For', 'tenda21' ); ?> </h2>
            <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <?php _e( 'Experience Title is appropriate for anyone seeking deeper connection with their body, emotional healing, or expanded states of awareness. No prior experience is needed—just willingness to breathe consciously and be present with whatever emerges.', 'tenda21' ); ?> </p>
            <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <strong class="font-medium"><?php _e( 'Contraindications:', 'tenda21' ); ?></strong> <?php _e( 'Not recommended for pregnant individuals, those with cardiovascular conditions, severe respiratory issues, or recent surgery. Please consult with facilitators if you have any health concerns.', 'tenda21' ); ?> </p>
        </div>
    </div>
</section>
<!-- Schedule & Booking -->
<section class="py-24 px-6 bg-bone-200" data-block-name="upcoming-events">
    <div class="max-w-5xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-16"><?php _e( 'Upcoming Sessions', 'tenda21' ); ?></h2>
        <div class="space-y-6">
            <article class="bg-bone-100 p-8 border-l-2 border-forest-700">
                <div class="grid md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-2 space-y-3">
                        <h3 class="font-serif font-light text-2xl leading-[1.3] text-charcoal-900"><?php _e( 'Weekly Experience Circle', 'tenda21' ); ?></h3>
                        <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700"><?php _e( 'Join us every Thursday evening for a guided journey in community.', 'tenda21' ); ?></p>
                        <div class="flex gap-8 text-sm">
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Duration', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( '90 minutes', 'tenda21' ); ?></span>
                            </div>
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Spots', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( '15 per session', 'tenda21' ); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-2"><?php _e( 'Date', 'tenda21' ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800"><?php _e( 'TBA', 'tenda21' ); ?></span>
                        </div>
                        <a href="mailto:hello@tenda21.com" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600"><?php _e( 'Book Session', 'tenda21' ); ?></a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- Facilitator -->
<section class="py-24 px-6 bg-bone-100" data-block-name="experience-cta">
    <div class="max-w-3xl mx-auto text-center w-full space-y-8">
        <p class="font-sans font-light text-base leading-[1.8] text-charcoal-600 max-w-[60ch] mx-auto"><?php _e( 'Retreats run year-round with limited capacity. Reach out to learn about upcoming dates or inquire about a private session.', 'tenda21' ); ?></p>
        <a href="mailto:hello@tenda21.com" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-sm uppercase tracking-[0.12em] px-12 py-5 transition-all duration-300 hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]"><?php _e( 'Reserve Your Place', 'tenda21' ); ?></a>
    </div>
</section>
<section class="py-24 px-6 bg-mist-100" data-block-name="experience-facilitator">
    <div class="max-w-5xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12"> <?php _e( 'Facilitated By', 'tenda21' ); ?> </h2>
        <div class="grid md:grid-cols-4 gap-8 items-start">
            <div class="md:col-span-1">
                <div class="aspect-[3/4] bg-mist-300 bg-[url('https://images.unsplash.com/photo-1763699751431-dff04d232842?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDF8fG1pbmRmdWwlMjBwcmFjdGljZXxlbnwwfHx8fDE3NzMwNzgxMTV8MA&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop')] bg-cover bg-center mb-4"></div>
            </div>
            <div class="md:col-span-3 space-y-4">
                <div>
                    <h3 class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 mb-2"> <?php _e( 'Rafael Santos', 'tenda21' ); ?> </h3>
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"> <?php _e( 'Embodiment & Experience Title', 'tenda21' ); ?> </p>
                </div>
                <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <?php _e( 'Rafael is a certified breathwork facilitator trained in Holotropic, Transformational, and Wim Hof methodologies. With a background in somatic therapy and ten years of personal practice, he creates safe, supportive spaces for profound inner exploration.', 'tenda21' ); ?> </p>
                <a href="facilitators.html" class="inline-block font-sans text-sm text-forest-700 hover:text-forest-800 uppercase tracking-[0.1em] transition-colors"> <?php _e( 'View Full Profile →', 'tenda21' ); ?> </a>
            </div>
        </div>
    </div>
</section>
<!-- Back Navigation -->
<!-- Footer -->
<footer class="py-20 px-6 bg-bone-200 border-t border-mist-400" data-block-name="site-footer">
    <div class="max-w-7xl mx-auto w-full">
        <div class="text-center mb-12">
            <a href="index.html" class="font-serif font-light text-3xl text-charcoal-900 hover:text-charcoal-700 transition-colors inline-block mb-8"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </a>
            <div class="flex gap-8 items-center justify-center mb-8">
                <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"> <?php _e( 'Home', 'tenda21' ); ?> </a>
                <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"> <?php _e( 'Experiences', 'tenda21' ); ?> </a>
                <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"> <?php _e( 'Facilitators', 'tenda21' ); ?> </a>
                <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"> <?php _e( 'Contact', 'tenda21' ); ?> </a>
            </div>
        </div>
        <div class="text-center border-t border-mist-400 pt-8">
            <p class="font-sans text-sm font-light text-charcoal-600 mb-4"> <?php _e( 'hello@tenda21.com', 'tenda21' ); ?> </p>
            <p class="font-sans text-xs font-light text-charcoal-500 uppercase tracking-[0.12em]"> <?php _e( '© 2026 Tenda 21 — All Rights Reserved', 'tenda21' ); ?> </p>
        </div>
    </div>
</footer>        

<?php get_footer(); ?>