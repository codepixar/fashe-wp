<?php 
/**
 * @Packge 	   : Fashe
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 *
 * Template Name: Template Builder Page
 */
 
 get_header();


	if( have_posts() ){
		while( have_posts() ){
			the_post();
			
			the_content();
		}
	}
 
 get_footer();
?>