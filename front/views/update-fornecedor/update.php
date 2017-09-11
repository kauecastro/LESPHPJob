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
			<h1>Atualizar Fornecedor</h1>
		</div>

		<form method="POST" id="updateTarget" class="form-margin" action="../../controller/Update.php">
			<div class="form-group row justify-content-sm-center">
				<div class="col-sm-8">
					<input class="form-control" type="text" name="id" placeholder="ID do Fornecedor">
				</div>
			</div>
			<div class="form-group row justify-content-sm-center">
				<div class="col-sm-8">
					<input class="form-control" type="text" name="nomeForn" placeholder="Nome do Fornecedor">
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
			<div class="form-group row justify-content-sm-center">
				<div class="col-sm-4">
					<input class="form-control" type="text" name="ruaForn" placeholder="Rua">
				</div>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="cidadeForn" placeholder="Cidade">
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-sm-8">
					<input class="form-control" type="text" name="paisForn" placeholder="País">
				</div>
			</div>
			<div class="form-group row justify-content-sm-center">
				<div class="col-sm-4">
					<input class="form-control" type="text" name="cepForn" placeholder="CEP">
				</div>
				<div class="col-sm-4">
				 	<input class="form-control" type="number" name="numeroForn" placeholder="Número">
				</div>
				<div class="col-sm-8">
					<a href="javascript:void(0)" class="btn-adicionar add-atualizar css_btn_class" name="del">Atualizar</a>
				</div>
			</div>
		</form>
	</section>
	<!-- <?php
		// require_once "../default/inc-footer.php";
	?> -->
	<?php
		require_once "../default/inc-script.php";
	?>
</body>
</html>
