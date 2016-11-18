<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico?ver=3.8.1">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css?ver=3.8.1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
  Shadowbox.init();
});
</script>
 
</head>

<body <?php body_class()?>>

<!-- Header Desplegable -->
<nav class="navbar navbar-default navbar-fixed-top deployment topbar">
  <div class="container">
    <div class="row">
      
      <!-- Collapse Menu -->
      <div class="btn-group col-md-3 col-sm-2 col-xs-2">
        <button type="button" class="btn btn-default dropdown-toggle hidden-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <span class="fa fa-bars" aria-hidden="true"></span> Menú
        </button>

        <button type="button" class="btn btn-default dropdown-toggle hidden-lg hidden-md hidden-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <span class="fa fa-bars" aria-hidden="true"></span> 
        </button>

        <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav dropdown-menu blue' , 'theme_location' => 'primary' ) ); ?>
      </div>
      <!-- End Collapse Menu -->

      <!-- Logos desktop & tablet -->
      <div class="col-md-6 col-sm-8 brand hidden-xs" style="text-align: center;">
        <a class="navbar-brand" href="<?php echo get_bloginfo('url')?>">
          <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_header.png" alt="Logo UC Christus">
        </a>
        <a class="sponsor" href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo_medicina.png" alt="Logo Facultad de Medicina UC" /></a>
      </div>
      <!-- End Logos desktop & tablet -->

      <!-- Logos mobile -->
      <div class="col-xs-8 hidden-sm hidden-lg hidden-md carousel slide" id="carousel-example-generic" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <a class="navbar-brand" href="<?php echo get_bloginfo('url')?>">
              <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_header.png" alt="Logo UC Christus"></a>
          </div>
          <div class="item">
            <a class="sponsor" href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo_medicina.png" alt="Logo Facultad de Medicina UC" /></a>
          </div>
        </div>
      </div>
      <!-- End Logos mobile -->

      <!-- Login buttons desktop, tablet & mobile -->
      <div id="login-user" class="col-md-3 col-sm-2 col-xs-2">
        <?php
        if ( is_user_logged_in() ) {
            $current_user = wp_get_current_user();
            $urladmin = '<?php echo get_admin_url(); ?>';
            echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li class="access">';
            echo '<a href="$urladmin">Bienvenido ' . $current_user->user_firstname . ' ' . $current_user->user_lastname . '</a>';
            echo '</li>';
            echo '</ul>';
            
        } else { ?>
            <ul class="nav navbar-nav navbar-right">
            
              <?php /* <a href="#pt-register">Login</a> */?>
                <li class="create hidden-sm hidden-xs"><a href="#pt-login">Regístrate</a></li>
            
              <?php /* <li class="create"><a href="<?php echo home_url();?>/register/">Crear cuenta</a></li> */?>
              <li class="access"><a href="#pt-login">Ingresar <span class="hidden-lg hidden-md hidden-sm fa fa-user" aria-hidden="true"></span></a></li>
            </ul>
        <?php }?>
      </div>
      <!-- End Login buttons desktop, tablet & mobile -->
    
    </div>
  </div>
</nav>