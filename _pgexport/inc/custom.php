<?php
/*
 * custom.php — Tenda 21 project-specific PHP helpers
 *
 * This is the only PHP file that should contain custom logic.
 * Do not add custom code to functions.php (Pinegrow-managed, will be overwritten on export).
 *
 * Three pg_query_args filters are registered below, one per loop context:
 *   1. upcoming-events      — Events related to the current Experience (single Experience page)
 *   2. facilitator-upcoming-events — Events led by the current Facilitator (single Facilitator page)
 *   3. events-schedule      — All upcoming Events, chronological (Events archive)
 */

add_filter( 'pg_query_args', function( $args, $block_id ) {

    /*
     * 1. upcoming-events
     * Used on: single Experience page
     * Returns: future Events where event_experience = ID of the current Experience post
     * Ordered: chronologically ascending by event_start_date
     */
    if ( $block_id === 'upcoming-events' ) {
        $experience_id = (int) get_the_ID();
        $today_value   = current_time( 'Ymd' );

        $args['post_type']  = 'event';
        $args['meta_query'] = array(
            'relation' => 'AND',
            array(
                'key'     => 'event_experience',
                'value'   => '"' . $experience_id . '"',
                'compare' => 'LIKE',
            ),
            array(
                'key'     => 'event_start_date',
                'value'   => $today_value,
                'type'    => 'NUMERIC',
                'compare' => '>=',
            ),
        );
        $args['meta_key'] = 'event_start_date';
        $args['orderby']  = 'meta_value';
        $args['order']    = 'ASC';

    /*
     * 2. facilitator-upcoming-events
     * Used on: single Facilitator page
     * Returns: future Events where event_facilitators contains the current Facilitator's ID
     * Uses LIKE because event_facilitators is a serialized relationship array field (SCF/ACF style)
     * Ordered: chronologically ascending by event_start_date
     */
    } elseif ( $block_id === 'facilitator-upcoming-events' ) {
        $facilitator_id = (int) get_the_ID();
        $today_value    = current_time( 'Ymd' );

        $args['post_type']  = 'event';
        $args['meta_query'] = array(
            'relation' => 'AND',
            array(
                'key'     => 'event_facilitators',
                'value'   => '"' . $facilitator_id . '"',
                'compare' => 'LIKE',
            ),
            array(
                'key'     => 'event_start_date',
                'value'   => $today_value,
                'type'    => 'NUMERIC',
                'compare' => '>=',
            ),
        );
        $args['meta_key'] = 'event_start_date';
        $args['orderby']  = 'meta_value';
        $args['order']    = 'ASC';

    /*
     * 3. events-schedule
     * Used on: Events archive page
     * Returns: all future Events, regardless of Experience or Facilitator
     * Ordered: chronologically ascending by event_start_date
     */
    } elseif ( $block_id === 'events-schedule' ) {
        $args['post_type']  = 'event';
        $args['meta_key']   = 'event_start_date';
        $args['orderby']    = 'meta_value';
        $args['order']      = 'ASC';
        $args['date_query'] = array(
            array(
                'after'     => 'today',
                'inclusive' => true,
            ),
        );

    /*
     * 4. facilitators-archive
     * Used on: Facilitators archive page (facilitators-grid block)
     * Returns: all published Facilitator posts, alphabetically by title
     * Activates PG_Blocks_v4::loop_start() if Pinegrow generates it for facilitators-grid.
     */
    } elseif ( $block_id === 'facilitators-archive' ) {
        $args['post_type']      = 'facilitator';
        $args['post_status']    = 'publish';
        $args['posts_per_page'] = -1;
        $args['orderby']        = 'title';
        $args['order']          = 'ASC';

    /*
     * 5. experiences-archive
     * Used on: Experiences archive page (experiences-grid block)
     * Returns: all published Experience posts, ordered by menu_order ascending
     * Activates PG_Blocks_v4::loop_start() if Pinegrow generates it for experiences-grid.
     */
    } elseif ( $block_id === 'experiences-archive' ) {
        $args['post_type']      = 'experience';
        $args['post_status']    = 'publish';
        $args['posts_per_page'] = -1;
        $args['orderby']        = 'menu_order';
        $args['order']          = 'ASC';
    }

    return $args;

}, 10, 2 );

/*
 * Register Block Categories
 *
 * Pinegrow manages a single default category (tenda21_blocks) in functions.php.
 * The five categories below are registered here so the block picker is organised
 * by content type. Slugs must match the cms-block-category values set in the
 * canonical block HTML source files under /blocks.
 *
 * Do not remove the tenda21_blocks registration from functions.php — Pinegrow
 * relies on it. The categories below are additive.
 */
/*
 * Facilitators Grid — durable runtime render.
 *
 * Intercepts tenda21/facilitators-grid at render time and replaces its output
 * with a live WP_Query for all published Facilitator posts.
 *
 * Why this exists:
 * Pinegrow's cms-loop export generates a placeholder PHP template, not a WP_Query.
 * Every Pinegrow export overwrites _pgexport/blocks/facilitators-grid/facilitators-grid.php
 * with a placeholder, breaking the archive.
 *
 * This filter makes facilitators-grid.php non-critical.
 * Pinegrow can overwrite it freely — the block always renders correctly at runtime.
 */
add_filter( 'render_block', function( $block_content, $block ) {
    if ( ( $block['blockName'] ?? '' ) !== 'tenda21/facilitators-grid' ) {
        return $block_content;
    }

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-24 px-6 bg-bone-200' );
    $inner_wrap_open    = '<div class="max-w-7xl mx-auto w-full">';

    $query = new WP_Query( array(
        'post_type'      => 'facilitator',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'ASC',
    ) );

    if ( ! $query->have_posts() ) {
        return '<section ' . $wrapper_attributes . '>' . $inner_wrap_open . '<p class="font-sans font-light text-base text-charcoal-600 text-center py-12">'
            . esc_html__( 'No facilitators found.', 'tenda21' )
            . '</p></div></section>';
    }

    $cards = '';
    while ( $query->have_posts() ) {
        $query->the_post();

        $featured = get_field( 'facilitator_featured' );
        if ( is_array( $featured ) ) {
            $featured_url = isset( $featured['url'] ) ? $featured['url'] : '';
        } elseif ( is_numeric( $featured ) && $featured ) {
            $featured_url = wp_get_attachment_image_url( (int) $featured, 'large' );
        } else {
            $featured_url = '';
        }

        $role_label = get_field( 'facilitator_role_label' );
        $short_bio  = get_field( 'facilitator_short_bio' );
        $img_style  = $featured_url ? ' style="background-image: url(' . esc_url( $featured_url ) . ')"' : '';

        $cards .= '<article class="group">';
        $cards .= '<a href="' . esc_url( get_permalink() ) . '" class="block">';
        $cards .= '<div class="aspect-[3/4] bg-mist-300 bg-cover bg-center mb-6 transition-all duration-500 group-hover:shadow-[0_20px_60px_rgba(42,41,38,0.12)]"' . $img_style . '></div>';
        $cards .= '<div class="space-y-2">';
        $cards .= '<h3 class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 group-hover:text-forest-800 transition-colors">' . esc_html( get_the_title() ) . '</h3>';
        if ( $role_label ) {
            $cards .= '<p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700">' . esc_html( $role_label ) . '</p>';
        }
        if ( $short_bio ) {
            $cards .= '<p class="font-sans font-light text-base leading-[1.8] text-charcoal-700">' . esc_html( $short_bio ) . '</p>';
        }
        $cards .= '</div></a></article>';
    }
    wp_reset_postdata();

    return '<section ' . $wrapper_attributes . '>' . $inner_wrap_open
        . '<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">' . $cards . '</div>'
        . '</div></section>';

}, 10, 2 );

/*
 * Experiences Grid — durable runtime render.
 *
 * Intercepts tenda21/experiences-grid at render time and replaces its output
 * with a live WP_Query for all published Experience posts.
 *
 * Why this exists:
 * Pinegrow's cms-loop export generates a placeholder PHP template, not a WP_Query.
 * Every Pinegrow export overwrites _pgexport/blocks/experiences-grid/experiences-grid.php
 * with a placeholder, breaking the archive.
 *
 * This filter makes experiences-grid.php non-critical.
 * Pinegrow can overwrite it freely — the block always renders correctly at runtime.
 */
add_filter( 'render_block', function( $block_content, $block ) {
    if ( ( $block['blockName'] ?? '' ) !== 'tenda21/experiences-grid' ) {
        return $block_content;
    }

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-24 px-6 bg-bone-200 border-b border-mist-400' );
    $inner_wrap_open    = '<div class="max-w-7xl mx-auto w-full">';

    $query = new WP_Query( array(
        'post_type'      => 'experience',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ) );

    if ( ! $query->have_posts() ) {
        return '<section ' . $wrapper_attributes . '>' . $inner_wrap_open . '<p class="font-sans font-light text-base text-charcoal-600 text-center py-12">'
            . esc_html__( 'No experiences found.', 'tenda21' )
            . '</p></div></section>';
    }

    $cards = '';
    while ( $query->have_posts() ) {
        $query->the_post();

        $featured = get_field( 'experience_featured' );
        if ( is_array( $featured ) ) {
            $featured_url = isset( $featured['url'] ) ? $featured['url'] : '';
        } elseif ( is_numeric( $featured ) && $featured ) {
            $featured_url = wp_get_attachment_image_url( (int) $featured, 'large' );
        } else {
            $featured_url = '';
        }

        $category_label    = get_field( 'experience_category_label' );
        $short_description = get_field( 'experience_short_description' );
        $img_style         = $featured_url ? ' style="background-image: url(' . esc_url( $featured_url ) . ')"' : '';

        $cards .= '<a href="' . esc_url( get_permalink() ) . '" class="group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]">';
        $cards .= '<div class="aspect-[4/3] bg-mist-200 bg-cover bg-center"' . $img_style . '></div>';
        $cards .= '<div class="p-6 space-y-2">';
        if ( $category_label ) {
            $cards .= '<p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700">' . esc_html( $category_label ) . '</p>';
        }
        $cards .= '<h2 class="font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3">' . esc_html( get_the_title() ) . '</h2>';
        if ( $short_description ) {
            $cards .= '<p class="font-sans text-sm leading-relaxed text-charcoal-600">' . esc_html( $short_description ) . '</p>';
        }
        $cards .= '</div></a>';
    }
    wp_reset_postdata();

    return '<section ' . $wrapper_attributes . '>' . $inner_wrap_open
        . '<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">' . $cards . '</div>'
        . '</div></section>';

}, 10, 2 );

