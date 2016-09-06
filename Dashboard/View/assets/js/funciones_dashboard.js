// submenus del dashboard
$('.menu_dashboard li:has(ul)').click(function(e){
		e.preventDefault();

		if($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		}else{
			$('.menu_dashboard li ul').slideUp();
			$('.menu_dashboard li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		};
	});


// metodos para el menu_dashboard

function mostrar_Reg_Organizacion(){
	$(".reg_org").show();
	$(".act_org").hide();

}

function mostrar_act_Organizacion(){
	$(".act_org").show();
	$(".reg_org").hide();
}