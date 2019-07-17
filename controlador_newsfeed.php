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

$crud= new CrudNewsfeed();
$nf= new Newsfeed();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$nf->setNombre($_POST['nombre']);
		$nf->setGenero($_POST['genero']);
		$nf->setRango($_POST['rango']);
    $nf->setCategoria($_POST['categoria']);
    $nf->setEmail($_POST['email']);
		//llama a la función insertar definida en el crud
		$crud->insertar($nf);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$nf->setId($_POST['id']);
		$nf->setNombre($_POST['nombre']);
		$nf->setGenero($_POST['genero']);
		$nf->setRango($_POST['rango']);
    $nf->setCategoria($_POST['categoria']);
    $nf->setEmail($_POST['email']);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
