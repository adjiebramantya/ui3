<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main-style.css" rel="stylesheet">

    <script src="assets/scripts/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/scripts/popper.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <?php Include("connect.php");?>

</head>

<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" style="width: 100%;" data-progress-text="100%" data-progress="99">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="">
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <form method="post">
                        <li><button name="keluar"><i class="fa fa-sign-out fa-fw"></i>Logout</button>
                        </li>
                        </form>

                        <?php if (isset($_POST["keluar"])) {
                            session_start();
                            session_unset();
                            session_destroy();
                            header("location:login.php");
                        } ?>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <?php 
                                session_start();
                                if (!isset($_SESSION["nama"])) {
                                    header("location:login.php");
                                } ?>
                                <div><?php echo $_SESSION["nama"]; ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    
                    
                    
                    <li>
                        <a href="index.php"><i class="fa fa-table fa-fw"></i>Manajemen Admin</a>
                    </li>
                    <li>
                        <a href="tabel2.php"><i class="fa fa-table fa-fw"></i>Tabel Harga</a>
                    </li>
                    <li>
                        <a href="tabel3.php"><i class="fa fa-table fa-fw"></i>Tabel Galeri</a>
                    </li>
                    <li class="selected">
                        <a href="tabel4.php"><i class="fa fa-table fa-fw"></i>Manajemen User</a>
                    </li>
                    <li>
                        <a href="tabel5.php"><i class="fa fa-table fa-fw"></i>Manajemen Artikel</a>
                    </li>
                    
                    
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Manajemen User</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
        
                        </div>
                        <div class="panel-body">
                            <form method="post">
                            <?php include("tambahuser.php"); ?>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah" >Tambahkan Data User</button>
                            </form>

            <?php
            $queryselect="SELECT * FROM user;";
            $resultselect= mysqli_query($connection,$queryselect);
            ?>
                        <table class="table tabled-striped table-hover">
                            
                                <thead>
                                   <tr>
                                    <th>ID User</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No. Telepon</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Email</th>
                                    <th>Kelola data</th>
                                   </tr> 
                                </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_array($resultselect)) { ?>
                            <tr>
                                <td><?php echo $row['id_user'] ?></td>
                                <td><?php echo $row['nama_lengkap'] ?></td>
                                <td><?php echo $row['jenis_kelamin'] ?></td>
                                <td><?php echo $row['alamat'] ?></td>
                                <td><?php echo $row['kota'] ?></td>
                                <td><?php echo $row['nohp'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $row['id_user'] ?>">Edit</button><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $row['id_user'] ?>">Hapus</button></td>
                            </tr>

                            <?php include("edituser.php"); ?>
                            <?php include("hapususer.php"); ?>

                            <?php }?>
                            </tbody>
                        </table>        
                        </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>




</body></html>