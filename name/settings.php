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
	echo '
		<div class="slider"></div>
		<h2 class="goalHeadings" id="current">Current Goal</h2>
		<div class="slider"></div>
		<h2 class="goalHeadings" id="ideal">Ideal Distribution</h2>
		<p class="cancelSaveButtons" id="saveButtonCenter">SAVE</p>

	';


?>