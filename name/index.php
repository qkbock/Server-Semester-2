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
    <script src="javascript/jquery.nouislider.min.js"></script>
    <script src="javascript/jscolor.js"></script>

   	<link type="stylesheet" rel="stylesheet" href="css/style.css" />
   	<link type="stylesheet" rel="stylesheet" href="css/fonts.css" />
   	<link href="css/jquery.nouislider.css" rel="stylesheet">
   	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, maximum-scale=1.0">
</head>
<body>

<!-- 	......................................HOME...................................... -->

	<section class="menuItem" id="HOME"></section>

<!-- 	......................................STATS...................................... -->
		
	<section class="menuItem" id="STATS">
		<article class="statsSection" id="stats">
		</article>
		<article class="statsSection" id="statsPoints">	
			<img id="pointsFrame" src="images/points/pointsFrameBigFont.png" />			
			<div id="pointsImageHolder">
				<img id="pointsImage" src="images/points/pointsImageBigFont.png" />
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
			<h2 class="calendarMonth">May, 2014</h2>
			<table class="daysOfWeek">
				<tr>
					<td>M</td>
					<td>T</td>
					<td>W</td>
					<td>Th</td>
					<td>F</td>
					<td>S</td>
					<td>Su</td>
				</tr>
			</table>
			<div class="datesHolder">
				<table class="dates">
					<tr>
						<td value="Feb 24, 2014">24</td>
						<td value="Feb 25, 2014">25</td>
						<td value="Feb 26, 2014">26</td>
						<td value="Feb 27, 2014">27</td>
						<td value="Feb 28, 2014">28</td>
						<td value="Mar 1, 2014">1</td>
						<td value="Mar 2, 2014">2</td>
					</tr>
					<tr>
						<td value="Mar 3, 2014">3</td>
						<td value="Mar 4, 2014">4</td>
						<td value="Mar 5, 2014">5</td>
						<td value="Mar 6, 2014">6</td>
						<td value="Mar 7, 2014">7</td>
						<td value="Mar 8, 2014">8</td>
						<td value="Mar 9, 2014">9</td>
					</tr>
					<tr>
						<td value="Mar 10, 2014">10</td>
						<td value="Mar 11, 2014">11</td>
						<td value="Mar 12, 2014">12</td>
						<td value="Mar 13, 2014">13</td>
						<td value="Mar 14, 2014">14</td>
						<td value="Mar 15, 2014">15</td>
						<td value="Mar 16, 2014">16</td>
					</tr>
					<tr>
						<td value="Mar 17, 2014">17</td>
						<td value="Mar 18, 2014">18</td>
						<td value="Mar 19, 2014">19</td>
						<td value="Mar 20, 2014">20</td>
						<td value="Mar 21, 2014">21</td>
						<td value="Mar 22, 2014">22</td>
						<td value="Mar 23, 2014">23</td>
					</tr>
					<tr>
						<td value="Mar 24, 2014">24</td>
						<td value="Mar 25, 2014">25</td>
						<td value="Mar 26, 2014">26</td>
						<td value="Mar 27, 2014">27</td>
						<td value="Mar 28, 2014">28</td>
						<td value="Mar 29, 2014">29</td>
						<td value="Mar 30, 2014">30</td>
					</tr>
					<tr>
						<td value="Mar 31, 2014">31</td>
						<td value="April 1, 2014">1</td>
						<td value="April 2, 2014">2</td>
						<td value="April 3, 2014">3</td>
						<td value="April 4, 2014">4</td>
						<td value="April 5, 2014">5</td>
						<td value="April 6, 2014">6</td>
					</tr>
					<tr>
						<td value="April 7, 2014">7</td>
						<td value="April 8, 2014">8</td>
						<td value="April 9, 2014">9</td>
						<td value="April 10, 2014">10</td>
						<td value="April 11, 2014">11</td>
						<td value="April 12, 2014">12</td>
						<td value="April 13, 2014">13</td>
					</tr>
					<tr>
						<td value="April 14, 2014">14</td>
						<td value="April 15, 2014">15</td>
						<td value="April 16, 2014">16</td>
						<td value="April 17, 2014">17</td>
						<td value="April 18, 2014">18</td>
						<td value="April 19, 2014">19</td>
						<td value="April 20, 2014">20</td>
					</tr>
					<tr>
						<td value="April 21, 2014">21</td>
						<td value="April 22, 2014">22</td>
						<td value="April 23, 2014">23</td>
						<td value="April 24, 2014">24</td>
						<td value="April 25, 2014">25</td>
						<td value="April 26, 2014">26</td>
						<td value="April 27, 2014">27</td>
					</tr>
					<tr>
						<td value="April 28, 2014">28</td>
						<td value="April 29, 2014">29</td>
						<td value="April 30, 2014">30</td>
						<td value="May 1, 2014">1</td>
						<td value="May 2, 2014">2</td>
						<td value="May 3, 2014">3</td>
						<td value="May 4, 2014">4</td>
					</tr>
					<tr>
						<td value="May 5, 2014">5</td>
						<td value="May 6, 2014">6</td>
						<td style="background-color:#25335A;" value="May 7, 2014">7</td>
						<td value="May 8, 2014">8</td>
						<td value="May 9, 2014">9</td>
						<td value="May 10, 2014">10</td>
						<td value="May 11, 2014">11</td>
					</tr>
					<tr>
						<td value="May 12, 2014">12</td>
						<td value="May 13, 2014">13</td>
						<td value="May 14, 2014">14</td>
						<td value="May 15, 2014">15</td>
						<td value="May 16, 2014">16</td>
						<td value="May 17, 2014">17</td>
						<td value="May 18, 2014">18</td>
					</tr>
					<tr>
						<td value="May 19, 2014">19</td>
						<td value="May 20, 2014">20</td>
						<td value="May 21, 2014">21</td>
						<td value="May 22, 2014">22</td>
						<td value="May 23, 2014">23</td>
						<td value="May 24, 2014">24</td>
						<td value="May 25, 2014">25</td>
					</tr>
					<tr>
						<td value="May 26, 2014">26</td>
						<td value="May 27, 2014">27</td>
						<td value="May 28, 2014">28</td>
						<td value="May 29, 2014">29</td>
						<td value="May 30, 2014">30</td>
						<td value="May 31, 2014">31</td>
						<td value="June 1, 2014">1</td>
					</tr>
				</table>
			</div>
			<div id="calendarDayHolder">
			</div>
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
	
