<!DOCTYPE html>
<html>
<?php
	require_once "../default/inc-head.php";
?>
<body>
	<?php
		require_once "../default/inc-header.php";
	?>
	<section class="inserir-content container">
		<div class="title-page">
			<h1>Adicionar Fornecedor</h1>
		</div>
		<form method="POST" id="inserirTarget" action="../../controller/Inserir.php">
			<input type="hidden" name="status" value="1">
			<div class="form-group row justify-content-sm-center">
				<div class="col-sm-8">
					<input class="form-control" type="text" name="nomeForn" placeholder="Nome do Fornecedor" required>
				</div>
			</div>

			<div class="form-group row justify-content-center">
				<div class="col-sm-8" >
					<select class="form-control" id="selectCategoria" name="categoria" required>
						<option value="" disabled selected>Categoria</option>
						<option value="importado">Importado</option>
						<option value="nacional">Nacional</option>
					</select>
				</div>
			</div>

			<div class="form-group row justify-content-sm-center">

				<div class="col-sm-4">
					<input class="form-control" id = "cnpjForn" type="text" name="cnpjForn" placeholder="CNPJ do Fornecedor" disabled>
				</div>

				<div class="col-sm-4">
					<input class="form-control"  id="ieForn" type="text" name="ieForn" placeholder="IE do Fornecedor" disabled>
				</div>
			</div>

			<div class="form-group row justify-content-center">
				<div class="col-sm-8">
					<input class="form-control" id="ciForn" type="text" name="ciForn" placeholder="CI do Fornecedor" disabled>
				</div>
			</div>

			<!--
			<div class="form-group row justify-content-center">
				<div class="col-sm-8" >
					<select class="form-control" id = "statusForn" name="status" required>
						<option value="" disabled selected>Status</option>
						<option value="1">Ativo</option>
						<option value="0">Inativo</option>
					</select>
			</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-sm-8">
					<input class="form-control" type="date" name="datacriacao" value = "Data de criação do fornecedor" placeholder="Data de Criação" required>
				</div>
			</div>
		-->
			<div class="form-group row justify-content-sm-center">
				<div class="col-sm-4">
					<input class="form-control" type="text" name="ruaForn" placeholder="Rua" required>
				</div>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="cidadeForn" placeholder="Cidade" required>
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-sm-8">
					<input class="form-control" type="text" name="paisForn" placeholder="País" required>
				</div>
			</div>
			<div class="form-group row justify-content-sm-center">
				<div class="col-sm-4">
					<input class="form-control" type="text" name="cepForn" placeholder="CEP" required>
				</div>
				<div class="col-sm-4">
				 	<input class="form-control" type="number" name="numeroForn" placeholder="Número" required>
				</div>
			</div>
	<!--
			<div class="form-group row justify-content-center">
				<div class="col-sm-8">
					<input class="form-control" type="date" name="datacadastro" placeholder="Data de Cadastro" required>
				</div>
			</div>

			<div class="col-sm-4">
				<input class="form-control" id = "responsavel "type="text" name="responsavel" placeholder="Responsável pelo cadastro" required>
			</div>
-->
				<div class="col-sm-8">
					<a href="javascript:void(0)" class="btn-adicionar add-insert css_btn_class" name="add">Adicionar</a>
				</div>
			</div>
		</form>
	</section>
	<?php
		require_once "../default/inc-footer.php";
	?>
	<?php
		require_once "../default/inc-script.php";
	?>
</body>
</html>
