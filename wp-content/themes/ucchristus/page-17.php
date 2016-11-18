<?php get_header() ?>	

<?php $bgid = get_post_thumbnail_id($post->ID);?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'head' ); ?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bg[0]?>); min-height:296px; background-attachment:fixed; background-size: 100%;">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 pre-heading">
				<h2><?php echo $post->post_title; ?></h2>
				<p><?php echo $post->post_excerpt; ?></p>				
			</div>

		</div>
	</div>
</div>

<section class="event-area">
	<div class="container">
		<div class="row">

	        <?php $eventos = get_posts(array('post_type' => 'eventos', 'numberposts' => 3 )) ?>
	                          
			<div class=" col-md-12 col-sm-6 col-xs-12 ">

				<h3>Próximo Evento</h3>

				<div class="col-md-6 col-sm-6 col-xs-12 destacado">
					<div class="event-timing principal">
						<span class="date"><?php echo get_field('fecha_evento', $eventos[0]->ID) ?></span> <br/>
						<span class="hour"><?php echo get_field('hora_evento', $eventos[0]->ID) ?></span>
					</div>
					<!-- Titular y Bajada -->
					<span><?php echo get_field('tipo_actividad', $eventos[0]->ID)?></span>
					<h3>"<?php echo $eventos[0]->post_title ?>"</h3>
					<!-- <p><?php //echo get_field('bajada_evento', $eventos[0]->ID) ?></p> -->
					<!--  End Titular y Bajada -->
					<div class="clear miniseparator liner"></div>
					<!--  Lugar -->
					<span><strong>Lugar:</strong></span>
					<h3><?php echo get_field('lugar_evento', $eventos[0]->ID)?></h3>
					<!-- End Tipo Actividad y Lugar -->
					<a href="<?php echo get_permalink($eventos[0]->ID)?>" rel="nofollow" title="<?php echo $eventos[0]->post_title ?>">Mas información</a>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 col-esp">
					<a style="border: none; padding: 0;" href="<?php echo get_permalink($eventos[0]->ID)?>" rel="nofollow" title="<?php echo $eventos[0]->post_title ?>">
						<?php echo get_the_post_thumbnail($eventos[0]->ID , 'evdestacado' , array('class' => 'img-responsive'))?>
					</a>
				</div>

			</div>

			<div class="col-md-8 col-sm-8 col-xs-12 ">
				<?php unset($eventos[0]);?>
				<?php foreach($eventos as $evento):?>

				<div class="second col-xs-12 col-esp clear">
					<div class="col-md-8 col-sm-6 col-xs-12 col-esp clear">
						<div class="event-timing secondary">
							<span class="date"><?php echo get_field('fecha_evento', $evento->ID) ?></span><br/>
							<span class="hour"><?php echo get_field('hora_evento', $evento->ID) ?></span>
						</div>
						<!-- Titular y Bajada -->
						<span><?php echo get_field('tipo_actividad', $evento->ID)?></span>
						<h3>"<?php echo $evento->post_title ?>"</h3>
						<!-- <p><?php //echo get_field('bajada_evento', $evento->ID) ?></p> -->
						<!--  End Titular y Bajada -->
						<div class="clear miniseparator liner"></div>
						<!-- Tipo Actividad y Lugar -->
						<span><strong>Lugar:</strong></span>
						<h3><?php echo get_field('lugar_evento', $evento->ID)?></h3>
						<!-- End Tipo Actividad y Lugar -->
						<a href="<?php echo get_permalink($evento->ID)?>" rel="nofollow" title="<?php echo $evento->post_title ?>">Mas información</a>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 col-esp">
						<a style="border: none; padding: 0;" href="<?php echo get_permalink($evento->ID)?>" rel="nofollow" title="<?php echo $evento->post_title ?>">
							<?php echo get_the_post_thumbnail($evento->ID , 'evtlista' , array('class' => 'img-responsive'))?>
						</a>
					</div>
				</div>	
				<?php endforeach?>
			</div>

			<?php echo get_template_part('sidebar-evento'); ?>

			<div class="clear separator"></div>
			<div class="clear separator"></div>

		</div>
	</div>
</section>

<?php get_footer()?>