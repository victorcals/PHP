<?php include_once 'lock.php';


if (!isset($_POST['salvar']) || empty($_POST['id_quadro']) || empty($_POST['nome']) || empty($_POST['pintor']) || empty($_POST['valor']))
{
	header('location:index.php?msg=edtembranco');
}
else
{
	$id_quadro = $_POST['id_quadro'];
	$nome	= $_POST['nome'];
	$pintor	= $_POST['pintor'];
	$valor	= $_POST['valor'];


	include_once '../database/quadros.dao.php';


	$result = editar_quadro($id_quadro, $nome, $pintor, $valor);


	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}

?>