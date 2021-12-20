<?php  include_once 'lock.php';

if (!isset($_POST['salvar']) || empty($_POST['nome']) || empty($_POST['pintor']) || empty($_POST['valor']))
{
	header('location:index.php?msg=cadembranco');
}


else
{
	$nome	= $_POST['nome'];
	$pintor	= $_POST['pintor'];
	$valor	= $_POST['valor'];


	include_once '../database/quadros.dao.php';


$result = salvar_quadros($nome, $pintor, $valor);


	if ($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}
}





 ?>