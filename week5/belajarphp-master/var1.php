<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <?php 
  	$nama = "Fariz Ahmad"; // string
  	$alamat = 'Bogor'; // string 
  	$umur = 21; // integer
  	$berat = 75.20; // float/double
  	$sudah_lulus = FALSE; // boolean
  ?>
  Nama Mahasiswa : <?php echo $nama ?>
  <br/>
  Alamat : <?=$alamat ?>
  <br/>
  Umur : <?php echo $umur . ' Tahun';
  ?>
  <br/>
  Berat : <?php echo $berat .' Kg'?>
  <br/>
  <?php 
    if($sudah_lulus){
      echo $nama . ' SUDAH LULUS';
    }else{
      echo $nama . ' BELUM LULUS';
    }
  ?>
</body>
</html>