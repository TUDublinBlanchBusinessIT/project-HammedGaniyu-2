<?php
include "db.php";

$brandSql = "SELECT * FROM brands";
$brandResult = mysqli_query($conn, $brandSql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Sneaker</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            padding: 5px;
            margin-top: 5px;
            width: 200px;
        }
        input[type="submit"] {
            margin-top: 15px;
            width: 120px;
            padding: 6px;
        }
    </style>
</head>
<body>

<h2>Add a Sneaker</h2>

<form action="insert.php" method="POST">

    <label>Brand:</label>
    <select name="brand_id">
        <?php
        while ($row = mysqli_fetch_assoc($brandResult)) {
            echo "<option value='" . $row['brand_id'] . "'>" . $row['brand_name'] . "</option>";
        }
        ?>
    </select>

    <label>Model:</label>
    <input type="text" name="model">

    <input type="submit" value="Add Sneaker">

</form>

</body>
</html>
