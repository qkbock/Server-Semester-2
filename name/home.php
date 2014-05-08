<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> exhibitionData;

	$yourTotalToday;
	date_default_timezone_set('America/New_York');
	$onThisDay = date("o")."-".date("m")."-".date("d");
	
	$findToday = array("Date"=> $onThisDay);

	$cursor = $collection -> find($findToday);
	
	foreach($cursor as $doc) {
		$yourTotalToday = $yourTotalToday + $doc["duration"];
	}
	
	$todayGoal = 25;
  	
	echo '
		<article id="progress">
			<center><h2 id="todayGoal">Estimated Goal: <span id="todayGoalSpan">'.$todayGoal.'</span> min</h2></center>
			<br>
			<center><div id="progressCanvas"> </div></center>
			<center><h2 id="yourTotalToday"><span id="yourTotalTodaySpan">'.$yourTotalToday.'</span> min</h2></center>
		</article>
		<article id="notification">
			<h1 class="smaller" id="mostRecent">ASK GOOD QUESTIONS</h1>
			<p id="mostRecent">Ask John if there was any time when 
he felt overwhelmed today.</p>
		</article>	
		
	';


?>