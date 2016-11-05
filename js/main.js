(function($) { 

	$(function(){ 
		$('#click_login').click(function (){
			$('#travel_login').toggleClass('active');
		})
 
		$('#login-btn').click(function (){
			$('#travel_login').removeClass('active');
		})
	})
		
		
		


}) (jQuery)