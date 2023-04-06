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
            <li><a href="data.php">Menu skincare</a></li>
            <li><a href="datacustomer.php">Menu Customer</a></li>
            <li><a href="daratransaksi.php">Menu Transaksi</a></li>
        </ul>
    </div>
    <center>
        <div class"box">
    <h2 style="text-align: center;margin-bottom: 20px">SKINCARE</h2>
    <a href="tambahtransaksi.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Transaksi</a>
    <table border="1" cellspacing="0" cellpadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
        <tr>
            <th>NO</th>
            <th>Nama akincare</th>
            <th>Nama Customer</th>
            <th>harga</th>
            <th>Kuantitas</th>
            <th>Total Harga</th>
        </tr>
        <?php
        $no=1;
        foreach ($dbskincare->tampiltransaksi() as $x) {
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $x ['name_skincare'];?></td>
            <td><?php echo $x ['nama_customer'];?></td>
            <td><?php echo $x ['harga'];?></td>
            <td><?php echo $x ['kuantitas'];?></td>
            <td><?php echo $x ['total_harga'];?></td>
        </tr>
    <?php
}?>
    </table>
    </center>
</div>
</body>
</html>