<!-- 	......................................SETTINGS...................................... -->
	<section class="menuItem" id="SETTINGS">
		
		<article class="settingsSection" id="settings">
			<h2 class="goalNumbers" id="currentNumbers">30:70</h2>
			<div class="sliderHolder" id="currentSliderHolder">
				<div id="currentSlider"></div>
			</div>
			<h2 class="goalHeadings" id="current">Current Goal</h2>
			
			<h2 class="goalNumbers" id="idealNumbers">50:50</h2>			
			<div class="sliderHolder" id="idealSliderHolder">
				<div class="slider" id="idealSlider"></div>
			</div>
			<h2 class="goalHeadings" id="ideal">Ideal Distribution</h2>
			<p class="names" id="you1">You</p>
			<p class="names" id="you2">You</p>
			<p class="names" id="john1">John</p>
			<p class="names" id="john2">John</p>
			<p class="cancelSaveButtons" id="saveButtonCenter">SAVE</p>
			<img class="locked" id="bottomOfPage" src="images/lock.png" />
		</article>
		
		<article class="settingsSection" id="settingsModule">	
			<img class ="moduleImage" src ="images/module.png" />
			<h2 class="module">Change the color of your button on the module:</h2>
			<input class="color" id="youColor" value="">
			<p class="cancelSaveButtons buttonColorSave" id="saveButtonCenter">SAVE</p>
