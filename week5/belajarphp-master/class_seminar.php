<?php 
include_once 'class_DAO.php';

class Seminar {
	private $dbh ;
	private $tblName = "seminar";

	public function __construct(){
		$this->dbh = DAO::getInstance();
	}

	public function getAll(){
		$sql = "SELECT * FROM " . $this->tblName;
		$rs = $this->dbh->query($sql);
		return $rs;
	}

	public function simpan($data){
		$sql = "INSERT INTO seminar (kode,judul,pembicara,tanggal,tempat,biaya,status,tema_id) VALUES (?,?,?,?,?,?,?,?)";
		$st = $this->dbh->prepare($sql);
		$st->execute($data);
	}

	public function update($data){
		$sql = "UPDATE seminar SET kode=?,judul=?,pembicara=?,tanggal=?,tempat=?,biaya=?,status=?,tema_id=? WHERE id=?";
		$st = $this->dbh->prepare($sql);
		$st->execute($data);
	}

	public function hapus($id){
		$sql = "DELETE FROM seminar WHERE id=?";
		$st = $this->dbh->prepare($sql);
		$st->execute(array($id));
	}


}
?>