<?php
class productoData { // nombre de tabla seguido de la palabra Data
	public static $tablename = "producto";

	public function productoData(){
        $this->id ="";
		$this->codigoProducto ="";
        $this->nombre ="";
        $this->calibre ="";
        $this->grado_brix ="";
        $this->peso ="";
        $this->id_lote ="";
        $this->fecha_ingreso ="";
        $this->fecha_caducidad ="";
		$this->status =0;
	}

	public function add(){

		$sql = "INSERT INTO producto (nombre,codigoProducto, calibre, grado_brix, peso, id_lote, fecha_ingreso, fecha_caducidad, status) ";

        $sql .= "value (\"$this->nombre\",\"$this->codigoProducto\",\"$this->calibre\",\"$this->grado_brix\",\"$this->peso\",\"$this->id_lote\",\"$this->fecha_ingreso\",\"$this->fecha_caducidad\" , 1)";

		Executor::doit($sql);

	}



	
	public static function getAll(){
		$sql = "SELECT * FROM producto WHERE status = 1";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new productoData();	// aqui cambia
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigoProducto = $r['codigoProducto'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->calibre = $r['calibre'];
            $array[$cnt]->grado_brix = $r['grado_brix'];
			$array[$cnt]->peso = $r['peso'];
            $array[$cnt]->id_lote = $r['id_lote'];
			$array[$cnt]->fecha_ingreso = $r['fecha_ingreso'];
            $array[$cnt]->fecha_caducidad = $r['fecha_caducidad'];
			$array[$cnt]->status = $r['status'];
			$cnt++;
		}
		return $array;
	}


	public static function getById($id){

		$sql = "SELECT * FROM producto WHERE id= $id ";

		$query = Executor::doit($sql);

		$found = null;

		$data = new productoData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			$data->codigoProducto = $r['codigoProducto'];
			$data->nombre = $r['nombre'];
			$data->calibre = $r['calibre'];
			$data->grado_brix = $r['grado_brix'];
            $data->peso = $r['peso'];
			$data->id_lote = $r['id_lote'];
            $data->fecha_ingreso = $r['fecha_ingreso'];
			$data->fecha_caducidad = $r['fecha_caducidad'];
			$data->status = $r['status'];
			$found = $data;
			break;

		}
		return $found;
	}


	public function update(){
		
		$sql = "UPDATE producto SET codigoProducto = \"$this->codigoProducto\" ,nombre = \"$this->nombre\" , calibre = \"$this->calibre\" , grado_brix = \"$this->grado_brix\" , peso = \"$this->peso\" , id_lote = \"$this->id_lote\" , fecha_ingreso = \"$this->fecha_ingreso\" , fecha_caducidad = \"$this->fecha_caducidad\" WHERE id = $this->id";
		echo $sql;
		Executor::doit($sql);
	}


	public function delete( $id ){
		
		$sql = "UPDATE producto SET status = 0 WHERE id =  $id";
		echo $sql;
		Executor::doit($sql);
	}


	public static function getByTipo($idLote){
		$sql = "SELECT * FROM producto WHERE status = 1 AND  id_lote = $idLote ";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new productoData();	// aqui cambia
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigoProducto = $r['codigoProducto'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->id_lote = $r['id_lote'];
			$array[$cnt]->calibre = $r['calibre'];
			$array[$cnt]->grado_brix = $r['grado_brix'];
			$array[$cnt]->peso = $r['peso'];
			$array[$cnt]->id_lote = $r['id_lote'];
			$array[$cnt]->fecha_ingreso = $r['fecha_ingreso'];
			$array[$cnt]->fecha_caducidad = $r['fecha_caducidad'];
			$cnt++;
		}
		return $array;
	}
 
		
	public static function getLastId(){

		$sql = "SELECT id FROM producto WHERE id=  (SELECT MAX(id) FROM producto) ";

		$query = Executor::doit($sql);

		$found = null;

		$data = new productoData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			
			$found = $data;
			break;

		}
		return $found;
	}



}

?>