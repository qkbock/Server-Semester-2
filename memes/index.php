<?php  $funny = array(

					"Sort of Funny"=> array("03", "04", "05", "08", "12", "16", "23", "24", "33", "37", "42", "45", "49", "59"),
					"Funny"=> array("01", "06", "09", "10", "14", "17", "20", "21", "26", "30", "35", "39", "41", "43", "44", "47", "48", "53", "55", "57"),
					"Very Funny"=> array("07", "13", "18", "19", "22", "25", "28", "29", "31", "34", "36", "40", "46", "50", "51", "52", "54", "56"),
					"Cats"=> array("02", "11", "15", "27", "32", "38", "58")
					);
?>

<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Raleway:400,900' rel='stylesheet' type='text/css'>
		<style>
			body{
				width: 100%;
				height: 100%;
				zoom: reset;
				background: whiteSmoke;
			}
			
			article#content{
				width: 80%;
				height: 100%;
				background: white;
				
				box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.25);
				margin:auto;
				margin-top: -20px;
				margin-bottom: 50px;
			}
			section#key{
				width: 50%;
				margin:auto;
				border: solid aqua;
				margin-bottom: 30px;
				font-family: 'Ubuntu Condensed', sans-serif;
			}
			h2{
				padding-top: 50px;
				font-family: 'Raleway', sans-serif, 900;
				font-size: 7em;
				margin: 0;
				margin-bottom: 12px;
			}
			h3{
				width: auto;
				margin: auto;
				margin-top: 20px;
				font-size: 30px;
			}
			h4{
				display:inline-block;
				margin-right: 25px;
				margin-left: 25px;
				margin-top: 10px;
				font-size: 21px;
			}
			h4#Sort-of-Funny{
				color: #0fc1f6;
			}
			h4#Funny{
				color: #6300ff;
			}
			h4#Very-Funny{
				color: #e203b6;
			}
			h4#Cats{
				color: #e62650;
			}
			img{
				box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.25);
				padding: 10px;
				margin: 10px;
				width:90%;
			}
			img.Sort-of-Funny{
				background-color: #0fc1f6;
			}
			img.Funny{
				background-color: #6300ff;
			}
			img.Very-Funny{
				background-color: #e203b6;
			}
			img.Cats{
				background-color: #e62650;
			}
			section#imageHolder{
				margin: auto;
				margin-top: 20px;
				width: 96%;
				-webkit-column-count: 4;
			   -webkit-column-gap:   0px;
			   -moz-column-count:    4;
			   -moz-column-gap:      0px;
			   column-count:         4;
			   column-gap:           0px;
			}
			
			@media (max-width: 1800px) {
			  section#imageHolder {
			  -moz-column-count:    4;
			  -webkit-column-count: 4;
			  column-count:         4;
			  }
			}
			@media (max-width: 1950px) {
			  section#imageHolder {
			  -moz-column-count:    3;
			  -webkit-column-count: 3;
			  column-count:         3;
			  }
			}
			@media (max-width: 1440px) {
			  section#imageHolder {
			  -moz-column-count:    2;
			  -webkit-column-count: 2;
			  column-count:         2;
			  }
			}
			@media (max-width: 950px) {
			  section#imageHolder {
			  -moz-column-count:    1;
			  -webkit-column-count: 1;
			  column-count:         1;
			  }
			}

		</style>
	</head>
	<body>
		<article id="content">
			<center><h2>MEMES</h2></center>
			<section id="key">
				<center><h3>Funniness Level:</h3></center>
				<center><section>
				<?php foreach($funny as $funnyLevel => $image){ 
						$class = str_replace(' ', '-', $funnyLevel);
				?>
					<h4 id="<?php echo $class; ?>"> <?php echo $funnyLevel; ?></h4>
				<?php } //endforeach?>
				</section></center>
			</section>
			<center><section id="imageHolder">
				<?php foreach($funny as $funnyLevel => $image){ 
						$class = str_replace(' ', '-', $funnyLevel);
				?>
					<?php foreach($image as $i) {
						$imgClass = str_replace(' ', '-', $i);
						?>
						<img class="image <?php echo $class; ?>" id="<?php echo $imgClass; ?>" src="images/<?php echo $i; ?>.jpeg" />
					<?php } ?>
				<?php } //endforeach?>
	
			</section></center>
		</article>
	</body>
</html>

