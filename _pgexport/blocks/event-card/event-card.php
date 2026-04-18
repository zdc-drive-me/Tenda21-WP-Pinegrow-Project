<article <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "event-card", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="event-feature-image">
        <?php if ( !PG_Blocks_v4::getImageSVG( $args, 'feature_image', false) && PG_Blocks_v4::getImageUrl( $args, 'feature_image', 'full' ) ) : ?>
            <img src="<?php echo PG_Blocks_v4::getImageUrl( $args, 'feature_image', 'full' ) ?>" alt="<?php echo PG_Blocks_v4::getImageField( $args, 'feature_image', 'alt', true); ?>" class="<?php echo (PG_Blocks_v4::getImageField( $args, 'feature_image', 'id', true) ? ('wp-image-' . PG_Blocks_v4::getImageField( $args, 'feature_image', 'id', true)) : '') ?>">
        <?php endif; ?>
        <?php if ( PG_Blocks_v4::getImageSVG( $args, 'feature_image', false) ) : ?>
            <?php echo PG_Blocks_v4::mergeInlineSVGAttributes( PG_Blocks_v4::getImageSVG( $args, 'feature_image' ), array() ) ?>
        <?php endif; ?>
        <span class="event-feature-caption"><?php echo PG_Blocks_v4::getAttribute( $args, 'image_caption' ) ?></span>
    </div>
    <div class="event-body">
        <div class="event-title-row">
            <a href="experience-breathwork.html" class="event-title"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_title' ) ?></a>
            <span class="event-type-badge"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_type' ) ?></span>
        </div>
        <div class="event-date-inline">
            <time>
                <?php echo PG_Blocks_v4::getAttribute( $args, 'date_start' ) ?>
            </time>
            <span class="date-sep">—</span>
            <time>
                <?php echo PG_Blocks_v4::getAttribute( $args, 'date_end' ) ?>
            </time>
            <span class="date-tz"><?php _e( 'GMT+1', 'tenda21' ); ?></span>
        </div>
        <div class="event-facilitators">
            <span class="facilitators-label"><?php _e( 'Guided by', 'tenda21' ); ?></span>
            <a href="facilitator-ana-silva.html" class="facilitator-tag"><?php _e( 'Ana Silva', 'tenda21' ); ?></a>
            <a href="facilitator-rafael.html" class="facilitator-tag"><?php _e( 'Rafael Santos', 'tenda21' ); ?></a>
        </div>
        <p class="event-desc"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_description' ) ?></p>
        <div class="event-meta-row">
            <div>
                <span class="meta-item-label"><?php _e( 'Location', 'tenda21' ); ?></span>
                <span class="meta-item-value"><?php echo PG_Blocks_v4::getAttribute( $args, 'location' ) ?></span>
            </div>
            <div>
                <span class="meta-item-label"><?php _e( 'Atmosphere', 'tenda21' ); ?></span>
                <span class="meta-item-value"><?php echo PG_Blocks_v4::getAttribute( $args, 'atmosphere' ) ?></span>
            </div>
        </div>
    </div>
    <div class="event-booking">
        <div>
            <span class="booking-label"><?php echo PG_Blocks_v4::getAttribute( $args, 'price_label' ) ?></span>
            <p class="booking-price"><?php echo PG_Blocks_v4::getAttribute( $args, 'price' ) ?></p>
            <span class="booking-status few"><?php echo PG_Blocks_v4::getAttribute( $args, 'booking_status' ) ?></span>
        </div>
        <a href="mailto:hello@tenda21.com?subject=Silent%20Immersion" class="booking-cta primary"> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'cta_text' ) ?></span> <span class="cta-arrow">→</span> </a>
    </div>
</article>