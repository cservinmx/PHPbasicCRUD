<html>
<head>
	<title> Ingresar Newsfeed</title>
</head>
<header>
Ingresa los datos del Newsfeed
</header>
<form action='controlador_newsfeed.php' method='post'>
	<table>
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Genero:</td>
			<td><input type='text' name='genero' ></td>
		</tr>
		<tr>
			<td>Rango Edad:</td>
			<td><input type='text' name='rango' ></td>
		</tr>
		<tr>
			<td>Categoría:</td>
			<td><input type='text' name='categoria' ></td>
		</tr>

		<tr>
			<td>Email:</td>
			<td><input type='text' name='email' ></td>
		</tr>

		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>
