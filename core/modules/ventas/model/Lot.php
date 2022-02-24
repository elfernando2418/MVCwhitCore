<?php
class LotData {
	public static $tablename = "lot";

	public function LotData(){
        $this->id ="";
        $this->name ="";
        $this->num_lot =0;
        $this->dimension =0;
		$this->condicion =0;
	}

	public function add(){

		$sql = "INSERT INTO lot (name, num_lot, dimension, condicion) ";

        $sql .= "value (\"$this->name\" ,\"$this->num_lot\" , $this->dimension , 1)";

		Executor::doit($sql);

	}



	
	public static function getAll(){
		$sql = "SELECT * FROM lot WHERE condicion = 1";


		$query = Executor::doit($sql);

		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//esto cambia
			$array[$cnt] = new LotData();
			//CAMBIA PERO ACORDE A LA ESTRUCTURA DEL CONTRUCTOR
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->num_lot = $r['num_lot'];
            $array[$cnt]->dimension = $r['dimension'];
			$array[$cnt]->condicion = $r['dimension'];
			$cnt++;
		}
		return $array;
	}


	public static function getById($id){

		$sql = "SELECT * FROM lot WHERE id= $id ";

		$query = Executor::doit($sql);

		$found = null;

		$data = new LotData();

		while($r = $query[0]->fetch_array()){

			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->num_lot = $r['num_lot'];
			$data->dimension = $r['dimension'];
			$found = $data;
			break;

		}
		return $found;
	}


	public function update(){
		
		$sql = "UPDATE lot SET name = \"$this->name\" , num_lot = \"$this->num_lot\" , dimension = \"$this->dimension\" WHERE id = $this->id";
	
		Executor::doit($sql);
	}


}

?>