<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> exhibitionData;
						
	$userName = $_POST['person'];  
	$date = $_POST['date'];
	$startTime = $_POST['startTime'];
 	$endTime = $_POST['endTime'];

 	$json = array("Username" => $userName, "Date" => $date, "startTime" => $startTime, "endTime" => $endTime);
 	$collection -> insert($json);
 	
 	echo "uploaded chore to server";
?>  