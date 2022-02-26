<?php
class envio_productoData { // nombre de tabla seguido de la palabra Data
	public static $tablename = "envio_producto";

	public function envio_productoData(){
		$this->id = "";
		$this->codigo_ruta = "";
		$this->fecha_transporte = "";
		$this->empresa_transporte = "";
		$this->nombre_conductor = "";
		$this->placa = "";
		$this->numero_envio = "";
		$this->remitente = "";
		$this->id_producto = "";
		$this->peso = "";
		$this->id_estadoProducto = "";
		$this->status = "";
	}

	public function add(){

	/*	$sql = "INSERT INTO lot (name, num_lot, dimension, condicion) ";

        $sql .= "value (\"$this->name\" ,\"$this->num_lot\" , $this->dimension , 1)";

		Executor::doit($sql);*/

	}



	
	public static function getAll(){
		$sql = "SELECT * FROM envio_producto WHERE status = 1";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new envio_productoData();	// aqui cambia
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo_ruta = $r['codigo_ruta'];
			$array[$cnt]->fecha_transporte = $r['fecha_transporte'];
			$array[$cnt]->empresa_transporte = $r['empresa_transporte'];
			$array[$cnt]->nombre_conductor = $r['nombre_conductor'];
			$array[$cnt]->placa = $r['placa'];
			$array[$cnt]->numero_envio = $r['numero_envio'];
			$array[$cnt]->remitente = $r['remitente'];
			$array[$cnt]->id_producto = $r['id_producto'];
			$array[$cnt]->peso = $r['peso'];
			$array[$cnt]->id_estadoProducto = $r['id_estadoProducto'];
			$array[$cnt]->status = $r['status'];

			$cnt++;
		}
		return $array;
	}


	public static function getById($id){

		/*$sql = "SELECT * FROM lot WHERE id= $id ";

		$query = Executor::doit($sql);

		$found = null;

		$data = new LotData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->num_lot = $r['num_lot'];
			$data->dimension = $r['dimension'];
			$found = $data;
			break;

		}
		return $found;*/
	}


	public function update(){
		
	/*	$sql = "UPDATE lot SET name = \"$this->name\" , num_lot = \"$this->num_lot\" , dimension = \"$this->dimension\" WHERE id = $this->id";
	
		Executor::doit($sql);*/
	}


	public function delete(){
		
	/*	$sql = "U ->id";
	
		Executor::doit($sql);*/
	}

 

}

?>