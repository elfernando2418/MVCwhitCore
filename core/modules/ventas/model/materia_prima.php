<?php
class materia_primaData { // nombre de tabla seguido de la palabra Data
	public static $tablename = "materia_prima";

	public function materia_primaData(){
        $this->id ="";
        $this->codigo ="";
        $this->id_tipo_mateira =0;
        $this->cantidad =0;
		$this->status =0;
	}

	public function add(){

		$sql = "INSERT INTO materia_prima (codigo, id_tipo_mateira, cantidad, status) ";

        $sql .= "value (\"$this->codigo\" ,\"$this->id_tipo_mateira\" , \"$this->cantidad\", 1)";

		Executor::doit($sql);

	}



	
	public static function getAll(){
		$sql = "SELECT * FROM materia_prima WHERE status = 1";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new materia_primaData();	// aqui cambia
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['codigo'];
			$array[$cnt]->id_tipo_mateira = $r['id_tipo_mateira'];
            $array[$cnt]->cantidad = $r['cantidad'];
			$array[$cnt]->status = $r['status'];
			$cnt++;
		}
		return $array;
	}


	public static function getById($id){

		$sql = "SELECT * FROM materia_prima WHERE id= $id ";

		$query = Executor::doit($sql);

		$found = null;

		$data = new materia_primaData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			$data->codigo = $r['codigo'];
			$data->id_tipo_mateira = $r['id_tipo_mateira'];
			$data->cantidad = $r['cantidad'];
            $data->status = $r['status'];
			$found = $data;
			break;

		}
		return $found;
	}


	public function update(){
		
		$sql = "UPDATE materia_prima SET codigo = \"$this->codigo\" , id_tipo_mateira = \"$this->id_tipo_mateira\" , cantidad = \"$this->cantidad\" WHERE id = $this->id";
		Executor::doit($sql);
	}


	public function delete($id){
		
		$sql = "UPDATE materia_prima SET status = 0 WHERE id = $id";
	
		Executor::doit($sql);
	}

	
	public static function getLastId(){

		$sql = "SELECT id FROM materia_prima WHERE id=  (SELECT MAX(id) FROM materia_prima) ";

		$query = Executor::doit($sql);

		$found = null;

		$data = new materia_primaData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			
			$found = $data;
			break;

		}
		return $found;
	}

}

?>