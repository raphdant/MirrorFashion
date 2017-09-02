var input = document.querySelector("input[name=tamanho]");
var output = document.querySelector("output[name=valortamanho]");

console.log(input);
console.log(output);

function mostra(){
	output.value = input.value;
}

input.oninput = mostra;