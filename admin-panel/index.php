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
                        <a href="index.php"><i class="fa fa-table fa-fw"></i>Tabel Grafik</a>
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
                    <h1 class="page-header">Tabel grafik</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                    
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 185px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending">
                                                Rendering engine
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 242px;" aria-label="Browser: activate to sort column ascending">
                                                Browser
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 222px;" aria-label="Platform(s): activate to sort column ascending">
                                                Platform(s)
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 159px;" aria-label="Engine version: activate to sort column ascending">
                                                Engine version
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 114px;" aria-label="CSS grade: activate to sort column ascending">
                                                CSS grade
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 1.0</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 1.5</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 2.0</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 3.0</td>
                                            <td class=" ">Win 2k+ / OSX.3+</td>
                                            <td class="center ">1.9</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Camino 1.0</td>
                                            <td class=" ">OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Camino 1.5</td>
                                            <td class=" ">OSX.3+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape 7.2</td>
                                            <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape Browser 8</td>
                                            <td class=" ">Win 98SE+</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape Navigator 9</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Mozilla 1.0</td>
                                            <td class=" ">Win 95+ / OSX.1+</td>
                                            <td class="center ">1</td>
                                            <td class="center ">A</td>
                                        </tr></tbody>
                                </table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
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