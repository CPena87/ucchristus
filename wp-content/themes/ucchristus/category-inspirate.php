<?php get_header() ?>	

<?php $bgid = get_post_thumbnail_id($post->ID);?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'head' ); ?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bg[0]?>); min-height:296px; background-attachment:fixed;">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 pre-heading">
				<h2><?php echo $post->post_title; ?></h2>
				<p><?php echo $post->post_excerpt; ?></p>				
			</div>

		</div>
	</div>
</div>

<section class="content-convocatorias">
	<div class="container">
		<div class="row">

			<!-- Tab panes Inspírate -->
	        <div class="active" id="liderazgo">

				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12" id="newsContainer">

		               	<?php $articulos = get_posts(array('post_type' => 'post' , 'category' => '3' , 'numberposts' => 6));?>
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

		                   	<div class="more-loader">
			                	<button>
			                		<?php echo get_post_category('');; ?>
			                	</button>
			                </div>

				        <?php endforeach?>

	
					</div>

				</div>


			</div>
			<!-- Tab panes Inspírate Fin -->


		</div>
	</div>
</section>

<section class="half-gray cta-events">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 events">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<span>Entérate de nuestros <br>próximos eventos.</span>
				<a href="">Ver Eventos</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<img src="<?php echo get_bloginfo('template_directory');?>/images/calendar_icon.png" alt="Icono Calendario">
				</div>
			</div>	

		</div>
	</div>
</section>

<script>
	function activateContent(cat){
	
	category = cat;
	
	$.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'loadsContents' , category : category }),
		success: function(data){
			
			console.log(category);
			
			$('#newsContainer').html(data);
			
		}, 
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}
	});
	
}

	function moreContent(content){

		onclick = content ;

		$.ajax(
			)
}

</script>

<?php get_footer()?>