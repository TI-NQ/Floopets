$('.menu_floopets li:has(ul)').click(function(e){
		e.preventDefault();

		if($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		}else{
			$('.menu_floopets li ul').slideUp();
			$('.menu_floopets li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		};
	});
