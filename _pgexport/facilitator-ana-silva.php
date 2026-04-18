<?php get_header(); ?>

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-bone-200/90 backdrop-blur-md border-b border-mist-400" data-block-name="main-navigation">
    <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full">
        <a href="index.html" class="font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </a>
        <div class="flex gap-8 items-center">
            <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Home', 'tenda21' ); ?></a>
            <a href="a-anfitria.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'A Anfitriã', 'tenda21' ); ?></a>
            <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
            <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Facilitators', 'tenda21' ); ?></a>
            <a href="mailto:hello@tenda21.com" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Contact', 'tenda21' ); ?></a>
        </div>
    </div>
</nav>
<!-- Facilitator Header -->
<section class="relative pt-32 pb-24 px-6 bg-bone-200" data-block-name="facilitator-hero">
    <div class="max-w-6xl mx-auto w-full">
        <div class="grid md:grid-cols-5 gap-12 items-start">
            <div class="md:col-span-2">
                <div class="aspect-[3/4] bg-mist-300 bg-[url('https://images.unsplash.com/photo-1506677162879-a52bf9de54d0?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDl8fG1lZGl0YXRpb24lMjByZXRyZWF0fGVufDB8fHx8MTc3MzA3ODExNHww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop')] bg-cover bg-center sticky top-32"></div>
            </div>
            <div class="md:col-span-3 space-y-8">
                <div>
                    <a href="facilitators.html" class="inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-6 transition-colors"><?php _e( '← All Facilitators', 'tenda21' ); ?></a>
                    <h1 class="font-Cormorant font-light font-serif leading-[1.2] mb-4 text-[clamp(2.5rem,6vw,4.5rem)] text-charcoal-900 tracking-[0.02em]"><?php _e( 'Ana Silva', 'tenda21' ); ?></h1>
                    <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700"><?php _e( 'Meditation &amp; Silence Practice', 'tenda21' ); ?></p>
                </div>
                <div class="space-y-6">
                    <p class="font-light font-sans leading-[1.8] text-charcoal-700 text-lg"><?php _e( 'Since then, Ana has studied with teachers across traditions—Theravada, Zen, and Insight Meditation—completing multiple long-term silent retreats and teacher training programs. But her real teacher, she says, is daily practice: the unglamorous work of showing up to the cushion every morning, regardless of mood or circumstance.', 'tenda21' ); ?></p>
                    <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"><?php _e( 'Ana\'s teaching style is marked by clarity, kindness, and an absence of spiritual bypassing. She doesn\'t promise bliss or transcendence. She offers tools for being with what is—the pleasant, the unpleasant, and everything in between. Participants often describe her presence as both gentle and uncompromising, a rare combination that creates profound safety.', 'tenda21' ); ?></p>
                    <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"><?php _e( 'When not guiding retreats, Ana lives quietly in Lisbon, where she maintains a small meditation sangha and works as a psychotherapist specializing in contemplative approaches to anxiety and trauma.', 'tenda21' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Upcoming Experiences -->
<section class="py-12 px-6 bg-bone-200" data-block-name="facilitator-specialties">
    <div class="max-w-6xl mx-auto w-full">
        <div class="pt-8 border-t border-mist-400">
            <h3 class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-4"><?php _e( 'Areas of Expertise', 'tenda21' ); ?></h3>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm"><?php _e( 'Vipassana Meditation', 'tenda21' ); ?></span>
                <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm"><?php _e( 'Silent Retreats', 'tenda21' ); ?></span>
                <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm"><?php _e( 'Mindfulness-Based Therapy', 'tenda21' ); ?></span>
                <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm"><?php _e( 'Contemplative Practice', 'tenda21' ); ?></span>
            </div>
        </div>
    </div>
</section>
<section class="py-12 px-6 bg-bone-100 border-t border-mist-400" data-block-name="facilitator-meta">
    <div class="max-w-6xl mx-auto w-full">
        <div class="flex flex-wrap gap-x-12 gap-y-6 items-start">
            <div>
                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Languages', 'tenda21' ); ?></span>
                <span class="font-sans text-sm text-charcoal-800"><?php _e( 'Portuguese, English', 'tenda21' ); ?></span>
            </div>
            <div>
                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Website', 'tenda21' ); ?></span>
                <a href="#" class="font-sans text-sm text-forest-700 hover:text-forest-800 transition-colors">—</a>
            </div>
            <div>
                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Instagram', 'tenda21' ); ?></span>
                <a href="#" class="font-sans text-sm text-forest-700 hover:text-forest-800 transition-colors">—</a>
            </div>
        </div>
    </div>
</section>
<section class="py-24 px-6 bg-mist-100" data-block-name="facilitator-upcoming-events">
    <div class="max-w-6xl mx-auto w-full">
        <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12"><?php _e( 'Upcoming Sessions', 'tenda21' ); ?></h2>
        <div class="space-y-8">
            <!-- Event row — repeated by WordPress query loop -->
            <article class="bg-bone-100 p-8 md:p-10 border-l-2 border-forest-700">
                <div class="grid md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-2 space-y-4">
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Experience', 'tenda21' ); ?></span>
                            <a href="#" class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 hover:text-forest-800 transition-colors block"><?php _e( 'Experience Title', 'tenda21' ); ?></a>
                        </div>
                        <div class="flex flex-wrap gap-x-10 gap-y-3 text-sm">
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Start', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( 'DD MMM YYYY', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-600 ml-2"><?php _e( '00:00', 'tenda21' ); ?></span>
                            </div>
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'End', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( 'DD MMM YYYY', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-600 ml-2"><?php _e( '00:00', 'tenda21' ); ?></span>
                            </div>
                        </div>
                        <div class="flex gap-10 text-sm">
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Format', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( 'In-person', 'tenda21' ); ?></span>
                            </div>
                            <div>
                                <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Location', 'tenda21' ); ?></span>
                                <span class="font-sans text-charcoal-800"><?php _e( 'Tenda 21, Serra da Estrela', 'tenda21' ); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-5">
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Price', 'tenda21' ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800">€ —</span>
                        </div>
                        <div>
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php _e( 'Status', 'tenda21' ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800"><?php _e( 'Open', 'tenda21' ); ?></span>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600"><?php _e( 'Register', 'tenda21' ); ?></a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- Back to Facilitators -->
<section class="py-16 px-6 bg-bone-200" data-block-name="back-navigation">
    <div class="max-w-6xl mx-auto text-center">
        <a href="facilitators.html" class="inline-block font-sans text-sm text-charcoal-700 hover:text-charcoal-900 uppercase tracking-[0.1em] transition-colors"> <?php _e( '← View All Facilitators', 'tenda21' ); ?> </a>
    </div>
</section>
<!-- Footer -->
<footer class="py-20 px-6 bg-bone-200 border-t border-mist-400" data-block-name="site-footer">
    <div class="max-w-7xl mx-auto w-full">
        <div class="text-center mb-12">
            <a href="index.html" class="font-serif font-light text-3xl text-charcoal-900 hover:text-charcoal-700 transition-colors inline-block mb-8"> <?php _e( 'Tenda 21', 'tenda21' ); ?> </a>
            <div class="flex gap-8 items-center justify-center mb-8">
                <a href="index.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Home', 'tenda21' ); ?></a>
                <a href="experiences.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Experiences', 'tenda21' ); ?></a>
                <a href="facilitators.html" class="font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]"><?php _e( 'Facilitators', 'tenda21' ); ?></a>
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