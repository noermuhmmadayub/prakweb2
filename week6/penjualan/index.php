<?php
include_once 'dbkoneksi.php';

include_once('models/Produk.php');
include_once('models/Vendor.php');
include_once('models/Kartu.php');
include_once('models/Pelanggan.php');
include_once('models/Pesanan.php');


include_once('navbar.php');
include_once('sidebar.php');


//lakukan request halaman di menu url dengan membuja terlebih dahulu file index.php
$hal = $_REQUEST['hal'];
// jika ada request dari url browser berupa Hal tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal . '.php';
    // include_once 'produk.php;
}else{
// jika tidak ada request hal dari halaman  browser tampilkan halaman home
include_once('home.php');
}
include_once('footer.php');
?>