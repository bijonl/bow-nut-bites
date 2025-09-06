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
$event_intro = get_field('blog_page_intro');
$events_per_row = 2;  



?>

<?php echo get_header(); ?>
    <section class="blog-archive-hero-section background-primary" id="blog-archive-hero">
        <div class="blog-archive-container container">
          <div class="blog-archive-row row align-items-center">
            <div class="blog-archive-col col">
                <h1 class="mb-0"><?php echo $event_title ?></h1>
                <p class="mb-0"><?php echo $event_intro ?></p>
            </div>
          </div>
        </div>
    </section>

    <section class="blog-archive-content-section" id="blog-content-section">
        <div class="blog-posts-container container">
          <div class="blog-posts-row row row-cols-<?php echo $events_per_row ?>">
           <?php if($events->have_posts()) {
                    while($events->have_posts()) { 
                        $events->the_post(); 
                        $event_id = get_the_id(); 
                        include locate_template('components/variables/event-variables.php'); ?>
                        <div class="blog-posts-col col">
                            <?php include locate_template('components/blog/archive-blog-tile.php'); ?>
                        </div>
                <?php
                    }
                } ?>
          </div>
        </div>
    </section>



<?php echo get_footer() ?>
