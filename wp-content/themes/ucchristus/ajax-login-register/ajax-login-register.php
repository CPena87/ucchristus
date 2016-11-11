<?php
/**
 * WordPress AJAX Login and Register without a Plugin
 * Author: Leo
 * URL: http://wpsites.org/?p=10835
 */

# 	
# 	USER REGISTRATION/LOGIN MODAL
# 	========================================================================================
#   Attach this function to the footer if the user isn't logged in
# 	========================================================================================
# 		

function pt_login_register_modal() {

		// only show the registration/login form to non-logged-in members
	if( ! is_user_logged_in() ){ 
?>
		<div class="modal fade pt-user-modal" id="pt-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" data-active-tab="">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php

							if( get_option('users_can_register') ){ ?>

								<!-- Register form -->
								<div class="pt-register">
							 
									<h3><?php printf( __('Regístrate en %s', 'ptheme'), get_bloginfo('name') ); ?></h3>
									<hr>

									<form id="pt_registration_form" action="<?php echo home_url( '/' ); ?>" method="POST">

										<div class="form-field">
											<label><?php _e('Usuario', 'ptheme'); ?></label>
											<input class="form-control input-lg required" name="pt_user_login" type="text"/>
										</div>
										<div class="form-field">
											<label for="pt_user_email"><?php _e('Email', 'ptheme'); ?></label>
											<input class="form-control input-lg required" name="pt_user_email" id="pt_user_email" type="email"/>
										</div>

										<div class="form-field">
											<input type="hidden" name="action" value="pt_register_member"/>
											<button class="btn btn-theme btn-lg" data-loading-text="<?php _e('Cargando...', 'ptheme') ?>" type="submit"><?php _e('Enviar', 'ptheme'); ?></button>
										</div>
										<?php wp_nonce_field( 'ajax-login-nonce', 'register-security' ); ?>
									</form>
									<div class="pt-errors"></div>
								</div>

								<!-- Login form -->
								<div class="pt-login">
							 
									<h3><?php printf( __('Ingresa a %s', 'ptheme'), get_bloginfo('name') ); ?></h3>
									<hr>
							 
									<form id="pt_login_form" action="<?php echo home_url( '/' ); ?>" method="post">

										<div class="form-field">
											<label><?php _e('Usuario', 'ptheme') ?></label>
											<input class="form-control input-lg required" name="pt_user_login" type="text"/>
										</div>
										<div class="form-field">
											<label for="pt_user_pass"><?php _e('Contraseña', 'ptheme')?></label>
											<input class="form-control input-lg required" name="pt_user_pass" id="pt_user_pass" type="password"/>
										</div>
										<div class="form-field">
											<input type="hidden" name="action" value="pt_login_member"/>
											<button class="btn btn-theme btn-lg" data-loading-text="<?php _e('Cargando...', 'ptheme') ?>" type="submit"><?php _e('Ingresar', 'ptheme'); ?></button> <a class="alignright" href="#pt-reset-password"><?php _e('¿Olvido su contraseña?', 'ptheme') ?></a>
										</div>
										<?php wp_nonce_field( 'ajax-login-nonce', 'login-security' ); ?>
									</form>
									<div class="pt-errors"></div>
								</div>

								<!-- Lost Password form -->
								<div class="pt-reset-password">
							 
									<h3><?php _e('Cambiar Contraseña', 'ptheme'); ?></h3>
                                    <p>
										Ingresa tu usuario o e-mail usado en tu perfíl. La nueva contraseña sera enviada a tu e-mail.
                                    </p>
									<hr>
							 
									<form id="pt_reset_password_form" action="<?php echo home_url( '/' ); ?>" method="post">
										<div class="form-field">
											<label for="pt_user_or_email"><?php _e('E-mail o Usuario', 'ptheme') ?></label>
											<input class="form-control input-lg required" name="pt_user_or_email" id="pt_user_or_email" type="text"/>
										</div>
										<div class="form-field">
											<input type="hidden" name="action" value="pt_reset_password"/>
											<button class="btn btn-theme btn-lg" data-loading-text="<?php _e('Cargando...', 'ptheme') ?>" type="submit"><?php _e('Cambiar contraseña', 'ptheme'); ?></button>
										</div>
										<?php wp_nonce_field( 'ajax-login-nonce', 'password-security' ); ?>
									</form>
									<div class="pt-errors"></div>
								</div>

								<div class="pt-loading">
									<p><i class="fa fa-refresh fa-spin"></i><br><?php _e('Cargando...', 'ptheme') ?></p>
								</div><?php

							} else {
								echo '<h3>'.__('Inicio de sesión finalizado', 'ptheme').'</h3>';
							} ?>
					</div>
					<div class="modal-footer">
							<span class="pt-register-footer"><?php _e('¿No tienes una cuenta?', 'ptheme'); ?> <a href="#pt-register"><?php _e('Regístrate', 'ptheme'); ?></a></span>
							<span class="pt-login-footer"><?php _e('¿Tienes una cuenta?', 'ptheme'); ?> <a href="#pt-login"><?php _e('Ingresa', 'ptheme'); ?></a></span>
					</div>				
				</div>
			</div>
		</div>
<?php
	}
}
add_action('wp_footer', 'pt_login_register_modal');




