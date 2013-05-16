<?php 
	//pull content from another page
	$content = file_get_contents('http://search.twitter.com/search.json?q=@labronjames&rpp=1');	
	$tweet = json_decode($content,true);
?>

<!doctype>

<html>
	<head>
		<title>Your one Tweet</title>
		<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC|Merriweather+Sans|Strait' rel='stylesheet' type='text/css'>
		<style>		
			body{
				zoom: reset;
				background: whitesmoke;
			}
			#tweetBox{
				width: 500px;
				margin: auto;
				border: 2px black solid;
				padding: 10px;
				background-color: white;
			}
			img{
				float: right;
				display: inline;
			}
			#speaker{
				width: 250px;
				margin-right: 5px;
				display: inline;
				font-family: 'Patrick Hand SC', cursive;
				font-size: 20px;
			}
			#time{
				text-align: right;
				margin-bottom: 0px;
				font-size: smaller;
				font-family: 'Strait', sans-serif;
			}
			#text{
				font-size: 25px;
				font-family: 'Merriweather Sans', sans-serif;
			}
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
/* 				window.alert("HI"); */
				$('#tweetBox').hide();
				$('#tweetBox').slideDown("slow");
			});
		</script>
	</head>
	<body>
		<section id="tweetBox">
			<p id="speaker"><?php echo $tweet["results"][0]["from_user"]; ?></p>
			<img src="<?php echo $tweet["results"][0]["profile_image_url"]; ?>" />
			<p id="text"><?php echo $tweet["results"][0]["text"]; ?></p>
			<p id="time"><?php echo $tweet["results"][0]["created_at"]; ?></p>
		</section>
	</body>
</html>