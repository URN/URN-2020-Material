<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php wp_head();?>

</head>




<body>


<header role="banner">
  <img id="logo-main" src="/wp-content/themes/URN2020Theme/images/LOGO.png" alt="Logo Thing main logo">


<nav class="navbar navbar-expand-lg navbar-light bg-transparent">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarMenu">
    <ul class="navbar-nav mr-auto">   </ul>
    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">URN</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">Get Involved</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">Music</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">Speech</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">History</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">Listen Again</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink( get_page_by_path( 'About Us' ) ) ?>" class="nav-link">Listen Live</a>
                    </li>
    </ul>
<!--
<?php wp_nav_menu(
    array(
        'theme_location' => 'Nav-General',   // adds the desired nav bar to this location
        'menu_class'     => 'navbar-nav'
        )
);
?>
-->
</nav>  
</div>


</header>