<?php
/**
 * Template Name: About Page
 *

 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content sidebar">
<div class="main-content-two" role="main"> 

		<div class="about-hero">
			<h1>Accelerate is a strategy and marketing agency<br>
			located in the heart of NYC. Our goal is to build<br>
			businesses by making our clients visible and<br>
			making their customers smile.</h1>
		</div>
			<?php while ( have_posts() ) : the_post(); 
				$size = "full";
				$service = get_field('service');
				$description = get_field('description');
				$icon_1 = get_field('icon_1');
				$service_2 = get_field('service_2');
				$description_2 = get_field('description_2');
				$icon_2 = get_field('icon_2');
				$service_3 = get_field('service_3');
				$description_3 = get_field('description_3');
				$icon_3 = get_field('icon_3');
				$service_4 = get_field('service_4');
				$description_4 = get_field('description_4');
				$icon_4 = get_field('icon_4');
				?>

		<div class="about">
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<div class="service-container">
				<?php if($icon_1) { 
                    echo wp_get_attachment_image( $icon_1, $size ); 
					} ?>
					<h3><?php echo $service; ?></h3>
                	<p><?php echo $description; ?></p>
			</div>

			<div class="service-container">
				<h3><?php echo $service_2; ?></h3>
                <p><?php echo $description_2; ?></p>
				
				<?php if($icon_2) { 
                    echo wp_get_attachment_image( $icon_2, $size ); 
                    } ?>
			</div>

			<div class="service-container">
				<?php if($icon_3) { 
                    echo wp_get_attachment_image( $icon_3, $size ); 
					} ?>
				<h3><?php echo $service_3; ?></h3>
                <p><?php echo $description_3; ?></p>
                
			</div>

			<div class="service-container">
				<h3><?php echo $service_4; ?></h3>
                <p><?php echo $description_4; ?></p>
				<?php if($icon_4) { 
                    echo wp_get_attachment_image( $icon_4, $size ); 
					} ?>	
			</div>
        </div> <!-- about -->

			<?php endwhile; // end of the loop. ?>

		<div class="action">
			<h2>Interested in working with us?</h2>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
		</div><!-- .main-content -->
    </div><!-- #primary -->

<?php get_footer(); ?>