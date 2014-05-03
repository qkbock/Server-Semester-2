<?php
/*
	$m = new MongoClient();
	$db = $m -> qandm;
	$pulseCollection = $db -> pulseData;
	$movieCollection = $db -> movieData;
*/

/* 	$person1 = $_POST['userNameVal'];	 */
	
/*
	$findMovieUser = array("Username"=> $person1, "Movie" => $movie);

	$cursor = $movieCollection -> find($findMovieUser);
	foreach($cursor as $doc) {
	 	$start1 = intval($doc["startTime"]);
	 	$end1 = intval($doc["endTime"]); 
	 }

   	$findTimeUser1 = array("Username"=> $person1, "Time"=> array('$gt' => $start1, '$lte' => $end1) );  	

  	$cursor = $pulseCollection -> find($findTimeUser1);
*/
	$yourTotalToday = 25;
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