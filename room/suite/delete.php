<?php
require('C:\xamppp\htdocs\isadusadmesad\dbconnect.php');
$ids=$_GET["id"];

$sql="DELETE FROM rooms WHERE room_num = '$ids'";
$result = mysqli_query($con,$sql);
if ($result) {
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='mnroomsuite.php';</script>";
}
?>
