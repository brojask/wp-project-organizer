(function($){
	$(".project-title").each(function(){
	    if ($(this).text().length > 15) {
	        $(this).text($(this).text().substr(0, 12)); 
	        $(this).append('...');
	    }
	});
	   	
	$('.user-icon').on('click', function(){
		$(this).find('user-menu').slideToggle();
	});
	
	$('.user-controls').on('click', '.user-icon', function(event){
		$(this).closest('.user-controls')
			   .find('.user-menu')
			   .fadeToggle();
	});	
	
	$('.navbar-form input[type="text"]').on("focus",function(){
		$(this).val(" ")
	});
	
})(jQuery);