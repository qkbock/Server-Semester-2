<?php 
		
	$number = $_POST['number'];
	$responseText = "HI";
	if($number > 0){
		echo "TRUE!";
	}
	
	echo "THE END";
	return $responseText;
?>