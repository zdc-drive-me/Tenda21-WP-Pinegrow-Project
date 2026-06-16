<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "py-16 md:py-24 px-6 bg-bone-100 border-t border-b border-mist-300", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="max-w-6xl mx-auto w-full">
        <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between border-b border-mist-400 pb-4 mb-10 text-xs font-sans uppercase tracking-[0.2em] text-charcoal-500">
            <span><?php echo PG_Blocks_v4::getAttribute( $args, 'events_schedule_label' ) ?></span>
            <span><?php echo PG_Blocks_v4::getAttribute( $args, 'events_timezone_label' ) ?></span>
            <div class="flex items-center gap-2 normal-case tracking-[0.08em] text-[11px]">
                <a href="?" class="underline underline-offset-4"><?php _e( 'Upcoming', 'tenda21' ); ?></a>
                <span>·</span>
                <a href="?events_view=all" class="opacity-60 hover:opacity-100"><?php _e( 'All Events', 'tenda21' ); ?></a>
            </div>
        </div>
        <div class="space-y-6">
            <!-- Loop item placeholder: drop the tenda21/event-row block inside this loop when assembling the archive template. -->
            <div class="rounded border border-dashed border-mist-400/70 bg-bone-50/70 px-6 py-8 text-center font-sans text-sm text-charcoal-500/80">
                <?php _e( 'Add the', 'tenda21' ); ?> <strong><?php _e( 'Event Row', 'tenda21' ); ?></strong> 
                <?php _e( 'block inside the Events List loop.', 'tenda21' ); ?>
            </div>
        </div>
    </div>
</section>