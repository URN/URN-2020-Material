<?php get_header(); ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css'?> ">

  <!-- Custom fonts for this template -->
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(). '/vendor/fontawesome-free/css/all.min.css' ?>">
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(). '/vendor/simple-line-icons/css/simple-line-icons.css'?>">
  <link  rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">

</head>

 <!-- Masthead -->
 <header class="masthead text-white text-center" id="quote-masthead">
    <div class="overlay"></div>
    <div class="container">

    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
              
            </div>
        </div><!-- END -->


        <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon  shadow-sm"id="quote-bbl"><i class="fa fa-quote-left text-white" ></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-quote">@consequat</a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        <cite title="Source Title" >Source Title</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>
        </div>
    </div>
</section>

        </div>
        </div>

        </div>

</header>
<body>






  <!-- Image Showcases -->
  <div class="row justify-content-center">

          <h1 class="entry-title">GET INVOLVED</h1>
      </div>
  <section class="showcase">
    <div class="container">
<div class="row">
<div class="col">
<p>URN aims to provide our listeners with your news, music and content. We thrive in motivating and providing a platform for upcomming stars to help create a platform to share all our perspectives, ideas and music. Whether your an aspiring muscisian, presenter or want to join the Tech Team, there is always opportunity. See the below links for more information on who to contact!</p>
</div>
<?php if(have_posts()) : while(have_posts()) : the_post();?>
  <?php the_content();?>
  <?php endwhile; else: endif;?>

  <?php
    $args = array(

        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'Article'

    );
    $_posts = new WP_Query($args);
    ?>

    <?php if($_posts->have_posts()):?>
    <div class="row mt-5">
      <?php while ($_posts->have_posts()): $_posts->the_post();?>

      <div class="col-lg-4">

      <?php if(has_post_thumbnail()):?>
      <a href="<?php the_permalink();?>">
        <img src="<?php the_post_thumbnail_url('thumb_image');?>" class= "img-fluid mb-2" alt="<?php the_title();?>">
        </a>
        <?php endif?>

      <a href="<?php the_permalink();?>">
        <h1><?php the_title();?> </h1>
        </a>
        <?php the_excerpt();?>
        </div>

      <?php endwhile;?>

    </div>

      </div>
</div>
</div>
 

    <div class="container-fluid p-0">
      <div class="row no-gutters" id="involved-box">

        <div class="col-lg-6 order-lg-2 text-white showcase-img1" >   
                  <?php if(has_post_thumbnail(110)):?>
                  <a href="<?php the_permalink();?>">
                     <img src="<?php echo get_the_post_thumbnail_url(110, 'thumb_image');?>" class= "involved-img" alt="<?php get_the_title(110);?>">
                   </a>
                  <?php endif?> 
</div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text"> 
          <div class="container">




          <h2>     <?php echo get_the_title(110);?>
          </h2>
          <p class="lead mb-0">     <?php echo get_the_excerpt(110);?>
</p>
          <button type="button" class="btn btn-primary" id="listen-again">Learn More</button>
        </div>
        </div>

      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img2">
        <?php if(has_post_thumbnail(114)):?>
                  <a href="<?php the_permalink();?>">
                     <img src="<?php echo get_the_post_thumbnail_url(114, 'thumb_image');?>" class= "involved-img" alt="<?php get_the_title(110);?>">
                   </a>
                  <?php endif?> 
        </div>
        <div class="col-lg-6 my-auto showcase-text">
        <div class="container">
              <h2>     <?php echo get_the_title(114);?></h2>
          <p class="lead mb-0">   <?php echo get_the_excerpt(114);?></p>
          <button type="button" class="btn btn-primary" id="listen-again">Learn More</button>

        </div>
      </div>
      </div>

      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img3" >
        <?php if(has_post_thumbnail(114)):?>
                  <a href="<?php the_permalink();?>">
                     <img src="<?php echo get_the_post_thumbnail_url(117, 'thumb_image');?>" class= "involved-img" alt="<?php get_the_title(110);?>">
                   </a>
                  <?php endif?> 
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <div class="container">
          <h2><?php echo get_the_title(117);?></h2>
          <p class="lead mb-0"><?php echo get_the_excerpt(117);?></p>
          <button type="button" class="btn btn-primary" id="listen-again">Learn More</button>

        </div>
      </div>
</div>
    </div>
  </section>
  <?php endif;?>


  <!-- Testimonials -->
  <div class="row justify-content-center">

          <h1 class="entry-title">HOW TO GET INVOLVED</h1>
      </div>
  <section class="testimonials text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/img/grp.jpg" alt="">
            <h5>Host a Show!</h5>
            <p class="font-weight-light mb-0">Have something your passioate about? Get in contact with Tony and join the station as a URN official presenter. Anyone can give it a go!  Click here for more info.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/img/tech2.jpg" alt="">
            <h5>Get Hands on With the Tech Team</h5>
            <p class="font-weight-light mb-0">Learn how our radio station operates and become a member of the team to code, design and engineer software, studios and audio for a global audience. We welcome any skill levels, its all about learning with us!  Click here for more info.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/img/singer.jpg" alt="">
            <h5>Partners and Collaborations</h5>
            <p class="font-weight-light mb-0">We are always excited to work and discover new partners, sponsors and musicians. So if your a growing musician or a company looking for a partnership, we'd love to collaborate. Click here for more info.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
    <!-- 
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
-->
  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>


</footer>

<?php get_footer(); ?> 
