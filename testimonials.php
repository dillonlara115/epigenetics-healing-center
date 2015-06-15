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
			<div>
				<p>We value our patients' experience at The Epigenetics Healing Center. If you are currently a functional medicine patient, please feel free to complete the following Client Experience Questionnaire. The Questionnaire is in Adobe Acrobat format, and requires the free Acrobat Reader to view.</p>
				<p><a href="http://maxtestdomain.com/epigenetics-healing-center/wp-content/uploads/2015/06/Client_Experience_Questionnaire.pdf" target="_blank">Download & Print Questionnaire</a></p>
				
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php dynamic_sidebar( 'about' ); ?>
<?php get_footer(); ?>
