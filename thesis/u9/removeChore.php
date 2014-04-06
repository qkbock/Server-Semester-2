<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> choreData;
	
	$choreID = intval($_POST['choreID']);  
	$find_obj = array("ID"=>$choreID, "Username"=>"Person9");
	$cursor1 = $collection->find($find_obj);
	
?> 

<!doctype html>

<html>
        <head>
                <title>Chore Removed</title>
                <link type="text/css" rel="stylesheet" href="../CSS/style.css">
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
                <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
				<meta name=apple-mobile-web-app-capable content=yes>
				<meta name=apple-mobile-web-app-status-bar-style content=black>
        </head>
        
        <body>
        <center><nav>
        	<a href='index.html' id="LogButton">Log a Chore</a>
        	<a href='viewMyChores.php' id="AllButton">View All</a>
        </nav></center>
        <?php echo "<h1>The entry '";
			foreach($cursor1 as $doc){ 
		    	echo $doc['Chore'];
		    	echo " in the ";
		    	echo $doc['Time'];
		    	echo " for ";
		    	echo $doc['Duration'];
		    	echo " minutes";	            
		    }
		    $cursor2 = $collection->remove($find_obj);
		 	echo "' has been removed.</h1>";
		?> 
        	
        </body>
</html>