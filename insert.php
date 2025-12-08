<?php
include 'db.php'; 


$brand = $_POST['brand'];
$model = $_POST['model'];


$sql = "INSERT INTO sneakers (brand_id, model) VALUES ('$brand_id', '$model')";
mysqli_query($conn, $sql)

echo "Sneaker Added"
?>
