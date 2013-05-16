<?php 
	
	//Find an Mongo Item using its Database _id
	//well use our Friends collection so make sure to run mongo_001_find.php first
	
	$m = new MongoClient(); //connect to Mongo
	$db = $m -> web3; //select our DB
	$collection = $db -> friends; //select our collection
	
	//we pass the mongo id from our form
	//if a post exists we have a mongo index
	if(isset($_POST['mongo_index'])){
	
	//use our id to find the object
	//we have to create a new MongoId From the info 
	//that comes in so that we play nice with the DB
	
	$find_obj = array("_id" => new MongoId($_POST['mongo_index']) );
	
	//we use find one because IDs are unique - hense only one.
	$friend = $collection->findOne($find_obj);
			
?>
	<h4>Your Favorite Friend is...</h4>
	<h2><?php echo $friend['name']; ?> from <?php echo $friend['city']; ?></h2>

<?php }else{  	
		//find all of our friends
		$cursor = $collection->find();
		//hold on to the data and we'll make a form
	?>

	<h4>Select your Favorite Friend</h4>
	<form method="post" >
	
		<select name="mongo_index">
			<?php //populate our selection with friend names ?>
			<?php	foreach($cursor as $doc){ ?>
			
			<option value="<?php echo $doc['_id']; ?>"><?php echo $doc['name']; ?></option>
			
			<?php } ?>
		</select>
		<input type="submit" >

	</form>

<?php }?>
