<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Mo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="javascript/smoothscroll.js"></script>



<script>
	$( document ).ready(function() {
 		//scroll animation 
		$('a[href^="#"]').on('click', function(event) {

		    var target = $( $(this).attr('href') );

		    if( target.length ) {
		        event.preventDefault();
		        $('html, body').animate({
		            scrollTop: target.offset().top
		        }, 2000);
		    }

		});
	});
</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header banner_bg" role="banner">
	<div class="container ">
		<div class="row">
			<div class="site-header-inner col-sm-12">

				<div class="col-sm-12 col-md-5 col-lg-5">
					<div class="site-branding center">
						<img class="site_logo" src="<?php bloginfo('template_directory'); ?>/img/MM-logo.png" alt="Smiley face">
						<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4> -->
					</div>
				</div>

				<div class="col-sm-12 col-md-7 col-lg-7 site_menu">

					<div class="navbar navbar-default">
						<div class="navbar-header">
							<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>

							<div class="collapse navbar-collapse navbar-responsive-collapse center">
								<ul id="main-menu" class="nav navbar-nav">
									<li class="menu-item">
										<a href="#about" class="smoothScroll">?</a>
									</li>
									<li class="menu-item">
										<a href="#hobbies" class="smoothScroll">Hobbies</a>
									</li>
									<li class="menu-item">
										<a href="#resume" class="smoothScroll">Resume</a>
									</li>
									<li class="menu-item">
										<a href="#contact" class="smoothScroll">Contact</a>
									</li>
									
								</ul>
							</div>
						</div><!-- .navbar -->
					</div>

				</div>
			</div>
		</div>

		

	</div><!-- .container -->
</header><!-- #masthead -->



