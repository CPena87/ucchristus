<?php get_header('page');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingmid' ); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		

<main class="container principal">
	<div class="row">

		<?php /*
		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">

	      <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
	      <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>
		</div>
		*/ ?>

	</div>
</main>

<div class="container-fluid">
	<div class="row">

<?php /*

		<div class="col-md-12 intro-content col-esp">
 			<img style="max-width: 1280px; max-height: 320px;" src="<?php echo $service['imagen_destacada']?>" alt="<?php echo $post->post_title;?>">
 		</div>
*/ ?>

		<div class="col-md-12 intro-content col-esp" style="background-image:url(<?php echo get_field('imagen_destacada_interior', $post->ID);?>);background-size: 100%; min-height: 215px; background-repeat: no-repeat; background-position: center;">
		    <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
		    <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>
		</div>

	</div>
</div>

<div class="container-fluid">
	<div class="row">
		
		<?php if(is_page(4)){ ?>
		<div class="title-container">
			<h1 class="titular-page">&nbsp;</h1>
		</div>
		
		<style>
			h1.titular-page:after{display: none;}
			h1.titular-page{ border:none; margin: 0;}
		</style>
		
		<?php } elseif(is_page(250)){ ?>
			<div class="clear separator"></div>
		
		<?php }else{?>
		<div class="title-container">
			<h1 class="titular-page"><?php echo $post->post_title?></h1>
		</div>
		<?php }?>
		<div class="col-md-10 col-md-offset-1 hard-content">
        	<?php echo apply_filters('the_content' , $post->post_content)?>
        </div>

	</div>
</div>

<?php 	} // end while
} // end if
?>


<?php get_footer('insider')?>