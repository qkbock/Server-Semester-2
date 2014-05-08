<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$userDataCollection = $db -> userData;
	
	$findColor = array("DataPoint"=> "Color");

	$cursor = $userDataCollection -> find($findColor);
	foreach($cursor as $doc) {
	 	echo $doc["Hex"];
	 }
	
?>  