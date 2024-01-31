<?php
include_once('ceklog.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once('nav.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <?php include_once('sb.php'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- /.row -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Menu</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="insertmenu.php" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Menu</label>
                                <input type="text" class="form-control" id="nama_menu" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="">Kode Menu</label>
                                <input type="text" class="form-control" id="kd_menu" name="kode_menu">
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Jenis Menu</label>
                                <select class="custom-select form-control-border" name="kategori" id="kategori">
                                    <option value="">Pilih Jenis Menu</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label class="form-label">Ketersediaan Menu</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statusmn" id="status_menu" value="tersedia">
                                    <label class="form-check-label" for="inlineRadio1">Tersedia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statusmn" id="status_menu" value="kosong">
                                    <label class="form-check-label" for="inlineRadio2">Kosong</label>
                                </div>
                            </div>

                            <button type="submit" value="submit" name="tombol" class="btn btn-primary btn-block">Submit</button>

                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
            <strong>Copyright &copy; 2014-2021
                <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
</body>

</html>