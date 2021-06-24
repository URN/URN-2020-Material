<?php
/**
 * The template for displaying single blog posts.
 */
get_header()?>
  <?php
    // Start the loop.                </div>
    while ( have_posts() ) : the_post();

        // Include the page content template.


  ?> 
           
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12" id="rum" >
        <!-- Title -->
        <h1 class="mt-4"><?php the_title() ?></h1>
          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?php echo get_the_author(); ?></a>
          </p>
          <hr>        
          <!-- Date/Time -->
          <p>Posted on <?php echo get_the_date();?></p>
          <!-- Preview Image -->
          <img class="card-img-top"src="<?php the_post_thumbnail_url('thumb_image');?>" alt="Card image cap">

        <!-- Post Content -->
        <?php // Include the page content template.
          the_content();
        ?>
       <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <hr>-->
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
    <div class="row">
      <div class="col">
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
        </div>
    </div>
  <?php



// End the loop.
endwhile;
?>
<?php get_footer(); ?>
