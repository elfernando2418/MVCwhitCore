<?php
class LoteData { // nombre de tabla seguido de la palabra Data
	public static $tablename = "lote";

	public function loteData(){
        $this->id ="";
        $this->codigo ="";
        $this->numero ="";
        $this->fecha_elaboracion ="";
		$this->status ="";
	}

	public function add(){

	/*	$sql = "INSERT INTO lote (codigo, numero, fecha_elaboracion, status) ";

        $sql .= "value (\"$this->codigo\" ,\"$this->numero\" , $this->fecha_elaboracion , 1)";

		Executor::doit($sql);*/

	}



	
	public static function getAll(){
	/*	$sql = "SELECT * FROM lote WHERE status = 1";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new loteData();	// aqui cambia
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['codigo'];
			$array[$cnt]->numero = $r['numero'];
            $array[$cnt]->fecha_elaboracion = $r['fecha_elaboracion'];
			$array[$cnt]->status = $r['status'];
			$cnt++;
		}
		return $array;*/
	}


	public static function getById($id){

		/*$sql = "SELECT * FROM lote WHERE id= $id ";

		$query = Executor::doit($sql);

		$found = null;

		$data = new loteData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			$data->codigo = $r['codigo'];
			$data->numero = $r['numero'];
			$data->fecha_elaboracion = $r['fecha_elaboracion'];
			$data->status = $r['status'];
			$found = $data;
			break;

		}
		return $found;*/
	}


	public function update(){
		
	/*	$sql = "UPDATE lote SET codigo = \"$this->codigo\" , numero = \"$this->numero\" , fecha_elaboracion = \"$this->fecha_elaboracion\" WHERE id = $this->id";
	
		Executor::doit($sql);*/
	}


	public function delete(){
		
	/*	$sql = "U ->id";
	
		Executor::doit($sql);*/
	}



}

?>