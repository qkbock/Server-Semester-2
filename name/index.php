<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>NAME</title>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="javascript/raphael-min.js"></script>
    <script src="http://malsup.github.io/jquery.corner.js"></script>
   	<link type="stylesheet" rel="stylesheet" href="css/style.css" />
   	<link type="stylesheet" rel="stylesheet" href="css/fonts.css" />
   	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, maximum-scale=1.0">
</head>
<body>

<!--
<section id="contentHolder">
</section>
-->

	<section class="menuItem" id="HOME"></section>	
	<section class="menuItem" id="STATS"></section>
	<section class="menuItem" id="SETTINGS"></section>
	<section class="menuItem" id="NOTIFICATIONS"></section>
	
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

<script>
	<?php include("javascript/home.js"); ?>
</script>


</body>
</html>