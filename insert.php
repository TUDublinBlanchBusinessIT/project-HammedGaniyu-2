<?php
include 'db.php'; 


$brand = $_POST['brand'];
$model = $_POST['model'];


$sql = "INSERT INTO sneakers (brand, model) VALUES ('$brand', '$model')";

if ($conn->query($sql) === TRUE) {
    echo "Sneaker added successfully!<br>";
    echo "<a href='index.php'>Add another sneaker</a><br>";
    echo "<a href='display.php'>View sneaker list</a>";
} else {
    echo "Error inserting sneaker: " . $conn->error;
}

$conn->close();
?>
