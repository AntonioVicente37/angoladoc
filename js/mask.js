$("#telefone").mask("+224 000 000 000")
$("#celular").mask("+224 220 000 000")
$("#cep").mask("00000-000")
$("#bi").mask("000000000AA000", op)// voltar a passsar aqui
$("#nif").mask("0000000000")
$("#salario").mask("999.999.990.00", {reverse: true})
$("#carta").mask("AA-000000")// voltar a passsar aqui
$("#passaporte").mask("D0000000")
$("#carro").mask("AA-00-00-AA")// voltar a passsar aqui

var op = {
	translation:{
		'A': {pattern: /[A-Z]/},
		'a': {pattern: /[a-zA-Z]/},
		'S': {pattern: /[a-zA-Z0-9]/},
		'L': {pattern: /[a-z]/},
	}
}