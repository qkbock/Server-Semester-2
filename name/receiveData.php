<!-- format: -->
<!-- http://54.235.78.70/name/receiveData.php?userName=Q&startTime=5&endTime=12&duration=4 -->

<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> exhibitionData;
		
	$choreID = strtotime("now");						
	$userName = $_GET['person'];  
	$date = $_GET['date'];
	$startTime = $_GET['startTime'];
 	$endTime = $_GET['endTime'];
 	$duration = 25;
 	
 	$json = array("ID" => $choreID, "Username" => $userName, "Date" => $date, "startTime" => $startTime, "endTime" => $endTime, "duration" => $duration);
 	$collection -> insert($json);
 	
 	echo "uploaded chore to server";
?>  