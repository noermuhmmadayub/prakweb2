<?php 
include_once 'top.php';
// panggil file dbkoneksi
include_once 'dbkoneksi.php';

// siapkan variable $sql untuk query
$sql = "SELECT * FROM kegiatan";

// eksekusi query simpan di $rs
$rs = $dbh->query($sql);

// cetak data hasil query
/*foreach($rs as $row){
	echo '<br/>'.$row['id'].' -- '.$row['nama'].
	'-- HTM '.$row['htm'];
}*/
?>

	<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Kegiatan
						</th>
						<th>
							Tanggal
						</th>
						<th>
							HTM
						</th>
					</tr>
				</thead>
				<tbody>
<?php 
$nomor = 1;
				foreach($rs as $row){
					?>
					<tr>
						<td>
							<?php echo $nomor?>
						</td>
						<td>
							<?=$row['nama']?>
						</td>
						<td>
							<?=$row['tanggal']?>
						</td>
						<td>
							<?=$row['htm']?>
						</td>
					</tr>
<?php
   $nomor++; 
   }
?>   
			</tbody>
			</table>


<?php 
include_once 'bottom.php';
?>

