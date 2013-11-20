<?php

	$m = new MongoClient();
	$db = $m -> qandm;
	$collection = $db -> pulseData;

	$person1 = $_POST['userNameVal'];	
	$start1 = intval($_POST['startTimeVal']);
	$end1 = intval($_POST['endTimeVal']);
  	
  	$counter = 0;
	$sum = 0;
	$min = 0;
	$max = 0;
	
   	$findTimeUser1 = array("Username"=> $person1, "Time"=> array('$gt' => $start1, '$lte' => $end1) );
/*   	$findMin = array("Username"=> $person1, "Time"=> array('$gt' => $start1, '$lte' => $end1), "Pulse" => array() ); */
  	
  	$cursor = $collection -> find($findTimeUser1);
  	
	echo '<svg id="graph1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1400px" height="200px" > <polyline fill="none" stroke="rgb(0,184,157)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1" points="' ;

	foreach($cursor as $doc){
		$min = 	$doc["Pulse"];
		$max = 	$doc["Pulse"];
	}
	
	foreach($cursor as $doc) {
		$movieTime = $doc["Time"] - $start1;
		$movieTime *= .9;
		echo $movieTime;
		echo ",";
		$pulseValue = $doc["Pulse"]*1.5 - 0;
		echo $pulseValue;
		echo " ";	
		
		$pulseNum = $doc["Pulse"];
		$counter+=1;
	 	$sum += $pulseNum;
		if($pulseNum > $max){
			$max = $pulseNum;
		}
		if($pulseNum > 50){
			if ($pulseNum < $min){
				$min = $pulseNum;
			}
		}		
	}

	echo '"/></svg>';
	
	$avg = $sum/$counter;
	$avg = intval($avg);

	echo '<center><p id="data">
			<span class="dataType">Average: <span style="color:rgb(28, 117, 188);">'.$avg.'</span> bpm</span>
			<span class="dataType">Min: <span style="color:rgb(102, 45, 145);">'.$min.'</span> bpm</span>
			<span class="dataType">Max: <span style="color:rgb(199, 30, 104);">'.$max.'</span> bpm</span>
		</p><center>';

 ?>