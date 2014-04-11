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
	$yourTotalToday = 14;
	$todayGoal = 25;
  	
	echo '<section class="menuItem" id="NOTIFICATIONS">
		<article id="notificationHolder">
			<article class="notification">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification coupon">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification coupon">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
			<article class="notification coupon">
				<h1 class="smaller">ASK GOOD QUESTIONS</h1>
				<p>Ask John if there was any time when 
	he felt overwhelmed today.</p>
			</article>
		
		</article>
	</section>

		
	';


?>