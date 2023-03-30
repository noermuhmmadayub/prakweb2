<?php 
try {
   // 1) siapkan variable DSN	
   $host = 'localhost';
   $dbname = 'dbkegiatan';
   $dbuser = 'siswa';
   $dbpass = '123456'; 

   // 2) buat objek koneksi
    $dbh = new PDO("pgsql:host=$host;dbname=$dbname",
   	$dbuser,$dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE ,
     PDO::ERRMODE_EXCEPTION
   	);
}catch(PDOException $e){
	echo $e->getMessage();
}
?>