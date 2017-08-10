<?php 
require ("superdata.php");
class db {
	private $con;
	 $servername = "localhost";
	 $username = "root";
	 $password = "";
	public function __construct(){
		$con = new PDO("mysql:host=$servername;dbname=training", $username, $password);
	}
	
	Public function showinfo ($sql){
		$stmt = $this->con->prepare($sql);
		$stmt->execute();
		while ($row = $stmt->fetch()){
			$dataset [] = new superinfo ($row); 
		}
		if (!empty($dataset)){
			return $dataset;
		}
		else {
			return null;
		}
	}
}

?>