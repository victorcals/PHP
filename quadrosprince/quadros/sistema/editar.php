<?php include_once 'lock.php';
include_once '../database/quadros.dao.php';

if (!isset($_GET['id_quadro']))
{
	header ('location:index.php?msg=idinvalido');
}
else
{
	$result = buscar_quadros($_GET['id_quadro']);

	if ($result == null)
	{
		header ('location:index.php?msg=idinvalido');
	}
	else
	{
		$quadro = mysqli_fetch_assoc($result);
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/jin.css">
	<title>Projeto - Editar quadros</title>
</head>
<body class="sieg">


<h1> QuadrosSystem - Editar quadros</h1>


<p>
	<a href="index.php"> Cancelar edição</a>
</p>


<h3>Editar Quadros</h3>

	<form action="editado.php" method="post">
		
		<p>
			<label>Nome</label>
			<input type="text" name="nome" required value="<?= $quadro['nome'] ?>">
		</p>

		<p>
			<label>Pintor</label>
			<input type="text" name="pintor" required value="<?= $quadro['pintor'] ?>">
		</p>


		<p>
			<label>Valor</label>
			<input type="number" name="valor" step="0.01" required value="<?= $quadro['valor'] ?>">
		</p>


		<p>
			<button type="submit" name="salvar"  > Salvar Alterações</button>
		</p>

		<input type="hidden" name="id_quadro" value="<?= $quadro['id_quadro'] ?>">



	</form>

</body>
</html>