<?php get_header(); ?>
	<div id="content" class="contentWrap teehee">
		<div class="tabMenu teehee">
			<div class="wrap">
				<ul class="tabs teehee">
					<li>
						<a class="tab tabActive" href="#overview">Overview</a>
					</li>
					<li>
						<a class="tab" href="#details">Details</a>
					</li>
					<li>
						<a class="tab" href="#photos">Photos</a>
					</li>
					<li>
						<a class="tab" href="#reviews">Reviews</a>
					</li>
				</ul><!-- END TABS -->
			</div><!-- END WRAP -->
		</div>
		<!-- END TAB MENU -->
		<div class="tabContainer teehee">
			<div class="wrap">
				<div id="overview" class="tabContent">
					<div class="tabRight">
						<h2>Pricing</h2>
						<ul class="pricing teehee">
							<li class="ticket teehee">
								<div class="ticketTitle">Adult</div>
								<div class="ticketPrice">$44.95</div>
							</li>
							<li class="ticket teehee">
								<div class="ticketTitle">Adult <span class="ticketTitleNote">one day only</span></div>
								<div class="ticketPrice">$34.95</div>
							</li>
							<li class="ticket teehee">
								<div class="ticketTitle">Child</div>
								<div class="ticketPrice">$17.95</div>
							</li>
							<li class="ticket teehee">
								<div class="ticketTitle">Child <span class="ticketTitleNote">under 3 years</span></div>
								<div class="ticketPrice">Free</div>
							</li>
						</ul><!-- END PRICING -->
						<div class="pricingNotes teehee">
							*Tickets valid for up to 3 days. Booking this tour by phone will incur a $5.00 convenience charge.
						</div><!-- END PRICING NOTES -->
					</div><!-- END TAB RIGHT -->	
					<div class="tabLeft">
						<h2>Tour Overview</h2>
						<p>Voted Chicago's Best Tour, this Hop On Hop Off Trolley Tour has long been the gold standard for touring downtown Chicago. The tour gives you transportation to the most famous Chicago attractions on Red & Green Trolleys and Big Red Double Decker Buses.</p>
						<p>The Explore Tour allows you to hop off to visit a Chicago attraction or museum, shop, dine, and just explore as you have 3 full days to use it. With the same ticket, you also get seasonal access to three Neighborhood Tours (North, West and South) as well as the Nights and Lights Tour (May through September).</p>
						<p>Your tour can begin at any of the 14 stops in the downtown area. Stops include: Millennium Park, the Art Institute, Field Museum, Navy Pier, John Hancock Observatory, Skydeck Chicago, and the River North district, among many others.</p>
						<p>Take your time and hop-on/hop-off for three days!</p>
					</div><!-- END TAB LEFT -->
				</div>
				<!-- END OVERVIEW -->
				<div id="details" class="tabContent ">
					<div class="tabRight">
						<h2>Pricing</h2>
						<ul class="pricing teehee">
							<li class="ticket teehee">
								<div class="ticketTitle">Adult</div>
								<div class="ticketPrice">$44.95</div>
							</li>
							<li class="ticket teehee">
								<div class="ticketTitle">Adult <span class="ticketTitleNote">one day only</span></div>
								<div class="ticketPrice">$34.95</div>
							</li>
							<li class="ticket teehee">
								<div class="ticketTitle">Child</div>
								<div class="ticketPrice">$17.95</div>
							</li>
							<li class="ticket teehee">
								<div class="ticketTitle">Child <span class="ticketTitleNote">under 3 years</span></div>
								<div class="ticketPrice">Free</div>
							</li>
						</ul><!-- END PRICING -->
						<div class="pricingNotes teehee">
							*Tickets valid for up to 3 days. Booking this tour by phone will incur a $5.00 convenience charge.
						</div><!-- END PRICING NOTES -->
					</div><!-- END TAB RIGHT -->
					<div class="tabLeft">
						<h2>Tour Detail</h2>
					</div><!-- END TAB LEFT -->
				</div>
				<!-- END DETAILS -->
				<div id="photos" class="tabContent">
					<ul class="photos">
						<li>
							<a class="photo yep" href="#" title="Chicago from a helicopter trolley, one of the first of it's kind." style="background-image:url('<?php echo get_stylesheet_directory_uri();?>/images/categories/Chicago.jpg');"></a>
						</li>
						<li>
							<a class="photo yep" href="#" title="This is New York, actually. Um, Whoops." style="background-image:url('<?php echo get_stylesheet_directory_uri();?>/images/categories/NewYork.jpg');"></a>
						</li>
						<li>
							<a class="photo yep" href="#" title="THIS IS CAPTION DATA" style="background-image:url('ABSOLUTE URL');"></a>
						</li>
					</ul><!-- END PHOTOS -->
				</div>
				<!-- END PHOTOS -->
				<div id="reviews" class="tabContent">
					Le Reviews.
				</div>
				<!-- END REVIEWS -->
			</div><!-- END WRAP -->
		</div><!-- END TAB CONTENT --> 
	</div><!-- END CONTENT WRAP -->
<?php get_footer(); ?>