<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cambiar Contraseña</title>
	</head>
	<body>
		<section>
			<?php
			echo "<form method='POST' action='../controladores/cambiar_contrasena.php'>";
			echo "<input type='hidden' name='cod' value='".$_GET['codigo']."'>";
			echo "<table>";
			echo "<tr>";
			echo "<td>Contraseña actual:</td>";
			echo "<td><input type='password' name='act'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Nueva contraseña:</td>";
			echo "<td><input type='password' name='new'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Confirmar contraseña:</td>";
			echo "<td><input type='password' name='rep'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan='2'><input type='submit' value='Cambiar'><td>";
			echo "</tr>";
			echo "</table>";
			echo "</form>";
			?>
		</section>
	</body>
</html>