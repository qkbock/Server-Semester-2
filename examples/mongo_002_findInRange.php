<?php 
	
	//find number in a range 
	
	$m = new MongoClient(); //connect to Mongo
	$db = $m -> web3; //select our DB
	$collection = $db -> range; //select our collection
	
	
	//make a bunch of entries
	for($x = 0; $x<30; $x++){
		
		$insert_obj = array("x" => $x );
		$collection->insert($insert_obj);
		
	}
	
	//make our find object
	//when we are using special mongo query operators we must be careful about " & '
	//in this instance for all mongo attributes we must use ' '
	//the mongo query operators use $ and we don't want php to think that they are variables ' ' prevents this
	//for a full list go to http://docs.mongodb.org/manual/reference/operators/
	
	//here we are searching in x for a value greater than 14 and less than or equal to 25
	$find_obj = array( "x" =>  array( '$gt'=> 14, '$lte'=> 25 ) );
	
	$cursor = $collection->find($find_obj);
	
	foreach($cursor as $doc){
		echo '<p>';
		print_r($doc); //output the whole object so we can see it
		echo '</p>';
	}
	
	
	
?>