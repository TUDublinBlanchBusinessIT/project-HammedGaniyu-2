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

    $brandId = $s['brand_id'];

    $brandSql = "SELECT brand_name FROM brands WHERE brand_id = $brandId";
    $brandResult = mysqli_query($conn, $brandSql);
    $b = mysqli_fetch_assoc($brandResult);

    echo "<div class='item'>";
    echo "<div class='brand'>" . $b['brand_name'] . "</div>";
    echo "<div>" . $s['model'] . "</div>";
    echo "</div>";
}
?>

</body>
</html>
