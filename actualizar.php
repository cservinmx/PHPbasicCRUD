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
	$crud= new CrudNewsfeed();
	$nf=new Newsfeed();
	//busca el registro utilizando el id, que es enviado por GET desde la vista mostrar.php
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
			<td>
				<select name='genero'>
					<option value="Masculino" <?php if($nf->getGenero()=='Masculino'){ echo "selected";}?> >Masculino</option>
					<option value="Femenino" <?php if($nf->getGenero()=='Femenino'){ echo "selected";}?>>Femenino</option>
				</select>
				</td>
		</tr>
		<tr>
			<td>Rango Edad:</td>
			<td>
				<select name='rango'>
					<option value="Menor de 15" <?php if($nf->getRango()=='Menor de 15'){ echo "selected";}?> >Menor de 15</option>
					<option value="15 - 20" <?php if($nf->getRango()=='15 - 20'){ echo "selected";}?> >15 - 20</option>
					<option value="21 - 35" <?php if($nf->getRango()=='21 - 35'){ echo "selected";}?> >21 - 35</option>
					<option value="36 - 50" <?php if($nf->getRango()=='36 - 50'){ echo "selected";}?> >36 - 50 </option>
					<option value="50 - 99" <?php if($nf->getRango()=='50 - 99'){ echo "selected";}?> >50 - 99</option>
				</select>
				</td>
		</tr>
		<tr>
			<td>Categoría:</td>
			<td>
				<select name='categoria'>
					<option value="Empleos" <?php if($nf->getCategoria()=='Empleos'){ echo "selected";}?> >Empleos</option>
					<option value="Hogar" <?php if($nf->getCategoria()=='Hogar'){ echo "selected";}?> >Hogar</option>
					<option value="Idiomas" <?php if($nf->getCategoria()=='Idiomas'){ echo "selected";}?> >Idiomas</option>
					<option value="Citas y Amistad" <?php if($nf->getCategoria()=='Citas y Amistad'){ echo "selected";}?> >Citas y Amistad</option>
					<option value="Otros" <?php if($nf->getCategoria()=='Empleos'){ echo "Otros";}?> >Otros</option>
				</select>
			</td>
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
