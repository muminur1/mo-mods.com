<?php
/* Template Name: Home Page Temp*/
?>
<?php get_header(); ?>
<div class="main-content ">
	<div class="row slide_home">
		<?php echo do_shortcode('[cw-slideshow id="17"]'); ?>
	</div>
	<a id="about"></a>
		<div class="row about">
			<div class="container">
				<div class="col-sm-12 col-md-12 col-lg-12 w_txt">
					<?
						//adjusting the query
						$args = array(
							'post_type' => 'page',
							'pagename' => 'Home',
							'posts_per_page' => -1,
							'orderby' => date,
							'order' => DESC
						);

						// The Query
						$latest_post = new WP_Query( $args );
						// The Loop
						if ( $latest_post->have_posts() ) 
						{
							while ( $latest_post->have_posts() ) 
							{	
								$latest_post->the_post();

								the_content();
							}
						} 
						else 
						{
							// no posts do nothing
						}

					?>
				</div>
			</div>
		</div>

	<a id="hobbies"></a>
		<div class="row hobbies">
			<div class="container">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<?
						//adjusting the query
						$args = array(
							'post_type' => 'page',
							'pagename' => 'Hobbies',
							'posts_per_page' => -1,
							'orderby' => date,
							'order' => DESC
						);

						// The Query
						$latest_post = new WP_Query( $args );
						// The Loop
						if ( $latest_post->have_posts() ) 
						{
							while ( $latest_post->have_posts() ) 
							{	
								$latest_post->the_post();

								the_content();
							}
						} 
						else 
						{
							// no posts do nothing
						}

					?>
				</div>
			</div>
		</div>

	<a id="resume"></a>
		<div class="row resume">
			<div class="container">
				<div class="col-sm-12 col-md-12 col-lg-12 w_txt">
					<?
						//adjusting the query
						$args = array(
							'post_type' => 'page',
							'pagename' => 'Resume',
							'posts_per_page' => -1,
							'orderby' => date,
							'order' => DESC
						);

						// The Query
						$latest_post = new WP_Query( $args );
						// The Loop
						if ( $latest_post->have_posts() ) 
						{
							while ( $latest_post->have_posts() ) 
							{	
								$latest_post->the_post();

								the_content();
							}
						} 
						else 
						{
							// no posts do nothing
						}

					?>
				</div>
			</div>
		</div>

	<a id="contact"></a>
		<div class="row contact">
			<div class="container">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<h3>Find Me</h3>

				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<h3>Message Me</h3>
					<?php echo do_shortcode('[contact-form-7 id="14" title="Message Me""]'); ?>
				</div>
			</div>
		</div>


</div><!-- close .main-content -->
<?php get_footer(); ?>
