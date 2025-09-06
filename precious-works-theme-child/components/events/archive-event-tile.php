<div class="single-event-tile">
    <a href="<?php echo $event_link['url']; ?>" 
    class="single-event-link" 
    aria-label="Read more about <?php echo esc_attr($title); ?>"
    target="_blank"
    >
        <div class="single-event-image-wrapper">
            <?php echo $event_display_image?>
        </div>
    </a>
    <div class="post-meta-wrapper">
        <div class="single-event-title-wrapper">
            <a href="<?php echo $permalink; ?>" class="single-event-link color-inherit" aria-label="Read more about <?php echo esc_attr($title); ?>">
                <h4 class="mb-0"><?php echo $event_name_display ?></h4>
            </a>
        </div>
        <div class="single-event-desc-wrapper">
            <h5 class="mb-0"><?php echo $event_description ?></h5>
        </div>
        <div class="single-event-date-wrapper">
            <p><?php echo $start_time ?></p>
            <p><?php echo $end_time ?></p>
            <?php echo $directions_url ?> 
        </div>
    </div>
</div>


