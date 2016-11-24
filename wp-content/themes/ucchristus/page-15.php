<?php get_header() ?>

<?php $bgid = get_post_thumbnail_id($post->ID);?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'head' ); ?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bg[0]?>); min-height:296px; background-attachment:fixed; background-size: cover;">
	<div class="container">
		<div class="row">

			<div class="results" style="margin-top: 150px">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/random_medic.png" alt="Doctor">
				<h2 style=" color: #fff; border: none"><strong>Bienvenido</strong> <?php echo $current_user->display_name?></h2>				
			</div>

		</div>
	</div>
</div>

<section class="profile-top profile pearl">
	<div class="container">
		<div class="row">
			<div class="results">
				
				
					<a href="#" onClick="event.preventDefault();$('#data-updater').slideDown()" title="Actualizar datos" rel="nofollow">Actualizar los datos</a>
					<a href="" title="Actualizar datos" rel="nofollow">Cerrar sesión</a>
				
				<div class="clear separator border"></div>
				
				<div style="display: none" id="data-updater">
					<h3 style=" border: none">Actualiza tus datos</h3>
					Acá va el formulario de actualización de datos,
					<div class="clear separator border"></div>
				</div>
				
			</div>
			
		</div>
	</div>
</section>

<section class="profile pearl">
	<div class="container">
		<div class="row">
		
		
			<div class="col-md-12  col-sm-12 featured-test test-rank">

				<h2>Tests disponibles <small class="pull-right">Realiza los tests y evalua tu desempeño</small></h2>
				<div class="clear miniseparator"></div>
				
				<?php $testAvailables = get_posts(array('post_type' => 'tests' , 'numberposts' => -1 , 'order' => 'ASC'))?>
				<?php $testAvailables_ext = get_posts(array('post_type' => 'tests-externos' , 'numberposts' => -1 , 'order' => 'ASC'))?>
				
				<?php foreach($testAvailables as $testAvailable):?>
				<div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 test-gray">
					<div class="row">
						<div class=" col-md-8 col-xs-12">
							<?php /* <img class="check in" src="<?php echo get_bloginfo('template_directory')?>/images/check_icon.png" alt=""> */?>
							<?php /* <img src="<?php echo get_bloginfo('template_directory')?>/images/notepad.png" alt=""> */?>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  version="1.1" viewBox="0 0 52 60" width="52px">
								  <title/>
								  <desc/>
								  <defs/>
								  <g fill="none" fill-rule="evenodd" id="People" stroke="none" stroke-width="1">
									<g fill="#000000" class="icosvgg" id="Icon-4" transform="translate(-4.000000, 0.000000)">
									  <path d="M25 46L35 46C35.553 46 36 45.552 36 45 36 44.448 35.553 44 35 44L25 44C24.447 44 24 44.448 24 45 24 45.552 24.447 46 25 46L25 46ZM25 40L41 40C41.553 40 42 39.552 42 39 42 38.448 41.553 38 41 38L25 38C24.447 38 24 38.448 24 39 24 39.552 24.447 40 25 40L25 40ZM24 33C24 33.552 24.447 34 25 34L43 34C43.553 34 44 33.552 44 33 44 32.448 43.553 32 43 32L25 32C24.447 32 24 32.448 24 33L24 33ZM25 28L39 28C39.553 28 40 27.552 40 27 40 26.448 39.553 26 39 26L25 26C24.447 26 24 26.448 24 27 24 27.552 24.447 28 25 28L25 28ZM25 22L41 22C41.553 22 42 21.552 42 21 42 20.448 41.553 20 41 20L25 20C24.447 20 24 20.448 24 21 24 21.552 24.447 22 25 22L25 22ZM19 44L17 44C16.447 44 16 44.448 16 45 16 45.552 16.447 46 17 46L19 46C19.553 46 20 45.552 20 45 20 44.448 19.553 44 19 44L19 44ZM19 38L17 38C16.447 38 16 38.448 16 39 16 39.552 16.447 40 17 40L19 40C19.553 40 20 39.552 20 39 20 38.448 19.553 38 19 38L19 38ZM19 32L17 32C16.447 32 16 32.448 16 33 16 33.552 16.447 34 17 34L19 34C19.553 34 20 33.552 20 33 20 32.448 19.553 32 19 32L19 32ZM19 26L17 26C16.447 26 16 26.448 16 27 16 27.552 16.447 28 17 28L19 28C19.553 28 20 27.552 20 27 20 26.448 19.553 26 19 26L19 26ZM17 22L19 22C19.553 22 20 21.552 20 21 20 20.448 19.553 20 19 20L17 20C16.447 20 16 20.448 16 21 16 21.552 16.447 22 17 22L17 22ZM20 10L40 10 40 6 34.899 6C34.424 6 34.014 5.665 33.92 5.199 33.543 3.345 31.895 2 30 2 28.105 2 26.457 3.345 26.08 5.199 25.986 5.665 25.576 6 25.101 6L20 6 20 10ZM18 11L18 5C18 4.448 18.447 4 19 4L24.343 4C25.178 1.64 27.439 0 30 0 32.561 0 34.822 1.64 35.657 4L41 4C41.553 4 42 4.448 42 5L42 11C42 11.552 41.553 12 41 12L19 12C18.447 12 18 11.552 18 11L18 11ZM30 4C28.897 4 28 4.897 28 6 28 7.103 28.897 8 30 8 31.103 8 32 7.103 32 6 32 4.897 31.103 4 30 4L30 4ZM45 56C45.256 56 45.512 55.902 45.707 55.707L51.707 49.707C51.895 49.52 52 49.265 52 49L52 9C52 8.448 51.553 8 51 8L45 8C44.447 8 44 8.448 44 9 44 9.552 44.447 10 45 10L50 10 50 48.586 44.293 54.293C43.902 54.684 43.902 55.316 44.293 55.707 44.488 55.902 44.744 56 45 56L45 56ZM15 8L9 8C8.447 8 8 8.448 8 9L8 52C8 54.206 9.794 56 12 56L41 56C41.553 56 42 55.552 42 55L42 49C42 48.547 42.446 48 43 48L47 48C47.553 48 48 47.552 48 47 48 46.448 47.553 46 47 46L43 46C41.402 46 40 47.402 40 49L40 54 12 54C10.897 54 10 53.103 10 52L10 10 15 10C15.553 10 16 9.552 16 9 16 8.448 15.553 8 15 8L15 8ZM56 9L56 55C56 57.57 53.57 60 51 60L9 60C6.43 60 4 57.57 4 55L4 9C4 6.43 6.43 4 9 4L15 4C15.553 4 16 4.448 16 5 16 5.552 15.553 6 15 6L9 6C7.542 6 6 7.542 6 9L6 55C6 56.458 7.542 58 9 58L51 58C52.458 58 54 56.458 54 55L54 9C54 7.542 52.458 6 51 6L45 6C44.447 6 44 5.552 44 5 44 4.448 44.447 4 45 4L51 4C53.57 4 56 6.43 56 9L56 9Z" id="notepad"/>
									</g>
								  </g>
								</svg>
							<span>
								
							<?php echo $testAvailable->post_title?>
							<div class="clear"></div>
							</span>
						</div>
						<div class="col-md-4 col-xs-12">
							<a href="<?php echo get_permalink($testAvailable->ID)?>">Realizar Test</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				<?php foreach($testAvailables_ext as $testAvailable):?>
				<div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 test-gray externals">
					<div class="row">
						<div class=" col-md-8 col-xs-12">
							<?php /* <img class="check in" src="<?php echo get_bloginfo('template_directory')?>/images/check_icon.png" alt=""> */?>
							<?php /* <img src="<?php echo get_bloginfo('template_directory')?>/images/notepad.png" alt=""> */?>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  version="1.1" viewBox="0 0 52 60" width="52px">
								  <title/>
								  <desc/>
								  <defs/>
								  <g fill="none" fill-rule="evenodd" id="People" stroke="none" stroke-width="1">
									<g fill="#000000" class="icosvgg" id="Icon-4" transform="translate(-4.000000, 0.000000)">
									  <path d="M25 46L35 46C35.553 46 36 45.552 36 45 36 44.448 35.553 44 35 44L25 44C24.447 44 24 44.448 24 45 24 45.552 24.447 46 25 46L25 46ZM25 40L41 40C41.553 40 42 39.552 42 39 42 38.448 41.553 38 41 38L25 38C24.447 38 24 38.448 24 39 24 39.552 24.447 40 25 40L25 40ZM24 33C24 33.552 24.447 34 25 34L43 34C43.553 34 44 33.552 44 33 44 32.448 43.553 32 43 32L25 32C24.447 32 24 32.448 24 33L24 33ZM25 28L39 28C39.553 28 40 27.552 40 27 40 26.448 39.553 26 39 26L25 26C24.447 26 24 26.448 24 27 24 27.552 24.447 28 25 28L25 28ZM25 22L41 22C41.553 22 42 21.552 42 21 42 20.448 41.553 20 41 20L25 20C24.447 20 24 20.448 24 21 24 21.552 24.447 22 25 22L25 22ZM19 44L17 44C16.447 44 16 44.448 16 45 16 45.552 16.447 46 17 46L19 46C19.553 46 20 45.552 20 45 20 44.448 19.553 44 19 44L19 44ZM19 38L17 38C16.447 38 16 38.448 16 39 16 39.552 16.447 40 17 40L19 40C19.553 40 20 39.552 20 39 20 38.448 19.553 38 19 38L19 38ZM19 32L17 32C16.447 32 16 32.448 16 33 16 33.552 16.447 34 17 34L19 34C19.553 34 20 33.552 20 33 20 32.448 19.553 32 19 32L19 32ZM19 26L17 26C16.447 26 16 26.448 16 27 16 27.552 16.447 28 17 28L19 28C19.553 28 20 27.552 20 27 20 26.448 19.553 26 19 26L19 26ZM17 22L19 22C19.553 22 20 21.552 20 21 20 20.448 19.553 20 19 20L17 20C16.447 20 16 20.448 16 21 16 21.552 16.447 22 17 22L17 22ZM20 10L40 10 40 6 34.899 6C34.424 6 34.014 5.665 33.92 5.199 33.543 3.345 31.895 2 30 2 28.105 2 26.457 3.345 26.08 5.199 25.986 5.665 25.576 6 25.101 6L20 6 20 10ZM18 11L18 5C18 4.448 18.447 4 19 4L24.343 4C25.178 1.64 27.439 0 30 0 32.561 0 34.822 1.64 35.657 4L41 4C41.553 4 42 4.448 42 5L42 11C42 11.552 41.553 12 41 12L19 12C18.447 12 18 11.552 18 11L18 11ZM30 4C28.897 4 28 4.897 28 6 28 7.103 28.897 8 30 8 31.103 8 32 7.103 32 6 32 4.897 31.103 4 30 4L30 4ZM45 56C45.256 56 45.512 55.902 45.707 55.707L51.707 49.707C51.895 49.52 52 49.265 52 49L52 9C52 8.448 51.553 8 51 8L45 8C44.447 8 44 8.448 44 9 44 9.552 44.447 10 45 10L50 10 50 48.586 44.293 54.293C43.902 54.684 43.902 55.316 44.293 55.707 44.488 55.902 44.744 56 45 56L45 56ZM15 8L9 8C8.447 8 8 8.448 8 9L8 52C8 54.206 9.794 56 12 56L41 56C41.553 56 42 55.552 42 55L42 49C42 48.547 42.446 48 43 48L47 48C47.553 48 48 47.552 48 47 48 46.448 47.553 46 47 46L43 46C41.402 46 40 47.402 40 49L40 54 12 54C10.897 54 10 53.103 10 52L10 10 15 10C15.553 10 16 9.552 16 9 16 8.448 15.553 8 15 8L15 8ZM56 9L56 55C56 57.57 53.57 60 51 60L9 60C6.43 60 4 57.57 4 55L4 9C4 6.43 6.43 4 9 4L15 4C15.553 4 16 4.448 16 5 16 5.552 15.553 6 15 6L9 6C7.542 6 6 7.542 6 9L6 55C6 56.458 7.542 58 9 58L51 58C52.458 58 54 56.458 54 55L54 9C54 7.542 52.458 6 51 6L45 6C44.447 6 44 5.552 44 5 44 4.448 44.447 4 45 4L51 4C53.57 4 56 6.43 56 9L56 9Z" id="notepad"/>
									</g>
								  </g>
								</svg>
							<span>
								
							<?php echo $testAvailable->post_title?>
							
							<small style="display: inline-block">Test Externo</small>
							<div class="clear"></div>
							</span>
						</div>
						<div class="col-md-4 col-xs-12">
							<a href="<?php echo get_permalink($testAvailable->ID)?>">Realizar Test</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				
			
			</div>
		
			<!--  Profile Area -->
			<div class="col-md-6 col-sm-12 results">
				
				<h3>Últimos Test Realizados</h3>
				<div class="data-test white">
				
					<?php $tests = get_field('test_realizados' , 'user_'.$current_user->ID)?>
					<?php if($tests){?>
					<table class="table table-hover">
						<thead>
							<tr>
								<th width="20%" style="text-align:center">Fecha</th>
								<th width="45%" style="text-align:center">Test</th>
								<th width="35%" style="text-align:center">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
						
						
							<?php 
							$_data = array();
	
							$tests = array_reverse($tests);
	
							foreach ($tests as $v) {
							  if (isset($_data[$v['test_realizado']])) {
								// found duplicate
								continue;
							  }
							  // remember unique item
							  $_data[$v['test_realizado']] = $v;
							}
							// if you need a zero-based array, otheriwse work with $_data
							$dataTests = array_reverse(array_values($_data));
							?>
							
								<?php foreach($dataTests as $test):?>
								<?php $fecha = $test['test_id']?>
								<tr>
									<td style="text-align:center"><?php echo date('d\-m\-Y' , $fecha)?></td>
									<td style="text-align:center">
										<?php $ttid = str_replace('test-' , '' , $test['test_realizado'])?>
										<?php echo get_the_title($ttid)?>
									<?php //if($test['test_realizado'] == 'test-150'){echo 'Burnout';}?>
									</td>
									<td style="text-align:center"><a class="btn btn-primary btn-sm" style=" color: #fff !important; padding: 5px 30px; display: inline-block; border: none; margin: 0 auto;" href="<?php echo  get_page_link(211).'/?t='.$test['test_realizado'].'&u='.$current_user->ID.'&i='.$fecha ?>" rel="nofollow" title="Repetir Test">Ver Resultado</a></td>
								</tr>
								<?php endforeach?>
							
								
							
						</tbody>
					</table>
					<?php }else{?>

								<div style="padding: 30px 20px; text-align: center">No se han realizado test</div>

					<?php }?>
				
					
					<div class="clear"></div>
				</div>
			</div>
			<!--  Test Counter-->
			<div class="col-md-6 col-sm-12 featured-test test-rank ">
				<h3>Próximos eventos</h3>
				
				
				<div id="carousel-example-generic" class="carousel slide event" data-ride="carousel">
				  <!-- Indicators -->
				  <?php /* <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol> */?>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					
					<?php $eventos = get_posts(array('post_type' => 'eventos' , 'numberposts' => 3))?>
					<?php $ec = 0?>
					<?php foreach($eventos as $evento):?>
					<?php $ec++?>
					<div class="item <?php if($ec == 1){echo 'active';}?>">
					  	<?php echo get_the_post_thumbnail($evento->ID , 'evdestacado' , array('class' => 'img-responsive img-full' ))?>
					  	<div class="carousel-caption col-sm-8 pull-left">
				        	<h4>Eventos</h4>
				        	<p><?php echo $evento->post_title?></p>
				        	<span>LUNES 27 18:30 HRS, AULA MAGNA CLÍNICA UC</span>
						</div>
					</div>
					<?php endforeach?>
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

<section class="blue" id="history">
	
	<div class="container">
		<div class="row">
				
				<h2>Historial del usuario</h2>
			
		</div>
	</div>
	
</section>

<?php get_footer()?>