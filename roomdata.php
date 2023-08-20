<?php
require('dbconnect.php');

$room_type=$_POST['room_type'];
$amount=$_POST['amount'];
$room_id=$_POST['room_id'];
$room_name=$_POST['room_name'];
$room_number=$_POST['room_number'];

$sql = "INSERT INTO room(room_type,amount,room_id,room_name,room_number)
        VALUES('$room_type','$amount','$room_id','$room_name','$room_number')";

$result=mysqli_query($con,$sql);
if ($result) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='room.php';</script>";
}
?>
