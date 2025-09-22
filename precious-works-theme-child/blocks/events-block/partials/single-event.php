<?php include locate_template('components/variables/event-variables.php'); ?>


<div class="single-event">
    <div class="single-event-image-wrapper w-80">
        <?php echo wp_get_attachment_image($event_display_image_id, 'landscape', false, array('class'=>'w-100 h-auto ratio-4x3')) ?>
    </div>
    <div class="single-event-text-content">
        <div class="single-event-title-container">
            <h3 class="single-event-title h6"><?php echo $event_name_display ?></h3>
             <?php if ($event_date_formatted || $start_time || $end_time) { ?>
            <div class="d-flex justify-content-sm-between justify-content-center">
                <?php if ($event_date_formatted) { ?>
                    <p class="mb-0" aria-label="Event Date"><?php echo esc_html($event_date_formatted) ?></p>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <div class="single-event-button-container">
                <?php if ($event_link && $event_link['url']) { ?>
                <a class="pw-solid-button" href="<?php echo esc_url($event_link['url']) ?>" target="_blank" rel="noopener noreferrer">
                    <?php echo $event_link['title'] ? esc_html($event_link['title']) : 'Event Details' ?>
                </a>
        <?php } ?>
        </div>

        
    </div>


</div>