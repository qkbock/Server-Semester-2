$(document).ready(function() {

	var username = "";
	
	$('#usernameInput').keyup(function(){
		username = $(this).val();		
	});
	
	$('#passwordInput').keyup(function(){
		password = $(this).val();		
	});
	
    $('.my_modal_open').click(function(){
        $('#my_modal').popup({
            'autoopen': true
        });
    });
    
    $('#container').fullContent({
		stages: 'section',
	    mapPosition: [{v: 1, h: 1}, {v:1 , h: 2}, {v:1 , h: 3}, {v:1 , h: 4},  {v:1 , h: 5}, {v:1 , h: 6}, {v:1 , h: 7}, {v:1 , h: 8}, {v:1 , h: 9}, {v:1 , h: 10}, {v:1 , h: 11}],
	    stageStart: 1,
		idComplement: 'page_'
	}); 
	
	$('div#loginBox').hide();
	$('#pageCover').hide();
	$('#mistakeBox').hide();
	$('#graphBoxPageCover').hide();
	$('#graphBox').hide();
	
	$('button#loginButton').click(function(){
		$('div#loginBox').slideToggle();
	});
	
	$('#closeLogin').click(function(){
		$('div#loginBox').slideToggle();
	});
	
	$("#loginSubmitButton").click(function(){
		if((username == "Quincy" && password == "m") || (username == "Mauricio" && password == "mauricio") || (username == "Sample") || (username == "sample") ){
			$.ajax({
				type: "POST",
				url: "homeData.php",
				data: { userName: username},
				success: function(data) {
					document.getElementById("myDataHolder").innerHTML = data;
				}
			});
			$.ajax({
				type: "POST",
				url: "suggestionData.php",
				data: { userName: username},
				success: function(data) {
					document.getElementById("suggestionsHolder").innerHTML = data;
				}
			});
		}
		else if(username == "" && password == ""){
			event.preventDefault();
			alert("You need to fill in a username and password.");
		}
		else{
			event.preventDefault();
			alert("Your username and password do not match.");
		}
		console.log(username, password);
	});
	

	$(document).on("click", "#myDataHolder div", function(){
		var whatsInside = this.innerHTML;
 		var updated = whatsInside.replace('<center>', '');
 		var updated2 = updated.replace('</center>', '');
 		var trimed = $.trim(updated2); 
		console.log(trimed);
		 	
		$.ajax({
			type: "POST",
			url: "makeGraphHome.php",
			data: { userNameVal: username, movieVal: trimed },
			success: function(data) {
				document.getElementById("graphBoxDataHolder").innerHTML = data;
			}
		});	
		
		document.getElementById("graphHomeMovieName").innerHTML = trimed;
		$('#graphBoxPageCover').fadeIn();
		$('#graphBox').slideDown();
	});	
	
	$('#closeGraph').click(function(){
		$('#graphBoxPageCover').fadeOut();
		$('#graphBox').slideUp();
	});
	
	$('#beginMovieButton').click(function(){
	    movie = $('#q').val();
	    if(movie == ""){
			event.preventDefault();
		    alert("You need to input a movie!");
	    }
	    timer = 61;
	    counting = true;
	    $.ajax({
	    	type: "POST",
			url: "getTime.php",
			success: function(data) {
				startTime = data; 
				console.log(startTime);
			}
		});
    });
    
    $('#goBack').click(function(){
	    $('#pageCover').fadeOut();
	    $('#mistakeBox').slideUp();
	    timer = 61;
	    countDownDone = false;
    });
    
    $('#moreTime').click(function(){
	    $('#pageCover').fadeOut();
	    $('#mistakeBox').slideUp();
	    timer = 61;
	    counting = true;
	    countDownDone = false;
	    $.ajax({
	    	type: "POST",
			url: "getTime.php",
			success: function(data) {
				startTime = data;
				console.log(startTime); 
			}
		});
    });
    
    $('#testForwardButton').click(function(){
	   recievedData = true;
	   console.log(recievedData);
    });
    
    $('#logMovieButton').click(function(){
	    rating = $('#rating input').val();
	    $.ajax({
	    	type: "POST",
			url: "getTime.php",
			success: function(data) {
				endTime = data; 
				console.log(endTime);
				$.ajax({
					type: "POST",
					url: "logMovie.php",
					data: { userNameVal: username, movieVal: movie, ratingVal: rating, startTimeVal: startTime, endTimeVal: endTime },
					success: function(data){
						console.log(data);
					}
				});
				$.ajax({
					type: "POST",
					url: "makeGraph.php",
/* 					data: { userNameVal: username, startTimeVal: startTime, endTimeVal: endTime }, */
					data: { userName: "Mauricio", startTime: 1367524387, endTime: 1367525959},
					success: function(data) {
						document.getElementById("graphHolder").innerHTML = data;
					}
				});
				$.ajax({
					type: "POST",
					url: "logSuggestion.php",
					data: { userNameVal: username, movieVal: movie, ratingVal: rating, startTimeVal: startTime, endTimeVal: endTime },
					success: function(data){
						document.getElementById("resultsSugHolder").innerHTML = data;
					}
				});

			}
		});
		document.getElementById("movieName").innerHTML = movie;
    });
    
    $('.returnHome').click(function(){    	
	    movie = "";
	    $('#q').val("");
	    $('#rating input').val("");
	    $('#rating img').attr("src", "images/stars/star-off.png");
		startTime = "";
    	endTime = "";
		rating = "";
    	timer = 61;
    	counting = false;
    	countDownDone = false;
    	recievedData = false;
    	$('#pageCover').hide();
	    $('#mistakeBox').hide();
		//set all "val" to "" too	   	
	   	$.ajax({
	   		type: "POST",
			url: "homeData.php",
			data: { userName: username},
			success: function(data) {
				document.getElementById("myDataHolder").innerHTML = data;
			}
		});
		$.ajax({
			type: "POST",
			url: "suggestionData.php",
			data: { userName: username},
			success: function(data) {
				document.getElementById("suggestionsHolder").innerHTML = data;
			}
		}); 
    });
    
    $(function() {
    	$.fn.raty.defaults.path = 'images/stars';
	    $('#rating').raty({
		  	size     : 24,
			iconRange: [
		    	{ range: 1, on: '1.png', off: 'star-off.png' },
		    	{ range: 2, on: '2.png', off: 'star-off.png' },
		    	{ range: 3, on: '3.png', off: 'star-off.png' },
		    	{ range: 4, on: '4.png', off: 'star-off.png' },
		    	{ range: 5, on: '5.png', off: 'star-off.png' }
		    ]
		});
    }); 
    
	$(function(){
    	$("#q").focus(); //Focus on search field
    	$("#q").autocomplete({
        minLength: 0,
        delay:1,
        source: "suggest.php",
        focus: function( event, ui ) {
            $(this).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $(this).val( ui.item.label );
            return false;
        }
    }).data("uiAutocomplete")._renderItem = function( ul, item ) {
        return $("<li></li>")
            .data( "item.autocomplete", item )
            .append( "<a>" + (item.img?"<img class='imdbImage' src='imdbImage.php?url=" + item.img + "' />":"") + "<span class='imdbTitle'>" + item.label + "</span>" + "<div class='clear'></div>" + "</a>")
            .appendTo( ul );
            };
    });	
    
    function countdown(){
		if(counting == true){
			timer--;
		}
		if(timer <= 1){
			timer = 0;
			counting = false;
			countDownDone = true;
		}
		document.getElementById("timer").innerHTML = timer;
	}
	
	function fakeClick(event, anchorObj) {
		if (anchorObj.click) {
			anchorObj.click()
		} 
		else if(document.createEvent) {
			if(event.target !== anchorObj) {
				var evt = document.createEvent("MouseEvents"); 
				evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null); 
				var allowDefault = anchorObj.dispatchEvent(evt);
			      // you can check allowDefault for false to see if
			      // any handler called evt.preventDefault().
			      // Firefox will *not* redirect to anchorObj.href
			      // for you. However every other browser will.
			}
		}
	}

	function proceed(){
		if(recievedData){
			//go to next page
			console.log(recievedData);
			fakeClick(event, document.getElementById('rateMovieLink'));
			recievedData = false;
			console.log(recievedData);	
		}
		else if(countDownDone){
			$('#pageCover').fadeIn();
			$('#mistakeBox').slideDown();
		}
	}
	
	function lookingForData(){
		if(counting){
			$.ajax({
				type: "POST",
				url: "checkForPulseData.php",
				data: { userName: username, startTimeVal: startTime},
				dataType: "json",
				success: function(data) {
					if(data.result) {					
						recievedData = true;
						counting = false;
					}
				}
			});
			console.log("trying");	
		}

/*
	var bCounting = true;
	while(bCounting && !countDownDone){
			$.ajax({
				type: "POST",
				url: "checkForPulseData.php",
				data: { userName: username, startTimeVal: startTime},
				dataType: "json",
				success: function(data) {
					console.log(data);
					if(data.result) {					
						bCounting= false;
					}
				}
				
			});
		}
*/
	}


	setInterval(lookingForData, 2000);
	setInterval(countdown, 1000);
	setInterval(proceed, 1000);
});
