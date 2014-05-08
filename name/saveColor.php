<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> userData;
		
	$red = $_POST['buttonR'];  
	$green = $_POST['buttonG'];
	$blue = $_POST['buttonB'];
 	$hex = $_POST['hex'];
 
	$findColor = array("DataPoint"=> "Color");

	$cursor = $collection -> find($findColor);
	foreach($cursor as $doc) {
		$collection->remove($doc);
	 }
		
 	$json = array("DataPoint" => "Color", "Red" => $red, "Green" => $green, "Blue" => $blue, "Hex" => $hex);
 	$collection -> insert($json);
 	
 	echo "color saved";
?>  