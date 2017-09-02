var nome = "x";
$(function(){

	var img = document.querySelector(".destaque img");

	var banners = ["img/destaque-home.png","img/destaque-home-2.png"];

	function trocaBanner(){
		//banners.reverse();
		banners.push(banners.shift());
		img.src = banners[0];
	}

	setInterval(trocaBanner,5000);


	/* jQuery */

	$(".painel").addClass("painel-compacto");

	$(".painel button").click(function(){
		$(this).closest(".painel").removeClass("painel-compacto");	
	});

$(".liga-desliga").click(function(){
	var $painel = $(this).closest(".painel");
	if($painel.toggleClass("painel-compacto").hasClass("painel-compacto")){
		$(this).val("Exibe");
	}else{ 
		$(this).val("Esconde");
	}
});



});



