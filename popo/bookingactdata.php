<?php require("../dbconnect.php");
session_start();
$cusid = $_SESSION['cus_id'];
$guests = $_POST['num'];
echo $guests;
$date = $_POST['dateact'];
$typeact = $_GET['test'];

$sql2= "SELECT act_id from activity where act_name='$typeact'";
$sql3= "SELECT booking_id from booking where cus_id='$cusid'";
foreach ($con->query($sql2) as $row) {
    $typeid = $row['act_id'];
}
foreach ($con->query($sql3) as $row) {
    $bkid = $row['booking_id'];
}
$sql1 = "INSERT INTO booking_activity(booking_id,act_id,activity_member,act_date)
        VALUES('$bkid','$typeid','$guests','$date')";

$result=mysqli_query($con,$sql1);
// if ($result) {
//     echo $date;
// }
// else {
//     echo("Error description: " . mysqli_error($con));
// }
?>  
