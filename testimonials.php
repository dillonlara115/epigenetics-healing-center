<?php
/*
Template Name: Testimonials Page
Description: Testimonials Page design for epigenetics healing center
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php query_posts( 'post_type=testimonials'); ?>


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'testimonial' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php dynamic_sidebar( 'about' ); ?>
<?php get_footer(); ?>
