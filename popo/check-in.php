<?php
    include("connect.php");
    if (isset($_POST['check-in']) ) {
        $booking_id = $_GET['booking_id'];
        $sql = "UPDATE booking SET status = 'CI' WHERE booking_id = $booking_id";
        $change_sta = "UPDATE rooms SET status = 'UAV' WHERE room_num = (SELECT room_num from booking where booking_id = $booking_id)";
        $result = mysqli_query($con, $sql);
        $result2 = mysqli_query($con, $change_sta);
        echo "<script>window.location='man-booking.php';</script>";
    } else {
        echo $var;
    }
    mysqli_close($con);
?>