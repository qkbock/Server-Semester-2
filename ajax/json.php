<?php 
		
	$array = array(
					'drinks'=> array(
					
							'adultBeverages'=> array('beer', 'wine'),
							'quincyBeverages'=> array('water', 'oj')
						
						)
					
					);
					
	$jsonp = $_GET['callback'].'('.'{happy => face}'.')';
	
	echo $jsonp;
	
	
?>