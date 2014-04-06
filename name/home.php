<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>NAME</title>
<!--     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<!--     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script> -->
   	<link type="stylesheet" rel="stylesheet" href="css/style.css" />
   	<link type="stylesheet" rel="stylesheet" href="css/fonts.css" />
	<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800|Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
</head>
<body>

	<nav class="topNav">
		<h1>HOME</h1>
	</nav>
	<nav class="bottomNav">
		
		<section class="iconHolder">
			<img class="navIcons" id="home" src="images/homeIcon.png" />
			<img class="navIcons" id="stats" src="images/statsIcon.png" />
			<img class="navIcons" id="settings" src="images/settingsIcon.png" />
			<img class="navIcons" id="notifications" src="images/notificationsIcon.png" />
		</section>	
		<img class="addButton" src="images/addButton.png" />

	</nav>
	
<script>
	<?php include("javascript/home.js"); ?>
</script>

</body>
</html>