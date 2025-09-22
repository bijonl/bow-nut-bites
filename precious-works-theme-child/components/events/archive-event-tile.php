<div class="single-event-tile d-flex">
    <?php if ($event_display_image_id) { ?>
    <div class="single-event-image-wrapper">
        <?php 
            echo wp_get_attachment_image(
                $event_display_image_id, 
                'square', 
                false, 
                array(
                    'alt' => $event_name_display ? esc_attr($event_name_display) : 'Event image'
                )
            ); 
        ?>
    </div>
    <?php } ?>

    <div class="post-meta-wrapper">
        <?php if ($event_name_display || $event_date_formatted || $start_time || $end_time) { ?>
        <div class="single-event-title-wrapper post-meta-content">
            <?php if ($event_name_display) { ?>
            <h4 class="mb-0 h5"><?php echo esc_html($event_name_display) ?></h4>
            <?php } ?>
            <?php if ($event_date_formatted || $start_time || $end_time) { ?>
            <div class="d-sm-flex w-sm-50 justify-content-between">
                <?php if ($event_date_formatted) { ?>
                <p class="mb-0" aria-label="Event Date"><?php echo esc_html($event_date_formatted) ?></p>
                <?php } ?>
                
                <?php if ($start_time || $end_time) { ?>
                <p class="mb-0" aria-label="Event Time">
                    <?php echo $start_time ? esc_html($start_time) : '' ?>
                    <?php echo ($start_time && $end_time) ? '-' : '' ?>
                    <?php echo $end_time ? esc_html($end_time) : '' ?>
                </p>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
        <?php if ($event_description) { ?>
        <div class="single-event-desc-wrapper post-meta-content">
            <p class="mb-0"><?php echo esc_html($event_description) ?></p>
        </div>
        <?php } ?>
        <?php if ($directions_url || ($event_link && $event_link['url'])) { ?>
        <div class="single-event-button-wrapper post-meta-content d-flex justify-content-between">
            <?php if ($directions_url) { ?>
            <a href="<?php echo esc_url($directions_url) ?>" class="pw-solid-button" aria-label="Get directions to event">
                <i class="fa-solid fa-location-pin" aria-hidden="true"></i>
                Get Directions
            </a>
            <?php } ?>

            <?php if ($event_link && $event_link['url']) { ?>
            <a class="pw-solid-button" href="<?php echo esc_url($event_link['url']) ?>" target="_blank" rel="noopener noreferrer">
                <?php echo $event_link['title'] ? esc_html($event_link['title']) : 'Event Details' ?>
            </a>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>
