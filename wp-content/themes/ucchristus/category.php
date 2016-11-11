<?php get_header() ?>	

<?php $var = get_queried_object();?>

<?php 	
	$bg = get_field('encabezado_categoria', 'category_'.$var->term_id);
	$bgsrc = wp_get_attachment_image_src( $bg, 'head');
?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bgsrc[0]?>); min-height:296px; background-attachment:fixed; background-size: cover;">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 pre-heading">
				<h2><?php echo $var->name;?></h2>
				<h3><?php echo $var->description;?></h3>
			</div>

		</div>
	</div>
</div>

<section class="content-convocatorias">
	<div class="container">
		<div class="row">

			<?php if(is_category('5')){?>
				<div class="test-cta col-md-12">
					<p>Te invitamos a realizar un breve test</p>
					<a href="<?php echo home_url();?>/">Hazte el Test</a>
				</div>
			<?php }else{?>
				<div class="clear separator"></div>
				<div class="clear separator"></div>
			<?php }?>

			<!-- Tab panes Inspírate -->
	        <div class="active" id="liderazgo">

				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12" id="newsContainer">
		           
		        			<?php foreach($posts as $articulo):?>

		                    <div class="col-md-4 col-sm-6 col-xs-12">
		                        <figure>
		                            <a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow">
		                                <?php echo get_the_post_thumbnail($articulo->ID , 'noticia' , array('class' => 'img-responsive'))?></a>
		                            <figcaption>
		                                <header>
		                                    <small><strong><?php $term = wp_get_post_terms($articulo->ID, 'category') ;echo $term[0]->name?></strong></small>
		                                </header>
		                                <h4><a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow"><?php echo $articulo->post_title?></a></h4>
		                                <p><?php echo $articulo->post_excerpt?> </p>
		                                <a class="last" href="<?php echo get_permalink($articulo->ID)?>">Ver artículo</a>
		                            </figcaption>
		                        </figure>
		                    </div>

				        	<?php endforeach?>


		                   	
					</div>
					<div class="more-loader">
						<span id="loadMore" onclick="moreContents()" data-offset="1"></span>
			        </div>

				</div>


			</div>
			<!-- Tab panes Inspírate Fin -->


		</div>
	</div>
</section>

<script>
	
        
</script>

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
function moreContents(){
	
	n = $('#loadMore').attr('data-offset');

	category = <?php echo $var->term_id ?>;
	offset = 6*n;
	
	

	$.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'moreContents' , category : category, offset : offset }),
		success: function(data){

			//console.log(data);
			if(data == 'nomore'){
				$('#loadMore').addClass('hidden');
				$('#newsContainer').append('<h2>No hay más artículos<h2>')
			}
			else {
				$('#newsContainer').append(data);
				$('#loadMore').attr('data-offset' , parseInt(n)+1);
			}

		}, 

		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}
	});
	
}
</script>

<?php get_footer()?>