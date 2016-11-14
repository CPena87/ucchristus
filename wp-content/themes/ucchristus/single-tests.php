<?php get_header();?>

<?php if(is_user_logged_in()){?>
	
	<?php $user = wp_get_current_user()?>
	<?php //$tests = get_field('test_realizados' , $current_user->ID);?>
	
	<h1><?php echo $post->post_title?></h1>
	<?php $preguntas = get_field('preguntas')?>
	<?php $notas = get_field('notas')?>
	
	
	<?php $pcount = 0?>
	<?php foreach($preguntas as $pregunta):?>
	<?php $pcount++ ?>
	<div class="pregunta">
		<h2><?php echo $pregunta['pregunta']?></h2>
		
		<ol>
		<?php foreach($notas as $nota):?>
			<li><input type="radio" name="p-<?php echo $pcount?>" data-val="<?php echo $nota['valor']?>" id="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><label for="p-<?php echo $pcount?>-<?php echo $nota['valor']?>"><?php echo $nota['descripcion']?></label></li>
		<?php endforeach;?>
		</ol>
		
	</div>
	<?php endforeach;?>
	
<?php }?>


<?php get_footer();?>