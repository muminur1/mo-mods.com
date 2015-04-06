<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mo
 */

get_header(); ?>
<div class="main-content ">

<a id="about"></a>
	<div class="row about">
		<div class="container">
			<div class="col-sm-12 col-md-12 col-lg-12 w_txt">
				Mauris sollicitudin fermentum libero. Fusce commodo aliquam arcu. Morbi mattis ullamcorper velit. Nulla consequat massa quis enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

				Fusce a quam. Sed libero. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Cras varius. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi.
			</div>
		</div>
	</div>

<a id="hobbies"></a>
	<div class="row hobbies">
		<div class="container">
			<div class="col-sm-12 col-md-12 col-lg-12">
				Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur turpis. Nunc sed turpis. Aenean ut eros et nisl sagittis vestibulum.

				Morbi vestibulum volutpat enim. Praesent ac massa at ligula laoreet iaculis. Quisque malesuada placerat nisl. Phasellus magna. Nunc sed turpis.

				Aenean vulputate eleifend tellus. Phasellus a est. Cras id dui. Nullam accumsan lorem in dui. Praesent adipiscing.

				Curabitur nisi. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Aliquam erat volutpat. Praesent nec nisl a purus blandit viverra. Pellentesque commodo eros a enim.

				Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Maecenas egestas arcu quis ligula mattis placerat. Donec vitae orci sed dolor rutrum auctor. Curabitur blandit mollis lacus. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi.
			</div>
		</div>
	</div>

<a id="resume"></a>
	<div class="row resume">
		<div class="container">
			<div class="col-sm-12 col-md-12 col-lg-12 w_txt">
				Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Cras sagittis. Pellentesque dapibus hendrerit tortor. Praesent adipiscing.

				Morbi ac felis. Cras sagittis. Nam adipiscing. Sed lectus. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci.

				Duis lobortis massa imperdiet quam. Vestibulum suscipit nulla quis orci. Aenean vulputate eleifend tellus. Etiam ut purus mattis mauris sodales aliquam. Praesent ac massa at ligula laoreet iaculis.
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
