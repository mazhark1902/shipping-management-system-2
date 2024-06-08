
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin Shipping</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <style>
        .form-group {
            display: flex;
            flex-direction: column; /* Change to column direction */
            align-items: flex-start; /* Align items to the start */
            margin-bottom: 15px; /* Add some space between form groups */
            font-size: 16px; /* Increase the font-size */
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%; /* Make input fields take full width */
            margin-bottom: 8px; /* Add some space below each input field */
            padding: 10px; /* Add some padding */
            border: 1px solid #ccc; /* Add a grey border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            font-size: 16px; /* Increase the font-size */
            font-weight: 400; /* Make the font weight normal */
            font-family: 'Nunito', sans-serif; /* Use the Nunito font */
        }
        
        .card {
            width: 70%; /* Increase the width of the card */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); /* Add shadow to the card */
            transition: 0.3s; /* Add transition */
            background-color: #f8f9fa; /* Add a light grey background color */
            border-radius: 10px; /* Rounded borders */
            margin: 10px; /* Add some space between cards */
            padding: 10px; /* Add some padding */
            font-size: 16px; /* Increase the font-size */
            font-weight: 400; /* Make the font weight normal */
            font-family: 'Nunito', sans-serif; /* Use the Nunito font */
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); /* Add hover effect */
        }
        .submit-button {
            text-align: right; /* Align the button to the right */
        }
    </style>
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-truck"></i>
            <span>Shipping</span>
          </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-map"></i>
            <span>Tracking</span>
          </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-comments"></i>
            <span>Messages</span>
          </a>
        </li>





        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
            </form>

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
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">Alerts Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 12, 2019</div>
                      <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 7, 2019</div>
                      $290.29 has been deposited into your account!
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 2, 2019</div>
                      Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                  </a>
                  <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-envelope fa-fw"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                  <h6 class="dropdown-header">Message Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                      <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                      <div class="status-indicator"></div>
                    </div>
                    <div>
                      <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                      <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                      <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                      <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                      <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                      <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                      <div class="small text-gray-500">Chicken the Dog · 2w</div>
                    </div>
                  </a>
                  <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Shipping</span>
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
            <h1 class="h3 mb-2 text-gray-800">Form Shipping (2/3)</h1>
            <p class="mb-4">
             
            </p>
            <?php
    include 'dbconnect.php';

    $id_request = $_GET['id_request']; // Ambil id_request dari URL

    // Query untuk mengambil data dari tabel requestshipping
    $query = $conn->query("SELECT * FROM requestshipping WHERE id_request = $id_request");
    $data = $query->fetch_assoc();

    // Query untuk mengambil data dari tabel category
    $query2 = $conn->query("SELECT * FROM category");
    $categories = $query2->fetch_all(MYSQLI_ASSOC);

    // Query untuk mengambil data dari tabel method_shipping
    $query3 = $conn->query("SELECT * FROM method_shipping");
    $methods = $query3->fetch_all(MYSQLI_ASSOC);

    // Query untuk mengambil data dari tabel driver
    $query4 = $conn->query("SELECT * FROM driver");
    $drivers = $query4->fetch_all(MYSQLI_ASSOC);
    ?>

    <div class="container">
        <div class="card mx-auto" style="width: 100%; ;">
            <div class="card-header"><b>Input Shipping</b></div>
            <div class="card-body">
                <form action='process3.php' method='post'>
                    <div class="form-group">
                        ID Shipping: <input type='text' name='shipping_id' value='<?php echo $data['id_request']; ?>' readonly>
                        Shipping Method: <select id='method_id' name='method_id' onchange='filterDrivers()'>
                            <?php foreach ($methods as $method) {
                                echo "<option value='" . $method['method_id'] . "'>" . $method['method_name'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        Category: <select name='category_id'>
                            <?php foreach ($categories as $category) {
                                echo "<option value='" . $category['category_id'] . "'>" . $category['category_name'] . "</option>";
                            } ?>
                        </select>
                        Address Shipment: <input type='text' name='address' value='<?php echo $data['Address']; ?>' readonly>
                    </div>
                    <div class="form-group">
                        Payload: <input type='text' name='payload'>
                        Volume: <input type='text' name='volume'>
                    </div>
                    <div class="form-group">
                        Date Created: <input type='date' name='date_created'>
                        Date Updated: <input type='datetime-local' name='date_updated'>
                    </div>
                    <div class="form-group">
                        Distance: <input type='text' name='distance'>
                        Estimated Time: <input type='text' name='estimated_time'>
                    </div>
                    <div class="form-group">
                        Fragile: <select name='fragile'>
                            <option value='Yes'>Yes</option>
                            <option value='No'>No</option>
                        </select>
                        Note: <textarea name='note'></textarea>
                    </div>
                    <div class="form-group">
                        Driver: <select id='driver_id' name='driver_id'>
                            <?php foreach ($drivers as $driver) {
                                echo "<option value='" . $driver['driver_id'] . "' class='driver_option' data-method-id='" . $driver['method_id'] . "'>" . $driver['driver_name'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group submit-button">
                        <input type='submit' value='Confirm' class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function filterDrivers() {
        var methodId = document.getElementById('method_id').value;
        var driverOptions = document.getElementsByClassName('driver_option');
        for (var i = 0; i < driverOptions.length; i++) {
            if (driverOptions[i].getAttribute('data-method-id') == methodId) {
                driverOptions[i].style.display = 'block';
            } else {
                driverOptions[i].style.display = 'none';
            }
        }
    }
    filterDrivers();
    </script>


          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
<br>
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
