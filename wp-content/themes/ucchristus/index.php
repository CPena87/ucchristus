<?php get_header()?>

<section style="background-image:url(<?php echo get_bloginfo('template_directory');?>/images/bg_leading.jpg); background-size:cover; background-position:top center; height:100vh;">
    <div class="container">
        <div class="row">
            <div class="lead-heading col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
              <?php $headoptions = get_field('cabecera_home' , 'options')?>
              <?php foreach($headoptions as $head):?>
                <h1><?php echo $head['titular_cabecera']?></h1>
                <p><?php echo $head['bajada_cabecera']?></p>   
              <?php endforeach;?> 
            </div>

            <a href="#Steps" class="lead scroll-down-it col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-8 col-xs-offset-2 animated">
                <span>Scroll-down</span>
                <button><span class="fa fa-angle-down" aria-hidden="true"></span></button>
            </a>
        </div>
    </div>
</section>

<!-- STEPS -->
<section id="Steps" class="steps-section">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <!-- Timeline Inicio -->
                <h2 class="steps-header">
                 Ideas para cuidar la salud física <br>y mental <span>de nuestros médicos</span>
                </h2>

                <div class="steps-timeline">

                  <div class="steps-one">
                    <img class="steps-img" src="<?php echo get_bloginfo('template_directory');?>/images/flag.png" alt="" data-toggle="tooltip" data-placement="top" title="Tips para desarrollar tu liderazgo" />
                    <p class="steps-description">
                      Desarrolla tu liderazgo
                    </p>
                    <span class="hidden-lg hidden-md hidden-sm">Tips para desarrollar tu liderazgo</span>
                  </div>

                  <div class="steps-two">
                    <img class="steps-img" src="<?php echo get_bloginfo('template_directory');?>/images/light.png" alt="" data-toggle="tooltip" data-placement="top" title="Sugerencias para energizar tu bienestar" />
                    <p class="steps-description">
                       Energiza tu vida
                    </p>
                    <span class="hidden-lg hidden-md hidden-sm">Sugerencias para energizar tu bienestar</span>
                  </div>

                  <div class="steps-three">
                    <img class="steps-img" src="<?php echo get_bloginfo('template_directory');?>/images/arrowman.png" alt="" />

                  </div>

                  <div class="steps-fourth">
                    <img class="steps-img" src="<?php echo get_bloginfo('template_directory');?>/images/notepad.png" alt="" data-toggle="tooltip" data-placement="top" title="Evaluate, te hace bien" />
                    <p class="steps-description">
                       Evalúa como estás
                    </p>
                    <span class="hidden-lg hidden-md hidden-sm">Evaluate, te hace bien</span>
                  </div>

                  <div class="steps-five">
                    <img class="steps-img" src="<?php echo get_bloginfo('template_directory');?>/images/checkin.png" alt="" data-toggle="tooltip" data-placement="top" title="Revisa las últimas noticias" />
                    <p class="steps-description">
                       Participa de eventos y actividades
                    </p>
                    <span class="hidden-lg hidden-md hidden-sm">Revisa las últimas noticias</span>
                  </div>

                </div><!-- /.steps-timeline -->

                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 steps">
                    <p>Este programa <strong>busca entregar herramientas a los médicos</strong> <strong style="color:#672b6f;">UC-Christus</strong> <br><strong>para favorecer su alto desempeño</strong>, manteniendo un equilibrio <span style="color:#672b6f;">vida-trabajo</span>.</p>
                </div>
                <!-- Timeline Final -->
            </div>

        </div>
    </div>
</section>

