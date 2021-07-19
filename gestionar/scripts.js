$("#crud").load("dashboard.php");

function enlace(evento){
	alert("pagina");
	$("#crud").fadeOut(300,function(){
		$(this).load(evento).fadeIn(2000);
	})
	return false;
}

function fn_paginar(pagina){
	$("#crud").load("socio_list.php?pagina="+pagina);
}


