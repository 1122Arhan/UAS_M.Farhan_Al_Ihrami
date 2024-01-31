<?php
//1.membuat koneksi
include_once('koneksi.php');

//2.mengambil seluruh nilai input dari variabel
$id      = $_POST['id'];
$kd_menu = uniqid();
$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];
$jenismenu = $_POST['jenis_menu'];
$status = $_POST['status_menu'];


//3.membuat query insert
$q = "UPDATE menu SET kode_menu='$kd_menu' , nama='$nama_menu' , harga='$harga' , kategori='$jenismenu' , statusmn='$status' WHERE id ='$id'";

//4,menjalankan query
$simpan = mysqli_query($conn, $q);

//5.alihkan kehalaman index.php

?>

<script>
    document.location = "index.php";
</script>