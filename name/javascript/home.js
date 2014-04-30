$(document).ready(function() {
	$(window).scrollTop(0);
	
	//set up some variables
	var yourTotalToday;
	var todayGoal;
	var lastRefreshableClicked = "home";
	
	//load all the information for the badges into arrays
	var badgeNames = ["THE NIGHT OWL", "50:50", "THE REPEATER"];
	var badgePoints = ["100 points", "200 points", "300 points"];
	var badgeDiscriptions = ["You logged a chore between 1 and 4 am", "You and John logged exactly the same amount of time today", "You logged 5+ chores in one day"];
	var badgeImageNames = ["nightOwl.png","50.png", "repeater.png"];
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
		//change the tab a color??
		$("td#badgesButton").css("background-color", "#25335A");
	});	
	
	
	//when you click on home remove and redraw the cirlce so it looks nice
	$('section.iconHolder img#home').click(function(){
		$("#progressCanvas svg").remove();
		drawCircle();
/* 		setTimeout(drawCircle, 200); */
	});
	
	
	$('.refreshable').click(function(){
		lastRefreshableClicked = $(this).attr("value");
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
