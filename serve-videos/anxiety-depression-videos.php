<?php
$args = array( 'post_type' => 'videos', 'posts_per_page' => 10, 'cat' => 21 );
$loop = new WP_Query( $args ); ?>

<div class="main-sub-video">
<?php
for ($x = 0; $x <= 2; $x++) { 
  while ( $loop->have_posts() ) : $loop->the_post(); 
    $videosite = get_post_meta($post->ID, 'Video Site', single);
    $videoid = get_post_meta($post->ID, "Video ID", single);
    ?>
    
    <div class="sub-video-item">
    <h3 class="static-pages-title"><?php the_title(); ?></h3>
      <?php
      if ($videosite == 'vimeo')
      {
          echo '<iframe src="http://player.vimeo.com/video/'.$videoid.'" width="100%" height="400" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
      }
      else if ($videosite == 'youtube')
      {
          echo '<iframe width="100%" height="400" src="http://www.youtube.com/embed/'.$videoid.'" frameborder="0" allowfullscreen></iframe>';
      }
     
      ?>
    </div>
  <?php endwhile;  } ?>
</div>

<div class="sub-video-container">
  <?php
  for ($x = 0; $x <= 2; $x++) { 
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="sub-video-item">
          <div class="sub-video-item-image">
              <?php echo get_the_post_thumbnail( $page->ID, 'large', array( 'class' => "static-header-image") ); ?>
          </div>
          <p class="static-pages-title"><?php the_title(); ?></p>
      </div>
    <?php endwhile; } ?>
</div>

