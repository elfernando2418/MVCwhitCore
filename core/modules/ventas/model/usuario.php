<?php
class usuarioData { // nombre de tabla seguido de la palabra Data
	public static $tablename = "usuario";

	public function usuarioData(){
        $this->id ="";
        $this->nombre ="";
        $this->fecha_ingreso ="";
        $this->telefono ="";
        $this->email ="";
		$this->password ="";
		$this->status =0;
	}

	public function add(){
		//falta campo password
		$sql = "INSERT INTO usuario (nombre, fecha_ingreso, telefono, email, status) ";

        $sql .= "value (\"$this->nombre\",\"$this->fecha_ingreso\",\"$this->telefono\",\"$this->email\", 1)";

		Executor::doit($sql);

	}



	
	public static function getAll(){
		$sql = "SELECT * FROM usuario WHERE status = 1";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new usuarioData();	// aqui cambia
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->fecha_ingreso = $r['fecha_ingreso'];
            $array[$cnt]->telefono = $r['telefono'];
			$array[$cnt]->email = $r['email'];
			$array[$cnt]->status = $r['status'];
			$cnt++;
		}
		return $array;
	}


	public static function getById($id){

		$sql = "SELECT * FROM usuario WHERE id= $id ";
		 
		$query = Executor::doit($sql);

		$found = null;

		$data = new usuarioData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			$data->nombre = $r['nombre'];
			$data->fecha_ingreso = $r['fecha_ingreso'];
			$data->telefono = $r['telefono'];
            $data->email = $r['email'];
 
			$found = $data;
			break;

		}
		return $found;
	}


	public static function getByemailPassword($email,$password){

		$sql = "SELECT * FROM usuario WHERE usuario.email = \"$email\" AND usuario.password = \"$password\" AND usuario.status = 1";

		$query = Executor::doit($sql);

		$found = null;

		$data = new usuarioData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
		 
			$found = $data;
			break;

		}
		return $found;
	}
	public function update(){
		
		$sql = "UPDATE usuario SET nombre = \"$this->nombre\" , fecha_ingreso = \"$this->fecha_ingreso\" , telefono = \"$this->telefono\" , email = \"$this->email\" WHERE id = $this->id";
	
		Executor::doit($sql);
	}


	public function delete(){
		
	/*	$sql = "U ->id";
	
		Executor::doit($sql);*/
	}
	 

	

}

?>