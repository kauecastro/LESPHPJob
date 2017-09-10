<?php 

	require_once "../../config.php";
	$conn = new Sql();
	$crud = new Fornecedor();

	$idFornecedor = $_POST['id'];
	$nomeFornecedor = $_POST['nomeForn'];
	$cnpjFornecedor = $_POST['cnpjForn'];
	$ieFornecedor = $_POST['ieForn'];
	$categoriaFornecimento = $_POST['categoria'];
	$ruaFornecedor = $_POST['ruaForn'];
	$cidadeFonecedor = $_POST['cidadeForn'];
	$paisFornecedor = $_POST['paisForn'];
	$cepFornecedor = $_POST['cepForn'];
	$numeroFornecedor = $_POST['numeroForn'];

	$crud->setIdFornecedor($idFornecedor);
	$crud->setData($nomeFornecedor, $cnpjFornecedor, $ieFornecedor, $categoriaFornecimento, $ruaFornecedor, $cidadeFonecedor, $paisFornecedor, $cepFornecedor, $numeroFornecedor);

	echo $idFornecedor.'<br>';
	echo $nomeFornecedor.'<br>';
	echo $cnpjFornecedor.'<br>';
	echo $ieFornecedor.'<br>';
	echo $categoriaFornecimento.'<br>';
	echo $ruaFornecedor.'<br>';
	echo $cidadeFonecedor.'<br>';
	echo $paisFornecedor.'<br>';
	echo $cepFornecedor.'<br>';
	echo $numeroFornecedor.'<br>';

	$update = $crud->update($idFornecedor);
	header('Location:../views/update-fornecedor/update.php');