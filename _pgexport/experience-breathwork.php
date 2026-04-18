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
        <a href="experiences.html" class="inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-8 transition-colors"> <?php _e( '← All Experiences', 'tenda21' ); ?> </a>
        <div class="grid md:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <div>
                    <h1 class="font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4"> <?php _e( 'Breathwork', 'tenda21' ); ?> </h1>
                    <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700"> <?php _e( 'Conscious Breathing Practice', 'tenda21' ); ?> </p>
                </div>
                <p class="font-sans font-light text-xl leading-[1.8] text-charcoal-700"> <?php _e( 'Your breath is the bridge between conscious and unconscious, between body and mind, between this moment and the next. Through intentional breathwork, we access states of deep release, energetic activation, and profound insight.', 'tenda21' ); ?> </p>
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
            <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <?php _e( 'Breathwork is appropriate for anyone seeking deeper connection with their body, emotional healing, or expanded states of awareness. No prior experience is needed—just willingness to breathe consciously and be present with whatever emerges.', 'tenda21' ); ?> </p>
            <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <strong class="font-medium"><?php _e( 'Contraindications:', 'tenda21' ); ?></strong> <?php _e( 'Not recommended for pregnant individuals, those with cardiovascular conditions, severe respiratory issues, or recent surgery. Please consult with facilitators if you have any health concerns.', 'tenda21' ); ?> </p>
        </div>
    </div>
