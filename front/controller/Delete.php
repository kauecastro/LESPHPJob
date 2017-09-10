<?php 

	require_once "../../config.php";
	$conn = new Sql();
	$crud = new Fornecedor();

	if(isset($_POST['id']))
	{
		$idFornecedor = $_POST['id'];

		$crud->setIdFornecedor($idFornecedor);
	}

	if(empty($idFornecedor))
	{
		echo "Campo Vazio, digite um ID Válido";
	}
	else
	{
		$file = fopen("log.txt", "a+");
		fwrite($file, 'Fornecedor Desativado, ID: ' . $idFornecedor . date("d-m-Y H:i:s") . "\r\n\n");
		fclose($file);

		$crud->delete($idFornecedor);
		header('Location:../views/delete-fornecedor/delete.php');
	}