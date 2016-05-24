function saudacao()
{

	var hora = new Date();

	if (hora.getHours() >= 6 && hora.getHours() < 12) {
		document.getElementById('saudacao').innerHTML = 'Bom dia';
	}
	else 
		if (hora.getHours() >= 12 && hora.getHours() < 18) {
			document.getElementById('saudacao').innerHTML = 'Boa tarde';
		}
		else
		{
			document.getElementById('saudacao').innerHTML = 'Boa noite';
		}

}

function validaForm()
{

	var valido = true;

	var codigoValido = /^[0-9]+$/;
	var precoValido = /^[0-9,]+$/;
	var nomeValido = /^[A-Za-z" "]+$/;

	var codigo = $('#txt_codigo_mercadoria').val();
	var tipo = $('#sel_lista_tipos').val();
	var nome = $('#txt_nome_mercadoria').val();
	var quantidade = $('#qtd_mercadoria').val();
	var preco = $('#txt_preco_mercadoria').val();
	var operacao = $('#sel_tipo_operacao').val();


	if ($.trim(codigo)  === "") {
		document.getElementById('erro_codigo').innerHTML = "Campo vazio.";
		valido = false;
	}
	else
		if (!codigoValido.test(codigo)) {
			document.getElementById('erro_codigo').innerHTML = "Somente números no campo código.";
			valido = false;
		}
		else
		{
			document.getElementById('erro_codigo').innerHTML = "";
		}

	if ($.trim(tipo) === "") {
		document.getElementById('erro_tipo').innerHTML = "Selecione uma mercadoria.";
		valido = false;
	}
	else
	{
		document.getElementById('erro_tipo').innerHTML = "";
	}


	if ($.trim(nome) === "") {
			document.getElementById('erro_nome_mercadoria').innerHTML = "Campo vazio.";
			valido = false;
	}
	else
		if (!nomeValido.test(nome)) {
			document.getElementById('erro_nome_mercadoria').innerHTML = "Somente letras.";
			valido = false;
		}
		else
		{
			document.getElementById('erro_nome_mercadoria').innerHTML = "";
		}
		

	if ($.trim(quantidade) === "") {
		document.getElementById('erro_quantidade').innerHTML = "Campo vazio.";
		valido = false;
	}
	else
	{
		document.getElementById('erro_quantidade').innerHTML = "";
	}

	if ($.trim(preco) === "") {
		document.getElementById('erro_preco').innerHTML = "Campo vazio.";
		valido = false;
	}
	else
		if (!precoValido.test(preco)) {
			document.getElementById('erro_preco').innerHTML = "Preço inválido.";
			valido = false;
		}
		else
		{
			document.getElementById('erro_preco').innerHTML = "";
		}
		

	if (operacao === "") {
		document.getElementById('erro_tipo_operacao').innerHTML = "Selecione um tipo de operação.";
		valido = false;
	}
	else
	{
		document.getElementById('erro_tipo_operacao').innerHTML = "";
	}

	return valido;
}