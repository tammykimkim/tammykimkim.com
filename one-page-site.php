<?php
/**
 * Template Name: One Page Site
 */

get_header(); ?>


		<?php 
			/*
				Home Page Loop!
			*/
		 ?>
		 <?php $thumb_id = get_post_thumbnail_id(55);
	   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-size', true);
	   $thumb_url = $thumb_url_array[0]; ?>

		<section class="home" id="home" style="background: url(<?php echo $thumb_url ?>)">
			<div id="primary" class="content-area">

			<?php 
			    $args = array(
			        'post_type' => 'page',
			        'p' => 55
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

<!-- 				<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2> -->
				<?php the_content(); ?>

			<?php endwhile; endif; ?>

			</div> <!-- #primary .content-area -->
		</section><!-- #home -->


		<?php 
			/*
				About Page Loop!
			*/
		 ?>
		 <?php $thumb_id = get_post_thumbnail_id(66);
	   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-size', true);
	   $thumb_url = $thumb_url_array[0]; ?>
		<section class="about" id="about" style="background: url(<?php echo $thumb_url ?>)">
			<div id="primary" class="content-area">
			<?php 
			    $args = array(
			        'post_type' => 'page',
			        'p' => 66
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<?php endwhile; endif; ?>
			</div> <!-- #primary .content-area -->
		</section><!-- #about -->


		<?php 
			/*
				Portfolio Page Loop!
			*/
		 ?>

		<section class="portfolio" id="portfolio">
			<div id="primary" class="content-area">
			<?php 
			    $args = array(
			        'post_type' => 'page',
			        'p' => 63
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	


				<!-- This loop will grab the data -->
						<?php // we are going to pull in our latest four blog posts ?>
						<?php $latestPosts = new WP_Query(array(
							'post_type' => 'portfolio', // we only want blog posts
							// 'post' => 47, // this is the id that shows up from the url
							'posts_per_page' => 7
						)); ?>

				<!-- This will reveal how it shows up on the page -->
						<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>

						<?php $thumb_id = get_post_thumbnail_id();
						   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-size', true);
						   $thumb_url = $thumb_url_array[0]; ?>

						<div class="portfolio-piece" style="background-image: url('<?php echo $thumb_url ?>')">
							<h2><?php the_title(); ?></h2>
						</div>

						<?php endwhile; // end custom loop ?>
						<?php wp_reset_postdata(); // return end back to regular schedule programming ?>
							<!-- The above reset line will end the injected loop  -->

<!-- 				<?php the_content(); ?> -->

			<?php endwhile; endif; ?>
			</div> <!-- #primary .content-area -->
		</section><!-- #portfolio -->



		<?php 
			/*
				Blog Page Loop!
			*/
		 ?>
		<section class="blog" id="blog">
			<div id="primary" class="content-area">
			<?php 
			    $args = array(
			        'post_type' => 'post',
			        'posts_per_page' => 3
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

				<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>

			<?php endwhile; endif; ?>
			</div> <!-- #primary .content-area -->
		</section><!-- #blog -->

		<?php 
			/*
				contact Page Loop!
			*/
		 ?>
		 	 <?php $thumb_id = get_post_thumbnail_id(59);
		    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-size', true);
		    $thumb_url = $thumb_url_array[0]; ?>
		<section class="contact" id="contact" style="background: url(<?php echo $thumb_url ?>)">
			<div id="primary" class="content-area">
			<?php 
			    $args = array(
			        'post_type' => 'page',
			        'p' => 59
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

<!-- 				<h2><?php the_title(); ?></h2> -->
				<?php the_content(); ?>

			<?php endwhile; endif; ?>
			</div> <!-- #primary .content-area -->
			
		<?php get_footer(); ?>

		</section><!-- #contact -->


