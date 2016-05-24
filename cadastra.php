<!DOCTYPE html>

<html lang="pt-br">
	
	<head>

		<?php include 'head.php' ?>
	
	</head>

	<body>

		<div class="container">

			<?php include 'header.php' ?>

			<?php

				if (isset($_POST)) {

					$codigo_mercadoria = $_POST["codigo_mercadoria"];
					$tipo_mercadoria = $_POST["tipos_mercadoria"];
					$nome_mercadoria = $_POST["nome_merc"];
					$qtd_mercadoria = $_POST["quant_mercadoria"];
					$preco_mercadoria = $_POST["preco_mercadoria"];
					$tipo_operacao = $_POST["tipo_operacao"];

					$conexao = mysql_connect('localhost', 'u483294117_root', 'dbpass');

					if (!$conexao) {
						
						echo '<p class='.'"parag"'.'>' . die ("Erro de conexão com o banco de dados!!! - Erro: " . mysql_error()) . '</p>';
					
					}
					else
					{

						$banco = mysql_select_db('u483294117_merc');

						$preco_mercadoria = str_replace(",", ".", $preco_mercadoria);

						if (!$banco) {

							echo '<p class='.'"parag"'.'>' . die("Erro ao usar o banco, Erro: " . mysql_error()) . '</p>'; 
	
						}
						else{

							$query_insert = "INSERT INTO `MERCADORIA` (`CD_ID`, `DS_TIPO_MERCADORIA`, `NM_MERCADORIA`, `QT_MERCADORIA`, `VL_MERCADORIA`, `DS_TIPO_OPERACAO`) VALUES (" . $codigo_mercadoria . ", '" . $tipo_mercadoria . "', '" . $nome_mercadoria . "', " . $qtd_mercadoria . ", " . $preco_mercadoria . ", '" . $tipo_operacao . "' )";

							$insert = mysql_query($query_insert, $conexao);

							if ($insert) {
							
								echo '<p class='.'"parag"'.'>Cadastro realizado com sucesso!!!</p>'; 

								echo '<p class='.'"parag"'.'>Obrigado por escolher nossas mercadorias</p>';

							}
							else
							{
								
								echo '<p class='.'"parag"'.'>' . die("Não foi feita a inserção. Erro: " . mysql_error()) . '</p>';
							
							}						

						}
					}

				}
				else
				{								

					echo '<p class='.'"parag"'.'>Problema ao cadastrar sua solicitação';
					echo '<br />';
					echo 'Volte e preencha os dados novamente!!!</p>';

				}

			 ?>

			<div class="col-sm-12" id="div_botao">

				<div class="form-group">

					<p>&nbsp;</p>
						
					<a href="index.php" ><button type="button" id="btn_voltar_inicial" class="btn btn-lg botao" value="pag_inicial">Página Inicial</button></a>
					
					<span id="espaco"></span>

					<a href="index2.php" ><button type="button" id="btn_voltar_cadastro" class="btn btn-lg botao" value="pag_inicial">Cadastrar outro produto</button></a>
					
				</div>

			</div>

			<div class="col-sm-12">
				
				<?php include 'footer.php' ?>

			</div>

		</div>

	</body>

</html>