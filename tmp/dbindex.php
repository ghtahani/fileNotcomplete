<?php 
require "db.php";
$id = 3;
$database = new db();
$dataset = $database->showinfo("SELECT supEmail, OfficeNO FROM supervisor where SuperID='$id'");
if ($dataset){
			foreach ($dataset as $data){
				echo "<p>";
				echo "Email".$data->getsuperEmail()."</br>";
				echo "Email".$data->getsuperOffice()."</br>";
				
				echo "</p>";
			}
		}
		else {
			return null;
		}
?>