<?php if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('head', 1920, 296, true );
add_image_size('noticia', 303, 255, true );
}
/* 
add_filter('image_size_names_choose', 'my_image_sizes');
	function my_image_sizes($sizes) {
	$addsizes = array(
		"col-6" => 'Media columna'
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
*/
add_post_type_support('page', 'excerpt');
;?>
<?php 
if(is_single()){
	add_filter( 'show_admin_bar', '__return_false' );
}
?>
<?php 
/* Add support for wp_nav_menu() */
function register_my_menu() {
	register_nav_menu( 'primary', 'Menú principal');
	register_nav_menu( 'secondary', 'Menú footer');
}
add_action( 'init', 'register_my_menu' );
?>
<?php 
function call_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://code.jquery.com/jquery-1.10.0.min.js');
    wp_register_script('core', get_template_directory_uri() . '/js/core.js');
    wp_register_script('bxslider', get_template_directory_uri() . '/js/bxslider.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('core');
    wp_enqueue_script('bxslider');
}    
 
add_action('wp_enqueue_scripts', 'call_scripts');
?>
<?php
//Post type register
add_action('init', 'convocatorias_register');
function convocatorias_register() {
    $args = array(
        'label' => 'Convocatorias',
        'singular_label' => 'Convocatoria',
        'public' => true,
        'menu_position' => 6, 
        '_builtin' => false,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'convocatoria'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('convocatorias', $args);
    flush_rewrite_rules();
}

//register_taxonomy('concurso', array('fondos'), array("hierarchical" => true, "label" => "Bases", "singular_label" => "Base", "rewrite" => 'hierarchical'));

?>
<?php 
function my_custom_login_logo() {
    echo '<style type="text/css">
		body{ background-color:#3a3a3a;}
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important;
		background-size: 120px;
		height: 120px;
		margin: 0px auto 0px;
		width: 120px;
	}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');?>
<?php 
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
?>
<?php 
function SuperAdmin() {
	echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">';
	//echo '<link href="'.get_bloginfo('template_directory').'/admin/bootstrap.css" rel="stylesheet">';
	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,800,400' rel='stylesheet' type='text/css'>";
	echo '<style type="text/css">
	body{ font-family: Open sans, helvetica neue, helvetica, arial , sans-serif}
	.wp-admin #adminmenu, .wp-admin #adminmenuback, .wp-admin #adminmenuwrap{ background-color:#672b6f !important}
	#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#2c3e50 !important}
	.wp-core-ui .button-primary{background-color:#0073aa !important;}
    #adminmenu li .awaiting-mod span, #adminmenu li span.update-plugins span {display: block; padding: 0 6px; background-color: #2c3e50; border-radius: 50%; }
	</style>';
}
add_action('admin_head', 'SuperAdmin');
?>
<?php 
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
?>
<?php 
//add_filter( 'jpeg_quality', create_function( '', 'return 75;' ) );
?>
<?php add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );?>
<?php 

add_action('wp_ajax_loadsArticles', 'loadsArticles');
add_action('wp_ajax_nopriv_loadsArticles', 'loadsArticles');
function loadsArticles(){
	
	$category = $_GET['category'];
		
	$articulos = get_posts(array('post_type' => 'post' , 'category' => $category , 'numberposts' => 5));
	?>
	
	<?php foreach($articulos as $articulo):?>
	
		<li class="col-md-4 col-sm-6 col-xs-6 col-esp">
			<figure>
			  <a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow">
			  	<?php echo get_the_post_thumbnail($articulo->ID , 'noticia')?>
			  </a>
			  <figcaption>
				<h4><a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow"><?php echo $articulo->post_title?></a></h4>
				<p><?php echo $articulo->post_excerpt?></p>
				<a class="last" href="<?php echo get_permalink($articulo->ID)?>">Leer más</a>
			  </figcaption>
			</figure>
		  </li>
	
	<?php endforeach;
		
	die;
}

?>
<?php 

add_action('wp_ajax_loadsContents', 'loadsContents');
add_action('wp_ajax_nopriv_loadsContents', 'loadsContents');
function loadsContents(){
    
    $category = $_GET['category'];
        
    $articulos = get_posts(array('post_type' => 'post' , 'category' => $category , 'numberposts' => 6));
    ?>
    
    <?php foreach($articulos as $articulo):?>
    
        <div class="col-md-4 col-sm-6 col-xs-6">
            <figure>
                <a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow">
                    <?php echo get_the_post_thumbnail($articulo->ID , 'noticia' , array('class' => 'img-responsive'))?></a>
                <figcaption>
                    <header>
                        <small><strong><?php $term = wp_get_post_terms($articulo->ID, 'category') ;echo $term[0]->name?></strong></small>
                    </header>
                    <h4><a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow"><?php echo $articulo->post_title?></a></h4>
                    <p><?php echo substr($articulo->post_content , 0, 92)?> </p>
                    <a class="last" href="<?php echo get_permalink($articulo->ID)?>">Ver artículo</a>
                </figcaption>
            </figure>
        </div>

        <a href="<?php echo home_url();?>/category-.php"></a>
    
    <?php endforeach;
        
    die;
}

?>