/*
 * Events List — durable runtime render.
 *
 * Intercepts tenda21/events-list and renders the archive loop at runtime so
 * published Event posts always appear even after Pinegrow exports overwrite
 * the placeholder block template.
 */
add_filter( 'render_block', function( $block_content, $block ) {
    if ( ( $block['blockName'] ?? '' ) !== 'tenda21/events-list' ) {
        return $block_content;
    }

    $attrs           = isset( $block['attrs'] ) && is_array( $block['attrs'] ) ? $block['attrs'] : array();
    $schedule_label  = isset( $attrs['events_schedule_label'] ) && $attrs['events_schedule_label'] !== null
        ? $attrs['events_schedule_label']
        : __( 'Upcoming Schedule', 'tenda21' );
    $timezone_label  = isset( $attrs['events_timezone_label'] ) && $attrs['events_timezone_label'] !== null
        ? $attrs['events_timezone_label']
        : __( 'All times · Serra da Estrela, Portugal · GMT+1', 'tenda21' );
    $wrapper_classes = 'py-16 md:py-24 px-6 bg-bone-100 border-t border-b border-mist-300';
    $wrapper_attr    = tenda21_block_wrapper_attributes( $block, $wrapper_classes );

    $query = new WP_Query( array(
        'post_type'      => 'event',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_key'       => 'event_start_date',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
    ) );

    ob_start();
    ?>
    <section <?php echo $wrapper_attr; ?>>
        <div class="max-w-6xl mx-auto w-full">
            <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between border-b border-mist-400 pb-4 mb-10 text-xs font-sans uppercase tracking-[0.2em] text-charcoal-500">
                <?php if ( $schedule_label ) : ?>
                    <span><?php echo esc_html( $schedule_label ); ?></span>
                <?php endif; ?>
                <?php if ( $timezone_label ) : ?>
                    <span><?php echo esc_html( $timezone_label ); ?></span>
                <?php endif; ?>
            </div>
            <?php if ( $query->have_posts() ) : ?>
                <div class="space-y-6">
                    <?php
                    while ( $query->have_posts() ) :
                        $query->the_post();
                        echo tenda21_render_events_archive_row( get_the_ID() );
                    endwhile;
                    ?>
                </div>
            <?php else : ?>
                <div class="rounded border border-dashed border-mist-400/70 bg-bone-50/70 px-6 py-8 text-center font-sans text-sm text-charcoal-500/80">
                    <?php esc_html_e( 'No events found.', 'tenda21' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
    wp_reset_postdata();

    return ob_get_clean();

}, 10, 2 );

/*
 * Make single Event blocks consume live post data.
 * Currently targets tenda21/event-hero so its links always resolve at runtime.
 */
add_filter( 'render_block', function( $block_content, $block ) {
    $block_name = $block['blockName'] ?? '';
    $target_blocks = array(
        'tenda21/event-hero',
        'tenda21/event-booking-meta',
        'tenda21/event-date-meta',
    );

    if ( ! in_array( $block_name, $target_blocks, true ) ) {
        return $block_content;
    }

    if ( is_admin() ) {
        return $block_content;
    }

    if ( ! is_singular( 'event' ) ) {
        return $block_content;
    }

    $post_id = get_the_ID();
    if ( ! $post_id ) {
        return $block_content;
    }

    switch ( $block_name ) {
        case 'tenda21/event-hero':
            return tenda21_render_event_hero_block( $post_id, $block );

        case 'tenda21/event-booking-meta':
            return tenda21_render_event_booking_meta_block( $post_id, $block );

        case 'tenda21/event-date-meta':
            return tenda21_render_event_date_meta_block( $post_id, $block );
    }

    return $block_content;

}, 15, 2 );

/*
 * Register Block Categories
 *
 * Pinegrow manages a single default category (tenda21_blocks) in functions.php.
 * The five categories below are registered here so the block picker is organised
 * by content type. Slugs must match the cms-block-category values set in the
 * canonical block HTML source files under /blocks.
 *
 * Do not remove the tenda21_blocks registration from functions.php — Pinegrow
 * relies on it. The categories below are additive.
 */
add_filter( 'block_categories_all', function( $categories ) {
    $tenda21_categories = array(
        array( 'slug' => 'tenda21_home',        'title' => __( 'Tenda21 Home',        'tenda21' ) ),
        array( 'slug' => 'tenda21_shared',      'title' => __( 'Tenda21 Shared',      'tenda21' ) ),
        array( 'slug' => 'tenda21_experience',  'title' => __( 'Tenda21 Experience',  'tenda21' ) ),
        array( 'slug' => 'tenda21_facilitator', 'title' => __( 'Tenda21 Facilitator', 'tenda21' ) ),
        array( 'slug' => 'tenda21_event',       'title' => __( 'Tenda21 Event',       'tenda21' ) ),
    );
    return array_merge( $categories, $tenda21_categories );
}, 10, 1 );

/*
 * Make single Facilitator blocks consume live post data.
 * The markup stays identical to the exported templates, but data is
 * substituted at runtime so Pinegrow's placeholder defaults are bypassed.
 */
add_filter( 'render_block', function( $block_content, $block ) {
    $block_name = $block['blockName'] ?? '';
    $target_blocks = array(
        'tenda21/facilitator-hero',
        'tenda21/facilitator-meta',
        'tenda21/facilitator-specialties',
        'tenda21/facilitator-upcoming-events',
    );

    if ( ! in_array( $block_name, $target_blocks, true ) ) {
        return $block_content;
    }

    if ( is_admin() ) {
        return $block_content;
    }

    if ( ! is_singular( 'facilitator' ) ) {
        return $block_content;
    }

    $post_id = get_the_ID();
    if ( ! $post_id ) {
        return $block_content;
    }

    switch ( $block_name ) {
        case 'tenda21/facilitator-hero':
            return tenda21_render_facilitator_hero_block( $post_id, $block );

        case 'tenda21/facilitator-meta':
            return tenda21_render_facilitator_meta_block( $post_id, $block );

        case 'tenda21/facilitator-specialties':
            return tenda21_render_facilitator_specialties_block( $post_id, $block );

        case 'tenda21/facilitator-upcoming-events':
            return tenda21_render_facilitator_events_block( $post_id, $block );
    }

    return $block_content;

}, 15, 2 );

function tenda21_render_facilitator_hero_block( $post_id, $block = null ) {
    $attrs            = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $back_link_label  = isset( $attrs['back_link_label'] ) && $attrs['back_link_label'] !== '' ? $attrs['back_link_label'] : __( '← All Facilitators', 'tenda21' );
    $featured_url = get_the_post_thumbnail_url( $post_id, 'full' );
    $role_label   = get_post_meta( $post_id, 'facilitator_role_label', true );
    $content      = apply_filters( 'the_content', get_post_field( 'post_content', $post_id ) );
    $archive_url  = get_post_type_archive_link( 'facilitator' );
    if ( ! $archive_url ) {
        $archive_url = home_url( '/' );
    }
    $bg_style = $featured_url ? ' style="background-image: url(' . esc_url( $featured_url ) . ')"' : '';

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'relative pt-32 pb-24 px-6 bg-bone-200' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-6xl mx-auto w-full">
            <div class="grid md:grid-cols-5 gap-12 items-start">
                <div class="md:col-span-2">
                    <div class="aspect-[3/4] bg-mist-300 bg-cover bg-center sticky top-32"<?php echo $bg_style; ?>></div>
                </div>
                <div class="md:col-span-3 space-y-8">
                    <div>
                        <a href="<?php echo esc_url( $archive_url ); ?>" class="inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-6 transition-colors"><?php echo esc_html( $back_link_label ); ?></a>
                        <h1 class="font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4"><?php echo esc_html( get_the_title( $post_id ) ); ?></h1>
                        <?php if ( $role_label ) : ?>
                            <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700"><?php echo esc_html( $role_label ); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php if ( $content ) : ?>
                        <div class="space-y-6">
                            <?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_render_facilitator_meta_block( $post_id, $block = null ) {
    $attrs = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $label_defaults = array(
        'languages_label' => __( 'Languages', 'tenda21' ),
        'website_label'   => __( 'Website', 'tenda21' ),
        'instagram_label' => __( 'Instagram', 'tenda21' ),
    );

    $labels = array();
    foreach ( $label_defaults as $key => $fallback ) {
        $attr_value     = isset( $attrs[ $key ] ) ? $attrs[ $key ] : null;
        $labels[ $key ] = ( $attr_value === null || $attr_value === '' ) ? $fallback : $attr_value;
    }

    $languages      = implode( ', ', tenda21_normalize_meta_list( get_post_meta( $post_id, 'facilitator_languages', true ) ) );
    $website_raw    = trim( (string) get_post_meta( $post_id, 'facilitator_website', true ) );
    $website_url    = $website_raw ? tenda21_maybe_add_scheme( $website_raw ) : '';
    $website_label  = $website_url ? tenda21_trim_url_for_display( $website_url ) : '';

    $instagram_raw   = trim( (string) get_post_meta( $post_id, 'facilitator_instagram', true ) );
    $instagram_url   = '';
    $instagram_label = '';
    if ( $instagram_raw ) {
        if ( preg_match( '#^https?://#i', $instagram_raw ) ) {
            $instagram_url   = $instagram_raw;
            $instagram_label = tenda21_trim_url_for_display( $instagram_raw );
        } else {
            $handle          = ltrim( $instagram_raw, '@' );
            $instagram_url   = 'https://instagram.com/' . $handle;
            $instagram_label = '@' . $handle;
        }
    }

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-12 px-6 bg-bone-100 border-t border-mist-400' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-6xl mx-auto w-full">
            <div class="flex flex-wrap gap-x-12 gap-y-6 items-start">
                <div>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['languages_label'] ); ?></span>
                    <span class="font-sans text-sm text-charcoal-800"><?php echo $languages ? esc_html( $languages ) : esc_html__( 'Not specified', 'tenda21' ); ?></span>
                </div>
                <div>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['website_label'] ); ?></span>
                    <?php if ( $website_url ) : ?>
                        <a href="<?php echo esc_url( $website_url ); ?>" class="font-sans text-sm text-forest-700 hover:text-forest-800 transition-colors" target="_blank" rel="noopener"><?php echo esc_html( $website_label ); ?></a>
                    <?php else : ?>
                        <span class="font-sans text-sm text-charcoal-500"><?php esc_html_e( 'Not provided', 'tenda21' ); ?></span>
                    <?php endif; ?>
                </div>
                <div>
                    <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['instagram_label'] ); ?></span>
                    <?php if ( $instagram_url ) : ?>
                        <a href="<?php echo esc_url( $instagram_url ); ?>" class="font-sans text-sm text-forest-700 hover:text-forest-800 transition-colors" target="_blank" rel="noopener"><?php echo esc_html( $instagram_label ); ?></a>
                    <?php else : ?>
                        <span class="font-sans text-sm text-charcoal-500"><?php esc_html_e( 'Not provided', 'tenda21' ); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_render_facilitator_specialties_block( $post_id, $block = null ) {
    $specialties = tenda21_normalize_meta_list( get_post_meta( $post_id, 'facilitator_specialties', true ) );

    $wrapper_attributes   = tenda21_block_wrapper_attributes( $block, 'py-12 px-6 bg-bone-200' );
    $specialty_class      = implode(
        ' ',
        array(
            'px-4',
            'py-2',
            'bg-mist-200',
            'text-charcoal-700',
            'font-sans',
            'text-sm',
        )
    );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-6xl mx-auto w-full">
            <div class="pt-8 border-t border-mist-400">
                <h3 class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-4"><?php esc_html_e( 'Areas of Expertise', 'tenda21' ); ?></h3>
                <?php if ( $specialties ) : ?>
                    <div class="flex flex-wrap gap-3">
                        <?php foreach ( $specialties as $item ) : ?>
                            <span class="<?php echo esc_attr( $specialty_class ); ?>"><?php echo esc_html( $item ); ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    <p class="font-sans text-sm text-charcoal-600"><?php esc_html_e( 'No specialties listed yet.', 'tenda21' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_render_facilitator_events_block( $post_id, $block = null ) {
    $attrs = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $label_defaults = array(
        'section_heading'   => __( 'Upcoming Sessions', 'tenda21' ),
        'event_label'       => __( 'Event', 'tenda21' ),
        'start_label'       => __( 'Start', 'tenda21' ),
        'end_label'         => __( 'End', 'tenda21' ),
        'format_label'      => __( 'Format', 'tenda21' ),
        'location_label'    => __( 'Location', 'tenda21' ),
        'price_label'       => __( 'Price', 'tenda21' ),
        'status_label'      => __( 'Status', 'tenda21' ),
        'cta_label'         => __( 'Register', 'tenda21' ),
        'empty_state_label' => __( 'No upcoming sessions for this facilitator yet.', 'tenda21' ),
    );

    $labels = array();
    foreach ( $label_defaults as $key => $fallback ) {
        $attr_value     = isset( $attrs[ $key ] ) ? $attrs[ $key ] : null;
        $labels[ $key ] = ( $attr_value === null || $attr_value === '' ) ? $fallback : $attr_value;
    }

    $today = current_time( 'Ymd' );

    $query = new WP_Query( array(
        'post_type'      => 'event',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_key'       => 'event_start_date',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
        'meta_query'     => array(
            'relation' => 'AND',
            array(
                'key'     => 'event_facilitators',
                'value'   => '"' . $post_id . '"',
                'compare' => 'LIKE',
            ),
            array(
                'key'     => 'event_start_date',
                'value'   => $today,
                'compare' => '>=',
                'type'    => 'NUMERIC',
            ),
        ),
    ) );

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-24 px-6 bg-mist-100' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-6xl mx-auto w-full">
            <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12"><?php echo esc_html( $labels['section_heading'] ); ?></h2>
            <?php if ( $query->have_posts() ) : ?>
                <div class="space-y-8">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php
                        $event_id      = get_the_ID();
                        $event_name    = get_the_title( $event_id );
                        $event_url     = get_permalink( $event_id );
                        $start_date    = tenda21_format_event_date_value( get_post_meta( $event_id, 'event_start_date', true ) );
                        $start_time    = tenda21_format_event_time_value( get_post_meta( $event_id, 'event_start_time', true ) );
                        $end_date      = tenda21_format_event_date_value( get_post_meta( $event_id, 'event_end_date', true ) );
                        $end_time      = tenda21_format_event_time_value( get_post_meta( $event_id, 'event_end_time', true ) );
                        $location_type = get_post_meta( $event_id, 'event_location_type', true );
                        $location      = get_post_meta( $event_id, 'event_location', true );
                        $price       = get_post_meta( $event_id, 'event_price', true );
                        $status      = get_post_meta( $event_id, 'event_booking_status', true );
                        $booking_url = tenda21_get_event_booking_url( $event_id );
                        ?>
                        <article class="bg-bone-100 p-8 md:p-10 border-l-2 border-forest-700">
                            <div class="grid md:grid-cols-3 gap-8 items-start">
                                <div class="md:col-span-2 space-y-4">
                                    <div>
                                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['event_label'] ); ?></span>
                                        <?php if ( $event_url ) : ?>
                                            <a href="<?php echo esc_url( $event_url ); ?>" class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 hover:text-forest-800 transition-colors block"><?php echo esc_html( $event_name ); ?></a>
                                        <?php else : ?>
                                            <span class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 block"><?php echo esc_html( $event_name ); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex flex-wrap gap-x-10 gap-y-3 text-sm">
                                        <div>
                                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['start_label'] ); ?></span>
                                            <span class="font-sans text-charcoal-800"><?php echo esc_html( $start_date ); ?></span>
                                            <?php if ( $start_time ) : ?>
                                                <span class="font-sans text-charcoal-600 ml-2"><?php echo esc_html( $start_time ); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['end_label'] ); ?></span>
                                            <span class="font-sans text-charcoal-800"><?php echo esc_html( $end_date ); ?></span>
                                            <?php if ( $end_time ) : ?>
                                                <span class="font-sans text-charcoal-600 ml-2"><?php echo esc_html( $end_time ); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-x-10 gap-y-3 text-sm">
                                        <div>
                                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['format_label'] ); ?></span>
                                            <span class="font-sans text-charcoal-800"><?php echo esc_html( $location_type ); ?></span>
                                        </div>
                                        <div>
                                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['location_label'] ); ?></span>
                                            <span class="font-sans text-charcoal-800"><?php echo esc_html( $location ); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-5">
                                    <div>
                                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['price_label'] ); ?></span>
                                        <span class="font-sans text-sm text-charcoal-800"><?php echo esc_html( $price ); ?></span>
                                    </div>
                                    <div>
                                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['status_label'] ); ?></span>
                                        <span class="font-sans text-sm text-charcoal-800"><?php echo esc_html( $status ); ?></span>
                                    </div>
                                    <div class="pt-2">
                                        <?php if ( $booking_url ) : ?>
                                            <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600" target="_blank" rel="noopener"><?php echo esc_html( $labels['cta_label'] ); ?></a>
                                        <?php else : ?>
                                            <span class="font-sans text-xs text-charcoal-500"><?php esc_html_e( 'Booking link coming soon', 'tenda21' ); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p class="font-sans font-light text-base text-charcoal-600"><?php echo esc_html( $labels['empty_state_label'] ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php
    wp_reset_postdata();
    return ob_get_clean();
}

