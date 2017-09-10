<?php 
	require_once "../../config.php";
	$conn = new Sql();
	$crud = new Fornecedor();

	if(isset($_POST['nomeForn']))
	{
		$nomeFornecedor = $_POST['nomeForn'];
		$cnpjFornecedor = $_POST['cnpjForn'];
		$ieFornecedor = $_POST['ieForn'];
		$categoriaFornecimento = $_POST['categoria'];
		$ruaFornecedor = $_POST['ruaForn'];
		$cidadeFonecedor = $_POST['cidadeForn'];
		$paisFornecedor = $_POST['paisForn'];
		$cepFornecedor = $_POST['cepForn'];
		$numeroFornecedor = $_POST['numeroForn'];

		$crud->setData($nomeFornecedor, $cnpjFornecedor, $ieFornecedor, $categoriaFornecimento, $ruaFornecedor, $cidadeFonecedor, $paisFornecedor, $cepFornecedor, $numeroFornecedor);
	}

	if(empty($nomeFornecedor) || empty($cnpjFornecedor) || empty($ieFornecedor) || empty($categoriaFornecimento) ||
		empty($ruaFornecedor) || empty($cidadeFonecedor) || empty($paisFornecedor) || empty($cepFornecedor) || empty($numeroFornecedor))
	{
		echo '<h1 style="display: block; widht: 100%; text-align: center;">Campos vazio, preecha com dados válidos</h1>';
		echo '<a href="../views/insert-fornecedor/inserir.php" style="display: block; width: 100%; text-align: center; font-size: 20px;">Voltar</a>';
	}
	else
	{
		$file = fopen("log.txt", "a+");
		fwrite($file, 'Fornecedor adicionado: ' . $nomeFornecedor . 'n' . ' CNPJ: ' . $cnpjFornecedor . date("d-m-Y H:i:s") . "\r\n\n");
		fclose($file);
		$statusFornecedor = $_POST['status'];
		$crud->setStatusFornecedor($statusFornecedor);
		$insert = $crud->insert();

		header("Location: ../views/insert-fornecedor/inserir.php");
	}