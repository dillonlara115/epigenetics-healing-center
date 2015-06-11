<?php
/*
Template Name: Who we serve Sub Page
Description: Who we serve sub page template includes sidebar
*/

get_header(); ?>


	<div id="primary" class="content-area">


		<main id="main" class="site-main" role="main">


        <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>

            <?php endwhile; // end of the loop. ?>


<?php if ( is_page( 'who-we-serve' )  ) {  ?>

<h3>Related Videos</h3>
<hr>
<?php } ?>

<?php if ( is_page( 'anxiety-or-depression' )  ) {     ?>

    <?php get_template_part('serve-videos/anxiety-depression-videos'); ?>

<?php } else if (is_page( 'autoimmune-disease' ) ) { ?>

    <?php get_template_part('serve-videos/autoimmune-videos'); ?>

<?php } else if (is_page( 'chronic-fatigue' ) ) { ?>

    <?php get_template_part('serve-videos/chronic-fatigue-videos'); ?>

<?php } else if (is_page( 'diabetes-type-ii' ) ) { ?>

    <?php get_template_part( 'serve-videos/diabetes-videos'); ?>
    
<?php }  else if (is_page( 'fibromyalgia' ) ) { ?>

    <?php get_template_part( 'serve-videos/fibromyalgia-videos'); ?>

<?php }  else if (is_page( 'hypothyroid' ) ) { ?>

    <?php get_template_part( 'serve-videos/hypothyroid-videos'); ?>

<?php } ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php dynamic_sidebar( 'Who We Serve' ); ?>
<?php get_footer(); ?>