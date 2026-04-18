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
        $args['post_type']  = 'event';
        $args['meta_query'] = array(
            array(
                'key'     => 'event_experience',
                'value'   => get_the_ID(),
                'compare' => '=',
            ),
        );
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
     * 2. facilitator-upcoming-events
     * Used on: single Facilitator page
     * Returns: future Events where event_facilitators contains the current Facilitator's ID
     * Uses LIKE because event_facilitators is a serialized relationship array field (SCF/ACF style)
     * Ordered: chronologically ascending by event_start_date
     */
    } elseif ( $block_id === 'facilitator-upcoming-events' ) {
        $args['post_type']  = 'event';
        $args['meta_query'] = array(
            array(
                'key'     => 'event_facilitators',
                'value'   => get_the_ID(),
                'compare' => 'LIKE',
            ),
        );
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
    }

    return $args;

}, 10, 2 );
