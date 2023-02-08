<?php
/*
Plugin Name: WP Autocomplete Off
Plugin URI: https://github.com/varenga/wp-autocomplete-off
Description: Permite quitar el autocompletado del formulario de acceso a Wordpress
Version: 1.0.5.0
Author: Xose de la Paz
Author URI: https://pikselin.es
License: GPL
*/

/*
function wpse_159462_login_form() {
    echo <<<html
	<script>
	    document.getElementById( "user_login" ).autocomplete = "nope";
	    document.getElementById( "user_pass" ).autocomplete = "nope";
	    document.getElementById( "loginform" ).autocomplete = "off";
	</script>
	html;
}

add_action( 'login_form', 'wpse_159462_login_form' );
*/

function autocomplete_script() {
    wp_enqueue_script( 'js-autocomplete', plugin_dir_url( __FILE__ ) . 'js/functions.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'autocomplete_script');
add_action('admin_enqueue_scripts', 'autocomplete_script');
add_action('login_enqueue_scripts', 'autocomplete_script');

?>