<?php
/********************************
  Author Carlos Servín
  Site: www.servin.mx
  email: carlos@servin.mx
  https://github.com/cservinmx
  Basic CRUD
*********************************/
require_once('crud_newsfeed.php');
require_once('newsfeed.php');
$crud=new CrudNewsfeed();
$libro= new Newsfeed();
//obtiene todos los registros con el método mostrar de la clase crud
$lista=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Registros</title>
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
			<?php foreach ($lista as $record) {?>
			<tr>
				<td><?= $record->getNombre() ?></td>
				<td><?= $record->getGenero() ?></td>
				<td><?= $record->getRango()?> </td>
				<td><?= $record->getCategoria()?> </td>
				<td><?= $record->getEmail()?> </td>
				<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="controlador_newsfeed.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>
