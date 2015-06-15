<?php
/**
 * The template used for displaying page content in tetimonials.php
 *
 * @package epigenetics healing center
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title-testimonial">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php $videosite = get_post_meta($post->ID, 'Video Site', single);
	    $videoid = get_post_meta($post->ID, "Video ID", single);
	    ?>
	    <div class="testimonial-video">
	    	 <?php
	      if ($videosite == 'vimeo')
	      {
	          echo '<iframe src="http://player.vimeo.com/video/'.$videoid.'" width="100%" height="400" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	      }
	      else if ($videosite == 'youtube')
	      {
	          echo '<iframe width="100%" height="400" src="http://www.youtube.com/embed/'.$videoid.'?rel=0" frameborder="0" allowfullscreen></iframe>';
	      }
	     
	      ?>
		</div>

	      <?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'epigenetics-healing-center' ),
				'after'  => '</div>',
			) );
		?>
    
   
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'epigenetics-healing-center' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-##  page-->