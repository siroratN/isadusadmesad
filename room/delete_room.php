<?php
require ("dbconnect.php");
$ids=$_GET["id"];

$sql="DELETE FROM rooms WHERE room_number = '$ids'";
$result = mysqli_query($con,$sql);
if ($result) {
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='mnroom.php';</script>";
}
?>
