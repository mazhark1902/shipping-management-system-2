<?php
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $shipping_id = $_POST['shipping_id'];
    $method_id = $_POST['method_id'];
    $category_id = $_POST['category_id'];
    $address = $_POST['address'];
    $payload = $_POST['payload'];
    $volume = $_POST['volume'];
    $date_created = $_POST['date_created'];
    $date_updated = $_POST['date_updated'];
    $distance = $_POST['distance'];
    $estimated_time = $_POST['estimated_time'];
    $fragile = $_POST['fragile'];
    $note = $_POST['note'];
    $driver_id = isset($_POST['driver_id']) ? $_POST['driver_id'] : null; // Cek apakah driver_id ada
    $status = 'Item accepted by driver'; // Set status as 'collected'
    $tracking_num = rand(1000, 9999);

// Add $tracking_num to the bind_param function
    $query = $conn->prepare("INSERT INTO shipping (shipping_id, method_id, category_id, address, payload, volume, date_created, date_update, distance, estimated_time, fragile, note, driver_id, status, tracking_num) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $query->bind_param("iiissdssdsssisi", $shipping_id, $method_id, $category_id, $address, $payload, $volume, $date_created, $date_updated, $distance, $estimated_time, $fragile, $note, $driver_id, $status, $tracking_num);
    $query->execute();

    if ($query->affected_rows > 0) {


        // Update status in requestshipping table
        $status_requestshipping = 'already';
        $query2 = $conn->prepare("UPDATE requestshipping SET Status = ? WHERE id_request = ?");
        $query2->bind_param("si", $status_requestshipping, $shipping_id);
        $query2->execute();

        if ($query2->affected_rows > 0) {

        } else {
            echo "Gagal memperbarui status.";
        }

        // Insert into tracking table
        $query3 = $conn->prepare("INSERT INTO tracking (shipping_id) VALUES (?)");
        $query3->bind_param("i", $shipping_id);
        $query3->execute();

        if ($query3->affected_rows > 0) {

        } else {
            echo "Gagal menyimpan data tracking.";
        }
    } else {
        echo "Gagal menyimpan data.";
    }

    // Kode baru dimulai di sini
    if ($query->affected_rows > 0 && $query2->affected_rows > 0 && $query3->affected_rows > 0) {
        // All data has been successfully saved
        // Redirect to process4.php
        header('Location: process4.php');
        exit;
    }   
}
?>
