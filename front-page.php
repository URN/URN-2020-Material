<?php get_header(); ?>


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
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">

</head>
<body>

<div id = "hero">
  <video loop muted autoplay poster="">
    <source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" alt="" type="video/mp4"></source>
 </video>


  <?php $minimise = is_home() || is_page( 'stream' ) ? '' : 'display: none;' ?>
  <?php $minimiseT = is_home() ? 'Shrink' : 'Expand' ?>
  <?php $btn = is_page( 'stream' ) ? 'display: none;' : '' ?>
<div id="listen-now">   
 <div class="content">
  <div class="container">
   <div class="card mx-auto " style="max-width: 840px;" id= "now-playing-full-card">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="card-body " id="now-playing-card-body">
            <h5 class="card-title text-center" id="now-playing-upnext-title">NOW PLAYING</h5>
            <h1 class="show-title-name">URN Live</h1>
            <h3 class="show-title-time">24/7</h3>
            <button class="right-button" id="contact-presenters"> <a class="presenter-link" href="<?php echo site_url('/schedule'); ?>"> FULL SCHEDULE </a> </button>
            <button class="right-button" id="listen-mob"> <a class="presenter-link" href="<?php echo site_url('/stream'); ?>" target="_blank"> LISTEN LIVE</a> </button>
          </div>
        </div>
      <div class="col-md-4">
        <span  alt=""  class="show-image" alt="..." id="presenterIMG">
          <div class="card-img-overlay">
            <audio id="urnlive" src="https://live.urn1350.net/listen" preload="none" ></audio>
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
           <!-- <a class="but" onclick="togglePlay()">
              <i class="fas fa-fw fa-play  fa-10x" onclick="togglePlay() "id="livebutton2"></i>
            </a>-->
            <a class="but2" onclick="window.open('<?php  echo site_url('/stream'); ?>' ,'_blank')">
              <img src="<?php echo get_template_directory_uri(); ?>/img/urnwhite.png" alt=""  class="card-img" alt="..." id="PlayURN">
            </a>
          </div>
      </div>
    </div>
  </div>
 </div> 
</div>


  <!-- NEWS SECTION -->
<div class="your-urn-section">
  <div class="d-flex justify-content-center">
    <div class="row justify-content-center" id="whiteness">
      <h1 class="entry-title-alt">YOUR URN</h1>
    </div>
  </div>

  <section class="showcase" id="whiteness">
    <div class="row" id="whiteness">
      <div class="col" >
  
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
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
          <div class="row mt-5"  >
            <?php while ($_posts->have_posts()): $_posts->the_post();?>
            <div class="col-lg-4" >
              <?php if(has_post_thumbnail()):?>
              <a href="<?php the_permalink();?>">
                <div class="container" >
                  <div class="text-center" >
                    <img src="<?php the_post_thumbnail_url('thumb_image');?>" class= "img-fluid mb-2 ml-3" alt="<?php the_title();?>">
                  </div>
              <?php endif?>
              <a href="<?php the_permalink();?>">
              <h1 class="post_title"><?php the_title();?> </h1>
              <h4 class="post_excerpt" id="post_excerpt"><?php the_excerpt();?></h4>
                </div>
            </div>
            <?php endwhile;?>
          </div>
      </div>
    </div>

  <div class="text-center">
    <a class="but" href="<?php echo site_url('/culture'); ?>">
      <h4 class="read-more"> Read More</h4>
      <i class="fas fa-angle-double-down  fa-3x"  id = "see-more-btn"></i>
  </div>  
</div>
</section>
  
  <!-- GET INVOLVED -->
  <div class="d-flex justify-content-center">
    <div class="row justify-content-center" id="front-involved">
      <h1 class="entry-title">HOW TO GET INVOLVED</h1>
    </div>
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
    
      <a class="but" href="<?php echo site_url('/get-involved'); ?>">
      <h4 class="read-more"> Read More</h4>
  <i class="fas fa-angle-double-down  fa-3x"  id = "see-more-btn"></i>
  </a>
    </section>
    <?php get_footer(); ?> 


        <?php endif;?>




