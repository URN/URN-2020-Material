<?php 
/**
* Template Name: get-involved
* Description: Displays get involved
*/
get_header(); ?>

<head>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="University Radio Nottingham is the multi-award–winning university radio station of the University of Nottingham Students’ Union.">
  <meta name="author" content="">
  <title>University Radio Nottingham</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/vendor/fontawesome-free/css/all.min.css' ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/scss/urnportal.scss' ?>">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' ?>">
  
  <!-- Custom fonts for this template -->
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(). '/vendor/fontawesome-free/css/all.min.css' ?>">
  <link  rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(). '/vendor/simple-line-icons/css/simple-line-icons.css'?>">
  <link  rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

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
  <div id="white-urn-back">
    <div class="row justify-content-center" id="whiteness">
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
  </div>
 
  <?php if(have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
    <?php endwhile; else: endif;?>
      <div class="container-fluid p-0">
        <div class="row no-gutters" id="involved-box">
<!-- Music section-->
          <div class="col-lg-6 order-lg-2 text-white showcase-img1" >   
            <?php if(has_post_thumbnail( get_page_by_path( 'for-musicians-and-artists', OBJECT, 'post' ) )):?>
              <a href="<?php the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url( get_page_by_path( 'for-musicians-and-artists', OBJECT, 'post' ), 'thumb_image');?>" class= "involved-img" alt="<?php get_the_title( get_page_by_path( 'for-musicians-and-artists', OBJECT, 'post' ));?>">
              </a>
            <?php endif?> 
          </div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text"id="involved-text" > 
            <div class="container">
              <h2 id="remove-overflow" > <?php echo get_the_title( get_page_by_path( 'for-musicians-and-artists', OBJECT, 'post' ));?>         </h2>
              <p class="lead mb-0">     <?php echo get_the_excerpt( get_page_by_path( 'for-musicians-and-artists', OBJECT, 'post' ));?></p>        
                <div class="involved-btn">
                  <a href="<?php echo site_url('/musicians-and-artists'); ?>"> <button type="button" class="btn btn-primary" id="listen-again" >Learn More</button></a>
                </div>
            </div>
          </div>
        </div>
      <!-- Host a show section-->
      <div class="row no-gutters" id="involved-box">
        <div class="col-lg-6 text-white showcase-img2">
          <?php if(has_post_thumbnail(get_page_by_path( 'looking-to-host-a-show', OBJECT, 'post' ))):?>
            <a href="<?php the_permalink();?>">
              <img src="<?php echo get_the_post_thumbnail_url(get_page_by_path( 'looking-to-host-a-show', OBJECT, 'post' ), 'thumb_image');?>" class= "involved-img" alt="<?php get_the_title(get_page_by_path( 'looking-to-host-a-show', OBJECT, 'post' ));?>">
            </a>
          <?php endif?> 
        </div>
          <div class="col-lg-6 my-auto showcase-text" id="involved-text">
            <div class="container">
              <h2 id="remove-overflow">     <?php echo get_the_title(get_page_by_path( 'looking-to-host-a-show', OBJECT, 'post' ));?></h2>
              <p class="lead mb-0">   <?php echo get_the_excerpt(get_page_by_path( 'looking-to-host-a-show', OBJECT, 'post' ) );?></p>
                <div class="involved-btn">
                  <a href="<?php echo site_url('/host-a-show'); ?>"> <button type="button" class="btn btn-primary" id="listen-again" >Learn More</button></a>
                </div>
            </div>
          </div>
      </div>
        <div class="row no-gutters" id="involved-box">
          <div class="col-lg-6 order-lg-2 text-white showcase-img3" >
            <?php if(has_post_thumbnail(get_page_by_path( 'join-the-urn-tech-team', OBJECT, 'post' ))):?>
              <a href="<?php the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_page_by_path( 'join-the-urn-tech-team', OBJECT, 'post' ), 'thumb_image');?>" class= "involved-img" alt="<?php get_the_title(get_page_by_path( 'join-the-urn-tech-team', OBJECT, 'post' ));?>">
              </a>
            <?php endif?> 
          </div>
        
          <!-- Tech section-->
        <div class="col-lg-6 order-lg-1 my-auto showcase-text" id="involved-text">
          <div class="container">
            <h2 id="remove-overflow"> <?php echo get_the_title(get_page_by_path( 'join-the-urn-tech-team', OBJECT, 'post' ));?></h2>
            <p class="lead mb-0"><?php echo get_the_excerpt(get_page_by_path( 'join-the-urn-tech-team', OBJECT, 'post' ));?></p>
              <div class="involved-btn">
                <a href="<?php echo site_url('/tech-team'); ?>"> <button type="button" class="btn btn-primary" id="listen-again" >Learn More</button></a>
              </div>
          </div>
        </div>
  </div>
</div>
  <section class="involved-foot">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">  
          <h5 class="entry-title"> General Inquiries 
          </h5>
        </h5>
        <p class="card-text">For any additional queries, get in touch at      <a href="#" >management@urn1350.net</a> </p>
      </div>
    </div>
  </section>


  
<?php get_footer(); ?> 
