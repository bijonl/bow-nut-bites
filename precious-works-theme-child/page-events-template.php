<?php /**
 * Template Name: Top Level Events
*/  

$event_args = array(
    'post_type' => 'events', 
    'posts_per_page' => -1, 
    'post_status' => 'publish', 
    'fields' => 'ids', 
); 

$events = new WP_Query($event_args); 
$event_title = get_the_title(); 
$event_intro = get_field('event_page_intro');
$events_per_row = 2;  



?>

<?php echo get_header(); ?>
    <section class="event-archive-hero-section background-primary" id="event-archive-hero">
        <div class="event-archive-container container">
          <div class="event-archive-row row align-items-center">
            <div class="event-archive-col col">
                <h1 class="mb-0"><?php echo $event_title ?></h1>
                <p class="mb-0"><?php echo $event_intro ?></p>
            </div>
          </div>
        </div>
    </section>

    <section class="event-archive-content-section" id="event-content-section">
        <div class="event-posts-container container">
          <div class="event-posts-row row">
           <?php if($events->have_posts()) {
                    while($events->have_posts()) { 
                        $events->the_post(); 
                        $event_id = get_the_id(); 
                        include locate_template('components/variables/event-variables.php'); ?>
                        <div class="event-posts-col col-12">
                            <?php include locate_template('components/events/archive-event-tile.php'); ?>
                        </div>
                <?php
                    }
                } ?>
          </div>
        </div>
    </section>



<?php echo get_footer() ?>
