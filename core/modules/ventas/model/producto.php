<?php
class productoData { // nombre de tabla seguido de la palabra Data
	public static $tablename = "producto";

	public function productoData(){
        $this->id ="";
        $this->prod_cod ="";
        $this->prod_nom ="";
        $this->prod_cali ="";
        $this->prod_grado ="";
        $this->prod_peso ="";
        $this->num_lote ="";
        $this->fecha_in ="";
		$this->condicion =0;
	}

	public function add(){

	/*	$sql = "INSERT INTO producto (prod_cod, prod_nom, prod_cali, prod_grado, prod_peso, num_lote, fecha_in, condicion) ";

        $sql .= "value (\"$this->prod_cod\",\"$this->prod_nom\",\"$this->prod_cali\",\"$this->prod_grado\",\"$this->prod_peso\",\"$this->num_lote\",\"$this->fecha_in\",\$this->condicion , 1)";

		Executor::doit($sql);*/

	}



	
	public static function getAll(){
	/*	$sql = "SELECT * FROM producto WHERE condicion = 1";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new productoData();	// aqui cambia
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->prod_cod = $r['prod_cod'];
			$array[$cnt]->prod_nom = $r['prod_nom'];
            $array[$cnt]->prod_cali = $r['prod_cali'];
			$array[$cnt]->prod_grado = $r['prod_grado'];
            $array[$cnt]->prod_peso = $r['prod_peso'];
			$array[$cnt]->num_lote = $r['num_lote'];
            $array[$cnt]->fecha_in = $r['fecha_in'];
			$array[$cnt]->condicion = $r['condicion'];
			$cnt++;
		}
		return $array;*/
	}


	public static function getById($id){

		/*$sql = "SELECT * FROM producto WHERE id= $id ";

		$query = Executor::doit($sql);

		$found = null;

		$data = new productoData(); // aqui cambia

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			$data->prod_cod = $r['prod_cod'];
			$data->prod_nom = $r['prod_nom'];
			$data->prod_cali = $r['prod_cali'];
            $data->prod_grado = $r['prod_grado'];
			$data->prod_peso = $r['prod_peso'];
            $data->num_lote = $r['num_lote'];
			$data->fecha_in = $r['fecha_in'];
			$data->condicion = $r['condicion'];
			$found = $data;
			break;

		}
		return $found;*/
	}


	public function update(){
		
	/*	$sql = "UPDATE producto SET prod_cod = \"$this->prod_cod\" , prod_nom = \"$this->prod_nom\" , prod_cali = \"$this->prod_cali\" , prod_grado = \"$this->prod_grado\" , prod_peso = \"$this->prod_peso\" , num_lote = \"$this->num_lote\" , fecha_in = \"$this->fecha_in\" , condicion = \"$this->condicion\" WHERE id = $this->id";
	
		Executor::doit($sql);*/
	}


	public function delete(){
		
	/*	$sql = "U ->id";
	
		Executor::doit($sql);*/
	}

}

?>