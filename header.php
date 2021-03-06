<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>University Radio Nottingham</title>

  <!-- Bootstrap core CSS -->
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css'?> ">

  <!-- Custom fonts for this template -->
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(). '/vendor/fontawesome-free/css/all.min.css' ?>">
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(). '/vendor/simple-line-icons/css/simple-line-icons.css'?>">
  <link  rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
  <!-- Custom styles for this template -->


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo get_template_directory_uri(). '/vendor/jquery/jquery.min.js' ?>"></script>
  <script src="<?php echo get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo get_template_directory_uri(). '/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>
  
      <!-- Custom scripts for all pages-->
      <?php wp_head(); ?>

</head>


<div class="header-background">
  <div class="container-fluid">
    <div class="row justify-content-center" id="headerrow">
      <div class="col-md" id="uon-logo-header">
        <?php   echo '<img class="title-uon" src="' . get_bloginfo('template_directory') . '/img/uon.png" />'; ?>
      </div>
      <div class="col-md" id="sra-logo-header">
        <?php   echo '<img class="title-sra" src="' . get_bloginfo('template_directory') . '/img/sra.png" />'; ?>
      </div>
    </div>
    <div class="row justify-content-center" id="headerrow">

      <div class="just-flex">
        <?php   echo '<img class="title-logo" src="' . get_bloginfo('template_directory') . '/img/urnwhite.png" />'; ?> 
          <h1 class="website-name">University Radio Nottingham</h1> 
      </div>
    </div>      <!-- TODO make a popup radio player like university radio york or insanity radio-->
      <audio id="urnlive" src="https://live.urn1350.net/listen" preload="none"  ></audio>
        <script>
          var myAudio = document.getElementById("urnlive");
          var isPlaying = false;
            function togglePlay() {
              if (isPlaying) {
                myAudio.pause()
                $('#livebutton').removeClass('fa-pause');
                $('#livebutton').addClass('fa-play');
              } else {
                myAudio.play();
                $('#livebutton').removeClass('fa-play');
                $('#livebutton').addClass('fa-pause');
              }
            };
            myAudio.onplaying = function() {
              isPlaying = true;
            };
            myAudio.onpause = function() {
              isPlaying = false;
            };
        </script>

  </div>
    <div class="container ">
      <div class="col justify-content-center" >
        <h2 id="slogan">Your Music. Your News. Your Student Radio.</h2>
      </div>
    </div>

  <div class="header">
    <div class="row justify-content-center" id="whiteness">
      <nav class="navbar navbar-expand-xl navbar-light " role="navigation"> <!-- might change to lg if it looks better -->
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler" id="nav-id" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="toggle"><i class="fas fa-bars"></i></span>
          </button>
            <a class="navbar-brand" href="#">MENU</a>
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
</div>
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



<?php // include( 'listen-now.php' );

?>
<!--<h2 class="show-title-name"> <script> function($) </script> </h2>-->
 