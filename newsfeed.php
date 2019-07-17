<?php
/********************************
  Author Carlos Servín
  Site: www.servin.mx
  email: carlos@servin.mx
  https://github.com/cservinmx
  Basic CRUD
*********************************/

	class Newsfeed{
		private $id;
		private $nombre;
		private $genero;
		private $rango;
    private $categoria;
    private $email;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getGenero(){
			return $this->genero;
		}

		public function setGenero($genero){
			$this->genero = $genero;
		}

		public function getRango(){
		return $this->rango;
		}

		public function setRango($rango){
			$this->rango = $rango;
		}

    public function getCategoria(){
    return $this->categoria;
    }

    public function setCategoria($categoria){
      $this->categoria = $categoria;
    }

    public function getEmail(){
    return $this->email;
    }

    public function setEmail($email){
      $this->email = $email;
    }

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>
