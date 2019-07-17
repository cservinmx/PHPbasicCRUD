<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_newsfeed.php');
	require_once('newsfeed.php');
	$crud= new CrudNewsfeed();
	$nf=new Newsfeed();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$nf=$crud->obtenerLibro($_GET['id']);
?>
<html>
<head>
	<title>Actualizar newsfeed</title>
</head>
<body>
	<form action='controlador_newsfeed.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $nf->getId()?>'>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $nf->getNombre()?>'></td>
		</tr>
		<tr>
			<td>genero:</td>
			<td><input type='text' name='genero' value='<?php echo $nf->getGenero()?>' ></td>
		</tr>
		<tr>
			<td>Rango Edad:</td>
			<td><input type='text' name='rango' value='<?php echo $nf->getRango() ?>'></td>
		</tr>
		<tr>
			<td>Categoría:</td>
			<td><input type='text' name='categoria' value='<?php echo $nf->getCategoria() ?>'></td>
		</tr>

		<tr>
			<td>Email:</td>
			<td><input type='text' name='email' value='<?php echo $nf->getEmail() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>
