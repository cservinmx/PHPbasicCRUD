<?php

/********************************
  Author Carlos Servín
  Site: www.servin.mx
  email: carlos@servin.mx
  https://github.com/cservinmx
  Basic CRUD
*********************************/

// incluye la clase Db
require_once('class_bd.php');

	class CrudNewsfeed{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto
		public function insertar($data){
      //print_r($data);
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO newsfeed values(NULL,:nombre,:genero,:rango_edad,:categoria,:email,1)');
			$insert->bindValue('nombre',$data->getNombre());
			$insert->bindValue('genero',$data->getGenero());
			$insert->bindValue('rango_edad',$data->getRango());
      $insert->bindValue('categoria',$data->getCategoria());
      $insert->bindValue('email',$data->getEmail());
			$insert->execute();

		}

		// método para mostrar todos
		public function mostrar(){
			$db=Db::conectar();
			$lista=[];
			$select=$db->query('SELECT * FROM newsfeed WHERE status=1');

			foreach($select->fetchAll() as $rec){
				$myns= new Newsfeed();
				$myns->setId($rec['id']);
				$myns->setNombre($rec['nombre']);
				$myns->setGenero($rec['genero']);
				$myns->setRango($rec['rango_edad']);
        $myns->setCategoria($rec['categoria']);
        $myns->setEmail($rec['email']);

				$lista[]=$myns;
			}
			return $lista;
		}

		// método para eliminar un registoro, recibe como parámetro el id
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM newsfeed WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un registro, recibe como parámetro el id
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM newsfeed WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$feed=$select->fetch();
			$nwf= new Newsfeed();
			$nwf->setId($feed['id']);
			$nwf->setNombre($feed['nombre']);
			$nwf->setGenero($feed['genero']);
			$nwf->setRango($feed['rango_edad']);
			$nwf->setCategoria($feed['categoria']);
			$nwf->setEmail($feed['email']);
			return $nwf;
		}

		// método para actualizar un registro, recibe como parámetro el id
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE newsfeed SET nombre=:nombre, genero=:genero,rango_edad=:rango_edad, categoria=:categoria, email=:email  WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('nombre',$libro->getNombre());
			$actualizar->bindValue('genero',$libro->getGenero());
			$actualizar->bindValue('rango_edad',$libro->getRango());
			$actualizar->bindValue('categoria',$libro->getCategoria());
			$actualizar->bindValue('email',$libro->getEmail());
			$actualizar->execute();
		}
	}
?>
