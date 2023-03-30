<?php 
  // index array default dimulai 0
  $buahs = ["Pepaya","Mangga","Pisang","Jambu"];
  echo 'BUAH INDEX 0 ' . $buahs[0];

  $ar_presiden = [100=>"Soekarno","Soeharto",
       200=>"Habibie","Gusdur"];
  echo '<br/>Presiden Index 101 ' . $ar_presiden[101];    
?>
Daftar Jus Buah:
<ol>
 <?php 
    foreach($buahs as $x){
    	echo '<li> Jus '.$x.'</li>';
    }
 ?>
</ol>
<?php echo 'Jumlah Buah ' . count($buahs)?>
<hr/>
Daftar Presiden
<ol>
<?php 
   foreach($ar_presiden as $x => $y){
   	 echo '<li>'.$y . ' Presiden Ke ' . $x .'</li>';
   }
?>
</ol>
