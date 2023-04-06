<?php
include 'koneksi.php';
$dbbakeryshop= new database();

$aksi = $_GET['aksi'];
//proses makanan
if($aksi == "tambahbakery"){
    $dbbakeryshop->tambahbakery($_POST['nama_roti'],
      $_POST['harga'], $_POST['stock']);
      header("location:menubakery.php");
}
if($aksi == "tambahcustomer"){
    $dbbakeryshop->tambahcustomer($_POST['nama'],
      $_POST['no_hp'], $_POST['alamat']);
      header("location:menucustomer.php");
}
if($aksi == "tambahtransaksi"){
    $dbbakeryshop->tambahtransaksi($_POST['id_roti'], $_POST['id_customer'], $_POST['kuantitas'], $_POST['total_harga']);
      header("location:menutransaksi.php");
}
elseif($aksi == "hapuspesanan"){
    $dbbakeryshop->hapuspesanan($_GET['id_pesanan']);
    header("location:kasir.php");
}
?>