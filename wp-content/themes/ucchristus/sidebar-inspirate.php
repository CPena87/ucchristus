        <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12 sidebar-content">
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
                    <a href="<?php echo get_permalink($articulo->ID)?>">Ver más <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
                </div>
            </div>


            <?php }?>

            <?php
                if ( is_user_logged_in() ) {?>
                <div class="banner-evaluate">
                    <a href="<?php echo home_url();?>/evalua-como-estas" rel="nofollow" title="">
                        <img src="<?php echo get_bloginfo('template_directory')?>/images/evaluate-banner.jpg" alt="">
                    </a>
                </div>
                <?php } else { ?>
                <div class="banner-evaluate">
                    <a href="#pt-login" rel="nofollow" title="">
                        <img src="<?php echo get_bloginfo('template_directory')?>/images/registrate-banner.jpg" alt="">
                    </a>
                </div>
            <?php }?>
            

        </div>