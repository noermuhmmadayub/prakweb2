<?php 
include_once 'top.php';
include_once 'class_tema.php';

$obj_tema = new Tema();
$rs = $obj_tema->getAll();
?>

<div class="row">
		<div class="col-md-12">
		
		<h1>Daftar Tema Seminar</h1>
		<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							ID
						</th>
						<th>
							NAMA
						</th>
					</tr>
				</thead>
				<tbody>
		<?php 
		$nomor =1;
		foreach($rs as $row){ //buka 			
		?>
					<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $row['id'];?></td>
					<td><?=$row['nama']?></td>
					</tr>
		<?php 
		  $nomor++;
		}
		 ?>
		 	</tbody>
			</table>

		</div>
</div>

<?php 
include_once 'bottom.php';
?>