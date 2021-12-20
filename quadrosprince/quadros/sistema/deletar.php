<?php  include 'lock.php';
	
	if(!isset($_GET['id_quadro']))
		{
			header('location:index.php?msg=invalido');
		}
	

		else
		{

			$id_quadro = $_GET['id_quadro'];
			include_once '../database/quadros.dao.php';
			$result = deletar_quadros($id_quadro);


			if($result)
			{
				header('location:index.php?msg=quadrodeletado');
			}


			else
			{
				header('location:index.php?msg=errodeletar');
			}

		}


 ?>