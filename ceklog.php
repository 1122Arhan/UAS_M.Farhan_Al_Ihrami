<?php
session_start();
if (!isset($_SESSION['sid']) and !isset($_COOKIE['cid'])) {
?>
    <script>
        document.location = "login.php";
    </script>
<?php
}
if (isset($_SESSION['sid'])) {
    //variabel elemt session
    $l_id = $_SESSION['sid'];
    $l_nama = $_SESSION['snama'];
    $l_kd_ptg = $_SESSION['skd_ptg'];
} elseif (isset($_COOKIE['cid'])) {
    //variabel elemt cookie
    $l_id = $_COOKIE['cid'];
    $l_nama = $_COOKIE['cnama'];
    $l_kd_ptg = $_COOKIE['ckd_ptg'];
}
?>