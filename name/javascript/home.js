$(document).ready(function() {
	$(window).scrollTop(0);
	
	//set up some variables
	var yourTotalToday;
	var todayGoal;
	var buttonColor = "#9DC52C";
	var lastRefreshableClicked = "home";
	$('input.color').val(buttonColor);
	
/*
	$('input.color').change(function(){
			    
	});
*/
	

/*
	hexToRGB = function(hex){
	    var r = hex >> 16;
	    var g = hex >> 8 & 0xFF;
	    var b = hex & 0xFF;
		console.log(r);	    
/* 	    return [r,g,b]; */
/* 	} */
	

	//load all the information for the badges into arrays
	var badgeNames = ["THE NIGHT OWL", "50:50", "THE REPEATER", "THE DYNAMIC DUO", "CLOCKWORK", "THE REGULAR", "THE QUICKY", "THE COUCH POTATOES", "THE INVESTIGATOR", "HIGH NOON", "THE MOONLIGHTER", "THE CHOREAHOLIC", "LABOR OF LOVE", "FORGOT TO STOP", "THE VACATIONERS", "THE HABIT", "THE TEAM", "10 HOURS", "25 HOURS", "50 HOURS", "100 HOURS", "250 HOURS", "500 HOURS", "1000 HOURS"];
	var badgePoints = ["75 points", "200 points", "75 points", "200 points", "100 points", "200 points", "10 points", "25 points", "200 points", "50 points", "50 points", "50 points", "75 points", "25 points", "25 points", "500 points", "100 points", "150 points", "200 points", "300 points", "400 points", "500 points", "1000 points", "1500 points"];
	var badgeDiscriptions = ["You logged a chore between 1 am and 4 am", "You and John logged the same amount of time today", "You logged 5+ chores in one day", "You and John logged chores at the same time for the same duration", "You logged a chore at the same time 3 times this week", "You logged a chore every day for a week", "You logged a chore under 5 min", "Neither you or John logged any chores above 2 minutes today", "You looked at your stats 20 times", "You logged a chore between noon and 1 pm", "You did an extra hour of chores beyond your daily time goal", "You logged 2+ consecutive hours", "You logged a chore on Valentine's day", "You logged a chore 12+ hours long", "You and John haven't done more than an hour of chores for a week", "You reached your goal for 21 consecutive days", "You and John each reached your distribution goals", "Together you and John have logged 10 hours", "Together you and John have logged 25 hours", "Together you and John have logged 50 hours", "Together you and John have logged 100 hours", "Together you and John have logged 250 hours", "Together you and John have logged 500 hours", "Together you and John have logged 1000 hours"];
	var badgeImageNames = ["nightOwl.png","50.png", "repeater.png", "dynamicDuo.png", "clockwork.png", "regular.png", "quicky.png", "couchPotatoe.png", "investigator.png", "highNoon.png", "moonlighter.png", "choreaholic.png", "laborOfLove.png", "forgotToStop.png", "vacationers.png", "habit.png", "team.png", "10hrs.png", "25hrs.png", "50hrs.png", "100hrs.png", "250hrs.png", "500hrs.png", "1000hrs.png",];
	var rewardImageNames = ["African", "Dahl", "Darwin", "Ford", "Green", "Jordan", "Proust"];


/*
	$.ajax({
			type: "POST",
			url: "userData.php",
			data: { variable: "test"},
			success: function(data) {
				console.log(data);
				yourTotalToday = 99;
				todayGoal = 999;
/* 				$("#yourTotalTodaySpan").text("yourTotalToday"); */
/* 				$("$todayGoalSpan").text("todayGoal"); */
/* 				drawCircle(); */
/* 			} */
/* 	}); */



	//hide the things that need to be hidden
	$("div.overlay").hide();
	$("div.badgeOverlay").hide();
	$("div.addChoreOverlay").hide();
	$("article.statsSection").hide();
	$("img.reward").hide();
	$("img.buttonInChoreList").hide();
	
	
	//load the information from various php file into the correct locations in the app
	$.ajax({
			type: "POST",
			url: "home.php",
			data: { variable: "test"},
			success: function(data) {
				document.getElementById("HOME").innerHTML = data;
			}
	});
	
	$.ajax({
			type: "POST",
			url: "notifications.php",
			data: { variable: "test"},
			success: function(data) {
				document.getElementById("NOTIFICATIONS").innerHTML = data;
			}
	});
	
	$.ajax({
			type: "POST",
			url: "stats.php",
			data: { variable: "test"},
			success: function(data) {
				document.getElementById("stats").innerHTML = data;
			}
	});
	
	$.ajax({
			type: "POST",
			url: "getButtonColor.php",
			data: { variable: "test"},
			success: function(data) {
				$('input.color').val(data);
			}
	});
	
/*
	$.ajax({
			type: "POST",
			url: "settings.php",
			data: { variable: "test"},
			success: function(data) {
				document.getElementById("settings").innerHTML = data;
			}
	});
*/
	
	$('section.menuItem').hide();
	$('section#HOME').show();
	
	setTimeout(drawCircle, 100);
	
/*
	$('section.iconHolder img').click(function(){
		$('h1#pageName').text($(this).attr("name"));
		$('section.menuItem').hide();
		var thisSection = $(this).attr("name");
		var showThisSection = "section#" + thisSection;
		$(showThisSection).show();
	});
*/
	
	//when you click on a menu item
	$('section.iconHolder img').click(function(){
		//change the top nav heading to match the name of the section
		$('h1#pageName').text($(this).attr("name"));
		//hide all the sections
		$('section.menuItem').hide();
		//reveal the section you clicked on
		var thisSection = $(this).attr("name");
		var showThisSection = "section#" + thisSection;
		$(showThisSection).show();
		
		if($(this).attr("name") == "STATS"){
			//set up stats section to default
			//hide all sections
			$("article.statsSection").hide();
			//show badges section
			$("article#stats").show();
			//make all tabs light blue
			$("table.statsNavTable td").css("background-color", "#59BFC5");
			//make badges tab dark blue
			$("td#badgesButton").css("background-color", "#25335A");
			lastRefreshableClicked = "Badges";
		}
		else if($(this).attr("name") == "SETTINGS"){
			//set up stats section to default
			//hide all sections
			$("article.settingsSection").hide();
			//show badges section
			$("article#settings").show();
			//make all tabs light blue
			$("table.settingsNavTable td").css("background-color", "#59BFC5");
			//make badges tab dark blue
			$("td#goalButton").css("background-color", "#25335A");
			lastRefreshableClicked = "Goal";
		}
		
		$('img.reward').hide();
	});	
	
	
	//when you click on home remove and redraw the cirlce so it looks nice
	$('section.iconHolder img#home').click(function(){
		$("#progressCanvas svg").remove();
		drawCircle();
/* 		setTimeout(drawCircle, 200); */
	});
	
	//click on the add button to bring up the add chore overlay
	$('img.addButton').click(function(){
		//navigate back to the home screen
		$('section.menuItem').hide();
		$('section#HOME').show();
		//set the stuff to default?
		$('input.choreInput').val('');		
		$('img.timerButton').css("opacity", "1");
		$("div.addChoreOverlay").show( "drop", { direction: "down" }, "fast" );
		var randomNumber = Math.floor((Math.random() * rewardImageNames.length));
		console.log(randomNumber);
		$('img.reward').attr("src","images/rewards/"+rewardImageNames[randomNumber]+".png");
	});
	
	
	//when you click on the cancel button
	$('p#cancelButton').click(function(){
		//hide the overlay
		$("div.addChoreOverlay").hide( "drop", { direction: "down" }, "fast" );
		//set the timer button back to default
		$('img.timerButton').attr("value", "startTimer");
		$('img.timerButton').attr("src","images/startTimerButton.png");
	});
	
	$('p#saveButton').click(function(){
		if($('input#date').val() == ''){
			alert("Please input a date");
		}
		else if($('input#startTime').val() == ''){
			alert("Please input a start time");
		}
		else{
			//hide the overlay
			$("div.addChoreOverlay").hide( "drop", { direction: "down" }, "fast" );
			//set the timer button back to default
			$('img.timerButton').attr("value", "startTimer");
			$('img.timerButton').attr("src","images/startTimerButton.png");
			
			if($('input#endTime').val() == ''){
				//get the time right now
				var timeNow = new Date().toJSON();
				//take just the hours digits
				var timeNowHour = timeNow.slice(11,13);
				//adjust them to this timezone
				timeNowHour = timeNowHour - 4;
				//if the number doesnt have a 0 in front add it
				if(timeNowHour < 10){
					timeNowHour = "0"+timeNowHour;
				}
				//take just the min digits and :
				var timeNowMin = timeNow.slice(13, 16);
				//set the start time input value to the hour digits plus the min digits
				$('input#endTime').val(timeNowHour+timeNowMin);
			}
			//send the data to the server
			$.ajax({
				type: "POST",
				url: "logAChore.php",
				data: { person: "Quincy",
						date: $('input#date').val(),
						startTime: $('input#startTime').val(),
						endTime: $('input#endTime').val()
				},
				success: function(data) {
					console.log(data);
				}
			});
			
			$('img.reward').show( "scale",  800);
			$('img.reward').hide( "fade", { easing: 'easeInExpo'} , 11000);
			
			$.ajax({
				type: "POST",
				url: "home.php",
				data: { variable: "test"},
				success: function(data) {
					document.getElementById("HOME").innerHTML = data;
				}
			});
			setTimeout(drawCircle, 100);
		}
	});
	
	//when you click on the timer button
	$('img.timerButton').click(function(){
		//find out if it is yet to be clicked or already clicked
		var startOrEnd = $(this).attr("value");
		//if it hasnt been clicked
		if(startOrEnd == "startTimer"){
			//find today's date
			var dateNow = new Date().toJSON().slice(0,10);
			//get the time right now
			var timeNow = new Date().toJSON();
			//take just the hours digits
			var timeNowHour = timeNow.slice(11,13);
			//adjust them to this timezone
			timeNowHour = timeNowHour - 4;
			if(timeNowHour < 1){
				var dateNowBeginning = dateNow.slice(0, 9);
				var dateNowEnd = dateNow.slice(9, 10);
				dateNowEnd = dateNowEnd - 1;
				dateNow = dateNowBeginning + dateNowEnd;
				timeNowHour = timeNowHour + 24;
			}
			//if the number doesnt have a 0 in front add it
			if(timeNowHour < 10){
				timeNowHour = "0"+timeNowHour;
			}
			//take just the min digits and :
			var timeNowMin = timeNow.slice(13, 16);
			//set the date input value to today
			$('input#date').val(dateNow);
			//set the start time input value to the hour digits plus the min digits
			$('input#startTime').val(timeNowHour+timeNowMin);
			//change the value to 'had been clicked'
			$(this).attr("value", "endTimer");
			//and change the image
			$(this).attr("src","images/endTimerButton.png");
			$('input#endTime').val('');
		}
		//if it has been clicked
		else if(startOrEnd == "endTimer"){
			//get the time right now
			var timeNow = new Date().toJSON();
			//take just the hours digits
			var timeNowHour = timeNow.slice(11,13);
			//adjust them to this timezone
			timeNowHour = timeNowHour - 4;
			if(timeNowHour < 1){
				timeNowHour = timeNowHour + 24;
			}
			//if the number doesnt have a 0 in front add it
			if(timeNowHour < 10){
				timeNowHour = "0"+timeNowHour;
			}
			//take just the min digits and :
			var timeNowMin = timeNow.slice(13, 16);
			//set the start time input value to the hour digits plus the min digits
			$('input#endTime').val(timeNowHour+timeNowMin);
			//change the value back to default
			$(this).attr("value", "startTimer");
			//change the image to match
			$(this).attr("src","images/startTimerButton.png");
			//hide the button
			$(this).css("opacity", "0");	
		}
	});
	
	
	//when you click on points load the points file into article#statsPoints and change that tab blue
	$('td#pointsButton').click(function(){
		//make all tabs light blue
		$("table.statsNavTable td").css("background-color", "#59BFC5");
		$("td#pointsButton").css("background-color", "#25335A");
		
		if(lastRefreshableClicked == "stats" || lastRefreshableClicked == "badges"){
			$("article.statsSection").hide( "drop", { direction: "left" }, "medium" );
			$("article#statsPoints").show( "drop", { direction: "right" }, "medium" );
			
		}
		else if(lastRefreshableClicked == "calendar"){
			$("article.statsSection").hide( "drop", { direction: "right" }, "medium" );
			$("article#statsPoints").show( "drop", { direction: "left" }, "medium" );
		}
		else{}
/* 		$("div#pointsImageHolder img").css("border", "solid"); */
		$("div#pointsImageHolder").animate({ scrollLeft:600 }, 1200);

	});	
	
	$("div.hotspot").click(function(){
		$("div.overlay").show( "drop", { direction: "down" }, "fast" );
		$("div.badgeOverlay").show( "drop", { direction: "down" }, "fast" );
		var arrayLocation = $(this).attr("value");
		$('h2.badgeNameOverlay').text(badgeNames[arrayLocation]);
		$('p.badgePointsOverlay').text(badgePoints[arrayLocation]);
		$('p.badgeDiscriptionOverlay').text(badgeDiscriptions[arrayLocation]);
		$('img.badgeImageOverlay').attr("src", "images/badges/"+badgeImageNames[arrayLocation]);
	});
	
	
		/*
$("div.overlay").show( "drop", { direction: "down" }, "fast" );
		$("div.badgeOverlay").show( "drop", { direction: "down" }, "fast" );
		var arrayLocation = $(this).attr("value");
		$('h2.badgeNameOverlay').text(badgeNames[arrayLocation]);
		$('p.badgePointsOverlay').text(badgePoints[arrayLocation]);
		$('p.badgeDiscriptionOverlay').text(badgeDiscriptions[arrayLocation]);
		$('img.badgeImageOverlay').attr("src", "images/badges/"+badgeImageNames[arrayLocation]);
*/
/* 		console.log(arrayLocation); */
/* 	}); */
	
	
	
	
	//when you click on calendar load the points file into article#statsCalendar and change that tab blue
	$('td#calendarButton').click(function(){
		//make all tabs light blue
		$("table.statsNavTable td").css("background-color", "#59BFC5");
		$("td#calendarButton").css("background-color", "#25335A");
		
		$("article.statsSection").hide( "drop", { direction: "left" }, "medium" );
		$("article#statsCalendar").show( "drop", { direction: "right" }, "medium" );
		
		$("div.datesHolder").animate({ scrollTop:800 }, 1500);

	});	
	
	$("div.datesHolder").scroll(function(){
		var scrollHeight = $("div.datesHolder").scrollTop();
		if(scrollHeight < 120){
			$("h2.calendarMonth").text("March, 2014");
		}
		if(scrollHeight < 285 && scrollHeight > 120){
			$("h2.calendarMonth").text("April, 2014");
		}
		else if(scrollHeight > 285){
			$("h2.calendarMonth").text("May, 2014");
		}
/* 		alert(scrollHeight); */
	});
	
	$('div.datesHolder td').click(function(){
		var date = $(this).attr("value");
		$.ajax({
				type: "POST",
				url: "calendar.php",
				data: { date: date},
				success: function(data) {
					document.getElementById("calendarDayHolder").innerHTML = data;
				}
		});
	});
	
	
	
	//when you click on badges load the points file into article#statsCalendar and change that tab blue
	$('td#badgesButton').click(function(){
		//make all tabs light blue
		$("table.statsNavTable td").css("background-color", "#59BFC5");
		$("td#badgesButton").css("background-color", "#25335A");
		
		$("article.statsSection").hide( "drop", { direction: "right" }, "medium" );
		$("article#stats").show( "drop", { direction: "left" }, "medium" );

	});	
	
	
	
	$('td#goalButton').click(function(){
		//make all tabs light blue
		$("table.settingsNavTable td").css("background-color", "#59BFC5");
		$("td#goalButton").css("background-color", "#25335A");	
		
		$("article.settingsSection").hide( "drop", { direction: "right" }, "medium" );
		$("article#settings").show( "drop", { direction: "left" }, "medium" );

	});	
	
	$('td#moduleButton').click(function(){
		//make all tabs light blue
		$("table.settingsNavTable td").css("background-color", "#59BFC5");
		$("td#moduleButton").css("background-color", "#25335A");
		
		if(lastRefreshableClicked == "settings" || lastRefreshableClicked == "goal"){
			$("article.settingsSection").hide( "drop", { direction: "left" }, "medium" );
			$("article#settingsModule").show( "drop", { direction: "right" }, "medium" );
			
		}
		else if(lastRefreshableClicked == "chores"){
			$("article.settingsSection").hide( "drop", { direction: "right" }, "medium" );
			$("article#settingsModule").show( "drop", { direction: "left" }, "medium" );
		}
	});	
	
	$('td#choresButton').click(function(){
		//make all tabs light blue
		$("table.settingsNavTable td").css("background-color", "#59BFC5");
		$("td#choresButton").css("background-color", "#25335A");
		
		$("article.settingsSection").hide( "drop", { direction: "left" }, "medium" );
		$("article#settingsChores").show( "drop", { direction: "right" }, "medium" );
	});
	
	
	$('.refreshable').click(function(){
		lastRefreshableClicked = $(this).attr("value");
		console.log(lastRefreshableClicked);
		$('#currentSlider').val("30");
		$('#idealSlider').val("50");
		$('h2#currentNumbers').text("30:70");		
		$('h2#idealNumbers').text("50:50");	
	});
	
	//when you click the refresh button
	$('img#refreshButton').click(function(){
		//determine what page you were on buy seeing what the last page you clicked on was and reload that php section
		if(lastRefreshableClicked == "home"){
			location.reload();
		}
		else if (lastRefreshableClicked == "stats"){
				$.ajax({
					type: "POST",
					url: "stats.php",
					data: { variable: "test"},
					success: function(data) {
						document.getElementById("stats").innerHTML = data;
					}
				});
		}
		else if (lastRefreshableClicked == "settings"){
			
		}
		else if (lastRefreshableClicked == "notifications"){
				$.ajax({
					type: "POST",
					url: "notifications.php",
					data: { variable: "test"},
					success: function(data) {
						document.getElementById("NOTIFICATIONS").innerHTML = data;
					}
				});
		}
		
	});
	
	//change the content of the badge discriptions and show the overlay
	$(document).on('click', ".badgeImage" , function() {
		$("div.overlay").show( "drop", { direction: "down" }, "fast" );
		$("div.badgeOverlay").show( "drop", { direction: "down" }, "fast" );
		var arrayLocation = $(this).attr("value");
		$('h2.badgeNameOverlay').text(badgeNames[arrayLocation]);
		$('p.badgePointsOverlay').text(badgePoints[arrayLocation]);
		$('p.badgeDiscriptionOverlay').text(badgeDiscriptions[arrayLocation]);
		$('img.badgeImageOverlay').attr("src", "images/badges/"+badgeImageNames[arrayLocation]);
/* 		console.log(arrayLocation); */
	});
	
	
	
	
	
	
	//hide the overlay and any potential things that could be open
	$("img.XButton").click(function(){
		$("div.overlay").hide( "drop", { direction: "down" }, "fast" );
		$("div.badgeOverlay").hide( "drop", { direction: "down" }, "fast" );
	});
	
	
	
	
	
	
	$('#currentSlider').noUiSlider({
		start: 30,
		range: {
			'min': 0,
			'max': 100
		}
	});

	$('#idealSlider').noUiSlider({
		start: 50,
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	
	$('#currentSlider').on({
		slide: function(){
			var sliderValue = parseInt($('#currentSlider').val());
			var sliderValueLeftOver = 100 - sliderValue;
			$('h2#currentNumbers').text(sliderValue + ":" + sliderValueLeftOver);		
		}
	});
	
	$('#idealSlider').on({
		slide: function(){
			var sliderValue = parseInt($('#idealSlider').val());
			var sliderValueLeftOver = 100 - sliderValue;
			$('h2#idealNumbers').text(sliderValue + ":" + sliderValueLeftOver);		
		}
	});
	
	$('div.choreHolder ul li').click(function(){
		$(this).children("img").slideToggle(250);
	});
	
	$("img.buttonInChoreList").click(function(){
		if($(this).parent().hasClass('green')){
			$(this).parent().switchClass( "green", "gray", 500, "easeInOutQuad" ); 
			$(this).attr("src", "images/check.png");
		}
		if($(this).parent().hasClass('gray')){
			$(this).parent().switchClass( "gray", "green", 500, "easeInOutQuad" ); 
			$(this).attr("src", "images/XButton.png");
		}
	});
	
	$('p.buttonColorSave').click(function(){
		//figure out the color in the input
		var buttonColor2 = $('input.color').val();
		var r = buttonColor2.slice(0,2);
	    var g = buttonColor2.slice(2,4);
	    var b = buttonColor2.slice(4,6);
	    
	    r = parseInt(r, 16);
	    g = parseInt(g, 16);
	    b = parseInt(b, 16);
		//send the data to the server
		$.ajax({
			type: "POST",
			url: "saveColor.php",
			data: { buttonR: r,
					buttonG: g,
					buttonB: b,
					hex: buttonColor2
			},
			success: function(data) {
				console.log(data);
			}
		});
		alert('saved');
	});

/* 	.switchClass( "big", "blue", 1000, "easeInOutQuad" ); */
	
	
	//circle drawing
	function drawCircle(){
	yourTotalToday = parseInt(document.getElementById("yourTotalTodaySpan").innerHTML);
	todayGoal = parseInt(document.getElementById("todayGoalSpan").innerHTML);
	
		var amount = (yourTotalToday/todayGoal)*100;

		var circleCenter = 125;
		var circleSize = 100;
		
		var archtype = Raphael("progressCanvas", 250, 250);
		archtype.customAttributes.arc = function (xloc, yloc, value, total, R) {
		    var alpha = 360 / total * value,
		        a = (90 - alpha) * Math.PI / 180,
		        x = xloc + R * Math.cos(a),
		        y = yloc - R * Math.sin(a),
		        path;
		    if (total == value) {
		        path = [
		            ["M", xloc, yloc - R],
		            ["A", R, R, 0, 1, 1, xloc - 0.01, yloc - R]
		        ];
		    } else {
		        path = [
		            ["M", xloc, yloc - R],
		            ["A", R, R, 0, +(alpha > 180), 1, x, y]
		        ];
		    }
		    return {
		        path: path
		    };
		};
		
		//skinny lighter
		var my_arc_bg3 = archtype.path().attr({
		    "stroke": "#EEEEEE",
		    "stroke-width": 1,
		    "stroke-linecap":"round",
		    arc: [circleCenter, circleCenter, 0, 100, circleSize-17]
		});
		
		my_arc_bg3.animate({
		    arc: [circleCenter, circleCenter, 100, circleSize, circleSize-17]
		}, 0, "bounce");
		
		//slightly larger
		var my_arc_bg2 = archtype.path().attr({
		    "stroke": "#EEEEEE",
		    "stroke-width": 20,
		    "stroke-linecap":"round",
		    arc: [circleCenter, circleCenter, 0, 100, circleSize+8]
		});
		
		my_arc_bg2.animate({
		    arc: [circleCenter, circleCenter, 100, circleSize, circleSize+8]
		}, 0, "bounce");
		
		//darkest
		var my_arc_bg1 = archtype.path().attr({
		    "stroke": "#DADADA",
		    "stroke-width": 22,
		    "stroke-linecap":"round",
		    arc: [circleCenter, circleCenter, 0, 100, circleSize]
		});
		
		my_arc_bg1.animate({
		    arc: [circleCenter, circleCenter, 100, circleSize, circleSize]
		}, 0, "bounce");
	
		
		//make an arc at 50,50 with a radius of 30 that grows from 0 to 40 of 100 with a bounce
		//red
		var strokeColor = "#F82641";
		if(yourTotalToday >= todayGoal){
			strokeColor = "#25335A";
		}
		else{
			strokeColor = "#F82641";
		}
		var my_arc = archtype.path().attr({
		    "stroke": strokeColor,
		    "stroke-width": 10,
		    "stroke-linecap":"round",
		    arc: [circleCenter, circleCenter, 0, circleSize, circleSize]
		});
		
		my_arc.animate({
		    arc: [circleCenter, circleCenter, amount, circleSize, circleSize]
		}, 1500, "bounce");

	}

});
