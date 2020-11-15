<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="University Radio Nottingham is the multi-award–winning university radio station of the University of Nottingham Students’ Union.">
  <meta name="author" content="">
  <title>URN MAIN SITE</title>


  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/vendor/fontawesome-free/css/all.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/scss/urnportal.scss' ?>">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' ?>">
  
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' ?>">


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo get_template_directory_uri(). '/vendor/jquery/jquery.min.js' ?>"></script>
  <script src="<?php echo get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo get_template_directory_uri(). '/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>
      <!-- Custom scripts for all pages-->
  <script src="<?php echo get_template_directory_uri(). '/js/urnportal.js' ?>"></script>


</head>

<div class="header-background">
  
<div class="container">

  <div class="row">
        <div class="col-lg-3">
          <h1></h1>
        </div>
        <div class="col-lg-9">
           <?php   echo '<img class="title-logo" src="' . get_bloginfo('template_directory') . '/img/title-logo.jpg" />'; ?>
        </div>
       
  </div>
  <!-- 
  <div class="row">
        <div class="col-lg-3">
          <h1></h1>
        </div>
        <div class="col-lg-9">
        </div>
       
  </div>-->
</div>



<nav class="navbar navbar-expand-xl navbar-light " role="navigation"> <!-- might change to lg if it looks better -->
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
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
        ?>
    </div>
</nav>

</div>











<!--

  <div class="header-bar">
  <nav class="navbar navbar-light  ">
    
    <div class="container"> -->
   <!-- <a class="navbar-brand" href="#"><img class="logo-nav" src="/urnwhite.png" alt="add logo"></a> -->

<!-- 
<nav id="nav-head" class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
</div>
<div class="navbar-collapse collapse ">

<?php
// Primary navigation menu.
/* wp_nav_menu( array(
  'menu'              => 'header-menu',
  'theme_location'  => 'header-menu',
  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
  'container'       => 'false',

  'menu_class'      => 'navbar-navbar-default', 
   'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker()),
 );*/
?>

</div>

<?php //endif; ?>
      <a class="btn btn-primary" href="#">LISTEN LIVE</a>
    </div>
    </div>

-->
</html>