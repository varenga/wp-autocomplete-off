<?php
/*
Plugin Name: WP Autocomplete Off
Plugin URI: https://pikselin.es
Description: Permite quitar el autocompletado del formulario de acceso a Wordpress
Version: 1.0.1
Author: Xose de la Paz
Author URI: https://pikselin.es
License: GPL
*/

function wpse_159462_login_form() {
    echo <<<html
<script>
    document.getElementById( "user_login" ).autocomplete = "off";
    document.getElementById( "user_pass" ).autocomplete = "off";
</script>
html;
}

add_action( 'login_form', 'wpse_159462_login_form' );
?>