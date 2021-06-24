<?php 
/**
* Template Name: host-a-show
* Description: Displays host a show
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


<div class="main-page-content" id="urnpics">
  <?php
                // Start the loop.                </div>
     while ( have_posts() ) : the_post();

                    // Include the page content template.
  ?> 
  <div class="row justify-content-center" id="whiteness">
    <div class="col" id="whiteness">
      <?php 
        $user = wp_get_current_user();
        if ( in_array( 'Administrator', $user->roles ) ) { ?>
          <!-- Any HTML what you need to hide from "Customers" and show for "Vendor" -->
      <?php edit_post_link(__('Edit Page')); ?>
    </div>
  </div>
      <?php  } ?>

  <article id="post-<?php the_ID();?>" <?php post_class();?>>
      <?php the_title('    <h1 class="entry-title-alt">','</h1> ');?>
 </div>
 </div>
  <div class="entry-content" >
    <div class="container" >
      <div class="row" >
        <div class="col-sm-1" >      
        </div>
          <div class="col-sm-10" >      
            <div class="text-center" > <!-- CHANGE THIS FOR TEXT ALLIGNMENT-->
              <?php the_content(); ?>
              <?php
                  wp_link_pages( array(
                      'before' => '<div class="page-links">' . esc_html__('Pages:', 'URN-2020Redesign' ),
                      'after' => '</div',
                  ));
              ?>   
              <footer class="entry-footer">
              <?php
                  edit_post_link(
                      sprintf(
                          esc_html__('Edit %s', 'URN-2020Redesign'),
                          the_title('<span class="screen-reader-text">"','"
                          </span>', false)
                      ),
                      '<span class="edit-link">',
                      '</span>'
                  );
              ?>
              </footer>
            </article> <!-- honestly dont know why this has to be right here-->
            </div>
              <!-- Card Start -->
              <div class="row">
                <div class="card" id="host-show-card" style="width: 58rem;">
                  <div class="card-body">
                    <h5 class="card-title" >
                      <div class="host-show-title-text" >
                        <div class="text-center" >
                          <i class="fas fa-podcast"></i>
                          <?php echo get_the_title(get_page_by_path( 'daytime', OBJECT, 'post' ));?>
                        </div>
                      </div>
                    </h5> <!-- 152 = speech id-->
                  <div class="host-show-design">  
                    <p class="card-text mb-2"> 
                      <?php $id = get_page_by_path( 'daytime', OBJECT, 'post' ); // add the ID of the page where the zero is
                                                $p = get_page($id);
                                                echo apply_filters('the_content', $p->post_content);?>
                      </p>
                    <a href="#" class="card-link">daytime@urn1350.net</a>
                  </div>
                </div>
              </div>
                    
    <!-- Card Start2 -->
                <div class="card text-right" id="host-show-card" style="width: 58rem;">
                  <div class="card-body">
                    <h5 class="card-title " >
                      <div class="host-show-title-text2">
                        <div class="text-center">
                          <i class="fas fa-podcast"></i> 
                          <?php echo get_the_title(get_page_by_path( 'after-dark', OBJECT, 'post' ));?>
                        </div>
                      </div>
                    </h5> <!-- 150 = After dark id--> 
                  <div class="host-show-design"> <p class="card-text mb-2"> <?php $id = get_page_by_path( 'after-dark', OBJECT, 'post' ); // add the ID of the page where the zero is
                                                $p = get_page($id);
                                                echo apply_filters('the_content', $p->post_content);?></p><a href="#" class="card-link">daytime@urn1350.net</a>
                    <a href="#" class="card-link">Louis</a>
                  </div>
                </div>
                
                <!-- Card Start3 -->
                <div class="card" id="host-show-card" style="width: 58rem;">
                  <div class="card-body">
                    <h5 class="card-title" >
                      <div class="host-show-title-text">
                        <div class="text-center">
                          <i class="fas fa-podcast"></i>
                          <?php echo get_the_title(get_page_by_path( 'speech', OBJECT, 'post' ));?>
                        </div>
                      </div>
                    </h5> <!-- 152 = speech id-->
                      <div class="host-show-design">
                        <p class="card-text mb-2"> <?php $id = get_page_by_path( 'speech', OBJECT, 'post' ); // add the ID of the page where the zero is
                                                    $p = get_page($id);
                                                    echo apply_filters('the_content', $p->post_content);?></p>
                        <a href="#" class="card-link">speech@urn1350.net</a>
                        <a href="#" class="card-link">Joe</a>
                      </div>
                  </div>
                </div>

                    <!-- Card Start4 -->
                    
                  <div class="card text-right" id="host-show-card" ="width: 58rem;">
                    <div class="card-body">
                      <h5 class="card-title " >
                        <div class="host-show-title-text3">
                          <div class="text-center">
                            <i class="fas fa-podcast"></i> 
                            <?php echo get_the_title(get_page_by_path( 'news', OBJECT, 'post' ));?>
                          </div>
                        </div>
                      </h5> <!-- 154 = News id--></h5>
                        <div class="host-show-design">  
                          <p class="card-text mb-2"> <?php $id = get_page_by_path( 'news', OBJECT, 'post' ); // add the ID of the page where the zero is
                                                      $p = get_page($id);
                                                      echo apply_filters('the_content', $p->post_content);?></p>
                          <a href="#" class="card-link">news@urn1350.net</a>
                          <a href="#" class="card-link">Emily</a>
                        </div>
                  </div>
                </div>

                <!-- Card Start5 -->
                  <div class="card" id="host-show-card" style="width: 58rem;">
                    <div class="card-body">
                      <h5 class="card-title" >
                        <div class="host-show-title-text" >
                          <div class="text-center">
                            <i class="fas fa-podcast"></i> 
                            <?php echo get_the_title(get_page_by_path( 'sport', OBJECT, 'post' ));?>
                          </div>
                        </div>
                      </h5> <!-- 156 = sport id-->
                        <div class="host-show-design">  
                          <p class="card-text mb-2"> <?php $id = get_page_by_path( 'sport', OBJECT, 'post' ); // add the ID of the page where the zero is
                                                  $p = get_page($id);
                                                  echo apply_filters('the_content', $p->post_content);?></p>
                          <a href="#" class="card-link">sport@urn1350.net</a>
                          <a href="#" class="card-link">James</a>
                        </div>
                    </div>
                  </div>

          </div>  
            <?php    // End the loop.
                endwhile;
            ?>
        </div>
               
      </div>
    </div>
  </div>

<div class="page-section2">
</div>
 <?php get_footer(); ?> 
