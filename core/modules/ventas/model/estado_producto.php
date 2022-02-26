<?php
class estado_productoData { // nombre de tabla seguido de la palabra Data
	public static $tablename = " ";

	public function estado_productoData(){
        $this->id ="";
        $this->nombre ="";
        $this->estado_producto ="";
	}

	public function add(){

	 

	}



	
	public static function getAll(){
		$sql = "SELECT * FROM estado_producto";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new estado_productoData();	// aqui cambia
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->estado_producto = $r['estado_producto'];
			$cnt++;
		}
		return $array;
	}


	public static function getById($id){

	 
	}


	public function update(){
		
	 
	}


	public function delete(){
		
	/*	$sql = "U ->id";
	
		Executor::doit($sql);*/
	}

 

}

?>