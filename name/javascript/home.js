$(document).ready(function() {
	$(window).scrollTop(0);
	$('section.menuItem').hide();
	$('section#HOME').show();
	drawCircle();
	
	$('section.iconHolder img').click(function(){
		$('h1#pageName').text($(this).attr("name"));
		$('section.menuItem').hide();
		var thisSection = $(this).attr("name");
		var showThisSection = "section#" + thisSection;
		console.log(showThisSection);
		$(showThisSection).show();
	});
	
	
	$('section.iconHolder img#home').click(function(){
		$("#progressCanvas svg").remove();
		drawCircle();
	});
	
	function drawCircle(){
		var amount = 80;
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
