<?php

/*
Plugin Name: Testing
Description: test
Author: Nrideb 
Version: 1.0.0

*/
 
add_shortcode('test','get_data');
function get_data(){
    $data ="Test data";
	return $data;
}