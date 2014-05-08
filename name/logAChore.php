<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> exhibitionData;
		
	$choreID = strtotime("now");						
	$userName = $_POST['person'];  
	$date = $_POST['date'];
	$startTime = $_POST['startTime'];
  	$endTime = $_POST['endTime'];
 	$duration;
 	
/*  	calculate duration */
 	$startTimeDivided = explode ( ":", $startTime);
 	$endTimeDivided = explode ( ":", $endTime);
 	$hourDifference = intval($endTimeDivided[0]) - intval($startTimeDivided[0]);
 	$minDifference = intval($endTimeDivided[1]) - intval($startTimeDivided[1]);
 	$duration = $hourDifference*60 + $minDifference;
 	if($duration < 1){
	 	$duration = 1;
 	}
 	echo 'duration'.$duration;

 	$json = array("ID" => $choreID, "Username" => $userName, "Date" => $date, "startTime" => $startTime, "endTime" => $endTime, "duration" => $duration);
 	$collection -> insert($json);
 	
 	echo "uploaded chore to server";
?>  