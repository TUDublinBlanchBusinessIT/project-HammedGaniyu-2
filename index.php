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

<form action="insert.php" method="POST">

Brand:
<select name="brand_id">
<?php
while ($row = mysqli_fetch_assoc($brandResult)) {
    echo "<option value='" . $row['brand_id'] . "'>" . $row['brand_name'] . "</option>";
}
?>
</select>
<br><br>

Model:
<input type="text" name="model">
<br><br>

<input type="submit" value="Add Sneaker">

</form>

</body>
</html>