function tenda21_render_experience_events_block( $post_id, $block = null ) {
    $attrs = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $label_defaults = array(
        'section_heading'   => __( 'Upcoming Sessions', 'tenda21' ),
        'start_time_label'  => __( 'Start Time', 'tenda21' ),
        'price_label'       => __( 'Price', 'tenda21' ),
        'start_date_label'  => __( 'Start Date', 'tenda21' ),
        'status_label'      => __( 'Booking Status', 'tenda21' ),
        'cta_label'         => __( 'Book Now', 'tenda21' ),
        'empty_state_label' => __( 'No upcoming sessions for this experience yet.', 'tenda21' ),
    );

    $labels = array();
    foreach ( $label_defaults as $key => $fallback ) {
        $attr_value     = isset( $attrs[ $key ] ) ? $attrs[ $key ] : null;
        $labels[ $key ] = ( $attr_value === null || $attr_value === '' ) ? $fallback : $attr_value;
    }

    $today = current_time( 'Ymd' );
    $excerpt_clamp_style = '-webkit-line-clamp:3;-webkit-box-orient:vertical;display:-webkit-box;overflow:hidden;';

    $query = new WP_Query( array(
        'post_type'      => 'event',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_key'       => 'event_start_date',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
        'meta_query'     => array(
            'relation' => 'AND',
            array(
                'key'     => 'event_experience',
                'value'   => '"' . $post_id . '"',
                'compare' => 'LIKE',
            ),
            array(
                'key'     => 'event_start_date',
                'value'   => $today,
                'compare' => '>=',
                'type'    => 'NUMERIC',
            ),
        ),
    ) );

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-24 px-6 bg-bone-200' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-5xl mx-auto w-full">
            <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-16"><?php echo esc_html( $labels['section_heading'] ); ?></h2>
            <?php if ( $query->have_posts() ) : ?>
                <div class="space-y-6">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php
                        $event_id    = get_the_ID();
                        $raw_excerpt = get_the_excerpt( $event_id );
                        $excerpt     = $raw_excerpt ? wp_trim_words( wp_strip_all_tags( $raw_excerpt ), 26 ) : '';
                        $start_date  = get_post_meta( $event_id, 'event_start_date', true );
                        $start_time  = get_post_meta( $event_id, 'event_start_time', true );
                        $price       = get_post_meta( $event_id, 'event_price', true );
                        $status      = get_post_meta( $event_id, 'event_booking_status', true );
                        $booking_url = tenda21_get_event_booking_url( $event_id );
                        ?>
                        <article class="bg-bone-100 p-8 border-l-2 border-forest-700">
                            <div class="grid md:grid-cols-3 gap-8 items-start">
                                <div class="md:col-span-2 space-y-3">
                                    <h3 class="font-serif font-light text-2xl leading-[1.3] text-charcoal-900">
                                        <a href="<?php echo esc_url( get_permalink( $event_id ) ); ?>" class="hover:text-forest-800 transition-colors"><?php echo esc_html( get_the_title( $event_id ) ); ?></a>
                                    </h3>
                                    <?php if ( $excerpt ) : ?>
                                        <p class="font-sans font-light text-base leading-[1.8] text-charcoal-700" style="<?php echo esc_attr( $excerpt_clamp_style ); ?>"><?php echo esc_html( $excerpt ); ?></p>
                                    <?php endif; ?>
                                    <div class="flex gap-8 text-sm">
                                        <div>
                                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['start_time_label'] ); ?></span>
                                            <span class="font-sans text-charcoal-800"><?php echo esc_html( $start_time ); ?></span>
                                        </div>
                                        <div>
                                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['price_label'] ); ?></span>
                                            <span class="font-sans text-charcoal-800"><?php echo esc_html( $price ); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div>
                                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-2"><?php echo esc_html( $labels['start_date_label'] ); ?></span>
                                        <span class="font-sans text-sm text-charcoal-800"><?php echo esc_html( tenda21_format_event_date_value( $start_date ) ); ?></span>
                                    </div>
                                    <div>
                                        <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['status_label'] ); ?></span>
                                        <span class="font-sans text-sm text-charcoal-800"><?php echo esc_html( $status ); ?></span>
                                    </div>
                                    <?php if ( $booking_url ) : ?>
                                        <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600" target="_blank" rel="noopener"><?php echo esc_html( $labels['cta_label'] ); ?></a>
                                    <?php else : ?>
                                        <span class="font-sans text-xs text-charcoal-500"><?php esc_html_e( 'Booking link coming soon', 'tenda21' ); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p class="font-sans font-light text-base text-charcoal-600 text-center"><?php echo esc_html( $labels['empty_state_label'] ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php
    wp_reset_postdata();
    return ob_get_clean();
}

