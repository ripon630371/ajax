<?php
	class ajax {
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "ajax";

		public $connection;

		public function __construct(){
			$conn = new mysqli($this-> host,$this-> user,$this-> pass,$this-> db);
			$this-> connection = $conn;
		}

		// Data instert 
		public function dataInsert($name,$email,$cell){
			$sql ="INSERT INTO user (name,email,cell) VALUES('$name','$email','$cell')";
			$data = $this-> connection->query($sql);

			if($data){
				return "<h2 style ='color: green;'> Data Insert Successfull</h2>";
			}else{
				return "<h2 style ='color: red;'> Data Insert Field!</h2>";
			}
		}
		// data show 
		public function  datashow(){
			$sql = "SELECT * FROM user  ";
			$data = $this-> connection -> query($sql);
			if($data){
				return $data;
			}else{
				return false;
			}
		}

		
	}

?>