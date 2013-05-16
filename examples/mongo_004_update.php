<?php
	
	//some examples of updating items from the database
	//make sure to run create update DB once to populate Mongo Correctly
	
	$m = new MongoClient(); //connect to Mongo
	$db = $m -> web3; //select our DB
	$collection = $db -> updating; //select our collection
	
	if($_POST['name']){
		
		$find_obj = array("_id" => new MongoId($_POST['mongo_index']) );
		$update_obj = array('$set' => array('name' => $_POST['name']));
		
		
		$collection->update($find_obj,$update_obj);
		
		
	}else if( $_POST['city']){
		
		$find_obj = array("_id" => new MongoId($_POST['mongo_index']) );
		$update_obj = array('$set' => array('city' => $_POST['city']));
		
		
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
		 <p>Likes:
			 <ul>
			 <?php foreach($doc['likes'] as $likes){ ?>
			 	<li><?php echo $likes; ?> </li>
			 <?php } ?>
			 </ul>
		 </p>
	<hr>
	</li>	
<?php } ?>
</ul>


<form method="post" >
	<p>Update A Users Name</p>
	<label for="Name">Insert New Name: </label>
	<input name="name" type="text" > 

	<select name="mongo_index">
	<?php //populate our selection with friend names ?>
	<?php	foreach($cursor as $doc){ ?>
			
	<option value="<?php echo $doc['_id']; ?>"><?php echo $doc['name']; ?></option>
			
	<?php } ?>
	</select>
	<input type="submit"> 
</form>
<hr>
<form method="post" >
	<p>Update A Users City</p>
	<label for="City">Insert New City: </label>
	<input name="city" type="text">
	
	<select name="mongo_index">
	<?php //populate our selection with friend names ?>
	<?php	foreach($cursor as $doc){ ?>
			
	<option value="<?php echo $doc['_id']; ?>"><?php echo $doc['name']; ?></option>
			
	<?php } ?>
	</select>
	<input type="submit"> 
	
</form>
