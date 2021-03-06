<?php get_header()?>
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

<main class="container">
    <div class="row">

        <div class="clear separator"></div>

        <div class="col-md-8 col-sm-8 col-xs-12 single-news">
            <div id="breadcrumbs">

                <small><a href="<?php echo home_url(); ?>">Home</a> > <strong><?php echo $post->post_title?></strong></small>
            </div>

            <h3><?php echo $post->post_title?></h3>
            <p class="excerpt"><?php echo $post->post_excerpt?></p>

            <img src="<?php echo get_field('segundo_encabezado', $post->ID)?>" alt="">
            <span class="date">[ <?php echo the_time('j') ?> de <?php echo the_time('F')?>, <?php echo the_time('Y')?> ]</span>
            <?php echo apply_filters('the_content' , $post->post_content)?>
            <!-- Gallery -->
            <?php $gallery = get_field('galeria') ?>
            <?php if ($gallery){ ?>
            <div class="gallery-area">
                <h3>Galería de imágenes</h3>
                <div class="row">
                <?php 
                    foreach($gallery as $image){
                        $thumb = $image['sizes']['thumbnail'];
                        $full   = $image['url'];
                        $launcher = $launch['gal'];
                        echo '<div class="col-md-3 col-sm-3 col-xs-4"><a href="'.$full.'" rel="shadowbox[Galeria]" class="thumbnail"><img src="'.$thumb.'" alt="" class="img-responsive"></a></div>'; 
                        
                    }
                ?>
                </div>
            </div>
            <?php }?>
            <!-- End Gallery -->
        </div>

        <?php get_template_part('sidebar-inspirate'); ?>
    
    </div>
</main>


<?php get_footer()?>

