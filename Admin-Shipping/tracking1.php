<?php 
include 'dbconnect.php'; // Sertakan file koneksi ke database

function get_parcel_history($tracking_num, $conn) {
  $data = [];
  $sql = "SELECT t.status, t.date_updated 
          FROM shipping s
          INNER JOIN tracking t ON s.shipping_id = t.shipping_id
          WHERE s.tracking_num = '$tracking_num'
          ORDER BY t.date_updated ASC";
  $query = $conn->query($sql);
  if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
      $data[] = array(
        'status' => $row['status'],
        'date_updated' => date("M d, Y h:i A", strtotime($row['date_updated'])), // Menggunakan date_updated dari tabel tracking
      );
    }
    return json_encode($data);
  } else {
    return 2; // Menandakan nomor pelacakan tidak dikenal
  }
}

if (isset($_POST['action']) && $_POST['action'] == 'get_parcel_history') {
  $tracking_num = $_POST['ref_no'];
  $response = get_parcel_history($tracking_num, $conn); // Sertakan variabel koneksi $conn
  echo $response;
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  </head>
<body>
  <div class="col-lg-12">
    <div class="card card-outline card-primary">
      <div class="card-body">
        <div class="d-flex w-100 px-1 py-2 justify-content-center align-items-center">
          <label for="">Enter Tracking Number</label>
          <div class="input-group col-sm-5">
            <input type="search" id="ref_no" class="form-control form-control-sm" placeholder="Type the tracking number here">
            <div class="input-group-append">
              <button type="button" id="track-btn" class="btn btn-sm btn-primary btn-gradient-primary">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="timeline" id="parcel_history">

        </div>
      </div>
    </div>
  </div>
  <div id="clone_timeline-item" class="d-none">
    <div class="iitem">
      <i class="fas fa-box bg-blue"></i>
      <div class="timeline-item">
        <span class="time"><i class="fas fa-clock"></i> <span class="dtime">12:05 PM, Jan 01, 2023</span></span>
        <div class="timeline-body">
          asdasd
        </div>
      </div>
    </div>
  </div>
  <script>
  function track_now() {
    start_load();
    var tracking_num = $('#ref_no').val();
    if (tracking_num == '') {
      $('#parcel_history').html('');
      end_load();
    } else {
      $.ajax({
        url: 'tracking.php',
        method: 'POST',
        data: {
          action: 'get_parcel_history',
          ref_no: tracking_num
        },
        error: err => {
          console.log(err);
          alert_toast("An error occured", 'error');
          end_load();
        },
        success: function (resp) {
          if (typeof resp === 'object' || Array.isArray(resp) || typeof JSON.parse(resp) === 'object') {
            resp = JSON.parse(resp);
            if (Object.keys(resp).length > 0) {
              $('#parcel_history').html('');
              Object.keys(resp).map(function (k) {
                var tl = $('#clone_timeline-item .iitem').clone();
                tl.find('.dtime').text(resp[k].date_updated);
                tl.find('.timeline-body').text(resp[k].status);
                $('#parcel_history').append(tl);
              });
            } else if (resp == 2) {
              alert_toast('Unknown Tracking Number.', "error");
            }
          }
        },
        complete: function () {
          end_load();
        }
      });
    }
  }

  $('#track-btn').click(function () {
    track_now();
  });

  $('#ref_no').on('search', function () {
    track_now();
  });
</script>

</body>
</html>
