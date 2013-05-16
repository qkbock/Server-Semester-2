<?php
	$week = array(
						'weekday' => array(	
							'Monday' => array(
								'morning'=> array(
									'9 am - Eat breakfast'
								),
								'afternoon' => array(
									'1 pm - Gym'
								),
								'evening' => array(
									'6 pm - homework'
								),
								'night' => array(
									'nothing'
								)	
							),
							'Tuesday' => array(
								'morning'=> array(
									'9 am - Peer Reviews'
								),
								'afternoon' => array(
									'nothing'
								),
								'evening' => array(
									'8 pm - PLL with Liz'
								),
								'night' => array(
									'nothing'
								)	
							),
							'Wednesday' => array(
								'morning'=> array(
									'8 am - Exterminator'
								),
								'afternoon' => array(
									'12 pm - Major Studio'
								),
								'evening' => array(
									'8 pm - Dinner with Kerry'
								),
								'night' => array(
									'nothing'
								)	
							),
							'Thursday' => array(
								'morning'=> array(
									'9 am - Gym'
								),
								'afternoon' => array(
									'12 pm - Interactive Design for Museums'
								),
								'evening' => array(
									'7 pm - Web 3'
								),
								'night' => array(
									'nothing'
								)	
							),
							'Friday' => array(
								'morning'=> array(
									'9 am - Gym'
								),
								'afternoon' => array(
									'12 pm - Major Studio',
									'3 pm - Sensemakers'
								),
								'evening' => array(
									'nothing'
								),
								'night' => array(
									'nothing'
								)	
							)	
						),
						'weekend' => array(
							'Saturday' => array(
								'morning'=> array(
									'nothing'
								),
								'afternoon' => array(
									'nothing'
								),
								'evening' => array(
									'nothing'
								),
								'night' => array(
									'nothing'
								)	
							),
							'Sunday' => array(
								'morning'=> array(
									'nothing'
								),
								'afternoon' => array(
									'nothing'
								),
								'evening' => array(
									'nothing'
								),
								'night' => array(
									'nothing'
								)	
							)
						)	
					);
					
					

?>


