<footer class="purple foot-leadership">
	<div class="container">
    <div class="row">

      <h2>Liderazgo Médico UC</h2>

      <?php wp_nav_menu( array( 'container' => 'none', 'theme_location' => 'secondary' ) ); ?>
      
      <div class="col-md-12 newsletter col-esp">
        <form action="" class="">
          <div class="col-md-5 col-sm-5 col-xs-12 col-esp invite">
            <strong>Newsletter</strong>
            <span>Reciba nuestras actualizaciones</span>
          </div>
          <div class="col-md-4 col-sm-5 col-xs-12 form-mail">
            <?php echo do_shortcode('[contact-form-7 id="24" title="Envío mail"]');?>
          </div>
        </form>
      </div>

      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-12 brand col-esp foot-list">
        <ul>
          <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo_footer.png" alt=""></a></li>
          <li><a href="<?php echo home_url(); ?>"><img style="max-width: 155px;" src="<?php echo get_bloginfo('template_directory');?>/images/logo_ucwhite.png" alt=""></a></li>
        </ul>
      </div>

      <div class="clear miniseparator"></div>

    </div>
  </div>
</footer>

<address>
  <div class="container">
    <div class="row">
      <small>©2016 Programa Liderazgo Médico UC-Christus</small>
    </div>
  </div>
</address>

</body>
<?php wp_footer()?>
<script>
  jQuery(function () {
    $('[data-toggle="tooltip"]').tooltip({delay: { "show": 350, "hide": 100 }})
  })
</script>
</html>