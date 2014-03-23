<?php // HOME PAGE 
require_once('header.php'); ?>
<body class="home">
	<div id="header" class="teehee">
		<div class="shadow teehee"></div>
		<div id="global" class="teehee">
			<div class="wrap">
				<a id="logo" href="/index.php">
					<span class="brand"></span>
					<span class="brandType">Reserve123</span>
					<span class="brandTypeCity"></span>
				</a><!-- END LOGO -->
				<ul id="globalNav">
					<li>
						<a class="phone" href="tel:1-800-745-1925">800.745.1925</a>
					</li>
					<li>
						<a class="navItem" href="index.php">Retrieve E-Tickets</a>
					</li>
					<li>
						<a class="navItem" href="index.php">My Account</a>
					</li>
				</ul><!-- END GLOBAL NAV -->
			</div><!-- END WRAP -->
		</div><!-- END GLOBAL -->
	</div><!-- END HEADER -->
	


	<div class="spaceWrap">
		<h1 id="homeHeading" class="teehee"><span class="teehee"><span class="decor"></span>The easiest way to</span>Tour The World</h1>
		<?php require('searchform.php'); ?>
	</div><!-- END SPACEWRAP -->



<?php require_once('footer.php'); ?>