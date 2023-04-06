<?php 
	include 'koneksi.php';
	$dbbakeryshop = new database;
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../bakery/style2.css">
 </head>
 <body>
 	<div class="all">
 	<div class="header">
 		<h1>CUSTOMER</h1>
 	</div>

 	<div class="nav">
 		<ul>
			<li><a href="home.php">Home</a></li>
            <li><a href="menubakery.php">Menu Bakery</a></li>
            <li><a href="menucustomer.php">Menu Customer</a></li>
            <li><a href="menutransaksi.php">Menu Transaksi</a></li>
	 	</ul>
 	</div>
    <div class="box">
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Menu Customer</h2>
 	<table style="padding-center: 720px;">
        <form action="proses.php?aksi=tambahcustomer" method="post">
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>No HP : </td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
    </div>
    </div>
 </body>
 </html>