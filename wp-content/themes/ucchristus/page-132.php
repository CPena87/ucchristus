<?php get_header('login') ?>	

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 brand">
		    <a class="navbar-brand" href="<?php echo get_bloginfo('url')?>">
		        <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_header.png" alt="Logo UC Christus">
		    </a>
		</div>

		<div class="col-md-4 col-md-offset-4 col-sm-4 col-xs-offset-4 col-xs-12 login-form low-gray">
			<p>¡Ingreso exitoso!</p>
			<a class="return" href="<?php echo home_url();?>" rel="nofollow" title="Volver al sitio">Volver al sitio</a>
			<a class="go-dash" href="/" rel="nofollow" title="Ir a Panel de Control">Ir a Panel de Control</a>
		</div>
	</div>
</div>

<?php get_footer('login')?>