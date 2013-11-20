<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> choreData;
	
	$choreID = strtotime("now");
	$userName = $_POST['userNameVal'];  
	$chore = $_POST['choreVal'];
	$time = $_POST['timeVal'];
	$duration = $_POST['durationVal'];
	$date = date("n\-h\-y");
	
 	$json = array("ID" => $choreID, "Username" => $userName, "Chore" => $chore, "Time" => $time, "Duration" => $duration, "Date" => $date);
 	$collection -> insert($json);
 	
 	$cursorAll = $collection->find();
/*
 	$cursorAllReversed = array_reverse($cursorAll);
 	$numOfEntries = $collection->count();
 	echo $numOfEntries;
*/
 	
 	
?>  

<!doctype html>

<html>
        <head>
                <title>Chore Logged</title>
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
        	<h1>You logged: <?php echo $chore; ?> in the <?php echo $time; ?> for <?php echo $duration; ?> minutes.</h1>
        	<form method="post" action="removeChore.php">
 	           <input type="hidden" name="choreID" value="<?php echo $choreID; ?>"/>        
               <input type="submit" value="Remove this entry"/>    
            </form>
         
        </body>
</html>