<?php
	$connection = new MongoClient();
	$db = $connection -> thesis;
	$collection = $db -> choreData;
	
	$find_obj = array("Username"=>"Person1");
 	$cursorP1 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person2");
 	$cursorP2 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person3");
 	$cursorP3 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person4");
 	$cursorP4 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person5");
 	$cursorP5 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person6");
 	$cursorP6 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person7");
 	$cursorP7 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person8");
 	$cursorP8 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person9");
 	$cursorP9 = $collection->find($find_obj);
 	
 	$find_obj = array("Username"=>"Person10");
 	$cursorP10 = $collection->find($find_obj);
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
           <h1>Alicia</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP1 as $doc){ 
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
           
           <h1>Bart</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP2 as $doc){ 
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
           
           <h1>Cindy</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP3 as $doc){ 
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
           
           <h1>John</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP4 as $doc){ 
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
           
           <h1>Kristen</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP5 as $doc){ 
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
           
           <h1>Medhi</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP6 as $doc){ 
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
           
           <h1>Maxine</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP7 as $doc){ 
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
           
           <h1>Maxine's BF</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP8 as $doc){ 
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
           
           <h1>Diane</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP9 as $doc){ 
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
           
           <h1>Daddy</h1>
           <table border="0">
	           <tr>
	           	   <td><strong>Date</strong></td>
		           <td><strong>Chore</strong></td>
		           <td><strong>Time</strong></td>
		           <td><strong>Minutes</strong></td>
		       </tr>
           <?php
           foreach($cursorP10 as $doc){ 
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