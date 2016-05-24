<!DOCTYPE html>

<html lang="pt-br">

	<head>

		<?php include 'head.php'; ?>

	</head>
	
	<body>

		<div class="container" id="div_principal">

			<?php include 'header.php'; ?>

			<div class="table-responsive" id="tabela">

				<h2 id="titulo_tabela">MERCADORIAS JÁ CADASTRADAS</h2>

				<p>&nbsp;</p>

				<span class="col-sm-2"></span>

				<table id="tabela_mercadorias" class="table table-striped">

					<thead>
					
						<tr>

							<th>CÓDIGO</th>
							<th>TIPO MERCADORIA</th>
							<th>NOME MERCADORIA</th>
							<th>QTD MERCADORIA</th>
							<th>VALOR MERCADORIA</th>
							<th>TIPO OPERAÇÃO</th>

						</tr>
					
					</thead>

					<tbody>

						<?php

							$conexao = mysql_connect('localhost', 'u483294117_root', 'dbpass');

							if (!$conexao) {
					
								echo '<p class='.'"parag"'.'>' . die ("Erro de conexão com o banco de dados!!! - Erro: " . mysql_error()) . '</p>';

							}
							else
							{

								$banco = mysql_select_db('u483294117_merc');

								if (!$banco) {

								echo '<p class='.'"parag"'.'>' . die("Erro ao usar o banco, Erro: " . mysql_error()) . '</p>'; 
	
								}
								else
								{

									$query_select = "SELECT `CD_ID`, `DS_TIPO_MERCADORIA`, `NM_MERCADORIA`, `QT_MERCADORIA`, `VL_MERCADORIA`, `DS_TIPO_OPERACAO` FROM `MERCADORIA` WHERE 1";

									$select = mysql_query($query_select, $conexao);

									while ($linha = mysql_fetch_array($select)) {
								
											echo '<tr>';

											echo '<td>' .  $linha['CD_ID']  . '</td>';
											echo '<td>' .  $linha['DS_TIPO_MERCADORIA']  . '</td>';
											echo '<td>' .  $linha['NM_MERCADORIA']  . '</td>';
											echo '<td>' .  $linha['QT_MERCADORIA']  . '</td>';
											echo '<td> R$ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . number_format($linha['VL_MERCADORIA'], 2, ',', '.')   . '</td>';
											echo '<td>' .  $linha['DS_TIPO_OPERACAO']  . '</td>';
								
											echo '</tr>';

									}

								}

							}

						 ?>

					</tbody>

				</table>

				<p>&nbsp;</p>

				<div class="form-group" id="div_botao">
					
					<a href="index.php" ><button type="button" id="btn_voltar_inicial" class="btn btn-lg botao" value="pag_inicial">Página Inicial</button></a>

				</div>
				
			</div>

			<div class="col-sm-12">
				
				<?php include 'footer.php' ?>

			</div>

		</div>
	
	</body>

</html>