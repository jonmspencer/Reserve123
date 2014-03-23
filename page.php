<?php get_header(); 
// HOME PAGE 
if(is_front_page()) { ?>
	<div class="spaceWrap">
		<h1 id="homeHeading" class="teehee"><span class="teehee"><span class="decor"></span>The easiest way to</span>Tour The World</h1>
		<?php get_search_form(); ?>
	</div><!-- END SPACEWRAP -->
<?php } // END HOME PAGE
// INTERIOR PAGES  
else { ?>

	
<?php } get_footer(); ?>