<?php
include 'db.php'; 


$brand_id = $_POST['brand_id'];
$model = $_POST['model'];
$colorway = $_POST['colorway'];
$size = $_POST['size'];

$brandSql = "SELECT brand_name FROM brands WHERE brand_id = $brand_id";
$brandResult = mysqli_query($conn, $brandSql);
$brandRow = mysqli_fetch_assoc($brandResult);
$brand = $brandRow['brand_name'];


$sql = "INSERT INTO sneakers (brand_id, brand, model, colorway, size) VALUES ('$brand_id', '$brand', '$model', '$colorway' ,'$size')";
mysqli_query($conn, $sql);

echo "Sneaker Added Successfully<br><br>";
echo "<a href='index.php'>Home</a>";



?>
