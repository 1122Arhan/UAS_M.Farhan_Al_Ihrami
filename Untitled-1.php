<?php
ini_set('display_errors', 0); // Berguna untuk meng Hidden Semua Error
// ini_set('display_errors', 1); // Berguna untuk un Hidden Semua Error
session_start();
if(isset($_SESSION['s_id']) OR isset($_COOKIE['c_id'])){
?>

  <script>
    document.location = "index.php";
  </script>
<?php
}



include('query/koneksi.php');
$pesan_gagal = "";
    if (isset($_POST['btn_login'])){
        #Menggambil data imputan dari form login
        $username =$_POST['username'];
        $password =$_POST['password'];

        $password_md5 = md5($password);

        #pengecekan Username dan password tersedia atau tidak pada
        $sql = "SELECT * FROM tbl_login where username = '$username' AND password = '$password_md5'";

        $qry = mysqli_query($koneksi, $sql);
        $cek_login = mysqli_num_rows($qry);

        #jika data tidak ada
        if($cek_login == 0) {
            $pesan_gagal = '<div class="card bg-danger text-white mb-4">
                <div class="card-body">Username/Password Salah</div>
            </div>';
        

        #jika data ada
        }else{
            $ambil = mysqli_fetch_array($qry);
            $id_login = $ambil['id_login'];
            $nama = $ambil['nama'];
            $username = $ambil['username'];
            $password = $ambil['password'];

            #simpan data cookie
            if($_POST['remember'] == "ok") {
                setcookie("c_id", $id_login, time() + (60 * 60 * 24 * 356), "/");
                setcookie("c_nama", $nama, time() + (60 * 60 * 24 * 356), "/");
                setcookie("c_username", $username, time() + (60 * 60 * 24 * 356), "/");
                setcookie("c_password", $password, time() + (60 * 60 * 24 * 356), "/");
                ?>
                    <script>
                        document.location="index.php";
                    </script>
                <?php
            }

        #simpan data session
        $_SESSION['s_id'] = $id_login;
        $_SESSION['s_nama'] = $nama;
        $_SESSION['s_username'] = $username;
        $_SESSION['s_password'] = $password; 

        ?>
            <script>
                document.location="index.php";
            </script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">

                                        <form method="post" action="login.php">   
                                            <?=$pesan_gagal?>                                         
                                            <div class="form-floating mb-3">
                                                <input name="username" class="form-control" id="inputEmail" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail" >Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword" >Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input name="remember" class="form-check-input" id="inputRememberPassword" type="checkbox" value="ok" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button type="submit" name="btn_login" class="btn btn-primary" href="index.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Buat Akun </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>