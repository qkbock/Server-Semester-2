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
		<article class="badges">
			<center>
			<table class="badgeTable">
				<tr>
					<td><img class="badgeImage" src="images/badges/nightOwl.png" /></td>
					<td><img class="badgeImage" src="images/badges/50.png" /></td>
					<td><img class="badgeImage" src="images/badges/repeater.png" /></td>
				</tr>
				<tr>
					<td><img class="badgeImage" src="images/badges/dynamicDuo.png" /></td>
					<td><img class="badgeImage" src="images/badges/clockwork.png" /></td>
					<td><img class="badgeImage" src="images/badges/regular.png" /></td>
				</tr>
				<tr>
					<td><img class="badgeImage" src="images/badges/quicky.png" /></td>
					<td><img class="badgeImage" src="images/badges/couchPotatoe.png" /></td>
					<td><img class="badgeImage" src="images/badges/investigator.png" /></td>
				</tr>
				<tr>
					<td><img class="badgeImage" src="images/badges/highNoon.png" /></td>
					<td><img class="badgeImage" src="images/badges/moonlighter.png" /></td>
					<td><img class="badgeImage" src="images/badges/choreaholic.png" /></td>
				</tr>
				<tr>
					<td><img class="badgeImage" src="images/badges/laborOfLove.png" /></td>
					<td><img class="badgeImage" src="images/badges/forgotToStop.png" /></td>
					<td><img class="badgeImage" src="images/badges/vacationers.png" /></td>
				</tr>
				<tr>
					<td><img class="badgeImage" src="images/badges/habit.png" /></td>
					<td><img class="badgeImage" src="images/badges/team.png" /></td>
					<td><img class="badgeImage" src="images/badges/10hrs.png" /></td>
				</tr>
				<tr>
					<td><img class="badgeImage" src="images/badges/25hrs.png" /></td>
					<td><img class="badgeImage" src="images/badges/50hrs.png" /></td>
					<td><img class="badgeImage" src="images/badges/100hrs.png" /></td>
				</tr>
				<tr>
					<td><img class="badgeImage" src="images/badges/250hrs.png" /></td>
					<td><img class="badgeImage" src="images/badges/500hrs.png" /></td>
					<td><img class="badgeImage" src="images/badges/1000hrs.png" /></td>
				</tr>
			</table>
			</center>			
		</article>


	';


?>