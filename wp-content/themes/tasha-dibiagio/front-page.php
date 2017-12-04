<?php
/**
 * Template Name: Font Page Portfolio Grid
 *
 */
?>
<?php get_header(); ?>

	<section id="front-page_portfolio-grid">
		
		<?php 
		// get only portfolio posts 
		query_posts(array( 
	        'post_type' => 'portfolio_item',
	        'showposts' => 10 
	    	) ); 
    	$counter = 1;
    	//start The Loop
		 if ( have_posts() ) : 
		        while ( have_posts() ) :
		            the_post(); 
        			//fetch gallery images
					    		
					$images = get_field('images');
					$size = 'large'; 
		    		$arrayKeys = array_keys($images);

					// the first element of your array is:
					$featuredimage =  $images[$arrayKeys[0]];
		            ?>
		           
			   		
			   			<div style="background: url( '<?php echo $featuredimage['sizes'][$size]; ?>'); background-size: cover" class="project project-<?php echo $counter ?> ">
							<a class="project-link" href="<?php the_permalink(); ?>">
								<div class="project-contents-wrapper">
									<h3 class="project-name"><?php the_title(); ?></h3>
									<button class="see-project">Check it out >></button>
								</div>
							</a>
						</div>     
				
			    	<?php $counter += 1;
			    		endwhile;
			endif; 
		// end The Loop ?>




	</section>
	<section class="two-column">
		<div class="two-column_left column">
			<h3>Words to the Choir</h3>
			<svg width="100%" height="100%" class="bottom-border">
			<line y1="50%" x1="0%" y2="50%" x2="100%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1"/>
			<line y1="0%" x1="0%" y2="100%" x2="0%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1" />
			<line y1="0%" x1="100%" y2="100%" x2="100%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1" />
	</svg>
			<p class="tweet">"Design never saw that coming" <a href="#">#calledit</a></p>
			<p class="tweet"><a href="#">@geniespinoa</a> Every postcard will be entirely written and sent by me.</p>

		</div>
		<div class="two-column_right column">
			<h3>Let's talk!</h3>
			<svg width="100%" height="100%" class="bottom-border">
			<line y1="50%" x1="0%" y2="50%" x2="100%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1"/>
			<line y1="0%" x1="0%" y2="100%" x2="0%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1" />
			<line y1="0%" x1="100%" y2="100%" x2="100%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1" />
			</svg>
			<p><a href="#">Contact Me</a> directly or jump on social media to read and comment on my public ramblings.</p>
			<div class="social-container">
				<img src="./assets/circle.svg">
				<img src="./assets/circle.svg">
				<img src="./assets/circle.svg">
				<img src="./assets/circle.svg">
			</div>
			<img class="illustration-bottom-page img-responsive" src="./assets/Barbie-after-1200.svg">
		</div>
	</section>
<?php get_footer(); ?>