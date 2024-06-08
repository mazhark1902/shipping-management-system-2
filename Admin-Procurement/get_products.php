<?php
include 'dbconnect.php';

$sql = "SELECT * FROM Product";
$result = $conn->query($sql);
    
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="product" data-id="' . $row["id"] . '">';
        echo '<h4>' . $row["name"] . '</h4>';
        echo '<input type="number" class="quantity" min="0" max="99" value="0">';
        echo '</div>';
    }
} else {
    echo "No products found";
}
?>
