<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>NAME</title>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="javascript/raphael-min.js"></script>
    <script src="http://malsup.github.io/jquery.corner.js"></script>
   	<link type="stylesheet" rel="stylesheet" href="css/style.css" />
   	<link type="stylesheet" rel="stylesheet" href="css/fonts.css" />
   	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, maximum-scale=1.0">
</head>
<body>



	<section class="menuItem" id="HOME"></section>	
	<section class="menuItem" id="STATS">
		<article class="statsSection" id="stats">
		</article>
		<article class="statsSection" id="statsPoints">	
			<img id="pointsFrame" src="images/points/pointsFrame.png" />			
			<div id="pointsImageHolder">
				<img id="pointsImage" src="images/points/pointsImage.png" />
				<div id="hotspot1" class="hotspot" value="7"></div>
				<div id="hotspot2" class="hotspot" value="16"></div>
				<div id="hotspot3" class="hotspot" value="10"></div>
				<div id="hotspot4" class="hotspot" value="3"></div>
				<div id="hotspot5" class="hotspot" value="16"></div>
				<div id="hotspot6" class="hotspot" value="4"></div>
				<div id="hotspot7" class="hotspot" value="17"></div>
				<div id="hotspot8" class="hotspot" value="16"></div>
			</div>
			
		</article>
		<article class="statsSection" id="statsCalendar">
		</article>
		<div class="mask"></div>
		<nav class="statsNav">
			<table class="statsNavTable">
				<tr>
					<td class="refreshable" id="badgesButton" value="badges">BADGES</td>
					<td class="refreshable" id="pointsButton" value="points">POINTS</td>
					<td class="refreshable" id="calendarButton" value="calendar">CALENDAR</td>
				</tr>
			</table>
		</nav>
	</section>
	<section class="menuItem" id="SETTINGS"></section>
	<section class="menuItem" id="NOTIFICATIONS"></section>
	
	
	
	
	<nav class="topNav">
		<h1 id="pageName">HOME</h1>
		<img id="refreshButton" src="images/refresh.png" />
	</nav>
	
	<nav class="bottomNav">
		<section class="iconHolder">
			<img class="navIcons refreshable" id="home" name="HOME" value="home" src="images/homeIcon.png" />
			<img class="navIcons refreshable" id="stats" name="STATS" value="stats" src="images/statsIcon.png" /></a>
			<img class="navIcons refreshable" id="settings" name="SETTINGS" value="settings" src="images/settingsIcon.png" />
			<img class="navIcons refreshable" id="notifications" name="NOTIFICATIONS" value="notifications" src="images/notificationsIcon.png" />
		</section>	
		<img class="addButton" src="images/addButton.png" />
	</nav>






	<div class="overlay">
		<img class="XButton" src="images/XButton.png" />
	</div>
	
	<div class="badgeOverlay">
		<h2 class="badgeNameOverlay">THE NIGHT OWL</h2>
		<img class="badgeImageOverlay" src="images/badges/nightOwl.png" />
		<p class="badgePointsOverlay">100 points</p>
		<p class="badgeDiscriptionOverlay">This is a badge</p>
	</div>
	
<script>
	<?php include("javascript/home.js"); ?>
</script>


</body>
</html>


	
<!--
	<section class="menuItem" id="STATS">
		<article class="tabHolder">
			<article class="tab" id="badgesTab"></article>
			<article class="tab" id="pointsTab"></article>
			<article class="tab" id="calenderTab"></article>
		</article>
		<article class="statsSubMenuItem" id="badges"></article>
		<article class="statsSubMenuItem" id="points">
			<section class="pointsOverTime"></section>
			<section class="distributionOverTime"></section>
		</article>
		<article class="statsSubMenuItem" id="calender">
			<section class="month"></section>
			<section class="day"></section>
		</article>
	</section>
	
	
	<section class="menuItem" id="SETTINGS">

	</section>	
-->