<?php 
  include_once 'top.php';
?>

<div class="row">
		<div class="col-md-12">
		<h1>Form Create Event</h1>

<form method="POST" action="proses_form.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Event</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-codepen"></i>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Kegiatan" type="text" class="form-control here">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Kategori Kegiatan</label> 
    <div class="col-8">
      <select id="kategori" name="kategori" class="custom-select">
        <option value="1">Seminar</option>
        <option value="2">Workshop</option>
        <option value="3">Exbition</option>
        <option value="4">Openhouse</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control here">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat</label> 
    <div class="col-8">
      <textarea id="tempat" name="tempat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="htm" class="col-4 col-form-label">HTM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-cny"></i>
        </div> 
        <input id="htm" name="htm" type="text" class="form-control here">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Status</label> 
    <div class="col-8">
      <label class="custom-control custom-radio">
        <input name="status" type="radio" class="custom-control-input" value="1"> 
        <span class="custom-control-indicator"></span> 
        <span class="custom-control-description">Draft</span>
      </label>
      <label class="custom-control custom-radio">
        <input name="status" type="radio" class="custom-control-input" value="2"> 
        <span class="custom-control-indicator"></span> 
        <span class="custom-control-description">Publish</span>
      </label>
      <label class="custom-control custom-radio">
        <input name="status" type="radio" class="custom-control-input" value="3"> 
        <span class="custom-control-indicator"></span> 
        <span class="custom-control-description">UnPublish</span>
      </label>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <!--
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>-->
      <input value="Simpan" 
             name="proses" 
             type="submit" class="btn btn-primary"/>
    </div>
  </div>
</form>



		</div>
	</div>

<?php 
  include_once 'bottom.php';
?>