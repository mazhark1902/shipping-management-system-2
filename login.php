<?php
include 'dbconnect.php';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Query untuk mencari user
$query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Login berhasil
    $message = "Login berhasil";
    $redirect = $role == 'procurement' ? 'Admin-Procurement/index.php' : 'Admin-Shipping/index.php';
} else {
    // Login gagal
    $message = "Login gagal";
    $redirect = 'login.html';
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $message; ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <script type='text/javascript'>
        $(document).ready(function(){
            $('#myModal').modal('show');
            setTimeout(function() {
                window.location.href = '<?php echo $redirect; ?>';
            }, 1500);
        });
    </script>
  </body>
</html>
