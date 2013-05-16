<?php 
	header('Content-type: application/json');
	
	if(isset($_GET['request'])){
		
		if($_GET['request']=='animals'){
	
	
	$animals = array(
					"Farm Animal" => array('cow', 'pig', 'horse', 'chicken'),
					"Domestic Animal"=> array('dog', 'cat', 'hamster', 'rabbit'),
					"Wild Animal"=> array('wolf', 'bear', 'jaguar', 'tiger'),
					"Imaginary Animal"=> array('unicorn', 'dragon','griffin', 'lochness monster' )
				);
		
	echo json_encode($animals);
	
	}elseif($_GET['request']== 'colors'){
		$colors = array(  
					"red", "blue", "green", "magenta"
		);
		echo json_encode($colors);
	}
	}
?>