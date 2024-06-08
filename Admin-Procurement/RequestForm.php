<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style>
        .product-card {
            margin: 10px;
            padding: 10px;
            max-width: 18rem;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        #notification {
            width: 50%;
            background-color: #d4edda;
            color: #155724;
        }
        #overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 2;
            cursor: pointer;
        }
    </style>
    <title>Request Form</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-truck"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Q-rim</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider" />
        <!-- Heading -->
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file"></i>
            <span>Order Form</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Order :</h6>
              <a class="collapse-item" href="RequestForm.php">Request Form</a>
              <a class="collapse-item" href="datarequest.php">Data Of Request</a>
            </div>
          </div>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-comments"></i>
            <span>Messages</span>
          </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider" />
        <!-- Heading -->
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <!-- Sidebar Message -->
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->

              <!-- Nav Item - Alerts -->

              <!-- Nav Item - Messages -->

              <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Procurement</span>
                  <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
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
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Shipping Request Form</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
            <div class="container">
        <form method="post" action="submit.php">
            <div class="row">
                <?php
                include 'dbconnect.php';
                $sql = "SELECT ProductId, name, image FROM Product";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-sm-12 col-md-6 col-lg-3">';
                        echo '<div class="card product-card">';
                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" class="card-img-top product-image"/>';
                        echo '<div class="card-body">';
                        echo '<h6 class="card-title">'.$row["name"].'</h6>';
                        echo '<input type="number" class="form-control" id="product_'.$row["ProductId"].'" name="products['.$row["ProductId"].']" min="0">';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
            <br>
            <div class="form-group">
                <label for="penerima">Penerima:</label>
                <input type="text" class="form-control" id="penerima_shipping" name="penerima_shipping">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" class="form-control" id="contact" name="contact">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div id="notification" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; padding: 20px; border-radius: 5px;">
        Data request sudah dikirimkan ke admin Distribution
    </div>
    <div id="overlay"></div>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'post',
                    data: $(this).serialize(),
                    success: function() {
                        $('#notification').show();
                        $('#overlay').show();
                        setTimeout(function(){
                            $('#notification').hide();
                            $('#overlay').hide();
                            location.reload();
                        }, 2000);
                    }
                });
            });
        });
    </script>
            </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <br>
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; MRP Group 3</span>
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
            <a class="btn btn-primary" href="../login.html">Logout</a>
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
</html>
