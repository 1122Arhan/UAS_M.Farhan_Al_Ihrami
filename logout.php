<?php
session_start();
session_destroy();




setcookie("cid", $id, time() + (60 * 60 * 24 * 3), "/");
setcookie("cnama", $nama, time() + (60 * 60 * 24 * 3), "/");
setcookie("ckd_ptg", $kd_ptg, time() + (60 * 60 * 24 * 3), "/");


?>
<script>
    // document.location = "login.php";
</script>