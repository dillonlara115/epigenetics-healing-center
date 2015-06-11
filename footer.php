<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package epigenetics healing center
 */
?>

	</div><!-- #content -->


	<footer id="colophon" class="section section-primary"  role="contentinfo">
		
            <div class="row footer-contact">
            	<div id="contact-section" class="container">
            	<h2 class="text-center">Learn More About Us</h2>

	            	<div class="col-md-6 footer-contact-sub">
		            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vehicula, nisl eu cursus commodo, nunc ex suscipit erat, sed molestie diam tellus eget purus. Nulla facilisi. Nullam efficitur dolor nibh, ac vulputate arcu rhoncus ut. Cras dapibus, nibh a scelerisque convallis, erat est maximus leo, a volutpat eros ipsum eget orci. Aenean viverra leo enim, quis ultricies eros posuere id. Curabitur ipsum mauris, iaculis ac nulla at, aliquet auctor nulla. Ut ultricies a felis vel porttitor. Curabitur gravida risus ac augue mattis, et imperdiet sem luctus. Vestibulum felis mi, luctus non malesuada vel, condimentum ut lacus. Vivamus non risus vitae nulla pulvinar ultrices ac nec sem.
					</p>
	            	</div>
            		<div class="col-md-6 footer-contact-sub">
            			<h4><i class="fa fa-envelope-o"></i>Contact us for more information</h4>
            			<?php echo do_shortcode('[gravityform id="1" name="Email Us" title="false" description="false"]') ?>
            		</div>
            	</div>
            </div>


            <div class="footer-newsletter row">
            	<div class="container text-center">
            		<span class="newsletter-label">Sign Up For<br> Our Newsletter: </span><?php echo do_shortcode('[gravityform id="4" name="Newsletter Sign Up" title="false" description="false"]'); ?>
            	</div>
            </div>
            
            <div class="row footer-contact-featured">
            <div class="container">
                <h3 class="text-center featured-articles-header">Featured Articles</h3>
                <div class="row buckets">
                    <?php $the_query = new WP_Query( 'showposts=4' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="col-xxs-12 col-xs-6 col-md-3 col-lg-3 homepage-bucket">
                        <figure class="bucket">
                            <?php the_post_thumbnail(); ?>
                            <figcaption>
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo substr(strip_tags($post->post_content), 0, 75);?>...</p>
                                <a href="<?php the_permalink() ?>">View more</a>
                            </figcaption>           
                        </figure>
                    </div>  
                    <?php endwhile;?>
                </div>
            </div>
                
            </div>
            <div class="row footer-contact-row">
                <div class="container">
                    <div class="col-md-4 text-center">
                        <h3>Phone</h3>
                        <a href="tel:9133399951">(913) 339-9951</a> 
                        <hr>
                        <h3>Fax</h3>
                        <a href="tel:9133399951">(913) 339-9951</a> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/03/logo-only.png" alt="Dr. Goodbinder">
                    </div>
                    <div class="col-md-4 text-center footer-address">
                        <h3>The Epigenetics Healing Center</h3>
                        <hr>
                        <address>
                            4601 w. 109th street ste 325<br>
                            Overland Park, KS 66211<br>
                        </address>                      
                    </div>
                </div>
                    
            </div>
            

            <?php get_template_part( 'google-map'); ?>
			<div class="site-info row">
				<div class="container">
					<div class="col-sm-8 col-md-8">
						<a href="http://ventamarketing.com/" rel="designer">&#169; <?php echo date('Y'); ?> Epigenetics Healing Center. All Rights Reserved. Website Designed by Venta Marketing</a>
					</div>
					<div class="col-sm-4 col-md-4 text-right footer-social">
						<a href="http://yelp.com"><i class="fa fa-2x fa-fw fa-yelp text-inverse"></i></a>
                            <a href="http://twitter.com/EpigeneticsHC"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
                            <a href="http://facebook.com/134396423344172"><i class="fa fa-2x fa-fw fa-facebook text-inverse"></i></a>
                            <a href="http://plus.google.com/116363861180070292417"><i class="fa fa-2x fa-fw fa-google-plus text-inverse"></i></a>
					</div>

				</div><!-- .site-info -->
            </div>

        </footer>




</div><!-- #page -->
<script  type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script  type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.sidr.min.js"></script>
<script  type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/min/ticker-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/min/main-min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
