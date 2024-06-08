<!DOCTYPE html>
<html>
<head>
    <title>Request Shipping Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .product-card {
            margin: 10px;
            padding: 10px;
            max-width: 18rem;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .product-image {
            width: 200px;
            height: 70px;
            margin-left: 22px;
            margin-top: 10px;
            margin-bottom: -12px;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Request Shipping Form</h2>
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
                        echo '<h5 class="card-title">'.$row["name"].'</h5>';
                        echo '<input type="number" class="form-control" id="product_'.$row["ProductId"].'" name="products['.$row["ProductId"].']" min="0">';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
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
</body>
</html>