function tenda21_render_event_hero_block( $post_id, $block = null ) {
    $attrs = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $label_defaults = array(
        'back_link_label'      => __( '← Back to Events', 'tenda21' ),
        'experience_label'     => __( 'From the Experience', 'tenda21' ),
        'type_label'           => __( 'Type', 'tenda21' ),
        'location_label'       => __( 'Location', 'tenda21' ),
        'facilitated_by_label' => __( 'Facilitated by', 'tenda21' ),
        'starts_label'         => __( 'From', 'tenda21' ),
        'ends_label'           => __( 'To', 'tenda21' ),
        'investment_label'     => __( 'Investment', 'tenda21' ),
    );

    $labels = array();
    foreach ( $label_defaults as $key => $fallback ) {
        $attr_value    = isset( $attrs[ $key ] ) ? $attrs[ $key ] : null;
        $labels[ $key ] = ( $attr_value === null || $attr_value === '' ) ? $fallback : $attr_value;
    }

    $archive_url = get_post_type_archive_link( 'event' );
    if ( ! $archive_url ) {
        $archive_url = home_url( '/' );
    }

    $featured_url = tenda21_get_event_feature_image_url( $post_id, 'full' );

    $experience_value = get_field( 'event_experience', $post_id );
    if ( empty( $experience_value ) ) {
        $experience_value = get_post_meta( $post_id, 'event_experience', true );
    }

    $experience_url  = '';
    $experience_name = '';
    $experience_ids  = tenda21_normalize_relationship_post_ids( $experience_value );

    foreach ( $experience_ids as $experience_id ) {
        $experience_id   = (int) $experience_id;
        $experience_post = $experience_id ? get_post( $experience_id ) : null;

        if ( ! $experience_post || $experience_post->post_status !== 'publish' || $experience_post->post_type !== 'experience' ) {
            continue;
        }

        $experience_url  = get_permalink( $experience_post );
        $experience_name = get_the_title( $experience_post );
        break;
    }

    if ( ! $experience_name ) {
        $experience_name = get_the_title( $post_id );
    }

    $intro = '';
    $post_excerpt = trim( (string) get_post_field( 'post_excerpt', $post_id ) );
    if ( $post_excerpt !== '' ) {
        $intro = $post_excerpt;
    } else {
        $post_content = get_post_field( 'post_content', $post_id );
        if ( $post_content ) {
            $intro = wp_trim_words( wp_strip_all_tags( $post_content ), 40 );
        }
    }
    $location_type = get_post_meta( $post_id, 'event_location_type', true );
    $location      = get_post_meta( $post_id, 'event_location', true );
    $start_date    = tenda21_format_event_date_value( get_post_meta( $post_id, 'event_start_date', true ) );
    $start_time    = get_post_meta( $post_id, 'event_start_time', true );
    $end_date      = tenda21_format_event_date_value( get_post_meta( $post_id, 'event_end_date', true ) );
    $end_time      = get_post_meta( $post_id, 'event_end_time', true );
    $price         = get_post_meta( $post_id, 'event_price', true );
    $status        = get_post_meta( $post_id, 'event_booking_status', true );
    $booking_url   = tenda21_get_event_booking_url( $post_id );

    $facilitators = get_field( 'event_facilitators', $post_id );
    $fac_links    = '';
    if ( $facilitators && is_array( $facilitators ) ) {
        foreach ( $facilitators as $facilitator ) {
            $fac_id = is_object( $facilitator ) ? $facilitator->ID : (int) $facilitator;
            if ( ! $fac_id ) {
                continue;
            }
            $fac_post = get_post( $fac_id );
            if ( ! $fac_post || $fac_post->post_status !== 'publish' ) {
                continue;
            }
            $fac_permalink = get_permalink( $fac_id );
            if ( ! $fac_permalink ) {
                continue;
            }
            $fac_links .= '<a href="' . esc_url( $fac_permalink ) . '" class="font-sans inline-flex items-center text-xs uppercase tracking-[0.15em] border border-mist-500 text-charcoal-700 hover:border-charcoal-700 hover:text-charcoal-900 transition-colors px-3 py-1">'
                . esc_html( get_the_title( $fac_id ) )
                . '</a>';
        }
    }

    if ( ! $fac_links ) {
        $fac_links = '<span class="font-sans inline-flex items-center text-xs uppercase tracking-[0.15em] text-charcoal-400">' . esc_html__( 'Facilitator TBA', 'tenda21' ) . '</span>';
    }

    $bg_style            = $featured_url ? ' style="background-image: url(' . esc_url( $featured_url ) . ')"' : '';
    $wrapper_attributes  = tenda21_block_wrapper_attributes( $block, 'pt-28 pb-0 bg-bone-200' );
    $experience_has_link = (bool) $experience_url;

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-6xl mx-auto px-6">
            <a href="<?php echo esc_url( $archive_url ); ?>" class="inline-flex items-center gap-2 text-xs font-sans uppercase tracking-[0.2em] text-forest-700 hover:text-forest-800 transition-colors mb-8 block">
                <?php echo esc_html( $labels['back_link_label'] ); ?>
            </a>
            <div class="w-full aspect-[16/7] bg-mist-300 bg-cover bg-center border border-mist-400 overflow-hidden"<?php echo $bg_style; ?>></div>
            <div class="grid gap-10 lg:grid-cols-[1.2fr,0.8fr] pt-10 pb-16">
                <div class="space-y-7">
                    <div class="space-y-4">
                        <div class="space-y-0.5">
                            <p class="font-sans uppercase text-[0.65rem] tracking-[0.25em] text-charcoal-500"><?php echo esc_html( $labels['experience_label'] ); ?></p>
                            <?php if ( $experience_has_link ) : ?>
                                <a href="<?php echo esc_url( $experience_url ); ?>" class="font-sans inline-flex items-center text-xs uppercase tracking-[0.2em] text-charcoal-700 hover:text-charcoal-900 transition-colors"><?php echo esc_html( $experience_name ); ?></a>
                            <?php else : ?>
                                <span class="font-sans inline-flex items-center text-xs uppercase tracking-[0.2em] text-charcoal-700"><?php echo esc_html( $experience_name ); ?></span>
                            <?php endif; ?>
                        </div>
                        <h1 class="font-serif font-light text-[clamp(2.4rem,5vw,4rem)] leading-[1.15] tracking-[0.01em] text-charcoal-900"><?php echo esc_html( get_the_title( $post_id ) ); ?></h1>
                        <?php if ( $intro ) : ?>
                            <div class="font-sans font-light text-base leading-[1.85] text-charcoal-600 max-w-[58ch]"><?php echo wp_kses_post( $intro ); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-wrap gap-8 pt-5 border-t border-mist-400">
                        <div class="space-y-1">
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php echo esc_html( $labels['type_label'] ); ?></span>
                            <span class="font-sans text-sm text-charcoal-700"><?php echo esc_html( $location_type ); ?></span>
                        </div>
                        <div class="space-y-1">
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php echo esc_html( $labels['location_label'] ); ?></span>
                            <span class="font-sans text-sm text-charcoal-700"><?php echo esc_html( $location ); ?></span>
                        </div>
                        <div class="space-y-1">
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block"><?php echo esc_html( $labels['facilitated_by_label'] ); ?></span>
                            <div class="flex flex-wrap gap-2 pt-0.5" data-repeater="event_facilitators">
                                <?php echo $fac_links; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="border border-mist-400 bg-bone-100/70 px-4 py-3 flex items-center justify-between gap-2">
                        <div class="flex items-baseline gap-1.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-400 shrink-0"><?php echo esc_html( $labels['starts_label'] ); ?></span>
                            <span class="font-serif text-sm text-charcoal-900"><?php echo esc_html( $start_date ); ?></span>
                            <?php if ( $start_time ) : ?>
                                <span class="font-sans text-[0.65rem] text-charcoal-500"><?php echo esc_html( $start_time ); ?></span>
                            <?php endif; ?>
                        </div>
                        <span class="font-sans text-[0.6rem] text-charcoal-300 shrink-0 select-none">→</span>
                        <div class="flex items-baseline gap-1.5">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-400 shrink-0"><?php echo esc_html( $labels['ends_label'] ); ?></span>
                            <span class="font-serif text-sm text-charcoal-800"><?php echo esc_html( $end_date ); ?></span>
                            <?php if ( $end_time ) : ?>
                                <span class="font-sans text-[0.65rem] text-charcoal-500"><?php echo esc_html( $end_time ); ?></span>
                            <?php endif; ?>
                        </div>
                        <span class="font-sans text-[0.55rem] uppercase tracking-[0.15em] text-charcoal-400 shrink-0 hidden lg:block"><?php esc_html_e( 'GMT+1', 'tenda21' ); ?></span>
                    </div>
                    <div class="flex flex-col gap-5 bg-charcoal-900 px-5 py-5 text-bone-50">
                        <div class="flex items-end justify-between">
                            <div class="space-y-1">
                            <span class="font-sans uppercase text-[0.55rem] tracking-[0.25em] font-medium text-bone-200/60 block"><?php echo esc_html( $labels['investment_label'] ); ?></span>
                                <?php if ( $price ) : ?>
                                    <span class="font-serif text-3xl leading-tight text-bone-50"><?php echo esc_html( $price ); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if ( $status ) : ?>
                                <span class="inline-flex items-center border border-bone-200/30 px-3 py-1 text-[0.58rem] font-sans uppercase tracking-[0.18em] text-bone-200"><?php echo esc_html( $status ); ?></span>
                            <?php endif; ?>
                        </div>
                        <p class="font-sans text-xs leading-relaxed text-bone-200/55"><?php esc_html_e( 'Need a custom date or private immersion? Mention it in your note.', 'tenda21' ); ?></p>
                        <?php if ( $booking_url ) : ?>
                            <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center justify-center bg-bone-50 text-charcoal-900 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5 transition-all duration-300 hover:bg-clay-400 hover:text-bone-50"><?php esc_html_e( 'Book Your Place', 'tenda21' ); ?></a>
                        <?php else : ?>
                            <span class="inline-flex items-center justify-center bg-mist-200 text-charcoal-500 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5"><?php esc_html_e( 'Booking Soon', 'tenda21' ); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_render_event_booking_meta_block( $post_id, $block = null ) {
    $attrs = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $label_defaults = array(
        'investment_label'  => __( 'Investment', 'tenda21' ),
        'booking_note'      => __( 'Need a custom date or private immersion? Mention it in your note.', 'tenda21' ),
        'booking_cta_label' => __( 'Book Your Place', 'tenda21' ),
    );

    $labels = array();
    foreach ( $label_defaults as $key => $fallback ) {
        $attr_value     = isset( $attrs[ $key ] ) ? $attrs[ $key ] : null;
        $labels[ $key ] = ( $attr_value === null || $attr_value === '' ) ? $fallback : $attr_value;
    }

    $price       = get_post_meta( $post_id, 'event_price', true );
    $status      = get_post_meta( $post_id, 'event_booking_status', true );
    $booking_url = tenda21_get_event_booking_url( $post_id );

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'flex flex-col gap-5 bg-charcoal-900 px-5 py-5 text-bone-50' );

    ob_start();
    ?>
    <div <?php echo $wrapper_attributes; ?>>
        <div class="flex items-end justify-between">
            <div class="space-y-1">
                <span class="font-sans uppercase text-[0.55rem] tracking-[0.25em] font-medium text-bone-200/60 block"><?php echo esc_html( $labels['investment_label'] ); ?></span>
                <?php if ( $price ) : ?>
                    <span class="font-serif text-3xl leading-tight text-bone-50"><?php echo esc_html( $price ); ?></span>
                <?php else : ?>
                    <span class="font-serif text-3xl leading-tight text-bone-50 opacity-50"><?php esc_html_e( 'To be announced', 'tenda21' ); ?></span>
                <?php endif; ?>
            </div>
            <?php if ( $status ) : ?>
                <span class="inline-flex items-center border border-bone-200/30 px-3 py-1 text-[0.58rem] font-sans uppercase tracking-[0.18em] text-bone-200"><?php echo esc_html( $status ); ?></span>
            <?php endif; ?>
        </div>
        <?php if ( $labels['booking_note'] ) : ?>
            <p class="font-sans text-xs leading-relaxed text-bone-200/55"><?php echo wp_kses_post( $labels['booking_note'] ); ?></p>
        <?php endif; ?>
        <?php if ( $booking_url ) : ?>
            <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center justify-center bg-bone-50 text-charcoal-900 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5 transition-all duration-300 hover:bg-clay-400 hover:text-bone-50">
                <?php echo esc_html( $labels['booking_cta_label'] ); ?>
            </a>
        <?php else : ?>
            <span class="inline-flex items-center justify-center bg-mist-200 text-charcoal-500 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5">
                <?php esc_html_e( 'Booking Soon', 'tenda21' ); ?>
            </span>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}

