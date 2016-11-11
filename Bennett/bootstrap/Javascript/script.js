/*
My Custom JS
============
Author:  Jarrell H. Walker 
Updated: March 31, 2015
Notes:	 First attempt at javascript and jQuery
*/
// Wait unitl the browser loads to execute
$(function(){ 
	$('#AlertMe').click(function(e){ 
		e.preventDefault(); 
		$('#successAlert').slideDown();
	}); 

	$('#Happy').click(function(e){
		e.preventDefault();
	}); 

	$('#Happy').popover('hide');
	$('.clicky').click(function(e){
		e.preventDefault();
	}); 

	$('.clicky').popover('hide');

	$('a.pop').click(function(e){
		e.preventDefault();
	});

	$('a.pop').popover();

	$('[rel="tooltip"]').tooltip();
});