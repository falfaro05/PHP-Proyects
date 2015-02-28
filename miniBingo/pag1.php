<?php 
	
	require_once("funciones.php");
	
	if(!isset($_POST["valor6"]) || !validar()){

		header("Location: index.php");
		exit();
	}


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Pagina1</title>

	<style type="text/css">

		table
		{
			margin: 0 auto;
			width: 250px;
		}
		table td
		{
			max-width: 40px;
			min-width: 40px
		}

	</style>
</head>
<body>

	<?php 

		$nMaquina = numerosMaquina();
		$nUsuario = numerosUsuario();
		$coinciden = numerosCoinciden($nMaquina, $nUsuario);

	?>

	<h1>Welcome to pag1</h1>

	<a href="index.php"><p>Index</p></a>

	<table border="1">
		<thead>
			<tr>
				<th colspan="6">Números al azar</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php for ($i=1; $i < 7; $i++) { ?>
					<td><?php echo $nMaquina[$i]; ?></td>
				<?php }?>
			</tr>
			<tr>
				<th colspan="6">Números que elegiste</th>
			</tr>
			<tr>
				<?php for ($i=1; $i < 7; $i++) { ?>
					<td><?php if(isset($nUsuario[$i])){echo $nUsuario[$i];} ?></td>
				<?php }?>
			</tr>
			<tr>
				<th colspan="6">coincidencias <?php echo $coinciden; ?></th>
			</tr>
		</tbody>

	</table>

	

</body>
</html>