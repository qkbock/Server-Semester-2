<?php
	$m = new MongoClient(); //open a connection to mongo
	$db = $m -> sample; //use the arrow sign to specify which database we want to use in the open connection
	$collection = $db -> colors; //select a collection inside of the database
	
	//inside of each collection is a document which is a json object which we make through arrays in php
	//make a document
	$document = array( "name" =>"Pink", "value"=> "#fc51e2");
		
	//insert document into database
	$collection -> insert($document);
	
	$document = array( "name" =>"Blue", "value"=> "#50e3fd");
	$collection -> insert($document);
	
	$document = array( "name" =>"Tomato", "value"=> "tomato");
	$collection -> insert($document);

	$document = array( "name" =>"Lime", "value"=> "lightGreen");
	$collection -> insert($document);
	
	$cursor = $collection->find();
	
	foreach($cursor as $doc) {
/* 		echo "<p>".$doc['_id']."</p>"; */
	?>
	<div style="background-color: <?php echo $doc['value']; ?>;"> <?php echo $doc['name']; ?></div>
	<?php		
	}
	echo "Success";

?>

