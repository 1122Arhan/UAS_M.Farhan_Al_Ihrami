<?php
//1.membuat koneksi
include_once('koneksi.php');

//2.mengambil seluruh nilai input dari variabel
$kd_menu = $_POST['kd_menu'];
$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];
$jenismenu = $_POST['jenis_menu'];
$status = $_POST['status_menu'];


//3.membuat query insert
$q = "INSERT INTO menu (kode_menu,nama,harga,kategori,statusmn)
 VALUES ('$kd_menu','$nama_menu','$harga','$jenismenu','$status')";

//4,menjalankan query
$simpan = mysqli_query($conn, $q);

//5.alihkan kehalaman index.php

?>

<script>
    document.location = "index.php";
</script>