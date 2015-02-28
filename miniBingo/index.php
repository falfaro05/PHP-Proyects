<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Index Principal</title>

	<style type="text/css">
		form
		{
			margin: 0 auto;
			width: 350px;
		}
		form fieldset input[type="submit"]
		{
			margin: 10px 0 10px auto;
		}
		ul
		{
			list-style: none;
		}

	</style>
</head>
<body>


	<a href="pag1.php"><p>Pag1</p></a>

	<form action="pag1.php" method="post">

	<h1>Bingo</h1>

		<fieldset>
			<legend>Introduce en los campos valores del 1 al 20!</legend>

			<ul>
				<?php for($i = 1; $i < 7; $i++){ ?>

					<li><input type="text" name="valor<?php echo $i; ?>" maxlength="2"></li>
				
				<?php }?>
				<li><input type="submit" name="submit"></li>

			</ul>

		</fieldset>

	</form>

</body>
</html>