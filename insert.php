<?php
include 'db.php'; 


$brand_id = $_POST['brand_id'];
$model = $_POST['model'];


$sql = "INSERT INTO sneakers (brand_id, model) VALUES ('$brand_id', '$model')";
mysqli_query($conn, $sql);

echo "Sneaker Added";

?>
