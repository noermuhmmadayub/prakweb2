<?php
$model = new Pelanggan();
$data_card = $model->tampil();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Card</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
<div class="row">
    <div class="col-12">
         <table class="table table-striped table-responsive">
             <thead>
                 <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>jk</th>
                    <th>tmp_lahir</th>
                    <th>tgl_lahir</th>
                    <th>email</th>
                    <th>kartu_id</th>



                
                </tr>
            </thead>
            <tbody>
                <!-- cetak data array produk -->
                <?php
                $no = 1;
                foreach ($data_card as $value) {
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value ['id'] ?></td>
                    <td><?= $value ['kode'] ?></td>
                    <td><?= $value ['nama'] ?></td>
                    <td><?= $value ['jk'] ?></td>
                    <td><?= $value ['tmp_lahir'] ?></td>
                    <td><?= $value ['tgl_lahir'] ?></td>
                    <td><?= $value ['email'] ?></td>
                    <td><?= $value ['kartu_id'] ?></td>

                </tr>
                <?php
                $no++;
                }
                ?>   
            </tbody>
        </table>
    </div>
</div>
</section>
<!-- /.content -->
</div>