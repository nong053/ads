$(document).ready( function(){	
		// buttons for next and previous item						 
		var buttons = { previous:$('#jslidernews1 .button-previous') ,
						next:$('#jslidernews1 .button-next') };
		 $obj = $('#jslidernews1').lofJSidernews( { interval : 4000,
											 	easing			: 'easeInOutQuad',
												duration		: 1200,
												auto		 	: false,
												maxItemDisplay  : 3,
												startItem:1,
												navPosition     : 'horizontal', // horizontal
												navigatorHeight : null,
												navigatorWidth  : null,
												mainWidth:790,
												buttons:buttons} );		

					//$(".box_menu").shadow();
					$(".shadow").shadow();
					$("#body").shadow();
					//$("#bg_footer").shadow();


					$("input[type=button],input[type=submit],button").button();
					var productSearch = ['a1','a2','a3'];
					$("#txtSearch").autocomplete({source:productSearch});


	});