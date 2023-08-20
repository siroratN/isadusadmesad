<?php
require ("dbconnect.php");
$ids=$_GET["id"];

$sql="DELETE FROM room WHERE room_id = '$ids'";
$result = mysqli_query($con,$sql);
if ($result) {
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='room.php';</script>";
}
?>
