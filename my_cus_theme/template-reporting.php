<?php
/*
Template Name: Custom Template
*/

get_header();

 greet_reporting();

 
while(have_posts()): the_post(); 

	the_content();
endwhile;


get_footer();