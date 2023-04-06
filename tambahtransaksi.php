<?php 
	include 'koneksi.php';
	$dbskincare = new database;
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../skincare/style2.css">
 </head>
 <body>
 	<div class="all">
 	<div class="header">
 		<h1>TRANSAKSI</h1>
 	</div>

 	<div class="nav">
 		<ul>
			<li><a href="home.php">Home</a></li>
            <li><a href="dataskincare.php">Menu skincare</a></li>
            <li><a href="datacustomer.php">Menu Customer</a></li>
            <li><a href="datatransaksi.php">Menu Transaksi</a></li>
	 	</ul>
 	</div>
    <div class="box">
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Menu Transaksi</h2>
 	<table style="padding-center: 720px;">
        <form action="proses.php?aksi=tambahtransaksi" method="post">
            <tr>
                <td>ID Skincare: </td>
                <td><input type="number" name="id_skincare"></td>
            </tr>
            <tr>
                <td>ID Customer : </td>
                <td><input type="number" name="id_customer"></td>
            </tr>
            <tr>
                <td>harga : </td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Kuantitas : </td>
                <td><input type="text" name="kuantitas"></td>
            </tr>
            <tr>
                <td>Total Harga : </td>
                <td><input type="text" name="total_harga"></td>
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