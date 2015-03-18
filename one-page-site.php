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

		<section class="home clearfix" id="home" style="background: url(<?php echo $thumb_url ?>)">
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
	<section class="about clearfix" id="about" style="background: url(<?php echo $thumb_url ?>)">
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
			<h2 class="page-content">&rsaquo; <?php the_title(); ?> &lsaquo;
			</h2>
		
			<div class="title-content">
	<!-- 			<?php the_content(); ?> -->
	<!-- Adding content here -->
	<div class="p1 animated fadeIn">
		<h5>&gt; I am a Designer and Front-End Web Developer &lt;<br>
			with a focus on Web Design and Brand Development.
		</h5>
		<p class="p-hr">——————————————————–>/<——————————————————–
		<div class="p1">
			&lt; I love to create and build things that people can use. &gt;
			<p class="p2">
				&lt; I enjoy working with people that want to make a difference in other people’s lives. &gt;
			</p>
			<p class="p2">
				&lt; A few of my favourite things: coffee, croissants &amp; potato chips. &gt;
			</p>
	</div>

	<h5>&gt; This is me &lt;
	</h5>
	<p class="p-hr">——————————————————–>/<——————————————————–
	<div class="p1">
			&lt; Got schooled at Ryerson University. &gt;
		<p class="p2">
			&lt; Upon graduation, I had the amazing opportunity to work with the infamous pop artist, Frank Stella, who, despite his cigar smoking, has outlived many of his contemporaries, including Andy Warhol.  Traveled to NYC &amp; Houston Texas, painting, taping, &amp; spraying on location and in the Toronto studio. &gt;
		</p>
		<p class="p2">
			&lt; I’ve even been to Paris. Where I ate a lot of croissants.  Like, a lot. &gt;
		</p>
	</div>

	<h5>&gt; So what’s in a name? &lt;
	</h5>
	<p class="p-hr">——————————————————–>/<——————————————————–
	<div class="p1">
		&lt; I ended up marrying a man - an amazing man - with the same last name.<br>
		Hence the nickname, <em>“TAMMY KIM KIM”,</em> which stuck. &gt;
		<p class="p2">
			Since then, I’ve had two more Kims (2 daughters), started my own business, got involved in fundraisers raising close to $10,000 for the latest one in our neighbourhood that is now 4 years running, and ran a marathon. I also used lunch making as a creative outlet to funnel some energy, which led to a blog and eventually to Hacker You, a hands-on bootcamp course for web developers where I have picked up the following skills & workflow tools:
		</p>
	</div>

	<h5 class="skills">HTML5 / CSS3 / Sass / Responsive Design / JavaScript / jQuery / APIs / WordPress / Sublime Text / Git / GitHub / Gulp.
	</h5>

	<div class="p1">
		I enjoy working with people that want to make a difference in other people’s lives. <br>
		<p class="p2">
			I also use the exclamation mark a lot… since I love bacon!   Life is beautiful!   Let's get started!
		</p>
	</div>

	<p class="p-hr">——————————————————–>/<——————————————————–

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

		<section class="portfolio clearfix" id="portfolio">
			<div id="primary-portfolio" class="content-area">
			<?php 
			    $args = array(
			        'post_type' => 'page',
			        'p' => 63
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

				<div class="cover-text">
					<h2 class="page-content">&rsaquo; <?php the_title(); ?> &lsaquo;</h2>
				
					<div class="title-content clearfix">


				<!-- This loop will grab the data -->
						<?php // we are going to pull in our latest four blog posts ?>
						<?php $latestPosts = new WP_Query(array(
							'post_type' => 'portfolio', // we only want blog posts
							// 'post' => 47, // this is the id that shows up from the url
							'posts_per_page' => 8,
							'orderby' => 'menu_order',
							'order' => 'ASC'
						)); ?>

				<!-- This will reveal how it shows up on the page -->
						<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>

						<?php $thumb_id = get_post_thumbnail_id();
						   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-size', true);
						   $thumb_url = $thumb_url_array[0]; ?>

						<div class="portfolio-piece" style="background-image: url('<?php echo $thumb_url ?>')">
							<h2 class="pp-title"><?php the_title(); ?></h2>

<div class="terms">
			<?php $terms = get_the_terms($post->ID, 'technologies' ); ?>
                <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
                        <ul>
                            <?php foreach ( $terms as $term ) : ?>
                            <li><?php echo $term->name ?></li>
                            <?php endforeach ?>
                     </ul>
                <?php endif ?>

						</div> <!-- .portfolio-piece -->
</div> <!-- .terms -->

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
		<section class="contact clearfix" id="contact" style="background: url(<?php echo $thumb_url ?>)">
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
			

		</section><!-- #contact -->



		<?php 
			/*
				Blog Page Loop!
			*/
		 ?>
		<section class="blog clearfix" id="blog">
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
		</section><!-- #blog -->


<?php get_footer(); ?>