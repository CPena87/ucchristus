<?php get_header() ?>	

<?php $bgid = get_post_thumbnail_id($post->ID);?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'head' ); ?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bg[0]?>); min-height:296px; background-attachment:fixed; background-size: cover;">
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

			<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">
				<ul class="col-sm-11 col-esp">
		            <li class="col-sm-3 col-sm-offset-2 liderazgo nav-category" onclick="activateContent('3', 'liderazgo-y-alto-desempeno')">Liderazgo y alto desempeño</li>
		            <li class="col-sm-3 energiza nav-category" onclick="activateContent('4', 'energiza-tu-vida')" style="padding-top: 20px;">Energiza tu vida</li>
		            <li class="col-sm-3 estres nav-category" onclick="activateContent('5', 'estres-y-burnout')" style="padding-top: 20px;">Estrés y Burnout</li>
	         	</ul>
			</div>

			<!-- Tab panes Inspírate -->
	        <div class="active" id="liderazgo">

				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12" id="newsContainer">

		               	<?php $articulos = get_posts(array('post_type' => 'post' , 'category' => '3' , 'numberposts' => 6));?>
		        			<?php foreach($articulos as $articulo):?>

		                    <div class="col-md-4 col-sm-6 col-xs-12">
		                        <figure>
		                            <a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow">
		                                <?php echo get_the_post_thumbnail($articulo->ID , 'noticia' , array('class' => 'img-responsive'))?></a>
		                            <figcaption>
		                                <header>
		                                    <small><strong><?php $term = wp_get_post_terms($articulo->ID, 'category') ;echo $term[0]->name?></strong></small>
		                                </header>
		                                <h4><a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow"><?php echo $articulo->post_title?></a></h4>
		                                <p><?php echo substr($articulo->post_content , 0, 92)?> </p>
		                                <a class="last" href="<?php echo get_permalink($articulo->ID)?>">Ver más</a>
		                            </figcaption>
		                        </figure>
		                    </div>

				        <?php endforeach?>
	
					</div>

				<div class="more-loader">
			               	<a id="urlCategory" href="<?php echo get_category_link('3'); ?>">Ver más</a>
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

			<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 events">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<span>Entérate de nuestros <br>próximos eventos.</span>
				<a href="">Ver Eventos</a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<img src="<?php echo get_bloginfo('template_directory');?>/images/calendar_icon.png" alt="Icono Calendario">
				</div>
			</div>	

		</div>
	</div>
</section>

<script>
function activateContent(cat, slug){
	
	category = cat;
	slug = slug;
	
	$.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'loadsContents' , category : category }),
		success: function(data){
			
			$('#newsContainer').html(data);
			$('#urlCategory').attr('href', '<?php echo get_bloginfo('url')?>/'+slug);
			if(slug == 'liderazgo-y-alto-desempeno'){
				$('.nav-category').removeClass("active");
				$('.liderazgo').addClass("active");
			}
			else if(slug == 'energiza-tu-vida'){
				$('.nav-category').removeClass("active");
				$('.energiza').addClass("active");
			}
			else{
				$('.nav-category').removeClass("active");
				$('.estres').addClass("active");
			};
		}, 
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}
	});
	
}
</script>

<?php get_footer()?>