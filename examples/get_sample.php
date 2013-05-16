<?php 
	//print_r($_GET);
	$pages = array( 'home','about','resources');	
?>

<!Doctype html>
<html>
	<head>
		<title>Sample Get</title>
		<?php if($_GET['page'] == 'home'){ //check page for stylesheet
			
			$stylesheet = 'homepage';
			
			}else{
			$stylesheet = 'regular';
				
			}
		?>
		<link rel="stylesheet" href="css/<?php echo $stylesheet;?>.css">
	</head>
	<body>
		<ul class="nav">
			<?php foreach($pages as $p){?>
					<li>
						<a href="?page=<?php echo $p;?>">
							<?php echo $p; ?>
						</a>
					</li>	
			<?php } ?>
		</ul>
		<?php 
			if( isset($_GET['page']) ){
				$page = $_GET['page'];
				if($page == 'home'){
					
					//echo "Homepage";
					include('home.php');
					
					
				}elseif($page=='about'){
					
					echo "about";
					
					
				}elseif($page=='resources'){
					echo "Resources";
					
				}	
				
			}
		?>
		
		
	</body>
</html>