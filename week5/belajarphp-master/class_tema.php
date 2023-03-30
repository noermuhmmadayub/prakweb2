<?php 
include_once 'class_DAO.php';

class Tema {
	private $dbh ;
	private $tblName = "tema";

	public function __construct(){
		$this->dbh = DAO::getInstance();
	}

	public function getAll(){
		$sql = "SELECT * FROM " . $this->tblName;
		$rs = $this->dbh->query($sql);
		return $rs;
	}
}
?>