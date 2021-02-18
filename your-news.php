<?php 
/**
* Template Name: your-news
* Description: Displays all posts
*/
get_header(); ?>

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

  <!-- Page Content -->
  
<?php if(have_posts()) : while(have_posts()) : the_post();?>
  <?php endwhile; else: endif;?>

  <?php
    $args = array(

        'post_type' => 'post',
        'category_name' => 'Article'


    );
    $_posts = new WP_Query($args);
    ?>


      

<div class="row justify-content-center">
          <h1 class="entry-title">YOUR NEWS</h1>
      </div>
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      
      <div class="col-md-8">

        <h1 class="my-4">
          <small></small>
        </h1>

        <!-- Blog Post -->
        
  <?php if($_posts->have_posts()):?>
      <?php while ($_posts->have_posts()): $_posts->the_post();?>
        <div class="card mb-4">
        <h1 class="my-4">
 <?php the_title();?></h1>
          <img class="card-img-top"src="<?php the_post_thumbnail_url('thumb_image');?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text"><?php the_excerpt()?></p>
            <a href="<?php the_permalink();?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">   Posted on <?php echo get_the_date();?>
            <a href="#">Written by <?php echo get_the_author(); ?></a>
          </div>
        </div>

        <?php endwhile;?>

<?php endif;?>
      
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget 
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>-->

        <!-- Categories Widget -->
        <div class="sticky-top">
        <div class="card my-4">
          <h5 class="card-header" id="news-card-title">Check out our Monthly Discounts</h5>
          <div class="card-body"id="news-card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header" id="news-card-title2">Want to write articles?</h5>
          <div class="card-body" id="news-card-body">
           <p> You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
  </p> <a href="<?php echo site_url('/host-a-show'); ?>"> <button type="button" class="btn btn-primary" id="listen-again" >Learn More</button></a>

          </div>
        </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  
  <!-- /.container -->

 <?php get_footer(); ?> 