</section>
<!-- Schedule & Booking -->
<section class="py-24 px-6 bg-bone-200" data-block-name="schedule-booking">
    <div class="max-w-5xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-16"> <?php _e( 'Upcoming Sessions', 'tenda21' ); ?> </h2>
        <div class="space-y-6">
            <!-- Session 1 -->
            <article class="bg-bone-100 p-8 border-l-2 border-forest-700">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="md:col-span-2">
                        <h3 class="font-serif font-light text-2xl leading-[1.3] text-charcoal-900 mb-3"> <?php _e( 'Weekly Breathwork Circle', 'tenda21' ); ?> </h3>
                        <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700 mb-4"> <?php _e( 'Join us every Thursday evening for a guided breathwork journey in community.', 'tenda21' ); ?> </p>
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
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-2"><?php _e( 'Next Dates', 'tenda21' ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800 block"><?php _e( 'March 13, 7:00 PM', 'tenda21' ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800 block"><?php _e( 'March 20, 7:00 PM', 'tenda21' ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800 block"><?php _e( 'March 27, 7:00 PM', 'tenda21' ); ?></span>
                        </div>
                        <a href="mailto:hello@tenda21.com?subject=Breathwork%20Circle%20Booking" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600"> <?php _e( 'Book Session', 'tenda21' ); ?> </a>
                    </div>
                </div>
            </article>
            <!-- Session 2 -->
            <article class="bg-bone-100 p-8 border-l-2 border-mist-500">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="md:col-span-2">
                        <h3 class="font-serif font-light text-2xl leading-[1.3] text-charcoal-900 mb-3"> <?php _e( 'Private Breathwork Session', 'tenda21' ); ?> </h3>
                        <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700 mb-4"> <?php _e( 'One-on-one breathwork tailored to your specific intentions and needs.', 'tenda21' ); ?> </p>
                        <div class="flex gap-8 text-sm">
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Duration', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( '120 minutes', 'tenda21' ); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-2"><?php _e( 'Availability', 'tenda21' ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800 block"><?php _e( 'By appointment', 'tenda21' ); ?></span>
                        </div>
                        <a href="mailto:hello@tenda21.com?subject=Private%20Breathwork%20Inquiry" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600"> <?php _e( 'Inquire', 'tenda21' ); ?> </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- Facilitator -->
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
                    <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"> <?php _e( 'Embodiment & Breathwork', 'tenda21' ); ?> </p>
                </div>
                <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"> <?php _e( 'Rafael is a certified breathwork facilitator trained in Holotropic, Transformational, and Wim Hof methodologies. With a background in somatic therapy and ten years of personal practice, he creates safe, supportive spaces for profound inner exploration.', 'tenda21' ); ?> </p>
                <a href="facilitators.html" class="inline-block font-sans text-sm text-forest-700 hover:text-forest-800 uppercase tracking-[0.1em] transition-colors"> <?php _e( 'View Full Profile →', 'tenda21' ); ?> </a>
            </div>
        </div>
    </div>
</section>
<!-- Back Navigation -->
<section class="py-16 px-6 bg-bone-200" data-block-name="back-navigation">
    <div class="max-w-6xl mx-auto text-center">
        <a href="experiences.html" class="inline-block font-sans text-sm text-charcoal-700 hover:text-charcoal-900 uppercase tracking-[0.1em] transition-colors"> <?php _e( '← View All Experiences', 'tenda21' ); ?> </a>
    </div>
</section>
<!-- Footer -->
<footer class="py-16 px-6 bg-mist-300 text-charcoal-900" data-block-name="site-footer">
    <div class="max-w-7xl mx-auto w-full">
        <!-- Main Footer Content -->
        <div class="grid md:grid-cols-4 gap-12 mb-16">
            <!-- Column 1: Location & Contact -->
            <div class="space-y-4">
                <h3 class="font-serif font-light text-2xl text-charcoal-900 mb-6"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </h3>
                <address class="font-sans font-light text-sm leading-relaxed not-italic text-charcoal-800"> <?php _e( 'Serra da Estrela', 'tenda21' ); ?><br> <?php _e( '6260 Manteigas', 'tenda21' ); ?><br> <?php _e( 'Portugal', 'tenda21' ); ?> </address>
                <div class="font-sans font-light text-sm text-charcoal-800 space-y-1">
                    <p><?php _e( 'T: +351 275 000 000', 'tenda21' ); ?></p>
                    <p><?php _e( 'E: hello@tenda21.com', 'tenda21' ); ?></p>
                </div>
            </div>
            <!-- Column 2: Action Buttons -->
            <div class="space-y-4">
                <a href="experiences.html" class="block bg-charcoal-900 text-bone-50 text-center font-sans font-medium text-sm uppercase tracking-[0.12em] px-8 py-4 transition-colors hover:bg-charcoal-800"> <?php _e( 'Experiences', 'tenda21' ); ?> </a>
                <a href="mailto:hello@tenda21.com?subject=Booking%20Inquiry" class="block bg-charcoal-900 text-bone-50 text-center font-sans font-medium text-sm uppercase tracking-[0.12em] px-8 py-4 transition-colors hover:bg-charcoal-800"> <?php _e( 'Book Now', 'tenda21' ); ?> </a>
                <a href="mailto:hello@tenda21.com?subject=Support%20Inquiry" class="block bg-charcoal-900 text-bone-50 text-center font-sans font-medium text-sm uppercase tracking-[0.12em] px-8 py-4 transition-colors hover:bg-charcoal-800"> <?php _e( 'Support', 'tenda21' ); ?> </a>
            </div>
            <!-- Column 3: About -->
            <div>
                <h4 class="font-sans font-medium text-sm uppercase tracking-[0.12em] text-charcoal-900 mb-6"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </h4>
                <nav class="space-y-3">
                    <a href="#about" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'About Us', 'tenda21' ); ?> </a>
                    <a href="facilitators.html" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Facilitators', 'tenda21' ); ?> </a>
                    <a href="#volunteering" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Volunteering', 'tenda21' ); ?> </a>
                    <a href="mailto:hello@tenda21.com" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Contact Us', 'tenda21' ); ?> </a>
                    <a href="#guidelines" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Community Guidelines', 'tenda21' ); ?> </a>
                    <a href="#policy" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Cancellation Policy', 'tenda21' ); ?> </a>
                </nav>
            </div>
            <!-- Column 4: Visit -->
            <div>
                <h4 class="font-sans font-medium text-sm uppercase tracking-[0.12em] text-charcoal-900 mb-6"> <?php _e( 'Visit Us', 'tenda21' ); ?> </h4>
                <nav class="space-y-3">
                    <a href="experiences.html" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'All Experiences', 'tenda21' ); ?> </a>
                    <a href="#events" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Upcoming Events', 'tenda21' ); ?> </a>
                    <a href="#retreats" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Retreats', 'tenda21' ); ?> </a>
                    <a href="#accommodation" class="block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Accommodation', 'tenda21' ); ?> </a>
                </nav>
            </div>
        </div>
        <!-- Social Links & Language -->
        <div class="flex items-center justify-between border-t border-charcoal-400/30 pt-8 mb-8">
            <div class="flex gap-6">
                <a href="#" class="font-sans text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Instagram', 'tenda21' ); ?> </a>
                <a href="#" class="font-sans text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors"> <?php _e( 'Facebook', 'tenda21' ); ?> </a>
            </div>
            <div class="flex gap-4">
                <a href="#" class="font-sans text-sm font-medium text-charcoal-900 underline"> <?php _e( 'English', 'tenda21' ); ?> </a>
                <a href="#" class="font-sans text-sm text-charcoal-700 hover:text-charcoal-900 transition-colors"> <?php _e( 'Português', 'tenda21' ); ?> </a>
            </div>
        </div>
        <!-- Bottom Legal -->
        <div class="text-center border-t border-charcoal-400/30 pt-8">
            <p class="font-sans text-xs font-light text-charcoal-700 leading-relaxed"> <?php _e( 'NIF: PT000000000 —', 'tenda21' ); ?> <a href="#privacy" class="hover:text-charcoal-900 transition-colors"><?php _e( 'Privacy Policy', 'tenda21' ); ?></a> — <a href="#cookies" class="hover:text-charcoal-900 transition-colors"><?php _e( 'Cookie Policy', 'tenda21' ); ?></a> — <a href="#transparency" class="hover:text-charcoal-900 transition-colors"><?php _e( 'Transparency', 'tenda21' ); ?></a> — <a href="#policy" class="hover:text-charcoal-900 transition-colors"><?php _e( 'Cancellation Policy', 'tenda21' ); ?></a> </p>
        </div>
    </div>
</footer>        

<?php get_footer(); ?>