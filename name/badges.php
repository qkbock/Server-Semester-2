<?php
/*
	$m = new MongoClient();
	$db = $m -> qandm;
	$pulseCollection = $db -> pulseData;
	$movieCollection = $db -> movieData;
*/

/* 	$person1 = $_POST['userNameVal'];	 */
	
/*
	$findMovieUser = array("Username"=> $person1, "Movie" => $movie);

	$cursor = $movieCollection -> find($findMovieUser);
	foreach($cursor as $doc) {
	 	$start1 = intval($doc["startTime"]);
	 	$end1 = intval($doc["endTime"]); 
	 }

   	$findTimeUser1 = array("Username"=> $person1, "Time"=> array('$gt' => $start1, '$lte' => $end1) );  	

  	$cursor = $pulseCollection -> find($findTimeUser1);
*/
	echo '
	<article id="stats">
		<table>
			<tr>
				<th><img src="images/badges/nightOwl.png" /></th>
				<th>Lastname</th>
				<th>Savings</th>
			</tr>
			<tr>
				<td>Peter</td>
				<td>Griffin</td>
				<td>$100</td>
			</tr>
			<tr>
				<td>Lois</td>
				<td>Griffin</td>
				<td>$150</td>
			</tr>
			<tr>
				<td>Joe</td>
				<td>Swanson</td>
				<td>$300</td>
			</tr>
			<tr>
				<td>Cleveland</td>
				<td>Brown</td>
				<td>$250</td>
			</tr>
		</table>			
	</article>


	';


?>