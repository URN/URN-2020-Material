<?php
/**
 * The template for displaying single blog posts.
 */
get_header(); ?>

<div class="main-page-content">
<?php
                // Start the loop.                </div>
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                

            ?> 
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
        <?php the_title( '<h1>', '</h1>' ); ?>

        <p><?php echo get_the_date(); ?></p>

    <?php


            // Include the page content template.
            the_content();

        // End the loop.
        endwhile;
        ?>
    </div>
</div>
<?php get_footer(); ?>