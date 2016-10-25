<?php get_header()?>
<?php 
$bgid = get_post_thumbnail_id();
$bgsrc = wp_get_attachment_image_src($bgid,'head', true);
?>

<div id="top" class="overlayed" style="background-image: url(<?php echo $bgsrc[0]?>); min-height:296px; background-attachment:fixed;">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 pre-heading">
                <h2><?php echo $post->post_title; ?></h2>
            </div>

        </div>
    </div>
</div>

<main class="container">
    <div class="row">

        <div class="clear separator"></div>

        <div class="col-md-7 single-news">
            <div id="breadcrumbs">
                <small>Categoría > <strong><?php echo $post->post_title?></strong></small>
            </div>

            <h3><?php echo $post->post_excerpt?></h3>
            <p class="excerpt"><?php echo $post->post_excerpt?></p>

            <img src="<?php echo get_field('segundo_encabezado', $post->ID)?>" alt="">
            <span class="date">[ <?php echo the_time('j') ?> de <?php echo the_time('F')?>, <?php echo the_time('Y')?> ]</span>
            <?php echo $post->post_content?>
        </div>

        <?php get_template_part('sidebar-inspirate'); ?>
    
    </div>
</main>


<?php get_footer()?>

