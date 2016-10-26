<?php get_header() ?>	
<?php $var = get_queried_object();?>

<?php $bgid = get_post_thumbnail_id(7)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'head' ); ?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bg[0]?>); min-height:296px; background-attachment:fixed;">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 pre-heading">
				<?php $postt = get_post(7); ?>
				<h2><?php echo $postt->post_title; ?></h2>
				<p><?php echo $postt->post_excerpt; ?></p>				
			</div>

		</div>
	</div>
</div>

<section class="content-convocatorias">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">
				<ul class="nav nav-tabs col-sm-10 col-sm-offset-1 col-esp" role="tablist">
		            <li role="presentation" class="active col-xs-4" onclick="activateslider('liderazgo')"><a href="#liderazgo" aria-controls="liderazgo" role="tab" data-toggle="tab">Liderazgo y alto desempeño</a></li>
		            <li role="presentation" class="col-xs-4" onclick="activateslider('energiza')"><a href="#energiza" aria-controls="energiza" role="tab" data-toggle="tab">Energiza tu vida</a></li>
		            <li role="presentation" class="col-xs-4" onclick="activateslider('estres')"><a href="#estres" aria-controls="estres" role="tab" data-toggle="tab">Estrés y Burnout</a></li>
	         	</ul>
			</div>

			<!-- Tab panes Inspírate -->
	        <div class="tab-content">
	            <div role="tabpanel" class="tab-pane active" id="liderazgo">

					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
		                <?php 
		        			$post = get_posts(array('post_type' => 'post' , 'numberposts' => -1));
		        			foreach($posts as $post){?>

		                    <div class="col-md-4 col-sm-6 col-xs-6">
		                        <figure>
		                            <a href="<?php echo get_permalink($post->ID)?>" rel="nofollow">
		                                <?php echo get_the_post_thumbnail($post->ID , 'noticia' , array('class' => 'img-responsive'))?></a>
		                            <figcaption>
		                                <header>
		                                    <small>Categoría > <strong><?php $term = wp_get_post_terms($post->ID ); echo $term[0]->name?></strong></small>
		                                </header>
		                                <h4><a href="<?php echo get_permalink($post->ID)?>" rel="nofollow"><?php echo $post->post_title?></a></h4>
		                                <p><?php echo substr($post->post_excerpt , 0, 92)?> </p>
		                                <a class="last" href="<?php echo get_permalink($post->ID)?>">Ver artículo</a>
		                            </figcaption>
		                        </figure>
		                    </div>

				        <?php }?>

		                <div class="more-loader">
		                	<button></button>
		                </div>	
					</div>

				</div>

			</div>

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

<?php get_footer()?>