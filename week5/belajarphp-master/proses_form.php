<?php
  include_once 'dbkoneksi.php'; 
  // tangkap variable kiriman dari form
  // nama setelah $_POST harus sama dgn name pada form
  $_nama = $_POST['nama'];
  $_kategori = $_POST['kategori'];
  $_tanggal = $_POST['tanggal'];
  $_tempat = $_POST['tempat'];
  $_htm = $_POST['htm'];
  $_status = $_POST['status'];

  // Tampilkan Kiriman Form
?>
<ol>
   <li>Nama : <?php echo $_nama?></li>
   <li>Kategori : <?php echo $_kategori ?></li>
   <li>Tanggal : <?=$_tanggal?></li>
   <li>Tempat : <?=$_tempat?></li>
   <li>HTM : <?=$_htm?></li>
   <li>Status : <?=$_status?></li>
</ol>
<?php 
   // langkah 1 dan 2 : ada di dbkoneksi.php
   // 3) siapkan query
   $sql = "INSERT INTO 	
      kegiatan (nama,kategori_id,tanggal,
      	tempat,htm,status) VALUES (?,?,?,?,?,?)";

   // 4) siapkan array data terurut sesuai query
   $data = [$_nama,$_kategori,$_tanggal,$_tempat,
            $_htm,$_status];

   // 5) siapkan prepare statement ($st)
   $st = $dbh->prepare($sql);

   // 6) eksekusi statement
   $st->execute($data);


?>
<a href="list_kegiatan.php">Daftar Kegiatan</a>


