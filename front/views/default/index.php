<!DOCTYPE html>
<html>
<?php 
	require_once "inc-head.php";
?>
<body>
<?php 
	require_once "inc-header.php";
?>

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
			<h1>Todos os Fornecedor</h1>
		</div>
		<?php 

			require_once "../../../class/Sql.php";
			require_once "../../../class/Fornecedor.php";
			$conn = new Sql();
			$crud = new Fornecedor();

			$select = $crud->select();
			echo '<table class="table-content">';
				echo '<thead>';
					echo '<tr class="head-table">';
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
						echo '<th class="content-head">Data Cad</th>';
					echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
					foreach ($select as $linha) {
						echo '<tr class="body-table">';
							foreach ($linha as $value) {
								echo '<td class="content-body">' . $value . '</td>';
							}
						echo '</tr>';
					}
				echo '</tbody>';
			echo '</table>';
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

<?php 
	require_once "inc-script.php"
?>
</body>
</html>