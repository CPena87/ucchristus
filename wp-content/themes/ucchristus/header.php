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
<link href='https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,700,700i|Alegreya+Sans+SC:300,400,500|Poppins:700,600,300|Alegreya+Sans:300,300i,400,700,700i' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">


<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
// jQuery(window).load(function() {
// 	jQuery("#loader-wrapper").fadeOut("slow");
// 	setTimeout(function(){
// 		// Hide the address bar!
// 		window.scrollTo(0, 1);
// 	}, 0);
// });

// var he = $( window ).height();
// jQuery( document ).ready(function() {
// 	jQuery('.home #head').css('height' , he);
// 	//jQuery('main').css('margin-top' , he);
// });
jQuery(window).load(function() {
  jQuery("#loader-wrapper").fadeOut("slow");
});

// var he = $( window ).height();
// jQuery( document ).ready(function() {
//   jQuery('.home #head').css('height' , he);
//   //jQuery('main').css('margin-top' , he);
// });

</script>

<script>/*
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '733089463498140',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   
/*   
<?php $im = get_post_thumbnail_id('4');?>
<?php $ima = wp_get_attachment_image_src($im , 'full');?>

var picture = '<?php echo $ima[0]?>' ;

function FbookShare(){
	FB.ui({
		 method: 'feed',
		 href: '<?php echo bloginfo('url')?>',
		 picture : picture,
		 name : 'CorridaCuprumTeletón.cl, La Teletón #LaHacemosTodos',
		 description: 'Corre tu también, necesitamos 17 millones de corazones #CuprumAFP #Teleton', 
		 }, function(response){
			 if (response && !response.error_code) {
			  jQuery('#fb-root').removeClass('toggled');
			  window.location.replace("<?php echo get_page_link(24)?>?sm=<?php echo $post->ID?>");
			} else {
			  jQuery('#fb-root').removeClass('toggled');
			}
		});
} */
   
</script>
<script>
 /*  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47467115-8', 'auto');
  ga('send', 'pageview');
 */
</script>

<?php //$im = get_post_thumbnail_id('15');?>
<?php //$ima = wp_get_attachment_image_src($im , 'full');?>

<?php /* 
<meta property="og:title" content="Guantera de la Suerte"/>
<meta property="og:image" content="<?php echo $ima[0]?>"/>
<meta property="og:type" content="game"/>
<meta property="og:site_name" content="Guanteradelasuerte.cl"/>
<meta property="og:description" content="Juega y gana un chaleco reflectante en la Guantera de la Suerte" />
 */?>
 
</head>

<body <?php body_class()?> id="target">

<div id="fb-root"></div>

<div id="loader-wrapper">
	<img src="<?php echo get_bloginfo('template_directory')?>/images/logo_white.png" width="100" alt="">
</div>

<?php if(!is_home()){?>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="megacontainer">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/logo_blue.png" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse in" aria-expanded="true">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php }?>