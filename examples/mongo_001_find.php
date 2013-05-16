<?php 
	
	//mongo find and object example
	
	$m = new MongoClient(); //connect to Mongo
	$db = $m -> web3; //select our DB
	$collection = $db -> friends; //select our collection
	
	
	//make an array of collection items to populate our Mongo DB Collection
	
	$testData = array(
	
		array("name"=> "Donald", "city"=> "Austin"  ),
		array("name"=> "Karen", "city" => "Jersey City"),
		array("name"=> "Joe", "city"=> "New York City"),
		array("name"=> "Marisa", "city"=> "San Diego"),
		array("name"=> "Mike", "city"=> "San Diego"),
		array("name"=> "Rachel", "city"=> "Portland"),
		array("name"=> "Omar", "city"=> "Denver"),
		array("name"=> "Kristi", "city"=> "St. Louis")
	
	);
	
	//a loop to populate our test using short code
	foreach($testData as $data){
		$collection->insert($data);
	}
	
	//now that we've inserted our data let's find some stuff
	
	//find everything
	$cursor = $collection->find();
	
	
	echo "<p>All My Friends</p>";
	
	//output it in a UL
	echo '<ul>'; //the hack way
	foreach($cursor as $doc){ 
		
		echo '<li> My Friend '.$doc['name'].' lives in '.$doc['city'];
		
	}
	echo '</ul>'; //close it after the loop
	
	
	//find my friends in a particular city
	//we need to create an array to find
	$find_obj = array("city"=>"San Diego");
	$cursor = $collection->find($find_obj);
	
	echo "<p>My Friends who live in ".$find_obj['city']."</p>";
	echo "<ul>";
	foreach($cursor as $doc){
		
		echo '<li>'.$doc['name'].'</li>';
		
	}
	echo "</ul>"
	
	
?>