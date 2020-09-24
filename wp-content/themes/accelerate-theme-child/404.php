<?php
/**
 * The template for displaying the 404 error page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="lost-page">
    <div class="lost-container">
        <h1>OOPS! No webpage here!</h2>

        <p>You seem to be off trail. No worries...</br>find your way back by visiting our <a href="<?php echo home_url(); ?>" target="_blank">Home Page</a>.</p>
    </div> <!--end container --> 
</div> <!-- end div-->

<?php get_footer();  ?>