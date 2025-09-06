<?php 
$event_title = get_the_title($event_id); 
$event_name = get_field('event_name', $event_id);
$event_name_display = !empty($event_name) ? $event_name : $event_title; 
$event_description = get_field('event_description', $event_id);
$event_link = get_field('event_link', $event_id);
$event_date = get_field('event_date', $event_id);
$start_time = get_field('start_time', $event_id);
$end_time = get_field('end_time', $event_id);
$event_location = get_field('event_location', $event_id);
?>