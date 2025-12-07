<?php
include "db.php";

$brandSql = "SELECT * FROM brands";
$brandResult = mysqli_query($conn, $brandSql);
?>


<!DOCTYPE html>
<html>
<head>
    <title> Sneaker Collection - Add Sneaker </title>
</head>
<body>

<h1>Add a Sneaker</h1>

<form action="insert.php" method="POST">
    <label>Brand:</label>
    <input type="text" name="brand" required><br><br>

    <label>Model:</label>
    <input type="text" name="model" required><br><br>

    <button type="submit">Add Sneaker</button>
</form>

<br><br>

<a href="display.php">View All Sneakers</a>

</body>
</html>
