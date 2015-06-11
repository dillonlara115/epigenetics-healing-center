<?php
/* Template Name: Videos
*/
?>
<?php get_header() ?>
<h2 class="entry-title"><?php the_title(); ?></h2>
<div class="text-center">
<a href="//fast.wistia.net/embed/iframe/9x36g5w818?popover=true" class="wistia-popover[height=360,playerColor=317ea9,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/8dfa16d7dcdca48c5262affa1a4dca9c46d10fca.jpg?image_play_button=true&image_play_button_color=317ea9e0&image_crop_resized=500x281" alt="" /></a>
<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
</div>


<hr>

<?php get_template_part('video-center/autoimmune-vc-videos'); ?>

<hr>

<?php get_template_part('video-center/diabetes-ii'); ?>

<hr>

<?php get_template_part('video-center/fibromyalgia-vc-videos'); ?>

<hr>

<?php get_template_part('video-center/hypothyroid-vc-videos'); ?>

<hr>

<?php get_template_part('video-center/parkinsons-vc-videos'); ?>

<hr>

<?php get_template_part('video-center/success-stories-vc-videos'); ?>

 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body text-center">
        <div class="video-content">
          
        </div>  
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>