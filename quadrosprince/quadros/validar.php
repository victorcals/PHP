<?php 

	if (!isset($_POST['entrar']) || empty($_POST['usuario']))
	 {
		header('location:index.php?msg=invalido');
	}



else
{
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];


	include 'database/usuario.dao.php';

	$result = buscar_usuario($usuario, $senha);


	if($result)
	{
		session_start();
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;
		
		header('location:sistema/index.php');
	}


	else
	{
		header('location:index.php?msg=invalido');
	}


}




 ?>