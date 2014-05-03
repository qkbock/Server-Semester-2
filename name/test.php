
<!DOCTYPE html>
<html>
	<head>
		<title>noUiSlider Example</title>
	</head>

	<body>

		<div class="slider"></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="javascript/raphael-min.js"></script>
    <script src="javascript/jquery.nouislider.min.js"></script>
<!--     <script src="http://malsup.github.io/jquery.corner.js"></script> -->
   	<link type="stylesheet" rel="stylesheet" href="css/style.css" />
   	<link type="stylesheet" rel="stylesheet" href="css/fonts.css" />


		<link href="css/jquery.nouislider.css" rel="stylesheet">

		<script>

			 // On document ready, initialize noUiSlider.
			$(function(){

				$('.slider').noUiSlider({
					start: [ 20, 30 ],
					range: {
						'min': 10,
						'max': 40
					}
				});

			});

		</script>

	</body>
</html>
