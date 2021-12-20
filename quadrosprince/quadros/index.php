<?php
include_once 'database/conec.php';
$c = conectar();
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/jin.css">
	<title>PROJETO</title>
</head>

<body class="sieg">


	<h1>Utilize o formulario abaixo para entrar no sistemas</h1>

	<?php
	if (isset($_GET['msg'])) {
		include_once 'util.php';
		echo validar_msg($_GET['msg']);
	}
	?>

	<form action="validar.php" method="post">

		<label> Usuario:</label>
		<input type="text" name="usuario" required>


		<label>Senha:</label>
		<input type="password" name="senha" required>


		<button class="button" type="submit" name="entrar">Entrar</button>

	</form>


</body>

</html>