$(document).ready(function() {
	$(window).scrollTop(0);
	
	//set up some variables
	var yourTotalToday;
	var todayGoal;
	var lastRefreshableClicked = "home";
	
	//load all the information for the badges into arrays
	var badgeNames = ["THE NIGHT OWL", "50:50", "THE REPEATER", "THE DYNAMIC DUO", "CLOCKWORK", "THE REGULAR", "THE QUICKY", "THE COUCH POTATOES", "THE INVESTIGATOR", "HIGH NOON", "THE MOONLIGHTER", "THE CHOREAHOLIC", "LABOR OF LOVE", "FORGOT TO STOP", "THE VACATIONERS", "THE HABIT", "THE TEAM", "10 HOURS", "25 HOURS", "50 HOURS", "100 HOURS", "250 HOURS", "500 HOURS", "1000 HOURS"];
	var badgePoints = ["75 points", "200 points", "75 points", "200 points", "100 points", "200 points", "10 points", "25 points", "200 points", "50 points", "50 points", "50 points", "75 points", "25 points", "25 points", "500 points", "100 points", "150 points", "200 points", "300 points", "400 points", "500 points", "1000 points", "1500 points"];
	var badgeDiscriptions = ["You logged a chore between 1 am and 4 am", "You and John logged the same amount of time today", "You logged 5+ chores in one day", "You and John logged chores at the same time for the same duration", "You logged a chore at the same time 3 times this week", "You logged a chore every day for a week", "You logged a chore under 5 min", "Neither you or John logged any chores above 2 minutes today", "You looked at your stats 20 times", "You logged a chore between noon and 1 pm", "You did an extra hour of chores beyond your daily time goal", "You logged 2+ consecutive hours", "You logged a chore on Valentine's day", "You logged a chore 12+ hours long", "You and John haven't done more than an hour of chores for a week", "You reached your goal for 21 consecutive days", "You and John each reached your distribution goals", "Together you and John have logged 10 hours", "Together you and John have logged 25 hours", "Together you and John have logged 50 hours", "Together you and John have logged 100 hours", "Together you and John have logged 250 hours", "Together you and John have logged 500 hours", "Together you and John have logged 1000 hours"];
	var badgeImageNames = ["nightOwl.png","50.png", "repeater.png", "dynamicDuo.png", "clockwork.png", "regular.png", "quicky.png", "couchPotatoe.png", "investigator.png", "highNoon.png", "moonlighter.png", "choreaholic.png", "laborOfLove.png", "forgotToStop.png", "vacationers.png", "habit.png", "team.png", "10hrs.png", "25hrs.png", "50hrs.png", "100hrs.png", "250hrs.png", "500hrs.png", "1000hrs.png",];
/*
	$.ajax({
			type: "POST",
			url: "getTodayGoal.php",
			data: { variable: "test"},
			success: function(data) {
				todayGoal = parseInt(data);
				console.log("Today Goal:");
				console.log(todayGoal);
				console.log(typeof(todayGoal));
			}
	});
	
	$.ajax({
			type: "POST",
			url: "getYourTotalToday.php",
			data: { variable: "test"},
			success: function(data) {
				yourTotalToday = parseInt(data);
				console.log("Total Today:");
				console.log(yourTotalToday);
			}
	});
*/



	//hide the things that need to be hidden
	$("div.overlay").hide();
	$("div.badgeOverlay").hide();
	$("article.statsSection").hide();
	
	
	
	
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
			url: "settings.php",
			data: { variable: "test"},
			success: function(data) {
				document.getElementById("SETTINGS").innerHTML = data;
			}
	});
	
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
	});	
	
	
	//when you click on home remove and redraw the cirlce so it looks nice
	$('section.iconHolder img#home').click(function(){
		$("#progressCanvas svg").remove();
		drawCircle();
/* 		setTimeout(drawCircle, 200); */
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
	
	
	
	
	$('.refreshable').click(function(){
		lastRefreshableClicked = $(this).attr("value");
		console.log(lastRefreshableClicked);
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
		var my_arc = archtype.path().attr({
		    "stroke": "#F82641",
		    "stroke-width": 10,
		    "stroke-linecap":"round",
		    arc: [circleCenter, circleCenter, 0, circleSize, circleSize]
		});
		
		my_arc.animate({
		    arc: [circleCenter, circleCenter, amount, circleSize, circleSize]
		}, 1500, "bounce");

	}

});
