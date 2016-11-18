        <div class="col-md-4 col-sm-4 col-xs-12 sidebar-events">
            <h4>Eventos Pasados</h4>

            <?php 
                $eventos = get_posts(array('post_type' => 'eventos' , 'numberposts' => 1, 'post__not_in' ));
                foreach($events as $evento){?>

            <div class="destacado">
                <div class="col-sm-4 col-xs-12 col-esp">
                    <?php echo get_the_post_thumbnail($event->ID , 'evento' , array('class' => 'img-responsive'))?>
                </div>
                <div class="col-sm-8 col-xs-12">
                    <h2><?php echo $evento->post_title?></h2>
                    <p><?php echo substr($evento->post_content , 0, 82)?></p>
                    <a href="<?php echo get_permalink($evento->ID)?>">Ver más <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
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