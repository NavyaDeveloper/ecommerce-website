
<?php include("connection.php")?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jwellery Home Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap/css/all.min.css">
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <!-- Custom fonts for this template-->

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admindashboard.php">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Tanishq </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="customer_bill_list.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Orders</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Utilities</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                 

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                        <a class="navbar-brand " style="margin-left:30px;text-decoration:none">
            <img  src="tanishq_logo.png"
              alt="" width="100" height="64" class="d-inline-block align-text-top">
          </a>
                     
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class=" align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">List of Purchasers</h1>
                        <div class="container ">
    <table class='table table-success table-striped  table-hover'>
    <thead>
      <tr class=" text-center">
        <th scope='col'>S.NO</th>
        <th scope='col'>Name Of The Customers</th>
        <th scope='col'>State</th> 
       <th scope='col'>Address</th>
       <th scope='col'>Phone Number</th>
       <th scope='col'>Date Of Purchase</th>
      </tr>
    </thead> 
<tbody>
  <?php
   
    $query="SELECT * from orders";
    $s=1;
    $query_run=mysqli_query($connect,$query);
    if(mysqli_num_rows($query_run)> 0){
    while($row = mysqli_fetch_assoc($query_run)){
        $uname=$row['uname'];
        $address=$row['address'];
        $state=$row['state'];
        $phno=$row['phno'];
        $id=$row['id'];
        $date=$row['date'];
echo"

<tr class=' text-center'>
      <th scope='row'> $s </th>
      <td>$uname</td>
      <td>$state</td>
      <td>$address</td>
      <td>$phno</td>
      <td>$date</td>
      </tr>
  ";

$s++;
    }
}
else{
  echo "No record found";
}
?>
</tbody>
</table>
</div>
                        <a href="report.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SivaKumari@2022</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
<script>
    new Chartist.Line('.line-chart', {
    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
    series: [
        [12, 9, 7, 8, 5],
        [2, 1, 3.5, 7, 3],
        [1, 3, 4, 5, 6]
    ]
    }, {
    fullWidth: true,
    chartPadding: {
        right: 40
    },
    plugins: [
        Chartist.plugins.tooltip()
    ]
});
    </script>
</html> 
