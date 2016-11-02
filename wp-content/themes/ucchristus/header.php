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
 
</head>

<body <?php body_class()?>>

<!-- Header Desplegable -->
<nav class="navbar navbar-default navbar-fixed-top deployment topbar">
  <div class="container">
    <div class="row">
      
      <div class="btn-group col-md-3 col-sm-3 col-xs-6">

        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <span class="fa fa-bars" aria-hidden="true"></span> Menú
        </button>

        <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav dropdown-menu blue' , 'theme_location' => 'primary' ) ); ?>

      </div>

      <div class="col-md-6 col-sm-6 col-xs-6 brand">
        <a class="navbar-brand" href="<?php echo get_bloginfo('url')?>">
          <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_header.png" alt="Logo UC Christus">
        </a>
      </div>
      
      <div id="login-user" class="col-md-3 col-sm-3 col-xs-12 ">
            
        <ul class="nav navbar-nav navbar-right">
          <li class="create"><a href="/">Crear cuenta</a></li>
          <li class="access"><a href="/">Ingresar</a></li>
        </ul>
            
      </div><!--/.nav-collapse -->

    </div>
  </div>
</nav>