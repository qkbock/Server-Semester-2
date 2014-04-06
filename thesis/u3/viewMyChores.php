<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> choreData;
	
	$find_obj = array("Username"=>"Person3");
 	$cursorAll = $collection->find($find_obj);
?>  

<!doctype html>

<html>
        <head>
                <title>Your Chores</title>
                <link type="text/css" rel="stylesheet" href="../CSS/style.css">
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
                <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
				<meta name=apple-mobile-web-app-capable content=yes>
				<meta name=apple-mobile-web-app-status-bar-style content=black>
               
        </head>
        
        <body>
        <center><nav>
        	<a href='index.html' id="LogButton">Log a Chore</a>
        	<a href='viewMyChores.php' style="background: #af5775;" id="AllButton">View All</a>
        </nav></center>
           <h1>Your Chores</h1>
           
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorAll as $doc){ 
	           echo "<tr>";
	           echo "<td>".$doc['Date']."</td>";
	           echo "<td>".$doc['Chore']."</td>";
	           echo "<td>".$doc['Time']."</td>";
	           echo "<td>".$doc['Duration']."</td>";
	           echo "<td>
	           			<form method='post' action='removeChore.php'>
	           				<input class='xButton' style='font-size: 0em;' type='hidden' name='choreID' value='".$doc['ID']."'/>        
	           				<input type='submit' value='X'/>    
	           			</form>
	           		</td>";
	           echo "</tr>";    
	       }
           ?>
           </table>
        </body>
</html>