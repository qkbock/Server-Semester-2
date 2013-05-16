<?php

	$m = new MongoClient();
	$db = $m -> qandm;
	$collection = $db -> pulseData;
	
	$movie = "Big Bang Theory";
	$person1 = "Quincy";
	$person2 = "Mauricio";
	
	$start1 = 1367461209;
	$end1 = 1367462919;
	
	$start2 = 1367524387;
	$end2 = 1367525959;
  	
   	$findTimeUser1 = array("Username"=> $person1, "Time"=> array('$gt' => $start1, '$lte' => $end1) );
   	$findTimeUser2 = array("Username"=> $person2, "Time"=> array('$gt' => $start2, '$lte' => $end2) );
   	
  	$cursor = $collection -> find($findTimeUser1);

  	echo '<html>
  			<head>
  				<link href="css/graphStyle.css" rel="stylesheet" type="text/css" />
  				<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type="text/css">

  			</head>
  			<body>
  				<center><h1 id="title">Your Results</h1></center>
  				<div id="graphHolder"><center><h2 id="movieTitle">';
  				echo $movie;
  				echo '</h2></center>';
  	
	echo '<svg id="graph1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="200px" > <polyline fill="none" stroke="#F27927" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1" points="' ;
	
	foreach($cursor as $doc) {
		$movieTime = $doc["Time"] - $start1;
		$movieTime *= 1;
		echo $movieTime;
		echo ",";
		$pulseValue = $doc["Pulse"]*1.5 - 0;
		echo $pulseValue;
		echo " ";		
	}
	
	echo '"/></svg>';

  	$cursor = $collection -> find($findTimeUser2);
  	
  		echo '<svg id="graph2" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="200px" > <polyline fill="none" stroke="#30858E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1" points="' ;
	
	foreach($cursor as $doc ) {
		$movieTime = $doc["Time"] - $start2;
		$movieTime *= 1;
		echo $movieTime;
		echo ",";
		$pulseValue = $doc["Pulse"]*1.5 - 0;
		echo $pulseValue;
		echo " ";		
	}
	
	echo '"/></svg>
	<center><p id="key">
		<span id="person1">';
		echo $person1; 
		echo '</span>
		<span id="person2">';
		echo $person2;
		echo '</span>
	</p></center>
	</div>';
	
  	
?>


<!doctype html>
</body>
</html>