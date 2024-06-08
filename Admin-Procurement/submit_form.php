<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $penerima = $_POST['penerima'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $products = $_POST['products']; // array of product ids
    $quantities = $_POST['quantities']; // array of quantities

    $totalQty = array_sum($quantities);

    $sql = "INSERT INTO Requestshipping (penerima, Address, Contact, Time, TotalQty, Status) VALUES (?, ?, ?, NOW(), ?, 'not yet')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $penerima, $address, $contact, $totalQty);
    $stmt->execute();

    $id_request = $conn->insert_id;

    for ($i = 0; $i < count($products); $i++) {
        $sql = "INSERT INTO Requestshippingproduct (RequestShippingId, ProductId, Quantity) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iii", $id_request, $products[$i], $quantities[$i]);
        $stmt->execute();
    }
}
?>