function tenda21_render_event_date_meta_block( $post_id, $block = null ) {
    $attrs = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $label_defaults = array(
        'starts_label'   => __( 'Starts', 'tenda21' ),
        'ends_label'     => __( 'Ends', 'tenda21' ),
        'timezone_label' => __( 'GMT+1 · Serra da Estrela', 'tenda21' ),
    );

    $labels = array();
    foreach ( $label_defaults as $key => $fallback ) {
        $attr_value     = isset( $attrs[ $key ] ) ? $attrs[ $key ] : null;
        $labels[ $key ] = ( $attr_value === null || $attr_value === '' ) ? $fallback : $attr_value;
    }

    $start_date = tenda21_format_event_date_value( get_post_meta( $post_id, 'event_start_date', true ) );
    $start_time = get_post_meta( $post_id, 'event_start_time', true );
    $end_date   = tenda21_format_event_date_value( get_post_meta( $post_id, 'event_end_date', true ) );
    $end_time   = get_post_meta( $post_id, 'event_end_time', true );

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'flex flex-col gap-5 rounded-sm border border-mist-300 bg-bone-50/80 p-6' );

    ob_start();
    ?>
    <div <?php echo $wrapper_attributes; ?>>
        <div class="space-y-2">
            <span class="font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-charcoal-500"><?php echo esc_html( $labels['starts_label'] ); ?></span>
            <?php if ( $start_date ) : ?>
                <p class="font-serif text-4xl leading-tight text-charcoal-900"><?php echo esc_html( $start_date ); ?></p>
            <?php else : ?>
                <p class="font-serif text-4xl leading-tight text-charcoal-500"><?php esc_html_e( 'TBA', 'tenda21' ); ?></p>
            <?php endif; ?>
            <?php if ( $start_time ) : ?>
                <p class="font-sans text-sm uppercase tracking-[0.3em] text-charcoal-600"><?php echo esc_html( $start_time ); ?></p>
            <?php endif; ?>
        </div>
        <div class="h-px w-full bg-mist-300"></div>
        <div class="space-y-2">
            <span class="font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-charcoal-500"><?php echo esc_html( $labels['ends_label'] ); ?></span>
            <?php if ( $end_date ) : ?>
                <p class="font-serif text-2xl leading-tight text-charcoal-800"><?php echo esc_html( $end_date ); ?></p>
            <?php else : ?>
                <p class="font-serif text-2xl leading-tight text-charcoal-500"><?php esc_html_e( 'TBA', 'tenda21' ); ?></p>
            <?php endif; ?>
            <?php if ( $end_time ) : ?>
                <p class="font-sans text-sm uppercase tracking-[0.3em] text-charcoal-600"><?php echo esc_html( $end_time ); ?></p>
            <?php endif; ?>
        </div>
        <?php if ( $labels['timezone_label'] ) : ?>
            <p class="font-sans text-[0.6rem] uppercase tracking-[0.3em] text-charcoal-500"><?php echo esc_html( $labels['timezone_label'] ); ?></p>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}