# 	
# 	AJAX FUNCTION
# 	========================================================================================
#   These function handle the submitted data from the login/register modal forms
# 	========================================================================================
# 		

// LOGIN
function pt_login_member(){

  		// Get variables
		$user_login		= $_POST['pt_user_login'];	
		$user_pass		= $_POST['pt_user_pass'];


		// Check CSRF token
		if( !check_ajax_referer( 'ajax-login-nonce', 'login-security', false) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Su sesión ha expirado, por favor recargue e intentelo de nuevo', 'ptheme').'</div>'));
		}
	 	
	 	// Check if input variables are empty
	 	elseif( empty($user_login) || empty($user_pass) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Por favor ingrese llene todos los campos', 'ptheme').'</div>'));
	 	} else { // Now we can insert this account

	 		$user = wp_signon( array('user_login' => $user_login, 'user_password' => $user_pass), false );

		    if( is_wp_error($user) ){
				echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.$user->get_error_message().'</div>'));
			} else{
				echo json_encode(array('error' => false, 'message'=> '<div class="alert alert-success">'.__('Ingreso exitoso, recargando página...', 'ptheme').'</div>'));
			}
	 	}

	 	die();
}
add_action('wp_ajax_nopriv_pt_login_member', 'pt_login_member');



// REGISTER
function pt_register_member(){

  		// Get variables
		$user_login	= $_POST['pt_user_login'];	
		$user_email	= $_POST['pt_user_email'];
		
		// Check CSRF token
		if( !check_ajax_referer( 'ajax-login-nonce', 'register-security', false) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Su sesión ha expirado, por favor recargue e intentelo de nuevo', 'ptheme').'</div>'));
			die();
		}
	 	
	 	// Check if input variables are empty
	 	elseif( empty($user_login) || empty($user_email) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Por favor ingrese llene todos los campos', 'ptheme').'</div>'));
			die();
	 	}
		
		$errors = register_new_user($user_login, $user_email);	
		
		if( is_wp_error($errors) ){

			$registration_error_messages = $errors->errors;

			$display_errors = '<div class="alert alert-danger">';
			
				foreach($registration_error_messages as $error){
					$display_errors .= '<p>'.$error[0].'</p>';
				}

			$display_errors .= '</div>';

			echo json_encode(array('error' => true, 'message' => $display_errors));

		} else {
			echo json_encode(array('error' => false, 'message' => '<div class="alert alert-success">'.__( 'Registro completo. Revise su e-mail.', 'ptheme').'</p>'));
		}
	 

	 	die();
}
add_action('wp_ajax_nopriv_pt_register_member', 'pt_register_member');


// RESET PASSWORD
function pt_reset_password(){

		
  		// Get variables
		$username_or_email = $_POST['pt_user_or_email'];

		// Check CSRF token
		if( !check_ajax_referer( 'ajax-login-nonce', 'password-security', false) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Su sesión ha expirado, por favor recargue e intentelo de nuevo', 'ptheme').'</div>'));
		}		

	 	// Check if input variables are empty
	 	elseif( empty($username_or_email) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Por favor ingrese llene todos los campos', 'ptheme').'</div>'));
	 	} else {

			$username = is_email($username_or_email) ? sanitize_email($username_or_email) : sanitize_user($username_or_email);

			$user_forgotten = pt_lostPassword_retrieve($username);
			
			if( is_wp_error($user_forgotten) ){
			
				$lostpass_error_messages = $user_forgotten->errors;

				$display_errors = '<div class="alert alert-warning">';
				foreach($lostpass_error_messages as $error){
					$display_errors .= '<p>'.$error[0].'</p>';
				}
				$display_errors .= '</div>';
				
				echo json_encode(array('error' => true, 'message' => $display_errors));
			}else{
				echo json_encode(array('error' => false, 'message' => '<p class="alert alert-success">'.__('Contraseña cambiada. Revise su e-mail.', 'ptheme').'</p>'));
			}
	 	}

	 	die();
}	
add_action('wp_ajax_nopriv_pt_reset_password', 'pt_reset_password');


