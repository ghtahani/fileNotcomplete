
<?php
		include('vvv.php');
		
		$id = 1;
		$x = new config();
		$dataset = $x->showinfo("SELECT supEmail, OfficeNO FROM supervisor where SuperID='$id'");
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
		#$db= $x->connect();
		#$result = $db->prepare("SELECT supEmail, OfficeNO FROM supervisor where SuperID='$id'");
		#$result->execute();
		#for($i=0; $row = $result->fetch(); $i++){
		#	echo $row['supEmail'];
		#	echo $row['OfficeNO'];
		#}
	?>
