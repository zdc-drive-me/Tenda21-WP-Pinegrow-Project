<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "schedule-section", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="schedule-header">
        <span><?php echo PG_Blocks_v4::getAttribute( $args, 'schedule_label' ) ?></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <span><?php echo PG_Blocks_v4::getAttribute( $args, 'schedule_meta' ) ?></span>
    </div>
    <div class="events-list">
        <!-- EVENT 1 -->
        <!-- EVENT 2 -->
        <article class="event-card">
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
                    <a href="experience-circle.html" class="event-title"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_title' ) ?></a>
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
                    <span class="date-tz"><?php _e( 'Streaming · GMT+1', 'tenda21' ); ?></span>
                </div>
                <div class="event-facilitators">
                    <span class="facilitators-label"><?php _e( 'Guided by', 'tenda21' ); ?></span>
                    <a href="facilitator-ana-silva.html" class="facilitator-tag"><?php _e( 'Ana Silva', 'tenda21' ); ?></a>
                </div>
                <p class="event-desc"><?php echo PG_Blocks_v4::getAttribute( $args, 'event_description' ) ?></p>
                <div class="event-meta-row">
                    <div>
                        <span class="meta-item-label"><?php _e( 'Location', 'tenda21' ); ?></span>
                        <span class="meta-item-value"><?php echo PG_Blocks_v4::getAttribute( $args, 'location' ) ?></span>
                    </div>
                    <div>
                        <span class="meta-item-label"><?php _e( 'Price Tier', 'tenda21' ); ?></span>
                        <span class="meta-item-value"><?php echo PG_Blocks_v4::getAttribute( $args, 'atmosphere' ) ?></span>
                    </div>
                </div>
            </div>
            <div class="event-booking">
                <div>
                    <span class="booking-label"><?php echo PG_Blocks_v4::getAttribute( $args, 'price_label' ) ?></span>
                    <p class="booking-price"><?php echo PG_Blocks_v4::getAttribute( $args, 'price' ) ?></p>
                    <span class="booking-status"><?php echo PG_Blocks_v4::getAttribute( $args, 'booking_status' ) ?></span>
                </div>
                <a href="mailto:hello@tenda21.com?subject=Fire%20Circle" class="booking-cta secondary"> <span><?php echo PG_Blocks_v4::getAttribute( $args, 'cta_text' ) ?></span> <span class="cta-arrow">→</span> </a>
            </div>
        </article>
    </div>
</section>