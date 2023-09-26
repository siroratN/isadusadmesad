<?php
require('dbconnect.php');

$type_id=$_POST['type_name'];
$floor=$_POST['floor'];
$room_number=$_POST['room_number'];
$max_child=$_POST['max_child'];
$max_adult=$_POST['max_adult'];
$detail=$_POST['detail'];
$imagepath=$_POST['imagepath'];

$sql = "INSERT INTO rooms(room_number,floor,type_id,building_id,max_child,max_adult,detail,imagepath,status_room)
        VALUES('$room_number',$floor,'$type_id',NULL,'$max_child','$max_adult','$detail','$imagepath',NULL)";

$result=mysqli_query($con,$sql);
if ($result) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='test.php';</script>";
}
else {
    echo("Error description: " . mysqli_error($con));
}
?>
