<div class="wrapper">
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="container">
WE ARE!
	<div class="row">
		<div class="span3">
		</div>
		<br>
		<img src="<?php bloginfo('template_directory'); ?>/img/psu.jpg" width="300px" height="250px"/>
		 	</div>
	</div>
<?php get_footer(); ?>
</div>