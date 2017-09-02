var elemento = document.querySelector("#historia");
var contador = 0;
var opcoes = ["camisa","short","cueca"];

function troca(){
	elemento.textContent = "Calopsita";
	alert("troquei");
}

elemento.onclick = troca;

$("#botao").click( function(){
	contador++;
	for (var i=0; i<3; i++){
		var label = $("<label>").text(opcoes[i]);
		var opcao = $("<input>").attr("type","radio").attr("name","opcao" + contador);
		label.append(opcao).appendTo(".opcoes");
	}
	$("<br>").appendTo(".opcoes");
});