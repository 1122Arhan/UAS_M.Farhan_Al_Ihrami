<?php
//1.membuat koneksi
include_once('koneksi.php');

//2.mengambil seluruh nilai input dari variabel
$kd_menu = uniqid();
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$statusmn = $_POST['statusmn'];


//3.membuat query insert
$q = "INSERT INTO menu (kode_menu,nama,harga,kategori,statusmn)
 VALUES ('$kd_menu','$nama','$harga','$kategori','$statusmn')";

//4,menjalankan query
$simpan = mysqli_query($conn, $q);

//5.alihkan kehalaman index.php

?>

<script>
    // document.location = "index.php";
</script>