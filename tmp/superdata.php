<?php 
class superdata {
	
	private $email , $officeNO;
	public function __construct ($dbRow){
		$this->email= $dbRow['supEmail'];
		$this->officeNO= $dbRow ['OfficeNO'];
	}
	public function getsuperEmail(){
		$this->email;
	}
	public function getsuperOffice(){
		$this->officeNOsuper;
	}
}
?>