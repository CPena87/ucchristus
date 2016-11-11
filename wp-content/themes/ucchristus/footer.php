<footer class="purple foot-leadership">
	<div class="container">
    <div class="row">

      <h2>Liderazgo médico</h2>

      <?php wp_nav_menu( array( 'container' => 'none', 'theme_location' => 'secondary' ) ); ?>
      
      <div class="col-md-12 newsletter">
        <form action="" class="col-sm-8 col-xs-12">
          <div class="col-sm-6 col-xs-12 col-esp invite">
            <strong>Newsletter</strong>
            <span>Reciba nuestras actualizaciones</span>
          </div>
          <div class="col-sm-6 col-xs-12 form-mail">
            <?php echo do_shortcode('[contact-form-7 id="24" title="Envío mail"]');?>
          </div>
        </form>
        <div class="col-sm-4 col-xs-12 brand col-esp">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo_footer.png" alt=""></a>
        </div>
      </div>

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