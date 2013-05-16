<?php
	
	//some examples of updating items inside of an array from the database
	//make sure to run create update DB once to populate Mongo Correctly
	
	$m = new MongoClient(); //connect to Mongo
	$db = $m -> web3; //select our DB
	$collection = $db -> updating; //select our collection
	
	
	//check for GET which means someone clicked on a link
	if(isset($_POST['id'])){
		$find_obj = array("_id" => new MongoId($_POST['id']) );
		$update_obj = array('$inc' => array('age' => intval($_POST['num'])));
		
		$collection->update($find_obj,$update_obj);		
	}
	
	
	$cursor= $collection->find();
	
?>

<ul>

<?php foreach($cursor as $doc){ ?>
	<li>  		
	
		 <p>Name: <?php echo $doc['name']; ?></p>
		 <p>City: <?php echo $doc['city']; ?></p>
		 <p>Age: <?php  echo $doc['age'];?></p>
		 <p>Edit Age  
			 <form method="post">
			 	<input type="hidden" name="id" value="<?php echo $doc["_id"];?>">
			 	<input type="hidden" name="num" value="1">
			 	<input type="submit" value="+">
			 </form>
			 <form method="post">
			 	<input type="hidden" name="id" value="<?php echo $doc["_id"];?>">
			 	<input type="hidden" name="num" value="-1">
			 	<input type="submit" value="-">
			 </form>
		 </p>
		 <p>Likes:
			 <ul>
			 <?php foreach($doc['likes'] as $likes){ ?>
			 	<li><?php echo $likes; ?></li>
			 <?php } ?>
			 </ul>
		 </p>
	<hr>
	</li>	
<?php } ?>
</ul>