<!-- 			<img class="locked" id="bottomOfPage" src="images/lock.png" /> -->
		</article>
		
		<article class="settingsSection" id="settingsChores">
			<h2 class="settingsChores">Select chores to focus on: </h2>
			<div class="choreHolder">
				<ul>
					<li class="green">Dusting 
						<img class="buttonInChoreList" src="images/XButton.png" /></li>
					<li class="green">Doing the Dishes 
						<img class="buttonInChoreList" src="images/XButton.png" /></li>
					<li class="green">Sweeping 
						<img class="buttonInChoreList" src="images/XButton.png" /></li>
					<li class="gray">Mopping
						<img class="buttonInChoreList" src="images/check.png" /></li>
					<li class="gray">Vacuuming
						<img class="buttonInChoreList" src="images/check.png" /></li>
					<li class="gray">Chore
						<img class="buttonInChoreList" src="images/check.png" /></li>
					<li class="gray">Chore 2
						<img class="buttonInChoreList" src="images/check.png" /></li>
				</ul>
			</div>
<!--
			<p class="cancelSaveButtons" id="saveButtonCenter">SAVE</p>
			<img class="locked" id="bottomOfPage" src="images/lock.png" />
-->
		</article>
		
<!-- 		<div class="mask"></div> -->
		<nav class="settingsNav">
			<table class="settingsNavTable">
				<tr>
					<td class="refreshable" id="goalButton" value="goal">GOAL</td>
					<td class="refreshable" id="moduleButton" value="module">MODULE</td>
					<td class="refreshable" id="choresButton" value="chores">CHORES</td>
				</tr>
			</table>
		</nav>
	</section>
		
<!-- 	......................................NOTIFICATIONS...................................... -->
	
	<section class="menuItem" id="NOTIFICATIONS"></section>
	
	
<!-- 	......................................TOP NAV...................................... -->

	
	<nav class="topNav">
		<h1 id="pageName">HOME</h1>
		<img id="refreshButton" src="images/refresh.png" />
	</nav>

<!-- 	......................................BOTTOM NAV...................................... -->

	<nav class="bottomNav">
		<section class="iconHolder">
			<img class="navIcons refreshable" id="home" name="HOME" value="home" src="images/homeIcon.png" />
			<img class="navIcons refreshable" id="stats" name="STATS" value="stats" src="images/statsIcon.png" /></a>
			<img class="navIcons refreshable" id="settings" name="SETTINGS" value="settings" src="images/settingsIcon.png" />
			<img class="navIcons refreshable" id="notifications" name="NOTIFICATIONS" value="notifications" src="images/notificationsIcon.png" />
		</section>	
		<img class="addButton" src="images/addButton.png" />
	</nav>



<!-- 	......................................OVERLAYS...................................... -->

	<img class="reward"  />

	<div class="overlay">
		<img class="XButton" src="images/XButton.png" />
	</div>
	
	<div class="badgeOverlay">
		<h2 class="badgeNameOverlay">THE NIGHT OWL</h2>
		<img class="badgeImageOverlay" src="images/badges/nightOwl.png" />
		<p class="badgePointsOverlay">100 points</p>
		<p class="badgeDiscriptionOverlay">This is a badge</p>
	</div>
	
	<div class="addChoreOverlay">
		<h2 class="addChoreOverlay">Begin a chore now:</h2>
		<img class="timerButton" value="startTimer" src="images/startTimerButton.png" />
		<img class="orImage" src="images/orImage.png" />
		<h2 class="addChoreOverlay">Log a previous chore:</h2>
		<p class="addChoreInput" id="date"><span class="choreOverlayLabel">DATE: </span><input class="choreInput" id="date" type="date" /></p>
		<p class="addChoreInput" id="startTime"><span class="choreOverlayLabel">START TIME: </span><input class="choreInput" id="startTime" type="time" /></p>
		<p class="addChoreInput" id="endTime"><span class="choreOverlayLabel">END TIME: </span><input class="choreInput" id="endTime" type="time" /></p>
		<p class="cancelSaveButtons" id="cancelButton">CANCEL</p>
		<p class="cancelSaveButtons" id="saveButton">SAVE</p>
	</div>


<!-- 	......................................END...................................... -->

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