<html><head>
<?php include("connect.php"); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/css/main-style.css" rel="stylesheet">

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

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
                    
                    
                    
                    <li class="selected">
                        <a href="index.php"><i class="fa fa-table fa-fw"></i>Manajemen Admin</a>
                    </li>
                    <li>
                        <a href="tabel2.php"><i class="fa fa-table fa-fw"></i>Tabel Harga</a>
                    </li>
                    <li>
                        <a href="tabel3.php"><i class="fa fa-table fa-fw"></i>Tabel Galeri</a>
                    </li>
                    <li>
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
                    <h1 class="page-header">Manajemen Admin</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <form method="post">
                            <?php include("tambahadmin.php"); ?>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah" >Tambahkan Data Admin</button>
                            </form>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                    
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 185px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending">
                                                Nama Admin
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 242px;" aria-label="Browser: activate to sort column ascending">
                                                Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 222px;" aria-label="Platform(s): activate to sort column ascending">
                                                Password
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 159px;" aria-label="Engine version: activate to sort column ascending">
                                                Ubah
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 114px;" aria-label="CSS grade: activate to sort column ascending">
                                                Hapus
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $query="SELECT * FROM admin";
                                        $hasilselect=mysqli_query($connection,$query);
                                        while ($row=mysqli_fetch_array($hasilselect)) { ?>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1"><?php echo $row['nama_lengkap'] ?></td>
                                                <td class=" "><?php echo $row['email'] ?></td>
                                                <td class=" "><?php echo $row['password'] ?></td>
                                                <td class="center "><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $row['id_admin'] ?>">EDIT</button></td>
                                                <td class="center "><button class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $row['id_admin'] ?>">HAPUS</button></td>
                                            </tr>

                                            <?php include("editadmin.php"); ?>
                                            <?php include("hapusadmin.php"); ?>

                                        <?php
                                        }
                                     ?>
                                    

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
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