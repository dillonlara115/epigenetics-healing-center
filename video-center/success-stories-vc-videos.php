<?php
$args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10);
$loop = new WP_Query( $args ); ?>
<h3>Success Stories</h3>
<div class="video-container">
  <?php
  
    while ( $loop->have_posts() ) : $loop->the_post(); 
    $videosite = get_post_meta($post->ID, 'Video Site', single);
    $videoid = get_post_meta($post->ID, "Video ID", single);?>
      <div class="sub-video-item">
          <div class="sub-video-item-image">
              <?php echo get_the_post_thumbnail( $page->ID, 'large', array( 'class' => "static-header-image") ); ?>
          </div>
          <p class="static-pages-title" data-toggle="modal" data-target="#myModal" data-video-site="<?php echo $videosite ?>" data-video-id="<?php echo $videoid ?>"> <?php the_title(); ?></p>
      </div>
    <?php endwhile; ?>
</div>

