<?php
include "db.php";

$sneakerSql = "SELECT * FROM sneakers";
$sneakerResult = mysqli_query($conn, $sneakerSql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sneaker List</title>
    <style>
        body { font-family: Arial; padding: 20px; }

        .item {
            margin-bottom: 8px;
            padding: 6px;
            border-bottom: 1px solid #ccc;
            width: 250px;
        }

        .brand {
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Sneakers</h2>

<?php
while ($s = mysqli_fetch_assoc($sneakerResult)) {

     echo $s['brand'] . "<br>";
     echo "Model: " . $s['model'] . "<br>";
     echo "Colorway: " . $s['colorway'] . "<br>";
     echo "Size: " . $s['size'] . "<br><br>";
    

}
?>
<a href="index.php">Home</a>

</body>
</html>
