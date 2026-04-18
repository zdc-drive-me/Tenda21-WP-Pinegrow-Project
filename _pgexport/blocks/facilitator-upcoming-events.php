<?php get_header(); ?>

<!--
    Block root: facilitator-upcoming-events
    Displays upcoming Events connected to the current Facilitator.

    NOTE — custom.php helper required (lightest possible):
    The event_facilitators field is a relationship field (not a taxonomy).
    Pinegrow's native loop cannot query "Events where event_facilitators contains current post ID."
    A single function in custom.php is needed:

    add_filter('pg_query_args', function($args, $block_id) {
        if ($block_id === 'facilitator-upcoming-events') {
            $args['post_type'] = 'event';
            $args['meta_query'] = [['key' => 'event_facilitators', 'value' => get_the_ID(), 'compare' => 'LIKE']];
            $args['meta_key'] = 'event_start_date';
            $args['orderby'] = 'meta_value';
            $args['order'] = 'ASC';
            $args['date_query'] = [['after' => 'today', 'inclusive' => true]];
        }
        return $args;
    }, 10, 2);

    Maps Event SCF fields: event_experience, event_start_date, event_start_time,
    event_end_date, event_end_time, event_location_type, event_location,
    event_price, event_booking_status, event_booking.
-->        

<?php get_footer(); ?>