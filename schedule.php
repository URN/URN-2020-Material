<?php

/**
* Template Name: schedule
* Description: Displays schedule page
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


<div class="main-page-content">
<?php
                // Start the loop.                </div>
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                

            ?> 
            <div class="row">
                <div class="col">

                <?php 
      $user = wp_get_current_user();
      if ( in_array( 'Administrator', $user->roles ) ) { ?>
          <!-- Any HTML what you need to hide from "Customers" and show for "Vendor" -->
      	<div>
      	  <?php edit_post_link(__('Edit Page')); ?>
    	</div>
      <?php  } ?>

            <article id="post-<?php the_ID();?>" <?php post_class();?>>
                <header class="entry-header">
                 
                        <?php the_title('    <div class="text-center"> <h1 class="entry-title">','</h1> </div>');?>
                    </div>
            </div>
    <div class="entry-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">      
                </div>
                <div class="col-sm-10">      
                    
           
             
                </header>
               <!-- <div class="text-left"> CHANGE THIS FOR TEXT ALLIGNMENT-->

                    <?php the_content(); ?>
                    <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'URN-2020Redesign' ),
                            'after' => '</div',
                        ));
                    ?>   
                </div>
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
            </article>
            <?php    // End the loop.
                endwhile;
            ?>
            </div>
                <div class="col-sm-1">      
                </div>
            </div>
        </div>
    </div>
    <div class="page-section2">
        
    </div>
</div>
 <?php get_footer(); ?> 
