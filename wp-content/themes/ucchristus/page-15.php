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

<section class="profile pearl">
	<div class="container">
		<div class="row">
			<!--  Profile Area -->
			<div class="col-md-6 col-sm-6 results">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/random_medic.png" alt="Doctor">
				<h2><strong>Bienvenido</strong> Felipe Arcos</h2>
				<a href="" title="Cambiar Contraseña" rel="nofollow">Cambiar Contraseña</a>
				<div class="clear miniseparator"></div>
				<h3>Test Realizados</h3>
				<div class="data-test white">
					<div class="col-sm-6 col-xs-4 col-esp">	
						<span class="date">27/10/2016</span>
					</div>
					<div class="col-sm-6 col-xs-8 col-esp">
						<p class="title">> Cuestionario de <br> Burnout</p>
						<a class="about" href="" rel="nofollow" title="Repetir Test">Repetir Test</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<!--  Test Counter-->
			<div class="col-md-6 col-sm-6 featured-test test-rank col-esp">

				<h2>Test</h2>
				<div class="clear miniseparator"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="test-gray">
						<img class="check in" src="<?php echo get_bloginfo('template_directory')?>/images/check_icon.png" alt="">
						<div class="clear separator"></div>
						<img src="<?php echo get_bloginfo('template_directory')?>/images/notepad.png" alt="">
						<span>Test DE BURNOUT (c. maslach)</span>
					</div>
					<a href="">Repetir Test</a>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="test-gray">
						<img class="check"src="<?php echo get_bloginfo('template_directory')?>/images/check_icon.png" alt="">
						<div class="clear separator"></div>
						<img src="<?php echo get_bloginfo('template_directory')?>/images/notepad.png" alt="">
						<span>Escala de afectividad positiva y negativa (panas)</span>
					</div>
					<a href="">Repetir Test</a>
				</div>

				<!-- Slide -->
				<div id="carousel-example-generic" class="carousel slide col-xs-12 event" data-ride="carousel" style="clear:both;">

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      	<img src="<?php echo get_bloginfo('template_directory');?>/images/random_slide.png" alt="...">
				      	<div class="carousel-caption col-sm-6 pull-left">
				        	<h3>Eventos</h3>
				        	<p>Conversemos sobre el estrés en el trabajo.</p>
				        	<span>LUNES 27 18:30 HRS, AULA MAGNA CLÍNICA UC</span>
				       	</div>
				    </div>
				    <div class="item">
				      	<img src="<?php echo get_bloginfo('template_directory');?>/images/random_slide.png" alt="...">
				      	<div class="carousel-caption col-sm-6 pull-left">
				        	<h3>Eventos</h3>
				        	<p>Conversemos sobre el estrés en el trabajo.</p>
				        	<span>LUNES 27 18:30 HRS, AULA MAGNA CLÍNICA UC</span>
				       	</div>
				    </div>
				   
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

			</div>
		</div>
	</div>
</section>



<?php get_footer()?>