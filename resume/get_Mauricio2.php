<?php 
	//pull content from another page
	$content = file_get_contents('http://54.235.78.67/mauricio_give.php?request=info');	
	$formatted_content = json_decode($content,true);
?>

<!doctype>

<html>
	<head>
	<title>Mauricio Sanchez-Duque Resume</title>
	<link href='http://fonts.googleapis.com/css?family=Offside|Iceberg|Coda|Raleway+Dots' rel='stylesheet' type='text/css'>
	<style>
		body{
			font-family: 'Coda', cursive;
			font-size: 16px;
			margin: 0px;
			zoom: reset;
		}
		h1, h2, h3, p{
			margin:0px;
		}
		h2, h3, p{
			margin-left: 10px;
		}
		
		#Experience h3{
			display: none;;
		}
		section#General-Info{
			text-align:right;
			width: 500px;
			float: right;
			padding: 20px;
			margin-top: -20px;
			/* IE10 Consumer Preview */ 
			background-image: -ms-radial-gradient(right top, circle farthest-corner, #7D9FAB 0%, #FFFFFF 35%);
			/* Mozilla Firefox */ 
			background-image: -moz-radial-gradient(right top, circle farthest-corner, #7D9FAB 0%, #FFFFFF 35%);
			/* Opera */ 
			background-image: -o-radial-gradient(right top, circle farthest-corner, #7D9FAB 0%, #FFFFFF 35%);
			/* Webkit (Safari/Chrome 10) */ 
			background-image: -webkit-gradient(radial, right top, 0, right top, 994, color-stop(0, #7D9FAB), color-stop(.35, #FFFFFF));
			/* Webkit (Chrome 11+) */ 
			background-image: -webkit-radial-gradient(right top, circle farthest-corner, #7D9FAB 0%, #FFFFFF 35%);
			/* W3C Markup, IE10 Release Preview */ 
			background-image: radial-gradient(circle farthest-corner at right top, #7D9FAB 0%, #FFFFFF 35%);
		}
		#General-InfoTitle{
			display: none;
		}
		#Mauricio-Sanchez-Duque{
			font-family: 'Iceberg', cursive;
			font-size: 40px;
			margin: auto;
		}
		#Experience, #Education, #Language, #Acknowledgments-and-Publications, #Skills{
			margin: 20px;
			border-bottom: solid black 1px;
			padding-bottom: 20px;
		}
		#ExperienceTitle, #EducationTitle, #LanguageTitle, #Acknowledgments-and-PublicationsTitle, #SkillsTitle{
			font-family: Offside, cursive;
		}
		#ExperienceTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 0px;
			height: 240px;
			margin-top: 125px;
			margin-bottom: 240px;
			margin-left: 116px;
			margin-right: -45px;
			float: left;
			font-size: 40px;
		}
		#ExperienceTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 0px;
			height: 240px;
			margin-top: 125px;
			margin-bottom: 240px;
			margin-left: 116px;
			margin-right: -45px;
			float: left;
		}
		
		#Experience h3{
			font-size: 25px;
		}
		
		#Experience p{
			margin-left: 100px;
		}
		
		
		#Education{
			height: 135px;
		}
		#EducationTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 0px;
			height: 240px;
			margin-top: 11px;
			margin-bottom: 0px;
			margin-left: 116px;
			margin-right: -45px;
			float: left;
		}
		
		#Parsons-The-New-School-for-Design---MfA-Design-and-Technology---New-YorkUS---20122014expected, #ICESI-Univeristy---Industrial-Design---CaliColombia---20022008{
			font-size: 25px;
		}
		
		#Parsons-The-New-School-for-Design---MfA-Design-and-Technology---New-YorkUS---20122014expected{
			margin-bottom: 20px;
		}
		
		#Language{
			height: 130px;
		}
		#LanguageTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 0px;
			height: 240px;
			margin-top: 5px;
			margin-bottom: 0px;
			margin-left: 45px;
			margin-right: -45px;
			float: left;
		}
		
		#Fluent-in-English-and-Spanish{
			font-size: 20px;
		}
		
		#Acknowledgments-and-Publications{
			height: 240px;
		}
		#Acknowledgments-and-PublicationsTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 230px;
			height: 0px;
			margin-top: 124px;
			margin-bottom: 0px;
			margin-left: -191px;
			margin-right: -25px;
			float: left;
		}
		
		#SkillsTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 0px;
			height: 240px;
			margin-top: -27px;
			margin-bottom: 0px;
			margin-left: 116px;
			margin-right: -45px;
			float: left;
			font-size: 34px;
		}
		
		#Acknowledgments-and-Publications h3{
			margin-bottom: 20px;
			font-size: 25px;
		}
		
		#Skills h3{
			display: inline;
			margin-right: 87px;
			font-size: 20px;
		}
		
		
	</style>
	</head>
	<body>
		<?php foreach($formatted_content as $a => $b){ 
			$h1IDs = str_replace(' ', '-', $a);?>
			<section id="<?php echo $h1IDs;?>">
			<h1 id="<?php echo $h1IDs;?>Title"><?php echo $a; ?></h1>
			<?php if(is_array($b)){
				foreach($b as $B => $c){
					if(is_array($c)){
						$h2IDs = str_replace(' ', '-', $B); ?> 
						<h2 id="<?php echo $h2IDs;?>"><?php echo $B;?></h2>
						<?php foreach($c as $C => $d){
							$pIDs = str_replace(' ', '-', $d); ?>
							<p id="<?php echo $pIDs;?>"><?php echo $d;?></p>
						<?php }
				 	}
					else{ 
						
						$h3IDs = str_replace(' ', '-', $c);
						$h3IDs2 = str_replace(')', '', $h3IDs);
						$h3IDs3 = str_replace('(', '', $h3IDs2);
						$h3IDs4 = str_replace(',', '', $h3IDs3);
						$h3IDs5 = str_replace('/', '', $h3IDs4); 
						$h3IDs6 = str_replace('"', '', $h3IDs5);
						$h3IDs7 = str_replace('±', '', $h3IDs6);
						$h3IDs8 = str_replace('Ã', '', $h3IDs7);
						?>
						<h3 id="<?php echo $h3IDs8;?>"><?php echo $c;?></h3>
					<?php	
					}
				}
			}
			else{ 
				$pIDs2 = str_replace(' ', '-', $b);?>
				<p id="<?php echo $pIDs2;?>"><?php echo $b;?></p>
			<?php } ?>
			</section>
<?php	} ?>	
	</body>
</html>