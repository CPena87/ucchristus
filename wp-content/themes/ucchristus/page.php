<?php get_header();?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingmid' ); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		

<main class="container principal">
	<div class="row">

		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">
	      <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
	      <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>
		</div>

	</div>
</main>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-12 intro-content col-esp" style="background-image:url(<?php echo get_field('imagen_destacada_interior', $post->ID);?>);background-size: 100%; min-height: 215px; background-repeat: no-repeat; background-position: center;">
		    <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
		    <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>
		</div>

	</div>
</div>

<div class="container-fluid">
	<div class="row">
		
		<div class="title-container">
			<h1 class="titular-page"><?php echo $post->post_title?></h1>
		</div>
		<?php }?>
		<div class="col-md-10 col-md-offset-1 hard-content">
        	<?php echo apply_filters('the_content' , $post->post_content)?>
        </div>

	</div>
</div>


<?php get_footer()?>