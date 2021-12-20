<?php

include_once 'lock.php';

include_once '../database/quadros.dao.php';


?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/jin.css">
	<title>Projeto - Restrito</title>
</head>

<body class="sieg">


	<h1> QuadrosSystem - Restrito</h1>

	<h3>Trabalho feito por: <br>
		Victor  Cals
	</h3>

	<p>
		<a href="logout.php"> Sair do sistema</a>
	</p>

	<?php
	if (isset($_GET['msg'])) {
		include_once '../util.php';
		echo validar_msg($_GET['msg']);
	}
	?>

	<h3>Cadastrar Quadros</h3>

	<form action="cadastrar.php" method="post">

		<p>
			<label>Nome</label>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Pintor</label>
			<input type="text" name="pintor" required>
		</p>


		<p>
			<label>Valor</label>
			<input type="number" name="valor" step="0.01" required>
		</p>


		<p>
			<button type="submit" name="salvar"> Salvar</button>
		</p>





	</form>



	<h2>Quadros cadastrados</h2>

	<?php


	echo exibir_quadros();


	?>

</body>

</html>