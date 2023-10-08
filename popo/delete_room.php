<?php
     include("connect.php");
     if (isset($_POST['delete']) ) {
         $room_num = $_GET['room_num'];
         $sql = "DELETE FROM rooms WHERE room_num = $room_num;";
         $result = mysqli_query($con, $sql);
         echo "<script>window.location='man-standard.php';</script>";
     } else {
         echo $var;
     }
     mysqli_close($con);
?>  