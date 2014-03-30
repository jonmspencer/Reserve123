<?php // TOUR PAGE 
require_once('../../../header.php'); ?>
<body class="tour">
<?php require_once('../../../global.php');?>
	<div id="glory" class="yep">
		<div class="darken" class="yep">
			<div id="subHeader" class="teehee">
				<div class="wrap">
					<ul id="breadcrumbs">
						<li class="marker sp"></li>
						<li>
							<a title="Chicago, Illinois" href="/us/chicago/">Chicago</a> 
						</li>
						<li class="separator">&rsaquo;</li>
						<li class="current">Hop On Hop Off Trolley Tour
						</li>
					</ul><!-- END BREADCRUBS -->
					<ul class="menu">
						<li>
							<a href="index.php">Accomodations</a>
						</li>
						<li>
							<a href="index.php">Packages</a>
						</li>
						<li class="parent">
							<a href="index.php">Tours and Activities</a>
							<ul class="sub-menu">
								<li>
									<a href="index.php">Food Tours</a>
								</li>
								<li>
									<a href="index.php">Dinner Cruises</a>
								</li>
								<li>
									<a href="index.php">Segway Tours</a>
								</li>
								<li>
									<a href="index.php">Bicycle Tours</a>
								</li>
								<li>
									<a href="index.php">Walkway Tours</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="index.php">St. Patrick's Day Tours</a>
						</li>
					</ul><!-- END SUBNAV -->
				</div><!-- END WRAP -->
			</div><!-- END SUBHEADER -->
			<div class="wrap">	
				<div class="featuredPost yep">
					<h1 class="featuredTitle yep">Hop On Hop Off Trolley Tour</h1>
					<div class="featuredExcerpt yep">Voted Chicago's best tour, this Hop On Hop Off Trolley Tour has long been the gold standard for touring downtown Chicago.
					</div><!-- END FEATURED EXCERPT -->
					<a class="cta" href="#">Book Now</a>
					<div class="priceDetail">Starting at <span class="featuredPrice">$35.95</span></div>
				</div><!-- END FEATURED POST -->
				<div class="featReview teehee">
					<div class="rating teehee">
						<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 
						<span class="textRating">3.8 of 5 Stars</span>
					</div><!-- END RATING -->
					<div class="reviewText">"Recommend to all! Everyone should try it! Personal driving and narrating, excellent, enjoyable, knowledgable and funny... Five stars!" <a class="allReviews" href="#reviews">Read All Reviews &rsaquo;</a>
					</div>
				</div><!-- END FEATURED REVIEW -->
			</div><!-- END WRAP -->
		</div><!-- END THE DARKENING -->
	</div><!-- END GLORY -->
	
	<div id="content" class="contentWrap teehee">
		<div class="mobilePricing desktopKill teehee">
			<div class="wrap">
				<?php require('tourSidebar.php'); ?>
			</div><!-- END WRAP -->
		</div><!-- END MOBILE PRICING -->
		<div class="tabMenu teehee">
			<div class="wrap">
				<ul class="tabs teehee">
					<li>
						<a id="tab1" class="tab tabActive" href="#overview"><span class="plus">+</span><span class="minus">-</span>Overview</a>
						<div class="mobileContent">
							<div class="wrap">
							<?php require('overview.php'); ?>
							</div><!-- END WRAP -->
						</div><!-- END MOBILE CONTENT -->
					</li>
					<li>
						<a id="tab2" class="tab" href="#details"><span class="plus">+</span><span class="minus">-</span>Details</a>
						<div class="mobileContent">
							<div class="wrap">
							<?php require('details.php'); ?>
							</div><!-- END WRAP -->
						</div><!-- END MOBILE CONTENT -->
					</li>
					<li>
						<a id="tab3" class="tab" href="#photos"><span class="plus">+</span><span class="minus">-</span>Photos</a>
						<div class="mobileContent">
							<div class="wrap">
							<?php require('photos.php'); ?>
							</div><!-- END WRAP -->
						</div><!-- END MOBILE CONTENT -->
					</li>
					<li>
						<a id="tab4" class="tab" href="#reviews"><span class="plus">+</span><span class="minus">-</span>Reviews</a>
						<div class="mobileContent">
							<div class="wrap">
							<?php require('reviews.php'); ?>
							</div><!-- END WRAP -->
						</div><!-- END MOBILE CONTENT -->
					</li>
				</ul><!-- END TABS -->
			</div><!-- END WRAP -->
		</div>
		<!-- END TAB MENU -->
		<div class="tabContainer teehee">
			<div class="wrap">
				<div id="overview" class="tabContent">
					<div class="tabRight mobileKill">
						<?php require('tourSidebar.php'); ?>
					</div><!-- END TAB RIGHT -->
					<div class="tabLeft">	
						<?php require('overview.php'); ?>
					</div><!-- END TAB LEFT -->
				</div><!-- END OVERVIEW -->
				<div id="details" class="tabContent">
					<div class="tabRight mobileKill">
						<?php require('tourSidebar.php'); ?>
					</div><!-- END TAB RIGHT -->
					<div class="tabLeft">	
					<?php require('details.php'); ?>
					</div><!-- END TAB LEFT -->
				</div><!-- END DETAILS -->
				<div id="photos" class="tabContent">
					<div class="tabLeft">
					<?php require('photos.php'); ?>
					</div><!-- END TAB LEFT -->
				</div><!-- END PHOTOS -->
				<div id="reviews" class="tabContent">
					<div class="tabRight mobileKill">
						<?php require('tourSidebar.php'); ?>
					</div><!-- END TAB RIGHT -->
					<div class="tabLeft">
					<?php require('reviews.php'); ?>
					</div><!-- END TAB LEFT -->
				</div><!-- END REVIEWS -->
			</div><!-- END WRAP -->
		</div><!-- END TAB CONTENT --> 
	</div><!-- END CONTENT WRAP -->
<?php require_once('../../../footer.php'); ?>