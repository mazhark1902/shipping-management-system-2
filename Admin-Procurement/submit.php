<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $penerima = $_POST['penerima_shipping'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $products = $_POST['products'];

    $totalQty = array_sum($products);

    $sql = "INSERT INTO Requestshipping (penerima_shipping, address, contact, TotalQty, status) VALUES (?, ?, ?, ?, 'not yet')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $penerima, $address, $contact, $totalQty);
    $stmt->execute();
    $last_id = $conn->insert_id;

    foreach ($products as $id => $qty) {
        if ($qty > 0) {
            $sql = "INSERT INTO Requestshippingproduct (id_request, ProductId, Quantity) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iii", $last_id, $id, $qty);
            $stmt->execute();
        }
    }

    header("Location: form.php");
}
?>
