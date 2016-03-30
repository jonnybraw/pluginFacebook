<?php
/**
* Plugin Name: Plugin Facebook
* Plugin URI: http//sp.senac.br
* Description: Plugin teste para aula
* Version: 1.0.0
* Author: JBP
* Author URI: http://sp.senac.br
* License: CC BY
*/





add_filter( 'login_errors', function( $error ) {
	global $errors;
	$err_codes = $errors->get_error_codes();

	// Invalid username.
	// Default: '<strong>ERROR</strong>: Invalid username. <a href="%s">Lost your password</a>?'
	if ( in_array( 'invalid_username', $err_codes ) or in_array( 'incorrect_password', $err_codes )) {

		$error = '<strong>ERROR</strong>: Nome de utilizador ou Senha incorretos.';
	}

	return $error;
} );






add_action('wp_head','ogfacebook_tags');

function ogfacebook_tags(){
	if (is_single()){
		include('"templates/og_tpl.php");
	};
};
?>
