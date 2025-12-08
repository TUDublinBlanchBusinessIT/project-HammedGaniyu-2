<?php
include "db.php";

$sql = "SELECT * FROM sneakers";
$sneakerResult = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($sneakerResult)){

    $brandId = ['brand_id']

     $brandSql = "SELECT brand_name FROM brands WHERE brand_id = $brandId";
     $brandResult = mysqli_query($conn, $brandSql);
     $b = mysqli_fetch_assoc($brandResult);

      echo $b['brand_name'] . " " . $s['model'] . "<br>";


   
 
}






?>