<?php include_once("indexx.php");
session_start();
$cusid = $_SESSION['cus_id'];
$rn = $_SESSION['rm'];
$guests = $_SESSION["max_guests"];
$ck = $_SESSION['check_in'];
$co = $_SESSION['check_out'];
$sql = "INSERT INTO booking(room_num,guest,cus_id,check_in,check_out)
        VALUES('$rn','$guests','$cusid','$ck','$co')";
$result=mysqli_query($con,$sql);
if ($result) {
    header("Location: ../popo/activity.php");
}
else {
    echo("Error description: " . mysqli_error($con));
}
?>  

