<?php get_header()?>

<?php $usuario = $_GET['u']?>
<?php $test_type = $_GET['t']?>
<?php $id = $_GET['i']?>
<?php $preguntas = get_field('preguntas' , $test)?>

<?php if(is_user_logged_in()){?>
<?php $user = wp_get_current_user()?>
<?php if($usuario == $current_user->ID){?>

<?php $bgid = get_post_thumbnail_id($post->ID);?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'head' ); ?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bg[0]?>); min-height:296px; background-attachment:fixed; background-size: cover;">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 pre-heading">
				<h2><?php echo $post->post_title; ?></h2>
				<?php $ttid = str_replace('test-' , '' , $test_type)?>
				
				<p><?php echo get_the_title($ttid)?></p>				
			</div>

		</div>
	</div>
</div>

<main>
	<div class="container">
		<div class="row">
			
		  <?php if($test_type == 'test-150'){?>
				<?php $test = get_field('test_realizados' , 'user_'.$usuario)?>
				
				<?php //var_dump($test)?>
				<?php foreach($test as $test):?>
					<?php if($test['test_id'] == $id){?>
						
						<?php $ps = json_decode($test['detalle_preguntas']);?>
						<?php $pctr = 0?>
						<?php foreach($ps as $p):?>
						<?php $pctr++ ?>
							
							<?php  switch ($pctr) { 
								case 1:
								$tipo_agot[] = $p;
									break;
								case 2:
								$tipo_agot[] = $p;
									break;
								case 3:
								$tipo_agot[] = $p;
									break;
								case 4:
								$tipo_inef[] = $p;
									break;
								case 5:
								$tipo_despers[] = $p;
									break;
								case 6:
								$tipo_agot[] = $p;
									break;
								case 7:
								$tipo_inef[] = $p;
									break;
								case 8:
								$tipo_agot[] = $p;
									break;
								case 9:
								$tipo_inef[] = $p;
									break;
								case 10:
								$tipo_despers[] = $p;
									break;
								case 11:
								$tipo_despers[] = $p;
									break;
								case 12:
								$tipo_inef[] = $p;
									break;
								case 13:
								$tipo_agot[] = $p;
									break;
								case 14:
								$tipo_agot[] = $p;
									break;
								case 15:
								$tipo_despers[] = $p;
									break;
								case 16:
								$tipo_agot[] = $p;
									break;
								case 17:
								$tipo_inef[] = $p;
									break;
								case 18:
								$tipo_inef[] = $p;
									break;
								case 19:
								$tipo_inef[] = $p;
									break;
								case 20:
								$tipo_agot[] = $p;
									break;
								case 21:
								$tipo_inef[] = $p;
									break;
								case 22:
								$tipo_despers[] = $p;
									break;
							} ?>
						
						<?php endforeach;?>
						
					<?php }?>
				<?php endforeach?>
				
				
				<pre style="display:none;">
				
				<?php $pt_agot = array_sum($tipo_agot)?>
				<?php $pt_inef = array_sum($tipo_inef)?>
				<?php $pt_desp = array_sum($tipo_despers)?>
				
				
				<?php if($pt_agot >= 27){
					$calif_agot = 'Alto';
					$class_agot = 'danger';
				}elseif($pt_agot >= 19 && $pt_agot <= 26){
					$calif_agot = 'Medio';
					$class_agot = 'warning';
				}else{
					$calif_agot = 'Bajo';
					$class_agot = 'success';
				}?>
				
				<?php if($pt_inef <= 33){
					$calif_inef = 'Alto';
					$class_inef = 'danger';
				}elseif($pt_inef >= 34 && $pt_inef <= 39){
					$calif_inef = 'Medio';
					$class_inef = 'warning';
				}else{
					$calif_inef = 'Bajo';
					$class_inef = 'success';
				}?>
				
				<?php if($pt_desp >= 10){
					$calif_desp = 'Alto';
					$class_desp = 'danger';
				}elseif($pt_desp >= 6 && $pt_desp <= 9){
					$calif_desp = 'Medio';
					$class_desp = 'warning';
				}else{
					$calif_desp = 'Bajo';
					$class_desp = 'success';
				}?>
				
				
				
				<?php if($pt_agot >= 27 || $pt_desp >= 10){
					$bstatus = 'si';
				}else{
					$bstatus = 'no';
				}?>
				
				</pre>

				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 result-canvas blue">
					<span class="fa fa-file-text-o" aria-hidden="true"></span>
					<h3>Entrega de resultados:</h3>
					<h4>Burnout: <?php echo $bstatus ?></h4>
				</div>
				
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 reference">
					<p class="lead">El estado de burnout tiene 3 dimensiones. Según sus respuestas, su calificación en cada una de estas dimensiones es:</p>
					<ul>
						<li class="bg-<?php echo $class_agot ?>">Agotamiento emocional: <strong><?php echo $calif_agot?></strong></li>
						<li class="bg-<?php echo $class_desp ?>">Despersonalización: <strong><?php echo $calif_desp?></strong></li>
						<li class="bg-<?php echo $class_inef ?>">Mala percepción de desempeño laboral y baja realización personal: <strong><?php echo $calif_inef?></strong></li>
					</ul>
				</div>

				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 recomend">
					<span>Recomendaciones generales:</span>

					<p>El burnout es un estado de agotamiento mental, físico y emocional, producido por el involucramiento crónico en situaciones laborales emocionalmente demandantes. Consta de tres dimensiones:</p>

					<ul>
						<li> El agotamiento emocional es un cansancio físico y psicológico que se manifiesta como la sensación de falta de recursos emocionales y el sentimiento que embarga al trabajador de que nada puede ofrecer a otras personas a nivel afectivo.</li>
						<li> La despersonalización es lo que se conoce como actitudes inhumanas, aisladas, negativas, frías, cínicas y duras, que da la persona a los beneficiarios de su propio trabajo.</li>
						<li> La baja autoestima conocida también como falta de realización personal en el trabajo, sentimiento de inadecuación personal.</li>
					</ul>
				</div>		

				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 recomend">
				<em>Algunas recomendaciones para prevenir el burnout son:</em>
					<ul>
						<li>Cuidarse a uno mismo</li>
						<li>Disponer de tiempo libre y desarrollar intereses y hobbies</li>
						<li>Establecer límites y saber decir “no”</li>
						<li>Reconocer las limitaciones propias y pedir ayuda</li>
						<li>Aprender a tomarse el tiempo que consideremos necesario para cada actividad</li>
						<li>Conocer el sentido y propósito en nuestra vida, y trabajar por desarrollarlo y no perderlo</li>
					</ul>
				</div>

				<div class="clear separator"></div>
		  <?php } elseif($test_type == 'test-236'){?>
		  <div class="col-md-8 col-md-offset-2 reference">
					CUESTIONARIO DE HÁBITO TABÁQUICO
				</div>
				
				<div class="col-md-8 col-md-offset-2 reference">
					
					<?php $test = get_field('test_realizados' , 'user_'.$usuario)?>
				
					<?php //var_dump($test)?>
					<?php foreach($test as $test):?>
					<?php if($test['test_id'] == $id){?>
						
						<?php $ps = json_decode($test['detalle_preguntas']);?>
						
						<?php if($ps->p_1 == 2){?>
						<h2>No fumador</h2>
							<p>¡Felicitaciones! El tabaquismo es incuestionablemente un hábito que daña la salud. Al no fumar, para usted es mucho más fácil mantener un estilo de vida saludable, que se sostiene sobre tres pilares fundamentales: mantener una alimentación balanceada, practicar actividad física en forma regular, y evitar el tabaquismo.</p>
						<?php }elseif($ps->p_1 == 1 && $ps->p_3 <= 2 ){?>
						<h2>Fumador moderado</h2>
							<p>Aunque usted fuma moderadamente, le recomendamos dejar de hacerlo. Está comprobado científicamente que el consumo de tabaco y la exposición al humo que se genera al fumar, constituyen causas directas de numerosas enfermedades crónicas, tales como cánceres, cardiopatías, enfermedades respiratorias y materno-infantiles. Evitar y disminuir el consumo de tabaco es una tarea urgente, que comienza cambiando la actitud de la sociedad frente a este hábito. El tabaquismo es una adicción que no solo pone en riesgo la salud del fumador, sino también la de las personas a su alrededor.</p>
						<?php }elseif($ps->p_1 == 1 && $ps->p_3 >= 3){?>
						<h2>Fumador</h2>
							<p>Una vida saludable se sostiene sobre tres pilares fundamentales: mantener una alimentación balanceada, practicar actividad física en forma regular, y evitar el tabaquismo. Al fumar usted atenta contra uno de estos pilares. El consumo de tabaco constituye <strong>la principal causa prevenible de enfermedad, discapacidad y muerte en el mundo</strong>. Está comprobado científicamente que el consumo de tabaco y la exposición al humo que se genera al fumar, constituyen causas directas de numerosas enfermedades crónicas, tales como cánceres, cardiopatías, enfermedades respiratorias y materno-infantiles. Evitar y disminuir el consumo de tabaco es una tarea urgente, que comienza cambiando la actitud de la sociedad frente a este hábito. El tabaquismo es una adicción que no solo pone en riesgo la salud del fumador, sino también la de las personas a su alrededor.</p>
							
						<?php }?>
					<?php //}?>
				</div>
				
				<?php };
				endforeach;
			?>
				
			<?php } elseif($test_type == 'test-222'){?>
				<?php $test = get_field('test_realizados' , 'user_'.$usuario)?>
				
				
				<?php foreach($test as $test):?>
					<?php if($test['test_id'] == $id){?>
						
						<?php $ps = json_decode($test['detalle_preguntas']);?>
						<?php $pctr = 0?>
						<?php foreach($ps as $p):?>
						<?php $pctr++ ?>
							
							<?php  switch ($pctr) { 
								case 1:
								$tipo_hed[] = $p;
									break;
								case 2:
								$tipo_hed[] = $p;
									break;
								case 3:
								$tipo_hed[] = $p;
									break;
								case 4:
								$tipo_soc[] = $p;
									break;
								case 5:
								$tipo_soc[] = $p;
									break;
								case 6:
								$tipo_soc[] = $p;
									break;
								case 7:
								$tipo_soc[] = $p;
									break;
								case 8:
								$tipo_soc[] = $p;
									break;
								case 9:
								$tipo_psi[] = $p;
									break;
								case 10:
								$tipo_psi[] = $p;
									break;
								case 11:
								$tipo_psi[] = $p;
									break;
								case 12:
								$tipo_psi[] = $p;
									break;
								case 13:
								$tipo_psi[] = $p;
									break;
								case 14:
								$tipo_psi[] = $p;
									break;
								
							} ?>
						
						<?php endforeach;?>
						
					<?php }?>
				<?php endforeach?>
				
				<?php $pt_hed = array_sum($tipo_hed)?>
				<?php $pt_soc = array_sum($tipo_soc)?>
				<?php $pt_psi = array_sum($tipo_psi)?>
				<?php $pt_tot = $pt_hed + $pt_soc + $pt_psi?>
				
				<?php 
				
				if($ps->p_1 == 4 || $ps->p_1 == 5){$v1 = 1 ;}else{ $v1 = 0 ;} 
				if($ps->p_2 == 4 || $ps->p_2 == 5){$v2 = 1 ;}else{ $v2 = 0 ;} 
				if($ps->p_3 == 4 || $ps->p_3 == 5){$v3 = 1 ;}else{ $v3 = 0 ;}
			
				$Hiaff = $v1+$v2+$v3;
													 
				if($ps->p_1 == 0 || $ps->p_1 == 1){$v1 = 1 ;}else{ $v1 = 0 ;} 
				if($ps->p_2 == 0 || $ps->p_2 == 1){$v2 = 1 ;}else{ $v2 = 0 ;} 
				if($ps->p_3 == 0 || $ps->p_3 == 1){$v3 = 1 ;}else{ $v3 = 0 ;}
				
				$Loaff = $v1 + $v2 + $v3 ;
													 
				if($ps->p_4 == 4 || $ps->p_4 == 5){$v4 = 1 ;}else{ $v4 = 0 ;} 
			    if($ps->p_5 == 4 || $ps->p_5 == 5){$v5 = 1 ;}else{ $v5 = 0 ;} 
			    if($ps->p_6 == 4 || $ps->p_6 == 5){$v6 = 1 ;}else{ $v6 = 0 ;} 
			    if($ps->p_7 == 4 || $ps->p_7 == 5){$v7 = 1 ;}else{ $v7 = 0 ;} 
			    if($ps->p_8 == 4 || $ps->p_8 == 5){$v8 = 1 ;}else{ $v8 = 0 ;} 
			    if($ps->p_9 == 4 || $ps->p_9 == 5){$v9 = 1 ;}else{ $v9 = 0 ;} 
			    if($ps->p_10 == 4 || $ps->p_10 == 5){$v10 = 1 ;}else{ $v10 = 0 ;}
			    if($ps->p_11 == 4 || $ps->p_11 == 5){$v11 = 1 ;}else{ $v11 = 0 ;}
			    if($ps->p_12 == 4 || $ps->p_12 == 5){$v12 = 1 ;}else{ $v12 = 0 ;} 
			    if($ps->p_13 == 4 || $ps->p_13 == 5){$v13 = 1 ;}else{ $v13 = 0 ;} 
			    if($ps->p_14 == 4 || $ps->p_14 == 5){$v14 = 1 ;}else{ $v14 = 0 ;}
				
				$Hifunc =  $v4 + $v5 + $v6 + $v7 + $v8 + $v9 + $v10 + $v11 + $v12 + $v13 + $v14;
													 
				if($ps->p_4 == 0 || $ps->p_4 == 1){$v4 = 1 ;}else{ $v4 = 0 ;} 
				if($ps->p_5 == 0 || $ps->p_5 == 1){$v5 = 1 ;}else{ $v5 = 0 ;} 
				if($ps->p_6 == 0 || $ps->p_6 == 1){$v6 = 1 ;}else{ $v6 = 0 ;} 
				if($ps->p_7 == 0 || $ps->p_7 == 1){$v7 = 1 ;}else{ $v7 = 0 ;} 
				if($ps->p_8 == 0 || $ps->p_8 == 1){$v8 = 1 ;}else{ $v8 = 0 ;} 
				if($ps->p_9 == 0 || $ps->p_9 == 1){$v9 = 1 ;}else{ $v9 = 0 ;} 
				if($ps->p_10 == 0 || $ps->p_10 == 1){$v10 = 1 ;}else{ $v10 = 0 ;} 
				if($ps->p_11 == 0 || $ps->p_11 == 1){$v11 = 1 ;}else{ $v11 = 0 ;} 
				if($ps->p_12 == 0 || $ps->p_12 == 1){$v12 = 1 ;}else{ $v12 = 0 ;} 
				if($ps->p_13 == 0 || $ps->p_13 == 1){$v13 = 1 ;}else{ $v13 = 0 ;} 
				if($ps->p_14 == 0 || $ps->p_14 == 1){$v14 = 1 ;}else{ $v14 = 0 ;}

				$Lofunc = $v4 + $v5 + $v6 + $v7 + $v8 + $v9 + $v10 + $v11 + $v12 + $v13 + $v14;		 
													 
				if($Hiaff  <  1){$r_hiaff = 0;}else{$r_hiaff = 1;}
				if($Hifunc <= 5){$r_hifunc = 0;}else{$r_hifunc = 1;}									 
				if($Loaff  <  1){$r_loaf = 0;}else{$r_loaf = 1;}									 
				if($Lofunc <= 5){$r_lofunc = 0;}else{$r_lofunc = 1;}
				
				$resultado = '';
				if($r_hiaff == 1 && $r_hifunc == 1){$resultado = 'Floreciente';}									 
				elseif($r_hiaff == 1 && $r_hifunc == 0){$resultado = 'Moderada';}									 
				elseif($r_hiaff == 0 && $r_hifunc == 1){$resultado = 'Moderada';}									 
				elseif($r_loaf == 1 && $r_lofunc == 0){$resultado = 'Moderada';}									 
				elseif($r_loaf == 0 && $r_lofunc == 1){$resultado = 'Moderada';}									 
				elseif($r_hiaff == 0 && $r_hifunc == 0 && $r_loaf == 0 && $r_lofunc == 0){$resultado = 'Moderada';}									 
				elseif($r_loaf == 1 && $r_lofunc == 1){$resultado = 'Languideciente';}									 
												 
				?>
				
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 reference">
					Su estado de bienestar psicológico es <?php echo $resultado?>. Usted tuvo <?php echo $pt_tot ?> puntos de un máximo de 70 puntos.
				</div>

				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 recomend">
					
					<?php if($resultado == 'Floreciente'){?> 
						<p>Usted se encuentra en unestado de salud o bienestar mental floreciente o próspero, caracterizado por la presencia de vitalidad emocional, felicidad y satisfacción hacia la vida, junto con un óptimo funcionamiento a nivel psicológico personal como social.</p>

						<p>Para permanecer en este estado de salud floreciente, usted debe mantener el estilo cognitivo, motivacional y conductual que hasta ahora le ha permitido desarrollar esta afectividad positiva, sensación de felicidad y satisfacción con la vida:</p>
						<ul>

	
							<li>Una actitud positiva hacia sí mismo</li>
							<li>Sentido de autonomía y crecimiento personal</li>
							<li>Propósito en la vida</li>
							<li>Relaciones interpersonales saludables con aceptación hacia los demás</li>
							<li>Sentido de coherencia, contribución e integración social.</li>
						
						</ul>
					<?php }elseif($resultado == 'Moderada'){?>
						
						<p>Usted se encuentra en un estado de salud mental moderada, estado intermedio entre el estado floreciente (vitalidad emocional, felicidad, satisfacción con la vida y óptimo funcionamiento psicológico y social) y el estado languideciente (falta de emocionalidad positiva, bajo nivel de felicidad, insatisfacción con la vida y deficiente funcionamiento psicológico y social).</p>
						<p>Para mejorar su salud mental hacia el nivel floreciente, usted debe realizar actividades cognitivas, motivacionales y conductuales, las que ejecutadas con atención, compromiso y regularidad, como las que se proponen en (link a sección bienestar), le permitirán mejorar su afectividad positiva en todos sus aspectos, además de una sensación de felicidad y satisfacción con la vida. Estas acciones deben comprender los siguientes aspectos:</p>
						<ul>
							<li>Actitud positiva hacia sí mismo</li>
							<li>Sentido de autonomía y crecimiento personal</li>
							<li>Propósito en la vida</li>
							<li>Relaciones interpersonales positivas con aceptación hacia los demás</li>
							<li>Sentido de coherencia, contribución e integración social.</li>
						</ul>

						
					<?php }else{?>
					
						<p>Usted se encuentra en un estado de salud mental languideciente, caracterizado por carencia de emocionalidad positiva, bajo nivel de felicidad e insatisfacción con la vida, junto con un deficiente funcionamiento a nivel psicológico personal como social. </p>
						
						<p>Si bien lo anterior no implica la presencia de un problema psicológico, este estado suele asociarse al antecedente de un trastorno mental en el pasado reciente, o de la probabilidad de desarrollarlo en el futuro cercano. </p>
						<p>Para mejorar su salud mental hacia un nivel moderado o floreciente, usted debe realizar actividades cognitivas, motivacionales y conductuales, las que ejecutadas con atención, compromiso y regularidad, como las que se proponen en (link a sección bienestar), le permitirán mejorar su afectividad positiva en todos sus aspectos, además de una sensación de felicidad y satisfacción con la vida. Estas acciones deben comprender los siguientes aspectos:</p>
						<ul>
							<li>Actitud positiva hacia sí mismo</li>
							<li>Sentido de autonomía y crecimiento personal</li>
							<li>Propósito en la vida</li>
							<li>Relaciones interpersonales positivas con aceptación hacia los demás</li>
							<li>Sentido de coherencia, contribución e integración social.</li>
						</ul>
					
					<?php }?>
					
				</div>		

				

				<div class="clear separator"></div>
		  	<?php } elseif($test_type == 'test-225'){?>
		  		
		  		<?php $test = get_field('test_realizados' , 'user_'.$usuario)?>
				
				
				<?php foreach($test as $test):?>
					<?php if($test['test_id'] == $id){?>
						
						<?php $ps = json_decode($test['detalle_preguntas']);?>
						<pre><?php var_dump($ps)?></pre>
						<?php $pctr = 0?>
						<?php foreach($ps as $p):?>
						<?php $pctr++ ?>
							
							<?php  switch ($pctr) { 
								case 1:
								$sum[] = $p;
									break;
								case 2:
								$sum[] = $p;
									break;
								case 3:
								$sum[] = $p;
									break;
								case 4:
								$sum[] = $p;
									break;
								case 5:
								$sum[] = $p;
									break;
								case 6:
								$sum[] = $p;
									break;
								case 7:
								
							} ?>
						
						<?php endforeach;?>
						
					<?php }?>
				<?php endforeach?>
				
				
				
				<?php $ptje = array_sum($sum)?>
				
				<?php 
			
				if($ptje >= 31){$resultado = 'Alta';}
				elseif($ptje >= 18 && $ptje < 31){$resultado = 'Media';}
				elseif($ptje >= 6 && $ptje < 18 ){$resultado = 'Baja';}
			
				?>
				
				
				<div class="col-md-8 col-md-offset-2 reference">
					
						<h3>Usted tuvo <?php echo $ptje?> puntos de una escala que varía entre 6 y 42 puntos, por lo que su nivel de vitalidad subjetiva es <?php echo $resultado ?>.</h3> 
						
						<?php if($resultado == 'Alta'){?>
						
							<h3>Alta</h3>

							<p>La vitalidad emocional se define como una sensación psicológica positiva de entusiasmo, de estar vivo, alerta y con energía que permite el funcionamiento óptimo de una persona.
							Es un indicador de bienestar eudamónico (psicológico y social), y depende aspectos físicos y psicosociales, incluyendo en forma importante la satisfacción de las necesidades psicológicas básicas de autonomía, sentido de autoeficacia y un entorno de relaciones personales adecuadas.</p>

							<p>Usted tiene un nivel alto de vitalidad emocional, lo que se correlaciona positivamente con afectividad positiva, autoestima, extroversión, satisfacción con la vida, sentido de autorrealización, hábitos de vida saludable, buen funcionamiento físico y salud corporal y mental. Siga así!</p>

							<p>Dentro de las actividades que tienen evidencia favorable para aumentar y mantener la vitalidad subjetiva están el desarrollo de la autonomía y la motivación intrínseca en la elección y logro de objetivos en la vida, el alineamiento entre los talentos y fortalezas con los desafíos personales (lo que permite alcanzar lo llamado como “estado de flujo”) y la práctica de actividad física rutinaria.</p> 
						
						<?php }elseif($resultado == 'Media' ){?>
							
							<h3>Media</h3>
							
							<p>La vitalidad emocional se define como una sensación psicológica positiva de entusiasmo, de estar vivo, alerta y con energía que permite el funcionamiento óptimo de una persona.
							Es un indicador de bienestar eudamónico (psicológico y social), y depende aspectos físicos y psicosociales, incluyendo en forma importante la satisfacción de las necesidades psicológicas básicas de autonomía, sentido de autoeficacia y un entorno de relaciones personales adecuadas.</p>

							<p>Usted tiene un nivel intermedio de vitalidad emocional. Para aumentar su vitalidad emocional hacia un mayor nivel, existen algunas actividades que lo pueden ayudar: el desarrollo de la autonomía y la motivación intrínseca en la elección y logro de objetivos en la vida, el alineamiento entre los talentos y fortalezas con los desafíos personales (lo que permite alcanzar lo llamado como “estado de flujo”) y la práctica de actividad física rutinaria. </p>

							<p>Un alto nivel de vitalidad emocional se correlaciona positivamente con afectividad positiva, autoestima, extroversión, satisfacción con la vida, sentido de autorrealización, hábitos de vida saludable, buen funcionamiento físico y salud corporal y mental.</p>
							<p>En cambio, un bajo  nivel de vitalidad emocional se correlaciona con afectividad negativa, mala tolerancia al dolor físico y somatización, neuroticismo, psicopatología (incluyendo ansiedad y depresión), hábitos de vida no saludables y bajo bienestar físico y mental. </p>
							
						<?php }elseif($resultado == 'Baja'){?>
							<h3>Baja</h3>
							
							<p>La vitalidad emocional se define como una sensación psicológica positiva de entusiasmo, de estar vivo, alerta y con energía que permite el funcionamiento óptimo de una persona.
							Es un indicador de bienestar eudamónico (psicológico y social), y depende aspectos físicos y psicosociales, incluyendo en forma importante la satisfacción de las necesidades psicológicas básicas de autonomía, sentido de autoeficacia y un entorno de relaciones personales adecuadas.</p>

							<p>Usted tiene un nivel bajo de vitalidad emocional, lo que se correlaciona con afectividad negativa, mala tolerancia al dolor físico y somatización, neuroticismo, psicopatología (incluyendo ansiedad y depresión), hábitos de vida no saludables y bajo bienestar físico y mental. </p>

							<p>Lo invitamos a trabajar desde hoy para aumentar su nivel de vitalidad emocional. </p>

							<p>Dentro de las actividades que tienen evidencia favorable para aumentar la vitalidad subjetiva están el desarrollo de la autonomía y la motivación intrínseca en la elección y logro de objetivos en la vida, el alineamiento entre los talentos y fortalezas con los desafíos personales (lo que permite alcanzar lo llamado como “estado de flujo”) y la práctica de actividad física rutinaria.</p> 

							<p>Un alto nivel de vitalidad emocional se correlaciona positivamente con afectividad positiva, autoestima, extroversión, satisfacción con la vida, sentido de autorrealización, hábitos de vida saludable, buen funcionamiento físico y salud corporal y mental.</p>
							
						<?php }?>
					<?php //}?>
					
				</div>
				
		  		
		  	<?php }elseif($test_type == 'test-237'){?>
		  	
		  		<?php $test = get_field('test_realizados' , 'user_'.$usuario)?>
				
				
				<?php foreach($test as $test):?>
					<?php if($test['test_id'] == $id){?>
						
						<?php $ps = json_decode($test['detalle_preguntas']);?>
						<?php $pctr = 0?>
						<?php foreach($ps as $p):?>
						<?php $pctr++ ?>
							
							<?php  switch ($pctr) { 
								case 1:
								$sum[] = $p;
									break;
								case 2:
								$sum[] = $p;
									break;
								case 3:
								$sum[] = $p;
									break;
								case 4:
								$sum[] = $p;
									break;
								case 5:
								$sum[] = $p;
									break;
								case 6:
								$sum[] = $p;
									break;
								case 7:
								
							} ?>
						
						<?php endforeach;?>
						
					<?php }?>
				<?php endforeach?>
				
				
				
				<?php $ptje = array_sum((array)$ps)?>
				
				<?php 
				
				$prom = $ptje/15;
	
				if($prom > 4.5){$resultado = 'Alta';}
				elseif($prom > 3 && $ptje < 4.5){$resultado = 'Media';}
				elseif($prom < 4){$resultado = 'Baja';}
			
				?>
				
				
				<div class="col-md-8 col-md-offset-2 reference">
						
						<p class="lead">La Mindful Attention Awareness Scale (MAAS) evalúa la capacidad disposicional de un individuo de estar atento y consciente de la experiencia del momento presente en la vida cotidiana</p>
						
						De acuerdo a sus respuestas usted tiene una <?php echo $resultado ?> disposición al mindfulness, con un puntaje promedio de <?php echo $prom ?> puntos de un máximo de 6 puntos.
 
						
						<p>Aunque creemos tener control consciente de nuestra atención, lo que normalmente sucede es que estamos constantemente atendiendo a pensamientos acerca del pasado o del futuro o bien, reconociendo solo una pequeña porción de lo que está sucediendo en el presente.</p>
						<p>La práctica de la atención plena permite reconocer lo que está sucediendo mientras está sucediendo, enfocando nuestra mente y siendo más efectivos. Numerosos estudios también la reconocen como una práctica efectiva para reducir el estrés, aumentar la autoconciencia, reducir los síntomas físicos y psicológicos asociados al estrés y mejorar el bienestar general</p>
						
						
					<?php //}?>
					
				</div>
		  	
		  	<?php }elseif($test_type == 'test-219'){?>
				<?php $test = get_field('test_realizados' , 'user_'.$usuario)?>
				
				<?php //var_dump($test)?>
				<?php foreach($test as $test):?>
					<?php if($test['test_id'] == $id){?>
						
						<?php $ps = json_decode($test['detalle_preguntas']);?>
						<?php $pctr = 0?>
						<?php foreach($ps as $p):?>
						<?php $pctr++ ?>
							
							<?php  switch ($pctr) { 
								case 1:
								$posit[] = $p;
									break;
								case 2:
								$neg[] = $p;
									break;
								case 3:
								$posit[] = $p;
									break;
								case 4:
								$neg[] = $p;
									break;
								case 5:
								$posit[] = $p;
									break;
								case 6:
								$neg[] = $p;
									break;
								case 7:
								$neg[] = $p;
									break;
								case 8:
								$neg[] = $p;
									break;
								case 9:
								$posit[] = $p;
									break;
								case 10:
								$posit[] = $p;
									break;
								case 11:
								$neg[] = $p;
									break;
								case 12:
								$posit[] = $p;
									break;
								case 13:
								$neg[] = $p;
									break;
								case 14:
								$posit[] = $p;
									break;
								case 15:
								$neg[] = $p;
									break;
								case 16:
								$posit[] = $p;
									break;
								case 17:
								$posit[] = $p;
									break;
								case 18:
								$neg[] = $p;
									break;
								case 19:
								$neg[] = $p;
									break;
								case 20:
								$neg[] = $p;
									break;
								
							} ?>
						
						<?php endforeach;?>
						
					<?php }?>
				<?php endforeach?>
				
				<?php $pt_posit = array_sum($posit)?>
				<?php $pt_neg = array_sum($neg)?>
		
				

				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
					<p class="lead">Usted tiene una razón de emociones positivas a emociones negativas de <?php echo $pt_posit?>/<?php echo $pt_neg?> = <?php echo $pt_posit/$pt_neg?></p>
					
					<p>Emoción es toda aquella sensación y sentimiento que posee el ser humano al relacionarse con sus semejantes y con el medio en general. Se clasifican en positivas, aquellas que nos acercan al estímulo, y negativas, las que nos alejan de él.</p>


					<p>En nuestra mente, las emociones negativas como el miedo, la rabia y el desprecio, predominan por sobre las positivas. La evolución privilegió las emociones negativas porque nos permitieron el despliegue de acciones específicas frente a circunstancias de riesgo vital aumentando las probabilidades de supervivencia de nuestra especie. Por lo anterior, las emociones negativas se expresan más rápido, son más intensas y difíciles de contrarrestar, y perduran más tiempo que las emociones positivas.</p>


					<p>Las emociones positivas hicieron todo lo contrario. Tuvieron - y todavía lo tienen - el propósito de ampliar nuestras capacidades cognitivas y de comportamiento para que podamos reconocer y explorar una multitud de opciones. Nos ayudan a construir gradualmente los recursos sociales e intelectuales que promueven el crecimiento futuro. Esa es la teoría de la ampliación y construcción, descrita por la psicóloga Barbara Fredrickson, quien ha mostrado que las personas que experimentan emociones positivas son más creativas en encontrar soluciones a diversos problemas y mejoran su capacidad de aprender.</p> 


					<p>Marcial Losada, investigador chileno residente en Estados Unidos, se ha dedicado a investigar sobre equipos de trabajo de alto rendimiento. Sus investigaciones en conjunto con Barbara Fredrickson han arrojado que la proporción crítica entre emociones positivas y emociones negativas que determina personas y equipos de trabajo de alto rendimiento es 3 es a 1. Es decir, por cada emoción negativa, debiese haber 3 veces de emociones positivas en el equipo para lograr un funcionamiento óptimo.</p> 


					<p><strong>Le invitamos a revisar su resultado y realizar acciones conscientes para poner foco y registrar sus emociones negativas de manera de aumentar su razón.</strong></p>
					
				</div>

				<div class="clear separator"></div>
		  <?php }?>
		</div>
	</div>
</main>
	<?php }else{?>
		<h1>Usted no tiene permisos para ver este resultado</h1>
	<?php }?>

<?php }?>

<?php get_footer()?>