<?php get_header(); ?>

	<div class="contentWrap teehee">
		<div class="wrap">
			<div class="listHead yep">
				<h3>Popular Tours</h3>
				<a href="#" data-filter="*">View All Tours &rsaquo;</a>
			</div><!-- END LIST HEADER -->
			<ul class="tourList yep isotope">
			
				<?php 
				$loop = new WP_Query( array('posts_per_page' => 3)); 
				while ( $loop->have_posts() ) : $loop->the_post();
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
				
				
				<li class="tour item">
					<a class="tourHead teehee" href="<?php the_permalink();?>" <?php if($src[0] != "") { ?> style="background-image: url(<?php echo $src[0]; ?> );" <?php } ?>>
						<span class="theDarkness"></span>
						<span class="tourHeadInfo yep">
							<span class="thTop yep">
								<span class="tourTime">75 min</span>
								<span class="rating">
									<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 
									<span class="textRating">3.8 of 5 Stars</span>							
								</span>
							</span><!-- END TOUR HEADER TOP -->
							<span class="tourTitle yep"><?php the_title();?></span>
							<span class="priceDetail yep">Starting at <span class="featuredPrice">$35.95</span></span>
						</span><!-- END TOUR HEAD INFO -->
					</a><!-- END TOUR HEAD -->
					<div class="tourExcerpt"><?php //the_excerpt(); ?> Enjoy a cruise of the historic Chicago River that showcases over 40 landmarks of modern American architecture. Join us on an exciting journey as we tour the Chicago... <a href="<?php the_permalink();?>">Read More</a>
					</div><!-- END TOUR EXCERPT -->
					<a class="cta alt" href="<?php the_permalink();?>">Book This Tour</a>
				</li><!-- END TOUR -->
				
				<?php endwhile; ?>
			</ul><!-- END TOUR LIST -->
		</div><!-- END WRAP -->
	</div><!-- END CONTENT WRAP -->


<?php get_footer(); ?>