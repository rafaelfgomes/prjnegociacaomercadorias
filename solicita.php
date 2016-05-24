<!DOCTYPE html>

<html lang="pt-br">

	<head>

		<?php include 'head.php'; ?>

	</head>
	
	<body>

		<div class="container" id="div_principal">

			<?php include 'header.php'; ?>

			<form id="form_cadastro" class="form-horizontal" role="form" action="cadastra.php" onsubmit="return validaForm()" method="post" accept-charset="utf-8">

				<fieldset id="fieldset_mercadorias">
					
					<legend id="cadastro">Cadastro de Mercadorias</legend>

					<div class="form-group" id="codigo">
					
						<label class="control-label col-sm-4" for="txt_codigo_mercadoria" id="lbl_codigo_mercadoria">Código da mercadoria:</label>
					
						<div class="col-sm-1" id="txt_codigo">
					
							<input type="text" name="codigo_mercadoria" id="txt_codigo_mercadoria" class="form-control" maxlength="5" />	
					
						</div>

						<span class="label label-danger" id="erro_codigo"></span>

					</div>

					<div class="form-group" id="tipo">

					<label class="control-label col-sm-4" for="sel_lista_tipos" id="sel_tipo_mercadorias">Tipo da mercadoria:</label>
					
						<div class="col-sm-2" id="sel_tipos_mercadoria">
						
							<select class="form-control" name="tipos_mercadoria" id="sel_lista_tipos">
								
								<option value="" hidden></option>
								<option value="Tipo 1">Tipo 1</option>
								<option value="Tipo 2">Tipo 2</option>
								<option value="Tipo 3">Tipo 3</option>
					
							</select>

						</div>

						<span class="label label-danger" id="erro_tipo"></span>
						
					</div>

					<div class="form-group" id="nome_mercadoria">
					
						<label class="control-label col-sm-4" for="txt_nome_mercadoria" id="	lbl_nome_mercadoria">Nome da mercadoria:</label>
					
						<div class="col-sm-4" id="txt_nome">
						
							<input type="text" id="txt_nome_mercadoria" name="nome_merc" class="form-control" />
					
						</div>

						<span class="label label-danger" id="erro_nome_mercadoria"></span>
						
					</div>

					<div class="form-group" id="quantidade">
					
						<label class="control-label col-sm-4" for="qtd_mercadoria" id="	lbl_quant_mercadoria">Quantidade:</label>
					
						<div class="col-sm-1" id="txt_qtd_mercadoria">
						
							<input type="number" id="qtd_mercadoria" name="quant_mercadoria" class="form-control" min="1" max="100" />
					
						</div>

						<span class="label label-danger" id="erro_quantidade"></span>
						
					</div>

					<div class="form-group" id="preco">

						<label class="control-label col-sm-4" for="txt_preco_mercadoria" id="	lbl_preco_mercadoria">Preço da mercadoria:</label>
					
						<div class="col-sm-2" id="txt_preco">
						
							<input type="text" id="txt_preco_mercadoria" name="preco_mercadoria" class="form-control" />
					
						</div>

						<span class="label label-danger" id="erro_preco"></span>
						
					</div>

					<div class="form-group" id="tipo_operacao">
					
						<label class="control-label col-sm-4" for="sel_tipo_operacao" id="sel_tipos_operacoes">Tipo:</label>
					
						<div class="col-sm-2" id="sel_tipo">
						
							<select class="form-control" id="sel_tipo_operacao" name="tipo_operacao">
								
								<option value="" hidden></option>
								<option value="Compra">Compra</option>
								<option value="Venda">Venda</option>
					
							</select>

						</div>

						<span class="label label-danger" id="erro_tipo_operacao"></span>

					</div>

					<div class="form-group">

						<p>&nbsp;</p>

						<span class="col-sm-4"></span>

						<a href="index.php" ><button type="button" id="btn_voltar_inicial" class="btn btn-lg botao" value="pag_inicial">Página Inicial</button></a>
					
						<span id="espaco"></span>
						
						<input type="submit" id="btn_cadastrar" class="btn btn-lg botao" value="Cadastrar" />
					
					</div>
				
				</fieldset>

			</form>

			<div class="col-sm-12">
				
				<?php include 'footer.php' ?>

			</div>

		</div>
	
	</body>

</html>