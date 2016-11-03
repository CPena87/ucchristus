<?php get_header('login') ?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 brand">
		    <a class="navbar-brand" href="<?php echo get_bloginfo('url')?>">
		        <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_header.png" alt="Logo UC Christus">
		    </a>
		</div>

		<div class="col-md-4 col-md-offset-4 col-sm-4 col-xs-offset-4 col-xs-12 login-form low-gray">
			<?php
			$args = array(
			    'redirect' => home_url(), 
			    'id_username' => 'user',
			    'id_password' => 'pass',
			   ) 
			;?>
			<?php wp_login_form( $args ); ?>
		</div>
	</div>
</div>

<script>
	function logout_page() {
	  $login_page  = home_url( '/login/' );
	  wp_redirect( $login_page . "?login=false" );
	  exit;
	}
	add_action('wp_logout','logout_page');

	//Erroe Message
	$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;

	if ( $login === "failed" ) {
	  echo '<p class="login-msg"><strong>ERROR:</strong> Usuario y/o contraseña inválido.</p>';
	} elseif ( $login === "empty" ) {
	  echo '<p class="login-msg"><strong>ERROR:</strong> Usuario y/o contraseña vacios.</p>';
	} elseif ( $login === "false" ) {
	  echo '<p class="login-msg"><strong>ERROR:</strong> Te has desconectado.</p>';
	}

</script>

<?php get_footer('login')?>