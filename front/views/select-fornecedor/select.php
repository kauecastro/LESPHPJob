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
			<h1>Consulta de fornecedores</h1>
		</div>
		<form method="GET">
			<div class="form-group row justify-content-sm-center consultar-input">
				<div class="col-sm-5">
					<input class="form-control" type="text" name="pesquisar" placeholder="Pesquisar">
				</div>
				<div class="col-sm-3">
					<input type="submit" class="btn-adicionar btn-add-l" name="search" value="Produrar">
				</div>
			</div>
		</form>

		<?php

			require_once "../../../class/Sql.php";
			require_once "../../../class/Fornecedor.php";
			$conn = new Sql();
			$crud = new Fornecedor();

			if(isset($_GET['pesquisar']))
			{
				$filter = $_GET['pesquisar'];

				$crud->setFilter($filter);
			}

			if(empty($filter))
			{
				echo "Nenhuma pesquisa realizada";
			}
			else
			{
				$selectFilter = $crud->selectFilter($filter);
				echo '<table class="table-content">';
					echo '<tr class="table table-hover">';
						echo '<th class="content-head">ID</th>';
						echo '<th class="content-head">Nome</th>';
						echo '<th class="content-head">CNPJ</th>';
						echo '<th class="content-head">IE</th>';
						echo '<th class="content-head">Categoria</th>';
						echo '<th class="content-head">Rua</th>';
						echo '<th class="content-head">Cidade</th>';
						echo '<th class="content-head">País</th>';
						echo '<th class="content-head">CEP</th>';
						echo '<th class="content-head">Numero</th>';
						echo '<th class="content-head">Cadastro</th>';
					echo '</tr>';
					foreach ($selectFilter as $linha) {
						echo '<tr class="body-table">';
							foreach ($linha as $value) {
								echo '<td class="content-body">' . $value . '</td>';
							}
						echo '</tr>';
					}
				echo '</table>';
			}
		?>

	</section>
	<!-- <?php
		// require_once "../default/inc-footer.php";
	?> -->
	<?php
		require_once "../default/inc-script.php";
	?>
</body>
</html>
