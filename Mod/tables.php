<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
                <a class="nav-link" href="AddVegicle.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Add Vegicle Details </span>
                </a>
                <a class="nav-link" href="AddCat.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Add Category </span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- sidebar Toggler (sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Cars</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>VIN Number</th>
                                            <th>Chassis Number</th>
                                            <th>Manufacturer</th>
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>Engine</th>
                                            <th>Emission</th>
                                            <th>Title2</th>
                                            <th>Accident Repair</th>
                                            <th>Odrollback</th>
                                            <th>Mcall</th>
                                            <th>Safatyg</th>
                                            <th>Contaminatoin</th>
                                            <th>Collision</th>
                                            <th>Malfunction</th>
                                            <th>Theft</th>
                                            <th>Fired</th>
                                            <th>Waterd</th>
                                            <th>Halld</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php // Veritabanı bağlantısını dahil et
                                        require_once 'db_connection.php';

                                        // SELECT sorgusunu hazırla
                                        $sql = "SELECT * FROM vegicledetails";

                                        // Sorguyu veritabanına gönder ve sonucu al
                                        $result = $conn->query($sql);

                                        // Sonuçta en az bir satır varsa tabloyu oluştur
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr>';
                                                echo '<td>' . $row['VIN'] . '</td>';
                                                echo '<td>' . $row['csNumber'] . '</td>';
                                                echo '<td>' . $row['Manifacture'] . '</td>';
                                                echo '<td>' . $row['Make'] . '</td>';
                                                echo '<td>' . $row['Model'] . '</td>';
                                                echo '<td>' . $row['Engine'] . '</td>';
                                                echo '<td>' . $row['Emission'] . '</td>';
                                                echo '<td>' . $row['Title2'] . '</td>';
                                                echo '<td>';
                                                if ($row['AccidentRepair'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['AccidentRepair'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['AccidentRepair'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['AccidentRepair'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Odrollback'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Odrollback'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Odrollback'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Odrollback'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Mrecall'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Mrecall'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Mrecall'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Mrecall'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Safatyg'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Safatyg'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Safatyg'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Safatyg'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Contaminatoin'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Contaminatoin'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Contaminatoin'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Contaminatoin'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Collision'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Collision'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Collision'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Collision'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Malfunction'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Malfunction'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Malfunction'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Malfunction'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Theft'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Theft'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Theft'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Theft'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Fired'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Fired'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Fired'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Fired'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Waterd'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Waterd'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Waterd'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Waterd'];
                                                }
                                                echo '</td>';
                                                echo '<td>';
                                                if ($row['Halld'] == 1) {
                                                    echo '<div class="oks"><span>Reported</span></div>';
                                                } elseif ($row['Halld'] == 2) {
                                                    echo '<div class="oks"><span>Not Reported</span></div>';
                                                } elseif ($row['Halld'] == 3) {
                                                    echo '<div class="oks"><span>No Data</span></div>';
                                                } else {
                                                    echo $row['Halld'];
                                                }
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        } else {
                                            echo 'Kayıt bulunamadı!';
                                        }

                                        // Veritabanı bağlantısını kapat
                                        $conn->close(); ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>