function pt_lostPassword_retrieve( $user_data ) {
		
		global $wpdb, $current_site, $wp_hasher;

		$errors = new WP_Error();

		if( empty($user_data) ){
			$errors->add( 'empty_username', __( 'Por favor ingrese su e-mail o nombre de usuario.', 'ptheme' ) );
		} elseif( strpos($user_data, '@') ){
			$user_data = get_user_by( 'email', trim( $user_data ) );
			if( empty($user_data)){
				$errors->add( 'invalid_email', __( 'No existe usuario registrado con este correo.', 'ptheme'  ) );
			}
		} else {
			$login = trim( $user_data );
			$user_data = get_user_by('login', $login);
		}

		if( $errors->get_error_code() ){
			return $errors;
		}

		if( !$user_data ){
			$errors->add('invalidcombo', __('Usuario o e-mail inválido.', 'ptheme'));
			return $errors;
		}

		$user_login = $user_data->user_login;
		$user_email = $user_data->user_email;

		do_action('retrieve_password', $user_login);

		$allow = apply_filters('allow_password_reset', true, $user_data->ID);

		if( !$allow ){
			return new WP_Error( 'no_password_reset', __( 'Contraseña cambiada para este usuario', 'ptheme' ) );
		} elseif ( is_wp_error($allow) ){
			return $allow;
		}

		$key = wp_generate_password(20, false);

		do_action('retrieve_password_key', $user_login, $key);

		if(empty($wp_hasher)){
			require_once ABSPATH.'wp-includes/class-phpass.php';
			$wp_hasher = new PasswordHash(8, true);
		}

		$hashed = $wp_hasher->HashPassword($key);

		$wpdb->update($wpdb->users, array('user_activation_key' => $hashed), array('user_login' => $user_login));
		
		$message = __('Someone requested that the password be reset for the following account:', 'ptheme' ) . "\r\n\r\n";
		$message .= network_home_url( '/' ) . "\r\n\r\n";
		$message .= sprintf( __( 'Username: %s', 'ptheme' ), $user_login ) . "\r\n\r\n";
		$message .= __('If this was a mistake, just ignore this email and nothing will happen.', 'ptheme' ) . "\r\n\r\n";
		$message .= __('To reset your password, visit the following address:', 'ptheme' ) . "\r\n\r\n";
		$message .= '<' . network_site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . ">\r\n\r\n";
		
		if ( is_multisite() ) {
			$blogname = $GLOBALS['current_site']->site_name;
		} else {
			$blogname = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
		}

		$title   = sprintf( __( '[%s] Password Reset', 'ptheme' ), $blogname );
		$title   = apply_filters( 'retrieve_password_title', $title );
		$message = apply_filters( 'retrieve_password_message', $message, $key );

		if ( $message && ! wp_mail( $user_email, $title, $message ) ) {
			$errors->add( 'noemail', __( 'The e-mail could not be sent.<br />Possible reason: your host may have disabled the mail() function.', 'ptheme' ) );

			return $errors;

			wp_die();
		}

		return true;
}

function ajax_login_scripts() {

	wp_enqueue_style( 'user-login', get_template_directory_uri() . '/ajax-login-register/user-login.css', array(), null );

	//wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/ajax-login-register/bootstrap.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'ajax-login-register-script', get_template_directory_uri() . '/ajax-login-register/user-login.js', array( 'jquery' ), null, true );

	wp_localize_script('ajax-login-register-script', 'ptajax', array( 
			    	'ajaxurl' => admin_url( 'admin-ajax.php' ),
			    ));
}
add_action( 'wp_enqueue_scripts', 'ajax_login_scripts' );

/**
 * Automatically add a Login link to Primary Menu
 */
/*add_filter( 'wp_nav_menu_items', 'pt_login_link_to_menu', 10, 2 );
function pt_login_link_to_menu ( $items, $args ) {
    if( ! is_user_logged_in() && $args->theme_location == apply_filters('login_menu_location', 'primary') ) {
        $items .= '<li class="menu-item login-link"><a href="#pt-login">'.__( 'Login/Register', 'ptheme' ).'</a></li>';
    }
    return $items;
}*/