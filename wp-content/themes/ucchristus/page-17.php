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

	        <?php $eventos = get_posts(array('post_type' => 'eventos', 'numberposts' => 3 , 'post__not_in')) ?>
	        <?php $counteventos = 0?>
	        <?php foreach($eventos as $evento):?>
	        <?php $counteventos++?>
	                    
	        <?php if($counteventos == 1)
	            {
	                $eventsize = 'evdestacado';
	                $eventclass = 'destacado col-md-12 col-sm-6 col-xs-12 col-esp';
	                $eventinside = 'col-md-6 col-sm-6 col-xs-12';
	                $eventcolimg = 'col-md-6 col-sm-6 col-xs-12';
	            }

	            else
	            {
	                $eventsize = 'evtlista';
	                $eventclass = 'second col-md-6 col-sm-6 col-xs-12 col-esp clear';
	                $eventinside = 'col-md-8 col-sm-6 col-xs-12';
	                $eventcolimg = 'col-md-4 col-sm-6 col-xs-12';                
	            }

	        ?>

			<div class="<?php echo $eventclass ?>">
				<div class="<?php echo $eventinside ?>">
					<div class="event-timing">
						<span class="date"><?php echo get_field('fecha_evento', $evento->ID) ?></span>
						<span class="hour"><?php echo get_field('hora_evento', $evento->ID) ?></span>
					</div>
					<h3><strong><?php echo get_field('tipo_actividad')?></strong> <br/>
						<?php echo $evento->post_title ?></h3>
					<p><?php echo get_field('bajada_evento', $evento->ID) ?></p>
					<div class="clear miniseparator liner"></div>
					<h3><strong><?php echo get_field('tipo_actividad')?></strong> <br/>
						<?php echo $evento->post_title ?></h3>
					<a href="<?php echo get_permalink($evento->ID)?>" rel="nofollow" title="<?php echo $evento->post_title ?>">Mas información</a>
				</div>
				<div class="<?php echo $eventcolimg ?>">
					<a href="<?php echo get_permalink($evento->ID)?>" rel="nofollow" title="<?php echo $evento->post_title ?>">
						<?php echo get_the_post_thumbnail($evento->ID , $eventsize , array('class' => 'img-responsive'))?>
					</a>
				</div>
			</div>

			<?php endforeach?>

			<?php echo get_template_part('sidebar-evento'); ?>

		</div>
	</div>
</section>


<?php get_footer()?>