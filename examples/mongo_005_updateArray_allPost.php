<?php
	
	//some examples of updating items inside of an array from the database
	//make sure to run create update DB once to populate Mongo Correctly
	
	$m = new MongoClient(); //connect to Mongo
	$db = $m -> web3; //select our DB
	$collection = $db -> updating; //select our collection
	
	
	//check for POST Like which means we have submitted our form
	if(isset($_POST['add'])){
		
		$find_obj = array("_id" => new MongoId($_POST['mongo_index']) );
		$update_obj = array('$push' => array('likes' => $_POST['like']));
		
		
		$collection->update($find_obj,$update_obj);
		
		
	}
	
	
	//check for GET which means someone clicked on a link
	if(isset($_POST['like'])){
		
		$find_obj = array("_id" => new MongoId($_POST['id']) );
		$update_obj = array('$pull' => array('likes' => $_POST['like']));
		
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
			 	<?php /*<li><a href="?id=<?php echo $doc["_id"];?>&like=<?php echo $likes; ?>"><?php echo $likes; ?> </a></li>
				 	*/ ?>
				 	<li><?php echo $likes; ?> 
				 	<form method="post"> 
						<input type="hidden" name="id" value="<?php  echo $doc["_id"]; ?>">
						<input type="hidden" name="like" value = "<?php echo $likes; ?>">	
						<input type="submit" name="remove" value="remove">
				 	</form>
				 	</li> 
			 <?php } ?>
			 </ul>
		 </p>
	<hr>
	</li>	
<?php } ?>
</ul>


<?php $url = strtok($_SERVER['REQUEST_URI'], '?'); //get the url without the get ?>

<form method="post" action="<?php echo $url; ?>" >
	<p>Add a new Like</p>
	<label for="Name">Insert New Like: </label>
	<input name="like" type="text" > 

	<select name="mongo_index">
	<?php //populate our selection with friend names ?>
	<?php	foreach($cursor as $doc){ ?>
			
	<option value="<?php echo $doc['_id']; ?>"><?php echo $doc['name']; ?></option>
			
	<?php } ?>
	</select>
	<input name="add" type="submit"> 
</form>
