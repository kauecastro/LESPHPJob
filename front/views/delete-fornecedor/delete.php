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
			<h1>Desativar Fornecedor</h1>
		</div>

		<form method="POST" id="deleteTarget" class="desativar" action="../../controller/Delete.php">
			<div class="form-group row justify-content-center">
				<div class="col-sm-6">
					<input type="number" class="form-control " name="id" placeholder="Digite o ID para desativar um Fornecedor">
				</div>
				<div class="col-sm-2">
					<a href="javascript:void(0)" type="submit" class="btn-adicionar add-delete" name="del">Desativar</a>
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
