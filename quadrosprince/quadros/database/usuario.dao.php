<?php 


function buscar_usuario($usuario, $senha)
{

	include_once 'conec.php';


	$conec = conectar();


	$sql = "SELECT * FROM usuario_tb WHERE usuario = '$usuario' AND senha = '$senha'";



	$result = mysqli_query($conec, $sql);



	if (mysqli_affected_rows($conec) > 0)
	{
		return true;
	}


	
	
	return	false;
}

 ?>