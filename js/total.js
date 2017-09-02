var elPreco = document.querySelector("#preco");
var elQuantidade = document.querySelector("#qt");
var elTotal = document.querySelector("#total");


function atualizaTotal(){
	var precoTexto = elPreco.textContent;
	precoTexto = precoTexto.replace("R$ ","").replace(",",".");
	var preco = parseFloat(precoTexto);
	//var total = preco * elQuantidade.value; ou
	var total = preco * parseInt(elQuantidade.value);
	console.log(total);
	elTotal.value = "R$ " + total.toFixed(2).replace(".",",");

}

elQuantidade.oninput = atualizaTotal;