<html>
	<head>
		<style>
			body{
			    width: 100%;
			    zoom: reset;
			    background-color: whiteSmoke;
			    
			}
			section#whatYouDo{
				width: 500px;
				border: solid;
				border-color: turquoise;
				margin: auto;
				margin-top: 50px;
			}
			section#whatYouDo p{
				margin: 20px;
			}
			div.buttons{
				border: solid;
				border-color: black;
				margin: 50px;
			}
			div#resetDiv{
				width:50px;
				margin: auto;
			}
			button#weekday{
				
			}
		</style>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script>
			$(document).ready(function(){
				var weekday = false;
				var weekend = false;
				
				var monday = false;
				var tuesday = false;
				var wednesday = false;
				var thursday = false;
				var friday = false;
				var saturday = false;
				var sunday = false;
				
				var morning = false;
				var afternoon = false;
				var evening = false;
				var night = false;
/*--------------------------------------------------------- */
				var toggle = $('.toggle');
				$(toggle).hide();	
/*--------------------------------------------------------- */
				function update() {
				    if(weekday){
				    	if(monday){
					    	if(morning){
						    	$('p#mm').show(400);
					    	}
					    	if(afternoon){
						    	$('p#ma').show(400);
					    	}
					    	if(evening){
						    	$('p#me').show(400);
					    	}
					    	if(night){
						    	$('p#mn').show(400);
					    	}
				    	}
				    	if(tuesday){
					    	if(morning){
						    	$('p#tm').show(400);
					    	}
					    	if(afternoon){
						    	$('p#ta').show(400);
					    	}
					    	if(evening){
						    	$('p#te').show(400);
					    	}
					    	if(night){
						    	$('p#tn').show(400);
					    	}
				    	}
				    	if(wednesday){
					    	if(morning){
						    	$('p#wm').show(400);
					    	}
					    	if(afternoon){
						    	$('p#wa').show(400);
					    	}
					    	if(evening){
						    	$('p#we').show(400);
					    	}
					    	if(night){
						    	$('p#wn').show(400);
					    	}
				    	}
				    	if(thursday){
					    	if(morning){
						    	$('p#thm').show(400);
					    	}
					    	if(afternoon){
						    	$('p#tha').show(400);
					    	}
					    	if(evening){
						    	$('p#the').show(400);
					    	}
					    	if(night){
						    	$('p#thn').show(400);
					    	}
				    	}
				    	if(friday){
					    	if(morning){
						    	$('p#fm').show(400);
					    	}
					    	if(afternoon){
						    	$('p#fa').show(400);
					    	}
					    	if(evening){
						    	$('p#fe').show(400);
					    	}
					    	if(night){
						    	$('p#fn').show(400);
					    	}
				    	}
					}
					if(weekend){
				    	if(saturday){
					    	if(morning){
						    	$('p#sm').show(400);
					    	}
					    	if(afternoon){
						    	$('p#sa').show(400);
					    	}
					    	if(evening){
						    	$('p#se').show(400);
					    	}
					    	if(night){
						    	$('p#sn').show(400);
					    	}
				    	}
				    	if(sunday){
					    	if(morning){
						    	$('p#sum').show(400);
					    	}
					    	if(afternoon){
						    	$('p#sua').show(400);
					    	}
					    	if(evening){
						    	$('p#sue').show(400);
					    	}
					    	if(night){
						    	$('p#sun').show(400);
					    	}
				    	}
					}
				}
				setInterval(update, 1000/4);
/*--------------------------------------------------------- */
				$('button#weekday').click(function(){
					$('button.weekday').show(400);
					$('div#weekdays').show(400);
					weekday = true;
					document.getElementById('weekday').style.color = "red";
				});
				
				$('button#weekend').click(function(){
					$('button.weekend').show(400);
					$('div#weekenddays').show(400);
					weekend = true;
					document.getElementById('weekend').style.color = "red";
				});	
/*--------------------------------------------------------- */
				$('button.weekend').click(function(){
					$('button.time').show(400);
					$('div#weektimes').show(400);
				});
				$('button.weekday').click(function(){
					$('button.time').show(400);
					$('div#weektimes').show(400);
				});
/*--------------------------------------------------------- */
				$('button#monday').click(function(){
					monday = true;
					document.getElementById('monday').style.color = "red";
				});
				$('button#tuesday').click(function(){
					tuesday = true;
					document.getElementById('tuesday').style.color = "red";
				});
				$('button#wednesday').click(function(){
					wednesday = true;
					document.getElementById('wednesday').style.color = "red";
				});
				$('button#thursday').click(function(){
					thursday = true;
					document.getElementById('thursday').style.color = "red";
				});
				$('button#friday').click(function(){
					friday = true;
					document.getElementById('friday').style.color = "red";
				});
				$('button#saturday').click(function(){
					saturday = true;
					document.getElementById('saturday').style.color = "red";
				});
				$('button#sunday').click(function(){
					sunday = true;
					document.getElementById('sunday').style.color = "red";
				});
/*--------------------------------------------------------- */
				$('button#morning').click(function(){
					morning = true;
					document.getElementById('morning').style.color = "red";
				});
				$('button#afternoon').click(function(){
					afternoon = true;
					document.getElementById('afternoon').style.color = "red";
				});
				$('button#evening').click(function(){
					evening = true;
					document.getElementById('evening').style.color = "red";
				});
				$('button#night').click(function(){
					night = true;
					document.getElementById('night').style.color = "red";
				});
/*--------------------------------------------------------- */
				$('button#reset').click(function(){
					weekday = weekend = monday = tuesday = wednesday = thursday = friday = saturday = sunday = morning = afternoon = evening = night = false;
					$(toggle).hide();
					document.getElementById('weekday').style.color = "black";
					document.getElementById('weekend').style.color = "black";
					document.getElementById('monday').style.color = "black";
					document.getElementById('tuesday').style.color = "black";
					document.getElementById('wednesday').style.color = "black";
					document.getElementById('thursday').style.color = "black";
					document.getElementById('friday').style.color = "black";
					document.getElementById('morning').style.color = "black";
					document.getElementById('afternoon').style.color = "black";
					document.getElementById('evening').style.color = "black";
					document.getElementById('night').style.color = "black";

				});				

				
			});
		</script>
	</head>


	<body>
		<div class="buttons">
			<button id="weekday" type="button">Weekday</button><br>
			<button id="weekend" type="button">Weekend</button>
		</div>
		
		<div class="buttons toggle" id="weekdays">
			<button class="toggle weekday" id="monday" type="button">Monday</button><br>
			<button class="toggle weekday" id="tuesday" type="button">Tuesday</button><br>
			<button class="toggle weekday" id="wednesday" type="button">Wednesday</button><br>
			<button class="toggle weekday" id="thursday" type="button">Thursday</button><br>
			<button class="toggle weekday" id="friday" type="button">Friday</button><br>
		</div>
		<div class="buttons toggle" id="weekenddays">
			<button class="toggle weekend" id="saturday" type="button">Saturday</button><br>
			<button class="toggle weekend" id="sunday" type="button">Sunday</button><br>
		</div>
		
		<div class="buttons toggle" id="weektimes">
			<button class="toggle time" id="morning" type="button">Morning</button><br>
			<button class="toggle time" id="afternoon" type="button">Afternoon</button><br>
			<button class="toggle time" id="evening" type="button">Evening</button><br>
			<button class="toggle time" id="night" type="button">Night</button><br>
		</div>
		<div id="resetDiv"><button id="reset" type="button">Reset</button><br></div>
				
		
		<section id="whatYouDo">
			<p class="toggle" id="mm"><?php echo $week['weekday']['Monday']['morning'][0]; ?></p>
			<p class="toggle" id="ma"><?php echo $week['weekday']['Monday']['afternoon'][0]; ?></p>
			<p class="toggle" id="me"><?php echo $week['weekday']['Monday']['evening'][0]; ?></p>
			<p class="toggle" id="mn"><?php echo $week['weekday']['Monday']['night'][0]; ?></p>
			
			<p class="toggle" id="tm"><?php echo $week['weekday']['Tuesday']['morning'][0]; ?></p>
			<p class="toggle" id="ta"><?php echo $week['weekday']['Tuesday']['afternoon'][0]; ?></p>
			<p class="toggle" id="te"><?php echo $week['weekday']['Tuesday']['evening'][0]; ?></p>
			<p class="toggle" id="tn"><?php echo $week['weekday']['Tuesday']['night'][0]; ?></p>
			
			<p class="toggle" id="wm"><?php echo $week['weekday']['Wednesday']['morning'][0]; ?></p>
			<p class="toggle" id="wa"><?php echo $week['weekday']['Wednesday']['afternoon'][0]; ?></p>
			<p class="toggle" id="we"><?php echo $week['weekday']['Wednesday']['evening'][0]; ?></p>
			<p class="toggle" id="wn"><?php echo $week['weekday']['Wednesday']['night'][0]; ?></p>

			<p class="toggle" id="thm"><?php echo $week['weekday']['Thursday']['morning'][0]; ?></p>
			<p class="toggle" id="tha"><?php echo $week['weekday']['Thursday']['afternoon'][0]; ?></p>
			<p class="toggle" id="the"><?php echo $week['weekday']['Thursday']['evening'][0]; ?></p>
			<p class="toggle" id="thn"><?php echo $week['weekday']['Thursday']['night'][0]; ?></p>
			
			<p class="toggle" id="fm"><?php echo $week['weekday']['Friday']['morning'][0]; ?></p>
			<p class="toggle" id="fa"><?php echo $week['weekday']['Friday']['afternoon'][0]; ?><br><?php echo $week['weekday']['Friday']['afternoon'][1]; ?></p>
			<p class="toggle" id="fe"><?php echo $week['weekday']['Friday']['evening'][0]; ?></p>
			<p class="toggle" id="fn"><?php echo $week['weekday']['Friday']['night'][0]; ?></p>
			
			<p class="toggle" id="sm"><?php echo $week['weekend']['Saturday']['morning'][0]; ?></p>
			<p class="toggle" id="sa"><?php echo $week['weekend']['Saturday']['afternoon'][0]; ?></p>
			<p class="toggle" id="se"><?php echo $week['weekend']['Saturday']['evening'][0]; ?></p>
			<p class="toggle" id="sn"><?php echo $week['weekend']['Saturday']['night'][0]; ?></p>

			<p class="toggle" id="sum"><?php echo $week['weekend']['Sunday']['morning'][0]; ?></p>
			<p class="toggle" id="sua"><?php echo $week['weekend']['Sunday']['afternoon'][0]; ?></p>
			<p class="toggle" id="sue"><?php echo $week['weekend']['Sunday']['evening'][0]; ?></p>
			<p class="toggle" id="sun"><?php echo $week['weekend']['Sunday']['night'][0]; ?></p>

		</section>

	</body>
</html>