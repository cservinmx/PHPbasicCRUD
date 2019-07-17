<?php
/********************************
  Author Carlos Servín
  Site: www.servin.mx
  email: carlos@servin.mx
  https://github.com/cservinmx
  Basic CRUD
*********************************/
//incluye la clase Libro y CrudLibro
require_once('crud_newsfeed.php');
require_once('newsfeed.php');
$crud=new CrudNewsfeed();
$libro= new Newsfeed();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Libros</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Género</td>
			<td>Rango Edad</td>
			<td>Categoria</td>
			<td>Email</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td><?= $libro->getNombre() ?></td>
				<td><?= $libro->getGenero() ?></td>
				<td><?= $libro->getRango()?> </td>
				<td><?= $libro->getCategoria()?> </td>
				<td><?= $libro->getEmail()?> </td>
				<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>
