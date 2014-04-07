<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>NAME</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="javascript/raphael-min.js"></script>
    <script src="http://malsup.github.io/jquery.corner.js"></script>

<!--
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
-->
   	<link type="stylesheet" rel="stylesheet" href="css/style.css" />
   	<link type="stylesheet" rel="stylesheet" href="css/fonts.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, maximum-scale=1.0">
</head>
<body>


	
	<section class="menuItem" id="HOME">
		<article id="progress">
			<center><h2 id="estimatedGoal">Estimated Goal: <span id="estimatedGoal">35</span> min</h2></center>
			<br>
			<center><div id="progressCanvas"> </div></center>
			<center><h2 id="yourTotalToday">12 min</h2></center>
		</article>
		<article id="notification">
			<h1 class="smaller" id="mostRecent">ASK GOOD QUESTIONS</h1>
			<p id="mostRecent">Ask John if there was any time when 
he felt overwhelmed today.</p>
		</article>
		
	</section>
	
	
	<section class="menuItem" id="STATS">

	</section>
	
	
	<section class="menuItem" id="SETTINGS">

	</section>
	
	
	<section class="menuItem" id="NOTIFICATIONS">
		<article id="notificationHolder">
			<article class="notification">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification coupon">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification coupon">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification coupon">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
		
		</article>
	</section>
	
	
		<nav class="topNav">
		<h1 id="pageName">HOME</h1>
	</nav>
	
	<nav class="bottomNav">
		<section class="iconHolder">
			<img class="navIcons" id="home" name="HOME" src="images/homeIcon.png" />
			<img class="navIcons" id="stats" name="STATS" src="images/statsIcon.png" /></a>
			<img class="navIcons" id="settings" name="SETTINGS" src="images/settingsIcon.png" />
			<img class="navIcons" id="notifications" name="NOTIFICATIONS" src="images/notificationsIcon.png" />
		</section>	
		<img class="addButton" src="images/addButton.png" />
	</nav>
	
<script>
	<?php include("javascript/home.js"); ?>
</script>

</body>
</html>