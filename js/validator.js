
$("#formCadastro").validate({
	rules: {
		nome: {
			required: true,						
			maxlength: 100,
			minlength: 10,
			minWords: 2
		},
		email: {
			required: true,
			email: true
		},
		idade: { 
			required: true,
			min: 1,
			max: 150
		},
		cidade: {
			required: true,
		},
		telefone: {
			required: true,			
		},
		celular: {
			required: true,
		},
		cep: {
			required: true,
		},
		bi: {
			required: true,
		},
		nif: {
			required: true,
		},
		salario: {
			required: true,
		},
		carta: {
			required: true,
		},
		passaporte: {
			required: true,
		},
		carro: {
			required: true,	
		}
	}
})
