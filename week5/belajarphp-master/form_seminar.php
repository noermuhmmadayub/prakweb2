<?php 
include_once 'top.php';
include_once 'class_tema.php';

$obj_tema = new Tema();
$rstema = $obj_tema->getAll();

?>

<div class="row">
		<div class="col-md-12">
		
		<form method="POST" action="proses_seminar.php">
  <div class="form-group row">
    <label for="judul" class="col-4 col-form-label">Judul Seminar</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-address-card"></i>
        </div> 
        <input id="judul" name="judul" placeholder="Judul Seminar" type="text" class="form-control here">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tema" class="col-4 col-form-label">Tema</label> 
    <div class="col-8">
      <select id="tema" name="tema" class="custom-select">
      <?php 
        foreach($rstema as $rowtema){
          echo  '<option value="'.$rowtema['id'].'">'.
                       $rowtema['nama'].'</option>';
        }
      ?>
      <!--
        <option value="1">Parenting</option>
        <option value="2">Internet Marketing</option>
        <option value="3">IT</option>
      -->

      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="pembicara" class="col-4 col-form-label">Pembicara</label> 
    <div class="col-8">
      <input id="pembicara" name="pembicara" type="text" class="form-control here">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" 
      name="tanggal" type="date" class="form-control here">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat</label> 
    <div class="col-8">
      <textarea id="tempat" name="tempat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya" class="col-4 col-form-label">Biaya</label> 
    <div class="col-8">
      <input id="biaya" name="biaya" type="text" class="form-control here">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="submit" 
             type="submit" 
             class="btn btn-warning"
             value="Simpan"/>
    </div>
  </div>
</form>





		</div>
</div>

<?php 
include_once 'bottom.php';
?>