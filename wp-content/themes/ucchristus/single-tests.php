<?php get_header();?>
<?php 
$bgid = get_post_thumbnail_id();
$bgsrc = wp_get_attachment_image_src($bgid,'head', true);
?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bgsrc[0]?>); min-height:296px; background-attachment:fixed; background-size: cover;">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 pre-heading">
                <h2><?php echo $post->post_title; ?></h2>
            </div>

        </div>
    </div>
</div>

<div id="topTest">
	<div class="container">
		<div class="row">
			
			<?php echo apply_filters('the_content' , $post->post_content)?>
			
		</div>
	</div>
</div>

<div id="testMain">
	<div class="container">
		<div class="row">

			<?php if(is_user_logged_in()){?>
	
				<?php $user = wp_get_current_user()?>

				<?php if($post->ID == 150){?>
				
					<?php $preguntas = get_field('preguntas')?>
					<?php $notas = get_field('notas')?>

					<form id="testF">
					<?php $pcount = 0?>
					<?php $t = count($preguntas);?>
					<?php foreach($preguntas as $pregunta):?>
					<?php $pcount++ ?>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<ul>
							<?php foreach($notas as $nota):?>
								<li><input type="radio" name="p-<?php echo $pcount?>" data-p="<?php echo $pcount?>" data-val="<?php echo $nota['valor']?>" id="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"> <label for="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><?php echo $nota['descripcion']?></label></li>
							<?php endforeach;?>
							</ul>
							<div class="clear"></div>
							<div class="steper" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+1?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
					</div>

					<script>
						$('input[name = "p-<?php echo $pcount?>"]').click(function () {
							console.log($(this).attr('data-val'))
							p_<?php echo $pcount?> = $(this).attr('data-val');
							if ($(this).prop('checked')) {
								$("#sgte-<?php echo $pcount?>").fadeIn('slow');
							} 
						});
					</script>

					<?php endforeach;?>
					</form>
					<div class="pregunta" id="pregunta-<?php echo $t+1?>">

						<p>Todo bien, </p>
						<div class="btn btn-success" onClick="enviaTest('test-<?php echo $post->ID?>')">Enviar cuestionario y ver resultado</div>

					</div>

					<div class="aviso"></div>
				
				<?php }elseif($post->ID == 236){?>
					
					<?php $preguntas = get_field('preguntas')?>
					<?php $notas = get_field('notas')?>

					<form id="testF">
					<?php $pcount = 0?>
					<?php $t = count($preguntas);?>
					<?php foreach($preguntas as $pregunta):?>
					<?php $pcount++ ?>
					<?php if($pcount == 1){?>
					<div class="col-md-12 col-sm-12 col-xs-12">
					
						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<ul>
							<?php foreach($notas as $nota):?>
								<li><input type="radio" name="p-<?php echo $pcount?>" data-p="<?php echo $pcount?>" data-val="<?php echo $nota['valor']?>" id="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"> <label for="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><?php echo $nota['descripcion']?></label></li>
							<?php endforeach;?>
							</ul>
							<div class="clear"></div>
							
							<div class="steper ppp1" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+1?>').slideDown()">Siguiente pregunta</div>
							</div>
							
							<div class="steper ppp1" id="sgte-<?php echo $pcount?>b" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+2?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
						
					</div>

					<script>
						
						$('input[name = "p-<?php echo $pcount?>"]').click(function () {
							console.log($(this).attr('data-val'))
							p_<?php echo $pcount?> = $(this).attr('data-val');
							
							
							if ($(this).prop('checked') && p_<?php echo $pcount?> == 2) {
								$('.steper.ppp1').css('display' , 'none');
								$("#sgte-<?php echo $pcount?>").fadeIn('slow');
								
							} else{
								$('.steper.ppp1').css('display' , 'none');
								$("#sgte-<?php echo $pcount.'b'?>").fadeIn('slow');
								p_<?php echo $pcount+1?> = '';
							}
						});
						
					</script>
					<?php }elseif($pcount == 2){?>
					<div class="col-md-12 col-sm-12 col-xs-12">

						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<select name="p-<?php echo $pcount?>" id="p-<?php echo $pcount?>">
								<option value="1" data-val="1">6 meses</option>
								<option value="2" data-val="2">1 año</option>
								<option value="3" data-val="3">2 años o más</option>
							</select>
							
							<div class="clear"></div>
							<div class="steper" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+2?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
					</div>
					
					<script>
						$('select#p-<?php echo $pcount?>').change(function(){
							console.log($('select#p-<?php echo $pcount?> option:selected').attr('data-val'));
							p_<?php echo $pcount?> = $('select#p-<?php echo $pcount?> option:selected').attr('data-val');
							$("#sgte-<?php echo $pcount?>").fadeIn('slow');
							p_<?php echo $pcount+1?> = '';
						})
							
					</script>
					
					<?php }elseif($pcount == 3){?>
					<div class="col-md-12 col-sm-12 col-xs-12">

						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<select name="p-<?php echo $pcount?>" id="p-<?php echo $pcount?>">
								<option value="1" data-val="1">Entre 1 y 2</option>
								<option value="2" data-val="2">Entre 2 y 5</option>
								<option value="3" data-val="3">Más de 5 cigarrillos</option>
							</select>
							
							<div class="clear"></div>
							<div class="steper" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+1?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
					</div>
					
					<script>
						$('select#p-<?php echo $pcount?>').change(function(){
							console.log($('select#p-<?php echo $pcount?> option:selected').attr('data-val'));
							p_<?php echo $pcount?> = $('select#p-<?php echo $pcount?> option:selected').attr('data-val');
							$("#sgte-<?php echo $pcount?>").fadeIn('slow');
						})
							
					</script>
					
					<?php }?>
					
					<?php endforeach;?>
					</form>
					<div class="pregunta" id="pregunta-<?php echo $t+1?>">

						<p>Todo bien, </p>
						<div class="btn btn-success" onClick="enviaTest('test-<?php echo $post->ID?>')">Enviar cuestionario</div>

					</div>

					<div class="aviso"></div>
					
				<?php }elseif($post->ID == 222){?>
					
					<?php $preguntas = get_field('preguntas')?>
					<?php $notas = get_field('notas')?>

					<form id="testF">
					<?php $pcount = 0?>
					<?php $t = count($preguntas);?>
					<?php foreach($preguntas as $pregunta):?>
					<?php $pcount++ ?>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<ul>
							<?php foreach($notas as $nota):?>
								<li><input type="radio" name="p-<?php echo $pcount?>" data-p="<?php echo $pcount?>" data-val="<?php echo $nota['valor']?>" id="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"> <label for="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><?php echo $nota['descripcion']?></label></li>
							<?php endforeach;?>
							</ul>
							<div class="clear"></div>
							<div class="steper" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+1?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
					</div>

					<script>
						$('input[name = "p-<?php echo $pcount?>"]').click(function () {
							console.log($(this).attr('data-val'))
							p_<?php echo $pcount?> = $(this).attr('data-val');
							if ($(this).prop('checked')) {
								$("#sgte-<?php echo $pcount?>").fadeIn('slow');
							} 
						});
					</script>

					<?php endforeach;?>
					</form>
					<div class="pregunta" id="pregunta-<?php echo $t+1?>">

						<p>Todo bien, </p>
						<div class="btn btn-success" onClick="enviaTest('test-<?php echo $post->ID?>')">Enviar cuestionario y ver resultado</div>

					</div>

					<div class="aviso"></div>
					
				<?php }elseif($post->ID == 225){?>
					
					<?php $preguntas = get_field('preguntas')?>
					<?php $notas = get_field('notas')?>

					<form id="testF">
					<?php $pcount = 0?>
					<?php $t = count($preguntas);?>
					<?php foreach($preguntas as $pregunta):?>
					<?php $pcount++ ?>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<ul>
							<?php foreach($notas as $nota):?>
								<li><input type="radio" name="p-<?php echo $pcount?>" data-p="<?php echo $pcount?>" data-val="<?php echo $nota['valor']?>" id="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"> <label for="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><?php echo $nota['descripcion']?></label></li>
							<?php endforeach;?>
							</ul>
							<div class="clear"></div>
							<div class="steper" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+1?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
					</div>

					<script>
						$('input[name = "p-<?php echo $pcount?>"]').click(function () {
							console.log($(this).attr('data-val'))
							p_<?php echo $pcount?> = $(this).attr('data-val');
							if ($(this).prop('checked')) {
								$("#sgte-<?php echo $pcount?>").fadeIn('slow');
							} 
						});
					</script>

					<?php endforeach;?>
					</form>
					<div class="pregunta" id="pregunta-<?php echo $t+1?>">

						<p>Todo bien, </p>
						<div class="btn btn-success" onClick="enviaTest('test-<?php echo $post->ID?>')">Enviar cuestionario y ver resultado</div>

					</div>

					<div class="aviso"></div>
					
				<?php }elseif($post->ID == 224){?>
				
					<?php $preguntas = get_field('preguntas')?>
					<?php $notas = get_field('notas')?>

					<form id="testF">
					<?php $pcount = 0?>
					<?php $t = count($preguntas);?>
					<?php foreach($preguntas as $pregunta):?>
					<?php $pcount++ ?>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<ul>
							<?php foreach($notas as $nota):?>
								<li><input type="radio" name="p-<?php echo $pcount?>" data-p="<?php echo $pcount?>" data-val="<?php echo $nota['valor']?>" id="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"> <label for="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><?php echo $nota['descripcion']?></label></li>
							<?php endforeach;?>
							</ul>
							<div class="clear"></div>
							<div class="steper" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+1?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
					</div>

					<script>
						$('input[name = "p-<?php echo $pcount?>"]').click(function () {
							console.log($(this).attr('data-val'))
							p_<?php echo $pcount?> = $(this).attr('data-val');
							if ($(this).prop('checked')) {
								$("#sgte-<?php echo $pcount?>").fadeIn('slow');
							} 
						});
					</script>

					<?php endforeach;?>
					</form>
					<div class="pregunta" id="pregunta-<?php echo $t+1?>">

						<p>Todo bien, </p>
						<div class="btn btn-success" onClick="enviaTest('test-<?php echo $post->ID?>')">Enviar cuestionario y ver resultado</div>

					</div>

					<div class="aviso"></div>
				
				<?php }elseif($post->ID == 237){?>
				
					<?php $preguntas = get_field('preguntas')?>
					<?php $notas = get_field('notas')?>

					<form id="testF">
					<?php $pcount = 0?>
					<?php $t = count($preguntas);?>
					<?php foreach($preguntas as $pregunta):?>
					<?php $pcount++ ?>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<ul>
							<?php foreach($notas as $nota):?>
								<li><input type="radio" name="p-<?php echo $pcount?>" data-p="<?php echo $pcount?>" data-val="<?php echo $nota['valor']?>" id="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"> <label for="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><?php echo $nota['descripcion']?></label></li>
							<?php endforeach;?>
							</ul>
							<div class="clear"></div>
							<div class="steper" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+1?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
					</div>

					<script>
						$('input[name = "p-<?php echo $pcount?>"]').click(function () {
							console.log($(this).attr('data-val'))
							p_<?php echo $pcount?> = $(this).attr('data-val');
							if ($(this).prop('checked')) {
								$("#sgte-<?php echo $pcount?>").fadeIn('slow');
							} 
						});
					</script>

					<?php endforeach;?>
					</form>
					<div class="pregunta" id="pregunta-<?php echo $t+1?>">

						<p>Todo bien, </p>
						<div class="btn btn-success" onClick="enviaTest('test-<?php echo $post->ID?>')">Enviar cuestionario y ver resultado</div>

					</div>

					<div class="aviso"></div>
				
				<?php }elseif($post->ID == 219){?>
				
					<?php $preguntas = get_field('preguntas')?>
					<?php $notas = get_field('notas')?>

					<form id="testF">
					<?php $pcount = 0?>
					<?php $t = count($preguntas);?>
					<?php foreach($preguntas as $pregunta):?>
					<?php $pcount++ ?>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="pregunta" id="pregunta-<?php echo $pcount;?>" style="">
							<h2><?php echo $pregunta['pregunta']?></h2>

							<ul>
							<?php foreach($notas as $nota):?>
								<li><input type="radio" name="p-<?php echo $pcount?>" data-p="<?php echo $pcount?>" data-val="<?php echo $nota['valor']?>" id="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"> <label for="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><?php echo $nota['descripcion']?></label></li>
							<?php endforeach;?>
							</ul>
							<div class="clear"></div>
							<div class="steper" id="sgte-<?php echo $pcount?>" style="display: none">
								<div class="btn btn-success" onClick="$('#pregunta-<?php echo $pcount?>').slideUp();$('#pregunta-<?php echo $pcount+1?>').slideDown()">Siguiente pregunta</div>
							</div>

						</div>
					</div>

					<script>
						$('input[name = "p-<?php echo $pcount?>"]').click(function () {
							console.log($(this).attr('data-val'))
							p_<?php echo $pcount?> = $(this).attr('data-val');
							if ($(this).prop('checked')) {
								$("#sgte-<?php echo $pcount?>").fadeIn('slow');
							} 
						});
					</script>

					<?php endforeach;?>
					</form>
					<div class="pregunta" id="pregunta-<?php echo $t+1?>">

						<p>Todo bien, </p>
						<div class="btn btn-success" onClick="enviaTest('test-<?php echo $post->ID?>')">Enviar cuestionario y ver resultado</div>

					</div>

					<div class="aviso"></div>
				
				<?php }?>
				
			<?php }?>
			
		</div>
	</div>
</div>


<script>
$( document ).ready(function() {
	$('input').attr('checked' , false)
	console.log('meh')
});

function enviaTest(tid) {
	$.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ 
			action : 'enviaTest' ,
			test : tid , 
			user : <?php echo $current_user->ID ?> , 
			questions : {
			<?php $qu = 0;?>
			<?php foreach($preguntas as $q):?>
			<?php $qu++;?>
			"p_<?php echo $qu?>" : p_<?php echo $qu?>,
			<?php endforeach;?>
			}
		}),
		success: function(data){
			
			console.log(data);
			console.log('ya se envió y mandó respuesta');
			$('.aviso').html(data)

			
		}, 
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}
	});
}
</script>

<?php get_footer();?>