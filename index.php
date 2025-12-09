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
            $id = $row['brand_id'];
            $name = $row['brand_name'];
            echo "<option value = '$id'>$name</option>";
        }
        ?>
    </select>

    <label>Model:</label>
    <input type="text" name="model">

    <label>Colorway:</label>
    <input type="text" name="colorway">
    
    <label>Size:</label>
    <select name="size">
     <option value="4">4</option>   
     <option value="5">5</option>   
     <option value="6">6</option>
     <option value="7">7</option>
     <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
     <option value="11">11</option>
     <option value="12">12</option>
   </select>
   

    <input type="submit" value="Add Sneaker">
    
    

</form>

</body>
</html>
