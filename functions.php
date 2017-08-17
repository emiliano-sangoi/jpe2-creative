<?php

/**
* functions.php
*
* 
*
*
*/





function jpe2_set_estilos(){

	//Boostrap styles	
	wp_enqueue_style("bootstrap-css-core", get_template_directory_uri() . "/node_modules/bootstrap/dist/css/bootstrap.min.css");

	//Font Awesome	
	wp_enqueue_style("font-awesome", get_template_directory_uri() . "/node_modules/font-awesome/css/font-awesome.min.css");

	//Plugin CSS:
	wp_enqueue_style("magnific-popup-css", get_template_directory_uri() . "/node_modules/magnific-popup/dist/magnific-popup.css");

	//Creative curstom css:
	wp_enqueue_style("creative-css", get_template_directory_uri() . "/css/creative/creative.min.css");
        
        //CSS Spaces:
        //wp_enqueue_style("badabam-css-spaces", get_template_directory_uri() . "/node_modules/css-spaces/dist/spaces.min.css");

	//Custom Style:
	wp_enqueue_style("jpe2-style", get_template_directory_uri() . "/style.css");

}
add_action('wp_head', 'jpe2_set_estilos');

function jpe2_set_scripts(){
	
	//JQuery:
	wp_enqueue_script("jquery", get_template_directory_uri() . "/node_modules/jquery/dist/jquery.min.js", array(), false, true);	
	
        //Popper:
	wp_enqueue_script("popper-js", get_template_directory_uri() . "/node_modules/popper.js/dist/popper.min.js", array('jquery'), false, true);
        
	//Bootstrap:
	wp_enqueue_script("bootstrap-js-core", get_template_directory_uri() . "/node_modules/bootstrap/dist/js/bootstrap.min.js", array('jquery', 'popper-js'), false, true);			

	// ---- Plugin JavaScript  ----
   
	//JQuery Easing:
	wp_enqueue_script("jquery-easing", get_template_directory_uri() . "/node_modules/jquery.easing/jquery.easing.min.js", false, true);

	//Scroll Reveal:
	wp_enqueue_script("scroll-reveal", get_template_directory_uri() . "/node_modules/scrollreveal/dist/scrollreveal.min.js", false, true);

	//Magnific Popup
	wp_enqueue_script("magnific-popup", get_template_directory_uri() . "/node_modules/magnific-popup/dist/jquery.magnific-popup.min.js", false, true);

	//Creative custom js:
	wp_enqueue_script("creative-js", get_template_directory_uri() . "/js/creative/creative.min.js", false, true);	



}
add_action('wp_footer', 'jpe2_set_scripts');
