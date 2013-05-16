<?php 
	//pull content from another page
	$content = file_get_contents('http://54.235.78.67/mauricio_give.php?request=info');
	//echo $content;	

	$formatted_content = json_decode($content,true);
	
	//print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<title>First API </title>
	</head>
	<body>
		<?php foreach($formatted_content as $a => $b){ ?>
			<h1><?php echo $a; ?></h1>
			<?php if(is_array($b)){
				foreach($b as $c){ 
					if(is_array($c)){
						foreach($c as $d => $e){
							if(is_array($e)){
								foreach($e as $f => $g){ ?>
									<p><?php echo $g;?></p>
								<?php	
								}
							}
							else{
							?><p><?php echo $e;?></p><?php
							}
						}
					}
					else{ ?>
						<p><?php echo $c;?></p>	
					<?php
					}
				}
			}
			else{ ?>
				<p><?php echo $b;?></p>
			<?php }
		} ?>	
	</body>
</html>