function tenda21_render_events_archive_row( $event_id ) {
    $experience_id       = (int) get_post_meta( $event_id, 'event_experience', true );
    $excerpt_clamp_style = '-webkit-line-clamp:3;-webkit-box-orient:vertical;display:-webkit-box;overflow:hidden;';

    $event_url  = get_permalink( $event_id );
    $event_name = get_the_title( $event_id );

    if ( ! $event_url && $experience_id ) {
        $event_url = get_permalink( $experience_id );
    }

    if ( ! $event_name && $experience_id ) {
        $event_name = get_the_title( $experience_id );
    }

    $format_date = static function ( $value ) {
        if ( ! $value ) {
            return '';
        }

        $value   = trim( (string) $value );
        $formats = array( 'Ymd', 'Y-m-d' );

        foreach ( $formats as $format ) {
            $dt = DateTime::createFromFormat( $format, $value );
            if ( $dt instanceof DateTime ) {
                return date_i18n( 'j F Y', $dt->getTimestamp() );
            }
        }

        return $value;
    };

    $featured_url = tenda21_get_event_feature_image_url( $event_id, 'medium_large' );

    $start_date_raw = get_post_meta( $event_id, 'event_start_date', true );
    $start_date     = $format_date( $start_date_raw );
    $start_time    = get_post_meta( $event_id, 'event_start_time', true );
    $end_date_raw  = get_post_meta( $event_id, 'event_end_date', true );
    $end_date      = $format_date( $end_date_raw );
    $end_time      = get_post_meta( $event_id, 'event_end_time', true );
    $location_type = get_post_meta( $event_id, 'event_location_type', true );
    $location      = get_post_meta( $event_id, 'event_location', true );
    $price_label   = get_post_meta( $event_id, 'event_price_label', true );
    $price         = get_post_meta( $event_id, 'event_price', true );
    $status        = get_post_meta( $event_id, 'event_booking_status', true );
    $excerpt       = get_post_meta( $event_id, 'event_excerpt', true );

    if ( ! $price_label ) {
        $price_label = __( 'Investment', 'tenda21' );
    }

    if ( ! $excerpt ) {
        $excerpt = get_post_field( 'post_excerpt', $event_id );
    }
    if ( ! $excerpt ) {
        $excerpt = get_post_field( 'post_content', $event_id );
    }
    $excerpt = $excerpt ? wp_trim_words( wp_strip_all_tags( $excerpt ), 26 ) : '';

    $booking_url = tenda21_get_event_booking_url( $event_id );

    $facilitators = get_field( 'event_facilitators', $event_id );
    $fac_links    = '';
    if ( $facilitators && is_array( $facilitators ) ) {
        foreach ( $facilitators as $facilitator ) {
            $fac_id = is_object( $facilitator ) ? $facilitator->ID : (int) $facilitator;
            if ( ! $fac_id ) {
                continue;
            }
            $fac_post = get_post( $fac_id );
            if ( ! $fac_post || $fac_post->post_status !== 'publish' ) {
                continue;
            }
            $fac_links .= '<a href="' . esc_url( get_permalink( $fac_id ) ) . '" class="inline-flex items-center border border-mist-400 px-2 py-0.5 text-[0.7rem] text-charcoal-700 hover:border-charcoal-700 transition-colors">'
                . esc_html( get_the_title( $fac_id ) )
                . '</a>';
        }
    }

    if ( ! $fac_links ) {
        $fac_links = '<span class="text-[0.65rem] font-sans uppercase tracking-[0.15em] text-charcoal-400">' . esc_html__( 'Facilitator TBA', 'tenda21' ) . '</span>';
    }

    $thumb_style = $featured_url ? ' style="background-image: url(' . esc_url( $featured_url ) . ')"' : '';

    ob_start();
    ?>
    <article class="bg-bone-50/90 border border-mist-300 px-4 py-4 md:px-6 md:py-5 shadow-[0_1px_0_rgba(42,41,38,0.04)]">
        <div class="grid grid-cols-[96px_1fr] md:grid-cols-[120px_1fr_148px_164px] gap-4 md:gap-x-6 items-start">
            <div class="aspect-square rounded-sm bg-mist-300 bg-cover bg-center shrink-0"<?php echo $thumb_style; ?>></div>
            <div class="min-w-0 space-y-2">
                <div class="flex flex-wrap items-baseline gap-x-4 gap-y-1">
                    <a href="<?php echo esc_url( $event_url ); ?>" class="font-serif text-xl md:text-2xl leading-tight text-charcoal-900 underline-offset-4 hover:underline"><?php echo esc_html( $event_name ); ?></a>
                    <?php if ( $location_type ) : ?>
                        <span class="inline-flex items-center gap-1.5 text-[0.65rem] font-sans uppercase tracking-[0.25em] text-charcoal-500">
                            <span class="h-px w-4 bg-charcoal-400"></span>
                            <span><?php echo esc_html( $location_type ); ?></span>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="flex flex-wrap items-center gap-x-3 gap-y-1.5">
                    <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500"><?php esc_html_e( 'Guided by', 'tenda21' ); ?></span>
                    <div class="flex flex-wrap gap-1.5" data-repeater="event_facilitators">
                        <?php echo $fac_links; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                </div>
                <?php if ( $excerpt ) : ?>
                    <p class="font-sans text-sm leading-relaxed text-charcoal-600" style="<?php echo esc_attr( $excerpt_clamp_style ); ?>"><?php echo esc_html( $excerpt ); ?></p>
                <?php endif; ?>
                <?php if ( $location ) : ?>
                    <span class="font-sans text-xs text-charcoal-500"><?php echo esc_html( $location ); ?></span>
                <?php endif; ?>
            </div>
            <div class="hidden md:flex flex-col gap-1.5 border-l border-mist-300 pl-5 self-stretch justify-center">
                <?php if ( $start_date ) : ?>
                    <div class="space-y-0.5">
                        <span class="font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500"><?php esc_html_e( 'Starts', 'tenda21' ); ?></span>
                        <p class="font-serif text-base leading-tight text-charcoal-900"><?php echo esc_html( $start_date ); ?></p>
                        <?php if ( $start_time ) : ?>
                            <p class="font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600"><?php echo esc_html( $start_time ); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="h-px w-full bg-mist-300 my-1.5"></div>
                <?php if ( $end_date || $end_time ) : ?>
                    <div class="space-y-0.5">
                        <span class="font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500"><?php esc_html_e( 'Ends', 'tenda21' ); ?></span>
                        <?php if ( $end_date ) : ?>
                            <p class="font-serif text-sm leading-tight text-charcoal-700"><?php echo esc_html( $end_date ); ?></p>
                        <?php endif; ?>
                        <?php if ( $end_time ) : ?>
                            <p class="font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600"><?php echo esc_html( $end_time ); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="hidden md:flex flex-col justify-between gap-4 border-l border-mist-300 pl-5 self-stretch">
                <div class="space-y-1.5">
                    <span class="font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500 block"><?php echo esc_html( $price_label ); ?></span>
                    <?php if ( $price ) : ?>
                        <span class="font-serif text-xl text-charcoal-900"><?php echo esc_html( $price ); ?></span>
                    <?php endif; ?>
                    <?php if ( $status ) : ?>
                        <div>
                            <span class="inline-flex items-center border border-charcoal-900/20 px-2.5 py-0.5 text-[0.6rem] font-sans uppercase tracking-[0.2em] text-charcoal-700"><?php echo esc_html( $status ); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if ( $booking_url ) : ?>
                    <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center justify-center bg-clay-500 text-bone-50 font-sans font-medium text-[0.65rem] uppercase tracking-[0.2em] px-5 py-2.5 transition-all duration-300 hover:bg-clay-600" target="_blank" rel="noopener">
                        <?php esc_html_e( 'Book Your Place', 'tenda21' ); ?>
                    </a>
                <?php else : ?>
                    <span class="inline-flex items-center justify-center bg-mist-200 text-charcoal-500 font-sans font-medium text-[0.65rem] uppercase tracking-[0.2em] px-5 py-2.5">
                        <?php esc_html_e( 'Booking Soon', 'tenda21' ); ?>
                    </span>
                <?php endif; ?>
            </div>
            <div class="col-span-2 md:hidden flex items-center justify-between gap-3 border-t border-mist-300 pt-3">
                <div class="space-y-0.5">
                    <?php if ( $start_date ) : ?>
                        <p class="font-serif text-sm text-charcoal-900"><?php echo esc_html( $start_date ); ?></p>
                    <?php endif; ?>
                    <?php if ( $start_time ) : ?>
                        <p class="font-sans text-[0.6rem] uppercase tracking-[0.2em] text-charcoal-500"><?php echo esc_html( $start_time ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="flex items-center gap-3">
                    <?php if ( $price ) : ?>
                        <span class="font-serif text-lg text-charcoal-900"><?php echo esc_html( $price ); ?></span>
                    <?php endif; ?>
                    <?php if ( $booking_url ) : ?>
                        <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center justify-center bg-clay-500 text-bone-50 font-sans font-medium text-[0.6rem] uppercase tracking-[0.2em] px-4 py-2 hover:bg-clay-600" target="_blank" rel="noopener"><?php esc_html_e( 'Book', 'tenda21' ); ?></a>
                    <?php else : ?>
                        <span class="inline-flex items-center justify-center bg-mist-200 text-charcoal-500 font-sans font-medium text-[0.6rem] uppercase tracking-[0.2em] px-4 py-2"><?php esc_html_e( 'Soon', 'tenda21' ); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </article>
    <?php
    return ob_get_clean();
}

/*
 * Make single Experience blocks consume live post data.
 * Mirrors the Facilitator pattern above.
 * Intercepts at render time so Pinegrow placeholder defaults are bypassed.
 */
add_filter( 'render_block', function( $block_content, $block ) {
    $block_name = $block['blockName'] ?? '';
    $target_blocks = array(
        'tenda21/experience-hero',
        'tenda21/experience-content',
        'tenda21/experience-cta',
        'tenda21/experience-facilitator',
        'tenda21/experience-back-nav',
        'tenda21/experience-upcoming-events',
    );

    if ( ! in_array( $block_name, $target_blocks, true ) ) {
        return $block_content;
    }

    if ( is_admin() ) {
        return $block_content;
    }

    if ( ! is_singular( 'experience' ) ) {
        return $block_content;
    }

    $post_id = get_the_ID();
    if ( ! $post_id ) {
        return $block_content;
    }

    switch ( $block_name ) {
        case 'tenda21/experience-hero':
            return tenda21_render_experience_hero_block( $post_id, $block );

        case 'tenda21/experience-content':
            return tenda21_render_experience_content_block( $post_id, $block );

        case 'tenda21/experience-cta':
            return tenda21_render_experience_cta_block( $post_id, $block );

        case 'tenda21/experience-facilitator':
            return tenda21_render_experience_facilitator_block( $post_id, $block );

        case 'tenda21/experience-back-nav':
            return tenda21_render_experience_back_nav_block( $post_id, $block );

        case 'tenda21/experience-upcoming-events':
            return tenda21_render_experience_events_block( $post_id, $block );
    }

    return $block_content;

}, 15, 2 );

function tenda21_render_experience_hero_block( $post_id, $block = null ) {
    $attrs = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $label_defaults = array(
        'back_link_label' => __( '← All Experiences', 'tenda21' ),
        'duration_label'  => __( 'Duration', 'tenda21' ),
        'format_label'    => __( 'Format', 'tenda21' ),
    );

    $labels = array();
    foreach ( $label_defaults as $key => $fallback ) {
        $attr_value     = isset( $attrs[ $key ] ) ? $attrs[ $key ] : null;
        $labels[ $key ] = ( $attr_value === null || $attr_value === '' ) ? $fallback : $attr_value;
    }

    $subtitle       = get_post_meta( $post_id, 'experience_subtitle', true );
    $intro          = get_field( 'experience_intro', $post_id );
    $duration_value = get_post_meta( $post_id, 'experience_duration_label', true );
    $format         = get_post_meta( $post_id, 'experience_format', true );

    $featured     = get_field( 'experience_featured', $post_id );
    if ( is_array( $featured ) ) {
        $featured_url = isset( $featured['url'] ) ? $featured['url'] : '';
    } elseif ( is_numeric( $featured ) && $featured ) {
        $featured_url = wp_get_attachment_image_url( (int) $featured, 'large' );
    } else {
        $featured_url = '';
    }

    $archive_url = get_post_type_archive_link( 'experience' );
    if ( ! $archive_url ) {
        $archive_url = home_url( '/' );
    }

    $bg_style           = $featured_url ? ' style="background-image: url(' . esc_url( $featured_url ) . ')"' : '';
    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'relative pt-32 pb-16 px-6 bg-bone-200' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-6xl mx-auto w-full">
            <a href="<?php echo esc_url( $archive_url ); ?>" class="inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-8 transition-colors"><?php echo esc_html( $labels['back_link_label'] ); ?></a>
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <div class="space-y-6">
                    <div class="space-y-3">
                        <h1 class="font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900"><?php echo esc_html( get_the_title( $post_id ) ); ?></h1>
                        <?php if ( $subtitle ) : ?>
                            <p class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700"><?php echo esc_html( $subtitle ); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php if ( $intro ) : ?>
                        <div class="font-sans font-light text-xl leading-[1.8] text-charcoal-700"><?php echo wp_kses_post( $intro ); ?></div>
                    <?php endif; ?>
                    <div class="flex items-start gap-10 pt-2 border-t border-mist-400">
                        <div class="pt-6">
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['duration_label'] ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800"><?php echo $duration_value ? esc_html( $duration_value ) : esc_html__( 'Flexible', 'tenda21' ); ?></span>
                        </div>
                        <div class="pt-6">
                            <span class="font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1"><?php echo esc_html( $labels['format_label'] ); ?></span>
                            <span class="font-sans text-sm text-charcoal-800"><?php echo $format ? esc_html( $format ) : esc_html__( 'Group &amp; Private', 'tenda21' ); ?></span>
                        </div>
                    </div>
                </div>
                <div class="aspect-[4/5] bg-mist-300 bg-cover bg-center sticky top-32"<?php echo $bg_style; ?>></div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_render_experience_back_nav_block( $post_id, $block = null ) {
    $archive_url = get_post_type_archive_link( 'experience' );
    if ( ! $archive_url ) {
        $archive_url = home_url( '/' );
    }

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-16 px-6 bg-bone-200' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-6xl mx-auto text-center">
            <a href="<?php echo esc_url( $archive_url ); ?>" class="inline-block font-sans text-sm text-charcoal-700 hover:text-charcoal-900 uppercase tracking-[0.1em] transition-colors"><?php esc_html_e( '← View All Experiences', 'tenda21' ); ?></a>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_render_experience_content_block( $post_id, $block = null ) {
    $attrs = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();

    $label_defaults = array(
        'expectations_label' => __( 'What to Expect', 'tenda21' ),
        'benefits_label'     => __( 'Benefits', 'tenda21' ),
        'audience_label'     => __( 'Who This Is For', 'tenda21' ),
    );

    $labels = array();
    foreach ( $label_defaults as $key => $fallback ) {
        $attr_value     = isset( $attrs[ $key ] ) ? $attrs[ $key ] : null;
        $labels[ $key ] = ( $attr_value === null || $attr_value === '' ) ? $fallback : $attr_value;
    }

    $what_to_expect = get_field( 'experience_what_to_expect', $post_id );
    $benefits       = get_field( 'experience_benefits', $post_id );
    $who_its_for    = get_field( 'experience_who_its_for', $post_id );

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-24 px-6 bg-mist-100' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-4xl mx-auto w-full space-y-16">
            <?php if ( $what_to_expect ) : ?>
                <div class="space-y-8">
                    <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"><?php echo esc_html( $labels['expectations_label'] ); ?></h2>
                    <div class="space-y-6"><?php echo wp_kses_post( $what_to_expect ); ?></div>
                </div>
            <?php endif; ?>
            <?php if ( $benefits ) : ?>
                <div class="border-t border-mist-400 pt-12 space-y-8">
                    <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"><?php echo esc_html( $labels['benefits_label'] ); ?></h2>
                    <div class="space-y-4"><?php echo wp_kses_post( $benefits ); ?></div>
                </div>
            <?php endif; ?>
            <?php if ( $who_its_for ) : ?>
                <div class="border-t border-mist-400 pt-12 space-y-8">
                    <h2 class="font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900"><?php echo esc_html( $labels['audience_label'] ); ?></h2>
                    <div class="space-y-6"><?php echo wp_kses_post( $who_its_for ); ?></div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_render_experience_cta_block( $post_id, $block = null ) {
    $booking_note = get_post_meta( $post_id, 'experience_booking_note', true );
    $cta_label    = get_post_meta( $post_id, 'experience_cta_label', true );
    $cta_url_raw  = get_post_meta( $post_id, 'experience_cta_url', true );

    if ( ! $cta_label ) {
        $cta_label = __( 'Reserve Your Place', 'tenda21' );
    }

    $cta_url = $cta_url_raw ? tenda21_maybe_add_scheme( $cta_url_raw ) : '';

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-24 px-6 bg-bone-100' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-3xl mx-auto text-center w-full space-y-8">
            <?php if ( $booking_note ) : ?>
                <p class="font-sans font-light text-base leading-[1.8] text-charcoal-600 max-w-[60ch] mx-auto"><?php echo esc_html( $booking_note ); ?></p>
            <?php endif; ?>
            <?php if ( $cta_url ) : ?>
                <a href="<?php echo esc_url( $cta_url ); ?>" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-sm uppercase tracking-[0.12em] px-12 py-5 transition-all duration-300 hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]"><?php echo esc_html( $cta_label ); ?></a>
            <?php else : ?>
                <a href="mailto:hello@tenda21.com" class="inline-block bg-clay-500 text-bone-50 font-sans font-medium text-sm uppercase tracking-[0.12em] px-12 py-5 transition-all duration-300 hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]"><?php echo esc_html( $cta_label ); ?></a>
            <?php endif; ?>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_render_experience_facilitator_block( $post_id, $block = null ) {
    /*
     * experience_facilitator is a relationship field that may hold one or more
     * linked Facilitator posts. get_field() returns an array of WP_Post objects
     * (or an empty value if nothing is linked).
     */
    $facilitators = get_field( 'experience_facilitator', $post_id );

    if ( empty( $facilitators ) || ! is_array( $facilitators ) ) {
        return '';
    }

    $attrs          = ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) ? $block['attrs'] : array();
    $heading_label  = isset( $attrs['heading_label'] ) && $attrs['heading_label'] !== '' ? $attrs['heading_label'] : __( 'Facilitated By', 'tenda21' );
    $link_label     = isset( $attrs['link_label'] ) && $attrs['link_label'] !== '' ? $attrs['link_label'] : __( 'View Full Profile →', 'tenda21' );

    $wrapper_attributes = tenda21_block_wrapper_attributes( $block, 'py-24 px-6 bg-mist-100' );

    ob_start();
    ?>
    <section <?php echo $wrapper_attributes; ?>>
        <div class="max-w-5xl mx-auto w-full">
            <h2 class="font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12"><?php echo esc_html( $heading_label ); ?></h2>
            <div class="space-y-16">
                <?php foreach ( $facilitators as $facilitator ) :
                    $fac_id    = is_object( $facilitator ) ? $facilitator->ID : (int) $facilitator;
                    $fac_post  = get_post( $fac_id );
                    if ( ! $fac_post || $fac_post->post_status !== 'publish' ) {
                        continue;
                    }

                    $fac_title     = get_the_title( $fac_id );
                    $fac_role      = get_post_meta( $fac_id, 'facilitator_role_label', true );
                    $fac_bio       = get_post_meta( $fac_id, 'facilitator_short_bio', true );
                    $fac_permalink = get_permalink( $fac_id );

                    $fac_featured = get_field( 'facilitator_featured', $fac_id );
                    if ( is_array( $fac_featured ) ) {
                        $fac_img_url = isset( $fac_featured['url'] ) ? $fac_featured['url'] : '';
                    } elseif ( is_numeric( $fac_featured ) && $fac_featured ) {
                        $fac_img_url = wp_get_attachment_image_url( (int) $fac_featured, 'large' );
                    } else {
                        $fac_img_url = '';
                    }

                    $fac_bg_style = $fac_img_url ? ' style="background-image: url(' . esc_url( $fac_img_url ) . ')"' : '';
                ?>
                <div class="grid md:grid-cols-4 gap-8 items-start">
                    <div class="md:col-span-1">
                        <div class="aspect-[3/4] bg-mist-300 bg-cover bg-center mb-4"<?php echo $fac_bg_style; ?>></div>
                    </div>
                    <div class="md:col-span-3 space-y-4">
                        <div>
                            <h3 class="font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 mb-2"><?php echo esc_html( $fac_title ); ?></h3>
                            <?php if ( $fac_role ) : ?>
                                <p class="font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700"><?php echo esc_html( $fac_role ); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php if ( $fac_bio ) : ?>
                            <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700"><?php echo esc_html( $fac_bio ); ?></p>
                        <?php endif; ?>
                        <?php if ( $fac_permalink ) : ?>
                            <a href="<?php echo esc_url( $fac_permalink ); ?>" class="inline-block font-sans text-sm text-forest-700 hover:text-forest-800 uppercase tracking-[0.1em] transition-colors"><?php echo esc_html( $link_label ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function tenda21_normalize_media_value_to_url( $value, $size = 'large' ) {
    if ( empty( $value ) ) {
        return '';
    }

    $size = $size ?: 'large';

    if ( is_array( $value ) ) {
        if ( isset( $value['sizes'][ $size ] ) && $value['sizes'][ $size ] ) {
            return $value['sizes'][ $size ];
        }
        if ( isset( $value[ $size ] ) && $value[ $size ] ) {
            return $value[ $size ];
        }
        if ( ! empty( $value['url'] ) ) {
            return $value['url'];
        }
        if ( ! empty( $value['ID'] ) ) {
            $attachment_url = wp_get_attachment_image_url( (int) $value['ID'], $size );
            if ( $attachment_url ) {
                return $attachment_url;
            }
        }
    }

    if ( is_numeric( $value ) ) {
        $attachment_url = wp_get_attachment_image_url( (int) $value, $size );
        if ( $attachment_url ) {
            return $attachment_url;
        }
    }

    if ( is_string( $value ) ) {
        return $value;
    }

    return '';
}

function tenda21_get_event_feature_image_url( $post_id, $size = 'large' ) {
    $post_id = (int) $post_id;
    if ( $post_id <= 0 ) {
        return '';
    }

    $size       = $size ?: 'large';
    $candidates = array();

    if ( function_exists( 'get_field' ) ) {
        $candidates[] = get_field( 'event_feature_image', $post_id );
        $candidates[] = get_field( 'event_featured', $post_id );
    }

    $candidates[] = get_post_meta( $post_id, 'event_feature_image', true );
    $candidates[] = get_post_meta( $post_id, 'event_featured', true );

    foreach ( $candidates as $value ) {
        $url = tenda21_normalize_media_value_to_url( $value, $size );
        if ( $url ) {
            return $url;
        }
    }

    $thumb_id = get_post_thumbnail_id( $post_id );
    if ( $thumb_id ) {
        $thumb_url = wp_get_attachment_image_url( $thumb_id, $size );
        if ( $thumb_url ) {
            return $thumb_url;
        }
    }

    $fallback = get_the_post_thumbnail_url( $post_id, $size );
    return $fallback ? $fallback : '';
}

function tenda21_format_event_date_value( $value ) {
    if ( empty( $value ) ) {
        return '';
    }

    $value   = trim( (string) $value );
    $formats = array( 'Ymd', 'Y-m-d' );

    foreach ( $formats as $format ) {
        $dt = DateTime::createFromFormat( $format, $value );
        if ( $dt instanceof DateTime ) {
            return date_i18n( 'j F Y', $dt->getTimestamp() );
        }
    }

    return $value;
}

function tenda21_format_event_time_value( $value ) {
    if ( $value === null ) {
        return '';
    }

    $value = trim( (string) $value );
    if ( $value === '' ) {
        return '';
    }

    if ( preg_match( '/^\d{1,2}:\d{2}$/', $value ) ) {
        return $value;
    }

    if ( preg_match( '/^\d{3,4}$/', $value ) ) {
        $value = str_pad( $value, 4, '0', STR_PAD_LEFT );
        $hours = substr( $value, 0, -2 );
        $mins  = substr( $value, -2 );
        return sprintf( '%02d:%02d', (int) $hours, (int) $mins );
    }

    $timestamp = strtotime( $value );
    if ( $timestamp ) {
        return date_i18n( 'H:i', $timestamp );
    }

    return $value;
}

function tenda21_normalize_meta_list( $value ) {
    if ( empty( $value ) ) {
        return array();
    }

    if ( is_array( $value ) ) {
        $items = $value;
    } else {
        $normalized = str_replace( array( "\r\n", "\r" ), "\n", (string) $value );
        $items      = preg_split( '/[\n,]+/', $normalized );
    }

    return array_filter( array_map( 'trim', (array) $items ) );
}

function tenda21_normalize_relationship_post_ids( $value ) {
    if ( empty( $value ) ) {
        return array();
    }

    if ( ! is_array( $value ) ) {
        $value = array( $value );
    }

    $ids = array();

    foreach ( $value as $item ) {
        if ( $item instanceof WP_Post ) {
            $item = $item->ID;
        } elseif ( is_object( $item ) && isset( $item->ID ) ) {
            $item = $item->ID;
        } elseif ( is_array( $item ) && isset( $item['ID'] ) ) {
            $item = $item['ID'];
        }

        if ( is_numeric( $item ) ) {
            $item = (int) $item;
        } elseif ( is_string( $item ) ) {
            $item = (int) trim( $item );
        } else {
            continue;
        }

        if ( $item > 0 ) {
            $ids[ $item ] = $item;
        }
    }

    return array_values( $ids );
}

function tenda21_maybe_add_scheme( $url ) {
    $url = trim( (string) $url );
    if ( ! $url ) {
        return '';
    }
    if ( preg_match( '#^https?://#i', $url ) ) {
        return $url;
    }
    return 'https://' . ltrim( $url, '/' );
}

function tenda21_normalize_link_url( $value ) {
    if ( empty( $value ) ) {
        return '';
    }

    if ( is_array( $value ) ) {
        $direct_url = '';
        if ( ! empty( $value['url'] ) ) {
            $direct_url = $value['url'];
        } elseif ( ! empty( $value['link'] ) && is_string( $value['link'] ) ) {
            $direct_url = $value['link'];
        }

        if ( $direct_url ) {
            return tenda21_maybe_add_scheme( $direct_url );
        }

        $linked_id = 0;
        if ( ! empty( $value['post_id'] ) ) {
            $linked_id = (int) $value['post_id'];
        } elseif ( ! empty( $value['ID'] ) ) {
            $linked_id = (int) $value['ID'];
        }

        if ( $linked_id > 0 ) {
            $linked_url = get_permalink( $linked_id );
            if ( $linked_url ) {
                return $linked_url;
            }
        }

        return '';
    }

    if ( is_numeric( $value ) ) {
        $linked_url = get_permalink( (int) $value );
        if ( $linked_url ) {
            return $linked_url;
        }
    }

    return tenda21_maybe_add_scheme( $value );
}

function tenda21_get_event_booking_url( $post_id ) {
    $post_id = (int) $post_id;
    if ( $post_id <= 0 ) {
        return '';
    }

    $value = '';

    if ( function_exists( 'get_field' ) ) {
        $value = get_field( 'event_booking_url', $post_id );
    }

    if ( $value === null || $value === '' ) {
        $value = get_post_meta( $post_id, 'event_booking_url', true );
    }

    if ( $value === null || $value === '' ) {
        if ( function_exists( 'get_field' ) ) {
            $value = get_field( 'event_booking', $post_id );
        }

        if ( $value === null || $value === '' ) {
            $value = get_post_meta( $post_id, 'event_booking', true );
        }
    }

    return tenda21_normalize_link_url( $value );
}

function tenda21_trim_url_for_display( $url ) {
    $display = preg_replace( '#^https?://#i', '', (string) $url );
    return rtrim( $display, '/' );
}

function tenda21_block_wrapper_attributes( $block, $base_class ) {
    $classes   = array( $base_class );
    $blockName = isset( $block['blockName'] ) ? (string) $block['blockName'] : '';
    if ( $blockName ) {
        $classes[] = 'wp-block-' . str_replace( '/', '-', $blockName );
    }

    $attrs = isset( $block['attrs'] ) && is_array( $block['attrs'] ) ? $block['attrs'] : array();
    if ( ! empty( $attrs['className'] ) ) {
        $classes[] = $attrs['className'];
    }
    if ( ! empty( $attrs['align'] ) ) {
        $classes[] = 'align' . preg_replace( '/[^a-z0-9-]+/i', '', $attrs['align'] );
    }

    $class_string = trim( implode( ' ', array_filter( array_map( 'trim', $classes ) ) ) );
    $class_parts  = $class_string ? preg_split( '/\s+/', $class_string ) : array();
    $class_parts  = array_filter( array_map( 'sanitize_html_class', (array) $class_parts ) );
    $class_parts  = array_unique( $class_parts );

    $attributes = array();
    if ( $class_parts ) {
        $attributes['class'] = implode( ' ', $class_parts );
    }

    if ( ! empty( $attrs['anchor'] ) ) {
        $attributes['id'] = sanitize_title( $attrs['anchor'] );
    }

    if ( empty( $attributes ) ) {
        return '';
    }

    $compiled = array();
    foreach ( $attributes as $key => $value ) {
        if ( $value === '' ) {
            continue;
        }
        $compiled[] = sprintf( '%s="%s"', $key, esc_attr( $value ) );
    }

    return implode( ' ', $compiled );
}
