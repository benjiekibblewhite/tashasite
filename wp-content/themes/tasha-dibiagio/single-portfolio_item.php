<?php
/**
 * Template Name: Font Page Portfolio Grid
 *
 */
?>
<?php get_header(); ?>

<section id="portfolio-single">
	<?php 
    	//start The Loop
		 if ( have_posts() ) :  while ( have_posts() ) : the_post(); 
		 //get gallery images
 			$images = get_field('images');
		 ?>
	
		<div class="portfolio-images">
			<div id="portfolio-images-slider">
				<!--insert img slider -->
				<?php if ($images) :
					foreach ($images as $image) : ?>
                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                 <?php	endforeach;
				endif; ?>
			</div>
		</div>
		<div class="portfolio-info">
			<h2 class="portfolio-info-title"><?php the_title(''); ?></h2>
			<div class="portfolio-info-tags"><?php
												$tags = comma_tags( get_the_tags(), false );
												echo $tags;
											?>
			</div>
			<div class="portfolio-info-section">
				<button class="portfolio-info-section_title">Project Story</button>
				<div class="portfolio-info-section_text  portfolio-info-section_first">
					<p><?php the_field( 'project_story' ); ?></p>
				</div>
			</div>
			<div class="portfolio-info-section">
				<button class="portfolio-info-section_title">Small Details</button>
				<div class="portfolio-info-section_text">
					<p><?php the_field( 'small_details' ); ?></p>
				</div>
			</div>
			<div class="portfolio-info-section">
				<button class="portfolio-info-section_title">Credits</button>
				<div class="portfolio-info-section_text">
					<p><?php the_field( 'credits' ); ?></p>
				</div>
			</div>
			<div class="portfolio-info-interactives"><a href="#" class="portfolio-info-interactives_share"><span class="portfolio-interactives_sharearrow">➳</span> SHARE</a></div>
			<button class="portfolio-navigation portfolio-navigation_previous"><i class="fa fa-angle-double-left" title="Go to Previous Portfolio Item"></i></button>
			<button class="portfolio-navigation portfolio-navigation_next"><i class="fa fa-angle-double-right" title="Go to Next Portfolio Item"></i></button>
		</div>
	    <?php endwhile; else : ?>
    
        <p><?php _e( 'Sorry, no posts matched your criteria.') ?></p>
        
    <?php endif; ?>
	</section>
	
<?php get_footer(); ?>