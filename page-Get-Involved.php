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
                    <p class="mb-0 mt-2 font-italic">"URN has given me the unique opportunity to explore a passion I did not think I could reach. The people at URN are so welcoming that any worry or insecurity are forgotten once you step into a studio, meeting or put on the headphones. I storngly reccomend anyone to join URN to guarentee a memorable Univeristy experience. <a href="https://www.linkedin.com/in/dermot-newton-9469281a1/" target="_blank" class="text-quote">@dermot</a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Dermot Newton, 
                        <cite title="Source Title" >Head of Tech and Digital 2020/21</cite>
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

                    </div>
                    </div>
 
<?php if(have_posts()) : while(have_posts()) : the_post();?>
  <?php the_content();?>
  <?php endwhile; else: endif;?>
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
</p>          <div class="involved-btn">

          <button type="button" class="btn btn-primary" id="listen-again">Learn More</button>
        </div>
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
          <div class="involved-btn">

          <button type="button" class="btn btn-primary" id="listen-again">Learn More</button>
        </div>
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
          <div class="involved-btn">
          <button type="button" class="btn btn-primary" id="listen-again">Learn More</button>
          </div>

        </div>
      </div>
</div>
    </div>
  </section>

  <section>
General Inquieries 

        </section>


  
<?php get_footer(); ?> 
