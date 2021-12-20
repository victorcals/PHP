<?php 

include_once 'conec.php';

function salvar_quadros($nome, $pintor,$valor)

{
	$conec = conectar();



	$sql = "INSERT INTO quadros_tb(nome, pintor, valor)
	VALUES ('$nome', '$pintor', '$valor' )";


	$result =  mysqli_query($conec, $sql);

	if(mysqli_affected_rows($conec) > 0)


	{
		return true;
	}


		return false;
}


function buscar_quadros()
{
	$conec = conectar();

	$sql = "SELECT * FROM quadros_tb";

	$result = mysqli_query($conec, $sql);

	if (mysqli_affected_rows($conec) > 0)
	{
		return $result;
	}

	return null;
}

function exibir_quadros()
{
	$result = buscar_quadros();
	if ($result == null)
	{
		$retorno = '<h3>Não há quadros cadastrados</h3>';
	}

	else
	{
		$retorno = '<table border="1px" width=200px>';

		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>';
		$retorno .= '<th>Nome</th>';
		$retorno .= '<th>Pintor</th>';
		$retorno .= '<th>Valor</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';



		while($quadro = mysqli_fetch_assoc($result))
		{

			$retorno .= '<tr>';

			$retorno .= "<td>" .  $quadro['id_quadro'] . "</td>";	

			$retorno .= "<td>" . $quadro['nome'] . "</td>";

			$retorno .=	"<td>" . $quadro['pintor'] .  "</td>";

			$retorno .=	"<td>" .  $quadro['valor'] . "</td>";
	
			$retorno .=	"<td>" . link_deletar($quadro['id_quadro'])	. "</td>";

			$retorno .=	"<td>" . link_editar($quadro['id_quadro'])	. "</td>";

			$retorno .= '</tr>';
		}

		$retorno .= '<table>';
	}


	return $retorno;
}

function link_deletar($id_quadro)
{
	$link = '<a href="deletar.php?id_quadro=' .$id_quadro. '"
	 onclick="return confirm(\'Tem certeza que deseja excluir esse livro?\')">Deletar</a>';

	 return $link;

}




function link_editar($id_quadro)
{
	$link = '<a href="editar.php?id_quadro='.$id_quadro.'">Editar</a>';
	return $link;
}




function deletar_quadros($id_quadro)
{

	$conec = conectar();

	$sql = "DELETE FROM quadros_tb WHERE id_quadro = $id_quadro";

	$result = mysqli_query($conec, $sql);	

	if (mysqli_affected_rows($conec) > 0)
	{
		return true;
	}

	return false;

}


function buscar_quadro($id_quadro)
{

	$conec = conectar();

	$sql = "SELECT FROM quadros_tb WHERE id_quadro = $id_quadro";

	$result = mysqli_query($conec, $sql);
 
	 	if (mysqli_query($conec) > 0)
			{
				return $result;

			}
		return false;

}

function editar_quadro($id_quadro,$nome,$pintor,$valor)
{
	$conec = conectar();

	$sql = "UPDATE quadro_tb SET nome = '$nome', pintor = '$pintor', valor = '$valor'
	WHERE id_quadro = $id_quadro";

	$result = mysqli_query($conec, $sql);

	if (mysqli_affected_rows($conec) > 0 )
	{
		return $result;
	}

	return false;


}

 ?>	
