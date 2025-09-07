<?php include(locate_template('blocks/partials/global-block-variables.php')); 
$events = get_field('posts'); 
$today = date('Ymd'); // format: 20250906 for ACF "Date Picker" fields

if(empty($events)) {
    $posts_args = array(
        'post_type' => 'events', 
        'fields' => 'ids', 
        'posts_per_page' => 3, 
        'meta_query'     => array(
        array(
            'key'     => 'event_date', // ACF field name (no $ sign here)
            'value'   => $today,
            'compare' => '>=',
            'type'    => 'NUMERIC', // important for Ymd format
            ),
        ),
        'orderby' => 'meta_value_num',
        'order'   => 'ASC',
        
    ); 
    $events_query = new WP_Query($posts_args); 
    $events = $events_query->posts; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php if($has_title_area) { 
        include(locate_template('blocks/partials/title-area.php'));
    } ?>
    <?php if($events) { ?>
        <div class="events-container container">
            <div class="events-row row">
                <?php foreach($events as $event_id) { ?>
                    <div class="events-col col-sm-4">

                        <?php include __DIR__ . '/partials/single-event.php'; ?>
                    </div>
                <?php } ?>
            </div>
            <?php if($section_button) { ?>
                <div class="button-row row">
                    <div class="button-col col-sm-12 mx-auto text-center">
                        <?php include(locate_template('blocks/partials/button-area.php')); ?>
                    </div>
                </div>   
            <?php } ?>
         </div>
    <?php } ?>
  
</section>