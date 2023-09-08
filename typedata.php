<?php
require('dbconnect.php');

$type_id=$_POST['type_id'];
$type_name=$_POST['type_name'];
$price=$_POST['price'];
$total_rooms=$_POST['total_rooms'];

$sql = "INSERT INTO types(type_name,type_id,price,total_rooms)
        VALUES('$type_name','$type_id','$price','$total_rooms')";

$result=mysqli_query($con,$sql);
if ($result) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='room.php';</script>";
}
else {
    echo("Error description: " . mysqli_error($con));
}
?>
