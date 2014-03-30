	jQuery(document).ready(function($) {
		var Chrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
		var Safari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
		var deviceAgent = navigator.userAgent.toLowerCase();
		var iOS 		= deviceAgent.match(/(iphone|ipod|ipad)/);
		var iPad		= deviceAgent.match(/(ipad)/);
		var iPhone		= deviceAgent.match(/(iphone|ipod)/)
		var android 	= (navigator.platform.indexOf("android")>=0);
		(function($){ // START IT UP	
			if(iOS || android) { window.scrollTo(0, 1);
				$('html').addClass("Phone");		
			} // END IF IS iOS
			if(!iOS && !android) {			

				$(window).resize(function(){

				}).trigger('resize');
				
			} // END IF IS NOT iOS	
			
			// BEGIN IPAD
			if(iPad){
			} // END IPAD
			
			// RESIZERS 
			function change(){	
				
				//PICTURE HEIGHT
				var imageWidth = $("a.photo").width();
				$("a.photo").css({
					height: imageWidth * 0.8
				});
				

				// FOOTER TO THE BOTTOM 
				var winHeight = $(window).height();
				var headHeight = $("#header").height();
				var spaceWrapHeight = $(".spaceWrap").height();
				var mainSpace = headHeight + spaceWrapHeight;
				
				if($(window).height() < mainSpace * 1.1) {
					$('body.home #footer').css({
						marginTop: mainSpace + 200
					});
				} else if($(window).width() < 960) {
					$('body.home #footer').css({
						marginTop: winHeight
					});
				}  else if($(window).width() > 960) {
					$('body.home #footer').css({
						marginTop: 0
					});
				} // END FOOTER TRICKS


				
				

			    
			} // FINISHED ON WINDOW LOAD
			change();
			
	
			
			
			
			
			if(Safari || Chrome) {
				$('.stars').addClass('webkit');
			}


			// MENU DROPDOWN ON HOVER
			$("ul.menu li.parent").mouseenter(function(){
				var me = $(this);
			    clearTimeout($(this).data('timeoutId'));
			    
				var hoverTimeout = setTimeout(function(){
					console.log($(this));
					me.find(".sub-menu").slideDown("fast");
				    $('li.parent').addClass('hmm');
				}, 350);
					
			    $(this).data('hoverTimeout', hoverTimeout);
			    
			}).mouseleave(function(){
				var me = $(this);
				clearTimeout($(this).data('hoverTimeout'));
			
			    var timeoutId = setTimeout(function(){
			            me.find(".sub-menu").slideUp("fast");
			            $('li.parent').removeClass('hmm');
			        }, 400);
			    //set the timeoutId, allowing us to clear this trigger if the mouse comes back over
			   me.data('timeoutId', timeoutId); 
			});
			
			// ADDING FOCUS CLASS TO SPAN.SEARCHICON WHEN INPUT#S IS FOCUSED
			$('input#s').focus(function() {
				$('span.searchIcon').addClass('focus');
			});
			
			$('input#s').blur(function() {
				$('span.searchIcon').removeClass('focus');
			});
			
			// SQUARING BOTTOM CORNERS OF SEARCHBOX ON DROPDOWN
			$('input#s').keypress(function() {
				var me = $(this);
				setTimeout(function() {
					me.addClass('squared');
				}, 700);
			});
			
			$('input#s').blur(function() {
				var me = $(this);
				setTimeout(function() {
					if($('ul#dwls_search_results').is(':visible')) {
						
					} else {
						me.removeClass('squared');
					}
				}, 500);
			});
			
			// SEARCHLIGHT LIGHTBOX CALL
			$('a.searchIcon').click(function(e) {
				$('#main-curtain').fadeIn('fast');
				$('#searchLight').fadeIn('fast');
				$('a.x').show();
				$('#searchLight').data('active', true);
				e.stopPropagation();
				e.preventDefault();
			});
			
			$('#searchLight').click(function(e) {
				$('ul#dwls_search_results').slideUp();
				e.stopPropagation();
			});
			
			$('html, a.x').click(function(e) {
				if($('#searchLight').data('active') === true) {
					$('#searchLight').data('active', false);
					$('a.x').hide();
					$('ul#dwls_search_results').hide();
					$('#searchLight').fadeOut().delay(100);
					$('#main-curtain').fadeOut().delay(100);
					e.preventDefault();
				}
			});
			
			
			// SINGLE PAGE TAB SELECTION				
			$('a.tab, a.allReviews').click(function(e) {
				var tab = $(this);
				var href = $(this).attr('href');
				var tabId = $(this).attr('id');
				change();
				if($(window).width() > 960) {
					tab.addClass('tabActive').parent().siblings().children().removeClass('tabActive');
					setTimeout(function() {
						if($('div' + href).is(':visible')) {
							// DO NOTHING
						} else {
							$('div' + href).parent().children().animate({ opacity: 0 }, 125).hide();
							$('div' + href).show().animate({ opacity: 1 }, 125);
						}
						//change();
					}, 125);
				} else {
					change();
					clearTimeout($(tab).data('tabTimeout'));
					var tabTimeout = setTimeout(function() {
						$(tab).parent().find('div.mobileContent').slideToggle(600);
						$(tab).toggleClass('minus');
					}, 300);
					tab.data('tabTimeout', tabTimeout);
					//$(this).parent().siblings().find('div.mobileContent').slideUp(400);
					/*
					setTimeout(function() {
						$('html, body').animate({
					        scrollTop: $(tab).offset().top
					    }, 400);
					}, 200)					
					*/
				}
				e.preventDefault();		
			});
			$('a.allReviews').click(function(e) {
				if($(window).width() > 960) {
					$('a.tab').removeClass('tabActive');
					$('a.tab[href="#reviews"]').addClass('tabActive');
				    $('html, body').animate({
				        scrollTop: $('#content').offset().top
				    }, 400);
			    } else {
				    $('a.tab[href="#reviews"]').parent().find('div.mobileContent').slideDown(600);
				    $('a.tab[href="#reviews"]').addClass('minus');
				    $('html, body').animate({
					        scrollTop: $('a.tab[href="#reviews"]').offset().top
					    }, 400);
			    }
			    e.preventDefault();
			});

			// PHOTOS LIGHTBOX CALL
			$('a.photo').click(function(e) {
				var bg = $(this).css('background-image');
				var title = $(this).attr('title');
				//$('#main-curtain').fadeIn('fast');
				$('#photo').css({backgroundImage: bg}).fadeIn('fast');
				$('div.caption').text(title);
				$(this).addClass('current');
				$('a.x').show();
				$('#photo').data('active', true);
				e.stopPropagation();
				e.preventDefault();
			});
			
			$('html, a.x').click(function(e) {
				if($('#photo').data('active') === true) {
					$('a.photo').removeClass('current');
					$('#photo').data('active', false);
					$('a.x').hide();
					$('#photo').fadeOut().delay(100);
					//$('#main-curtain').fadeOut().delay(100);
					e.preventDefault();
				}
			});
			
			// MOVE TO NEXT PHOTO ON CLICK
			$('div#photo').click(function(e) {
				if($('ul.photos li:last-child a').hasClass('current')) {
					$('ul.photos li:first-child a').click().addClass('currently');
					$('a.current').removeClass('current');
				    $('a.currently').removeClass('currently').addClass('current');
				} else {
				    $('ul.photos a.current').parent().next().find('a').click().addClass('currently');
				    $('a.current').removeClass('current');
				    $('a.currently').removeClass('currently').addClass('current');
			    }
				e.stopPropagation();
			});
			
			// MOVE BETWEEN PHOTOS WITH ARROW KEYS
			$(document.documentElement).keyup(function (event) {
				if (event.keyCode == 37) { 
					if($('ul.photos li:first-child a').hasClass('current')) {
						$('ul.photos li:last-child a').click().addClass('currently');
						$('a.current').removeClass('current');
					    $('a.currently').removeClass('currently').addClass('current');
					} else {
					    $('ul.photos a.current').parent().prev().find('a').click().addClass('currently');
					    $('a.current').removeClass('current');
					    $('a.currently').removeClass('currently').addClass('current');
				    }
				} else if (event.keyCode == 39) {
					if($('ul.photos li:last-child a').hasClass('current')) {
						$('ul.photos li:first-child a').click().addClass('currently');
						$('a.current').removeClass('current');
					    $('a.currently').removeClass('currently').addClass('current');
					} else {
					    $('ul.photos a.current').parent().next().find('a').click().addClass('currently');
					    $('a.current').removeClass('current');
					    $('a.currently').removeClass('currently').addClass('current');
				    }
				}
			});

			
			// JQUERY MOBILE SWIPE FUNCTION FOR PHOTOS
			$('div#photo').swipeleft(function() {
				if($('ul.photos li:last-child a').hasClass('current')) {
					$('ul.photos li:first-child a').click().addClass('currently');
					$('a.current').removeClass('current');
				    $('a.currently').removeClass('currently').addClass('current');
				} else {
				    $('ul.photos a.current').parent().next().find('a').click().addClass('currently');
				    $('a.current').removeClass('current');
				    $('a.currently').removeClass('currently').addClass('current');
			    }
			});
			
			$('div#photo').swiperight(function() {
				if($('ul.photos li:first-child a').hasClass('current')) {
					$('ul.photos li:last-child a').click().addClass('currently');
					$('a.current').removeClass('current');
				    $('a.currently').removeClass('currently').addClass('current');
				} else {
				    $('ul.photos a.current').parent().prev().find('a').click().addClass('currently');
				    $('a.current').removeClass('current');
				    $('a.currently').removeClass('currently').addClass('current');
			    }
			});
		
/*
	
			// ACTIVE CLASS
			var url = window.location;
			// Will only work if string in href matches with location
			$('a[href="'+ url +'"]').addClass('active');
			// Will also work for relative and absolute hrefs
			$('a').filter(function() {
			    return this.href == url;
			}).addClass('better-active');
			
*/
		    // FORM STUFF
		    var el = jQuery('input[type=text], textarea');
		    el.focus(function(e) {
		    	if (e.target.value == e.target.defaultValue)
		    		e.target.value = '';
		    });

		    el.blur(function(e) {
		        if (e.target.value == '')
		            e.target.value = e.target.defaultValue;
		    });
		    
			
			// ADD CURRENT FOCUS CLASS
			$("input, input[type='radio'], select, textarea").focus(function() {
				$(this).parents('li').addClass("curFocus")
			});
			$("input, input[type='radio'], select, textarea").blur(function() {
				$(this).parents('li').removeClass("curFocus")
			});
			
		
		    // START WINDOW READY
		    $(window).ready(function() {
		
		    	
			}); // END WINDOW READY
			
			// START WINDOW LOAD
			$(window).load(function(){
				
				//CHANGE
				change();
				$(window).resize(function(){
					change();
				}).trigger('resize');
						


								
			}); // END WINDOW READY 
		})(jQuery);
	}); // END DOCUMENT READY



/*	EXTRA SCRIPTS LIBRARY


	$("#button").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#elementtoScrollToID").offset().top
	    }, 2000);
	});
		
		
	$(document).ajaxComplete(function() {

	if ($('body').not('.home')){
			$('ul#dwls_search_results').addClass('searchWhite');
		} else {
			$('ul#dwls_search_results').removeClass('searchWhite');
	}
	
	// NUMBER PORTFOLIO PIECES
		if($('#medianav').length > 0) {
			$.each($("#medianav li a"), function(index, value){
		    	var num = index + 1;
		    	$(value).attr("id","mlia"+ num);
		    });
		}
		
	// MENU
	$('#mobileMenuA').click( function(){
		$('#mainnav').slideToggle();	
	});	


	// NO ORPHANS
	$(".secText h3").each(function() {
	var wordArray = $(this).text().split(" ");
	wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
	wordArray.pop();
		$(this).html(wordArray.join(" "));
	});		
*/	

