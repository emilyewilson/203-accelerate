<?php
/**
 * The template for displaying the homepage
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
<!-- <pre><?php // print_r($wp_query); exit; ?></pre> -->
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
    </div><!-- #primary -->

    <section class="featured-work">
        <div class="site-content">
            <h4>Featured Work</h4>

            <ul class="homepage-featured-work">
            <?php query_posts("posts_per_page=3&post_type=case_studies"); ?>
            <!-- the loop -->
            <?php while ( have_posts() ) : the_post(); 
                $image_1 = get_field('image_1');
                $size = "medium";
                ?>  
                <li class="individual-case-studies">
                    <figure>
                    <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, "medium" ); ?></a>
                    </figure>

                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>
            <?php endwhile; // end of the loop. ?>
            <?php wp_reset_query(); //resets the altered query back to the original ?>
            </ul>
        </div>
    </section>

    <div class="site-content">
    <section class="recent-posts">
        
            <div class="blog-post">
                <h4>From the Blog</h4>
                <?php query_posts('posts_per_page=1'); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
           
    </section>

    <section class="twitter-feed">
        <h4>Tweet Tweet</h4>
        <h3>@CraveableKitchn</h3>
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div id="secondary" class="widget-area" role="complementary">
	    <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
        <?php endif; ?>
        <div class="twitter-link">
            <a href="https://www.twitter.com/craveablekitchn" target="_blank">Follow &rsaquo;</a>
        </div>
    </section>
    </div>

<?php get_footer(); ?>
