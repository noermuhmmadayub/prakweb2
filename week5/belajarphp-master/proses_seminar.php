<?php 
include_once 'top.php';
include_once 'class_seminar.php';

$obj_seminar = new Seminar();
?>

<div class="row">
		<div class="col-md-12">
<?php 	
    // Tangkap request form
    $_judul = $_POST['judul'];
    $_tema = $_POST['tema'];
    $_pembicara = $_POST['pembicara'];
    $_tanggal = $_POST['tanggal'];
    $_tempat = $_POST['tempat'];
    $_biaya = $_POST['biaya'];		

   $data = [];
   $data[] = 'K001'; // ? ke 1
   $data[] = $_judul ; // ? ke 2
   $data[] = $_pembicara; // ? ke 3
   $data[] = $_tanggal; // ? ke 4
   $data[] = $_tempat ; // ? ke 5
   $data[] = $_biaya ; // ? ke 6
   $data[] = 0 ; // ? ke 7
   $data[] = $_tema; //? k 8

   $obj_seminar->simpan($data);
?>
<ul>
   <li>Judul Seminar : <?=$_judul?></li>
   <li>Tema : <?=$_tema?></li>
   <li>Pembicara : <?=$_pembicara?></li>
     <li>Tanggal : <?=$_tanggal?></li>
</ul>


		</div>
</div>

<?php 
include_once 'bottom.php';
?>