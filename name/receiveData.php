<!-- format: -->
<!-- http://54.235.78.70/name/receiveData.php?userName=Q&startTime=5&endTime=12&duration=4 -->

<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> exhibitionData;
	
	$choreID = strtotime("now");	
 	$userName = $_GET['userName'];  
	$startTime = $_GET['startTime'];
 	$endTime = $_GET['endTime'];
	$duration = $_GET['duration'];
	$date = date("n\-j\-y");

			
 	$json = array("ID" => $choreID, "Username" => $userName, "Start" => $startTime, "End" => $endTime, "Duration" => $duration, "Date" => $date);
 	$collection -> insert($json);
 	
/*  	$cursorAll = $collection->find(); */

	echo "received";
?>