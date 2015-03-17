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

				<div class="cover-title animated fadeIn">
					Hello.  I'm 
					<astrong class="name animated fadeIn">
						<span class="name pink1 animated fadeIn">Tammy</span><!-- <span class="name pink2 animated fadeIn">Kim</span> --> <span class="name pink3 animated fadeIn">Kim.</span>
					</strong>
				</div>

				<div class="cover-text animated fadeIn">
						&rsaquo; Front End<br>
						<span class="featured">Web Developer</span><br>
						<span class="featured2">/ Designer</span><br>
						from Toronto.&lsaquo;
				</div>

				<div class="down-arrow hvr-wobble-vertical">
					<p>Scroll Down</p>
					<i class="fa fa-chevron-down fa-large"></i>
				</div>

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
		<div id="primary-about" class="content-area">

		<?php 
		    $args = array(
		        'post_type' => 'page',
		        'p' => 66
		    );
		    $the_query = new WP_Query( $args );		    
		?>
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

		<div class="cover-text">
			<h2 class="page-content">&rsaquo; <?php the_title(); ?> &lsaquo;</h2>
		
			<div class="about-content">
				<?php the_content(); ?>
			</div>
		</div>

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
				<div class="contact-pad">
					<?php the_content(); ?>
					<div class="social-media">
						<a href="http://twitter.com/tammykimkim2/" title="Twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
						<a href="https://www.linkedin.com/in/tammykimkim" title="LinkedIn" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
						<a href="https://github.com/tammykimkim/" title="GitHub" target="_blank"><i class="fa fa-github fa-lg"></i></a>
						<a href="http://codepen.io/tammykimkim/" title="CodePen" target="_blank"><i class="fa fa-codepen fa-lg"></i></a>
					</div>
				</div>

			<?php endwhile; endif; ?>
			</div> <!-- #primary .content-area -->
			

<!-- 		<?php get_footer(); ?> -->
		</section><!-- #contact -->



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

<div class="3-columns">
				<h2><a href="<?php echo get_permalink(); ?>">&gt; <?php the_title(); ?> &lt;</a></h2>
				<div class="date"><?php echo get_the_date('l, F j, Y'); ?>
				</div> 

				<div class="content">
					<?php the_content(); ?>
				</div>
</div>

					<?php endwhile; endif; ?>
				</div> <!-- #primary .content-area -->

			<?php get_footer(); ?>
		</section><!-- #blog -->

