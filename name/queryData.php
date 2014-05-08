<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> exhibitionData;
	$userDataCollection = $db -> userData;
	
	
/* 	COLOR STUFF */
	$buttonR_a;
	$buttonG_a;
	$buttonB_a;
	
	$findColor = array("DataPoint"=> "Color");

	$cursor = $userDataCollection -> find($findColor);
	foreach($cursor as $doc) {
	 	$buttonR_a = intval($doc["Red"]);
	 	$buttonG_a = intval($doc["Green"]);
	 	$buttonB_a = intval($doc["Blue"]);
	 }
	
	
	
	
/* 	TODAY STUFF						 */
	$totalToday_a = 0;
	
	date_default_timezone_set('America/New_York');
	$onThisDay = date("o")."-".date("m")."-".date("d");
	$findToday = array("Date"=> $onThisDay);

	$cursor = $collection -> find($findToday);
	
	foreach($cursor as $doc) {
		$totalToday_a = $totalToday_a + $doc["duration"];
	}

	$todayGoal_a = 100;
	
	$totalSend = intval(($totalToday_a/$todayGoal_a)*100);

/*
	$totalToday_b = 15;
	$todayGoal_b = 670;
	$buttonR_b = 120;
	$buttonG_b = 160;
	$buttonB_b = 180;
*/
	
	//find all the information
 	//print out the information
 	echo "#".
 	$totalSend.",".
	$buttonR_a.",".
	$buttonG_a.",".
	$buttonB_a."!"
	;
?>  