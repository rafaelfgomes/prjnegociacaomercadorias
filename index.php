<!DOCTYPE html>

<html lang="pt-br">

	<head>

		<?php include 'head.php'; ?>

	</head>
	
	<body onload="saudacao()">

		<div class="container" id="div_principal">

			<?php include 'header.php'; ?>

			<p>&nbsp;</p>

			<div class="col-sm-12">

				<span class="col-sm-1"></span>

				<p class="texto_saudacao col-sm-10"><span id="saudacao"></span> visitante,</p>
					
			</div>

			<p>&nbsp;</p>

			<div class="col-sm-12">

				<span class="col-sm-1"></span>
					
				<p class="texto_saudacao col-sm-10">Bem vindo ao nosso site, nele você poderá nos informar seu interesse em nossas mercadorias clicando no botão 'Solicitar' e preenchendo o formulário solicitado.<br />Caso queira visualizar todos os pedidos feitos, clique em 'Visualizar' para mostrar uma tabela dos pedidos já cadastrados.</p>
					
			</div>

			<p>&nbsp;</p>

			<div class="col-sm-12">

				<span class="col-sm-1"></span>

				<p class="texto_saudacao col-sm-10">Obrigado pela sua visita.</p>
					
			</div>

			<p>&nbsp;</p>

			<div class="col-sm-12">

				<span class="col-sm-4"></span>

				<form accept-charset="utf-8">

					<div class="form-group">
							
						<a href="solicita.php" title="cadastrar"><button type="button" class="btn btn-lg botao" value="Solicitar">Solicitar</button></a>
							
						<span id="espaco"></span>

						<a href="pesquisa.php" title="visualizar"><button type="button" class="btn btn-lg botao" value="Visualizar">Visualizar</button></a>

					</div>
						
				</form>

			</div>

			<div class="col-sm-12">

				<?php include 'footer.php' ?>
					
			</div>

		</div>
	
	</body>

</html>