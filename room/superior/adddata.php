<?php
require('C:\xamppp\htdocs\isadusadmesad\dbconnect.php');

// $type_id=$_POST['type_name'];
$floor=$_POST['floor'];
$room_num=$_POST['room_num'];
$building_id=$_POST['building'];
$max_guest=$_POST['amount'];
$detail=$_POST['detail'];
$price=$_POST['price'];

$finalroomnum = $building_id.$floor.$room_num;
$sql = "INSERT INTO rooms(room_num,floor,type_id,building_id,max_guest,detail,status,price)
        VALUES('$finalroomnum','$floor','2','$building_id','$max_guest','$detail','av','$price')";

$result=mysqli_query($con,$sql);
if ($result) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='mnroomsuite.php';</script>";
}
else {
    echo("Error description: " . mysqli_error($con));
}
?>

