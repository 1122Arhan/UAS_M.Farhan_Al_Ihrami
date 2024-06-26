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
        <?php
        include_once('nav.php');
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <?php
            include_once('sb.php');
            ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <form action="pp.php" method="POST">
                        <div class="row mb-2">
                            <div class="col-sm-2">
                                <input type="text" name="no_meja" class="form-control" placeholder="No Meja">
                                <input type="number" name="qty2" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" name="tombol" class="btn btn-primary btn-block">Pesan Sekarang</button>
                            </div>
                            <div class="col-sm-2"></div>


                            <div class="col-sm-4"></div>
                            <div class="col-sm-2">
                                <a href="form_menu.php" class="btn btn-primary btn-block">+ Tambah Menu</a>
                            </div>
                        </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">


                <div class="input-group mb-3">

                </div>
                <!-- /.row -->
                <div class="row">

                    <?php

                    //1.membuat koneksi
                    include_once("koneksi.php");

                    //2.menampilkan semua isi tabel
                    $qry = "SELECT * FROM menu";

                    //2.menjalankan query
                    $menu = mysqli_query($conn, $qry);
                    $i = 1;

                    foreach ($menu as $mn) { ?>



                        <div class="col-6">

                            <input type="hidden" name="kode_menu" value="<?php echo $mn['kode_menu'] ?>">
                            <input type="hidden" name="harga" value="<?php echo $mn['harga'] ?>">

                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title"><?= $mn["nama"]; ?></h3>

                                    <div class="card-tools">
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <div class="card-body">



                                        <table class="table table-striped table-responsive-sm">
                                            <tr>

                                                <td>Harga</td>

                                                <td>:</td>

                                                <td class="card-text"><?= $mn["harga"]; ?></td>


                                            </tr>

                                            <tr>

                                                <td>Kategori</td>

                                                <td>:</td>

                                                <td class="card-text"><?= $mn["kategori"]; ?></td>

                                            </tr>

                                            <tr>

                                                <td>Status</td>

                                                <td>:</td>

                                                <td class="card-text"><?= $mn["statusmn"]; ?></td>

                                            </tr>

                                            <tr>

                                                <td>Qty</td>

                                                <td>:</td>

                                                <td class="card-text"><input type="number" name="qty"></td>
                                            </tr>

                                            <tr>
                                                <td><a href="fe.php?id=<?php echo $mn['id'] ?>" class="btn btn-primary">EDIT</a></td>
                                                <td></td>
                                                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $mn['id'] ?>">
                                                        DELETE
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>


                        <!-- /.modal -->

                        <div class="modal fade" id="hapus<?php echo $mn['id'] ?>">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p>Anda Yakin Ingin Menghapus Menu <b><?php echo $mn['nama'] ?></b> ? </p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <a href="delete.php?id=<?php echo $mn['id'] ?>" class="btn btn-danger">Ya</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                    <?php $i++;
                    } ?>

                </div>
                <!-- /.row -->
                </form>
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
    <script src="../dist/js/demo.js"></script>
</body>

</html>