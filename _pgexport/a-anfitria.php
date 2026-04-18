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
<section class="relative pt-40 pb-16 px-6 bg-bone-200" data-block-name="page-hero-host">
    <div class="max-w-4xl mx-auto w-full text-center">
        <h1 class="font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4"><?php _e( 'A Anfitriã', 'tenda21' ); ?></h1>
        <p class="font-sans font-light text-base uppercase tracking-[0.12em] text-charcoal-600"><?php _e( 'Sobre quem sustenta a casa', 'tenda21' ); ?></p>
    </div>
</section>
<!-- Host Profile -->
<section class="py-8 md:py-24 px-6 bg-bone-200" data-block-name="host-profile">
    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-12 items-start">
        <!-- Portrait slot -->
        <figure class="md:col-span-5 lg:col-span-5">
            <!--
                Drop the host photo at `assets/images/host-portrait.jpg` (recommended 1600x2000, soft natural light).
                Replace the `src` below with the final filename if different.
            -->
            <div class="aspect-[4/5] bg-mist-200 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1649976128988-3af35adda2d7?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDExfHxhc3NldHMlMkZzJTJGaG9zdCUyMHBvcnRyYWl0fGVufDB8fHx8MTc3MzE3NDAzMnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop" alt="Retrato da anfitriã" class="absolute inset-0 h-full w-full object-cover object-center" loading="eager" decoding="async" onerror="this.style.display='none'; this.parentElement.classList.add('bg-[url(/assets/images/background_coastal_sunset_cliffs_2000w_q90.webp)]','bg-cover','bg-center');">
                <!-- Subtle vignette for focus -->
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-charcoal-950/10 via-transparent to-transparent"></div>
            </div>
            <figcaption class="mt-4 flex items-center justify-between">
                <span class="font-sans text-xs uppercase tracking-[0.14em] text-charcoal-600"><?php _e( 'A anfitriã', 'tenda21' ); ?></span>
                <span class="font-sans text-xs text-charcoal-500"><?php _e( 'Retrato • 4:5', 'tenda21' ); ?></span>
            </figcaption>
        </figure>
        <!-- Bio content -->
        <div class="md:col-span-7 lg:col-span-6 md:pt-2">
            <div class="max-w-2xl space-y-6">
                <p class="font-sans font-light text-lg leading-[1.9] text-charcoal-800"> <?php _e( 'Sempre fui movida por encontros. Pelo desejo de abrir a casa, reunir pessoas e cuidar do espaço que as recebe, para que se sintam bem. Há algo simples e bonito nesse gesto.', 'tenda21' ); ?> </p>
                <p class="font-sans font-light text-lg leading-[1.9] text-charcoal-800"> <?php _e( 'Venho das artes e da fotografia, onde aprendi a afinar a sensibilidade e o olhar, a perceber nuances e a reconhecer o que é essencial. Nasci no Brasil e ainda jovem fui viver na Itália. Essa travessia me ensinou a me reinventar e a receber o mundo com outros olhos. Com o tempo, fui me aproximando de estudos e práticas que ampliam a percepção e aprofundam a escuta. Não como teoria, mas como caminho vivido. Aos poucos, esse modo de viver foi pedindo forma.', 'tenda21' ); ?> </p>
                <p class="font-sans font-light text-lg leading-[1.9] text-charcoal-800"> <?php _e( 'Foi assim que a Tenda 21 começou a se revelar. Não como um plano, mas como uma continuidade espontânea&nbsp;do que sempre fiz naturalmente. Um espaço que reúne presença, integração e expansão, onde os encontros acontecem com verdade.', 'tenda21' ); ?> </p>
                <p class="font-sans font-light text-lg leading-[1.9] text-charcoal-800"> <?php _e( 'Aqui, meu papel não é conduzir. É sustentar. Convido facilitadores, organizo o ritmo da casa, preparo a mesa, cuido da atmosfera. A Tenda acolhe grupos pequenos, preservando a proximidade que sustenta a troca.', 'tenda21' ); ?> </p>
            </div>
            <!-- Soft pull-quote card -->
            <div class="mt-10 bg-bone-100/60 p-6">
                <p class="font-serif text-[clamp(1.25rem,2.4vw,1.75rem)] leading-snug text-charcoal-900"> <?php _e( '“Acolher é criar espaço para que o essencial apareça.”', 'tenda21' ); ?> </p>
            </div>
        </div>
    </div>
</section>
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