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
        <h1>BAKERY</h1>
    </div>

    <div class="nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="menubakery.php">Menu Bakery</a></li>
            <li><a href="menucustomer.php">Menu Customer</a></li>
            <li><a href="menutransaksi.php">Menu Transaksi</a></li>
        </ul>
    </div>
    <center>
        <div class"box">
    <h2 style="text-align: center;margin-bottom: 20px">BAKERY</h2>
    <a href="tambahbakery.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Bakery</a>
    <table border="1" cellspacing="0" cellpadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
        <tr>
            <th>No</th>
            <th>Nama Roti</th>
            <th>Harga</th>
            <th>Stock</th>
        </tr>
        <?php
        $no=1;
        foreach ($dbbakeryshop->tampilbakery() as $x) {
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $x ['nama_roti'];?></td>
            <td><?php echo $x ['harga'];?></td>
            <td><?php echo $x ['stock'];?></td>
        </tr>
    <?php
}?>
    </table>
    </center>
</div>
</body>
</html>