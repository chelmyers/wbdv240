<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'includes/_head.php'; ?>
<style>
	#canvas {
		margin-top: 20px;
	}
</style>
</head>
<body>

	<div id="layout" class="pure-g-r">
		<a href="#menu" id="menuLink" class="pure-menu-link">
			<img src="img/navicon-png2x.png" width="20" alt="Menu toggle">
		</a>

		<!-- Side Menu -->
		<div class="pure-u" id="menu">
			<div class="pure-menu pure-menu-open">
				<?php include_once 'includes/_sidemenu.php'; ?>
			</div>
		</div>
		<!-- / Side Menu -->

		<!-- Main Content Area -->
		<div class="pure-u" id="main">

			<div class="hero">
					<h1 class="pure-u-1">WBDV240</h1>
					<h2 class="pure-u-3-4 l-centered">Web Authoring I</h2>

					<div class="hero-cta pure-u-3-4">
					<p>
							<a class="pure-button pure-button-cta" href="syllabus.php">Get Started</a>
					</p>
					<p>
							<a href="//github.com/philsinatra/wbdv240" target="_blank">View on GitHub</a>
							<span class="muted">|</span>
							<span class="muted">Version 2.0.0</span>
					</p>
					</div>
			</div>

			<div class="content">

				<div class="pure-g-r marketing-ribbon">
					<div class="pure-u-1-2">
						<div class="l-hbox">
							<h2 class="content-subhead">Hello World!</h2>
							<p>This is the class website for WBDV 240. On this site you will find the course syllabus, calendar, a list of resources, and full lecture notes for all 10 weeks of class as well as links to contact instructors for help.</p>
						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-hbox">
							<h2 class="content-subhead">Class Textbook Is Now Available Online</h2>
							<p>Our <a href="//www.amazon.com/HTML-CSS-Design-Build-Websites/dp/1118008189%3FSubscriptionId%3DAKIAJYKJBAJTAUI7IXAQ%26tag%3Dcoursekit-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3D1118008189" title="Required Textbook" target="_blank">required text book</a> (<a href="http://www.amazon.com/HTML-CSS-Design-Build-Websites/dp/1118008189%3FSubscriptionId%3DAKIAJYKJBAJTAUI7IXAQ%26tag%3Dcoursekit-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3D1118008189" target="_blank">Amazon</a>) is now available in the <a href="//innoserv.library.drexel.edu/search~S9?/tHTML+and+CSS:+Design+and+Build+Websites/thtml+and+css+design+and+build+websites/1%2C1%2C2%2CB/frameset&amp;FF=thtml+and+css+design+and+build+websites&amp;1%2C%2C2" target="_blank">Haggerty Library electronic resources</a>.</p>
						</div>
					</div>
				</div>

				<h2>Days Left In Term Represented by Green</h2>
				<div align="center">
					<canvas id="canvas" height="450" width="450"></canvas>
				</div>

			</div>
			<!-- / .content -->

			<?php include 'includes/_footer.php'; ?>
		</div>
		<!-- / Main Content Area -->

	</div>
	<!-- / #layout -->

	<script src="js/vendor/1.0.10.js"></script>
	<script src="js/chart.js"></script>
	<script>
	var oneDay = 24*60*60*1000;
	var startDate = new Date(2013,08,24); //year,month,day of first class session (month - 1; jan = 0)
	var today = new Date();
	var endDate = new Date(2013,11,03); //year,month,day of last class session (month - 1; jan = 0)
	var daysPast = Math.round(Math.abs((today.getTime() - startDate.getTime())/(oneDay)));
	var daysFuture = Math.round(Math.abs((endDate.getTime() - today.getTime())/(oneDay)));
	var doughnutData = [
			{
				value: daysPast,
				color: "#d64123"
			},
			{
				value: daysFuture,
				color: "#b9bf15"
			}
		];
	var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
	</script>

</body>
</html>
