<?php 
	
	
	$m = new MongoClient(); //connect to Mongo
	$db = $m -> web3; //select our DB
	$collection = $db -> updating; //select our collection
		
	$testData = array(
	
		array("name"=> "Donald", "city"=> "Austin", "age"=> 32, "likes"=> array("Guitar", "Art") ),
		array("name"=> "Karen", "city" => "Jersey City", "age"=> 28, "likes"=> array( "Running", "Teaching")),
		array("name"=> "Joe", "city"=> "New York City", "age"=> 31, "likes"=> array("Arduino", "Cooking") ),
		array("name"=> "Marisa", "city"=> "San Diego", "age"=> 25, "likes"=> array("Beach", "Mountain Biking")),
		array("name"=> "Mike", "city"=> "San Diego", "age"=> 27, "likes"=> array("Beach", "Hiking") ),
		array("name"=> "Rachel", "city"=> "Portland", "age"=> 30, "likes" => array("Biking", "Hipsters") ),
		array("name"=> "Omar", "city"=> "Denver", "age" => 42, "likes"=> array("Snow Boarding", "Tomatoes" ) ),
		array("name"=> "Kristi", "city"=> "St. Louis", "age" => 25, "likes"=> array("Horses", "Beach") )
	
	);
	
	
	foreach($testData as $data) $collection->insert($data);
	
?>