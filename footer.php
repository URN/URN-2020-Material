<head>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="University Radio Nottingham is the multi-award–winning university radio station of the University of Nottingham Students’ Union.">
  <meta name="author" content="">
  <title>URN MAIN SITE</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/vendor/fontawesome-free/css/all.min.css' ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/scss/urnportal.scss' ?>">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' ?>">
</head>   
     <!-- Footer -->
  <footer class="footer ">
  <div class="row justify-content-center">

    <!--

<nav class="navbar navbar-expand-xl navbar-light " role="navigation">--> <!-- might change to lg if it looks better -->
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
        <!--
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav justify-content-center',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>-->

    </div>
</nav>
        </div>
<p class="foot-text text-right">Website created by <a href="https://www.linkedin.com/in/dermot-newton-9469281a1/" class="foot-text">Dermot Newton</a></p>

</footer>












  <!--<footer class="footer">
          <div class="row">
              <div class="col-3">
              </div>
              <div class="col-6">
                <span class="text-muted">URN - University Radio Nottingham</span>

              </div>
              <div class="col-3">
                  <span class="text-muted">Website Designed by Dermot Newton</span>
              </div>
          </div>
          <div class="row">
              <div class="col-3">
              </div>
              <div class="col-6">
              </div>
              <div class="col-3">
                  <span class="text-muted">Head of Tech and Digital 2020/21</span>
              </div>
          </div>
          <div class="row">
              <div class="col-3">
              </div>
              <div class="col-6">
              </div>
              <div class="col-3">
                  <span class="text-muted"> Find me on Linkedin <a href=" https://www.linkedin.com/in/dermot-newton-9469281a1/">here</a>
</span>
              </div>
          </div>
          <div class="row">
              <div class="col-4">
              </div>
              <div class="col-4">
                <?php   echo '<img class="urnlogo" src="' . get_bloginfo('template_directory') . '/img/urnwhite.png" />'; ?>

              </div>
              <div class="col-4">
              </div>
          </div>
          <div class="container">

<nav class="navbar navbar-expand-xl navbar-light " role="navigation"> --><!-- might change to lg if it looks better --><!-- 
  <div class="container">
     Brand and toggle get grouped for better mobile display -->
    <?php wp_footer()?>

</body>
</html>
