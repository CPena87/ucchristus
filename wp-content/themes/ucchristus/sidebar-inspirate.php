        <div class="col-md-5 sidebar-content">
            <h4>Artículos Relacionados</h4>

            <?php 
                $posts = get_posts(array('post_type' => 'post' , 'numberposts' => 3));
                foreach($posts as $articulo){?>

            <div class="destacado">
                <div class="col-sm-4 col-xs-12 col-esp">
                    <?php echo get_the_post_thumbnail($articulo->ID , 'noticia' , array('class' => 'img-responsive'))?>
                </div>
                <div class="col-sm-8 col-xs-12">
                    <h2><?php echo $articulo->post_title?></h2>
                    <p><?php echo substr($articulo->post_content , 0, 82)?></p>
                    <a href="<?php echo get_permalink($articulo->ID)?>">Ver artículo</a>
                </div>
            </div>


            <?php }?>


            <div class="banner-evaluate">
                <a href="/" rel="nofollow" title="">
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/evaluate-banner.jpg" alt="">
                </a>
            </div>

        </div>