<section class="low-gray changes">
  <div class="container">
    <div class="row">

      <div class="col-md-12 changes-header">
        <h2> Experimenta el cambio. <span style="color:#46639d;">Vive mejor</span> </h2>
        <p>Pequeños cambios hacen una gran diferencia en tu <span style="color:#672b6f;">desempeño, liderazgo y calidad de vida</span>.</p>
      </div>

      <div class="col-md-7 col-md-offset-1 changes-frame">
        <div class="embed-responsive embed-responsive-16by9 video-aboutus">
          <iframe class="embed-responsive-item" width="100%" height="auto" src="https://www.youtube.com/embed/BhZPZSZS1p4" frameborder="0" allowfullscreen></iframe>
        </div>

        <h2>Burnout en médicos: <strong>¿Eres feliz?</strong></h2>
        <p>Dr. Dike Drummond</p>
      </div>

      <div class="col-md-3 col-esp">
        <div class="cont-gray">

            <div class="stadistics">
              <div class="col-md-3 col-esp">
                <img src="http://uc.upmedia.cl/wp-content/themes/ucchristus/images/smile_icon.png" alt="">
              </div>
              <div class="col-md-9 col-esp">
                <h3><a href="">1 de cada 3 médicos <strong>sufre Burnout</strong></a></h3>
              </div>
            </div>
            <div class="clear miniseparator" style="border-bottom:1px solid #fff; margin:0 15px;"></div>
            <div class="stadistics">
              <div class="col-md-3 col-esp">
                <img src="http://uc.upmedia.cl/wp-content/themes/ucchristus/images/hand_icon.png" alt="">
              </div>
              <div class="col-md-9 col-esp">
                <h3><a href=""><strong>60% de los médicos afirman que se retirarían hoy si pudieran</strong> (Estudio realizado en USA, año 2012)</a></h3>
              </div>
            </div>
          <div class="clear miniseparator"></div>
        </div>

        <button class="evaluate btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Evalúa cómo estás</button>

        <div class="clear miniseparator" ></div>

        <!-- Modal Test -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <?php
                if ( is_user_logged_in() ) {?>
              <div class="modal-content logged">
                <!-- Inicio Modal Body -->
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 approval">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/icon_approval.png" alt="">
                      <h2>¡Muy bien! </h2>
                      <p>Haz finalizado este Test. Tus resultados fueron los siguientes:</p>
                    </div>
                    <!-- Collapse content -->
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 recomend">
                      <div class="col-xs-3 result" style="background-color:#d66262;">
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/icon_alto.png" alt="">
                        <span>Agotamiento emocional</span>
                        <h3>Alto</h3>
                      </div>
                      <div class="col-xs-5 result" style="background-color:#64ca8d;">
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/icon_bajo.png" alt="">
                        <span>Despersonalización</span>
                        <h3>Bajo</h3>
                      </div>
                      <div class="col-xs-3 result last" style="background-color:#e3b71c;">
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/icon_medio.png" alt="">
                        <span>Mala percepción de desempeño laboral y baja realización personal</span>
                        <h3>Medio</h3>
                      </div>
                      <div class="clear separator"></div>
                        <h4>Recomendaciones</h4>
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Generales</a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                              <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Preventivas</a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                              <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 another">
                      <button>
                        Realizar otro test
                      </button>
                    </div>
                </div>
              </div>
              <!-- Fin Modal Body -->
              <?php } else { ?>
              <div class="modal-content unregistered">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 approval">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/icon_suscribe.png" alt="">
                      <h2>¿Aún no te registras?</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 another">
                      <a class="for-register" href="#pt-register" rel="nofollow" title="Registrate">Registrate</a> 
                      <a class="for-access" href="#pt-login" rel="nofollow" title="Acceder">Acceder</a>
                    </div>

                  <!-- Collapse content end -->

                </div>
                <!-- Fin Modal Body -->
              </div>
              <?php }?>

            </div>
          </div>
        <!-- Fin Modal Test -->
      </div>

    </div>
  </div>
</section>

<section class="blue inspirate">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Con esta herramienta puede generar un texto simulado mejor </h2>
      </div>
      <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">
        
        <!-- Nav abs Inspírate -->
          <ul class="list col-sm-10 col-sm-offset-1 col-esp" >
            <li class="col-xs-4" onclick="activateSlider('3', 'liderazgo-y-alto-desempeno')">Liderazgo y alto desempeño</li>
            <li class="col-xs-4" style="padding-top: 20px;" onclick="activateSlider('4', 'energiza-tu-vida')">Energiza tu vida</li>
            <li class="col-xs-4" style="padding-top: 20px;" onclick="activateSlider('5', 'estres-y-burnout')">Estrés y Burnout</li>
          </ul>

            <div id="liderazgo" class="slmain">
              <!-- Slider inspiración -->
              <div class="col-md-12 col-esp">
                <ul class="slider resp-clear" id="slideContainer">
				        <?php $articulos = get_posts(array('post_type' => 'post' , 'category' => '3' , 'numberposts' => 5));?>
                <?php foreach($articulos as $articulo):?>
                 
      					<?php /* <li class="col-md-4 col-sm-6 col-xs-6 col-esp">
      						<figure>
      							<a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow">
      								<?php echo get_the_post_thumbnail($articulo->ID , 'noticia')?>
      							</a>
      							<figcaption>
      							<h4><a href="<?php echo get_permalink($articulo->ID)?>" rel="nofollow"><?php echo $articulo->post_title?></a></h4>
      							<p><?php echo $articulo->post_excerpt?></p>
      							<a class="last" href="<?php echo get_permalink($articulo->ID)?>">Leer más</a>
      						</figcaption>
      						</figure>
      					</li> */?>

                <?php endforeach?>
                </ul>

              </div>  

          </div>

      </div>
    </div>
  </div>
</section>

<script>
	
function bxInit(){
	var slider = $('#slideContainer').bxSlider({
	  slideWidth: 500,
	  slideMargin:35,
	  minSlides: 3,
	  maxSlides: 3,
	  moveSlides: 1,
	  prevText:'<span class="fa fa-angle-left"></span>',
	  nextText:'<span class="fa fa-angle-right"></span>',
	  hideControlOnEnd:true,
	  pager:false,
	  responsive:false,
	  adaptiveHeight:true,
    adaptiveWidth:true,
	});
}
	
function activateSlider(cat){
	
	category = cat;
	
	$.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'loadsArticles' , category : category }),
		success: function(data){
			
			$('.slmain').empty();
			$('.slmain').html('<div class="col-md-12 col-esp"><ul class="slider resp-clear" id="slideContainer"></ul></div>');
			
			$('#slideContainer').html(data);
			bxInit();
			
			
		},
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}
	});
	
}

	jQuery(document).ready(function() {
		activateSlider(3);
		console.log('loads the first cat');
	});
	
</script>


<script>
  jQuery(function() {
    $('a[href*=#Steps]').on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 'linear');
    });
  });
</script>


<?php get_footer()?>