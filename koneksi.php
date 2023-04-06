<?php
    class database{
        var $host = 'localhost';
        var $name = 'root';
        var $pw = '';
        var $db = 'db_skincare';

        function __construct(){
            $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
            mysqli_select_db($koneksi, $this->db);
        }
        // Koneksi bakery
        function tampilbakery(){
            $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM skincare");
            $hasil = [];
            while($d = mysqli_fetch_array($data)){
                $hasil[] =$d;
            }
            return $hasil;
        }
        //koneksi tambahskincare
        function tambahskincare($jenis_skincare,$brand_skincare,$name_skincare,$harga_skincare){
            $koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
            mysqli_query($koneksi, "INSERT INTO skincare VALUES('', '$nama_roti','$harga','$stock')");
        }
        // Koneksi customer
            function tampilcustomer(){
                $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
                $data = mysqli_query($koneksi, "SELECT * FROM customer");
                $hasil = [];
                while($d = mysqli_fetch_array($data)){
                    $hasil[] = $d;
                }
                return $hasil;
        }
        // Koneksi tambahcustomer
            function tambahcustomer($nama,$no_hp,$alamat){
                $koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
                mysqli_query($koneksi, "INSERT INTO customer VALUES('', '$nama','$no_hp','$alamat')");
        }
        // Koneksi transaksi
        function tampiltransaksi(){
            $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
            $data = mysqli_query($koneksi, "SELECT transaksi.id_transaksi, customer.nama, bakery.nama_roti, transaksi.kuantitas, transaksi.total_harga, customer.id_customer, bakery.id_roti FROM customer INNER JOIN transaksi ON customer.id_customer=transaksi.id_customer INNER JOIN bakery ON bakery.id_roti=transaksi.id_roti");
            $hasil = [];
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        // Koneksi tambahtransaksi
            function tambahtransaksi($id_roti,$id_customer,$kuantitas,$total_harga){
                $koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
                mysqli_query($koneksi, "INSERT INTO transaksi VALUES('', '$id_roti', '$id_customer','$kuantitas','$total_harga')");
        }

    }
?>