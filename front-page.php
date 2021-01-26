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

<body>

  <!-- Masthead -->
  <header class="masthead text-white text-center" id="header-masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5"></h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

        <!-- 
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
          -->
        </div>
      </div>
    </div>
  </header>
  <div class="row justify-content-center">

          <h1 class="entry-title">LIVE ON AIR</h1>
      </div>
    
  </div>

<div class="main-content">
  <div class="row">
    <div class="col-md-8">
      <div class="box-container-nowplaying">
        <div class="box1-content content">
          <div class="container-sm">
            <h1 class="display-4">NOW PLAYING</h1>
              <div class="row">
                <div class="col">
                  <div class="text-left">The URN Show - Kathryn Embree 
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="text-left">11am-12am
                  </div>
                </div>
              </div>
              <button class="right-button"> <a class="presenter-link" href="https://www.facebook.com/people/Kathryn-Embree/100006144706858" target="_blank"> CONTACT PRESENTERS </a> </button>
          </div>  
        </div>
      <div class="box1-side">
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
       <!-- <img class="Kath" src="<?php echo get_template_directory_uri(); ?>/Holly.JPG">-->
       <li class="nav-item">

        <a class="but" onclick="togglePlay()">
    <i class="fas fa-fw fa-play  fa-10x" onclick="togglePlay() "id="livebutton2"></i>
</a>
</li>
        <!--<img class="play" src="<?php echo get_template_directory_uri(); ?>/play2.png">-->


      </div>
    </div>
    <div class="box-container-upnext">
      <div class="box1-content content">  
        <div class="container">
          <div class="display-4"> UP NEXT
            </div>
              <div class="row">
                <div class="col">
                  <div class="text-left">URN Lockdown - Flora Wordie 
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col">
                  <div class="text-left">11am-12am</div>
                </div>
            </div>
          <!--  <button class="right-button"> <a class="presenter-link" href="https://www.facebook.com/people/Kathryn-Embree/100006144706858" target="_blank"> CONTACT PRESENTERS </a> </button> -->
        </div>  <!-- Div for container class-->
      </div>
      <div class="row">
        <div class="col-11.8">
          <div class="box1-side">
            <div class="text-center">
              Set Reminder
            </div>
          <div class="divider">
            <div class="text-center">
              Full Schedule
            </div>
          </div>
          <!-- <img class="Kath" src="<?php echo get_template_directory_uri(); ?>/Holly.JPG"> -->
        </div>
      </div>
    </div>

    <!--  <div class="row">
      <div class="col-0.2">
        <div class="fullSchedule">
          <button class="right-button"> <a class="presenter-link" href="https://www.facebook.com/people/Kathryn-Embree/100006144706858" target="_blank"> CONTACT PRESENTERS </a> </button>
        </div>
      </div>
      </div>-->

     <div class="col-3">
      <button type="button" class="btn btn-primary">Block level button</button>
      <!--    <button class="right-button"> <a class="presenter-link" href="https://www.facebook.com/people/Kathryn-Embree/100006144706858" target="_blank"> Shows of the Month  </a> </button>-->
      </div>

  </div>
  
</div>



</div>
</div> <!-- div for all content that has white background-->

    <!-- ⟶ -->

  
  <!-- Icons Grid -->
 <!--
 <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->


  <!-- Image Showcases -->
  <div class="your-urn-section">

  <div class="row justify-content-center">
          <h1 class="entry-title-alt">YOUR URN</h1>
      </div>
  <section class="showcase">
<div class="row">
<div class="col">
  
<?php if(have_posts()) : while(have_posts()) : the_post();?>
  <?php endwhile; else: endif;?>

  <?php
    $args = array(

        'post_type' => 'post',
        'posts_per_page' => 3

    );
    $_posts = new WP_Query($args);
    ?>

    <?php if($_posts->have_posts()):?>
    <div class="row mt-5">
      <?php while ($_posts->have_posts()): $_posts->the_post();?>

      <div class="col-lg-4">

      <?php if(has_post_thumbnail()):?>
      <a href="<?php the_permalink();?>">
      <div class="container">
      <div class="text-center">
        <img src="<?php the_post_thumbnail_url('thumb_image');?>" class= "img-fluid mb-2" alt="<?php the_title();?>">
        </a>
        </div>
        <?php endif?>

      <a href="<?php the_permalink();?>">
        <h1 class="post_title"><?php the_title();?> </h1>
        </a>
        <h4 class="post_excerpt"><?php the_excerpt();?></h4>
        </div></div>

      <?php endwhile;?>

    </div>

      </div>

</div>

<div class="text-center">
<a class="but" href="<?php echo site_url('/culture'); ?>">
    <h4 class="read-more"> Read More</h4>
<i class="fas fa-angle-double-down  fa-3x"  id = "see-more-btn"></i>
</div>
</a>
</div>
 
</div>

  </section>
  

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
  
    <a class="but" href="<?php echo site_url('/get-involved'); ?>">
    <h4 class="read-more"> Read More</h4>
<i class="fas fa-angle-double-down  fa-3x"  id = "see-more-btn"></i>
</a>
  </section>
  <?php get_footer(); ?> 


      <?php endif;?>


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


