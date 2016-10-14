<?php get_header('insider')?>
<?php 
$bgid = get_post_thumbnail_id();
$bgsrc = wp_get_attachment_image_src($bgid,'headingpage', true);
?>

<main class="container principal single-news">
    <div class="row">

        <div class="col-md-10 col-md-offset-1 liner-bottom bajada">
            <h2><?php echo $post->post_title?></h2>
        </div>
        
        <div class="clear separator"></div>

        <div class="col-md-5 col-md-offset-1 intro-content">
            <img src="<?php echo $bgsrc[0]?>" alt="<?php echo $post->post_title; ?>">
        </div>

        <div class="col-md-5  hard-content">
            <h3><?php echo $post->post_excerpt?></h3>
        </div>

        <div class="col-md-8 col-md-offset-2 hard-content">
            <p><?php echo $post->post_content?></p>
        </div>
    </div>
</main>


<?php get_footer('insider')?>