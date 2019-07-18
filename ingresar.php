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
			<td>
				<select name='genero'>
					<option value="Masculino">Masculino</option>
					<option value="Femenino">Femenino</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Rango Edad:</td>
			<td>
				<select name='rango'>
					<option value="Menor de 15">Menor de 15</option>
					<option value="15 - 20">15 - 20</option>
					<option value="21 - 35">21 - 35</option>
					<option value="36 - 50">36 - 50 </option>
					<option value="50 - 99">50 - 99</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Categoría:</td>
			<td>
				<select name='categoria'>
					<option value="Empleos">Empleos</option>
					<option value="Hogar">Hogar</option>
					<option value="Idiomas">Idiomas</option>
					<option value="Citas y Amistad">Citas y Amistad</option>
					<option value="Otros">Otros</option>
				</select>
			</td>
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
