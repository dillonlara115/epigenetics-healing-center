<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package epigenetics healing center
 */
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
rel="stylesheet" type="text/css">
<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>

<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.sidr.light.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css">
<script type="text/javascript"  href="<?php bloginfo('template_directory'); ?>/js/modernizr-min.js"></script>
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles-ie.css">
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if (is_front_page()) { ?>
        <div class="cover">
    <?php } else { ?>
        <div class="cover cover-secondary">
    <?php } ?>
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'epigenetics-healing-center' ); ?></a>
    <header class="navbar navbar-default">
    	<div class="container">
    		<div class="navbar-collapse hidden-xs hidden-sm" aria-expanded="false"> 
    			<div class="nav navbar-nav navbar-right">
    				<a href="tel:9133399951" class="header-tel">(913) 339-9951</a>
				</div>
			</div>
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> 
                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/04/logo-large-white.png" alt="<?php bloginfo( 'name' ); ?>" class="header-logo"/>
<!--                     <span><?php bloginfo( 'name' ); ?></span> --> 
				</a>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'navbar-collapse hidden-xs hidden-sm', 'container_id' => 'navbar-ex-collapse', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

			<a id="simple-menu" href="#sidr" class="visible-xs visible-sm"><i class="fa fa-3x fa-bars"></i></a>
	        <div id="sidr">
			  <!-- Your content -->
	          <?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				<ul id="secondary-menu" class="nav navbar-nav navbar-right">
    				<li class="center-block" >Telephone: <a href="tel:9133399951">(913) 339-9951</a></li>
    				<li class="center-block">
                            <a class="social-icon-mobile" href="http://yelp.com"><i class="fa fa-2x fa-fw fa-yelp"></i></a>
                            <a class="social-icon-mobile" href="http://twitter.com/EpigeneticsHC"><i class="fa fa-2x fa-fw fa-twitter "></i></a>
                            <a class="social-icon-mobile" href="http://facebook.com/134396423344172"><i class="fa fa-2x fa-fw fa-facebook "></i></a>
                            <a class="social-icon-mobile" href="http://plus.google.com/116363861180070292417"><i class="fa fa-2x fa-fw fa-google-plus "></i></a>
    				</li>
				</ul>
			</div>

        </div>
    </header>

        <?php if (is_front_page()) { ?>
            <div class="cover-image cover-image-home">
             
            <!-- cta-header -->
            <div class="container">
                <div class="cta-container text-center">
                    <h1>Optimize Your Health</h1>
                    We use your genetic code to find and fix <br>the underlying causes of<ul id="ticker">
                            <li>Diabetes Type II</li>
                            <li>Fibromyalgia</li>
                            <li>Hypothyroid</li>
                            <li>Chronic Fatigue</li>
                            <li>Autoimmune Disease</li>
                            <li>Anxiety or Depression</li></ul> <br> <a class="btn btn-lg btn-default contact-link" href="#contact-section">Learn More</a>
                </div>

            </div>
           
            <div class="header-buckets">
                <ul class="media-list">
                    <li class="media">
                        <a class="pull-left" href="<?php echo get_permalink( 17 ); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/04/John-Holt-JH10-e1428085359440.jpg" alt="text here" height="125" width="125" class="img-circle"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="<?php echo get_permalink( 17 ); ?>">Who We Serve</a></h4>
                            <p> Your Functional Family Physician</p> 
                            
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-left" href="<?php echo get_permalink( 82 ); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/04/testimonials-johanna-epstein-e1428085324680.jpg" alt="text here" height="125" width="125" class="img-circle"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="<?php echo get_permalink( 82 ); ?>">Success Stories</a></h4>
                            <p>We value our patients' experience.</p> 
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-left" href="<?php echo get_permalink( 91 ); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/04/meet-doctor.jpg" alt="text here" height="125" width="125" class="img-circle"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="<?php echo get_permalink( 91 ); ?>">Meet the Doctor</a></h4>
                            <p>Jay Goodbinder PSc. D</p> 
                        </div>
                    </li>
                </ul>
            </div>  
            <video autoplay preload="auto"  muted loop poster="<?php echo $feat_image ?>">
                <source src="<?php echo get_site_url(); ?>/wp-content/themes/epigenetics-healing-center/video/HTML5HD.mp4" type="video/mp4"/>
                <source src="<?php echo get_site_url(); ?>/wp-content/themes/epigenetics-healing-center/video/HTML5HD.ovg" type="video/ovg"/>
                <source src="<?php echo get_site_url(); ?>/wp-content/themes/epigenetics-healing-center/video/HTML5HD.webm" type="video/webm"/>
            </video>
            </div>
        <?php } else { ?>
            <?php if (has_post_thumbnail() ) { ?>
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
              <div class="cover-image cover-image-sub" style="background: url(<?php echo $feat_image ?>) no-repeat center center;background-size: cover;background-position-y: -130px;">          
            <?php } else { ?>
                <div class="cover-image cover-image-sub">
            <?php } ?>
                <div class="cta-container text-center">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        <?php } ?>
   </div>
        



   <?php if (is_front_page()) { ?>
		<div id="content" class="site-content">
	<?php } else { ?>
		<div id="content" class="site-content container">
        
	<?php } ?>
