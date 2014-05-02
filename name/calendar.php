<?php
/*
	$m = new MongoClient();
	$db = $m -> qandm;
	$pulseCollection = $db -> pulseData;
	$movieCollection = $db -> movieData;
*/

	$date = $_POST['date'];	
	$startPoint = rand(11, 300);
	$length = rand(1, 10);
	$numberOfChores = rand(1, 6);
	$colorSelector = rand(1, 2);
	$color = "#9DC52C";
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
	<h2 id="timelineDay"> 
		<span style="margin-right:5px; padding-left:15px; background-color:#59BFC5; border-radius:5px;"></span> You<span style="padding-left:25px;"></span>
		';
	echo $date;
	echo '
		<span style="padding-left:25px;"></span>John<span style="margin-left:5px; padding-left:15px; background-color:#9DC52C; border-radius:5px;"></span>
	</h2>
	<img id="timeline" src="images/calendar/calendarDayTimeline.png" />
	';
	
	echo '
	<svg height="58%" width="100%">
	  ';
	  	for ($i = 1; $i <= $numberOfChores; $i++) {
	  		if($colorSelector < 1.5){
		  		$color = "#9DC52C";
	  		}
	  		else{
		  		$color = "#59BFC5";
	  		}
		    echo'<g fill="none" stroke="'.$color.'" stroke-width="20">
		    		<path stroke-linecap="round" d="M'.$startPoint.' 32 l '.$length.' 0" />
		    	</g>';
		    $startPoint = rand(11, 300);
		    $length = rand(1, 10);
		    $colorSelector = rand(1, 2);
	    }
	echo'  
	</svg>
	';


?>